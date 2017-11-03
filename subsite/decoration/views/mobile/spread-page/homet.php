<?php
use yii\helpers\Url;

$cssFiles = [
    'common.min', 'reseth5', 'swiper.min', 'provincesSelect', 'zxbj2',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'spread/house/tobj/css/']);

$jsFiles = [
    'jquery.min', 'to8torsas', 'zbcommon',
];
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'spread/house/tobj/js/']);

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2017装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';
$currentSiteInfo = $this->context->currentSiteInfo;
?>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />
<meta content="telephone=no" name="format-detection" />
<meta name="applicable-device" content="mobile">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!--body onselectstart="return false" -->
<div class="zxbj-main">
    <div class="zxbj-page zxbj-page-radio zxbj-page-home" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择房屋类型与城市 1/3</h5>
        <ul class="zxbj-page-select" data-name="xinjiu">
            <li class="zxbj-page-li" data-value="1" data-value2="新房装修">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_01_left.jpg" alt="新房装修">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>新房装修</span></li>
            <li class="zxbj-page-li " data-value="2" data-value2="旧房翻新">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_01_right.jpg" alt="旧房翻新">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>旧房翻新</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择房屋类型</div>
        <form class="zxbj-page-input arrow" id="area-form">
            <input type="text" name="area" id="area" class="zxbj-page-input-t" value="北京" placeholder="选择房屋所在城市" readonly="readonly">
            <input type="hidden" name="city" value="北京"></form>
        <div class="zxbj-page-error">*你还没有选择房屋所在城市</div>
        <div class="zxbj-page-btn-single zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-single-sub zxbj-page-next">下一步</a></div>
        <div class="zxbj-page-footer">
            <img class="zxbj-page-footer-go" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer1.jpg" alt="">
            <img class="zxbj-page-footer-back" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer2.jpg" alt=""></div>
    </div>
    <div class="zxbj-page zxbj-page-radio zxbj-page-huxing" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择户型与面积 2/3</h5>
        <ul class="zxbj-page-select" data-name="shi-ting">
            <li class="zxbj-page-li" data-value="1-1" data-value2="一室一厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_11.jpg" alt="一室一厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>一室一厅</span></li>
            <li class="zxbj-page-li" data-value="1-2" data-value2="一室两厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_12.jpg" alt="一室两厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>一室两厅</span></li>
            <li class="zxbj-page-li" data-value="2-1" data-value2="两室一厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_21.jpg" alt="两室一厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>两室一厅</span></li>
            <li class="zxbj-page-li" data-value="2-2" data-value2="两室两厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_22.jpg" alt="两室两厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>两室两厅</span></li>
            <li class="zxbj-page-li" data-value="3-1" data-value2="三室一厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_31.jpg" alt="三室一厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>三室一厅</span></li>
            <li class="zxbj-page-li" data-value="3-2" data-value2="三室两厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_32.jpg" alt="三室两厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>三室两厅</span></li>
            <li class="zxbj-page-li" data-value="4-1" data-value2="四室一厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_41.jpg" alt="四室一厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>四室一厅</span></li>
            <li class="zxbj-page-li" data-value="4-2" data-value2="四室两厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_02_42.jpg" alt="四室两厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>四室两厅</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择户型</div>
        <form class="zxbj-page-input">
            <input type="text" name="square" id="square" class="zxbj-page-input-t" placeholder="输入房屋面积">
            <span class="zxbj-page-input-sup">m&sup2</span></form>
        <div class="zxbj-page-error">*你还没有输入房屋面积</div>
        <div class="zxbj-page-btn zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-sub zxbj-page-previous" data-first="new">上一步</a>
            <a href="javascript:;" class="zxbj-page-btn-sub zxbj-page-next">下一步</a></div>
        <div class="zxbj-page-footer">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer5.jpg" alt=""></div>
    </div>
    <div class="zxbj-page zxbj-page-radio zxbj-page-aj" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择户型与面积 2/3</h5>
        <ul class="zxbj-page-select" data-name="all-per">
            <li class="zxbj-page-li zxbj-page-li-left" data-value="1" data-value2="整体改造">
                <img class="zxbj-page-li-imgleft" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_all.jpg" alt="整体改造">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>整体改造</span></li>
            <li class="zxbj-page-li zxbj-page-li-right" data-value="2" data-value2="局部翻新">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_per.jpg" alt="局部翻新">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>局部翻新</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择装修工程量</div>
        <form class="zxbj-page-input">
            <input type="text" name="square" id="square" class="zxbj-page-input-t" placeholder="输入装修面积">
            <span class="zxbj-page-input-sup">m&sup2</span></form>
        <div class="zxbj-page-error">*你还没有输入装修面积</div>
        <div class="zxbj-page-btn zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-sub zxbj-page-previous" data-first="old">上一步</a>
            <a href="javascript:;" class="zxbj-page-btn-sub zxbj-page-next">下一步</a></div>
        <div class="zxbj-page-footer">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer5.jpg" alt=""></div>
    </div>
    <div class="zxbj-page zxbj-page-style zxbj-page-radio zxbj-page-style-xin" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择装修风格 3/3</h5>
        <ul class="zxbj-page-select" data-name="style">
            <li class="zxbj-page-li" data-value=0 data-value2="简约装修">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/style_left.jpg" alt="简约装修">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>简约装修</span></li>
            <li class="zxbj-page-li" data-value=1 data-value2="精致装修">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/style_right.jpg" alt="精致装修">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>精致装修</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择装修风格</div>
        <form class="zxbj-page-input">
            <input type="text" name="phone" class="zxbj-page-input-t" placeholder="输入手机号码，短信接收报价结果"></form>
        <div class="zxbj-page-error">*你还没有输入手机号码</div>
        <div class="zxbj-page-btn-single zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-single-sub zxbj-page-next  zxbj-page-next-submit" data-branch="new">立即计算</a></div>
        <div class="zxbj-page-footer">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer3.jpg" alt=""></div>
    </div>
    <div class="zxbj-page zxbj-page-style zxbj-page-radio zxbj-page-style-jiu" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择装修风格 3/3</h5>
        <ul class="zxbj-page-select" data-name="style">
            <li class="zxbj-page-li" data-value=0 data-value2="简约装修">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/style_left.jpg" alt="简约装修">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>简约装修</span></li>
            <li class="zxbj-page-li" data-value=1 data-value2="精致装修">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/style_right.jpg" alt="精致装修">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>精致装修</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择装修风格</div>
        <form class="zxbj-page-input">
            <input type="text" name="phone" class="zxbj-page-input-t" placeholder="输入手机号码，短信接收报价结果"></form>
        <div class="zxbj-page-error">*你还没有输入手机号码</div>
        <div class="zxbj-page-btn-single zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-single-sub zxbj-page-next zxbj-page-next-submit" data-branch="old-a">立即计算</a></div>
        <div class="zxbj-page-footer">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer3.jpg" alt=""></div>
    </div>
    <div class="zxbj-page zxbj-page-checkbox zxbj-page-area" data-page="">
        <div class="zxbj-page-head">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top1.jpg" alt="免费获取装修报价">
            <h4 class="zxbj-page-head-title">免费获取装修报价</h4></div>
        <h5 class="zxbj-page-tip">选择改造区域 3/3
            <div class="zxbj-page-tip-sub">(可多选)</div></h5>
        <ul class="zxbj-page-select" data-name="area">
            <li class="zxbj-page-li" data-value=0 data-value2="客厅">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/area1.jpg" alt="客厅">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>客厅</span></li>
            <li class="zxbj-page-li" data-value=1 data-value2="卧室">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/area2.jpg" alt="卧室">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>卧室</span></li>
            <li class="zxbj-page-li" data-value=2 data-value2="厨房">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/area3.jpg" alt="厨房">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>厨房</span></li>
            <li class="zxbj-page-li" data-value=3 data-value2="卫生间">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/area4.jpg" alt="卫生间">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>卫生间</span></li>
            <li class="zxbj-page-li" data-value=4 data-value2="阳台">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/area5.jpg" alt="阳台">
                <img class="zxbj-page-li-icon checked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/check2.png" alt="checked">
                <img class="zxbj-page-li-icon unchecked" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/no_check2.png" alt="not checked">
                <span>阳台</span></li>
        </ul>
        <div class="zxbj-page-error">*你还没有选择改造区域</div>
        <form class="zxbj-page-input">
            <input type="text" name="phone" class="zxbj-page-input-t" placeholder="输入手机号码，短信接收报价结果"></form>
        <div class="zxbj-page-error">*你还没有输入手机号码</div>
        <div class="zxbj-page-btn-single zxbj-page-btn-click">
            <a href="javascript:;" class="zxbj-page-btn-single-sub zxbj-page-next zxbj-page-next-submit" data-branch="old-j">立即计算</a></div>
        <div class="zxbj-page-footer">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer3.jpg" alt=""></div>
    </div>
    <div class="zxbj-page4 zxbj-page" data-page="">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/rabbit.jpg" alt="装修就上<?= Yii::$app->params['siteNameBase']; ?>">
        <div class="zxbj-page4-progress">
            <div class="zxbj-page4-progress-sub"></div>
        </div>计算中...</div>
    <div class="zxbj-page5" data-page="5">
        <div class="zxbj-page5-wrapper">
            <div class="zxbj-page5-head">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_top2.jpg" alt="一不小心就获得一份增值服务">
                <h4 class="zxbj-page5-head-title">一不小心就获得一份
                    <span class="zxbj-page5-title-service">增值服务</span></h4>
            </div>
            <p class="zxbj-page5-tip">0元享受价值
                <span id="zxbj-page5-tip-sj">11000元</span>的户型设计方案</p>
            <div class="zxbj-page5-service zxbj-page5-box">
                <h5 class="zxbj-page5-service-title zxbj-page5-box-title">服务流程</h5>
                <span class="zxbj-page5-service-attention">注意接听回访电话哦</span>
                <div class="zxbj-page5-service-progress">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/service.gif?v=201611171415" alt="服务流程">
                    <ul class="zxbj-page5-service-progress-ul">
                        <li>装修管家
                            <br/>电话咨询</li>
                        <li>预约免费
                            <br/>上门量房</li>
                        <li>三个工作日
                            <br/>出设计图</li>
                        <li>帮你制定
                            <br/>预算规划</li></ul>
                </div>
            </div>
            <div class="zxbj-page5-result zxbj-page5-box">
                <h5 class="zxbj-page5-result-title zxbj-page5-box-title">查看报价结果</h5>
                <div class="zxbj-page5-result-detail">
                    <p class="zxbj-page5-result-detail-title">您家装修预估价
                        <strong id="tubatu_totle">0</strong>万元</p>
                    <p>
                        <span class="zxbj-page5-result-name">卧室：</span>
                        <strong id="woshi_bj">0</strong>元</p>
                    <p>
                        <span class="zxbj-page5-result-name">客厅：</span>
                        <strong id="ting_bj">0</strong>元</p>
                    <p>
                        <span class="zxbj-page5-result-name">厨房：</span>
                        <strong id="chuf_bj">0</strong>元</p>
                    <p>
                        <span class="zxbj-page5-result-name">卫生间：</span>
                        <strong id="weisj_bj">0</strong>元</p>
                    <p>
                        <span class="zxbj-page5-result-name">阳台：</span>
                        <strong id="yangt_bj">0</strong>元</p>
                    <p>
                        <span class="zxbj-page5-result-name">其他：</span>
                        <strong id="qita_bj">0</strong>元</p>
                </div>
            </div>
            <p class="zxbj-page5-text">*因材料品牌及工程量不同，具体报价结果以量房实测为准</p></div>
        <!--<div class="zxbj-page5-footer">
            <a href="javascript:;" id="for-more">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/images/zxbj_footer4.png?v=201611171415" alt="装修就上<?= Yii::$app->params['siteNameBase']; ?>"></a>
        </div>-->
    </div>
    <form class="zxbj-page-form" id="zxbj-page-form" action="/zb/post">
        <!-- <input type="hidden" name="xinjiu" value=""> -->
        <input type="hidden" name="shi" value="">
        <input type="hidden" name="ting" value="">
        <input type="hidden" name="chu" value="">
        <input type="hidden" name="wei" value="">
        <input type="hidden" name="yangtai" value="">
        <input type="hidden" name="square" value="">
        <input type="hidden" name="phone" value="">
        <input type="hidden" name="city" value="">
        <input type="hidden" name="modeltype" value="8">
        <!-- 原来在线报价表单的数据 -->
        <section style="display: none">
            <input type="hidden" name="xinjiu_detail" id="ul-xinjiu" value="">
            <input type="hidden" name="shiting_detail" id="ul-shi-ting" value="">
            <input type="hidden" name="allper_detail" id="ul-all-pre" value="">
            <input type="hidden" name="style_detail" id="ul-style" value="">
            <input type="hidden" name="area_detail" id="ul-area" value="">
            <input type="hidden" name="ptag" id="urlptag" value="2_3_1_1">
            <input type='hidden' name='demo' id='demo' value='' />
            <input type='hidden' name='shen' id='shen' value='' />
            <input type="hidden" name="openid" value="" />
            <input type="hidden" name="pagetype" value="" />
            <input type="hidden" name="sourceid" value="" />
            <input type="hidden" name="pro_s_sourceid" id="pro_s_sourceid" value="" />
            <input type="hidden" name="device_src" value="" />
            <input type="hidden" name="to8to_from" value="" />
            <input type="hidden" name="uid" value="" />
            <input type="hidden" name="yid" id="yid" value="0" />
            <input type="hidden" name="logId" id="logId" value="0" />
            <input type="hidden" name="idfa" value="" readonly/>
            <input type="hidden" name="gonghao" value="" readonly/>
            <input id="authOpenid" name="authOpenid" type="hidden" value="" />
            <input type='hidden' id="xinbaojia" name='xinbaojia' value="" />
            <input type="hidden" name="fromapp" id="fromapp" value=""></section>
    </form>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/jquery-1.10.2.min.js"></script>
<!-- 点击流 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/2a19dc2ac1471a7470fe7187a5537960_2.js?v=20150921"></script>
<!-- 来源统计 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/seoStatis.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/componentsh5.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/provincesSelect.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/swiper.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/pageResponse.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/fastclick.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/zxbj2.js??v=201611171417"></script>
<script>(function() {
        /**
         * 输入状态下隐藏导航栏
         */
        function initInputSelectFocus() {
            var dom_arr = document.querySelectorAll('input[type="text"]');
            var sel_arr = document.querySelectorAll('select');
            var txt_arr = document.querySelectorAll('textarea');
            var dom_len = dom_arr.length;
            var sel_len = sel_arr.length;
            var txt_len = txt_arr.length;
            if (sel_len > 0) {
                for (var i = 0; i < sel_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = sel_arr[i];
                }
                dom_len += sel_len;
            }
            if (txt_len > 0) {
                for (var i = 0; i < txt_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = txt_arr[i];
                }
                dom_len += txt_len;
            }
            if (dom_len > 0) {
                var fix_dom = document.querySelector('.footer-fix');
                var screen_dom = document.querySelector('.screen');
                for (var i = 0; i < dom_len; i++) {
                    if (!dom_arr[i]) {
                        continue;
                    }
                    dom_arr[i].addEventListener('focus',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'none');
                        if (screen_dom) {
                            screen_dom.style.display = 'none';
                        }
                    },
                    false);
                    dom_arr[i].addEventListener('blur',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'block');
                    },
                    false);
                }
            }
        }
        initInputSelectFocus();
    })();</script>
<script>var browser = {
        versions: function() {
            var u = navigator.userAgent,
            app = navigator.appVersion;
            return { //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1,
                //IE内核
                presto: u.indexOf('Presto') > -1,
                //opera内核
                webKit: u.indexOf('AppleWebKit') > -1,
                //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/),
                //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1,
                //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1,
                //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        } ()
    };
    if (browser.versions.iPad) {
        $('head').find('meta[name=viewport]').attr('content', 'initial-scale=1.0,user-scalable=no,maximum-scale=1');
    }</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/seoStatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/2a19dc2ac1471a7470fe7187a5537960_2.js?v=20150921"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/tobj/js/h5AppDownload_sourcecharge.min.js?v=201611181238"></script>
<style>
body{
 font-family: 'Microsoft YaHei', Helvetica, Arial, sans-serif;
  }

  a {
 text-decoration:none;

 }
 .seek_phone {
   border: 1px solid #FFFFFF;
   background-color: #FFB120;
   border-radius: 3rem;
   position: fixed;
   bottom: 0rem;
   left: 0;
   text-align: center;
 }
 .seek_phone a {
   display: block;
   width:0.65rem;
   line-height: 0.65rem;
   height: 0.65rem;
   font-size: 0.13rem;
   color: #FFFFFF;
 }
</style>
<!--<aside class="seek_phone">
    <a href="tel:4008032163">电话咨询</a>
</aside>-->
<p style="text-align:center;color:#ccc;font-size:12px; margin-bottom: 5px">
    <?= $this->context->currentSiteInfo['copy']; ?><br />
	<?php if (isset($currentSiteInfo['address'])) { ?>地址：<?= $currentSiteInfo['address']; ?><br /><?php } ?>
	<?php if (isset($currentSiteInfo['hotline'])) { ?>电话: <?= $currentSiteInfo['hotline']; ?><br /><?php } ?>
    <?= $this->context->currentSiteInfo['icp']; ?>
</p>
