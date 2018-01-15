<?php 
$titleDesc = $this->context->pageInfos[$this->context->currentPage]['name'];
?>
<div class="row con-title">
    <div class="col-xs-7 col-sm-7 col-nopadding">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_logod.png" /><?= $titleDesc; ?></div>
    <div class="col-xs-5 col-sm-5 col-nopadding">
        <a class="gohome pull-right" href="/">回首页</a></div>
</div>
