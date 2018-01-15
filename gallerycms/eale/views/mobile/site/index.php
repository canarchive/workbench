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
<?= $this->render('_indexthree'); ?>
<?= $this->render('../../_announce'); ?>
<?= $this->render('_sample', ['infos' => $sampleInfos]); ?>
<?php echo $this->render('_info', ['infos' => $infoInfos]); ?>
<div align="center" class="centertitle">
    <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/fe984540-afa5-492d-8b21-f20f674446de.png" alt="与右视觉同行" />
    <p>向”右“看齐 与右视觉同行</p>
</div>
<div class="container cooperation">
    <?php echo $this->render('../../_cstar', ['isMobile' => true, 'type' => 'customer', 'infos' => $customerInfos]); ?>
    <?php echo $this->render('../../_cstar', ['isMobile' => true, 'type' => 'star', 'infos' => $starInfos]); ?>
</div>
<?php //echo $this->render('_cstar', ['customerInfos' => $customerInfos, 'starInfos' => $starInfos]); ?>
