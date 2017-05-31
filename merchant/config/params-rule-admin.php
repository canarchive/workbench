<?php
return [
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
