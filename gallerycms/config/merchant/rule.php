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
            'pattern' => '/sj_<mcode:\w+>', 
            'route' => '/merchant/site/index', 
            'suffix' => '/'
        ],
    ],
    'merchant-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<city_code:[a-z]+>_showsj_<mcode:\w+>', 
            'route' => '/merchant/site/show', 
            'suffix' => '.html'
        ],
    ],
    'working-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>_<mcode:\w+>_working<page:_[0-9]+>',
    		'route'	=> '/house/working/merchant',
            'defaults' => ['page' => '_1'],
        ],
    ],
    'realcase-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>_<mcode:\w+>_realcase<page:_[0-9]+>',
    		'route'	=> '/house/realcase/merchant',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'designer-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/<mcode:\w+>_designer<page:_[0-9]+>',
    		'route'	=> '/house/designer/merchant',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'comment-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/<mcode:\w+>_comment<page:_[0-9]+>',
    		'route'	=> '/house/comment/merchant',
    		'defaults' => ['page' => '_1'],
        ],
    ],
]);
