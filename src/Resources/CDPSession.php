<?php

namespace PlaywrightPhp\Resources;

/**
 * @property $on: \Nesk\Rialto\Data\JsFunction
 * @property $addListener: \Nesk\Rialto\Data\JsFunction
 * @property $off: \Nesk\Rialto\Data\JsFunction
 * @property $removeListener: \Nesk\Rialto\Data\JsFunction
 * @property $once: \Nesk\Rialto\Data\JsFunction
 * @method mixed send(mixed $method, mixed $params = null)
 * @method-extended mixed send(mixed $method, mixed $params = null)
 * @method void detach()
 * @method-extended void detach()
 */
class CDPSession extends EventEmitter
{
}
