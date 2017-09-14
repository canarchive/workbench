<?php
use yii\widgets\LinkPager;
?>

<div class="hengqie">
    <div class="china">
        <div class="ct6 ert">
            <div class="ertcon">
                <span class="p2"><?= $sortName; ?>作品展示</span>
                <span class="p1 fs18"><?= $sortBrief; ?></span>
            </div>
        </div>
    </div>
    <div class="chinacon tal lh15">
        <ul class="cf">
            <?php foreach ($infos as $info) { ?>
            <li>
                <a href="<?= $this->context->getShowUrl($info['id']); ?>" title="<?= $info['name']; ?>">
                    <div class="viimg pre">
                        <i class="xj"></i>
                        <img src="<?= $info->resizePic('thumb', 293, 450); ?>" data-cache="true" alt="<?= $info['name']; ?>摄影图片"/></div>
                    <p class="fs20 pt10"><?= $info['name']; ?></p>
                    <p class="fs10"></p>
                    <!--<p class="fs14">标签:<?= $info['tag']; ?></p>-->
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="mpage c">
    <!--<div class="all-page">
        共<span><?= $pages->totalCount; ?></span>条
    </div>
    <div class="now-page">当前第<span><?= $page; ?>/<?= ceil($pages->totalCount / $pages->defaultPageSize); ?></span>页</div>-->
    <?= LinkPager::widget(['pagination' => $pages]); ?>
</div>
