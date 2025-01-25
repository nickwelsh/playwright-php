<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void click(float $x, float $y, array $options = [])
 * @method-extended void click(float $x, float $y, array{ $button: string, $clickCount: float, $delay: float } $options = null)
 * @method void dblclick(float $x, float $y, array $options = [])
 * @method-extended void dblclick(float $x, float $y, array{ $button: string, $delay: float } $options = null)
 * @method void down(array $options = [])
 * @method-extended void down(array{ $button: string, $clickCount: float } $options = null)
 * @method void move(float $x, float $y, array $options = [])
 * @method-extended void move(float $x, float $y, array{ $steps: float } $options = null)
 * @method void up(array $options = [])
 * @method-extended void up(array{ $button: string, $clickCount: float } $options = null)
 * @method void wheel(float $deltaX, float $deltaY)
 * @method-extended void wheel(float $deltaX, float $deltaY)
 */
class Mouse extends BasicResource
{
}
