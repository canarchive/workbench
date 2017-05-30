<?php
use yii\helpers\Url;
use yii\helpers\Html;

$cssStr = isset($this->params['cssStr']) ? $this->params['cssStr'] : '';
$jsStr = isset($this->params['jsStr']) ? $this->params['jsStr'] : '';
$jsFooterStr = isset($this->params['jsFooterStr']) ? $this->params['jsFooterStr'] : '';
$statCodeStr = isset($this->params['statCodeStr']) ? $this->params['statCodeStr'] : '';
$doctypeStr = isset($this->params['doctypeStr']) ? $this->params['doctypeStr'] : 'html';
?>
<!DOCTYPE <?= $doctypeStr; ?>>
<html lang="zh-cn">
<head>
<?= $this->render('_meta'); ?>
<?= $this->render('_tdk'); ?>
<?= $cssStr; ?>
<?= $jsStr; ?>
<?= $statCodeStr; ?>
</head>
<body <?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>>
<?= $content; ?>
<?= $jsFooterStr; ?>
<input type="hidden" id="position" value="<?= $this->context->pagePosition; ?>" />
<input type="hidden" id="position_name" value="<?= $this->context->pagePositionName; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none"></div>
</body>
</html>
