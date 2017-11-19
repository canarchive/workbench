<?php 
$subCatInfos = $this->context->categoryModel->getSubDatas($categoryCode);
$broCatInfos = $this->context->categoryModel->getSubDatas($categoryInfo['parent_code']);
$preInfo = $info->getPreNext();
$nextInfo = $info->getPreNext(false);
$rInfos = $info->getRelateInfos(4);
?>
<div class="hengqie">
    <?php //echo $this->render('_show-top'); ?>
    <div>
        <div class="fl" style="width:948px; overflow:hidden;">
            <div class="clh"></div>
            <div style="padding:0 0 20px 0;text-align: left" class="ct2 fs14">当前位置：
                <a href="/">网站首页</a>>
                <a href="/news/" title="新闻动态">新闻动态</a>>
                <a href="/yrzs/" title="育儿知识">育儿知识</a>> 如何让孩子改掉爱“动手”的坏习惯
            </div>
            <div class="tac lh15 fs15" style="width:950px; height:145px; overflow:hidden; background:#e3ecf5;">
                <h1 class="fs25 pt40"><?= $info['name']; ?></h1>
            </div>
            <div style=" padding:20px 0; line-height:1.8"><?= $info['content']; ?></div>
            <div class="c prev fs14 fB" style="text-align: left">上一篇：
			<a href="<?= $preInfo['url']; ?>"><?= $preInfo['name']; ?></a>
                <br/>下一篇：
			<a href="<?= $nextInfo['url']; ?>"><?= $nextInfo['name']; ?></a>
				</div>
            <div class="blk20"></div>
            <?php //echo $this->render('_show-tag'); ?>
        </div>
        <div class="fl type" style="margin-left: 40px; margin-top: 30px;">
            <ul class="ct6 tal">
                <?php foreach (array_merge($subCatInfos, $broCatInfos) as $cCode => $cInfo) { ?>
                <li><a <?php if ($cCode == $categoryCode) { echo 'class="hover"'; } else { echo 'href="/' . $cCode . '/"'; } ?> title="<?= $cInfo['name']; ?>"><span><?= $cInfo['name']; ?></span></a></li>
                <?php } ?>
            </ul>
            <?php //echo $this->render('_show-contact'); ?>
        </div>
        <div class="clh"></div>
    </div>
    <div class="blk20"></div>
    <div class="ct6 ert">
        <div class="ertcon">
            <span class="p2">相关内容</span>
        </div>
    </div>
    <div class="chinacon  swiper-container cf">
        <ul class="swiper-wrapper cf">
        <?php foreach ($rInfos as $rInfo) { ?>
    <li class="swiper-slide">
        <a href="<?= $this->context->getShowUrl($rInfo['id']); ?>" title="<?= $rInfo['name'] . '摄影图片'; ?>">
            <div class="viimgz ">
            <img src="<?= $rInfo->resizePic('thumb', 280, 440); ?>" data-cache="true" width="280" height="440" alt="<?= $rInfo['name'] . '摄影图片'; ?>" /></div>
            <p class="fs22 pt20"><?= $rInfo['name']; ?></p>
        </a>
    </li>
    <?php } ?>
        </ul>
    </div>
</div>
