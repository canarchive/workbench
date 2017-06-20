<?php
$this->params['returnUrl'] = isset($this->context->merchantInfo['returnUrlPc']) ? $this->context->merchantInfo['returnUrlPc'] : $this->context->host;

?>
<?php $this->beginContent('@subsite/views/main.php'); ?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    //window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $content; ?>
<?php $this->endContent(); ?>
