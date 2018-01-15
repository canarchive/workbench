<?php
//$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $this->context->currentPage, 'position' => 'indexthree']);
$siteInfos = $this->context->siteInfos;
$pageInfos = $this->context->pageInfos;
$siteCode = $this->context->siteCode;
$navInfos = [
    'eale' => ['sample-commercial', 'sample-fashion', 'sample-star'],
    'ieale' => ['sample-star', 'sample-people', 'sample-wedding'],
    'iealecn' => ['sample-work', 'info-train', 'sample-studentwork'],
];
$pictures = [
    'f41f624e-21cc-443d-98e2-d1a47fba9df1.png',
    'bc40d96f-91ee-4967-a13a-039229919ac8.png',
    '74a5a362-0847-49a6-9c5f-8883a04792ba.png',
];
?>
<div class="top-work" align="center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 title">
                <p class=" blankbg">
                    <a href="javascript:void(0)" target="_blank">中国著名摄影品牌-<?= $siteInfos[$siteCode]['name']; ?></a></p>
                <p class="subtitle blankbg">
                    <a href="javascript:void(0)" target="_blank">用镜头透视灵魂</a></p>
            </div>
            <?php $i = 0; foreach ($navInfos[$siteCode] as $navInfo) { ?>
            <div class="col-xs-4 col-sm-4 con">
                <a href="<?= $pageInfos[$navInfo]['mobile-url']; ?>">
                <img src="<?= Yii::getAlias('@asseturl1') . '/eale/picbefore/' . $pictures[$i]; ?>" alt="<?= $pageInfos[$navInfo]['name']; ?>" class="img-responsive"></a>
                <a href="<?= $pageInfos[$navInfo]['mobile-url']; ?>"><?= $pageInfos[$navInfo]['name']; ?></a>
            </div>
            <?php $i++; } ?>
        </div>
    </div>
</div>
