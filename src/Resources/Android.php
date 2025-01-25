<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method \PlaywrightPhp\Resources\AndroidDevice connect(string $wsEndpoint, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\AndroidDevice connect(string $wsEndpoint, array{ $headers: array{  }, $slowMo: float, $timeout: float } $options = null)
 * @method mixed devices(array $options = [])
 * @method-extended mixed devices(array{ $host: string, $omitDriverInstall: bool, $port: float } $options = null)
 * @method \PlaywrightPhp\Resources\BrowserServer launchServer(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\BrowserServer launchServer(array{ $adbHost: string, $adbPort: float, $deviceSerialNumber: string, $host: string, $omitDriverInstall: bool, $port: float, $wsPath: string } $options = null)
 * @method void setDefaultTimeout(float $timeout)
 * @method-extended void setDefaultTimeout(float $timeout)
 */
class Android extends BasicResource
{
}
