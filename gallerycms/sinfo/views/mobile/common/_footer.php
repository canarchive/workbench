<footer>
    <ul>
        <li class="" id="yptel" clickCount="true" clickAdd="dhzixun"><em></em>电话咨询</li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" style="color:#fff;"><em></em>售前咨询</a>
        </li>
        <li class="last"><em></em><a href="/sp-register.html" title="免费体验">免费体验</a></li>
    </ul>
    <script>$("#yptel").click(function(j) {
            form.tqCount(this);
            location.href = "tel:" + '<?= Yii::$app->params['siteHotline']; ?>';
            j.stopPropagation();
        });</script>
</footer>
<input name="areacode" id="area_code" type="hidden" value="" />
<div class="scrTop"><span></span></div>
<!--<div class="shareCon">
    <span></span>
</div>
<div class="baidushare">
    <div class="share-inner">
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
        </div>
        <script>window._bd_share_config = {
                "common": {
                    "bdSnsKey": {},
                    "bdText": "",
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": "",
                    "bdStyle": "0",
                    "bdSize": "24"
                },
                "share": {}
            };
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
    </div>
</div>-->
