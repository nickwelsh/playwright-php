<?php

namespace PlaywrightPhp\Traits;

use PlaywrightPhp\Resources\ElementHandle;

/**
 * @method null|ElementHandle querySelector(string $selector)
 * @method ElementHandle[]    querySelectorAll(string $selector)
 */
trait AliasesSelectionMethods
{
    public function querySelector(...$arguments)
    {
        return $this->__call('$', $arguments);
    }

    public function querySelectorAll(...$arguments)
    {
        return $this->__call('$$', $arguments);
    }
}
