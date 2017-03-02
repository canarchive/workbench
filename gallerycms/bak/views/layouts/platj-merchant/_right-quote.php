<?php
use yii\helpers\StringHelper;
$info = $this->context->mDatas['info'];
$qInfos = $this->context->mDatas['quoteInfos'];
?>
<div class="p_dianPing">
    <p class="p_p_title clearfix">
        <span class="fl">相关报价</span>
        <a href="<?= "/{$info['city_code']}/quote/"; ?>" class="fr">更多报价>></a></p>
    <?php $i = 1; foreach ($qInfos as $info) { if ($i > 5) { break; } ?>
    <ul class="dianPing_ul">
        <li class="li1">
            <font class="p_red">
                <a href="<?= "/{$info['city_code']}/quote_show_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a></font>获取报价
            <font class="p_red"></font></li>
        <li class="li2 clearfix">
            <span class="fl span1">
                <image src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1a0eb-2516.png"></span>
                    <span class="fr span2"><?= date('Y-m-d', $info['created_at']); ?></span></li>
        <li class="li3"><?= $info['name']; ?></li>
    </ul>
    <?php $i++; } ?>
</div>
