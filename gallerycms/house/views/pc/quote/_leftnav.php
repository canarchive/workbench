<?php
?>
<div class="offerlist-l">
    <!-- 左侧链接列表容器 start -->
    <ul class="offer-alist clearfix">
        <li>
            <a href="/<?= $this->context->currentCityCode; ?>/quote/" class="a1btn <?php if (empty($cTag)) { echo 'active'; } ?>" data-nm="all" data-val="">全部报价方案</a>
        </li>
        <?php foreach ($quoteSortInfos as $sortKey => $sortInfo) { ?>
        <li>
            <h2><?= $sortInfo['name']; ?>：</h2>
			<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
            <a href="<?= "/{$this->context->currentCityCode}/quote_{$tag}/"; ?>" class="a1btn <?php if ($key == $tagInfos[$sortKey]) { echo 'active'; } ?>"><?= $value; ?></a>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</div>
