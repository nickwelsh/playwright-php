<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method mixed on('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('data' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('data' $event, callable(mixed $buffer): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method void close()
 * @method-extended void close()
 * @method void write(mixed $data)
 * @method-extended void write(mixed $data)
 */
class AndroidSocket extends BasicResource
{
}
