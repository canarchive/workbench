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
]);
