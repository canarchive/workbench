<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';
?>
<?php $this->beginContent('@common/views/main-base.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
