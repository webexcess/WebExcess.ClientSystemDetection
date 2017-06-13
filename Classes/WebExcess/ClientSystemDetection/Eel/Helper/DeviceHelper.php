<?php
namespace WebExcess\ClientSystemDetection\Eel\Helper;

/*
 * This file is part of the WebExcess.ClientSystemDetection package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;

/**
 * String helpers for Eel contexts
 *
 * @Flow\Proxy(false)
 */
class DeviceHelper implements ProtectedContextAwareInterface
{

    /**
     * @return bool
     */
    public function isMobile()
    {
        $detect = new \Mobile_Detect;
        return $detect->isMobile() && !$detect->isTablet() ? true : false;
    }

    /**
     * @return bool
     */
    public function isTablet()
    {
        $detect = new \Mobile_Detect;
        return $detect->isTablet();
    }

    /**
     * @return bool
     */
    public function isTouch()
    {
        $detect = new \Mobile_Detect;
        return $detect->isMobile() || $detect->isTablet() ? true : false;
    }

    /**
     * @return bool
     */
    public function isDesktop()
    {
        $detect = new \Mobile_Detect;
        return !$detect->isMobile() && !$detect->isTablet() ? true : false;
    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
