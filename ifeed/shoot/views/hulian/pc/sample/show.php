<link href="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/css/jquery-ui.min.css" rel="stylesheet" />
<div class="hengqie">
    <div class="china">
        <div class="crumbs">
            <a href="/" title="<?= $this->context->currentSiteInfo['name']; ?>">首页</a>
            <span>> </span>
            <a href="/case/" title="<?= $this->context->currentSiteInfo['name'] . '作品展示'; ?>">作品展示</a>
            <span>> </span>
            <a href="/case_<?= $info['sort']; ?>/" title="<?= $this->context->currentSortInfos[$info['sort']]['name'] . '作品展示'; ?>"><?= $this->context->currentSortInfos[$info['sort']]['name']; ?>作品展示</a>
            <span>> </span>
            <a class="last_child" href="javascript:void(0);"><?= $info['name']; ?></a>
        </div>
        <div class="ct6 ert">
            <div class="ertcon">
                <h1 class="p2"><?= $info['name']; ?></h1>
                <span class="p1 fs16">SHOWPHOTO</span>
            </div>
        </div>
    </div>
    <div class="det bg_a">
        <ul id="itm">
            <?php foreach ($info->picture as $pInfo) { ?>
            <li>
                <a href='<?= $pInfo['url']; ?>' class="lightbox2" rel="group2" title="<?= $info['name'] . '摄影图片'; ?>">
                    <img src='<?= $pInfo['url']; ?>' alt="<?= $info['name']; ?>摄影图片"/></a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?= $this->render('_related_info', ['infos' => $relatedInfos]); ?>
</div>
