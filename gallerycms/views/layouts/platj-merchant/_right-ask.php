<?php
use yii\helpers\StringHelper;
$info = $this->context->mDatas['info'];
$aInfos = $this->context->mDatas['askInfos'];
$baseUrl = Yii::getAlias('@gallerycmsurl');
?>
<div class="heat">
    <div class="heat_title" style="margin-top:10px;">
        <span>相关问答</span></div>
    <div class="heat_cont">
        <ul>
        <li class="clearfix">
            <?php $i = 1; foreach ($aInfos as $info) { if ($i > 10) { break; } $elemClass = $i <= 3 ? 'one' : 'blue'; ?>
            <li class="clearfix">
                <span class="h_<?= $elemClass; ?>"><?= $i; ?></span>
                <a class="my_hyrdb" href="<?= "{$baseUrl}/askshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
                    <u><?= StringHelper::truncate($info['name'], 10, '...'); ?></u>
                </a>
                <span class="Rside"><?= $info['sort']; ?></span></li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
