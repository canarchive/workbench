<?php

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/spread/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $this->render('_top-js'); ?>
<?= $content; ?>
<input type="hidden" id="cid" value="<?= $this->context->merchantInfo['id']; ?>" />
<input type="hidden" id="returnUrl" value="<?= $this->context->returnUrl; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = Yii::$app->params['statUrl']; echo $statUrl; ?>
</div>
<?php if (isset($this->params['bodyStr'])) { echo $this->params['bodyStr']; } ?>
<?= $this->render('@subsite/views/_stat', []); // 顶部 ?>
<?= $this->render('@subsite/views/_inline', []); ?>
<?php $this->endContent(); ?>
