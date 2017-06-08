<?php
return \common\helpers\RuleFormat::formatRule(array_merge(require(dirname(__DIR__) . '/params-rule.php'), require(dirname(__DIR__) . '/params-rule-admin.php')), require(dirname(__DIR__) . '/params-site.php'), 'flower');
