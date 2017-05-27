<script type="text/javascript">
window.ASSETSELF_URL = '<?= Yii::getAlias('@assetself'); ?>';
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<?php if (strpos($this->context->host, 'weinaya') !== false ) { ?>
<?php if ($this->context->isMobile) { ?>
<script src="/stat.php"></script>
<?php } ?>
<?php } ?>
