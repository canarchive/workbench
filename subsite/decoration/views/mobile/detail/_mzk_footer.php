<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 667 : $cid;
$type = isset($type) ? $type : '';
?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<ul class="mx_tgfoot">
    <li <?php if ($cPage == 'bj') { echo 'class="mx_tgfootd"'; } ?>><a href="/bm-mnewbj-beijing.html">智能报价</a></li>
    <li <?php if ($cPage == '') { echo 'class="mx_tgfootd"'; } ?>><a href="/bm-mnew-beijing.html">活动详情</a></li>
    <li <?php if ($cPage == 'lf') { echo 'class="mx_tgfootd"'; } ?>><a href="/bm-mnewlf-beijing.html">免费量房</a></li>
</ul>
<!--2017-03-14-底部导航-->
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
