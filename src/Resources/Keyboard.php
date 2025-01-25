<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void down(string $key)
 * @method-extended void down(string $key)
 * @method void insertText(string $text)
 * @method-extended void insertText(string $text)
 * @method void press(string $key, array $options = [])
 * @method-extended void press(string $key, array{ $delay: float } $options = null)
 * @method void type(string $text, array $options = [])
 * @method-extended void type(string $text, array{ $delay: float } $options = null)
 * @method void up(string $key)
 * @method-extended void up(string $key)
 */
class Keyboard extends BasicResource
{
}
