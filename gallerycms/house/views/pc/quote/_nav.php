<?php
$navDatas = $this->context->navDatas;
?>
<div class="siteNav">
    <div class="siteNavBg clear">
        <ul class="siteNavSmallBgL">
            <li>
                <a href='/' class="sp-top-map-box">
                    <i class="sprite-topbar sp-top-map"></i>
                    <span class="topbar-city"><?= $this->context->currentCityName; ?></span>
                </a>
            </li>
            <?php foreach (['index', 'merchant', 'sample', 'quote'] as $nav) { ?>
            <li><a href="<?= $navDatas[$nav]['url']; ?>"><?= $navDatas[$nav]['name']; ?></a></li>
            <?php } ?>
        </ul>
        <!-- 登录前右导航 start -->
        <ul class="siteNavBgR">
            <li><a class="color" href="<?= $navDatas['office']['url']; ?>" target="_blank"><?= $navDatas['office']['name']; ?></a></li>
            <li class="last">客服电话：<?= Yii::$app->params['siteHotline']; ?></li>
        </ul>
        <!-- 登录后右导航 start -->
        <?php //echo $this->render('_nav-logined'); ?>
    </div>
</div>
