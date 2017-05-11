<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/house/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    //window.location.href = "<?= $this->context->pcMappingUrl; ?>";
}
</script>
<?= $content; ?>
<?php $this->endContent(); ?>
