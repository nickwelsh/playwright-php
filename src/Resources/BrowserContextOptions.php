<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @property $acceptDownloads: bool
 * @property $baseURL: string
 * @property $bypassCSP: bool
 * @property $clientCertificates: mixed
 * @property $colorScheme: null|'light'|'dark'|'no-preference'
 * @property $deviceScaleFactor: float
 * @property $extraHTTPHeaders: array
 * @property $forcedColors: null|'active'|'none'
 * @property $geolocation: \PlaywrightPhp\Resources\Geolocation
 * @property $hasTouch: bool
 * @property $httpCredentials: \PlaywrightPhp\Resources\HTTPCredentials
 * @property $ignoreHTTPSErrors: bool
 * @property $isMobile: bool
 * @property $javaScriptEnabled: bool
 * @property $locale: string
 * @property $logger: \PlaywrightPhp\Resources\Logger
 * @property $offline: bool
 * @property $permissions: mixed
 * @property $proxy: array
 * @property $recordHar: array
 * @property $recordVideo: array
 * @property $reducedMotion: null|'reduce'|'no-preference'
 * @property $screen: array
 * @property $serviceWorkers: string
 * @property $storageState: string|array
 * @property $strictSelectors: bool
 * @property $timezoneId: string
 * @property $userAgent: string
 * @property $videoSize: array
 * @property $videosPath: string
 * @property $viewport: null|\PlaywrightPhp\Resources\ViewportSize
 */
class BrowserContextOptions extends BasicResource
{
}
