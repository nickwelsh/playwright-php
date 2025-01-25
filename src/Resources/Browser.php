<?php

namespace PlaywrightPhp\Resources;

/**
 * @method void removeAllListeners(string|null $type, array $options)
 * @method-extended void removeAllListeners(string|null $type, array{ $behavior: string } $options)
 * @method mixed on('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('disconnected' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('disconnected' $event, callable(\PlaywrightPhp\Resources\Browser $browser): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed browserType()
 * @method-extended mixed browserType()
 * @method void close(array $options = [])
 * @method-extended void close(array{ $reason: string } $options = null)
 * @method mixed contexts()
 * @method-extended mixed contexts()
 * @method bool isConnected()
 * @method-extended bool isConnected()
 * @method \PlaywrightPhp\Resources\CDPSession newBrowserCDPSession()
 * @method-extended \PlaywrightPhp\Resources\CDPSession newBrowserCDPSession()
 * @method \PlaywrightPhp\Resources\BrowserContext newContext(\PlaywrightPhp\Resources\BrowserContextOptions $options = null)
 * @method-extended \PlaywrightPhp\Resources\BrowserContext newContext(\PlaywrightPhp\Resources\BrowserContextOptions $options = null)
 * @method \PlaywrightPhp\Resources\Page newPage(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Page newPage(array{ $acceptDownloads: bool, $baseURL: string, $bypassCSP: bool, $clientCertificates: mixed, $colorScheme: null|'light'|'dark'|'no-preference', $deviceScaleFactor: float, $extraHTTPHeaders: array{  }, $forcedColors: null|'active'|'none', $geolocation: array{ $latitude: float, $longitude: float, $accuracy: float }, $hasTouch: bool, $httpCredentials: array{ $username: string, $password: string, $origin: string, $send: string }, $ignoreHTTPSErrors: bool, $isMobile: bool, $javaScriptEnabled: bool, $locale: string, $logger: \PlaywrightPhp\Resources\Logger, $offline: bool, $permissions: mixed, $proxy: array{ $server: string, $bypass: string, $username: string, $password: string }, $recordHar: array{ $omitContent: bool, $content: string, $path: string, $mode: string, $urlFilter: string|mixed }, $recordVideo: array{ $dir: string, $size: array{ $width: float, $height: float } }, $reducedMotion: null|'reduce'|'no-preference', $screen: array{ $width: float, $height: float }, $serviceWorkers: string, $storageState: string|array{ $cookies: mixed, $origins: mixed }, $strictSelectors: bool, $timezoneId: string, $userAgent: string, $videoSize: array{ $width: float, $height: float }, $videosPath: string, $viewport: null|array{ $width: float, $height: float } } $options = null)
 * @method void startTracing(\PlaywrightPhp\Resources\Page $page = null, array $options = [])
 * @method-extended void startTracing(\PlaywrightPhp\Resources\Page $page = null, array{ $categories: mixed, $path: string, $screenshots: bool } $options = null)
 * @method mixed stopTracing()
 * @method-extended mixed stopTracing()
 * @method string version()
 * @method-extended string version()
 */
class Browser extends EventEmitter
{
}
