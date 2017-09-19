<?php
$this->params['noBanner'] = true;
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KzlZ4l6eMZHvnakAW6MjTc5dOhFKT4VX"></script>
<div class="mabout" style="margin-top: 4rem">
    <div class="about_tip">联系我们</div>
    <ul>
        <li>咨询电话：400-090-1916</li>
        <li>营业时间：周一至周六 9:30-19:00</li>
		<li>地址：北京市朝阳区高碑店文化新大街东辰民族艺术大厦D座-03右视觉</li>
        <li>乘车路线：乘坐541，169小郊亭下车。坐八通线高碑店下，步行十五分钟到。</li>
    </ul>
    <div id="allmap" class="mabout_map"></div>
    <p></p>
</div>
<script>
    var map = new BMap.Map("allmap");
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("北京");
    map.enableScrollWheelZoom(true);
    var point = new BMap.Point(116.541301, 39.898765);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    map.centerAndZoom(point, 16);
    var opts = {
        width : 200,     // 信息窗口宽度
        height: 100,     // 信息窗口高度
		title : "右视觉" ,// 信息窗口标题
        position : point,    // 指定文本标注所在的地理位置
        offset   : new BMap.Size(20, -25)    //设置文本偏移量
    }
    var infoWindow = new BMap.InfoWindow("地址：北京市朝阳区广渠路3号竞园产业基地10-A", opts);  // 创建信息窗口对象

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
