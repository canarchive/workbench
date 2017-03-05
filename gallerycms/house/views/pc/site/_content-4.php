<?php
use yii\helpers\StringHelper;

?>
<div class='ItemAndList'>
    <div class='zhuanQu_right fr'>
        <h2 class="p_zhuanQ">
            <span><?= $this->context->currentCityName; ?>装修公司<em></em></span>
        </h2>
        <ul class="ul_top">
            <?php $i = 1; foreach ($infos as $key => $info) { if ($i > 10) { break; } ?>
            <li class="clear">
                <i class="zong_icon i41 <?php if ($i > 3) { echo 'ime'; } ?> fl" <?php if ($i < 4) { echo 'style="color:#fff;"'; } ?>><?= $i; ?></i>
                <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name_full']; ?>" class=""><?= StringHelper::truncate($info['name_full'], 14, '...'); ?></a>
                <!--<span class="fr">6100</span>-->
            </li>
            <?php $i++; unset($infos[$key]); } ?>
        </ul>
        <p style="width: 270px; height: 80px; overflow: hidden; margin-top: 9px; position:relative;">
            <a href="/" title="">
                <img alt="" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/e7260-4000.jpg"></a>
        </p>
    </div>
    <div class='joinItem fl'>
        <div class='clear'>
            <!--<ul class="yd_m4 fr">
                <li class="fl li1">优惠公告:</li>
                <li class="fl ymarqueeUP">
                    <p><a href="/"></a></p>
                </li>
            </ul>-->
            <div class='joinItemFl fl'>
                <a style="color:#000;" href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>"><?= $this->context->currentCityName . '装修公司'; ?></a></div>
        </div>
        <div class="zuiXin_list clear">
            <div class="foucebox">
                <div class="hd">
                    <ul class="clear">
                        <li>重点推荐</li>
                        <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="更多<?= $this->context->currentCityName . '装修公司'; ?>">更多<?= $this->context->currentCityName . '装修公司'; ?></a></ul>
                </div>
                <div class="bd">
                    <div class="showDiv">
                        <div class="canY_con1 clear">
                            <?php $i = 1; foreach ($infos as $key => $info) { if ($i > 6) { break; } ?>
                            <dl class="fl">
                                <dt class="pr">
                                    <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name_full']; ?>">
                                        <img class="hoverimg" src="<?= $info['logo']; ?>" alt="<?= $info['name_full']; ?>" /></a>
                                    <p class="p_black pa"></p>
                                    <div class="p_black2 pa clear">
                                        <p class="fl p1 f14">
                                            <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name_full']; ?>"><?= $info['name_full']; ?></a></p>
                                        <p class="fr p_iCan p_iCan2 f12" onclick="message_check('79341','30-1','我要设计');">免费设计</p></div>
                                </dt>
                                <dd class="clear">
                                    <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name_full']; ?>"><?= $info['name_full']; ?></a>
                                    <!--<p class="fr p_money p_money2 f12">
                                        <span class="span2 fr">(不含房租)</span>
                                        <span class="span_red fr">
                                            <em>3-10</em>万</span></p>-->
                                </dd>
                            </dl>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>jQuery(".foucebox").slide({
            effect: "fold",
            autoPlay: true,
            delayTime: 300,
            startFun: function(i) {
                jQuery(".foucebox .showDiv").eq(i).find("h2").css({
                    display: "none",
                    bottom: 0
                }).animate({
                    opacity: "show",
                    bottom: "60px"
                },
                300);
                jQuery(".foucebox .showDiv").eq(i).find("p").css({
                    display: "none",
                    bottom: 0
                }).animate({
                    opacity: "show",
                    bottom: "0px"
                },
                300);
            }
        });</script>
</div>
