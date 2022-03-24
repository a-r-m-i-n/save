<?php

/*  | This extension is made with ❤ for TYPO3 CMS and zazudesign.
 *  | It is licensed under GNU General Public License.
 *  |
 *  | (c) 2019-2022 Armin Vieweg <armin@v.ieweg.de>
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Save with shortcut',
    'description' => 'Adds the possibility to use the keyboard shortcut CTRL+S to save in TYPO3 CMS backend.',
    'category' => 'be',
    'version' => '1.2.0',
    'state' => 'stable',
    'author' => 'Armin Vieweg',
    'author_email' => 'armin@v.ieweg.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'suggests' => [],
    'autoload' => [
        'psr-4' => ['T3\\Save\\' => 'Classes']
    ],
];
