<?php
use yii\widgets\LinkPager;
$this->params['showBanner'] = true;
$this->params['currentPage'] = 'sort-' . $this->context->currentSort;
$sort = empty($sort) ? 'all' : $sort;
$sortUrl = $this->context->getSortUrl($sort);
$this->params['metaExt'] = $page != 1 ? "<link rel='canonical' href='{$sortUrl}'>" : '';
?>

<div class="hengqie">
    <div class="china">
        <div class="ct6 ert">
            <div class="ertcon">
                <h1 class="p2"><?= $sortName; ?>作品展示</h1>
                <span class="p1 fs18"><?= $sortBrief; ?></span>
            </div>
        </div>
    </div>
    <div class="chinacon tal lh15">
        <ul class="cf">
            <?php foreach ($infos as $info) { ?>
            <li>
                <a href="<?= $this->context->getShowUrl($info['id']); ?>" title="<?= $info['name'] . '摄影图片'; ?>">
                    <div class="viimg pre">
                        <i class="xj"></i>
                        <img src="<?= $info->resizePic('thumb', 293, 450); ?>" data-cache="true" alt="<?= $info['name']; ?>摄影图片"/></div>
                    <p class="fs20 pt10"><?= $info['name']; ?></p>
                    <p class="fs10"></p>
					<?php //echo '<p class="fs14">标签:' . $info['tag'] . '</p>-->'; ?></a>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="mpage c">
    <?php //echo $this->render('_page-elem'); ?>
    <?php $pageStr = LinkPager::widget(['pagination' => $pages, 'linkOptions' => ['rel' => 'nofollow']]); $pageStr = str_replace('cn/" rel="nofollow"', 'com/"', $pageStr); echo $pageStr;?>
</div>
