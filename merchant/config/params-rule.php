<?php
/*
    '/admin' => '/admin/site/index',
    'userlist' => '/user/index',
	'/report-<type:\w+>' => '/statistic/index',*/
return [
    'index' => [
        'data' => [
			'suffix' => '',
            'pattern' => '/',
            'route' => '/{{SORT}}/site/index', 
        ],
    ],
    'single-page' => [
        'data' => [
    		'pattern' => '/sp-<code:\w+>',
    		'route'	=> '/{{SORT}}/product/index',
        ],
    ],
    'api-validation' => [
        'data' => [
			'pattern' => '/api-<action:(validation)>',
    		'route'	=> '/api/<action>',
        ],
    ],
    'user-operation' => [
        'data' => [
			'pattern' => '/<action:(signin|signup|logout|findpwd)>',
    		'route'	=> '/{{SORT}}/entrance/<action>',
        ],
    ],
    'sitemap' => [
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/{{SORT}}/sitemap/index', 
        ],
    ],
];
