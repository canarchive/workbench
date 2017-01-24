<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/house/favicon.ico';
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
