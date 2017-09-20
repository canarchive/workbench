<?php
$page = isset($this->params['currentPage']) ? $this->params['currentPage'] : 'index-' . $this->context->siteCode;
$adParams = ['site_code' => $this->context->siteCode, 'position' => 'slide-pc', 'page' => $page];
$adInfos = $this->context->getAdDatas($adParams);
?>
<?php if (!empty($adInfos)) { ?>
<div class="swiper-container1 pre">
    <div class="swiper-wrapper sobox soChange" style="height:600px;">
        <?php foreach ($adInfos as $key => $info) { ?>
        <a class="swiper-slide a_bigImg dsn" href="<?= $info['url']; ?>" title="<?= $info['name']; ?>">
            <img src="<?= $info['thumbUrl']; ?>" alt="<?= $info['name']; ?>"/></a>
        <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<?php } ?>
