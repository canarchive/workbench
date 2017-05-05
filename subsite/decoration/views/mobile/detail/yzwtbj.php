<?php
use yii\helpers\Url;
$this->params['cssFiles'] = [
    'baojia/css/h5_common', 'baojia/css/h5_icon_font', 'baojia/css/swiper', 'baojia/css/common',
    'baojia/css/icon_font', 'baojia/css/decoration-budget',
];
$this->params['jsFiles'] = [
    'baojia/js/jquery-1.11.3.min',
];
$this->params['bodyClass'] = 'bg-f2';
$this->params['formPosition'] = 'hd-yzwbj';
$this->params['formPositionName'] = '活动-移动端报价';
Yii::$app->params['siteNameBase'] = '悦装网';
Yii::$app->params['siteHotline'] = '4008-455-299';
Yii::$app->params['tdkInfos']['title'] = '设计量房-北京装修公司-悦装网更高品质的保障';
Yii::$app->params['tdkInfos']['keyword'] = '悦装网,装修公司,装修效果图,装修设计,室内装修,新房装修';
Yii::$app->params['tdkInfos']['description'] = '悦装网2015年获洪泰和滴滴投资人王刚投资,提供高性价比极致爆款的整体家装服务,包施工主材设计,咨询热线:4008-455-299';
$this->params['cidDefault'] = '668';
$this->params['faviconUrl'] = 'http://www.yuezw.com/favicon.ico';
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    //window.location.href = "<?= Yii::getAlias(Yii::$app->params['hostAliasPc']) . Url::to(['/decoration/detail/feature', 'view' => 'yzwsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>";
}
</script>
<script>
var _hmt = _hmt || [];
(function() {
	  var hm = document.createElement("script");
	    hm.src = "https://hm.baidu.com/hm.js?259a482682d091ac17a3fdfe4e6627cc";
	    var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
})();
</script>
<?= $this->render('base_tobj'); ?>
