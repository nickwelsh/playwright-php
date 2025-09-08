<?php

namespace PlaywrightPhp;

use Composer\Semver\Semver;
use Exception;
use Nesk\Rialto\AbstractEntryPoint;
use Psr\Log\LoggerInterface;
use Symfony\Component\Process\Process;

/**
 * @method \PlaywrightPhp\Resources\Browser connectOverCDP(\PlaywrightPhp\Resources\ConnectOverCDPOptions&array $options)
 * @method-extended \PlaywrightPhp\Resources\Browser connectOverCDP(\PlaywrightPhp\Resources\ConnectOverCDPOptions&array{ $wsEndpoint: string } $options)
 * @method \PlaywrightPhp\Resources\Browser connect(\PlaywrightPhp\Resources\ConnectOptions&array $options)
 * @method-extended \PlaywrightPhp\Resources\Browser connect(\PlaywrightPhp\Resources\ConnectOptions&array{ $wsEndpoint: string } $options)
 * @method string executablePath()
 * @method-extended string executablePath()
 * @method \PlaywrightPhp\Resources\Browser launch(\PlaywrightPhp\Resources\LaunchOptions $options = null)
 * @method-extended \PlaywrightPhp\Resources\Browser launch(\PlaywrightPhp\Resources\LaunchOptions $options = null)
 * @method \PlaywrightPhp\Resources\BrowserContext launchPersistentContext(string $userDataDir, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\BrowserContext launchPersistentContext(string $userDataDir, array{ $acceptDownloads: bool, $args: mixed, $baseURL: string, $bypassCSP: bool, $channel: string, $chromiumSandbox: bool, $clientCertificates: mixed, $colorScheme: null|'light'|'dark'|'no-preference', $deviceScaleFactor: float, $devtools: bool, $downloadsPath: string, $env: array{  }, $executablePath: string, $extraHTTPHeaders: array{  }, $firefoxUserPrefs: array{  }, $forcedColors: null|'active'|'none', $geolocation: array{ $latitude: float, $longitude: float, $accuracy: float }, $handleSIGHUP: bool, $handleSIGINT: bool, $handleSIGTERM: bool, $hasTouch: bool, $headless: bool, $httpCredentials: array{ $username: string, $password: string, $origin: string, $send: string }, $ignoreDefaultArgs: bool|mixed, $ignoreHTTPSErrors: bool, $isMobile: bool, $javaScriptEnabled: bool, $locale: string, $logger: \PlaywrightPhp\Resources\Logger, $offline: bool, $permissions: mixed, $proxy: array{ $server: string, $bypass: string, $username: string, $password: string }, $recordHar: array{ $omitContent: bool, $content: string, $path: string, $mode: string, $urlFilter: string|mixed }, $recordVideo: array{ $dir: string, $size: array{ $width: float, $height: float } }, $reducedMotion: null|'reduce'|'no-preference', $screen: array{ $width: float, $height: float }, $serviceWorkers: string, $slowMo: float, $strictSelectors: bool, $timeout: float, $timezoneId: string, $tracesDir: string, $userAgent: string, $videoSize: array{ $width: float, $height: float }, $videosPath: string, $viewport: null|array{ $width: float, $height: float } } $options = null)
 * @method \PlaywrightPhp\Resources\BrowserServer launchServer(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\BrowserServer launchServer(array{ $args: mixed, $channel: string, $chromiumSandbox: bool, $devtools: bool, $downloadsPath: string, $env: array{  }, $executablePath: string, $firefoxUserPrefs: array{  }, $handleSIGHUP: bool, $handleSIGINT: bool, $handleSIGTERM: bool, $headless: bool, $host: string, $ignoreDefaultArgs: bool|mixed, $logger: \PlaywrightPhp\Resources\Logger, $port: float, $proxy: array{ $server: string, $bypass: string, $username: string, $password: string }, $timeout: float, $tracesDir: string, $wsPath: string } $options = null)
 * @method string name()
 * @method-extended string name()
 */
class Playwright extends AbstractEntryPoint
{
    /**
     * Default options.
     *
     * @var array
     */
    protected $options = [
        'browser' => 'chromium',
        
        'read_timeout' => 30,

        // Logs the output of Browser's console methods (console.log, console.debug, etc...) to the PHP logger
        'log_browser_console' => false,

        // Custom js to load playwright-extra plugins
        'js_extra' => '',
    ];

    /**
     * Instantiate Playwright's entry point.
     */
    public function __construct(array $userOptions = [])
    {
        if (! empty($userOptions['logger']) && $userOptions['logger'] instanceof LoggerInterface) {
            $this->checkPlaywrightVersion($userOptions['executable_path'] ?? 'node', $userOptions['logger']);
        }

        parent::__construct(
            __DIR__.'/PlaywrightConnectionDelegate.js',
            new PlaywrightProcessDelegate(),
            $this->options,
            $userOptions
        );
    }

    private function checkPlaywrightVersion(string $nodePath, LoggerInterface $logger): void
    {
        $currentVersion = $this->currentPlaywrightVersion($nodePath);
        $acceptedVersions = $this->acceptedPlaywrightVersion();

        if (null === $currentVersion) {
            $logger->warning("Playwright doesn't seem to be installed.");

            return;
        }

        if (! Semver::satisfies($currentVersion, $acceptedVersions)) {
            $logger->warning(
                "The installed version of Playwright (v{$currentVersion}) doesn't match the requirements"
                ." ({$acceptedVersions}), you may encounter issues."
            );
        }
    }

    private function currentPlaywrightVersion(string $nodePath): ?string
    {
        $process = new Process([$nodePath, __DIR__.'/get-playwright-version.js']);
        $process->mustRun();

        return \Safe\json_decode($process->getOutput(), true, 10, JSON_THROW_ON_ERROR);
    }

    private function acceptedPlaywrightVersion(): string
    {
        $npmManifestPath = __DIR__.'/../package.json';
        $contents = \Safe\file_get_contents($npmManifestPath) ?: throw new Exception('Cant load file');
        $npmManifest = \Safe\json_decode($contents, false, 10, JSON_THROW_ON_ERROR);

        return $npmManifest->dependencies->playwright;
    }
}
