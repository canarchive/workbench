<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'style_m',
];
$this->params['jsFiles'] = [
    'jquery', 'unveil', 'bootstrap', 'hammer', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<meta name="image" content="" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=h1zjsx7tGL8ZHy1sst8NTAsu"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=13cff391f1de48e1d9aef08588d023bc"></script>
<div class="wrap">
    <div class="container about-index">
        <?= $this->render('../common/_breadnav'); ?>
        <div class="row lxwm">
            <h2 align="center">欢迎您光临右视觉摄影机构！</h2>
            <section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/913840ea-ea76-48ed-a2bc-4bccdc67a4fc.png" alt="电话"></div>
                    <div class="cd-timeline-content">
                        <p>
                            <strong>全国统一服务热线：</strong>400-090-1916</p>
                        <p>
                            <strong>座机：</strong>010-64325288</p>
                        <p>
                            <strong>工作时间：</strong>周一至周六 9:30-19:00</p></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/e60a9fa8-64e5-45f0-abe0-cd88ef92f67f.png" alt="地址"></div>
                    <div class="cd-timeline-content">
                        <p>
                            <strong>右视觉地址：</strong>北京市朝阳区高碑店文化新大街东辰艺术大厦D-03右视觉或者直接用各种导航软件导航右视觉文化传媒有限公司</p></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/f302766e-29f1-45e7-a6f6-2fb0d4cbe042.png" alt="微信"></div>
                    <div class="cd-timeline-content">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/50e5f603-9ef9-4443-9700-683b6e1ee33f.jpg" alt=""></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/72590ab4-e05f-4f8e-abe8-98a69b561d08.png" alt="微博"></div>
                    <div class="cd-timeline-content">
                        <p>
                            <strong>右视觉摄影机构官方微博：</strong>右视觉摄影官方微博
                            <br>
                            <strong>秘老师微博：</strong>eale老秘</p></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/a1392f06-6e26-4f0e-8cab-0574c22138f8.png" alt="客服"></div>
                    <div class="cd-timeline-content">
                        <p>
                            <strong>QQ客服一：</strong>295496616 (24小时)</p>
                        <p>
                            <strong>QQ客服二：</strong>2393606242</p></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/f2b2315b-a6c2-4ee4-b01c-9320718d5899.png" alt="地点"></div>
                    <div class="cd-timeline-content">
                        <div id="container1" style="width:100%; height:360px; margin-top:-60px; margin-right:10px;">北京右视觉文化传媒有限公司</div></div>
                </div>
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/7d99ae84-d9aa-4421-9602-733446ddb558.png" alt="路线"></div>
                    <div class="cd-timeline-content">
                        <p>
                            <strong></strong>
                        </p>
                        <p>
                            <strong>公交线路：</strong>乘坐541，169小郊亭下车。</p>
                        <p>
                            <strong>地铁路线：</strong>坐八通线高碑店下，步行十五分钟到。</p>
                        <p>
                            <strong>自驾路线：</strong>导航右视觉即到，详细见上图。</p></div>
                </div>
            </section>
        </div>
        <div class="row"></div>
        <?= $this->render('../../pc/common/_guestbook'); ?>
    </div>
</div>
<script type="text/javascript">
var map = new AMap.Map('container1');
    //设置比例与中心点 
    map.setZoom(16);
    map.setCenter([116.541301, 39.898765]);

    //北京标注
    var marker1 = new AMap.Marker({
        position: [116.541301, 39.898765],
        map: map
    });

    //设置显示窗口
    var infowindow1 = new AMap.InfoWindow({
        content: '<div style="font-size:8px;"><b>北京右视觉文化传媒有限公司</b><br />地址:北京市朝阳区高碑店文化新大街东辰民族艺术大厦D座-03右视觉</div>',
        offset: new AMap.Pixel(0, -20),
        size: new AMap.Size(400, 0)
    })

    //打开窗口
    infowindow1.open(map, marker1.getPosition())

    //标注点，单击打开窗口
    AMap.event.addListener(marker1, 'click',
    function() {
        infowindow1.open(map, marker1.getPosition())
    })</script>
