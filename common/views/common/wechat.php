<?php
$wechatJs = $this->context->wechatJs;
?>
<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<?php if (!empty($wechatJs)) { ?>
<script>
wx.config(<?php echo $wechatJs->config(['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone']) ?>);
wx.ready(function(){
var shareContent = <?= $this->context->wechatShareInfo; ?>;
shareContent.sucess = function() {
	//alert(shareContent.queryStr);
};
shareContent.cancel = function() {
	//alert(shareContent.queryStr);
};
wx.onMenuShareTimeline(shareContent);
wx.onMenuShareAppMessage(shareContent);
wx.onMenuShareQQ(shareContent);
wx.onMenuShareWeibo(shareContent);
wx.onMenuShareQZone(shareContent);
});
/*wx.error(function(res){
	alert("error:" + res.errMsg);
    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA>可以在这里更新签名。 
});*/
</script>
<?php } ?>
