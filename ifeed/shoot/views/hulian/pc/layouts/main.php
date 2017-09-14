<?php
use yii\helpers\Url;

$siteCode = $this->context->siteCode;
$cssFiles = ['common', 'swiper.min'];//, 'main_golden', 'main_blue'];
if (true) {//in_array($siteCode, ['shoot', 'toteme'])) {
    $cssFiles = array_merge($cssFiles, ['main_golden']);
} else {
    $cssFiles = array_merge($cssFiles, ['main_blue']);
}
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['assetSort' => 'assetself', 'files' => $cssFiles, 'path' => 'hulian/assets/css/']);
?>
<?php $this->beginContent('@ifeed/shoot/views/main.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<a name="top" id="top"></a>
<?= $this->render('@ifeed/shoot/views/hulian/pc/common/_header'); ?>
<?= $content; ?>
<?= $this->render('@ifeed/shoot/views/hulian/pc/common/_footer'); ?>
<?php //echo $this->render('@ifeed/shoot/views/hulian/pc/common/_footer-signup'); ?>
<?= $this->render('@ifeed/shoot/views/hulian/pc/common/_footer-js'); ?>
<div class="slide_help" style="display: block;">
    <a class="attention">
	    <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/images/wx.png" width="68px" height="72px" alt="">
    </a>
    <a class="return_top" href="#"></a>
</div>
<?php $this->endContent(); ?>
