<?php
$footerNavs = $this->context->footerNavs;
?>
<div class="footer" id="footerHeight">
    <?php if (isset($showFooterTop) && $showFooterTop) { ?>
    <div class="footer_top">
        <div class="footer_top_container">
            <div class="ftc_left">
                <ul class="ftcl_tab">
                    <li class="on"><a href="javascript:void(0)">热门推荐</a></li>
                    <!--<li><a href="javascript:void(0)">友情链接</a></li>-->
                </ul>
                <div class="ftclt_content  on">
                    <?php foreach ($this->params['tagInfos'] as $key => $tInfo) { ?>
                    <a href="/ask_<?= $tInfo['id']; ?>/" title="<?= $tInfo['name']; ?>"><?= $tInfo['name']; ?></a>
                    <?php } ?>
                </div>
                <!--<div class="ftclt_content "><a href=""></a></div>-->
                <!--<a rel="nofollow" href="" target="_blank" class="join_link"><span></span>友链合作</a>-->
            </div>
            <!--<div class="ftc_center">
                <dl>
                    <dt>关注我们</dt>
                    <dd>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/76706-2783.jpg" alt="" class="att-code"></dd>
                </dl>
            </div>-->
            <div class="ftc_right">
                <dl>
                    <dt>关注我们</dt>
                    <dd class="ask_qrMark"></dd>
                </dl>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="footer_bottom">
        <div class="footer_bottom_container">
            <div class="fbc_menu">
                <ul>
                    <?php foreach (['desc', 'friendlink', 'guestbook', 'contactus', 'statement'] as $navKey) { ?>
                    <li>
                        <a hidefocus="" href="<?= $footerNavs[$navKey]['url']; ?>" rel="nofollow"><?= $footerNavs[$navKey]['name']; ?></a>
                        <span></span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="fbc_copyright"><?= $footerNavs['disclaimer']; ?></div>
            <div class="fbc_copyright"><?= $footerNavs['copyRight']; ?></div>
            <div class="fbc_copyright">地址：<?= Yii::$app->params['siteAddressInfo']; ?></div>
			<div class="fbc_icp"><?= Yii::$app->params['siteName']; ?>
                <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow"><?= $footerNavs['icpInfo']; ?></a>
            </div>
	        <div class="fbc_icp">联系电话：<a href="tel:<?= Yii::$app->params['siteHotline']; ?>"><?= Yii::$app->params['siteHotline']; ?></a>&nbsp;
        </div>
    </div>
</div>
