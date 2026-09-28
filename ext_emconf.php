<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'envlogin',
    'description' => 'Prefill backend login with credentials from .env variables',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Woemar\\Envlogin\\' => 'Classes'
        ],
    ],
    'state' => 'alpha',
    'author' => 'woemar',
    'author_company' => 'woemar',
    'version' => '0.0.1',
];
