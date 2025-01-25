<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void group(string $name, array $options = [])
 * @method-extended void group(string $name, array{ $location: array{ $file: string, $line: float, $column: float } } $options = null)
 * @method void groupEnd()
 * @method-extended void groupEnd()
 * @method void start(array $options = [])
 * @method-extended void start(array{ $name: string, $screenshots: bool, $snapshots: bool, $sources: bool, $title: string } $options = null)
 * @method void startChunk(array $options = [])
 * @method-extended void startChunk(array{ $name: string, $title: string } $options = null)
 * @method void stop(array $options = [])
 * @method-extended void stop(array{ $path: string } $options = null)
 * @method void stopChunk(array $options = [])
 * @method-extended void stopChunk(array{ $path: string } $options = null)
 */
class Tracing extends BasicResource
{
}
