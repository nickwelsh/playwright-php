<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void onMessage(\Nesk\Rialto\Data\JsFunction $handler)
 * @method-extended void onMessage(callable(string|mixed $message): mixed|\Nesk\Rialto\Data\JsFunction $handler)
 * @method void onClose(\Nesk\Rialto\Data\JsFunction $handler)
 * @method-extended void onClose(callable(float|null $code, string|null $reason): mixed|\Nesk\Rialto\Data\JsFunction $handler)
 * @method void close(array $options = [])
 * @method-extended void close(array{ $code: float, $reason: string } $options = null)
 * @method \PlaywrightPhp\Resources\WebSocketRoute connectToServer()
 * @method-extended \PlaywrightPhp\Resources\WebSocketRoute connectToServer()
 * @method void send(string|mixed $message)
 * @method-extended void send(string|mixed $message)
 * @method string url()
 * @method-extended string url()
 */
class WebSocketRoute extends BasicResource
{
}
