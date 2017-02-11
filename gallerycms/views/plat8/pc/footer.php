<?php
$footerNavs = $this->context->footerNavs;
?>
<div class="footer" id="footerHeight">
    <?php if (isset($showFooterTop) && $showFooterTop) { ?>
    <div class="footer_top">
        <div class="footer_top_container">
            <div class="ftc_left">
                <ul class="ftcl_tab">
                    <li class="on">
                        <a href="javascript:void(0)">热门推荐</a></li>
                    <li>
                        <a href="javascript:void(0)">友情链接</a></li>
                </ul>
                <div class="ftclt_content  on">
                    <a href="http://www.to8to.com/ask/search/20077" target="_blank" title="灯具">灯具</a>
                    <a href="http://www.to8to.com/ask/search/20067" target="_blank" title="卫浴品牌">卫浴品牌</a>
                    <a href="http://www.to8to.com/ask/search/19967" target="_blank" title="厨房">厨房</a>
                    <a href="http://www.to8to.com/ask/search/19995" target="_blank" title="阳台">阳台</a>
                    <a href="http://www.to8to.com/ask/search/19929" target="_blank" title="中式风格">中式风格</a>
                    <a href="http://www.to8to.com/ask/search/19724" target="_blank" title="新房装修后多久可以入住">新房装修后多久可以入住</a>
                    <a href="http://www.to8to.com/ask/search/19954" target="_blank" title="鞋柜玄关">鞋柜玄关</a>
                    <a href="http://www.to8to.com/ask/search/19664" target="_blank" title="除尘器">除尘器</a>
                    <a href="http://www.to8to.com/ask/search/19736" target="_blank" title="自己动手装修">自己动手装修</a>
                    <a href="http://www.to8to.com/ask/search/19965" target="_blank" title="餐厅">餐厅</a>
                    <a href="http://www.to8to.com/ask/search/20084" target="_blank" title="消防应急照明灯">消防应急照明灯</a>
                    <a href="http://www.to8to.com/ask/search/19662" target="_blank" title="蚕丝被">蚕丝被</a>
                    <a href="http://www.to8to.com/ask/search/20032" target="_blank" title="黄花梨家具">黄花梨家具</a>
                    <a href="http://www.to8to.com/ask/search/19926" target="_blank" title="简欧风格">简欧风格</a>
                    <a href="http://www.to8to.com/ask/search/19717" target="_blank" title="新装修的房子放什么植物">新装修的房子放什么植物</a>
                    <a href="http://www.to8to.com/ask/search/19932" target="_blank" title="家装风格">家装风格</a>
                    <a href="http://www.to8to.com/ask/search/19964" target="_blank" title="书房">书房</a>
                    <a href="http://www.to8to.com/ask/search/20088" target="_blank" title="家用电器辐射">家用电器辐射</a>
                    <a href="http://www.to8to.com/ask/search/19726" target="_blank" title="如何装修房子">如何装修房子</a>
                    <a href="http://www.to8to.com/ask/search/19725" target="_blank" title="装修知识">装修知识</a></div>
                <div class="ftclt_content ">
                    <a href="http://ask.shejiben.com/" target="_blank">设计本问答</a>
                    <a href="http://mall.to8to.com/top/" target="_blank">建材十大品牌排行榜</a></div>
                <a rel="nofollow" href="http://wpa.qq.com/msgrd?V=1&amp;uin=895278840&amp;Site=-&amp;Menu=yes" target="_blank" class="join_link">
                    <span></span>友链合作</a>
            </div>
            <div class="ftc_center">
                <dl>
                    <dt>关注我们</dt>
                    <dd>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/76706-2783.jpg" alt="" class="att-code"></dd>
                </dl>
            </div>
            <div class="ftc_right">
                <dl>
                    <dt>下载土巴兔APP</dt>
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
            <div class="fbc_icp">中国装修网
                <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow"><?= $footerNavs['icpInfo']; ?></a>
            </div>
        </div>
    </div>
</div>
