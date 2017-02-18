<!-- 首页底部 start -->
<link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/css/be233-6823.css">
<div class="copyright">
    <p class="copy-1">
        <a href="http://m.jmw.com.cn/">回到首页</a>
        <i>
        </i>
        <a href="http://m.jmw.com.cn/usercenter/register.php">注册</a>
        <i>
        </i>
        <a href="http://m.jmw.com.cn/usercenter/login.php">登录</a>
        <i>
        </i>
        <a href="javaScript:;" class="wy_download" id="downLoad22" onClick="func1()">APP下载</a>
        <i>
        </i>
        <a style="width:56px; height:12px;" href="javascript:;" onclick="gotoPC()">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/97186-8985.png"></a>
        <script>function gotoPC() {
                window.location.href = 'http://pc.jc.jmw.com.cn';
            }</script>
    </p>
    <p class="copy-2">
        <span>Copyright©2004-2016 JMW.COM.CN 京ICP证：040787号</span></p>
</div>
<script type="text/javascript">function func1() {
        var u = navigator.userAgent,
        app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid == true) {
            document.getElementById("downLoad22").href = "http://m.jmw.com.cn/app/android/中国加盟网.apk";
        } else if (isiOS == true) {
            document.getElementById("downLoad22").href = "https://appsto.re/cn/ukd68.i";
        } else {
            alert("请在手机端下载app");
        }
    }</script>
<!-- 首页底部 end -->
<div style="height:65px;"></div>
