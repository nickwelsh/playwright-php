<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void abort(string $errorCode = null)
 * @method-extended void abort(string $errorCode = null)
 * @method void continue(array $options = [])
 * @method-extended void continue(array{ $headers: array{  }, $method: string, $postData: string|mixed|int|float|string|bool|null|array, $url: string } $options = null)
 * @method void fallback(array $options = [])
 * @method-extended void fallback(array{ $headers: array{  }, $method: string, $postData: string|mixed|int|float|string|bool|null|array, $url: string } $options = null)
 * @method \PlaywrightPhp\Resources\APIResponse fetch(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\APIResponse fetch(array{ $headers: array{  }, $maxRedirects: float, $maxRetries: float, $method: string, $postData: string|mixed|int|float|string|bool|null|array, $timeout: float, $url: string } $options = null)
 * @method void fulfill(array $options = [])
 * @method-extended void fulfill(array{ $body: string|mixed, $contentType: string, $headers: array{  }, $json: int|float|string|bool|null|array, $path: string, $response: \PlaywrightPhp\Resources\APIResponse, $status: float } $options = null)
 * @method \PlaywrightPhp\Resources\Request request()
 * @method-extended \PlaywrightPhp\Resources\Request request()
 */
class Route extends BasicResource
{
}
