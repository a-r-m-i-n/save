<?php

declare(strict_types=1);

namespace T3\Save\EventListener;

use TYPO3\CMS\Backend\Template\Components\ModifyButtonBarEvent;
use TYPO3\CMS\Core\Page\PageRenderer;

/**
 * This Event is used for TYPO3 >=12
 */
class ModifyButtonBarEventListener
{
    private PageRenderer $pageRenderer;

    public function __construct(PageRenderer $pageRenderer)
    {
        $this->pageRenderer = $pageRenderer;
    }

    public function __invoke(ModifyButtonBarEvent $event): void
    {
        $this->pageRenderer->loadJavaScriptModule('@vendor/save/SaveShortcutModule.js');
    }
}
