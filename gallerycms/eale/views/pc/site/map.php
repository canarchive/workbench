<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'yq_docs',
];
$this->params['jsFiles'] = [
    'jquery', 'bootstrap', 'unveil', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 sitemap" role="main">
            <h2>网站地图</h2>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/liaojie/">关于我们</a></h3>
                <div>
                    <ul class="nav nav-pills btn-group-justified">
                        <li>
                            <a href="http://www.eale.cc/liaojie/">快速了解右视觉</a></li>
                        <li>
                            <a href="http://www.eale.cc/gongsi/">右视觉公司介绍</a></li>
                        <li>
                            <a href="http://www.eale.cc/kehu/">右视觉合作客户</a></li>
                        <li>
                            <a href="http://www.eale.cc/yiren/">右视觉合作艺人</a></li>
                        <li>
                            <a href="http://www.eale.cc/jiaru/">加入右视觉</a></li>
                    </ul>
                </div>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/news/">新闻</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/commercials/">广告摄影</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/fashions/">服装摄影</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/stars/">艺人摄影</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/service/">服务</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/contactus/">联系我们</a></h3>
            </div>
            <div class="sitemap">
                <h3>不显示</h3>
                <div>
                    <ul class="nav nav-pills btn-group-justified">
                        <li>
                            <a href="http://www.eale.cc/works/">摄影作品</a></li>
                        <li>
                            <a href="http://www.eale.cc/people/">个人写真</a></li>
                        <li>
                            <a href="http://www.eale.cc/wedding/">婚纱摄影</a></li>
                        <li>
                            <a href="http://www.eale.cc/studentworks/">学生作品</a></li>
                    </ul>
                </div>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/tag/">TAG</a></h3>
            </div>
            <div class="sitemap">
                <h3>
                    <a href="http://www.eale.cc/sitemap/">网站地图</a></h3>
            </div>
        </div>
    </div>
</div>
