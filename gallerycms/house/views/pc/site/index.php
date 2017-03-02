<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['2758e-6760', '50b4a-8762', 'e7465-4140'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('_js-header', []);
?>
<!-- 顶部 -->
<?php echo $this->render('_top'); ?>
<?php echo $this->render('_ad-nav'); ?>
<?php echo $this->render('_logo'); ?>
<?php echo $this->render('_nav'); ?>
<!-- banner -->
<?php echo $this->render('_banner', ['mInfos' => $merchantInfos]); ?>
<!-- main -->
<div class='allcontant'>
    <?php echo $this->render('_content-4', ['infos' => $merchantInfos]); ?>
    <?php echo $this->render('_content-1', ['infos' => $realcaseInfos]); ?>
    <?php echo $this->render('_content-2', ['infos' => $sampleInfos]); ?>
    <?php echo $this->render('_content-3', ['infos' => $workingInfos]); ?>
</div>
</div>
<?php echo $this->render('_quote', ['infos' => $quoteInfos]); ?>
<div class="main">
    <div class="wrap_mar">
        <?php echo $this->render('_ad-ask'); ?>
        <?php //echo $this->render('_ad-time'); ?>
        <?php //echo $this->render('_ask-pic'); ?>
        <?php echo $this->render('_ask', ['infos' => $askInfos]); ?>
    </div>
</div>
<!-- 友情链接 -->
<?= $this->render('_friendlink', ['fInfos' => $this->context->friendlinkInfos]); ?>
<?php //echo $this->render('_ourservice'); ?>
<!-- footer -->
<?= $this->render('@gallerycms/views/layouts/platj/_footer-base'); ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/trade.js"></script>
<div style="display:none;">欢迎访问<?= Yii::$app->params['siteName']; ?>!!!</div></body>
