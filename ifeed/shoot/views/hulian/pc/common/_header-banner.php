<?php
$adParams = ['site_code' => $this->context->siteCode, 'position' => 'slide-pc'];
$adInfos = [];//$this->context->getAdDatas($adParams);
?>
<div class="swiper-container1 pre">
    <div class="swiper-wrapper sobox soChange" style="height:600px;">
        <?php foreach ($adInfos as $key => $info) { ?>
        <a class="swiper-slide a_bigImg dsn" href="<?= $info['url']; ?>" title="<?= $info['name']; ?>">
            <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>"/></a>
        <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
