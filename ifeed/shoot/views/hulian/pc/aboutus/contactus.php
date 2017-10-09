<?php
$data = $this->context->getContactDatas(); 
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KzlZ4l6eMZHvnakAW6MjTc5dOhFKT4VX"></script>
<div class="contact c">
    <div class="contact_container fl">
        <h2><?= $this->context->currentSiteInfo['name']; ?></h2>
        <ul>
            <li>咨询电话：<?= $data['hotline']; ?></li>
            <li>营业时间：<?= $data['serviceTime']; ?></li>
            <?php if (!empty($data['weibo'])) { ?><li>微博：<?= $data['weibo']; ?></li><?php } ?>
            <?php if (!empty($data['wechat'])) { ?><li>微信：<?= $data['wechat']; ?></li><?php } ?>
		    <li>地址：<?= $data['address']; ?></li>
        </ul>
        <?php if (!empty($data['line'])) { ?><p>乘车路线：<?= $data['line']; ?></p><?php } ?>
        <a class="server_btns" href="/apply.html" rel="nofollow" title="预约拍摄">预约到店</a>
    </div>
    <div id="allmap" class="contact_map fl"></div>
</div>
<script>

    var map = new BMap.Map("allmap");
    map.addControl(new BMap.MapTypeControl());
    map.setCurrentCity("北京");
    var point = new BMap.Point(<?= $data['position']; ?>);
    var marker = new BMap.Marker(point);
    map.addOverlay(marker);
    map.centerAndZoom(point, 16);
    var opts = {
        width : <?= $data['width']; ?>,     // 信息窗口宽度
        height: <?= $data['height']; ?>,     // 信息窗口高度
        title : "<?= $this->context->currentSiteInfo['name']; ?>" ,// 信息窗口标题
        position : point,    // 指定文本标注所在的地理位置
        offset   : new BMap.Size(10,-10)    //设置文本偏移量
    }
    var infoWindow = new BMap.InfoWindow("<?= $data['address']; ?>", opts);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point);

</script>
