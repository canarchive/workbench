<?php
$cssFiles = ['common/css/webcommon', 'rabbithouse/webrabbit/web/mycss/index'];
$this->params['cssStr'] = $this->render('@gallerycms/views/mself/_css', ['cssFiles' => $cssFiles]);
//$jsFiles = ['jquery', 'common'];
//$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);

$hotCitys = [];
$cityInfos = [];
foreach (Yii::$app->params['companyInfos'] as $cInfo) {
	$cityInfos[strtoupper($cInfo['code_initial'])][] = $cInfo;
	if ($cInfo['status'] == 2) {
		$hotCitys[] = $cInfo;
	}
}
?>

<header class="header clearfloat">
<?= $this->render('@gallerycms/views/mself/pc/_top'); ?>
<?php //echo $this->render('@gallerycms/views/mself/pc/_search'); ?>
<!--导航条-->
<div class="nav clearfloat">
    <ul class="containerSmall clearfloat">
		<li class="enter_key"><a class="cur" href="<?= "/{$this->context->currentCityCode}/"; ?>"><?= $this->context->currentCityName; ?></a></li>
        <!--<li><a href="#">北京装修公司</a></li>-->
		<li><a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>">装修公司</a></li>
		<li><a href="/sample/" alt="<?= $this->context->currentCityName . '装修效果图'; ?>">效果图</a></li>
		<li><a href="javascript:void(0);">装修问答</a></li>
		<li><a href="<?= "/{$this->context->currentCityCode}/quote/"; ?>" title="<?= $this->context->currentCityName . '装修报价'; ?>">装修报价</a></li>
    </ul>
</div>
</header>
<!--选择城市-->
<section class="containerSmall choose_city">
<!--热门城市-->
<div class="hot_city">
    <div class="title_city">热门城市</div>
    <div class="hot_citylist">
        <?php foreach ($hotCitys as $cInfo) { ?>
		<span><a href="<?= "/{$cInfo['code']}/"; ?>"><?= $cInfo['name']; ?></a></span>
        <?php } ?>
		<div>共开通了 <i><?= count(Yii::$app->params['companyInfos']); ?></i>个城市站</div>
    </div>
</div>
<!--快速查找-->
<!--<div class="fast_search">
    <div class="title_city">快速查找</div>
    <select id="pro" onchange="selectc(this);"></select>
    <select id="city"></select>
    <a href="javascript:;">进入</a>
    <a type="text" value=""/>
</div>-->
<!--拼音查找城市-->
<div class="letter_search">
    <div class="title_city">按拼音首字母选择</div>
    <div class="letter_list">
        <?php foreach ($cityInfos as $codeInitial => $cInfos) { ?>
		<a data_letter="<?= strtolower($codeInitial); ?>" href="#<?= $codeInitial; ?>"><?= $codeInitial; ?></a>
        <?php } ?>
    </div>
</div>
<div class="city_box">
    <?php foreach ($cityInfos as $codeInitial => $cInfos) { ?>
	<div class="city_area" id="<?= $codeInitial; ?>">
	    <div class="title_city"><?= $codeInitial; ?></div>
        <div class="city_dt">
            <?php foreach ($cInfos as $cInfo) { ?>
			<?php if ($cInfo['status'] == 2) { ?>
			<span><a data_letter="<?= $codeInitial; ?>" href="<?= "/{$cInfo['code']}/"; ?>"><?= $cInfo['name']; ?></a></span>
            <?php } else { ?>
			<a data_letter="<?= $codeInitial; ?>" href="<?= "/{$cInfo['code']}/"; ?>"><?= $cInfo['name']; ?></a>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
</section>
<!--footer-->
<footer class="footer">
<p>
    <a href="#">关于我们</a> |
    <a href="#">友情链接</a> |
    <a href="#">意见反馈</a> |
    <a href="#">联系我们</a> |
    <a href="#">法律声明</a> |
</p>

<p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。</p>

<p>© copyright 2017 北京维纳亚科技有限公司</p>

<p>兔班长装修网 <a href="">京ICP备17003882号</a></p>

<p>联系电话： <a href="tel:400-8032-163">400-8032-163</a></p>
</footer>
<script src="../../../common/js/jquery-1.11.3.min.js"></script>
<script src="../web/myjs/mainFunction.js"></script>
<script src="../web/myjs/city.js"></script>
<script>
$(function(){
    main();  //头部选择类型切换
    submitPage();//手机信息tab 标签切换
    $('.tab_title li').mouseover(function () {
        var index = $(this).index();
        $(this).addClass("tab_cur").siblings("li").removeClass("tab_cur");
        $('.tab_main .tab_center').removeClass("cur").eq(index).addClass("cur");
    })
    $('.style_list li').mouseover(function () {
        $(this).children('em').removeClass("cur");
        $(this).siblings("li").children('em').addClass("cur");
    })
    $('.style_list li').mouseout(function () {
        $('.style_list li em').removeClass("cur");

    })

    function mobileCheck($obj, num) {
        var $form = $obj.closest("form");
        var uname = "", phone = "";
        var regPhone = /^1[3578]\d{9}$/;
        function errCheck() {
            uname = $.trim($form.find('.userName').val());
            phone = $.trim($form.find('.phoneNum').val());
            if (uname == '') {
                $form.find('.error_name').text('* 请输入您的姓名');
                return false;
            } else {
                $form.find('.error_name').text('');
            }
            if (phone == '') {
                $form.find('.error_phone').text('* 手机号不能为空');
                return false;
            }
            if (!regPhone.test(phone)) {
                console.log(1111);
                $form.find('.error_phone').text('* 请输入正确的手机号');
                return false;
            } else {
                $form.find('.error_phone').text('');
            }
            $.ajax({
                success: function () {
                    console.log('success');
                }
            })
        }

        switch (num) {
            case 1:
                errCheck();
                break;
            case 2:
                errCheck();
                break;
            case 3:
                errCheck();
                break;
            case 4:
                errCheck();
                break;
            case 5:
                errCheck();
                break;
        }
    }
})
</script>
