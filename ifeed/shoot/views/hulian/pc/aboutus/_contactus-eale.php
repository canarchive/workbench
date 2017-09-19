<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KzlZ4l6eMZHvnakAW6MjTc5dOhFKT4VX"></script>
<div class="contact c">
    <div class="contact_container fl">
        <h2><?= $this->context->currentSiteInfo['name']; ?></h2>
        <ul>
            <li>咨询电话：400-090-1916</li>
            <li>营业时间：周一至周六 9:30-19:00</li>
		    <li>地址：北京市朝阳区高碑店文化新大街东辰民族艺术大厦D座-03右视觉</li>
        </ul>
        <p>乘车路线：乘坐541，169小郊亭下车。坐八通线高碑店下，步行十五分钟到。</p>
        <a class="server_btns" href="/apply.html" rel="nofollow" title="预约拍摄">预约到店</a>
    </div>
    <div id="allmap" class="contact_map fl"></div>
</div>
<script>
    var map = new BMap.Map("allmap");
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("北京");
    var point = new BMap.Point(116.541301, 39.898765);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    map.centerAndZoom(point, 16);
    var opts = {
        width : 400,     // 信息窗口宽度
        height: 70,     // 信息窗口高度
        title : '右视觉',// 信息窗口标题
        position : point,    // 指定文本标注所在的地理位置
        offset   : new BMap.Size(10,-10)    //设置文本偏移量
    }
    var infoWindow = new BMap.InfoWindow("地址:北京市朝阳区高碑店文化新大街东辰民族艺术大厦D座-03右视觉", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point);
</script>
