<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/third/kl/css/style.css">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/third/kl/css/myreset.css">
<title>科勒微装</title></head>

<body style="background-color: #bda38c">
<div class="loadFa">
    <div class="loader"></div>
</div>
<div class="hengPin">为了您更好的视觉体验，请使用竖屏观看</div>
<?php echo $this->render('_kl-1'); ?>
<?php echo $this->render('_kl-2'); ?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/js/jquery.imgpreload.js" type="text/javascript"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/third/kl/js/fastclick.js" type="text/javascript"></script>
<?php echo $this->render('_js'); ?>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
</body>

</html>
