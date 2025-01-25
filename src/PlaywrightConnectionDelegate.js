"use strict";

const { ConnectionDelegate } = require("@zoon/rialto"),
  Logger = require("@zoon/rialto/src/node-process/Logger"),
  ConsoleInterceptor = require("@zoon/rialto/src/node-process/NodeInterceptors/ConsoleInterceptor"),
  StandardStreamsInterceptor = require("@zoon/rialto/src/node-process/NodeInterceptors/StandardStreamsInterceptor");

/**
 * Handle the requests of a connection to control Playwright.
 */
class PlaywrightConnectionDelegate extends ConnectionDelegate {
  /**
   * Constructor.
   *
   * @param  {Object} options
   */
  constructor(options) {
    super(options);

    this.browsers = new Set();

    this.addSignalEventListeners();
  }

  /**
   * @inheritdoc
   */
  async handleInstruction(instruction, responseHandler, errorHandler) {
    if (this.options.js_extra) {
      eval(this.options.js_extra);
    } else {
      const playwright = require("playwright");
      instruction.setDefaultResource(playwright[this.options.browser]);
    }

    let value = null;

    try {
      value = await instruction.execute();
    } catch (error) {
      if (instruction.shouldCatchErrors()) {
        return errorHandler(error);
      }

      throw error;
    }

    if (this.isInstanceOf(value, "Browser")) {
      this.browsers.add(value);
    }

    if (
      this.options.log_browser_console === true &&
      this.isInstanceOf(value, "Page")
    ) {
      value.on("console", this.logConsoleMessage);
    }

    responseHandler(value);
  }

  /**
   * Checks if a value is an instance of a class. The check must be done with the `[object].constructor.name`
   * property because relying on Playwright's constructors isn't viable since the exports aren't constrained by semver.
   *
   * @protected
   * @param  {*} value
   * @param  {string} className
   *
   */
  isInstanceOf(value, className) {
    const nonObjectValues = [undefined, null];

    return (
      !nonObjectValues.includes(value) &&
      !nonObjectValues.includes(value.constructor) &&
      (
          value.constructor.name === className
          || value.constructor.name === "Cdp" + className
          || value.constructor.name === "CDP" + className
      )
    );
  }

  /**
   * Log the console message.
   *
   * @param  {ConsoleMessage} consoleMessage
   */
  async logConsoleMessage(consoleMessage) {
    const type = consoleMessage.type();

    if (!ConsoleInterceptor.typeIsSupported(type)) {
      return;
    }

    const level = ConsoleInterceptor.getLevelFromType(type);
    const args = await Promise.all(
      consoleMessage.args().map((arg) => arg.jsonValue())
    );

    StandardStreamsInterceptor.startInterceptingStrings((message) => {
      Logger.log("Browser", level, ConsoleInterceptor.formatMessage(message));
    });

    ConsoleInterceptor.originalConsole[type](...args);

    StandardStreamsInterceptor.stopInterceptingStrings();
  }

  /**
   * Listen for process signal events.
   *
   * @protected
   */
  addSignalEventListeners() {
    for (let eventName of ["SIGINT", "SIGTERM", "SIGHUP"]) {
      process.on(eventName, () => {
        this.closeAllBrowsers();
        process.exit();
      });
    }
  }

  /**
   * Close all the browser instances when the process exits.
   *
   * Calling this method before exiting Node is mandatory since Puppeteer doesn't seem to handle that properly.
   *
   * @protected
   */
  closeAllBrowsers() {
    for (let browser of this.browsers.values()) {
      browser.close();
    }
  }
}

module.exports = PlaywrightConnectionDelegate;
