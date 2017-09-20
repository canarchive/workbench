<?php
$page = isset($this->params['currentPage']) ? $this->params['currentPage'] : 'index-' . $this->context->siteCode;
$adParams = ['site_code' => $this->context->siteCode, 'position' => 'slide-mobile', 'page' => $page];
$adInfos = $this->context->getAdDatas($adParams);
?>
<?php if (!empty($adInfos)) { ?>
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
<?php } ?>
