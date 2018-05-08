<?php
use yii\helpers\Url;
$cssFiles = [
    'h5_common', 'h5_icon_font', 'swiper', 'common',
    'icon_font', 'decoration-budget',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'spread/house/baojia/css/']);
$jsFiles = ['jquery-1.11.3.min'];
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'spread/house/baojia/js/']);
$this->params['bodyClass'] = 'bg-f2';

$cityInfos = $model->getPointModel('company')->getInfos(['where' => ['status' => 2], 'indexBy' => 'code', 'orderBy' => ['orderlist' => SORT_DESC]]);
$currentCity = isset(Yii::$app->params['currentCompany']['code']) ? Yii::$app->params['currentCompany']['code'] : 'beijing';
$currentCityName = isset($cityInfos[$currentCity]) ? $cityInfos[$currentCity]['name'] : '北京';

Yii::$app->params['tdkInfos']['title'] =  '装修报价-' . $currentCityName . '装修报价单_' . $currentCityName . '装修预算表_' . $currentCityName . '装修到底需要多少钱-兔班长装修网';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '兔班长装修网装修报价频道为您收集整理了大量2018' . $currentCityName . '装修报价单，' . $currentCityName . '装修预算表，' . $currentCityName . '装修到底需要多少钱，让您家装修更省钱！';
$urls = $this->context->navUrls;
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
}
</script>
<style>
.text_tit{
    padding-left: 1.2rem;
    width: 2.2rem;
	/*display: inline-block;*/
    height: 1.5rem;
    line-height: 1.5rem;
    background: url("<?= Yii::getAlias('@asseturl'); ?>/spread/house/phone.png") no-repeat;
}
</style>
<header class="cWhite cMdGray clearfix">
    <div class="tit_top">
        <div class="left">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/third/phone_logo_tbz.jpg" alt="">
        </div> 
		<a href="tel:<?= $this->appDatas('siteHotline'); ?>"><div class="f12 text_tit"></div></a>
    </div>
</header>
<!-- 正文 start -->
<div class="container" data-page="budget-index">
    <!-- 标题栏 start -->
    <a href="#"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/images/banner.jpg" alt=""></a>
    <div class="mask-layer1 zp-mask-layer1"></div>
    <!-- 标题栏 end -->
    <!-- 表格视图-->
    <ul class="msg-list pd-lr4 msg-list-icon bg-ff border-bottom" id="formStart">
        <li>
            <a data-target="zp-decoration-city">
                <i class="media-object iconfont icone684 l"></i>
                <label class="title">所在地区 :</label>
                <i class="iconfont icone60c r"></i>
				<span class="dib r mr4 zp-city" id="selectcity"><?= $currentCityName; ?></span></a>
        </li>
        <li class="zp-area-focus">
            <a>
                <i class="media-object iconfont icone682 l"></i>
                <label class="title">房屋面积 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input id="txtarea" class="input-nounit zp-input1" type="tel" value="" placeholder="请输入您的房屋面积" />
                    <em class=" m2-unit hide zp-m-unit1">m
                        <i>2</i>
                    </em>
                </span>
            </a>
        </li>
        <li class="mobile-li zp-phone-focus">
            <a class="zp-tap-mobile">
                <i class="media-object iconfont icone665 l"></i>
                <label class="title">您的手机 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input id="txtmobile" class="input-nounit input_mobile" type="tel" value="" placeholder="输入手机号码接收报价结果" /></span>
            </a>
        </li>
        <input type="hidden" id="user_tel" value="" />
        <li class="last">
            <a id="ksjs" href="javascript:;" class="btn btn-block btn-orange btn-line f16 mt3 mb3 zp-btn-price">开始计算</a>
        </li>
    </ul>
    <div class="pd-lr4 bg-ff mt3 border-top border-bottom">
        <p class="msg-title border-bottom text-center f16">装修预算约
            <span class="cRed ml3 mr3 price-all">0</span>万元</p>
        <ul class="msg-list cGray">
            <li>
                <span class="w-25">卧室</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-shi">0</strong>元</span>
                <span class="w-25">客厅</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-ting">0</strong>元</span></li>
            <li>
                <span class="w-25">厨房</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-chu">0</strong>元</span>
                <span class="w-25">卫生间</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-wei">0</strong>元</span></li>
            <li>
                <span class="w-25">阳台</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-yangtai">0</strong>元</span>
                <span class="w-25">其他</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-other">0</strong>元</span></li>
            <li class="text-center last"></li>
        </ul>
        <ul class="tips-info cGray mb3">
            <li>
                <i class="iconfont icone69c cOrange mr2 fl f16"></i>本价格为毛坯房半包估算价格（不含水电报价），旧房价格由实际工程量决定。</li>
            <li class="mt2">
                <i class="iconfont icone69c cOrange mr2 fl f16"></i>稍后装修管家将致电您，为您提供免费装修咨询服务。</li>
            <li class="text-center last"></li>
        </ul>
    </div>
    <a style="display: none" class="cGBlue block-more f16 no-bg" href="/baojia/b0a0o0/">点击查看其他人的报价
        <i class="iconfont icone60c"></i></a>
    <!-- 表格视图end-->
    <!-- 城市选择 start-->
    <div id="zp-decoration-city" class="fixed-bottom-list hide box-tag3 zp-brother ">
        <ul>
            <li>
                <?php foreach ($cityInfos as $cityCode => $city) { ?>
				<a <?php if ($currentCity == $cityCode) { echo 'class="active"'; } ?> href="javascript:;"><?= $city['name']; ?></a>
                <?php } ?>
            </li>
        </ul>
    </div>
</div>

<footer class="cGray">
    <!--<nav class="f16 cDGray">
        <ul>
            <li>
			<a href="<?= $urls['desc']; ?>" rel="nofollow">关于我们</a></li>
            <li>
			<a href="<?= $urls['merchant']; ?>" rel="nofollow">装修公司</a></li>
            <li>
			<a href="<?= $urls['ask']; ?>" rel="nofollow">装修问答</a></li>
            <li>
			<a href="<?= $urls['quote']; ?>" rel="nofollow">装修报价</a></li>
        </ul>
    </nav>-->
	<p class="f12"><?= $this->context->currentSiteInfo['copy'] . '  ' . $this->context->currentSiteInfo['icp']; ?></p>
	<p class="f12">兔班长装修网隶属北京维纳亚科技有限公司</p>
	<p class="f12">地址：<?= $this->appDatas('siteAddressInfo'); ?></p>
	<p class="f12"><a href="tel:<?= $this->appDatas('siteHotline'); ?>">联系电话：<?= $this->appDatas('siteHotline'); ?></a></p>
</footer>
<!-- 正文 end -->
<script data-main="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/js/main.js" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/js/require.js"></script>
