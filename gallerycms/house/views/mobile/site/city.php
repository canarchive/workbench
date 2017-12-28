<?php
$cssFiles = ['common/css/swiper.min', 'common/css/appcommon'];
$this->params['cssStr'] = $this->render('@gallerycms/views/mself/_css', ['cssFiles' => $cssFiles]);
//$jsFiles = ['jquery', 'common'];
//$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);

$hotCitys = [];
$cityInfos = [];
foreach (Yii::$app->params['companyInfos'] as $cInfo) {
	$cityInfos[$cInfo['code_initial']][] = $cInfo;
	if ($cInfo['status'] == 2) {
		$hotCitys[] = $cInfo;
	}
}
?>
<?php echo $this->render('_city-style'); ?>
<header class="city_header">
    <a href="javascript:;" class="pl backtohis"></a>
    <h2 class="header_title">选择城市</h2>
</header>
<!--当前城市-->
<section class="city_top">
    <a href="" class="top_status">
        <span><?= $this->context->currentCityName; ?></span>
    </a>
</section>
<!--热门城市-->
<section class="city_hot">
    <p class="city_title">热门城市</p>
    <ul class="city_ul clear">
        <?php foreach ($hotCitys as $cInfo) { ?>
        <li class="city_li">
			<a class="city_a" href="<?= "/{$cInfo['code']}/"; ?>"><?= $cInfo['name']; ?></a>
        </li>
        <?php } ?>
    </ul>
</section>
<!--全部城市-->
<section class="city_more">
    <p class="city_title">全部城市</p>
    <ul class="city_ul clear">
        <?php foreach ($cityInfos as $codeInitial => $cInfos) { ?>
        <li class="city_li">
		    <a class="city_a" href="#<?= $codeInitial; ?>"><?= $codeInitial; ?></a>
        </li>
        <?php } ?>
    </ul>
</section>
<!--城市列表-->
<?php foreach ($cityInfos as $codeInitial => $cInfos) { ?>
<section class="city_area">
    <p id="<?= $codeInitial; ?>" class="city_title"><?= $codeInitial; ?></p>
    <ul class="city_ul clear">
    
        <?php foreach ($cInfos as $cInfo) { ?>
        <li class="city_li">
			<a class="city_a" href="<?= "/{$cInfo['code']}/"; ?>"><?= $cInfo['name']; ?></a>
        </li>
        <?php } ?>
    </ul>
</section>
<?php } ?>
<script src="<?= Yii::getAlias('@assetself/common/js/swiper.min.js'); ?>"></script>
<script src="<?= Yii::getAlias('@assetself/common/js/zepto.min.js'); ?>"></script>
<script src="<?= Yii::getAlias('@assetself/common/js/jquery-1.11.3.min.js'); ?>"></script>
<script>
    $('.backtohis').click(function(){
        history.go(-1);
    })
    function gotoCity(city){
        location.href=city+".html";
    }
</script>
