<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method mixed args()
 * @method-extended mixed args()
 * @method array location()
 * @method-extended array{ $url: string, $lineNumber: float, $columnNumber: float } location()
 * @method null|\PlaywrightPhp\Resources\Page page()
 * @method-extended null|\PlaywrightPhp\Resources\Page page()
 * @method string text()
 * @method-extended string text()
 * @method string type()
 * @method-extended string type()
 */
class ConsoleMessage extends BasicResource
{
}
