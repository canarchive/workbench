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
    'user-operation' => [
        'data' => [
			'pattern' => '/<action:(signin|siginup|logout)>',
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
