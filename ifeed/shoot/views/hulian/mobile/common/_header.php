<?php
$siteCode = $this->context->siteCode;
?>
<div class="top">
	<a class="top_return" href="<?= $this->context->getSiteUrl(); ?>" title="<?= Yii::$app->params['siteName']; ?>"></a>
	<a class="top_logo" href="<?= $this->context->getSiteUrl(); ?>" title="<?= Yii::$app->params['siteName']; ?>">
        <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/logo/<?= $siteCode; ?>_mobile.png?v=3" alt="<?= Yii::$app->params['siteName']; ?>"/>
    </a>
    <a class="top_menu"></a>
</div>
