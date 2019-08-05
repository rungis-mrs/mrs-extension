<?php

/**
 * Extension Manager/Repository config file for ext "mrs_enterprise_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'MRS Enterprise site',
    'description' => 'MRS Enterprise site big description',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mrs\\MrsEnterpriseSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Iurii Samoshkin',
    'author_email' => 'iurii.samoshkin@mrs-electronic.de',
    'author_company' => 'mrs',
    'version' => '1.0.0',
];
