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
                <a href="/contact.html" target="_blank">联系我们</a></div>
            <div class="server-content">
                <div class="connect-us">
                    <div class="t">总部联系方式</div>
                    <div class="company">中企动力科技股份有限公司</div>
                    <div class="address">地址：北京市经济技术开发区地盛西路1号 数码庄园A2座
                        <span>邮编：100176</span></div>
                    <div class="address">ADD：Building A2,No.1,Disheng West Road Beijing Economic-Technological Development Area</div>
                    <ul class="company-info">
                        <li>客户服务热线：400-660-5555</li>
                        <li>网址(Web)：www.300.cn</li>
                        <li>客户服务邮箱：
                            <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="1b687e696d72787e2f2b2b2d5b282b2b357875">[email&#160;protected]</a>
                            <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                !
                                function(t, e, r, n, c, a, p) {
                                    try {
                                        t = document.currentScript ||
                                        function() {
                                            for (t = document.getElementsByTagName('script'), e = t.length; e--;) if (t[e].getAttribute('data-cfhash')) return t[e]
                                        } ();
                                        if (t && (c = t.previousSibling)) {
                                            p = t.parentNode;
                                            if (a = c.getAttribute('data-cfemail')) {
                                                for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2) e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice( - 2);
                                                p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                            }
                                            p.removeChild(t)
                                        }
                                    } catch(u) {}
                                } ()
                                /* ]]> */
                                </script>
                        </li>
                        <li>产品合作邮箱：
                            <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="5a30333b343d2d2f3633341a696a6a743934">[email&#160;protected]</a>
                            <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                !
                                function(t, e, r, n, c, a, p) {
                                    try {
                                        t = document.currentScript ||
                                        function() {
                                            for (t = document.getElementsByTagName('script'), e = t.length; e--;) if (t[e].getAttribute('data-cfhash')) return t[e]
                                        } ();
                                        if (t && (c = t.previousSibling)) {
                                            p = t.parentNode;
                                            if (a = c.getAttribute('data-cfemail')) {
                                                for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2) e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice( - 2);
                                                p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                            }
                                            p.removeChild(t)
                                        }
                                    } catch(u) {}
                                } ()
                                /* ]]> */
                                </script>
                        </li>
                        <li>媒介合作邮箱：
                            <a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="3443555a535e5d555a4c415a740704041a575a">[email&#160;protected]</a>
                            <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                !
                                function(t, e, r, n, c, a, p) {
                                    try {
                                        t = document.currentScript ||
                                        function() {
                                            for (t = document.getElementsByTagName('script'), e = t.length; e--;) if (t[e].getAttribute('data-cfhash')) return t[e]
                                        } ();
                                        if (t && (c = t.previousSibling)) {
                                            p = t.parentNode;
                                            if (a = c.getAttribute('data-cfemail')) {
                                                for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2) e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice( - 2);
                                                p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                            }
                                            p.removeChild(t)
                                        }
                                    } catch(u) {}
                                } ()
                                /* ]]> */
                                </script>
                        </li>
                        <div class="clear"></div>
                    </ul>
                    <div class="map" id="mapContainer"></div>
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
        markerSpan.innerHTML = "中企动力科技股份有限公司";
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
