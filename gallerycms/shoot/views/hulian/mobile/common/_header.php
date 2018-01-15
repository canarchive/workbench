<?php
$siteCode = $this->context->siteCode;
?>
<div class="top">
    <a class="top_return" href="/" title="<?= Yii::$app->params['siteName']; ?>"></a>
    <a class="top_logo" href="/" title="<?= Yii::$app->params['siteName']; ?>">
        <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/logo/<?= $siteCode; ?>_mobile.png" alt="<?= Yii::$app->params['siteName']; ?>"/>
    </a>
    <a class="top_menu"></a>
</div>
