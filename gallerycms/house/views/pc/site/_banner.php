<?php
//$mInfos = $this->context->mDatas['merchantInfos'];
?>
<div class="zong_banner">
    <div class="clear banWrap wrap_mar">
        <ul class="banWrap_left pr fl">
            <li class="item">
                <h3><a>基于类别找装修公司</a></h3>
                <span class="banWrapA">
                <?php foreach (['solo' => '小户型', 'villa' => '别墅', 'part' => '局部装修'] as $mKey => $mValue) { ?>
                    <a style="color: #999;font-size: 14px;height: 24px;line-height: 24px;" href="<?= "/{$this->context->currentCityCode}/merchant/b_{$mKey}/"; ?>" title="<?= $mValue; ?>"><?= $mValue; ?></a>&nbsp;&nbsp;
                <?php } ?>
                </span></li>
            <li class="item">
                <h3><a>基于风格找装修公司</a></h3>
                <span class="banWrapA">
                <?php foreach (['simple' => '简约', 'modern' => '现代', 'simpleen' => '简欧', 'rural' => '田园', 'en' => '欧式'] as $mKey => $mValue) { ?>
                    <a style="color: #999;font-size: 14px;height: 24px;line-height: 24px;" href="<?= "/{$this->context->currentCityCode}/merchant/b_{$mKey}/"; ?>" title="<?= $mValue; ?>"><?= $mValue; ?></a>&nbsp;&nbsp;
                <?php } ?>
            <li class="item">
                <h3><a>基于价位找装修公司</a></h3>
                <span class="banWrapA">
                <?php foreach (['four' => '8-12万', 'five' => '12-18万', 'six' => '18-30万'] as $mKey => $mValue) { ?>
                    <a style="color: #999;font-size: 14px;height: 24px;line-height: 24px;" href="<?= "/{$this->context->currentCityCode}/merchant/b_{$mKey}/"; ?>" title="<?= $mValue; ?>"><?= $mValue; ?></a>&nbsp;&nbsp;
                <?php } ?>
                </span></li>
            <li class="item">
                <h3><a>装修问答</a></h3>
                <span class="banWrapA">
                <?php foreach (['jzsj' => '家装设计', 'jjcp' => '家居产品', 'jxcl' => '装修材料'] as $mKey => $mValue) { ?>
                    <a style="color: #999;font-size: 14px;height: 24px;line-height: 24px;" href="<?= "/ask_lm_{$mKey}/"; ?>" title="<?= $mValue; ?>"><?= $mValue; ?></a>&nbsp;&nbsp;
                <?php } ?>
                </span></li>
            <!--<li class="item" style='height: 35px;'><a href="" title=""><i class='zhti'></i></a></li>-->
        </ul>
        <!-- banner 中间 -->
        <div class="banWrap_center fl">
            <div class="www51buycom" style="height:325px;">
                <ul class="51buypic" style="height:325px;">
                    <li>
                        <a href="javascript:void(0);" title="" style="display:block; height:325px;" ad_need_click="true" ad_id="21579">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d5fa1-6867.jpg" alt="2017年建博会12.1" /></a>
                        <span id="advert" style="height: 13px;width: 24px;position: absolute;bottom: 0;left: 0;overflow:hidden;">
                            <a href="javascript:void(0);">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt=""></a></span>
                    </li>
                    <li>
                        <a href="javascript: void(0);" title="" style="display:block; height:325px;" ad_need_click="true" ad_id="23650">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3df9b-6035.jpg" alt="" /></a>
                        <span id="advert" style="height: 13px;width: 24px;position: absolute;bottom: 0;left: 0;overflow:hidden;">
                            <a href="javascript: void(0);">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt=""></a></span>
                    </li>
                    <li>
                        <a href="javascript: void(0);" title="" style="display:block; height:325px;" ad_need_click="true" ad_id="23701">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/68533-1612.jpg" alt="" /></a>
                        <span id="advert" style="height: 13px;width: 24px;position: absolute;bottom: 0;left: 0;overflow:hidden;">
                            <a href="javascript: void(0);">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt=""></a></span>
                    </li>
                    <li>
                        <a href="javascript: void(0);" title="" style="display:block; height:325px;" ad_need_click="true" ad_id="26513">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/54870-8832.jpg" alt="" /></a>
                        <span id="advert" style="height: 13px;width: 24px;position: absolute;bottom: 0;left: 0;overflow:hidden;">
                            <a href="javascript: void(0);">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt=""></a></span>
                    </li>
                </ul>
                <div class="num">
                    <ul></ul>
                </div>
            </div>
            <script>$(".www51buycom").slide({
                    titCell: ".num ul",
                    mainCell: ".51buypic",
                    effect: "fold",
                    autoPlay: true,
                    delayTime: 500,
                    interTime: 4000,
                    autoPage: "<li><a></a></li>"
                });</script>
            <!-- 代码 结束 --></div>
        <!-- banner 右侧 -->
        <div class="banWrap_right fl">
            <div class="banner_bottom clear">
                <?php $i = 0; foreach ($mInfos as $mKey => $mInfo) { if ($i > 2) { break; } ?>
                <a href="<?= $mInfo['infoUrl']; ?>" title="<?= $mInfo['name']; ?>" class="fl">
                    <dl class="clear">
                        <dd class="fl">
                            <h2><?= $mInfo['name']; ?></h2>
                            <!--<span>风险共担</span>-->
                            <p class="p_look f12">查看详情&nbsp;></p></dd>
                        <dt class="fl">
                            <img src="<?= $mInfo['logo']; ?>" alt="<?= $mInfo['name']; ?>" /></dt>
                    </dl>
                </a>
                <?php $i++; unset($this->context->mDatas['merchantInfos'][$mKey]); } ?>
            </div>
        </div>
    </div>
</div>
