<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="section">
    <div class="server_main">
        <div class="container">
            <div class="server-content">
                <div class="zq-menu floatL fl-menu">
                    <ul>
                        <li class="t">法律隐私</li>
                        <li>
                            <a href="/agreement.html" <?php if ($view == 'agreement') { echo 'class="active"'; } ?>>注册协议</a></li>
                        <li>
                            <a href="/attention.html" <?php if ($view == 'attention') { echo 'class="active"'; } ?>>法律公告</a></li>
                        <li>
                            <a href="/privacy.html" <?php if ($view == 'privacy') { echo 'class="active"'; } ?>>隐私保护</a></li>
                        <li>
                            <a href="/statement.html" <?php if ($view == 'statement') { echo 'class="active"'; } ?>>仿冒声明</a></li>
                    </ul>
                </div>
                <?= $this->render("_{$view}"); ?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
