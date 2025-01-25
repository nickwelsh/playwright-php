<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void fastForward(float|string $ticks)
 * @method-extended void fastForward(float|string $ticks)
 * @method void install(array $options = [])
 * @method-extended void install(array{ $time: float|string|mixed } $options = null)
 * @method void pauseAt(float|string|mixed $time)
 * @method-extended void pauseAt(float|string|mixed $time)
 * @method void resume()
 * @method-extended void resume()
 * @method void runFor(float|string $ticks)
 * @method-extended void runFor(float|string $ticks)
 * @method void setFixedTime(float|string|mixed $time)
 * @method-extended void setFixedTime(float|string|mixed $time)
 * @method void setSystemTime(float|string|mixed $time)
 * @method-extended void setSystemTime(float|string|mixed $time)
 */
class Clock extends BasicResource
{
}
