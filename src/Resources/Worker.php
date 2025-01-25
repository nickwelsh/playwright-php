<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method mixed evaluate(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluate(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed evaluateHandle(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluateHandle(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed on('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('close' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('close' $event, callable(\PlaywrightPhp\Resources\Worker $worker): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method string url()
 * @method-extended string url()
 */
class Worker extends BasicResource
{
}
