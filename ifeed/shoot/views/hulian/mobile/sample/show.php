<?php
$this->params['noBanner'] = true;
?>
<div class="crumbs">
    <!--<span>您的当前位置：</span>-->
    <a href="<?= $this->context->currentDomain; ?>" title="<?= $this->context->currentSiteInfo['name']; ?>">首页</a>
    <span> > </span>
    <a href="<?= $this->context->getSortUrl('all'); ?>" title="<?= $this->context->currentSiteInfo['name'] . '作品展示'; ?>">作品展示</a>
    <span>> </span>
    <a href="<?= $this->context->getSortUrl($info['sort']); ?>" title="<?= $this->context->sortInfos[$info['sort']]['name'] . '作品展示'; ?>"><?= $this->context->sortInfos[$info['sort']]['name']; ?>作品展示</a>
    <span>> </span>
    <a class="last_child" href="javascript:void(0);"><?= $info['name']; ?></a>

</div>
<div class="artical" style="margin-top:-5px;">
    <div class="content">
        <?php foreach ($info->picture as $pInfo) { ?>
        <img src='<?= $pInfo['url']; ?>' alt="<?= $info['name']; ?>" boder="0px" alt="<?= $info['name']; ?>摄影图片"/>
        <?php } ?>
    </div>
</div>
<?= $this->render('_related', ['infos' => $relatedInfos]); ?>
