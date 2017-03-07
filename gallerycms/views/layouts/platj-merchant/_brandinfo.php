<?php
$info = $this->context->mDatas['info'];
?>
<div class="shop wrapper">
    <div class="fl shop_l">
        <a href="#2">
            <img src="<?= $info['logo']; ?>" width="113" height="87" alt="<?= $info['name']; ?>" /></a>
    </div>
    <div class="fl shop_r">
        <h2><?= $info['name_full']; ?></h2>
        <div class="shop_rChild">
            <ul class="ul_one clearfix">
                <li class="clearfix">
                    <span class="fl">服务业主数：</span>
                    <ul class="fl clearfix">
                    <li><?= $info['num_owner']; ?></li></ul>
                </li>
                <li class="clearfix">
                    <span class="fl">实景案例数：</span>
                    <ul class="fl clearfix">
                        <li><?= $info['num_realcase']; ?></li></ul>
                </li>
                <li class="clearfix">
                    <span class="fl">设计师数：</span>
                    <ul class="fl">
                        <li><?= $info['num_designer']; ?></li></ul>
                </li>
            </ul>
            <ul class="ul_two clearfix">
                <li class="clearfix">
                    <span class="same">地址:</span>
                    <a class="a_one" href="javascript:void(0);" rel="nofollow"><?= $info['address']; ?></a>
                </li>
                <!--<li class="current4 clearfix">
                    <span class="same">热线：</span>
                    <span id="shoowtel" class="span_four">****</span>
                    <a title="热线" class="a_five" href="javascript:;" onclick="check_is_login2(137829,1,2,33,'');return false;">
                        <span id="chakan">查看</span></a>
                    <span id="my_telephone" style="display:none">****</span></li>
                <span id="zongbudianhua" style="display:none;color: #df0000;float:left;font-size: 20px;font-style: italic;font-weight: bold;margin-left: -70px;margin-top: 5px;">0312-8593111</span>-->
            </ul>
        </div>
    </div>
    <p></p>
    <div class="detail_btnChild">
        <ul class="clearfix">
            <li class="li3">
                <a rel="nofollow" href="javascript:;" hideFocus="true" title="快速获得加盟资料" onclick="message_check('<?= $info['id']; ?>','merchant', 'merchant-index','免费设计', ''); return false; ">免费设计</a></li>
            <!--<li class="li4">
                <a rel="nofollow" style="cursor:pointer" onclick="qqdynamic(137829,4006122505)" id="clickqq">QQ咨询</a></li>-->
            <!--<li class="li5">
                <span>
                    <a href="javascript:;" hideFocus="true" title="想知道更多项目详情？让企业给您回电话吧!" onclick="subEditUserInfo2('137829','3','12',1,2);_gaq.push(['_trackEvent', '留言', '点击', '回电话点击']);return false;">企业回拨</a></span>
            </li>-->
            <div class="clr"></div>
        </ul>
        <div class=yj2></div>
        <div class=yj1></div>
    </div>
</div>
