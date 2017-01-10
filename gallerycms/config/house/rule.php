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
    'sample-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/sample/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/sample/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'sample-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/sample-<id\d+>',
    		'route'	=> '/house/sample/show',
        ],
    ],
    'city-index' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<city_code:\w+>', 
            'route' => '/house/site/index', 
            'suffix' => '/'
        ],
    ],
]);
