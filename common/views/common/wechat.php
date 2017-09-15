<?php
$wechatJs = $this->context->wechatJs;
?>
<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<?php if (!empty($wechatJs)) { ?>
<script>
//wx.config(<?php echo $wechatJs->config(['onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareTimeline'], true) ?>);
wx.config(<?php echo $wechatJs->config(['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone'], true) ?>);
wx.ready(function(){
var shareContent = {
    title: 'hhh', // 分享标题
    link: 'http://m.bloomtime.cn', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
    imgUrl: 'http://42.96.194.225/filesys/spider/pages/asset/huasl/m/img/e10cf-4634.png', // 分享图标
    success: function () { 
alert('ooo');
        // 用户确认分享后执行的回调函数
    },
    cancel: function () { 
alert('bbb');
        // 用户取消分享后执行的回调函数
	},
	fail:function(res) {
		alert(JSON.stringify(res));
	}
};

onMenuShareTimeline(shareContent);
onMenuShareAppMessage(shareContent);
onMenuShareQQ(shareContent);
onMenuShareWeibo(shareContent);
onMenuShareQZone(shareContent);
})
/*wx.error(function(res){
	alert("error:" + res.errMsg);
    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA>可以在这里更新签名。 
});*/
</script>
<?php } ?>
