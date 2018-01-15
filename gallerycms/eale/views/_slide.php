<?php
//$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $adPage, 'position' => 'slide']);
$curPage = $this->context->currentPage;
$curPages = [
    //'tag-list' => 'sample-star',
];
$curPage = isset($curPages[$curPage]) ? $curPages[$curPage] : $curPage;
$adParams = ['site_code' => $this->context->siteCode, 'page' => $curPage, 'position' => 'slide'];
$adInfos = $this->context->getAdDatas($adParams);
$count = count($adInfos);
?>
<?php if ($curPage != 'site-map') { ?>
<div id="yq_carousel" class="carousel slide carousel_yq" data-ride="carousel" align="center">
    <ol class="carousel-indicators" role="listbox">
        <?php for ($i = 0; $i < $count; $i++) { ?>
        <li data-target="#yq_carousel" data-slide-to="<?= $i; ?>" <?php if ($i == 0) { echo 'class="active"'; } ?>></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($adInfos as $key => $info) { $thumbStr = $this->context->isMobile ? $info->resizePic('thumb', 640, 218) : $info['thumb']; ?>
        <div class="item <?php if ($key == 0) { echo 'active'; } ?>">
            <a href="<?= $info['url']; ?>"><img src="<?= $thumbStr; ?>" /></a>
        </div>
        <?php } ?>
    </div>
    <p class="left yq_carousel-control" data-slide="prev" href="#yq_carousel">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/carousel-left.png" />
    </p>
    <p class="right yq_carousel-control" data-slide="next" href="#yq_carousel">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/carousel-right.png" />
    </p>
</div>
<?php } ?>
