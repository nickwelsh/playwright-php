<?php

namespace PlaywrightPhp;

use Nesk\Rialto\Interfaces\ShouldHandleProcessDelegation;
use Nesk\Rialto\Traits\UsesBasicResourceAsDefault;

class PlaywrightProcessDelegate implements ShouldHandleProcessDelegation
{
    use UsesBasicResourceAsDefault;

    public function resourceFromOriginalClassName(string $className): ?string
    {
        $class = "PlaywrightPhp\\Resources\\{$className}";

        if (class_exists($class)) {
            return $class;
        }

        $classWithoutCDP = 'PlaywrightPhp\\Resources\\'. \Safe\preg_replace('/^Cdp/i', '', $className);

        if (class_exists($classWithoutCDP)) {
            return $classWithoutCDP;
        }

        return null;
    }
}
