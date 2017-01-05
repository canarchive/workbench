<?php
return \gallerycms\components\RuleFormat::formatRule([
    'index' => [
        'hosts' => ['base'],
        'data' => [
            'pattern' => '/', 
            'route' => '/house/site/index', 
            'suffix' => ''
        ],
    ],
    'mobile-index' => [
        'hosts' => ['m', '3g', 'wap'],
        'data' => [
            'pattern' => '/', 
            'route' => '/house/mobile-site/index', 
            'suffix' => ''
        ],
    ],
]);
