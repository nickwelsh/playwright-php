<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method bool isEnabled(string $name, string $severity)
 * @method-extended bool isEnabled(string $name, string $severity)
 * @method void log(string $name, string $severity, string|mixed $message, mixed $args, array $hints)
 * @method-extended void log(string $name, string $severity, string|mixed $message, mixed $args, array{ $color: string } $hints)
 */
class Logger extends BasicResource
{
}
