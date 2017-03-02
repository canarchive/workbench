<div class="zong_topbar clear">
    <div class="wrap_mar f12 clear">
        <div id="testDiv">
            <ul class="fl topbar_left">
                <li class="fl">
                    <a href="/" target="_blank">首页</a></li>
                <li class="fl">
                    <a href="/" target="_blank">装修公司</a></li>
                <li class="fl">
                    <a rel="nofollow" href="javascript:void(0);" class="denglu" style="margin-right:0;"><?= $this->context->currentCityName; ?></a>
                    <em>|</em>
                    <a href="" target="_blank" style="color:#df0303;">选择城市</a></li>
            </ul>
        </div>
        <ul class="topbar_right fr">
            <li class="li_phone">
                <a style="color:#df0303;">
                    <i class="zong_icon i1"></i>7*24小时免费直拨 <?= Yii::$app->params['siteHotline']; ?></a>
                <p class="pa pic_phone">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/e63c2-3831.png" alt="" /></p>
            </li>
            <li class="li_weiXin li_weiXin2">
                <a>
                    <i class="zong_icon i3"></i>微信</a>
                <p class="pa pic_two_wei1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/7df11-4449.png" alt="" /></p>
            </li>
            <li class="li_weibo li_weiXin2">
                <a>
                    <i class="zong_icon i4"></i>微博</a>
                <p class="pa pic_two_wei2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4f186-9756.png" alt="" /></p>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/newloginstatus.js"></script>
