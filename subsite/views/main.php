<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/shootplat/shoot/img/e86b3-8357.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $this->render('_top-js'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    //window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $content; ?>
<?php $this->endContent(); ?>
