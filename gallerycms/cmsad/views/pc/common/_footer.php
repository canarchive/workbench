<?php
use yii\helpers\Url;
?>
<!-- footer -->
<div class="footer border-top">
    <div class="container">
        <div class="footer-menu">
            <p id="list" class="list">
                <a target="_blank" href="<?= Url::to(['/cmsad/aboutus/index', 'view' => 'index']); ?>" class="first">关于中企</a><span>|</span>
                <a target="_blank" href="<?= Url::to(['/cmsad/aboutus/statement', 'view' => 'attention']); ?>">法律隐私</a><span>|</span>
                <!--<a target="_blank" href="/job/">工作机会</a><span>|</span>-->
                <a target="_blank" href="<?= Url::to(['/cmsad/aboutus/index', 'view' => 'contact']); ?>">联系我们</a><span>|</span>
                <!--<a target="_blank" href="/map.html">网站地图</a><span>|</span>-->
                <!--<a target="_blank" href="<?= Url::to(['/cmsad/aboutus/friendlink']); ?>">友情链接</a><span>|</span>-->
                <a href="<?= Url::to(['/cmsad/aboutus/guestbook']); ?>" target="_blank">意见反馈</a>
            </p>
        </div>
        <div class="copyright">
            <?= Yii::$app->params['siteCopyRightInfo']; ?>
            <br>
            <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#999"><?= Yii::$app->params['siteIcpInfo']; ?></a>
        </div>
        <div class="gzwm">
            <div class="hotLine">客服热线：
                <a><?= Yii::$app->params['siteHotline']; ?></a>
            </div>
            <div class="attention">
                <!--关注我们：<a href="http://weibo.com/zqdl300" class="gz-wb" target="_blank">新浪微博</a>-->
                <div class="ewm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/zqdl-wx.png"></div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
