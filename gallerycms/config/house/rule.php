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
    'city-index' => [
        'hosts' => ['base', 'm', '3g', 'wap'],
        'data' => [
            'pattern' => '/<city_code:\w+>/', 
            'route' => '/house/site/index', 
            'suffix' => ''
        ],
    ],
]);
