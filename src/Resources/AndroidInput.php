<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void drag(array $from, array $to, float $steps)
 * @method-extended void drag(array{ $x: float, $y: float } $from, array{ $x: float, $y: float } $to, float $steps)
 * @method void press(mixed $key)
 * @method-extended void press(mixed $key)
 * @method void swipe(array $from, mixed $segments, float $steps)
 * @method-extended void swipe(array{ $x: float, $y: float } $from, mixed $segments, float $steps)
 * @method void tap(array $point)
 * @method-extended void tap(array{ $x: float, $y: float } $point)
 * @method void type(string $text)
 * @method-extended void type(string $text)
 */
class AndroidInput extends BasicResource
{
}
