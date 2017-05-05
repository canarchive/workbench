<?php
use yii\helpers\Html;
$cid = $this->context->cid;
$cid = empty($cid) ? 667 : $cid;
$type = isset($type) ? $type : '';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<title>【美宅客】北京家装公司_整体家装_北京装修设计公司-互联网家装平台</title>
<meta name="keywords" content="家装 装修 互联网家装 装修套餐 主材套餐美宅客 imeizhaike 建材选购" />
<meta name="description" content="美宅客是一家C2M+O2O的互联网家装平台；提供瓷砖、地板、抽油烟机、马桶、淋浴房、水槽等建材购买，提供自有工人的精品施工服务，提供1对1的房屋设计服务；同品质优惠40%以上；我们不用品牌掩盖品质，我们只提供一线工厂品质产品；" />
<link rel="canonical" href="{http://www.imeizhaike.com/}">
<link rel="icon" href="images/ico.ico">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/css/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/css/drawer.min.css">
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/js/jquery.min.js"></script>
<script>
   $(document).ready(function(){
        $('#shursubm').hide();
        $('#shursub').hide();
        $('#shursubk').hide();
         $('#shursubm1').hide();
        $('#shursub1').hide();
        $('#shursubk1').hide();

         $('#shursubm2').hide();
        $('#shursub2').hide();
        $('#shursubk2').hide();
});


</script>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>

<body>
<!--header-->
<div class="head" style="display:none">
	<div class="middle">
    	<p class="logo fl"><a href="/"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/pic_logo.jpg" alt="www.imeizhaike.com-美宅客"></a><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/pic_slogen.jpg" alt="www.imeizhaike.com-美宅客"></p>
        <div class="headfr">
            <b>全国统一服务热线</b>
            <strong>400-8118-088</strong>
        </div>
        <!--<a href="#" class="headfr1">在线预约</a>-->
        <div class="wx">
        <i>关注微信</i>
   	    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ewm.jpg" width="280" height="280" alt="www.imeizhaike.com-美宅客"> </div>
    </div>
    <div class="clear"></div>
</div>
<div class="nav_nav" style="display:none">
  <div class="middle">
    <ul>
      <li><a href="http://www.imeizhaike.com/index.html" target="_blank">首 页</a></li>
      <li><a href="http://www.imeizhaike.com/whole618.html" target="_blank">整装套餐</a></li>
      <li><a href="http://www.imeizhaike.com/package299.html" target="_blank">主材套餐</a></li>
      <li><a href="http://www.imeizhaike.com/newhouse338.html" target="_blank">施工套餐</a></li>
      <li><a href="http://www.imeizhaike.com/design_master.html" target="_blank">大咖设计</a></li>
      <li><a href="http://www.imeizhaike.com/experience.html" target="_blank">体验馆</a></li>
      <li><a href="http://www.imeizhaike.com/article_cat.php?id=9" target="_blank">居家指南</a></li>
      <li><a href="http://www.imeizhaike.com/cooperation.html" target="_blank">合作伙伴</a></li>
    </ul>
  </div>
</div>
<!--header-->

<!--banner-->
<div class="xwl_banner">
	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/xwl_banner.jpg">
    <div class="xwl_banner_nr">
    	<div class="xwl_banner_nr1">
        	<strong>已服务<span>30948</span>户业主</strong>
            <div class="inputsub">
                <input name="" type="text" id="user_name" class="xwl_banner_nr1_input" placeholder="您的姓名">
                <div id="shursub"></div>
            </div>
            <div class="inputsub">
            	<input name="" type="text" id="user_phone" class="xwl_banner_nr1_input" placeholder="手机号码">
                <!--/填写正确的手机号--><div id="shursubm"></div>
                <!--/手机号不能为空--> <div id="shursubk"></div>
            </div>
            <button class="xwl_banner_nr1_bu">免费报名</button>
            <p class="xwl_banner_nr1_text" style="display:none">如奖品、礼品、特价品等活动，需报名方可享受！</p>
        </div>
    </div>
</div>
<!--banner-->

<!--middle-->
<div class="xwl_nr">
	<div class="xwl_nrk xwl_nr_p1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/xwl_p1.jpg" width="100%" /></div>
    <div class="xwl_nrk xwl_nr_p2">
    	<h1 class="xwl_nr_bt">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_bt.jpg" />
            <a class="xwl_nr_bt_bm">免费报名</a>
        </h1>
        <ul class="xwl_nr_p1ul">
        	<li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_01.jpg" /></p>
                <p class="li_mc">吉林森工露水河E0级双饰面橱柜<span>含吊柜，地柜，台面，基础五金</span></p>
                <p class="li_jg">市场价：1680元/延米</p>
                <p class="li_tj"><span>特价</span>￥1499</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_02.jpg" /></p>
                <p class="li_mc">赛唯雅 智能水疗/暖风烘干坐便器<span>740x420x590mm </span></p>
                <p class="li_jg">市场价：5999元/套</p>
                <p class="li_tj"><span>特价</span>￥4800</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_03.jpg" /></p>
                <p class="li_mc">赛唯雅 智能三重立体除臭坐便器<span>685*375*780mm</span></p>
                <p class="li_jg">市场价：1680元/套</p>
                <p class="li_tj"><span>特价</span>￥1299</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_04.jpg" /></p>
                <p class="li_mc">潜水艇不锈钢防臭地漏</p>
                <p class="li_jg">市场价：55元/个</p>
                <p class="li_tj"><span>特价</span>￥1</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_05.jpg" /></p>
                <p class="li_mc">忠旺 60系列6道密封断桥铝门窗</p>
                <p class="li_jg">市场价：680元/平米</p>
                <p class="li_tj"><span>特价</span>￥548</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_06.jpg" /></p>
                <p class="li_mc">1.2MM镁铝合金厨卫平开门<span>1.6平米内，单包口</span></p>
                <p class="li_jg">市场价：1280元/樘</p>
                <p class="li_tj"><span>特价</span>￥999</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_07.jpg" /></p>
                <p class="li_mc">10MM厚钢化玻璃钻石型淋浴房</p>
                <p class="li_jg">市场价：788元/平米</p>
                <p class="li_tj"><span>特价</span>￥760</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_08.jpg" /></p>
                <p class="li_mc">派的实木复合平板门（含五金）</p>
                <p class="li_jg">市场价：1580元/樘</p>
                <p class="li_tj"><span>特价</span>￥1380</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_09.jpg" /></p>
                <p class="li_mc">银晶实木复合浴室柜（含龙头）<span>61003   1000*510*377</span></p>
                <p class="li_jg">市场价：6199元/套</p>
                <p class="li_tj"><span>特价</span>￥4666</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_10.jpg" /></p>
                <p class="li_mc">欧普浴霸OPF66-300*600<span>银色 、金色（两色可选）</span></p>
                <p class="li_jg">市场价：1580元/套</p>
                <p class="li_tj"><span>特价</span>￥1380</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_11.jpg" /></p>
                <p class="li_mc">欧神若拿铁系列ELN32580<span>全抛釉地砖800*800</span></p>
                <p class="li_jg">市场价：198元/㎡</p>
                <p class="li_tj"><span>特价</span>￥129</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_12.jpg" /></p>
                <p class="li_mc">欧神若鱼肚白系列ELX00180<span>全抛釉地砖800*800</span></p>
                <p class="li_jg">市场价：580元/㎡</p>
                <p class="li_tj"><span>特价</span>￥168</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_13.jpg" /></p>
                <p class="li_mc">欧神若卡塔白系列YL232P<span>全瓷釉面墙砖300*600</span></p>
                <p class="li_jg">市场价：138元/㎡</p>
                <p class="li_tj"><span>特价</span>￥98</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_14.jpg" /></p>
                <p class="li_mc">书香门第艺术美拼系列强化地板<span>BJ-015   1217*197*12</span></p>
                <p class="li_jg">市场价：138元/㎡</p>
                <p class="li_tj"><span>特价</span>￥119</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_15.jpg" /></p>
                <p class="li_mc">书香门第艺术美拼系列强化地板<span>BJ-018   1217*197*12</span></p>
                <p class="li_jg">市场价：138元/㎡</p>
                <p class="li_tj"><span>特价</span>￥119</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_16.jpg" /></p>
                <p class="li_mc" style="width:100%;">Hagihome三功能淋浴龙头813307</p>
                <p class="li_jg">市场价：2805元/套</p>
                <p class="li_tj"><span>特价</span>￥1468</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_17.jpg" /></p>
                <p class="li_mc">老板消毒柜ZTD100C-811</p>
                <p class="li_jg">市场价：3880元/套</p>
                <p class="li_tj"><span>特价</span>￥3580</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_18.jpg" /></p>
                <p class="li_mc">老板iCook系列吸油烟机<br />烟机5600+灶具9B32</p>
                <p class="li_jg">市场价：6680元/套</p>
                <p class="li_tj"><span>特价</span>￥5580</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_19.jpg" /></p>
                <p class="li_mc">老板T型系列抽油烟机<br />烟机8005+灶具7G10</p>
                <p class="li_jg">市场价：3580元/套</p>
                <p class="li_tj"><span>特价</span>￥3180</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_20.jpg" /></p>
                <p class="li_mc" >老板智能电烤箱KWS220-R015</p>
                <p class="li_jg">市场价：4880元/套</p>
                <p class="li_tj"><span>特价</span>￥4380</p>
            </li>
            
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_21.jpg" /></p>
                <p class="li_mc" style="width:100%;">纯手工打造不锈钢水槽加龙头套餐<span>8046S+B052</span></p>
                <p class="li_jg">市场价：1588元/套</p>
                <p class="li_tj"><span>特价</span>￥1499</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_22.jpg" /></p>
                <p class="li_mc">304不锈钢圆座五金件四件套</p>
                <p class="li_jg">市场价：518元/套</p>
                <p class="li_tj"><span>特价</span>￥499</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_23.jpg" /></p>
                <p class="li_mc">老板T美式纯纸：比佛利山庄系列</p>
                <p class="li_jg">市场价：360元/卷</p>
                <p class="li_tj"><span>特价</span>￥280</p>
            </li>
            <li>
            	<p class="li_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p2_img_24.jpg" /></p>
                <p class="li_mc" >304冲压不锈钢水槽加龙头套餐<span>6045L+B035</span></p>
                <p class="li_jg">市场价：680元/套</p>
                <p class="li_tj"><span>特价</span>￥568</p>
            </li>
        </ul>
    </div>
    <div class="xwl_nrk xwl_nr_p2">
    	<h1 class="xwl_nr_bt">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_bt.jpg" />
            <a class="xwl_nr_bt_bm">免费报名</a>
        </h1>
        <div class="xwl_nr_p3">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_img_01.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_img_02.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_img_03.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_img_04.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p3_img_05.jpg" />
        </div>
    </div>
    <div class="xwl_nrk xwl_nr_p2">
    	<h1 class="xwl_nr_bt">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p4_bt.jpg" />
            <a class="xwl_nr_bt_bm">免费报名</a>
        </h1>
        <div class="xwl_nr_p4">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p4_img_01.jpg">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p4_img_02.jpg">
        </div>
    </div>
    <div class="xwl_nrk xwl_nr_p2">
    	<h1 class="xwl_nr_bt">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_bt.jpg" />
        </h1>
        <div class="xwl_nr_p5">
        	<li>
            	<p class="xwl_nr_p5_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_01.jpg" /></p>
                <p class="xwl_nr_p5_text"><b>张佑华</b>经验16年</p>
                <p class="xwl_nr_p5_text">擅长：中高端公寓 别墅 星级酒店 会所</p>
                <p class="xwl_nr_p5_rw"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_xt_01.png" /></p>
            </li>
            <li>
            	<p class="xwl_nr_p5_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_02.jpg" /></p>
                <p class="xwl_nr_p5_text"><b>蒋伟</b>经验12年</p>
                <p class="xwl_nr_p5_text">擅长：现代简约  古典  中式等风格</p>
                <p class="xwl_nr_p5_rw"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_xt_02.png" /></p>
            </li>
            <li>
            	<p class="xwl_nr_p5_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_03.jpg" /></p>
                <p class="xwl_nr_p5_text"><b>佘银辉</b>经验6年</p>
                <p class="xwl_nr_p5_text">擅长： 医院  office   别墅  酒店  会所</p>
                <p class="xwl_nr_p5_rw"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_xt_03.png" /></p>
            </li>
            <li>
            	<p class="xwl_nr_p5_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_04.jpg" /></p>
                <p class="xwl_nr_p5_text"><b>赵岩</b>经验4年</p>
                <p class="xwl_nr_p5_text">擅长：新中式   现代简约   地中海</p>
                <p class="xwl_nr_p5_rw"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_xt_04.png" /></p>
            </li>
            <li>
            	<p class="xwl_nr_p5_img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_05.jpg" /></p>
                <p class="xwl_nr_p5_text"><b>黄莹莹</b>经验3年</p>
                <p class="xwl_nr_p5_text">擅长：现代简约  简美  中式  欧式  田园</p>
                <p class="xwl_nr_p5_rw"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p5_img_xt_05.png" /></p>
            </li>
        </div>
    </div>
    <div class="xwl_nrk xwl_nr_p2">
    	<h1 class="xwl_nr_bt">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_bt.jpg" />
            <a class="xwl_nr_bt_bm">免费报名</a>
        </h1>
        <div class="xwl_nr_p6">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_01.jpg" />
            <ul class="xwl_nr_p6ul">
            	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_02.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_03.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_04.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_05.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_06.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_07.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_08.jpg" /></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p6_img_09.jpg" /></li>
            </ul>
        </div>
        <div class="xwl_nr_p7"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_bt.jpg" /></div>
        <div style="overflow:hidden; background:#fff;padding-top:30px;">
        	<div class="xwl_nr_p7_fl">
            	<h2 class="xwl_nr_p7_flh2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_bt_fl.jpg" /></h2>
                <ul class="xwl_nr_p7_flul">
                	<li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_01.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_02.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_03.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_04.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_05.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_06.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_07.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_08.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_09.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_10.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_11.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_12.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_13.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_14.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_15.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_16.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_17.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_18.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_19.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_20.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_21.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_22.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_23.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fl_img_24.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                </ul>
            </div>
            <div class="xwl_nr_p7_fl xwl_nr_p7_fr">
            	<h2 class="xwl_nr_p7_flh2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_bt_fr.jpg" /></h2>
                <ul class="xwl_nr_p7_flul">
                	<li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_01.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_02.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_03.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_04.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_05.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_06.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_07.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_08.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_09.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_10.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_11.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                    <li>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p7_fr_img_12.jpg" /></td>
                          </tr>
                        </table>
                    </li>
                </ul>
            </div>            
        </div>
        <div class="xwl_nr_p7"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/ywl_p8_bt.jpg" /></div>
        <div class="ar_baod">
            <ul>
            	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/picv2_index_bd05.jpg"  class="lazy"></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_souhu.png" class="lazy"></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_toutiao.png"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_yangziwanbao.jpg"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_jinghua.jpg"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_zhonghualianhe.jpg"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_fenghuang.png"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_yidianzixun.jpg"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_shaidi.jpg"  class="lazy" ></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/kh_it1680.png"  class="lazy" ></li>
            </ul>
        </div>
        <div class="xwl_nr_p8">
    		<p class="xwl_nr_p8_text">地址：北京市 丰台区 宋家庄 万科红底商 美宅客体验馆（地铁宋家庄C出口即到）</p>
            <div class="xwl_nr_p8_fr">
            	<div class="mob_left">
                    <input name="" type="text" id="user_phone2" class="xwl_nr_p8_fr_input" placeholder="请输入您的手机号">
                    <!--/填写正确的手机号--><div id="shursubm2"></div>
                    <!--/手机号不能为空--> <div id="shursubk2"></div>
                </div>
                <button class="xwl_nr_p8_fr_an">发送地址到手机</button>
            </div>
    	</div>
    </div>
    
</div>
<!--middle-->

<!--footer-->
<div class="footer">
  <div class="middle">
    <p class="footer1" style=" display: none"><a href="http://www.imeizhaike.com/about.html">美宅客简介</a> | <a href="http://www.imeizhaike.com/experience.html">体验馆</a> | <a href="http://www.imeizhaike.com/news_list.html"> 媒体报道 </a> | <a href="http://www.imeizhaike.com/cooperation.html">合作伙伴</a> | <a href="http://www.imeizhaike.com/join_us.html">加入我们</a></p>
    <p class="dh_pla"><i>电话：400-8118-088</i> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3242305177&site=qq&menu=yes"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/pic_lianxi_03.jpg" width="89" height="23"></a></p>
    <p>地址：北京市 丰台区 宋家庄 万科红底商 美宅客体验馆（地铁宋家庄C出口即到）（邮编100079） </p>
    <p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/aliyun.png" width="60">提供计算与安全服务&nbsp;&nbsp;&nbsp;&nbsp; <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/bei.png" ><a href="http://www.miitbeian.gov.cn/" target="_blank">ICP备16008343号-1</a> </p>
  </div>
</div>
<div class="mindex_tj mt15">
  <div class="m_foot"><span>全国统一服务热线：400-8118-088</span><br>
    地址：北京市 丰台区 宋家庄 万科红底商 美宅客体验馆（地铁宋家庄C出口即到）<br>
    ICP备16008343号-1</div>
</div>
<!--footer-->

<!--弹窗 -->
<div id="baoming" class="indexggg indexsy">
    <!--报名-->
    <div class="index_xgg baoming">
        <i class="closs">X</i>
        <div class="indexqg_fr">
            <form action="message.php" method="post" name="formMsg" onSubmit="$('.dbtc').hide();return yuyue_1(this);" style="width:60%;">
            <strong>十秒预约，免费获取专属设计师服务</strong>
            <p class="indexqg_frtext">网上报名，可享全场优惠</p>
            <div class="indexqg_frxm">
                <input name="user_name" type="text" id="user_name1" placeholder="您的姓名" required>
                <div id="shursub1"></div>                
            </div>
            <div class="indexqg_frxm">
                <input name="user_tel" type="text" id="user_phone1" placeholder="您的手机号码" required>
                <!--/填写正确的手机号--><div id="shursubm1"></div>
                <!--/手机号不能为空--> <div id="shursubk1"></div>
            </div>
            <a href="javascript:void(0)" class="indexqg_fran">免费报名</a>
            </form>
        </div>
    </div>
   
</div>
<!--报名成功-->
<div id="success" class="indexggg indexsy">
    <div class="index_xgg">
        <i class="closs">X</i>
        <p class="xwl_bmcg">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/yycg.jpg" />
            <strong><span>恭喜您，报名成功!</span>我们将尽快和您联系，请保持手机畅通！<span><a>确定</a></span></strong>
        </p>
    </div>
</div>
<!--报名成功-->
<!--报名失败-->
<div id="false" class="indexggg indexsy" style="display:none;">
    <div class="index_xgg" >
        <i class="closs">X</i>
        <p class="xwl_bmcg">
        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/images/yysb.jpg" />
            <strong><span>很抱歉，报名失败！</span>咨询热线：400-8118-088<span><a>重新报名</a></span></strong>
        </p>
    </div>
</div>
<!--报名失败-->
<!--弹窗 -->
<script>
  $(".xwl_nr_p1ul li,.xwl_nr_bt_bm,.xwl_nr_p1,.xwl_nr_p3 img,.xwl_nr_p4 img,.xwl_nr_p5 li,.xwl_nr_p6 img,.xwl_nr_p7_flul,.ar_baod").click(function(){
    $("#baoming").show();
  });
  $(".closs,.xwl_bmcg strong span a").click(function(){
    $("#baoming").hide();
     $(".indexggg").hide();
  });

/*    $(".closs,.xwl_bmcg strong span a").click(function(){
    $(".indexggg").hide();
  });*/
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/pc/js/check.js"></script>
<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
</body>
</html>
