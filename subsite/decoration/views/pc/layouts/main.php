<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';

$cid = $this->context->cid;
$cid = empty($cid) && isset($this->params['cidDefault']) ? $this->params['cidDefault'] : $cid;
?>
<?php $this->beginContent('@subsite/views/main.php'); ?>
<?= $content; ?>
<?= $this->render('@subsite/decoration/views/_stat', []); // 顶部 ?>
<?php $this->endContent(); ?>
