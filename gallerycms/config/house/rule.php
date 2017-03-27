<?php
return \gallerycms\components\RuleFormat::formatRule([
    'sitemap' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/house/sitemap/index', 
        ],
    ],
    'sitemap-elems' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap_<sort:[a-z]+><page:_[0-9]+>',
            'route' => '/house/sitemap/elems', 
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'signup' => [
        'hosts' => ['base', 'm', '3g', 'wap', 'merchant'],
        'data' => [
            'pattern' => '/signup', 
            'route' => '/house/signup/index', 
            'suffix' => '.html'
        ],
    ],
    'search' => [
        'hosts' => ['base', 'm', '3g', 'wap', 'merchant'],
        'data' => [
            'pattern' => '/search', 
            'route' => '/house/search/index', 
            'suffix' => '.html'
        ],
    ],
    'index' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/', 
            'route' => '/house/site/select-city', 
            'suffix' => ''
        ],
    ],
    'record' => [
        'hosts' => ['base'],
        'data' => [
            'pattern' => '/record', 
            'route' => '/house/aboutus/record', 
            'suffix' => '.html'
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
    'sample-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/sample_show_<id:\d+>',
    		'route'	=> '/house/sample/show',
        ],
    ],
    'sample-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/sample/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/sample/index',
    		'defaults' => ['page' => '1', 'tag' => ''],
        ],
    ],
    'ask-tag' => [
        'hosts' => ['base'],//, 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/ask_tag', 
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
    		'pattern' => '/ask_lm_<sort:[a-z]+><page:_[0-9]+>',
    		'route'	=> '/house/ask/list',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'ask-taglist' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/ask_<tag:\d+><page:_[0-9]+>',
    		'route'	=> '/house/ask/taglist',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'ask-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/askshow_<id:\w+>',
    		'route'	=> '/house/ask/show',
        ],
    ],
    'quote-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/quote<tag:_[a-z_\-]+><page:_[0-9]+>',
    		'route'	=> '/house/quote/index',
    		'defaults' => ['page' => '_1', 'tag' => '_'],
        ],
    ],
    'quote-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
            'pattern' => '/<city_code:[a-z]+>/quoteshow_<id:\w+>',
    		'route'	=> '/house/quote/show',
        ],
    ],
    'city-index' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<city_code:[a-z]+>', 
            'route' => '/house/site/index', 
            'suffix' => '/'
        ],
    ],
    'merchant-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
            'pattern' => '/<city_code:[a-z]+>/merchant/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/merchant/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'working-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/working<page:_[0-9]+>',
    		'route'	=> '/house/working/index',
    		'defaults' => ['page' => '_1'],
        ],
    ],
    'working-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:[a-z]+>/workingshow_<id:\d+>',
    		'route'	=> '/house/working/show',
        ],
    ],
    'realcase-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/realcase/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/realcase/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],
    'realcase-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:[a-z]+>/realcaseshow_<id:\d+>',
    		'route'	=> '/house/realcase/show',
        ],
    ],
    /*'designer-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/designer/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/designer/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],*/
    /*'designer-show' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '.html',
    		'pattern' => '/<city_code:[a-z]+>/designer-<id:\d+>',
    		'route'	=> '/house/designer/show',
        ],
    ],*/
    /*'comment-list' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'suffix' => '/',
    		'pattern' => '/<city_code:[a-z]+>/comment/<tag:[a-zA-Z_\-]+>/<page:[0-9]+>',
    		'route'	=> '/house/comment/index',
    		'defaults' => ['page' => 1, 'tag' => ''],
        ],
    ],*/
]);
