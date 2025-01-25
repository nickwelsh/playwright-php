<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method \PlaywrightPhp\Resources\FrameLocator first()
 * @method-extended \PlaywrightPhp\Resources\FrameLocator first()
 * @method \PlaywrightPhp\Resources\FrameLocator frameLocator(string $selector)
 * @method-extended \PlaywrightPhp\Resources\FrameLocator frameLocator(string $selector)
 * @method \PlaywrightPhp\Resources\Locator getByAltText(string|mixed $text, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByAltText(string|mixed $text, array{ $exact: bool } $options = null)
 * @method \PlaywrightPhp\Resources\Locator getByLabel(string|mixed $text, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByLabel(string|mixed $text, array{ $exact: bool } $options = null)
 * @method \PlaywrightPhp\Resources\Locator getByPlaceholder(string|mixed $text, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByPlaceholder(string|mixed $text, array{ $exact: bool } $options = null)
 * @method \PlaywrightPhp\Resources\Locator getByRole(string $role, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByRole(string $role, array{ $checked: bool, $disabled: bool, $exact: bool, $expanded: bool, $includeHidden: bool, $level: float, $name: string|mixed, $pressed: bool, $selected: bool } $options = null)
 * @method \PlaywrightPhp\Resources\Locator getByTestId(string|mixed $testId)
 * @method-extended \PlaywrightPhp\Resources\Locator getByTestId(string|mixed $testId)
 * @method \PlaywrightPhp\Resources\Locator getByText(string|mixed $text, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByText(string|mixed $text, array{ $exact: bool } $options = null)
 * @method \PlaywrightPhp\Resources\Locator getByTitle(string|mixed $text, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator getByTitle(string|mixed $text, array{ $exact: bool } $options = null)
 * @method \PlaywrightPhp\Resources\FrameLocator last()
 * @method-extended \PlaywrightPhp\Resources\FrameLocator last()
 * @method \PlaywrightPhp\Resources\Locator locator(string|\PlaywrightPhp\Resources\Locator $selectorOrLocator, array $options = [])
 * @method-extended \PlaywrightPhp\Resources\Locator locator(string|\PlaywrightPhp\Resources\Locator $selectorOrLocator, array{ $has: \PlaywrightPhp\Resources\Locator, $hasNot: \PlaywrightPhp\Resources\Locator, $hasNotText: string|mixed, $hasText: string|mixed } $options = null)
 * @method \PlaywrightPhp\Resources\FrameLocator nth(float $index)
 * @method-extended \PlaywrightPhp\Resources\FrameLocator nth(float $index)
 * @method \PlaywrightPhp\Resources\Locator owner()
 * @method-extended \PlaywrightPhp\Resources\Locator owner()
 */
class FrameLocator extends BasicResource
{
}
