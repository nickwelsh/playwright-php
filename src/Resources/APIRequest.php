<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;


/**
 * @method \PlaywrightPhp\Resources\APIRequestContext newContext(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIRequestContext newContext(array{ $baseURL: string, $clientCertificates: mixed, $extraHTTPHeaders: array{  }, $httpCredentials: array{ $username: string, $password: string, $origin: string, $send: string }, $ignoreHTTPSErrors: bool, $proxy: array{ $server: string, $bypass: string, $username: string, $password: string }, $storageState: string|array{ $cookies: mixed, $origins: mixed }, $timeout: float, $userAgent: string } $options = null)
 */
class APIRequest extends BasicResource
{
}
