<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/shootplat/shoot/img/e86b3-8357.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $this->render('_top-js'); ?>
<?= $content; ?>
<input type="hidden" id="cid" value="<?= $this->context->merchantInfo['id']; ?>" />
<input type="hidden" id="position" value="<?= $this->context->pagePosition; ?>" />
<input type="hidden" id="position_name" value="<?= $this->context->pagePositionName; ?>" />
<input type="hidden" id="returnUrl" value="<?= $this->context->returnUrl; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = Yii::$app->params['statUrl']; echo $statUrl; ?>
</div>
<?php if (isset($this->params['bodyStr'])) { echo $this->params['bodyStr']; } ?>
<?= $this->render('@subsite/views/_stat', []); // 顶部 ?>
<?php $this->endContent(); ?>
