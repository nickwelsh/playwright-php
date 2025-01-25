<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method \PlaywrightPhp\Resources\ElementHandle element()
 * @method-extended \PlaywrightPhp\Resources\ElementHandle element()
 * @method bool isMultiple()
 * @method-extended bool isMultiple()
 * @method \PlaywrightPhp\Resources\Page page()
 * @method-extended \PlaywrightPhp\Resources\Page page()
 * @method void setFiles(string|mixed|array $files, array $options = [])
 * @method-extended void setFiles(string|mixed|array{ $name: string, $mimeType: string, $buffer: mixed } $files, array{ $noWaitAfter: bool, $timeout: float } $options = null)
 */
class FileChooser extends BasicResource
{
}
