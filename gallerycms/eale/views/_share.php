<?php
$alignParam = isset($alignParam) ? $alignParam : '';
?>
<div class="share" <?= $alignParam; ?>>
    <span>分享到：</span>
    <!--分享代码-->
    <div class="bdsharebuttonbox">
        <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
        <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a>
        <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
    </div>
    <script>window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "",
                "bdMini": "2",
                "bdMiniList": false,
                "bdPic": "",
                "bdStyle": "1",
                "bdSize": "24"
            },
            "share": {}
        };
        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
    <div class="clear"></div>
</div>
