<?php
use yii\helpers\Url;

$firstLevels = [
    ['view' => 'sem', 'name' => 'SEM托管'],
    ['view' => 'seo', 'name' => 'SEO顾问'],
    ['view' => 'customizing', 'name' => '企业定制'],
    //['controller' => 'sample', 'name' => '成功案例'],
    ['controller' => 'info', 'tag' => '', 'name' => '营销学院'],
    ['controller' => 'aboutus', 'view' => 'index', 'name' => '关于我们'],
];
$secondLevels = [
    [],
    [],
    [
        ['view' => 'customizing', 'name' => '网站建设'],
        ['view' => 'customizing', 'name' => '服务器托管'],
        ['view' => 'customizing', 'name' => '舆情监控'],
        ['view' => 'customizing', 'name' => 'SEM培训'],
        ['view' => 'customizing', 'name' => 'SEO指导'],
        ['view' => 'customizing', 'name' => 'SMO'],
        ['view' => 'customizing', 'name' => '新闻营销'],
    ],
    //[],
    [
        ['controller' => 'info', 'tag' => 'yxtg', 'name' => '营销推广'],
        ['controller' => 'info', 'tag' => 'wzqz', 'name' => '网站权重'],
        ['controller' => 'info', 'tag' => 'jingjia', 'name' => 'SEM竞价'],
        ['controller' => 'info', 'tag' => 'seo', 'name' => 'SEO网站'],
    ],
    [
        ['controller' => 'aboutus', 'view' => 'contact', 'name' => '联系我们'],
    ],
];

//$topSortInfos = $this->context->topSortInfos;
?>
<style>#notice{margin-left:13px; } #notice:hover{color: #ec6500;}</style>
<div class="section">
    <div class="topmenu">
        <div class="container">
            <div class="login floatL" style="width:auto;">
                <span class=""></span>
                <a href="/" style="margin-right:25px;">专注互联网效果营销</a>
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
            <h2 class="logo">
                <a href="/" title='<?= Yii::$app->params['siteName']; ?>'><?= Yii::$app->params['siteName']; ?></a>
            </h2>
            <ul class="nav">
                <?php foreach ($firstLevels as $urlInfo) { $controllerUrl = isset($urlInfo['controller']) ? $urlInfo['controller'] : 'single-page'; $urlData = ["/cmsad/{$controllerUrl}/index"]; if (isset($urlInfo['view'])) {$urlData['view'] = $urlInfo['view']; } if (in_array($controllerUrl, ['sample', 'info'])) { $urlData['page'] = 1; if ($controllerUrl == 'info') { $urlData['tag'] = '_' . $urlInfo['tag'];  $urlData['page'] = '_1';} } ?>
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
                    <?php foreach ($subInfos as $urlInfo) { $controllerUrl = isset($urlInfo['controller']) ? $urlInfo['controller'] : 'single-page'; $urlData = ["/cmsad/{$controllerUrl}/index"]; if (isset($urlInfo['view'])) {$urlData['view'] = $urlInfo['view']; } if ($controllerUrl == 'info') {$urlData['page'] = '_1'; $urlData['tag'] = '_' . $urlInfo['tag']; } ?>
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
