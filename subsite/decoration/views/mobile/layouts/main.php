<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';
?>
<?php $this->beginContent('@subsite/views/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
