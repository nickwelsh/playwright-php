<?php

namespace PlaywrightPhp\Tests;

use PlaywrightPhp\Playwright;
use PlaywrightPhp\Resources\Browser;
use PlaywrightPhp\Resources\Frame;
use PlaywrightPhp\Resources\Page;
use Nesk\Rialto\Data\JsFunction;

/**
 * @method Page Page(Playwright $playwright)
 * @method Browser Browser(Playwright $playwright)
 * @method Frame Frame(Playwright $playwright)
 */
class ResourceInstantiator
{
    protected $resources = [];

    public function __construct(
        public array $browserOptions,
        public string $url
     ) {

        $this->resources = [
            'Accessibility' => function (Playwright $playwright) {
                return $this->Page($playwright)->accessibility;
            },
            'Browser' => function (Playwright $playwright): Browser {
                return $playwright->launch($this->browserOptions);
            },
            'BrowserContext' => function (Playwright $playwright) {
                return $this->Browser($playwright)->newContext();
            },
            'CDPSession' => function (Playwright $playwright) {
                return $this->Browser($playwright)->newBrowserCDPSession();
            },
            'ConsoleMessage' => function () {
                return new UntestableResource;
            },
            'Coverage' => function ($playwright) {
                return $this->Page($playwright)->coverage;
            },
            'Dialog' => function () {
                return new UntestableResource;
            },
            'ElementHandle' => function ($playwright) {
                return $this->Page($playwright)->querySelector('body');
            },
            'EventEmitter' => function (Playwright $playwright) {
                return $playwright->launch($this->browserOptions);
            },
            'FileChooser' => function () {
                return new UntestableResource;
            },
            'Frame' => function (Playwright $playwright) {
                return $this->Page($playwright)->mainFrame();
            },
            'JSHandle' => function (Playwright $playwright) {
                return $this->Page($playwright)->evaluateHandle(new JsFunction([], 'window'));
            },
            'Keyboard' => function (Playwright $playwright) {
                return $this->Page($playwright)->keyboard;
            },
            'Mouse' => function (Playwright $playwright) {
                return $this->Page($playwright)->mouse;
            },
            'Page' => function (Playwright $playwright): Page  {
                return $this->Browser($playwright)->newPage();
            },
            'TimeoutError' => function () {
                return new UntestableResource;
            },
            'Touchscreen' => function (Playwright $playwright) {
                return $this->Page($playwright)->touchscreen;
            },
            'Tracing' => function (Playwright $playwright) {
                return $this->Browser($playwright)->newContext()->tracing;
            },
            'Worker' => function (Playwright $playwright) {
                $page = $this->Page($playwright);
                $page->goto($this->url, ['waitUntil' => 'networkidle0']);
                return $page->workers()[0];
            },
        ];
    }

    public function getResourceNames(): array
    {
        return array_keys($this->resources);
    }

    public function __call(string $name, array $arguments)
    {
        if (!isset($this->resources[$name])) {
            throw new \InvalidArgumentException("The $name resource is not supported.");
        }

        return $this->resources[$name](...$arguments);
    }
}
