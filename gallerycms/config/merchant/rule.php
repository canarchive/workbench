<?php
return \gallerycms\components\RuleFormat::formatRule([
    'index' => [
        'hosts' => ['merchant'],
        'data' => [
            'pattern' => '/', 
            'route' => '/merchant/site/index', 
            'suffix' => ''
        ],
    ],
    'mobile-index' => [
        'hosts' => ['m', '3g', 'wap'],
        'data' => [
            'pattern' => '/sj-<code:\w+>', 
            'route' => '/merchant/mobile-site/index', 
            'suffix' => '/'
        ],
    ],
    'merchant-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<city_code:\w+>/showsj_<code:\w+>', 
            'route' => '/merchant/site/show', 
            'suffix' => '.html'
        ],
    ],
    'working-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/<mcode:\w+>/working/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/working/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'realcase-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/<mcode:\w+>/realcase/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/realcase/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'designer-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/<mcode:\w+>/designer/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/designer/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'comment-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/<mcode:\w+>/comment/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/comment/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
]);
