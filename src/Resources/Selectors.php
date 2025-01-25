<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void register(string $name, \Nesk\Rialto\Data\JsFunction|string|array $script, array $options = [])
 * @method-extended void register(string $name, callable|\Nesk\Rialto\Data\JsFunction|string|array{ $path: string, $content: string } $script, array{ $contentScript: bool } $options = null)
 * @method void setTestIdAttribute(string $attributeName)
 * @method-extended void setTestIdAttribute(string $attributeName)
 */
class Selectors extends BasicResource
{
}
