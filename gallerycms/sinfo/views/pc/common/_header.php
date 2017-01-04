<?php
use yii\helpers\Url;

$firstLevels = [
    ['view' => 'smobile', 'name' => '手机号抓取', 'url' => '/sp-smobile.html'],
    ['view' => 'sqq', 'name' => 'QQ号抓取', 'url' => '/sp-sqq.html'],
    ['view' => 'register', 'name' => '注册', 'url' => '/sp-register.html'],
    ['view' => 'login', 'name' => '登陆', 'url' => '/sp-login.html'],
    ['controller' => 'aboutus', 'view' => 'index', 'name' => '关于我们', 'url' => '/aboutus.html'],
];
$secondLevels = [
    [],
    [],
    [],
    //[],
    [],
    [
        //['controller' => 'aboutus', 'view' => 'contact', 'name' => '联系我们', 'url' => '/contact.html'],
    ],
];

//$topSortInfos = $this->context->topSortInfos;
?>
<style>
#notice{margin-left:13px; } #notice:hover{color: #ec6500;}
.logo {
    background: rgba(0, 0, 0, 0) url("<?= Yii::getAlias('@asseturl'); ?>/cmsad/logo/pc_logo_<?= $this->context->siteCode; ?>.png") no-repeat scroll 0 0;
    height: 56px;
    left: 0;
    position: absolute;
    top: 8px;
    width: 120px;
}
</style>
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
