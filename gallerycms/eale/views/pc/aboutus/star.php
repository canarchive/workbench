<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'yq_docs',
];
$this->params['jsFiles'] = [
    'jquery', 'bootstrap', 'unveil', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="wrap">
    <div class="container about">
        <?= $this->render('../common/_breadnav', ['datas' => ['/desc.html' => '关于我们', '/customer.html' => '右视觉合作艺人']]); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 title-mar">
                <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/20e96b26-b1ca-4438-9a96-be401e694814.jpg" alt="右视觉合作艺人" /></div>
            <?php foreach ($infos as $info) { ?>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="<?= $info['url']; ?>" target="_blank"><img src="<?= $info['thumb']; ?>" class="img-responsive"/></a>
                <p class="title-bg"><?= $info['name']; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
