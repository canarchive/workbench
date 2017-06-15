<?php
return [
    'adminindex' => [
        'data' => [
            'pattern' => '/admin',
            'route' => '/admin/home/index', 
        ],
    ],
    'adminbase' => [
        'data' => [
            'pattern' => '/<controller>/<action>',
            'route' => '/admin/<controller>/<action>', 
        ],
    ],
    'admin' => [
        'data' => [
            'pattern' => '/<controller>/<action>',
            'route' => '/admin/{{SORT}}/<controller>/<action>', 
        ],
    ],
];
