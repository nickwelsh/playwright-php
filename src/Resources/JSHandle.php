<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method mixed evaluate(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluate(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed evaluateHandle(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluateHandle(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed jsonValue()
 * @method-extended mixed jsonValue()
 * @method mixed asElement()
 * @method-extended mixed asElement()
 * @method void dispose()
 * @method-extended void dispose()
 * @method array|string[]|\PlaywrightPhp\Resources\JSHandle[] getProperties()
 * @method-extended array|string[]|\PlaywrightPhp\Resources\JSHandle[] getProperties()
 * @method \PlaywrightPhp\Resources\JSHandle getProperty(string $propertyName)
 * @method-extended \PlaywrightPhp\Resources\JSHandle getProperty(string $propertyName)
 */
class JSHandle extends BasicResource
{
}
