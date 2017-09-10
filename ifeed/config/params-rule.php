<?php
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
    'sitemap' => [
        'data' => [
            'suffix' => '.xml',
            'pattern' => '/sitemap',
            'route' => '/{{SORT}}/sitemap/index', 
        ],
    ],
];
