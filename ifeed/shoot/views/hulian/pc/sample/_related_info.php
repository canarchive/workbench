<?php
$preInfo = $infos['preInfo'];
$preUrl = empty($preInfo) ? 'javascript: void(0)' : $this->context->getShowUrl($preInfo['id']);
$preName = empty($preInfo) ? '没有了' : $preInfo['name'];
$preThumb = empty($preInfo) ? '' : "<img src='" . $preInfo->resizePic('thumb', 124, 88) . "' class='fl' title='{$preName}' />";
$nextInfo = $infos['nextInfo'];
$nextUrl = empty($nextInfo) ? 'javascript: void(0)' : $this->context->getShowUrl($nextInfo['id']);
$nextName = empty($nextInfo) ? '没有了' : $nextInfo['name'];
$nextThumb = empty($nextInfo) ? '' : "<img src='" . $nextInfo->resizePic('thumb', 124, 88) . "' class='fr' title='{$nextName}' />";
?>
<div class="content_banner cf">
    <div class="info_prev fl">
        <a href="<?= $preUrl; ?>" title="<?= $preInfo['name']; ?>">
            <span class="left_dir fl"></span>
            <?= $preThumb; ?>
            <strong>上一篇</strong>
            <?= $preName; ?>
        </a>
    </div>
    <div class="info_next fr">
        <a href="<?= $nextUrl; ?>" title="<?= $nextInfo['name']; ?>">
            <span class="fr"></span>
            <?= $nextThumb; ?>
            <strong>下一篇</strong>
            <?= $nextName; ?>
        </a>
    </div>
</div>
<div class="ct6 ert">
    <div class="ertcon">
        <span class="p2">你可能会喜欢</span>
        <span class="p1 fs16">MAY LIKE</span>
    </div>
</div>
<div class="chinacon swiper-container cf">
<ul class="swiper-wrapper cf">
        <?php foreach ($infos['rInfos'] as $info) { ?>
    <li class="swiper-slide">
        <a href="<?= $this->context->getShowUrl($info['id']); ?>" title="<?= $info['name']; ?>">
            <div class="viimgz ">
            <img src="<?= $info->resizePic('thumb', 280, 440); ?>" data-cache="true" width="280" height="440" alt="<?= $info['name']; ?>" /></div>
            <p class="fs22 pt20"><?= $info['name']; ?></p>
            <!--<p class="fs10"></p>-->
        </a>
    </li>
    <?php } ?>
</ul>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>
