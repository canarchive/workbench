<?php
$footerNavs = $this->context->footerNavs;
?>
<div class="com-foot clearfix">
    <!-- row1 -->
    <div class="foot-main foot-row1 clearfix cWhite">
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i1"></i>
            <span>100%正品保障</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i2"></i>
            <span>90天退换货</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i3"></i>
            <span>质保金先行赔付</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i4"></i>
            <span>30天调补差价</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i5"></i>
            <span>7x24小时客服</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i6"></i>
            <span>设计保障</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i7"></i>
            <span>资金保障</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i8"></i>
            <span>施工保障</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i9"></i>
            <span>投诉100%解决</span></a>
        <a href="http://help.17house.com/assure.php" target="_blank" rel="nofollow">
            <i class="sprite-foot sp-f-i0"></i>
            <span>投诉保障</span></a>
    </div>
    <!-- row2 -->
    <ul class="foot-main foot-row2 clearfix cDGray">
        <li>
            <h4>网站服务</h4>
            <span>
                <a href="http://tuan.17house.com/" target="_blank">家具建材团购</a></p>
                <p>
                    <a href="http://mall.17house.com/" target="_blank">家具建材网铺</a></p>
                <p>
                    <a href="http://zhuangxiu.17house.com/" target="_blank">找装修公司</a></p>
        </li>
        <li>
            <h4>新手帮助</h4>
            <p>
                <a href="http://help.17house.com/0.html" target="_blank" rel="nofollow">会员注册</a></p>
            <p>
                <a href="http://help.17house.com/2.html" target="_blank" rel="nofollow">个人密码</a></p>
            <p>
                <a href="http://help.17house.com/3.html" target="_blank" rel="nofollow">找回资料</a></p>
        </li>
        <li>
            <h4>购物指南</h4>
            <p>
                <a href="http://help.17house.com/19.html" target="_blank" rel="nofollow">参加团购会</a></p>
            <p>
                <a href="http://help.17house.com/4.html" target="_blank" rel="nofollow">下单流程</a></p>
            <p>
                <a href="http://help.17house.com/18.html#shangjiazhekou" target="_blank" rel="nofollow">商家折扣</a></p>
        </li>
        <li>
            <h4>售后服务</h4>
            <p>
                <a href="http://help.17house.com/7.html" target="_blank" rel="nofollow">退换货说明</a></p>
            <p>
                <a href="http://help.17house.com/5.html" target="_blank" rel="nofollow">退单流程</a></p>
            <p>
                <a href="http://help.17house.com/13.html" target="_blank" rel="nofollow">投诉受理</a></p>
        </li>
        <li class="w360" style="width:380px;">
            <h4>联系我们</h4>
            <p>业主服务：400-689-1717</p>
            <p>商务合作：田经理13717803368</p>
            <p>已合作商家意见反馈：胡经理13716578678</p>
        </li>
        <li class="last">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/img/11895-1943.png" alt="微信二维码" width="80px" height="80px">
            <p class="weixin">
                <span>扫描二维码</span>
                <span>关注官方微信</span></p>
        </li>
    </ul>
    <!-- copyright -->
    <div class="foot-main foot-row3 clearfix mt20">
        <div class="row3-l clearfix">
            <p class="links cJGray">
                <?php foreach (['desc', 'friendlink', 'guestbook', 'contactus', 'statement'] as $navKey) { ?>
                <a href="<?= $footerNavs[$navKey]['url']; ?>" rel="nofollow"><?= $footerNavs[$navKey]['name']; ?></a>
                <?php } ?>
            </p>
            <p class="mt5 cDGray">
                <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" title="<?= $footerNavs['icpInfo']; ?>"><?= $footerNavs['icpInfo']; ?></a>
                <span>|</span>
                <span><?= $footerNavs['copyRight']; ?></span>
            </p>
        </div>
        <div class="r">
            <a href="http://www.bj.cyberpolice.cn/" target="_blank" rel="nofollow">
                <span class="sprite-foot sp-f-c1"></span>
            </a>
        </div>
    </div>
</div>
