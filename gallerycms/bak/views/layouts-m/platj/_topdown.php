<div class="top-header">
    <a class="close fl" onclick="$('.top-header').hide();"></a>
    <img class="top-log fl" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/6f271-8932.png">
    <ul class="top-wenzi fl">
        <li style="font-size: 0.75em;color:#333;line-height: 1.2rem;">下载中国加盟网APP</li>
        <li style="font-size: 0.625em;color:#c7c7c7;">随时随地轻松找项目</li></ul>
    <a href="javaScript:;" class="top-download fr" id="downLoad" onClick="func()">马上下载</a>
</div>
<script type="text/javascript">
function func() {
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
}
</script>
<style>.top-header{height:35px;width: 94%;padding: 10px 3%;background: #ffffff;position: relative;} .top-header .close{display:block;margin-right: 9px; height:14px;width: 14px;margin-top: 10px;background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/m/img/0ac58-3198.png") no-repeat;background-size: 100%;} .top-header .top-log{width: 36px;height: 36px;margin-right: 6px;} .top-header .top-download{display: block; background: #E44B46;color: #ffffff;width: 70px;height: 23px;border-radius: 10px;text-align: center;line-height: 22px;margin-top: 7px;font-size: 0.75em;}</style>
