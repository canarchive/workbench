<?php
$siteCode = $this->context->siteCode;
?>
<script type="text/javascript">
window.ASSETSELF_URL = '<?= Yii::getAlias('@assetself'); ?>';
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<?php if (in_array($siteCode, ['wny-sg']) && $this->context->isMobile) { ?>
<script src="/stat.php"></script>
<?php } ?>
