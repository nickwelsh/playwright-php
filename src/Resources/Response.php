<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method array allHeaders()
 * @method-extended array{  } allHeaders()
 * @method mixed body()
 * @method-extended mixed body()
 * @method null|mixed finished()
 * @method-extended null|mixed finished()
 * @method \PlaywrightPhp\Resources\Frame frame()
 * @method-extended \PlaywrightPhp\Resources\Frame frame()
 * @method bool fromServiceWorker()
 * @method-extended bool fromServiceWorker()
 * @method array headers()
 * @method-extended array{  } headers()
 * @method mixed headersArray()
 * @method-extended mixed headersArray()
 * @method null|string headerValue(string $name)
 * @method-extended null|string headerValue(string $name)
 * @method mixed headerValues(string $name)
 * @method-extended mixed headerValues(string $name)
 * @method int|float|string|bool|null|array json()
 * @method-extended int|float|string|bool|null|array json()
 * @method bool ok()
 * @method-extended bool ok()
 * @method \PlaywrightPhp\Resources\Request request()
 * @method-extended \PlaywrightPhp\Resources\Request request()
 * @method null|array securityDetails()
 * @method-extended null|array{ $issuer: string, $protocol: string, $subjectName: string, $validFrom: float, $validTo: float } securityDetails()
 * @method null|array serverAddr()
 * @method-extended null|array{ $ipAddress: string, $port: float } serverAddr()
 * @method float status()
 * @method-extended float status()
 * @method string statusText()
 * @method-extended string statusText()
 * @method string text()
 * @method-extended string text()
 * @method string url()
 * @method-extended string url()
 */
class Response extends BasicResource
{
}
