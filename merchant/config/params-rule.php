<?php
/*    ['pattern' => Yii::getAlias('@merchanturl') . '/', 'route' => '/site/index', 'suffix' => ''],
    '/sp-<code:\w+>' => '/product/index',
    'signin' => '/site/signin',
    'signup' => '/site/signup',
    'logout' => '/site/logout',

    '/admin' => '/admin/site/index',
    'userlist' => '/user/index',
	'/report-<type:\w+>' => '/statistic/index',*/
$ruleInfos = [
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
			'pattern' => '/<operation:(signin|siginup|logout)>',
    		'route'	=> '/{{SORT}}/site/<action>',
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
