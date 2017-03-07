<?php
use yii\helpers\Url;

$firstLevels = [
    ['view' => 'qiyedianshang', 'name' => '网站建设'],
    ['view' => 'yingxiaotuiguang', 'name' => '营销推广'],
    ['view' => 'qiyeyingyong', 'name' => '企业应用'],
    ['view' => 'free', 'name' => '网站攻略'],
    ['controller' => 'case', 'name' => '案例中心'],
    ['controller' => 'aboutus', 'view' => 'company', 'name' => '关于我们'],
];
$secondLevels = [
    [
        ['view' => 'guanwang', 'name' => '企业官网'],
        ['view' => 'quanwangyingxiao', 'name' => '全网营销'],
        ['view' => 'shoujijianzhan', 'name' => '手机建站'],
        ['view' => 'shangcheng', 'name' => '网上商城'],
        ['view' => 'yidongyingxiao', 'name' => '移动营销'],
    ],
    [
        ['view' => 'guoneituiguang', 'name' => '国内营销'],
        ['view' => 'haiwaituiguang', 'name' => '海外推广'],
    ],
    [
        ['view' => 'youju', 'name' => '企业邮箱'],
        ['view' => 'yuming', 'name' => '企业域名'],
        ['view' => 'sheji', 'name' => '高端设计'],
        ['view' => 'kexinwangzhan', 'name' => '可信网站'],
    ],
    [
        ['view' => 'free', 'name' => '免费报价'],
        ['view' => 'zero', 'name' => '0元体验'],
        ['view' => 'wangzhantijian', 'name' => '网站体检'],
    ],
    [
        ['controller' => 'case', 'view' => 'index', 'name' => '行业案例'],
        ['controller' => 'case', 'view' => 'casetouch', 'name' => '服装行业'],
        ['controller' => 'case', 'view' => 'anligushi', 'name' => '包装行业'],
        ['controller' => 'case', 'view' => 'canyinhangye', 'name' => '餐饮行业'],
    ],
    [
        ['controller' => 'aboutus', 'view' => 'company', 'name' => '企业介绍'],
        ['controller' => 'info', 'name' => '资讯中心'],
        ['controller' => 'message', 'name' => '信息讲堂'],
        ['controller' => 'service', 'name' => '售后服务'],
        ['controller' => 'joinus', 'name' => '加入我们'],
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
                <!--<span class="s-icon-shop"></span><a href="#"  target="_blank">购物车（0） |</a>-->
                <a href="/service/" target="_blank">服务与支持 |</a>
                <a href="/aboutus/org/">全国服务网络 |</a>
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
                <?php foreach ($firstLevels as $urlInfo) { $controllerUrl = isset($urlInfo['controller']) ? $urlInfo['controller'] : 'single-page'; $urlData = ["/cmsad/{$controllerUrl}/index"]; if (isset($urlInfo['view'])) {$urlData['view'] = $urlInfo['view']; } ?>
                <li class="d_2">
                    <a href="<?= Url::to($urlData); ?>"><?= $urlInfo['name']; ?></a>
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
                    <?php foreach ($subInfos as $urlInfo) { $controllerUrl = isset($urlInfo['controller']) ? $urlInfo['controller'] : 'single-page'; $urlData = ["/cmsad/{$controllerUrl}/index"]; if (isset($urlInfo['view'])) {$urlData['view'] = $urlInfo['view']; } ?>
                <li class="d_2">
                    <a href="<?= Url::to($urlData); ?>"><?= $urlInfo['name']; ?></a>
                </li>
                <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
