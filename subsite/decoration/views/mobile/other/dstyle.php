<?php

$this->params['formPosition'] = 'dstyle';
$this->params['formPositionName'] = '活动-设计风格';

Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/css/5f0f8-9370.css" /></head>
<div class="main">
    <div class="title">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/eacc5-3015.jpg" alt="" />
        <p class="tit-name"><?= $data['name']; ?></p>
    </div>
    <div class="box">
        <p class="referral"><?= $data['desc']; ?></p>
    </div>
    <div class="box">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/86409-4279.jpg" alt="" />
        <p class="trait"><?= $data['brief']; ?></p>
    </div>
    <div class="box">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/7efc3-7516.jpg" alt="" />
        <ul class="elem">
            <?php foreach ($data['elems'] as $key => $title) { $index = $key + 1; ?>
            <li>
                <img src="<?= Yii::getAlias('@asseturl') . "/spread/spreadnew/m/img/elem-{$data['code']}-{$index}.jpg"; ?>">
                <span><?= $title; ?></span></li>
            <?php } ?>
        </ul>
    </div>
    <div class="box">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/img/1fbd8-4963.jpg" alt="" />
        <ul class="correlation">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
            <li>
                <img src="<?= Yii::getAlias('@asseturl') . "/spread/spreadnew/m/img/show_{$data['code']}_2_{$i}.jpg"; ?>">
            <?php } ?>
        </ul>
        <ul class="correlation"></ul>
    </div>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/spreadnew/m/js/zepto.min.js"></script>

