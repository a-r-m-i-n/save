<?php declare(strict_types=1);
namespace T3\Save\Hooks;

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2019 Armin Vieweg <armin@v.ieweg.de>
 */
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Button Hook
 *
 * @see \TYPO3\CMS\Backend\Template\Components\ButtonBar
 */
class ButtonBarHook
{
    /**
     * @param array $params
     * @return array
     * @throws \Exception
     */
    public function loadRequireJsModule(array $params) : array
    {
        /** @var PageRenderer $pageRenderer */
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->loadRequireJsModule('TYPO3/CMS/Save/SaveShortcut');
        return $params['buttons'];
    }
}
