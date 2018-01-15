<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'style_m',
];
$this->params['jsFiles'] = [
    'jquery', 'unveil', 'bootstrap', 'hammer', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="wrap">
    <div class="container about">
        <?= $this->render('../common/_breadnav'); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 title-mar"></div>
            <?php foreach ($infos as $info) { ?>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="<?= $info['url']; ?>" target="_blank"><img src="<?= $info->resizePic('thumb', 190, 190); ?>" class="img-responsive" /></a>
                <p class="title-bg"><?= $info['name']; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
