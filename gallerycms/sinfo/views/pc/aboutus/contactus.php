<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = $controllerId;
$this->params['formPositionName'] = $view;
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="section">
    <div class="server_main">
        <div class="container">
            <div class="top_links">
                <a href="/" class="index_link" target="_blank">首页></a>
                <a href="/contactus.html" target="_blank">联系我们</a></div>
            <div class="server-content">
                <div class="connect-us">
                    <div class="t">联系方式</div>
                    <div class="company"><?= Yii::$app->params['siteName']; ?></div>
                    <div class="address">地址：<?= Yii::$app->params['siteAddressInfo']; ?>
                        <span>邮编：100176</span>
                    </div>
                    <!--<div class="address">ADD：</div>-->
                    <ul class="company-info">
                        <li>客户服务热线：<?= Yii::$app->params['siteHotline']; ?></li>
                        <li>网址(Web)：<a href="<?= Yii::getAlias('@ad.cmsurl'); ?>"><?= Yii::getAlias('@ad.cmsurl'); ?></a></li>
                        <li>客户服务邮箱：<a href="mailto:kehu@weinaya.com">kehu@weinaya.com</a></li>
                        <li>产品合作邮箱：<a href="mailto:co-product@weinaya.com">co-product@weinaya.com</a></li>
                        <li>媒介合作邮箱：<a href="mailto:co-medium@weinaya.com">co-medium@weinaya.com</a></li>
                        <div class="clear"></div>
                    </ul>
                    <!--<div class="map" id="mapContainer"></div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=3fefd7011014c283f1bca5109f9df2d9"></script>
<script type="text/javascript">//初始化地图对象，加载地图
    var map = new AMap.Map("mapContainer", {
        resizeEnable: true,
        view: new AMap.View2D({
            center: new AMap.LngLat(116.4997387879, 39.7822348487),
            //地图中心点
            zoom: 13 //地图显示的缩放级别
        })
    });
    //添加自定义点标记
    addMarker();
    //添加带文本的点标记覆盖物
    function addMarker() {
        //自定义点标记内容   
        var markerContent = document.createElement("div");
        markerContent.className = "markerContentStyle";
        //点标记中的图标
        var markerImg = document.createElement("img");
        markerImg.className = "markerlnglat";
        markerImg.src = "http://webapi.amap.com/images/0.png";
        markerContent.appendChild(markerImg);
        //点标记中的文本
        var markerSpan = document.createElement("b");
        markerSpan.innerHTML = "<?= Yii::$app->params['siteNameBase']; ?>科技股份有限公司";
        markerContent.appendChild(markerSpan);
        var marker = new AMap.Marker({
            map: map,
            position: new AMap.LngLat(116.4997387879, 39.7822348487),
            //基点位置
            offset: new AMap.Pixel( - 18, -36),
            //相对于基点的偏移位置
            draggable: true,
            //是否可拖动
            content: markerContent //自定义点标记覆盖物内容
        });
        marker.setMap(map); //在地图上添加点
    }</script>
