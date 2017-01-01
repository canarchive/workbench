<?php
use yii\helpers\Url;

$firstLevels = [
    ['view' => 'sem', 'name' => 'SEM托管', 'url' => '/sp-sem.html'],
    ['view' => 'seo', 'name' => 'SEO顾问', 'url' => '/sp-seo.html'],
    ['view' => 'customizing', 'name' => '企业定制', 'url' => '/sp-customizing.html'],
    //['controller' => 'sample', 'name' => '成功案例'],
    ['controller' => 'info', 'tag' => '', 'name' => '营销学院', 'url' => '/info/'],
    ['controller' => 'aboutus', 'view' => 'index', 'name' => '关于我们', 'url' => '/aboutus.html'],
];
$secondLevels = [
    [],
    [],
    [
        ['view' => 'customizing', 'name' => '网站建设', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => '服务器托管', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => '舆情监控', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => 'SEM培训', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => 'SEO指导', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => 'SMO', 'url' => '/sp-customizing.html'],
        ['view' => 'customizing', 'name' => '新闻营销', 'url' => '/sp-customizing.html'],
    ],
    //[],
    [
        ['controller' => 'info', 'tag' => 'yxtg', 'name' => '营销推广', 'url' => '/info_yxtg/'],
        ['controller' => 'info', 'tag' => 'wzqz', 'name' => '网站权重', 'url' => '/info_wzqz/'],
        ['controller' => 'info', 'tag' => 'jingjia', 'name' => 'SEM竞价', 'url' => '/info_jingjia/'],
        ['controller' => 'info', 'tag' => 'seo', 'name' => 'SEO网站', 'url' => '/info_seo/'],
    ],
    [
        ['controller' => 'aboutus', 'view' => 'contact', 'name' => '联系我们', 'url' => '/contact.html'],
    ],
];

//$topSortInfos = $this->context->topSortInfos;
?>
<style>#notice{margin-left:13px; } #notice:hover{color: #ec6500;}</style>
<div class="section">
    <div class="topmenu">
        <div class="container">
            <div class="login floatL" style="width:auto;">
                <span class="s-homeico"></span>
                <a href="/" style="margin-right:25px;">官网首页</a>
                <!--<a id="home_login" href="" target="_blank" style="margin-right: 4px;">登录</a>-->
                <a id="home_out_line" style="display:none;">|</a>
                <a id="home_out" style="display:none" onclick="ZQDL.apps.login.logout()">退出</a>
                <!--<a href="#" target="_blank">注册</a> -->
            </div>
            <div class="loginr floatR">
                <!--<span class="s-icon-shop"></span><a href="#"  target="_blank">购物车（0） |</a>
                <a href="/" target="_blank">服务与支持 |</a>
                <a href="/">全国服务网络 |</a>-->
                <span class="tel400">全国电话咨询热线 <?= Yii::$app->params['siteHotline']; ?></span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header">
        <div class="header_bg"></div>
        <div class="container head">
            <h1 class="logo">
                <a href="/" title='<?= Yii::$app->params['siteName']; ?>'><?= Yii::$app->params['siteName']; ?></a>
            </h1>
            <ul class="nav">
                <?php foreach ($firstLevels as $urlInfo) { ?>
                <li class="d_2">
                    <a href="<?= $urlInfo['url']; ?>"><?= $urlInfo['name']; ?></a>
                </li>
                <?php } ?>
            </ul>
            <!--<div class="tel">客服电话 400-600-5555 </div>-->
        </div>
        <div class="subnav">
            <div class="subnav_bg"></div>
            <div class="subnav_con">
                <?php foreach ($secondLevels as $subInfos) { ?>
                <ul style="display:none">
                <?php foreach ($subInfos as $urlInfo) { ?>
                <li class="d_2">
                    <a href="<?= $urlInfo['url']; ?>"><?= $urlInfo['name']; ?></a>
                </li>
                <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
