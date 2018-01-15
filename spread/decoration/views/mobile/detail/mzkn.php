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
<title>美宅客装饰_美宅质量行万里_3大优惠、1省到底，5项特权</title>
<meta name="keywords" content="美宅客装饰_美宅质量行万里_3大优惠、1省到底，5项特权" />
<meta name="description" content="美宅客装饰_环保品质互联网家装，互联网个性家装领导品牌。315诚信卖，任意买。优惠不玩虚的，大牌主材、德系工艺、极致环保。" />

<link rel="canonical" href="{http://www.imeizhaike.com/}">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/css/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/css/drawer.min.css">

<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/js/jquery.min.js"></script>

<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/js/iscroll.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/js/jquery.drawer.min.js"></script>
<script language="javascript" type="text/javascript">
  function xhli(m){
	for(i=1;i<=5;i++){			//i是选项叶的个数
		if(i==m){
			document.getElementById("topli"+m).className="mindex_tjtopd";	//点击选项卡函数xh()的m有值,让对应的xxk top的class为cli
			document.getElementById("bottomli"+m).style.display="block";//让的对应的详细叶显示就是bottom连接m的style样式为块
		}else{
				document.getElementById("topli"+i).className="";//点击选项卡函数xh()的m有值,让对应的xxk top的class为空
				document.getElementById("bottomli"+i).style.display="none";//让的对应的详细叶显示就是bottom连接m的style样式为空
			}
	}
	}
</script>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@web') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>

<body class="wrap">
<!--header-->
<div class="middle m_header">
	<p class="mlogo fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/thmob_logo.png" /></p>
    <div class="drawer drawer-right">
        <div class="drawer-toggle drawer-hamberger"><span></span></div>
        <div class="drawer-main drawer-default">
            <nav class="drawer-nav" role="navigation">
                <ul class="drawer-nav-list">
                    <li><a href="index_m.html">首 页</a></li>
                    <li><a href="outfits618_m.html">整装套餐</a></li>
                    <!-- <li><a href="material_m.html">主材套餐</a></li> -->
                    <li><a href="newhouse338_m.html">施工套餐</a></li>
                    <li><a href="design_master_m.html">大咖设计</a></li>
                    <li><a href="http://www.imeizhaike.com/experience.html">体验馆</a></li>
                    <li><a href="http://www.imeizhaike.com/article_cat.php?id=9">居家指南</a></li>
                    <li><a href="http://www.imeizhaike.com/cooperation.html">合作伙伴</a></li>
                    <li><a href="http://www.imeizhaike.com/about.html">美宅客简介</a></li>
                    <li><a href="http://www.imeizhaike.com/news_list.html">媒体报道</a></li>
                    <li><a href="http://www.imeizhaike.com/join_us.html">加入我们</a></li>
                </ul>
            </nav>
        </div>
        
    </div>
</div>
<!--header-->

<div class="tjmob">
	<p class="tjmob_ban"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tuig_bann.png" /></p>
	<p class="tjmon_xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tuig_gun2.png" /></p>
	<div class="boxcen">
		<p class="tjmob_title"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_title1.png" /></p>
        
        
		<!--<dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob1.png" /></dt>
				<dd class="tjmob_dd">吉林森工露水河E0级双饰面橱柜</dd>
				<dd class="tjmob_hui">含吊柜 地柜 台面 基础五金</dd>
				<dd class="tjmob_shi">市场价：1680元/延米</dd>
				
				<p class="tjmob_pos">
				    <span class="tjmob_tj">特价</span>￥1499		
				</p>
			</a>
		</dl>
		
		<dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob2.png" /></dt>
				<dd class="tjmob_dd">赛唯雅 智能水疗/暖风烘干坐便器</dd>
				<dd class="tjmob_hui">740x420x590mm </dd>
				<dd class="tjmob_shi">市场价：5999元</dd>
				
				<p class="tjmob_pos">
				    <span class="tjmob_tj">特价</span>￥4800		
				</p>
			</a>
		</dl>
		
		<dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob3.png" /></dt>
				<dd class="tjmob_dd">赛唯雅 智能三重立体除臭坐便器</dd>
				<dd class="tjmob_hui">685*375*780mm</dd>
				<dd class="tjmob_shi">市场价：1680元</dd>
				
				<p class="tjmob_pos">
				    <span class="tjmob_tj">特价</span>￥1299		
				</p>
			</a>
		</dl>
		
		<dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob4.png" /></dt>
				<dd class="tjmob_dd">潜水艇不锈钢防臭地漏</dd>
				<dd class="tjmob_shi">市场价:55元/个</dd>
				
				<p class="tjmob_pos" >
				    <span class="tjmob_tj" style="padding-top:7px">特价</span>￥1<br/>每天限10个		
				</p>
			</a>
		</dl>
        
        <dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob5.png" /></dt>
				<dd class="tjmob_dd">忠旺 60系列6道密封断桥铝门窗</dd>
				<dd class="tjmob_shi">市场价：680元/平米</dd>
				
				<p class="tjmob_pos">
				    <span class="tjmob_tj">特价</span>￥548		
				</p>
			</a>
		</dl>
        <dl class="tkmob_one">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob6.png" /></dt>
				<dd class="tjmob_dd">1.2MM镁铝合金厨卫平开门</dd>
				<dd class="tjmob_hui">1.6平米内，单包口</dd>
				<dd class="tjmob_shi">市场价：1280元/樘</dd>
				
				<p class="tjmob_pos">
				    <span class="tjmob_tj">特价</span>￥999		
				</p>
			</a>
		</dl>-->
        <p class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_pr.png" /></p>
	</div><!--/boxcen-->	
    
    <div class="boxcenone">
    	<p class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_pr1.png" /></p>
        <p class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_pr2.png" /></p>
        <p class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_pr3.png" /></p>
        <p class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_pr4.png" /></p>   
    
        <p style="clear:both"></p>
        <p class="tj_ianqi">精简显示特价商品</p>
    </div><!--/boxcenone-->    
	<p class="tj_ian">显示全部特价商品</p>
    
    <script>
	$(function(){
		$(".tj_ian").click(function(){
			$(this).hide();
			$(this).parent().find(".boxcenone").slideDown(500);
			})
			
		$(".tj_ianqi").click(function(){
			$(this).parents(".boxcenone").slideUp(500);
			$(".tj_ian").show();
			})
		})
	
	</script>
    
    
    
	<div class="boxcen">
		<p class="tjmob_title"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_title2.png" /></p>
		<p class="tjmon_xint"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_uang1.png" /></p>
		<p class="tjmob_title"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_title3.png" /></p>
		<div class="tjmob_yi">
			<span class="tjmob_lef"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob.png" /></span>
		</div>
		<p class="tjmob_titley"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_title4.png" /></p>
	</div>
	
	<div class="center_mob">
		<dl class="cente_dl">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_chan.png" /></dt>
				<dd class="bild"><span class="tjmob_bold">张佑华</span> 经验16年</dd>
				<dd>擅长：中高端公寓 别墅 星级酒店 会所 </dd>
				<p class="tjmon_sma"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_qu1.png" /></p>
			</a>		
		</dl><!--/cente_dl-->
		<dl class="cente_dl">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_chan2.png" /></dt>
				<dd class="bild"><span class="tjmob_bold">蒋伟</span> 经验12年</dd>
				<dd>擅长：现代简约  古典  中式等风格</dd>
				<p class="tjmon_sma"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_qu2.png" /></p>
			</a>		
		</dl><!--/cente_dl-->
		<dl class="cente_dl">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_chan3.png" /></dt>
				<dd class="bild"><span class="tjmob_bold">佘银辉</span> 经验6年</dd>
				<dd>擅长： 医院  office   别墅  酒店  会所</dd>
				<p class="tjmon_sma"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_qu.png" /></p>
			</a>		
		</dl><!--/cente_dl-->
		<dl class="cente_dl">
			<a href="javascript:void(0)">
				<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_chan4.png" /></dt>
				<dd class="bild"><span class="tjmob_bold">赵岩</span> 经验4年</dd>
				<dd>擅长：新中式   现代简约   地中海</dd>
				<p class="tjmon_sma"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_qu4.png" /></p>
			</a>		
		</dl><!--/cente_dl-->	
		
	</div><!--/center_mob-->
	<div class="tjmob_blue">
		<p class="tjmob_title"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tui_title5.png" /></p>
	</div><!--/tjmob_blue-->
	
	<div class="tjmob_hex">		
		<p class="tjmon_xinr"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmob_tu.png" /></p>
		<p class="tjmob_hez">
			<span class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_hezw.png"  /></span>			
		</p>
        
        <p class="tjmob_hetwo">
			 <span class="tymon_pro"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tgmob_hez.png"  /></span> 
           	
            <span class="tj_iantgqi">精简显示品牌</span>	
		</p>
        
        <p class="tj_iantg">显示全部品牌</p>
        
        <script>
		$(function(){
			$(".tj_iantg").click(function(){
				$(this).hide();
				$(this).parents().find(".tjmob_hetwo").slideDown(500);
				})
			$(".tj_iantgqi").click(function(){
				$(this).parent(".tjmob_hetwo").slideUp(500);
				$(this).parents().find(".tj_iantg").show();
				
				})
			})
		</script>        
		<div class="mindex_tj mt15">
	<h1 class="mindex_h1e"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tjmon_hez.png" class="tjnom" /></h1>
    <ul class="mindex_mt">
    	<li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz1.jpg"></a></td>
              </tr>
            </table>
        </li>
    	<li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz2.png"></a></td>
              </tr>
            </table>
        </li>
        
        <li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz3.png"></a></td>
              </tr>
            </table>
        </li>
        <li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz4.jpg"></a></td>
              </tr>
            </table>
        </li>
        <li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz5.jpg"></a></td>
              </tr>
            </table>
        </li>
        <li>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><a href="javascript:void(0)"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/m_index_hz6.png"></a></td>
              </tr>
            </table>
        </li>
    </ul>
</div>
	</div><!--/tjmob_hex-->	
</div><!--/tjmob-->

<div class="tj_form">
	<div id="tj">
    	<div class="mon_img">
			<input type="text" class="tj_name" id="user_phone" placeholder="请输入您的手机号" />
            <!--/填写正确的手机号--><div id="shursubm"></div>
            <!--/手机号不能为空--> <div id="shursubk"></div>
        </div>
		<button class="btn1">免费报名</button>
          
	</div>
 	<p class="tjmob_dian">点击拨打咨询热线: <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/images/tj_photo.png" /> <a href="tel:400-8118-088">400-8118-088</a></p>	
</div><!--/tj_form-->


<script type="text/javascript">
$(document).ready(function($){

		$('#shursubm').hide();
		$('#shursubk').hide();
	$(".hint-in3").click(function(event) {
		$(".hint").css({"display":"none"});
		$(".tjmob_box").css({"display":"none"});
	});
	
	$(".hint4").click(function(event) {
		$(".hintl").css({"display":"none"});
		$(".tjmob_box2").css({"display":"none"});
	});

	
	$(".hint3").click(function(event) {
		$(this).parent().parent().css({"display":"none"});
		$(".tjmob_box").css({"display":"none"});
	});
	
	$(".hintl-in3").click(function(event) {
		$(".hintl").css({"display":"none"});
		$(".tjmob_box2").css({"display":"none"});
	});
	
	$(".hintl-in4").click(function() {
		$(".hintl").css({"display":"none"});
		$(".tjmob_box").css({"display":"none"});
	});
	
});
</script>


<!--footer-->
<div class="mindex_tj mt15">
	<div class="m_foot"><span>全国统一服务热线：400-8118-088</span><br>地址：北京市丰台区宋庄路26号院11号楼110<br>ICP备16008343号-1</div>
</div>
<!--footer-->

<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/js/idangerous.swiper.min.js"></script><!--banner -->
<script src="https://s95.cnzz.com/z_stat.php?id=1259551981&web_id=1259551981" language="JavaScript"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?84f4e4b80e419488a929b5adf02dad75";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzknew/m/js/check_m.js"></script>

 <!--报名成功弹出层-->
	<div class="tjmob_box">  </div>
	<div class="hint">
		<div class="hint-in1">
			<div class="hint1"></div>
			<div class="hint3"></div>	
		</div>
		<div class="hint2">恭喜您，报名成功！</div>
		<div class="hint-in2">我们将尽快和您联系，请保持手机畅通！</div>
		<div class="hint-in3">确定</div>
	</div> 


 <!--报名失败弹出层-->
	<div class="tjmob_box2"> </div><!--/tjmob_box-->
	<div class="hintl">
		<div class="hintl-in1">
			<div class="hintl1"></div>
			<div class="hint4"></div>  
		</div>
		<div class="hintl2">很抱歉，报名失败！</div>
		<!-- <div class="hintl-in2">咨询热线：400-8118-008</div> -->
		<div class="hintl-in3">重新报名</div>
	</div>      

<input type="hidden" id="cid" value="<?= $cid; ?>" />
<input type="hidden" id="info_id" value="1" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>

</body>
</html>
