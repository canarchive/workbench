<?php
foreach ($quoteSortInfos as $sortKey => $sortInfo) {
    $titles[$sortKey] = !empty($tagInfos[$sortKey]) ? $sortInfo['values'][$tagInfos[$sortKey]] : $sortInfo['name'];
}
?>
<div class="dropnav-btngroup bg-ff">
    <ul class="screen-tab border-box">
        <?php foreach ($quoteSortInfos as $sortKey => $sortInfo) { ?>
        <li>
            <p href="#">
            <em class="f16 v-middle"><?= $titles[$sortKey]; ?></em>
                <i class="iconfont icone60d"></i>
            </p>
        </li>
        <?php } ?>
    </ul>
    <?php $i = 1; foreach ($quoteSortInfos as $sortKey => $sortInfo) { $classElem = $i == 1 ? ' class="screen-con"' : ($i == 2 ? ' class="screen-con" style="height: 250px;"' : ' class="screen-con f12"'); ?>
    <ul data-index="b" <?= $classElem; ?>>
		<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
        <li class="w-p33 <?php if ($key == $tagInfos[$sortKey]) { echo 'active'; } ?>">
            <a href="<?= "/{$this->context->currentCityCode}/quote_{$tag}/"; ?>" title="<?= $value; ?>"><?= $value; ?></a>
        </li>
        <?php } ?>
    </ul>
    <?php $i++; } ?>
</div>
