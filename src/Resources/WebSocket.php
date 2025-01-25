<?php

namespace PlaywrightPhp\Resources;

/**
 * @method mixed on('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('socketerror' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('socketerror' $event, callable(string $string): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method bool isClosed()
 * @method-extended bool isClosed()
 * @method string url()
 * @method-extended string url()
 * @method string waitForEvent('socketerror' $event, array|\Nesk\Rialto\Data\JsFunction $optionsOrPredicate = null)
 * @method-extended string waitForEvent('socketerror' $event, array{ $predicate: callable(string $string): bool|Promise|bool[]|\Nesk\Rialto\Data\JsFunction, $timeout: float }|callable(callable(string $string): bool|Promise|bool[]|\Nesk\Rialto\Data\JsFunction): |\Nesk\Rialto\Data\JsFunction $optionsOrPredicate = null)
 */
class WebSocket extends EventEmitter
{
}
