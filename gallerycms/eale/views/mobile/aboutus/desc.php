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
<div class="container about-index">
    <?= $this->render('../common/_breadnav'); ?>
    <?= $this->render('../../_fivepicture'); ?>
    <div class="row titleimg">
        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/49ee30ed-8915-46b6-a0b7-16fc72bf1c45.png" alt="快速了解右视觉" />
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 bobg bobg1">
            <?= $this->render('../../_desc_brief'); ?>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 bobg bobg2 bobg1">
            <?= $this->render('../../_desc_desc'); ?>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 bobg bobg1">
            <?= $this->render('../../_desc_comment'); ?>
        </div>
    </div>
    <div class="row logo-change">
        <div class="col-xs-12 col-md-12 nopadding lefttitle"><h3>EALE 右视觉LOGO演绎</h3></div>
        <div class="col-xs-12 col-sm-12 col-md-6 nopadding logo">
            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/40b0dc44-8981-4f56-a4e2-61d326dd9f67.png" class="img-responsive" />
            <p>2009年，右视觉LOGO的发布，右字的图形演绎结合中国文化的内涵相结合。变成网络上最常看到的图形之一</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 nopadding logo">
            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/cb0b61aa-ba6a-41a7-81fa-0ba86eca71fe.png" class="img-responsive" />
            <p>2014年，右视觉LOGO进行了提炼和简化。也更为内敛。更为包容。</p>
        </div>
    </div>
    <div class="row titleimg">
        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/ce8c8e57-62da-4544-b21b-c2320708bd8b.png" alt="发展历程" /></div>
    <div class="history">
        <?= $this->render('../../_desc_history'); ?>
    </div>
</div>
