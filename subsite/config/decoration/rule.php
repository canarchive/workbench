<?php
$rules = array_merge(require(dirname(__DIR__) . '/params-rule.php'), [
    'index' => [
        'data' => [
            'suffix' => '',
			'pattern' => '/',
    		'route'	=> '/decoration/spread-page/home',
        ],
    ],
]);
return \common\helpers\RuleFormat::formatRule($rules, require(dirname(__DIR__) . '/params-site.php'));
