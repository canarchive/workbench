<div class="top_nav">
    <ul class="swiper-wrapper clearfix">
        <li class="swiper-slide cur">平台推荐</li>
        <li class="swiper-slide">汽车摄影</li>
        <li class="swiper-slide">电器摄影</li>
        <li class="swiper-slide">服装摄影</li>
        <li class="swiper-slide">静物摄影</li>
        <li class="swiper-slide">美食摄影</li>
        <li class="swiper-slide">其他</li>
        <li class="swiper-slide">平台推荐</li>
    </ul>
</div>
<section class="index_contain">
    <ul class="index_list" style="margin-top: 7.5rem">
        <?php foreach ($infos as $info) { ?>
        <li>
            <a href="<?= "{$this->context->currentDomain}/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
                <div class="main_img">
                    <img src="<?= $info->resizePic('thumb', 500, 433); ?>" alt="<?= $info['name']; ?>摄影图片"/>
                </div>
                <p class="main_text"><?= $info['name']; ?></p>
                <div class="click_more">
                    <span>详情</span>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</section>
<?php 
$pageCount = ceil($pages->totalCount / $pages->defaultPageSize);
if ($pageCount > 1) { 
$urlBase = empty($sort) ? '/case' : "/case_{$sort}";
$prePage = $page > 1 ? $page - 1 : 1;
$preUrl = $prePage == 1 ? "{$urlBase}/" : "{$urlBase}_{$prePage}/";
$nextPage = $page < $pageCount ? $page + 1 : $pageCount;
$nextUrl = "{$urlBase}_{$nextPage}/";
$p
?>
<section class="mpage">
    <a href="<?= $preUrl; ?>">上一页</a>
    <div class="mpage_option">
        <select>
            <?php for ($i = 1; $i <= $pageCount; $i++) { $url = $i == 1 ? "{$urlBase}/" : "{$urlBase}_{$i}/"; ?>
            <option value="<?= $url; ?>"><?= $i . '/' . $pageCount; ?></option>
            <?php } ?>
        </select>
    </div>
    <a class="cur" href="<?= $nextUrl; ?>">下一页</a>
</section>
<?php } ?>
