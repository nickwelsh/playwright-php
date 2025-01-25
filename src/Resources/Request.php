<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method array allHeaders()
 * @method-extended array{  } allHeaders()
 * @method null|array failure()
 * @method-extended null|array{ $errorText: string } failure()
 * @method \PlaywrightPhp\Resources\Frame frame()
 * @method-extended \PlaywrightPhp\Resources\Frame frame()
 * @method array headers()
 * @method-extended array{  } headers()
 * @method mixed headersArray()
 * @method-extended mixed headersArray()
 * @method null|string headerValue(string $name)
 * @method-extended null|string headerValue(string $name)
 * @method bool isNavigationRequest()
 * @method-extended bool isNavigationRequest()
 * @method string method()
 * @method-extended string method()
 * @method null|string postData()
 * @method-extended null|string postData()
 * @method null|mixed postDataBuffer()
 * @method-extended null|mixed postDataBuffer()
 * @method null|int|float|string|bool|null|array postDataJSON()
 * @method-extended null|int|float|string|bool|null|array postDataJSON()
 * @method null|\PlaywrightPhp\Resources\Request redirectedFrom()
 * @method-extended null|\PlaywrightPhp\Resources\Request redirectedFrom()
 * @method null|\PlaywrightPhp\Resources\Request redirectedTo()
 * @method-extended null|\PlaywrightPhp\Resources\Request redirectedTo()
 * @method string resourceType()
 * @method-extended string resourceType()
 * @method null|\PlaywrightPhp\Resources\Response response()
 * @method-extended null|\PlaywrightPhp\Resources\Response response()
 * @method null|\PlaywrightPhp\Resources\Worker serviceWorker()
 * @method-extended null|\PlaywrightPhp\Resources\Worker serviceWorker()
 * @method array sizes()
 * @method-extended array{ $requestBodySize: float, $requestHeadersSize: float, $responseBodySize: float, $responseHeadersSize: float } sizes()
 * @method array timing()
 * @method-extended array{ $startTime: float, $domainLookupStart: float, $domainLookupEnd: float, $connectStart: float, $secureConnectionStart: float, $connectEnd: float, $requestStart: float, $responseStart: float, $responseEnd: float } timing()
 * @method string url()
 * @method-extended string url()
 */
class Request extends BasicResource
{
}
