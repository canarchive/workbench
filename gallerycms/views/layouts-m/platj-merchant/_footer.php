<!-- 公共底部 start -->
<footer class="copyRight">
    <p class="copy-1">
        <a href='http://m.jmw.com.cn/'>回到首页</a>
        <i>
        </i>
        <!--<a href="http://pc.jmw.com.cn">电脑版</a><i></i>-->
        <a href='javaScript:;' class="wy_download" id="downLoad" onClick="func()">APP下载</a>
        <i>
        </i>
        <a href='http://m.jmw.com.cn/usercenter/register.php'>注册</a>
        <i>
        </i>
        <a href='http://m.jmw.com.cn/usercenter/login.php'>登录</a></p>
    <p class="copy-2">
        <span>Copyright©2004-2016 JMW.COM.CN 京ICP证：040787号</span></p>
</footer>
<!-- 公共底部 end -->
<script type="text/javascript">function func() {
        var u = navigator.userAgent,
        app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if (isAndroid == true) {
            document.getElementById("downLoad").href = "http://m.jmw.com.cn/app/android/中国加盟网.apk";
        } else if (isiOS == true) {
            document.getElementById("downLoad").href = "https://appsto.re/cn/ukd68.i";
        } else {
            alert("请在手机端下载app");
        }
    }</script>
