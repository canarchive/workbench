<?php
use yii\helpers\Url;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/third/eale/images/ficon.png';

$cid = $this->context->cid;
$cid = empty($cid) && isset($this->params['cidDefault']) ? $this->params['cidDefault'] : $cid;
?>
<?php $this->beginContent('@subsite/views/main-pc.php'); ?>
<script type="text/javascript">
window.ASSET_URL = '<?= Yii::getAlias('@assetself'); ?>';
window.SIGINUP_URL = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<?= $content; ?>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
<?php if (isset($this->params['bodyStr'])) { echo $this->params['bodyStr']; } ?>
<?= $this->render('@subsite/decoration/views/_stat', []); // 顶部 ?>
<?php $this->endContent(); ?>
