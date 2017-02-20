<?php
use yii\helpers\StringHelper;
$info = $this->context->mDatas['info'];
$cInfos = $this->context->mDatas['commentInfos'];
?>
<div class="p_dianPing">
    <p class="p_p_title clearfix">
        <span class="fl">最新点评</span>
        <a href="<?= "/{$info['city_code']}/{$info['code']}/comment/"; ?>" class="fr">更多(<?= $info['num_comment']; ?>)>></a></p>
    <?php $i = 0; foreach ($cInfos as $cInfo) { if ($i > 5) { continue; } ?>
    <ul class="dianPing_ul">
        <li class="li1">
            <font class="p_red">
            <a style="color:red;" href="<?= "/{$info['infoUrl']}"; ?>"><?= $info['name']; ?></a></font>业主：<?= $cInfo['ownerInfo']['name']; ?>
            <font class="p_red"></font></li>
        <li class="li2 clearfix">
            <span class="fl span1">
                <image src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1a0eb-2516.png"></span>
                <span class="fr span2"><?= date('Y-m-d', $cInfo['created_at']); ?></span></li>
            <li class="li3"><?= StringHelper::truncate($cInfo['content'], 12, '...'); ?></li></ul>
    <?php $i++; } ?>
</div>
