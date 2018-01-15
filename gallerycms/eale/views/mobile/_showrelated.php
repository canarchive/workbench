<?php
$returnUrl = isset($returnUrl) ? $returnUrl : '/';
$preInfo = $relatedInfos['preInfo'];
$preUrl = empty($preInfo) ? 'javascript: void(0)' : "/{$infoType}/{$preInfo['id']}.html";
$preName = empty($preInfo) ? '' : $preInfo['name'];
$preThumb = empty($preInfo) ? '' : "<img src='{$preInfo['thumb']}' class='img-responsive' style='width:104px; height: 60px;'/>";
$nextInfo = $relatedInfos['nextInfo'];
$nextUrl = empty($nextInfo) ? 'javascript: void(0)' : "/{$infoType}/{$nextInfo['id']}.html";
$nextName = empty($nextInfo) ? '' : $nextInfo['name'];
$nextThumb = empty($nextInfo) ? '' : "<img src='{$nextInfo['thumb']}' class='img-responsive' style='width:104px; height: 60px;'/>";
?>
<div class="fenx">
    <div class="col-xs-5 col-sm-5 col-nopadding left">
	<a class="return" href="<?= $returnUrl; ?>">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/fanhuian.png" style="width:17px; height:15px;"/>返回</a></div>
    <div class="col-xs-7 col-sm-7 col-nopadding right">
        <?php echo $this->render('_share', ['alignParam' => 'align="center"']); ?>
    </div>
</div>
<div id="pageplace">
    <div class="sxp">
        <div class="col-xs-6 col-sm-6 col-nopadding prev">
            <a href="<?= $preUrl; ?>">
                <div class="pull-left col-xs-6 col-sm-6 col-nopadding list-group-item-img"><?= $preThumb; ?></div>
                <div class="col-xs-6 col-sm-6 col-nopadding list-group-item-caption">
                    <h5 class="list-group-item-heading">上一篇<br /><?= $preName; ?></h5></div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-nopadding">
            <a href="<?= $nextUrl; ?>">
                <div class="pull-left col-xs-6 col-sm-6 col-nopadding list-group-item-img"><?= $nextThumb; ?></div>
                <div class="col-xs-6 col-sm-6 col-nopadding list-group-item-caption">
                    <h5 class="list-group-item-heading">下一篇
                        <br /><?= $nextName; ?></h5></div>
            </a>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?= $this->render('_related', ['infoType' => $infoType, 'infos' => $relatedInfos['rInfos']]); ?>
