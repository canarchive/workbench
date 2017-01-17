<?php
use yii\helpers\Url;
?>
<!-- footer -->
<div class="footer border-top">
    <div class="container">
        <div class="footer-menu">
            <p id="list" class="list">
                <a rel="nofollow" href="/aboutus.html" class="first">关于<?= Yii::$app->params['siteNameBase']; ?></a><span>|</span>
                <a rel="nofollow" href="/attention.html">法律隐私</a><span>|</span>
                <a rel="nofollow" href="/agreement.html">注册协议</a><span>|</span>
                <a rel="nofollow" href="/sp-register.html">免费体验</a><span>|</span>
                <a rel="nofollow" href="/sp-login.html">登陆</a>
                <!--<a href="/contactus.html">联系我们</a><span>|</span>-->
                <!--<a href="/map.html">网站地图</a><span>|</span>-->
                <!--<a href="/friendlink.html">友情链接</a><span>|</span>-->
                <!--<a href="/guestbook.html" target="_blank">意见反馈</a>-->
            </p>
        </div>
        <div class="copyright">
            <?= Yii::$app->params['siteCopyRightInfo']; ?>
            <br>
            <a rel="nofollow" href="http://www.miitbeian.gov.cn/" style="color:#999"><?= Yii::$app->params['siteIcpInfo']; ?></a>
        </div>
        <div class="gzwm">
            <div class="hotLine">在线客服：
                <a rel="nofollow" rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=<?= Yii::$app->params['siteQQ']; ?>&site=qq&menu=yes" style="font-size: 14px;">点击咨询</a>
            </div>
            <div class="attention">
                <!--关注我们：<a href="http://weibo.com/weinaya" class="gz-wb" target="_blank">新浪微博</a>-->
                <div class="ewm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/zqdl-wx.png" style="width: 130px; height: 110px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
