<?php

namespace PlaywrightPhp\Resources;

/**
 * @method mixed on('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('close' $event, callable(): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method void close()
 * @method-extended void close()
 * @method void kill()
 * @method-extended void kill()
 * @method mixed process()
 * @method-extended mixed process()
 * @method string wsEndpoint()
 * @method-extended string wsEndpoint()
 */
class BrowserServer extends EventEmitter
{
}
