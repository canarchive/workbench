<?php
$this->params['noBanner'] = true;
?>
<div class="casetit">
    <a href="javascript: void(0);">
        <span class="case_left"><?= $sortName; ?></span>
        <span class="case_right">作品展示</span>
        <!--<span class="case_more">更多</span>-->
    </a>
</div>
<div class="listc">
    <ul class="clearfix">
        <?php foreach ($infos as $info) { ?>
        <li>
            <a href="<?= "/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>" target="_blank">
                <img src="<?= $info->resizePic('thumb', 280, 417); ?>" width="100%" border="0" alt="<?= $info['name']; ?>摄影图片"/></a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php 
$pageCount = ceil($pages->totalCount / $pages->defaultPageSize);
if ($pageCount > 1) { 
$urlBase = empty($sort) ? '/case' : "/case_{$sort}";
$prePage = $page > 1 ? $page - 1 : 1;
$preUrl = $prePage == 1 ? "{$urlBase}/" : "{$urlBase}_{$prePage}/";
$nextPage = $page < $pageCount ? $page + 1 : $pageCount;
$nextUrl = "{$urlBase}_{$nextPage}/";
?>
<section class="mpage">
    <a href="<?= $preUrl; ?>">上一页</a>

    <div class="mpage_option">
        <span><?= $page . '/' . $pageCount; ?></span>
        <ul>
            <?php for ($i = 1; $i <= $pageCount; $i++) { $url = $i == 1 ? "{$urlBase}/" : "{$urlBase}_{$i}/"; ?>
            <li><a href="<?= $url; ?>"><?= $i . '/' . $pageCount; ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <a class="cur" href="<?= $nextUrl; ?>">下一页</a>
</section>
<?php } ?>
