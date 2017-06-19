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
            'pattern' => '/admin/<controller>/<action>',
            'route' => '/admin/<controller>/<action>', 
        ],
    ],
    'admin' => [
        'data' => [
            'pattern' => '/admin/<sort>/<controller>/<action>',
            'route' => '/admin/<sort>/<controller>/<action>', 
        ],
    ],
];
