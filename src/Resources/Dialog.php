<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void accept(string $promptText = null)
 * @method-extended void accept(string $promptText = null)
 * @method string defaultValue()
 * @method-extended string defaultValue()
 * @method void dismiss()
 * @method-extended void dismiss()
 * @method string message()
 * @method-extended string message()
 * @method null|\PlaywrightPhp\Resources\Page page()
 * @method-extended null|\PlaywrightPhp\Resources\Page page()
 * @method string type()
 * @method-extended string type()
 */
class Dialog extends BasicResource
{
}
