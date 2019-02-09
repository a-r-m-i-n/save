<?php

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2019 Armin Vieweg <armin@v.ieweg.de>
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_USER_SETTINGS']['columns']['disableSaveShortcut'] = [
        'type' => 'check',
        'label' => 'LLL:EXT:save/Resources/Private/Language/locallang.xml:userSettings.disableSaveShortcut',
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToUserSettings(
        'disableSaveShortcut',
        'before:resetConfiguration'
    );
}
