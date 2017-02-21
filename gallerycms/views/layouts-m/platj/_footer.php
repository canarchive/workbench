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
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_check'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj-merchant/_pop-show'); ?>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-new'); ?>
<?php //echo $this->render('@gallerycms/views/layouts-m/platj/_guestbook'); ?>
