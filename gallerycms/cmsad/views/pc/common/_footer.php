<?php
use yii\helpers\Url;
?>
<!-- footer -->
<div class="footer border-top">
    <div class="container">
        <div class="footer-menu">
            <p id="list" class="list">
                <a rel="nofollow" target="_blank" href="<?= Url::to(['/cmsad/aboutus/index', 'view' => 'index']); ?>" class="first">关于<?= Yii::$app->params['siteNameBase']; ?></a><span>|</span>
                <a rel="nofollow" target="_blank" href="<?= Url::to(['/cmsad/aboutus/statement', 'view' => 'attention']); ?>">法律隐私</a><span>|</span>
                <a rel="nofollow" target="_blank" href="<?= Url::to(['/cmsad/aboutus/index', 'view' => 'contact']); ?>">联系我们</a><span>|</span>
                <a rel="nofollow" href="<?= Url::to(['/cmsad/aboutus/guestbook']); ?>" target="_blank">意见反馈</a>
            </p>
        </div>
        <div class="copyright">
            <?= Yii::$app->params['siteCopyRightInfo']; ?>
            <br>
            <a rel="nofollow" href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#999"><?= Yii::$app->params['siteIcpInfo']; ?></a>
        </div>
        <div class="gzwm">
            <div class="hotLine">客服热线：
                <a rel="nofollow"><?= Yii::$app->params['siteHotline']; ?></a>
            </div>
            <div class="attention">
                <div class="ewm">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/simg/zqdl-wx.png" style="width: 130px; height: 110px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
