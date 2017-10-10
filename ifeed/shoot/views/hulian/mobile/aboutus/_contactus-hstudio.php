<?php
$this->params['noBanner'] = true;
$data = $this->context->getContactDatas(); 
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KzlZ4l6eMZHvnakAW6MjTc5dOhFKT4VX"></script>
<div class="mabout" style="margin-top: 4rem">
    <div class="about_tip">联系我们</div>
    <ul>
            <li>咨询电话：<?= $data['hotline']; ?></li>
            <li>营业时间：<?= $data['serviceTime']; ?></li>
            <?php if (!empty($data['weibo'])) { ?><li>微博：<?= $data['weibo']; ?></li><?php } ?>
            <?php if (!empty($data['wechat'])) { ?><li>微信：<?= $data['wechat']; ?></li><?php } ?>
		    <li>地址：<?= $data['address']; ?></li>
    </ul>
    <div id="allmap" class="mabout_map"></div>
    <p></p>
</div>
<script>
    var map = new BMap.Map("allmap");
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("北京");
    map.enableScrollWheelZoom(true);
	var point = new BMap.Point(<?= $data['position']; ?>);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    map.centerAndZoom(point, 16);
    var opts = {
        width : 200,     // 信息窗口宽度
        height: 100,     // 信息窗口高度
        title : "<?= $this->context->currentSiteInfo['name']; ?>" ,// 信息窗口标题
        position : point,    // 指定文本标注所在的地理位置
        offset   : new BMap.Size(20, -25)    //设置文本偏移量
    }
	var infoWindow = new BMap.InfoWindow("<?= $data['address']; ?>", opts);  // 创建信息窗口对象

	var label = new BMap.Label("<?= Yii::$app->params['siteName']; ?>", opts);  // 创建文本标注对象
    label.setStyle({
        color : "red",
        fontSize : "12px",
        height : "20px",
        lineHeight : "20px",
        fontFamily:"微软雅黑"
    });
    marker.addEventListener("click", function(){
        map.openInfoWindow(infoWindow,point);
    });
    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
    var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); //右上角，仅包含平移和缩放按钮
    map.addControl(top_left_control);
    map.addControl(top_left_navigation);
    map.addControl(top_right_navigation);
    map.addOverlay(label);
</script>
