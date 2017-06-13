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

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;
use Sinergi\BrowserDetector\Os;

/**
 * String helpers for Eel contexts
 *
 * @Flow\Proxy(false)
 */
class OsHelper implements ProtectedContextAwareInterface
{

    /**
     * @return bool
     */
    public function isWin()
    {
        $os = new Os();
        return $os->getName() === Os::WINDOWS ? true : false;
    }

    /**
     * @return bool
     */
    public function isWinPhone()
    {
        $os = new Os();
        return $os->getName() === Os::WINDOWS_PHONE ? true : false;
    }

    /**
     * @return bool
     */
    public function isOSX()
    {
        $os = new Os();
        return $os->getName() === Os::OSX ? true : false;
    }

    /**
     * @return bool
     */
    public function isiOS()
    {
        $os = new Os();
        return $os->getName() === Os::IOS ? true : false;
    }

    /**
     * @return bool
     */
    public function isAndroid()
    {
        $os = new Os();
        return $os->getName() === Os::ANDROID ? true : false;
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
