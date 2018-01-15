<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'mzk/pc/css/style', 'mzk/pc/css/css',
];
$this->params['jsFiles'] = [
    'mzk/pc/js/jquery.min'
];
$this->params['formPosition'] = 'hd-mzkhd';
$this->params['formPositionName'] = '活动-美宅客PC';
Yii::$app->params['siteHotline'] = '400-8118-088';
Yii::$app->params['tdkInfos']['title'] = '美宅客_互联网家装平台';
Yii::$app->params['tdkInfos']['keyword'] = '家装 装修 互联网家装 装修套餐 主材套餐美宅客 imeizhaike 建材选购';
Yii::$app->params['tdkInfos']['description'] = '美宅客是一家C2M+O2O的互联网家装平台；提供瓷砖、地板、抽油烟机、马桶、淋浴房、水槽等建材购买，提供自有工人的精品施工服务，提供1对1的房屋设计服务；同品质优惠40%以上；我们不用品牌掩盖品质，我们只提供一线工厂品质产品；';
$this->params['cidDefault'] = '667';
?>
<div class="head">
	<div class="middle">
    	<p class="logo fl"><a href="http://www.imeizhaike.com/" target="_blank"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_logo.jpg" alt="www.imeizhaike.com-美宅客"></a><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_slogen.jpg" alt="www.imeizhaike.com-美宅客"></p>
        <div class="headfr">
            <b>全国统一服务热线</b>
            <strong>400-8118-088</strong>
        </div>
        <!--<a href="#" class="headfr1">在线预约</a>-->
        <div class="wx">
        <i>关注微信</i>
   	    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/ewm.jpg" width="280" height="280" alt="www.imeizhaike.com-美宅客"> </div>
    </div>
    <div class="clear"></div>
</div>
<div class="nav">
	<div class="middle">
    	<ul onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
        	<li class="clinav on_tc">首 页</li>
            <li class="on_tc">整装套餐</li>
            <li class="on_tc">主材套餐</li>
            <li class="on_tc">施工套餐</li>
            <li class="on_tc">大咖设计</li>
            <li class="on_tc">体验馆</li>
            <li class="on_tc">居家指南</li>
            <li class="on_tc">合作伙伴</li>
        </ul>
    </div>
</div>
<!--header-->
<div class="middle" style="width:1180px;">
<!-- top1 start -->
	<div class="tuiguang_top1">
    	 <div class="tg_top1_left">
         	<h3><i class="iconfont">&#xe611;</i>免费量房设计</h3>
            <div class="from_ting1">
            	<p>免费量房、出装修设计方案</p>
                <span>今日已有 <em>1546</em> 业主申请</span>         
                <form id="myForm1" name="formMsg" onsubmit="return false;">
				<!-- required oninvalid="setCustomValidity('请填写您的姓名')" oninput="setCustomValidity('')"-->
			<!--	required oninvalid="setCustomValidity('请填写正确手机号！')" oninput="setCustomValidity('')" -->
                   	 <input name="user_name" type="text" id="user_name1" placeholder="姓名" >
                   	 <input name="user_tel" type="text" maxLength="11" id="user_phone1"  placeholder="手机号码" >
                   	 <input type="submit" id="submit1" value="立即预约" class="ljshengqing" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
					 <div id="shibai1"></div>
                     <div id="shurub1"></div>
                     <div id="shuruxm1"></div>
                </form>   
            </div>
         </div>
         <div class="tg_top1_center"  onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
   	     	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_15558.jpg" width="625" height="239" class="on_tc">
         	<div class="sui_san">
            	<div class="on_tc"><h3>顶级品质  百姓价格</h3>
					<p><span>一线工厂制造，<br/>同品质优惠40%以上</span><b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_ban01.jpg" width="48" height="42"></b></p>                
                </div>  
			  <div class="sui_sancenter on_tc"><h3>自有工人  精品施工</h3>
				  <p><span>自有专业施工团队<br/>省心、放心、有保障</span><b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_ban02.jpg" width="48" height="47"></b></p>                
                </div>  
            	<div class="on_tc"><h3>专案设计  管家服务</h3>
					<p><span>设计师量身定制<br/>全程保驾护航</span><b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_ban03.jpg" width="48" height="47"></b></p>                
                </div>  
            </div>
          </div>
         <div class="tg_top1_right">
         	<ul class="on_tc"  onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
            	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_03.jpg" width="110" height="110"><p><b>婚房装修</b><span>人气设计方案</span><em class="on_tc">立即预约</em></p></li>
                <li class="center_ting2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_06.jpg" width="110" height="110"><p><b>空间大改造</b><span>40平变80平</span><em class="on_tc">立即预约</em></p></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_08.jpg" width="110" height="110"><p><b>二手房变新居</b><span>7天换新服务</span><em class="on_tc">立即预约</em></p></li>
            </ul>
         </div>
         <div style="clear:both;"></div>
    </div>
<!-- top1 end -->

<!-- top2 start -->
  <div class="tuiguang_top2">
    	<div class="tuiguang_title">
        	<h1><span>会员案例</span><i>今日已有 <em>6867</em>用户预约装修</i></h1>
        </div>
      <ul onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
       	  <li class="on_tc"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_11.jpg" width="280" height="210"><span><em>三室两厅</em><em>简约</em><em>总价：9万</em></span></li>
          <li class="on_tc"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_13.jpg" width="280" height="210"><span><em>一室两厅</em><em>日式</em><em>总价：6.8万</em></span></li>
          <li class="on_tc"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_15.jpg" width="280" height="210"><span><em>两室两厅</em><em>简欧</em><em>总价：13.8万</em></span></li>
          <li class="tgno_padding on_tc"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_17.jpg" width="280" height="210"><span><em>三室两厅</em><em>美式</em><em>总价：15万</em></span></li>
      </ul>
    </div>
 
<!-- top2 end -->

<!-- top3 start -->
 <div class="tuiguang_top3">
    	<div class="tuiguang_title">
        	<h1><span>装修方案精选</span><i>已服务 <em>6867</em>位业主</i></h1>
        </div>
        <div class="tab_more">
        	<ul onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
            <li class="on_tc"><a>新房装修</a>|<a>二手房装修</a>|<a>复式装修</a>|<a >别墅装修</a>|<a>商业装修</a><a class="more_tabb">更多></a></li>
            </ul>
        </div>
    <div class="tp3_deta" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
        	<div class="how_tp3 how_tpa">
       	    	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_24.jpg" width="150" height="150" class="on_tc"> 
            	<div class="on_tc"><h3>70-90m²经济型平层整装解决方案</h3>
                	<span>￥<b>58080</b>起</span>
                    <ul>
                    	<li>免费设计</li>
                        <li>免费监理</li>
                        <li>专业施工</li>
                    </ul>
                    <p class="on_tc">立即预约</p>
                    <p class="bod_bg on_tc">了解详情</p>
                </div>
            </div>
            <div class="how_tp3 how_tpb">
       	    	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_27.jpg" width="150" height="150" class="on_tc"> 
            	<div class="on_tc"><h3>120-150m²经济型复式别墅解决方案</h3>
                	<span>￥<b>82360</b>起</span>
                    <ul>
                    	<li>品牌主材</li>
                        <li>用量不限</li>
                        <li>上门安装</li>
                    </ul>
                  <p class="on_tc">立即预约</p>
                  <p class="bod_bg on_tc">了解详情</p>
                </div>
            </div>
      <div class="how_tp3 how_tpc">
       	    	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_31.jpg" width="150" height="150" class="on_tc"> 
            	<div class="on_tc"><h3>40-50m²标准平层套餐解决方案</h3>
                	<span>￥<b>30920</b>起</span>
                    <ul>
                    	<li>免费设计</li>
                        <li>免费量房</li>
                        <li>专业施工</li>
                    </ul>
                  <p class="on_tc">立即预约</p>
                  <p class="bod_bg on_tc">了解详情</p>
                </div>
            </div>
      <div class="how_tp3 how_tpd">
       	    	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_33.jpg" width="150" height="150" class="on_tc"> 
            	<div class="on_tc"><h3>100-120m²经济型平层组合包解决方案</h3>
                	<span>￥<b>78700</b>起</span>
                    <ul>
                    	<li>免费设计</li>
                        <li>品牌主材</li>
                        <li>用量不限</li>
                    </ul>
                  <p class="on_tc">立即预约</p>
                  <p class="bod_bg on_tc">了解详情</p>
                </div>
            </div>
        </div>	
        <div class="yuding_t">
        	<div class="yuding_left">
            	<span>今日已有 <em>6867</em>位业主<br/>预定精选套餐方案</span>
            </div>
            <div class="yuding_gundong">
                <div id="gundong">
                    <div id="gundong1">
                      <ul>
<li><p><em>· 杜先生</em> <em>86㎡ </em><em> 158****3654 </em><em>10分钟前  </em></p> <span><em>· 张先生 </em> <em>  76㎡</em><em> 138****3562 </em><em> 15分钟前</em></span></li>
<li><p><em>· 李先生</em> <em>118㎡ </em><em> 152****5469 </em><em>42分钟前  </em></p> <span><em>· 吴先生 </em> <em>   69㎡ </em><em> 139****2146 </em><em>  1小时前</em></span></li>
<li><p><em>· 蒋女士</em> <em>72㎡ </em><em> 186****2348 </em><em>1小时前  </em></p> <span><em>· 郑女士 </em> <em>  58㎡</em><em> 158****6341 </em><em> 1小时前</em></span></li>
<li><p><em>· 蒋先生</em> <em> 72㎡ </em><em> 138****8283 </em><em>1小时前 </em></p> <span><em>· 曾女士 </em> <em>  78㎡</em><em>   138****8283 </em><em> 2小时前 </em></span></li>
<li><p><em>· 卢先生</em> <em>84㎡ </em><em>   133****2112</em><em>  2小时前  </em></p> <span><em>· 毛先生 </em> <em>  61㎡</em><em> 189****3579  </em><em>   3小时前</em></span></li>
                      </ul>
                        
                    </div>
                    <div id="gundong2"></div>
                </div>
                <p class="yuding_tj on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">我也要预定</p>
            </div>
            
        </div>
  </div>
 
<!-- top3 end -->

<!-- top4 start -->
 <div class="tuiguang_top4">
    	<div class="tuiguang_title">
        	<h1><span>装修效果图</span><i>已为<em>681267</em>位业主找到灵感</i></h1>
        </div>
        <div class="tab_more">
        	<ul>
            <li class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')"><a href="#">新房装修</a>|<a href="#">二手房装修</a>|<a href="#">复式装修</a>|<a href="#">别墅装修</a>|<a href="#">商业装修</a><a href="#" class="more_tabb">更多></a></li>
            </ul>
        </div>
    <div class="tp4_deta" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
        	<div class="deta_tp4 wh_min">
       	    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_06.png" width="74" height="77" class="on_tc"> 
            <div>
            	<span class="on_tc">空间</span>
                <p class="on_tc"><em>客厅</em>  <em>卧室</em>   <em>卫生间</em>   <em>厨房</em>  <em>电视墙</em>   <em>榻榻米</em></p>
            </div>
        </div>
            
            <div class="deta_tp4">
       	    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_08.png" width="74" height="77" class="on_tc"> 
            <div>
              <span class="on_tc">户型</span>
              <p class="on_tc"> <em>一居室</em>   <em>二居室</em>  <em>三居室</em>   <em>复式</em><em>别墅</em><em>小户型</em></p>
            </div>
      </div>
            
            <div class="deta_tp4 wh_minz">
       	    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_03.png" width="74" height="77" class="on_tc"> 
            <div>
            	<span class="on_tc">风格</span>
                <p class="on_tc"><em>简约</em>  <em>美式</em>   <em>北欧</em>   <em>中式</em>  <em>欧式</em>   <em>田园</em></p>
            </div>
            </div>
        </div>
        <div class="deta_tp4bt on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
        	<div class="detatp_left">
       	      <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_38.jpg" width="460" height="328"> 
              <span><em>儿童房设计</em><i>306案例</i></span>
            </div>
          <div class="detatp_center">
            	<div class="nvlili">
                	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_40.jpg" width="449" height="164"> 
            		<span><em>147平米英伦风格装修</em><i>135案例</i></span>
              </div>
                <div>
                	<ul>
                    	<li class="mar_left">
                        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_44.jpg" width="220" height="154"> 
            				<span><em>58平米一居简约设计  </em><i>83案例</i></span>
                        </li>
                        <li>
                        	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_46.jpg" width="220" height="154"> 
            				<span><em>小空间改造</em><i>178案例</i></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="detatp_right">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_42.jpg" width="250" height="328"> 
                    <span><em>文艺青年家居设计</em><i>254案例</i></span>         
          </div>
        </div>
 </div>
<!-- top4 end -->

<!-- top5 start -->
 <div class="tuiguang_top5">
    	<div class="tuiguang_title">
        	<h1><span>装修套餐</span><i>同品质<em>优惠40%以上</em> 给您不一样的体验</i></h1>
        </div>
        <div class="indextc">
        <ul class="on_tc">
        	<li class="btr_la" onclick="addFunctionVal('http://www.imeizhaike.com/whole618.html')"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_taoc01.jpg" alt="www.imeizhaike.com-美宅客" class="lazy">
            <div><p><span>美宅客整装包套餐<em>个性化搭配，一站到位；包设计、包主材、包辅料、包施工、包售后</em></span></p>
              <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_index_jg_03.jpg" width="160" height="60"> <b>查看详情</b>
			</div>
            </li>
            <li class="indextcr" onclick="addFunctionVal('http://www.imeizhaike.com/package299.html')"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_taoc02.jpg" alt="www.imeizhaike.com-美宅客" class="lazy">
            <div><p><span>美宅客主材包套餐<em>一线工厂特供，不用品牌掩盖品质，全环保基材</em></span></p>
              <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_index_jg_05.jpg" width="160" height="60"> <b>查看详情</b>
			</div>
            </li>
            <li class="btr_lb" onclick="addFunctionVal('http://www.imeizhaike.com/newhouse338.html')"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/picv2_index_taoc03.jpg" alt="www.imeizhaike.com-美宅客" class="lazy">
            <div><p><span>美宅客施工包套餐<em>100%产业工人 ；包工人，包辅料；一口价，0增项</em></span></p>
              <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_index_jg_07.jpg" width="160" height="60"> <b>查看详情</b>
			</div>
            </li>
        </ul>
        </div>
</div>
<!-- top5 end -->

<!-- top6 start -->
 <div class="tuiguang_top6"  onclick="addFunctionVal('http://www.imeizhaike.com/design_master.html')">
    	<div class="tuiguang_title">
        	<h1><span>人气设计师</span><i>美宅客<em>优秀设计师</em> </i></h1>
        </div>
        <div class="tab_more">
        	<ul>
            <a class="more_tabb on_tc">更多设计师></a></li>
            </ul>
        </div>
        <div class="sjis_td">
        	<ul>
            	<Li class="on_tc">
                	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_51.jpg" width="220" height="160"></b>
                    <div>
                    	<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_a1.png" width="67" height="67"></p>
                        <span>张佑华<i>经验16年</i></span>
                        <em>擅长：中高端公寓 别墅 星级酒店 会所 </em>
                    </div>
                </Li>
                <Li class="on_tc">
                	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_53.jpg" width="220" height="160"></b>
                    <div>
                    	<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_a6.png" width="67" height="67"></p>
                        <span>蒋伟<i>经验12年</i></span>
                        <em>擅长：现代简约  古典  中式等风格 </em>
                  </div>
              </Li>
                <Li class="on_tc">
                	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_55.jpg" width="220" height="160"></b>
                    <div>
                    	<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_a3.png" width="67" height="67"></p>
                        <span>佘银辉<i>经验6年</i></span>
                        <em>擅长： 医院  office   别墅  酒店  会所</em>
                    </div>
                </Li>
                <Li class="on_tc">
                	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_57.jpg" width="220" height="160"></b>
                    <div>
                    	<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_a4.png" width="67" height="67"></p>
                        <span>赵岩<i>经验4年</i></span>
                        <em>擅长：新中式   现代简约   地中海</em>
                    </div>
                </Li>
                <Li class="no_padding on_tc">
                	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_59.jpg" width="220" height="160"></b>
                    <div>
                    	<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_a5.png" width="67" height="67"></p>
                        <span>黄莹莹<i>经验3年</i></span>
                        <em>擅长：现代简约  简美  中式  欧式  田园</em>
                  </div>
              </Li>
            </ul>
        </div>
</div>
<!-- top6 end -->

<!-- top7 start -->
 <div class="tuiguang_top7">
    	<div class="tuiguang_title">
        	<h1><span>真实工地直播</span><i>上网就能看到装修中的家</i></h1>
        </div>
        <div class="tab_more">
        	<ul onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
            <a class="more_tabb on_tc">更多></a></li>
            </ul>
        </div>
    <div class="tp7_deta">
        	<div class="detatp7_left">
            	<ul class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
                	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_66.jpg" width="276" height="210"><span><em>柳先生</em><em>复式</em><em>120平</em><em>98000元</em></span></li>
                    <li class="deta_illino"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_68.jpg" width="274" height="210"><span><em>王先生</em><em>两居</em><em>86平</em><em>70600元</em></span></li>
                    <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_70.jpg" width="274" height="210"><span><em>刘先生</em><em>三居</em><em>118平</em><em>108000元</em></span></li>
                    <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_86.jpg" width="274" height="210"><span><em>刘女士</em><em>两居</em><em>71平</em><em>60000元</em></span></li>
                    <li class="deta_illino"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_88.jpg" width="276" height="210"><span><em>郭先生</em><em>工装</em><em>260平</em><em>300000元</em></span></li>
                    <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_90.jpg" width="276" height="210"><span><em>南先生</em><em>一居</em><em>56平</em><em>32800元</em></span></li>
                </ul>
            </div>
            <div class="detatp7_right">
           	  <h3><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/top_033.jpg" width="35" height="32">业主说</h3>
                <ul class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
                	<LI>
                    	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_76.jpg" width="40" height="40"></b>
                        <div class="left_ddc">
                        	<p><span>刘小姐</span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_73.jpg" width="16" height="16"></em></p>
                            <em>对设计师的印象非常好，专业沟通能力非常强，希望..</em>
                        </div>
                  </LI>
                  <LI>
                    	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_80.jpg" width="40" height="40"></b>
                        <div class="left_ddc">
                        	<p><span>郭先生 </span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_73.jpg" width="16" height="16"></em></p>
                            <em>与公司沟通后，态度明显转变。需要完成的细节部分……</em>
                        </div>
                  </LI>
                  <LI>
                    	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_92.jpg" width="40" height="40"></b>
                        <div class="left_ddc">
                        	<p><span>张先生</span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_73.jpg" width="16" height="16"></em></p>
                            <em> 对泥工师傅很满意，有问题主动和业主沟通。多个细节..</em>
                        </div>
                  </LI>
                  <LI style="border-bottom:0px;">
                    	<b><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_94.jpg" width="40" height="40"></b>
                        <div class="left_ddc">
                        	<p><span>王先生</span><em><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_73.jpg" width="16" height="16"></em></p>
                            <em>管线开槽合理，横平竖直，走线很好，基本都是最短路..</em>
                        </div>
                  </LI>
                    
                </ul>
            </div>
        </div>
</div>
<!-- top7 end -->
<!-- top8 start -->
 <div class="tuiguang_top8">
    	<div class="tuiguang_title">
        	<h1><span>小区工地案例</span><i> <em>45892</em>位业主查看了小区真实案例</i></h1>
        </div>
        <div class="tab_more">
        	<ul onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
            <a class="more_tabb on_tc">更多></a></li>
            </ul>
        </div>
        <div class="tp8_deta">
        	<ul class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
              <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_99.jpg" width="275" height="210"><span><em>政馨园</em><i>预算：6.3万元</i></span></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_101.jpg" width="275" height="210"><span><em>红狮家园</em><i>预算：9.2万元</i></span></li>
              <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_103.jpg" width="275" height="210"><span><em>当代moma</em><i>预算：10.3万元</i></span></li>
              <li class="no_mare"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_105.jpg" width="275" height="210"><span><em>保利春天</em><i>预算：5.9万元</i></span></li>
                    
          </ul>
        </div>
</div>
<!-- top8 end -->
<!-- top9 start -->
 <div class="tuiguang_top9">
 	<div class="tp9_left">
    	<div class="tuiguang_title">
        	<h1><span>施工工艺</span></h1>
        </div>
        <ul class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
        	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_111.jpg" width="210" height="219"><span>阳角金属 . 护角工艺</span></li>
            <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_113.jpg" width="210" height="219"><span>双层石膏 . 抗开裂墙</span></li>
            <li class="no_mare"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_115.jpg" width="210" height="219"><span>卫生间管道 . 防噪音</span></li>
            <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_134.jpg" width="210" height="219"><span>水管连接 . 终身维护</span></li>
            <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_136.jpg" width="210" height="219"><span>线管规范 . 耐用节省</span></li>
            <li class="no_mare"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_138.jpg" width="210" height="219"><span>安装龙骨 . 防损防灰</span></li>
        </ul>
    </div>
     <div class="tp9_right">
     	 <div class="tuiguang_title">
        	<h1><span>美宅客保障</span></h1>
        </div>
        <div class="baozhang">
        	<ul class="on_tc" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
            	<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_123.jpg" width="50" height="43"><span>基础服务</span></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_125.jpg" width="50" height="43"><span>平台保障</span></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_118.jpg" width="50" height="43"><span>优质施工队</span></li>
                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_tgy2_120.jpg" width="50" height="43"><span>贴心服务</span></li>
            </ul>
        </div>
         <div class="aaa_ting">
            	<ul>
                	<li>
                    	<p>美宅客的售后服务如何？</p>
                        <span>美宅客提供【7*24小时的管家式服务】，接到投诉3小时内相应，1天内出解决方案，5天内解决；</span>
                    </li>
                	<li>
                    	<p>美宅客产品及服务的特色？</p>
                      <span>·  一线品质、百姓价格，同品质优惠40%以上； <br/>
·  自有工人，精品施工，一口价0增项；<br/>
·  专案设计，管家服务，台湾知名设计师带队；<a class="on_tc">【更多】</a></span>
                    </li>
                  <li style="border:none;">
                   	<p>
美宅客为什么能做到一线品质，百姓价格？</p>
                      <span>美宅客通过以下3个方面来实现：工厂直达用户，去掉了中间商加价；直接和国际、国内一线建材品牌代工厂合作，去掉了品牌溢价；一口价0增项政策，让价格更加透明；<a class="on_tc"> 【更多】</a></span>
                    </li>
                </ul>
            </div>
     </div>
</div>
<!-- top9 end -->
<!--content-->
<div class="tijiao_diz">
	<p>地址：北京市 丰台区 宋家庄 万科红底商 美宅客体验馆（地铁宋家庄C出口即到）</p>
    <div>
	<!-- required oninvalid="setCustomValidity('请填写正确手机号！')" oninput="setCustomValidity('')" -->
 <form action="manage.php" name="mobileform" id="myForm3" method="post" onSubmit="mySubmit3(ture)"> 
    <input name="mobile" id="user_phone3" type="text" maxLength="11" placeholder="请输入您的手机号">
    <input name="B1" type="submit"  id="submit3" value="发送地址到手机" id="label3" class="ljshengqing" onclick="addFunctionVal('http://www.imeizhaike.com/article_cat.php?id=9')">
 </form><div id="shibai"></div>
		<div id="shurub"></div>
    </div>
</div>
<!--content-->

</div>

<div id="tb_gg"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/thb_03.jpg" width="899" height="499" class="on_tc"  onclick="addFunctionVal('http://www.imeizhaike.com/whole618.html')"><i><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_mzktg1_055.png" width="35" height="35"></i></div>
	
<!--footer-->
<div class="footer">
	<div class="middle">              
    	<p class="footer1"><a href="http://www.imeizhaike.com/about.html" target="_blank">美宅客简介</a>  |  <a href="http://www.imeizhaike.com/experience.html" target="_blank">体验馆</a>| <a href="http://www.imeizhaike.com/category.php?id=5" target="_blank">产品库</a>   | <a href="http://www.imeizhaike.com/news_list.html" target="_blank"> 媒体报道 </a> | <a href="http://www.imeizhaike.com/cooperation.html" target="_blank">合作伙伴</a> | <a href="http://www.imeizhaike.com/join_us.html" target="_blank">加入我们</a></p><p>北京美宅客网络科技有限公司</p>
      <p class="dh_pla"><i>电话：400-8118-088</i> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3242305177&site=qq&menu=yes"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/pic_lianxi_03.jpg" width="89" height="23"></a></p>
        
    	<p>地址：北京市 丰台区 宋家庄 万科红底商 美宅客体验馆（地铁宋家庄C出口即到）（邮编100079） </p>
		<p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/aliyun.png" width="60">提供计算与安全服务&nbsp;&nbsp;&nbsp;&nbsp; <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/images/bei.png" ><a href="http://www.miitbeian.gov.cn/" target="_blank">ICP备16008343号-1</a> </p>
  </div>
</div>
<!--footer-->

<!-- 预约成功弹出-->
<div id="chengggle">
<div class="chenggong_yy">
  	<div class="yy_yuyue">
    <i class="iconfont guanbitc">&#xe60a;</i>
    	<div class="yuyue_left"><i class="iconfont">&#xe610;</i></div>
        <div class="yuyue_right"><b>恭喜您，预约成功!</b>
        <span>我们将尽快和您联系，请保持手机畅通！</span>
        </div>
      <a href="#" id="dingx" >确定</a>
    </div>
  </div>
</div>
<!-- 预约成功弹出-->
<!-- 预约失败弹出-->
<div id="shibaile">
 <div class="chenggong_yy">
    <div class="yy_yuyue cuowu_yy">
    <i class="iconfont guanbitc">&#xe60a;</i>
        <div class="yuyue_left"><i class="iconfont">&#xe6a7;</i></div>
        <div class="yuyue_right"><b>很抱歉，预约失败！</b>
        <span>咨询热线：400-8118-088</span>
        </div>
         <a href="#" id="dingx" onclick="$('#shibaile').hide();" >确定</a>
    </div>    
     </div>
  </div>   

<!-- 预约失败弹出-->
 <!--底部弹窗 -->
    <div class="yytanchuan indexggg">
    	<div class="yytcdeta armmy_releft">
                    <em class="closs">x</em>
         <form id="myForm2" name="formMsg">
        	<h2>立即预约 享受更多内容、服务及优惠</h2>
            <ul>
                <li class="account jinduqq"><i>10秒免费预约</i><span>1</span><p></p> </li>
                <li class="company"><i>客服回访确认</i><span>2</span><p></p></li>
                <li><i>领取方案</i><span>3</span><p></p></li>
			</ul>
            <span>10秒钟报名，立即获得  免费设计方案！</span>
            
            <div class="yydfg">
            <p class="indexqg_frxm">
				<input name="user_name" type="text" id="user_name2" placeholder="您的称呼">
            </p>
            <p class="indexqg_frxm">
                <input name="user_tel" type="text"  id="user_phone2" maxLength="11" placeholder="您的手机号" oninput="setCustomValidity('')">
            </p>
            <input type="hidden" name="act" value="">
            <input type="hidden" name="msg_type" value="6">

            <!-- 可删除 <input type="submit" value="预约" style="display:none" > -->

            <!-- 修改过 -->
            <a id="msgsubmit2" class="indexqg_fran">立即预约</a>


            <i>美宅客郑重承诺：不会泄露您的联系方式</i>
            <div id="shibai2"></div>
            <div id="shurub2"></div>
            <div id="shuruxm2"></div>
			</div>
			</form>  
        </div>
    </div>
   <!--底部弹窗 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/js/jquery.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/js/miant.js"></script><!--页面js规整 -->
<script>
//AJAX START
/*$("#msgsubmit2").click(function(){
  $.ajax({
      type : 'post',
      dataType : 'json',
      url : 'demo.php',
      data : {
        name:$('#user_name2').val(),
        phone:$('#user_phone2').val()
      },
      success : function(data,status){
          if(data.status==1){
            $(".yytanchuan").hide();//预约关闭
            $('#chengggle').show();//成功提示
            console.log(data);
          }else{
            $('#shibaile').show();
            console.log(data);
            //alert(status);
          }
      },
      error : function(xhr){
          $('#shibaile').show();
          console.log(xhr.status);
      }
  });
});*/
//AJAX END
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/pc/js/jquery.lazyload.js" type="text/javascript"></script> <!--图片预加载 -->
<script type="text/javascript">// <![CDATA[KISSY.ImageLazyload();// ]]></script>
<div style="display:none">
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
</div>
<!-- Analytics -->
                            <script>
                                var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
                                var myDate = new Date();
                                date = myDate.getFullYear() + '' + myDate.getMonth() + '' + myDate.getDate();
                                g.type = 'text/javascript';
                                g.defer = true;
                                g.async = true;
                                g.src = "http://analytics.jiuzhilan.com/codes/jiuzhilan_4761.js?" + date;
                                s.parentNode.insertBefore(g, s);
                            </script>
                            <!-- End Analytics Code -->
