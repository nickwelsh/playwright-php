<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

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
 * @method \PlaywrightPhp\Resources\Page page()
 * @method-extended \PlaywrightPhp\Resources\Page page()
 * @method float pid()
 * @method-extended float pid()
 * @method string pkg()
 * @method-extended string pkg()
 */
class AndroidWebView extends BasicResource
{
}
