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
    'aboutus' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<view:(desc|contactus|guestbook|friendlink|culture|statement|question)>',
            'route' => '/house/aboutus/index', 
            'suffix' => '.html',
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
    'ask-tag' => [
        'hosts' => ['base'],//, 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/ask/tag', 
            'route' => '/house/ask/tag', 
            'suffix' => '.html'
        ],
    ],
    /*'ask-index' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/ask', 
            'route' => '/house/ask/index', 
            'suffix' => '/'
        ],
    ],*/
    'ask-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/ask/lm-<sort:[a-z]+><page:_[0-9]+>',
    		'route'	=> '/house/ask/list',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'ask-taglist' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/ask/<tag:\d+>_<page:[0-9]+>',
    		'route'	=> '/house/ask/taglist',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'ask-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/ask-<id:\d+>',
    		'route'	=> '/house/ask/show',
        ],
    ],
    'quote-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/quote<tag:_[a-z_\-]+><page:_[0-9]+>',
    		'route'	=> '/house/quote/index',
    		'defaults' => ['page' => '_1', 'tag' => '_'],
        ],
    ],
    'quote-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
            'pattern' => '/<city_code:\w+>/quote_show_<id:\d+>',
    		'route'	=> '/house/quote/show',
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
    'merchant-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
            'pattern' => '/<city_code:\w+>/merchant/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/merchant/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'working-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/working/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/working/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'working-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:\w+>/working-<id:\d+>',
    		'route'	=> '/house/working/show',
        ],
    ],
    'realcase-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/realcase/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/realcase/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'realcase-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:\w+>/realcase-<id:\d+>',
    		'route'	=> '/house/realcase/show',
        ],
    ],
    'designer-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/designer/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/designer/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'designer-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:\w+>/designer-<id:\d+>',
    		'route'	=> '/house/designer/show',
        ],
    ],
    'comment-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:\w+>/comment/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/comment/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
]);
