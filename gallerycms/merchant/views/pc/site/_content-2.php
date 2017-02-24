<?php
$info = $this->context->mDatas['info'];
?>
<div class="first">
    <div class="first_title clearfix">
        <h3 class="gai"><?= $info['name_full']; ?>介绍</h3>
        <a href="<?php echo Yii::getAlias('@gallerycmsurl') . "/{$info['city_code']}/showsj_{$info['code']}.html"; ?>" title="<?= $info['name_full']; ?>">
            <u>查看更多</u>&gt;&gt;</a>
    </div>
    <div class="first_btn"><?= $info['description']; ?>
        <a href="<?php echo Yii::getAlias('@gallerycmsurl') . "/{$info['city_code']}/showsj_{$info['code']}.html"; ?>" title="<?= $info['name_full']; ?>介绍"><u>更多</u>&gt;&gt;</a>
    </div>
</div>
