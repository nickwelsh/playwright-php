<?php

namespace PlaywrightPhp\Resources;

use Nesk\Rialto\Data\BasicResource;

/**
 * @method void startCSSCoverage(array $options = [])
 * @method-extended void startCSSCoverage(array{ $resetOnNavigation: bool } $options = null)
 * @method void startJSCoverage(array $options = [])
 * @method-extended void startJSCoverage(array{ $reportAnonymousScripts: bool, $resetOnNavigation: bool } $options = null)
 * @method mixed stopCSSCoverage()
 * @method-extended mixed stopCSSCoverage()
 * @method mixed stopJSCoverage()
 * @method-extended mixed stopJSCoverage()
 */
class Coverage extends BasicResource
{
}
