<?php
use yii\helpers\Url;

$siteCode = $this->context->siteCode;
$cssFiles = ['swiper.min'];//, 'main_golden', 'main_blue'];
if (in_array($siteCode, ['shoot', 'toteme'])) {
    $cssFiles = array_merge($cssFiles, ['mobile_golden']);
} else {
    $cssFiles = array_merge($cssFiles, ['mobile_blue']);
}
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['assetSort' => 'assetself', 'files' => $cssFiles, 'path' => 'hulian/assets/m/css/']);
$this->params['doctypeStr'] = 'html';
?>
<?php $this->beginContent('@gallerycms/shoot/views/main.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    window.location.href = "<?= $this->context->pcMappingUrl; ?>";
}
</script>
<?= $this->render('@gallerycms/shoot/views/hulian/mobile/common/_header'); ?>
<?php if (!isset($this->params['noBanner'])) { echo $this->render('@gallerycms/shoot/views/hulian/mobile/common/_header-banner'); } ?>
<?= $this->render('@gallerycms/shoot/views/hulian/mobile/common/_nav'); ?>
<?= $content; ?>
<?php //echo $this->render('@gallerycms/shoot/views/hulian/mobile/common/_footer-form'); ?>
<?= $this->render('@gallerycms/shoot/views/hulian/mobile/common/_footer'); ?>
<?php $this->endContent(); ?>
