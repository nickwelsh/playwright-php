<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @property $args: mixed
 * @property $channel: string
 * @property $chromiumSandbox: bool
 * @property $devtools: bool
 * @property $downloadsPath: string
 * @property $env: array
 * @property $executablePath: string
 * @property $firefoxUserPrefs: array
 * @property $handleSIGHUP: bool
 * @property $handleSIGINT: bool
 * @property $handleSIGTERM: bool
 * @property $headless: bool
 * @property $ignoreDefaultArgs: bool|mixed
 * @property $logger: \PlaywrightPhp\Resources\Logger
 * @property $proxy: array
 * @property $slowMo: float
 * @property $timeout: float
 * @property $tracesDir: string
 */
class LaunchOptions extends BasicResource
{
}
