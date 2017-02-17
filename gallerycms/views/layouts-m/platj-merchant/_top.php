<!-- app下载 -->
<!--<div class="top-header">
    <a class="close fl" onclick="$('.top-header').hide();"></a>
    <img class="top-log fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/6f271-8932.png">
    <ul class="top-wenzi fl">
        <li style="font-size: 0.75em;color:#333;line-height: 1.2rem;">下载APP</li>
        <li style="font-size: 0.625em;color:#c7c7c7;">随时随地轻松找**</li>
    </ul>
    <a href="javaScript:;"  class="top-download fr" id="downLoad_lm" onClick="func_lm()">马上下载</a>
</div>-->
<script type="text/javascript">
function goBack()
{
    window.location.href = "http://m.jmw.com.cn/so/";
}
function func_lm()
{
    var u = navigator.userAgent, app = navigator.appVersion;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if  (isAndroid == true){
        document.getElementById("downLoad_lm").href="http://m.jmw.com.cn/app/android/中国加盟网.apk";
    }else if (isiOS == true){
        document.getElementById("downLoad_lm").href="https://appsto.re/cn/ukd68.i";
    }else{
        alert("请在手机端下载app");
    }
}
</script> 
<!--<标项页头部定位 stop-->
<style>
.top-header{height:35px;width: 94%;padding: 10px 3%;background: #ffffff;position: relative;}
.top-header .close{display:block;margin-right: 9px; height:14px;width: 14px;margin-top: 10px;background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0ac58-3198.png") no-repeat;background-size: 100%;}
.top-header .top-log{width: 36px;height: 36px;margin-right: 6px;}
.top-header .top-download{display: block; background: #E44B46;color: #ffffff;width: 70px;height: 23px;border-radius: 10px;text-align: center;line-height: 22px;margin-top: 7px;font-size: 0.75em;}
</style>
<!-----面包屑 start----->

<header class="b_header" style="position:relative;">
    <div class="wrap">
        <div class="fl header_1">
            <a href="javascript:;" onclick="goBack()" class="icon icon1"></a>
        </div>
        <h2 style="width:86%;text-align:center;float:left;font-size:1.2rem;color:#fff;">晨阳水漆加盟</h2>
        <div class="fr header_2">
            <!--<a href="javascript:;" id="fenxiang" class="icon icon3"></a>-->
            <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/95055-5881.css" />
            <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/35df6-9609.css" />
            <!-- JiaThis Button BEGIN -->
            <!--<a href="javascript:;" title="" class="icon icon3" onclick="$('#my').show()"></a>-->
            <!--pingbi分享-->
            <a href="javascript:;" title=""></a>
            <div id="my" style="z-index:2000; width: 220px; padding: 16px 0px 8px 24px; display:none; background: rgba(0, 0, 0, 9) none repeat scroll 0% 0%; position: fixed; top: 50%; left: 50%;margin-top:-40px;margin-left:-117px;">
                <div class="bdsharebuttonbox bdshare-button-style0-32" data-tag="share_1" data-bd-bind="1487129109018">
                    <a style="margin-right:20px;" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a style="margin-right:20px;" class="bds_qzone" data-cmd="qzone" href="#" title="分享到QQ空间"></a>
                    <a style="margin-right:20px;" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a style="margin-right:20px;" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                </div>
                <a href="javascript:;" onclick="$('#my').hide()">
                    <input style="width:140px;height:26px;margin-left:20px;" value="取  消" type="button"></a>
            </div>
            <script>window._bd_share_config = {
                    share: [{
                        "bdSize": 32 //分享按钮的尺寸  16｜24｜32
                    }]
                }
                with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
            <a href="http://m.jmw.com.cn/seek.php" class="icon icon2"></a>
        </div>
    </div>
</header>
