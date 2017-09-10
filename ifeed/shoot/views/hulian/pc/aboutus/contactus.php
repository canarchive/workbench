<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KzlZ4l6eMZHvnakAW6MjTc5dOhFKT4VX"></script>
<div class="contact c">
    <div class="contact_container fl">
        <h2><?= $this->context->currentSiteInfo['name']; ?></h2>
        <ul>
		    <li><?= Yii::$app->params['siteAddressInfo']; ?></li>
            <li>咨询电话：<?= Yii::$app->params['siteHotline']; ?></li>
            <li>营业时间：周一至周日 9：00 ~ 18：00</li>
            <li>微博：http://weibo.com/turuiyingxiang</li>
            <li>微信：hlyxwx</li>
            <!--<li>乘车路线：地铁7号线百子湾站A口出向东150米后</li>-->
        </ul>
        <p>
            乘车路线：地铁7号线百子湾站A口出向东150米后
        </p>
        <a class="server_btns" href="/apply.html" rel="nofollow" title="预约拍摄">预约到店</a>
    </div>
    <div id="allmap" class="contact_map fl"></div>
</div>
<script>

    var map = new BMap.Map("allmap");
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("北京");
    var point = new BMap.Point(116.516407,39.901525);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    map.centerAndZoom(point, 16);
    var opts = {
        width : 400,     // 信息窗口宽度
        height: 70,     // 信息窗口高度
        title : "<?= $this->context->currentSiteInfo['name']; ?>" ,// 信息窗口标题
        position : point,    // 指定文本标注所在的地理位置
        offset   : new BMap.Size(10,-10)    //设置文本偏移量
    }
    var infoWindow = new BMap.InfoWindow("地址：北京市朝阳区广渠路3号竞园产业基地10-A", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point);

</script>
