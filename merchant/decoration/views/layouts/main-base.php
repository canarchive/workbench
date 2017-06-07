<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : ['website'];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : ['modernizr'];
?>
<?php $this->beginContent('@merchant/views/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
