<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/shootplat/shoot/img/e86b3-8357.ico';
?>
<?php $this->beginContent('@backend/views/base/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
