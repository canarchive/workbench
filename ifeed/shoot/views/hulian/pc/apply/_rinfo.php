<ul class="swiper-wrapper cf">
    <?php foreach ($datas as $info) { ?>
    <li class="swiper-slide">
        <a href="<?= "{$this->context->currentDomain}/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
            <div class="viimgz ">
            <img src="<?= $info->resizePic('thumb', 280, 440); ?>" data-cache="true" width="280" height="440" alt="<?= $info['name']; ?>" /></div>
            <p class="fs22 pt20"><?= $info['name']; ?></p>
            <p class="fs10"></p>
        </a>
    </li>
    <?php } ?>
</ul>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
