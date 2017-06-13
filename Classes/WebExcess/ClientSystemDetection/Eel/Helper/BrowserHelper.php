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
use Sinergi\BrowserDetector\Browser;

/**
 * String helpers for Eel contexts
 *
 * @Flow\Proxy(false)
 */
class BrowserHelper implements ProtectedContextAwareInterface
{

    /**
     * @return bool
     */
    public function isChrome()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::CHROME ? true : false;
    }

    /**
     * @return bool
     */
    public function isFirefox()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::FIREFOX ? true : false;
    }

    /**
     * @return bool
     */
    public function isOpera()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::OPERA ? true : false;
    }

    /**
     * @return bool
     */
    public function isSafari()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::SAFARI ? true : false;
    }

    /**
     * @return bool
     */
    public function isIE()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::IE ? true : false;
    }

    /**
     * @return bool
     */
    public function isEdge()
    {
        $browser = new Browser();
        return $browser->getName() === Browser::EDGE ? true : false;
    }

    /**
     * @return integer
     */
    public function getVersion()
    {
        $browser = new Browser();
        return $browser->getVersion();
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
