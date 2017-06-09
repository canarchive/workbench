<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';

$cssFiles = ['website'];;
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'merchant/adview/css']);
$jsFiles = ['modernizr'];;
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'merchant/adview/js']);
?>
<?php $this->beginContent('@merchant/views/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
