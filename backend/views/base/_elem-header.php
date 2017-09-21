<?php
use yii\helpers\Html;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <title><?= Html::encode($this->currentTitle) ?></title>
	<link id="bs-css" href="<?= Yii::getAlias('@asseturl/backend') . '/css/bootstrap-' . $themeCss = $this->getPointParam('themeCss', 'cerulean') . '.min.css'; ?>" rel="stylesheet">
    <script src="<?= Yii::getAlias('@asseturl'); ?>/bower_components/jquery/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/backend'); ?>/img/favicon-fb.ico">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
