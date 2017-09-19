<?php
$siteCode = $this->context->siteCode;
$adParams = ['site_code' => $siteCode, 'position' => 'slide-mobile'];
$adInfos = $this->context->getAdDatas($adParams);
?>
<nav class="index_banner swiper-container" style="width: 100%;margin-top: 0rem">
    <ul class="swiper-wrapper">
        <?php foreach ($adInfos as $key => $info) { ?>
        <li class="swiper-slide">
            <a href="<?= $info['url']; ?>" title="<?= $info['name']; ?>">
                <img src="<?= $info['thumbUrl']; ?>" alt="<?= $info['name']; ?>" style="width: 100%"/></a>
        </li>
        <?php } ?>
    </ul>
    <div class="swiper-pagination"></div>
</nav>
