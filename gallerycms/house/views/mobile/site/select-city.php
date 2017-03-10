<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['index.min', '9c07e-2206', 'headfooter.min'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
echo $this->render('@gallerycms/views/layouts-m/plat8/_js-header');
?>
<header class="header pg-hd">
    <a id="headcitycode" class="icon-logo-index" href="/"></a>
    <a class="location-wrap" href="/city/index">
        <!--<i class="icon-location"></i>-->
        <span id="head_cityname"></span>
    </a>
    <a class="telephone" href="tel:<?= Yii::$app->params['siteHotline']; ?>">
        <i class="icon-tel"></i>
    </a>
</header>
<div class="city_page to8to_page" id="cityPage">
    <!-- 当前定位开始 -->
    <div class="current-city" id="cityPageCurrentCityWraper">
        <div class="info">当前定位：<em ><?= $this->context->currentCityName; ?></em></div>
    </div>
    <div class="city_info">
        <!-- 热门城市开始 -->
        <section class="row">
            <header class="row-hd">热门城市</header>
            <div class="row-bd">
                <ul class="hot-citys col-3">
                <?php foreach (Yii::$app->params['companyInfos'] as $cInfo) { ?>
                    <a href="<?= "/{$cInfo['code']}/"; ?>" title="<?= $cInfo['name']; ?>装修网"><li><?= $cInfo['name']; ?></li></a>
                <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</div>
<div class="pg-ft">
    <ul class="terminal-nav">
        <li>
            <a class="active" href="javascript:void(0)">触屏版</a></li>
        <li>
            <span class="i-sep"></span>
            <a href="http://www.to8to.com/">电脑版</a></li>
        <li>
            <span class="i-sep"></span>
            <a href="http://m.to8to.com/news/article/106823.html">关于我们</a>
            <span class="i-sep"></span>
        </li>
        <li>
            <a href="http://m.to8to.com/question.html">常见问题</a></li>
    </ul>
    <div class="company-info">手机土巴兔：
        <a href="http://m.to8to.com">m.to8to.com</a>&nbsp;粤ICP备08125558号
    </div>
</div>
