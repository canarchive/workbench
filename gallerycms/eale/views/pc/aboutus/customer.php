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
        <?= $this->render('../common/_breadnav', ['datas' => ['/desc.html' => '关于我们', '/customer.html' => '右视觉合作客户']]); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 title-mar">
                <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/5ac02491-0adf-4557-8d8a-3006d47e15bb.jpg" alt="右视觉合作客户" /></div>
            <?php foreach ($infos as $info) { ?>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="<?= $info['url']; ?>" target="_blank"><img src="<?= $info['thumb']; ?>" class="img-responsive" style="width: 190px; height: 190px;"/></a>
                <p class="title-bg"><?= $info['name']; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
