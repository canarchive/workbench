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

<!-- /wrap -->
<div class="wrap">
    <div class="container about-index">
        <?= $this->render('../common/_breadnav', ['datas' => ['/desc.html' => '关于我们', '/desc.html' => '快速了解右视觉']]); ?>
        <?= $this->render('../../_fivepicture'); ?>
        <div class="row titleimg">
            <img class="img-responsive" src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/aboutus-pic.png" alt="快速了解右视觉" /></div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 bobg">
                <?= $this->render('../../_desc_brief'); ?>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 bobg bobg2">
                <?= $this->render('../../_desc_desc'); ?>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 bobg">
                <?= $this->render('../../_desc_comment'); ?>
            </div>
        </div>
        <div class="row logo-change">
            <div class="col-xs-12 col-md-12 nopadding lefttitle">
                <h3>EALE 右视觉LOGO演绎</h3></div>
            <div class="col-xs-12 col-sm-12 col-md-6 nopadding logo">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/logo-change.png" class="img-responsive" />
                <p>2009年，右视觉LOGO的发布，右字的图形演绎结合中国文化的内涵相结合。变成网络上最常看到的图形之一</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 nopadding logo">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/logo-change2.png" class="img-responsive" />
                <p>2014年，右视觉LOGO进行了提炼和简化。也更为内敛。更为包容。</p>
            </div>
        </div>
        <div class="row titleimg">
            <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>eale/picbefore/images/@8afd0094-9726-47af-9794-b53a8a59b6a6.png" alt="发展历程" /></div>
        <div class="history">
            <?= $this->render('../../_desc_history'); ?>
        </div>
    </div>
</div>
