<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'envlogin',
    'description' => 'Prefill backend login with credentials from .env variables',
    'category' => 'be',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.5.99',
            'typo3' => '13.4.1-14.3.99',
            'backend' => '13.4.1-14.3.99',
            'extbase' => '13.4.1-14.3.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Woemar\\Envlogin\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'author' => 'Marc Wöhlken',
    'author_company' => '',
    'version' => '13.0.0',
];
