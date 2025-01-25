<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method mixed evaluate(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluate(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed evaluateHandle(\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method-extended mixed evaluateHandle(callable|\Nesk\Rialto\Data\JsFunction $pageFunction, mixed $arg = null)
 * @method mixed on('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed on('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed once('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed once('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed addListener('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed addListener('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed removeListener('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed removeListener('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed off('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed off('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method mixed prependListener('window' $event, \Nesk\Rialto\Data\JsFunction $listener)
 * @method-extended mixed prependListener('window' $event, callable(\PlaywrightPhp\Resources\Page $page): mixed|\Nesk\Rialto\Data\JsFunction $listener)
 * @method \PlaywrightPhp\Resources\JSHandle browserWindow(\PlaywrightPhp\Resources\Page $page)
 * @method-extended \PlaywrightPhp\Resources\JSHandle browserWindow(\PlaywrightPhp\Resources\Page $page)
 * @method void close()
 * @method-extended void close()
 * @method \PlaywrightPhp\Resources\BrowserContext context()
 * @method-extended \PlaywrightPhp\Resources\BrowserContext context()
 * @method \PlaywrightPhp\Resources\Page firstWindow(array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Page firstWindow(array{ $timeout: float } $options = null)
 * @method mixed process()
 * @method-extended mixed process()
 * @method \PlaywrightPhp\Resources\Page waitForEvent('window' $event, array|\Nesk\Rialto\Data\JsFunction $optionsOrPredicate = null)
 * @method-extended \PlaywrightPhp\Resources\Page waitForEvent('window' $event, array{ $predicate: callable(\PlaywrightPhp\Resources\Page $page): bool|Promise|bool[]|\Nesk\Rialto\Data\JsFunction, $timeout: float }|callable(callable(\PlaywrightPhp\Resources\Page $page): bool|Promise|bool[]|\Nesk\Rialto\Data\JsFunction): |\Nesk\Rialto\Data\JsFunction $optionsOrPredicate = null)
 * @method mixed windows()
 * @method-extended mixed windows()
 */
class ElectronApplication extends BasicResource
{
}
