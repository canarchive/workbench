<!-- 公共底部 start -->
<footer class="copyRight">
    <p class="copy-1">
        <a href='<?= "/{$this->context->currentCityCode}/"; ?>'>回到首页</a><i></i>
        <a href='<?= "/{$this->context->currentCityCode}/merchant/"; ?>' title="<?= $this->context->currentCityName; ?>装修公司">装修公司</a><i></i>
        <a href='javascript:void(0);' rel="nofollow">装修问答</a><i></i>
        <a href='/desc.html' class="wy_download" id="downLoad" rel="nofollow">关于我们</a>
    </p>
    <p class="copy-2">
        <span>
        <?= Yii::$app->params['siteCopyRightInfo']; ?>
        <?= Yii::$app->params['siteIcpInfo']; ?>
        </span>
    </p>
</footer>
<!-- 公共底部 end -->
<script type="text/javascript">
function func() {
    var u = navigator.userAgent,
    app = navigator.appVersion;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if (isAndroid == true) {
        document.getElementById("downLoad").href = "apk";
    } else if (isiOS == true) {
        document.getElementById("downLoad").href = "";
    } else {
        alert("请在手机端下载app");
    }
}
</script>
<?php echo $this->render('@gallerycms/views/layouts-m/platj/_pop-1'); ?>
