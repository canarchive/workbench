<?php
/*$rules = [
    Yii::getAlias('@keleurl') . '/' => '/kl/index', 
    Yii::getAlias('@keleurl') . '/kl-coupon' => '/kl/coupon', 
    Yii::getAlias('@keleurl') . '/kl-signup' => '/kl/signup', 
    'stat' => '/decoration/site/statistic',
    'hdenter' => '/site/hdenter',
    '/' => '/decoration/detail/home',
];
return $rules;*/
return [
    'pagecheck' => [
        'data' => [
            'pattern' => '/pagecheck',
            'route' => '/site/index', 
        ],
    ],
    'hdenter' => [
        'data' => [
            'pattern' => '/hdenter',
            'route' => '/site/hdenter', 
        ],
    ],
    'stat' => [
        'data' => [
    		'pattern' => '/stat',
    		'route'	=> '/{{SORT}}/site/statistic',
        ],
    ],
    'index' => [
        'data' => [
            'suffix' => '',
			'pattern' => '/',
    		'route'	=> '/{{SORT}}/site/home',
        ],
    ],
    'kl' => [
		//'only' => ['kele'],
        'data' => [
            'suffix' => '',
			'pattern' => '/',
    		'route'	=> '/{{SORT}}/site/home',
        ],
    ],

    'page' => [
        'data' => [
			'pattern' => '/baom-<tcode:\w+>-<city_code:\w+>',
    		'route'	=> '/{{SORT}}/spread-page/index',
        ],
    ],
    'signup' => [
        'data' => [
			'pattern' => '/jz-signup',
    		'route'	=> '/{{SORT}}/signup/index',
        ],
    ],
];
