<?php
use yii\helpers\Url;
$this->params['cssFiles'] = [
    'mzk/m/css/style', 'mzk/m/css/css', 'mzk/m/css/drawer.min', 'mzk/m/css/fabiao',
];
$this->params['jsFiles'] = [
    'mzk/pc/js/jquery.min', 'mzk/m/js/iscroll', 'mzk/m/js/jquery.drawer.min',
];
$this->params['formPosition'] = 'hd-mzkbj';
$this->params['formPositionName'] = '活动-美宅客移动端';
Yii::$app->params['siteHotline'] = '400-8118-088';
Yii::$app->params['tdkInfos']['title'] = '美宅客_互联网家装平台';
Yii::$app->params['tdkInfos']['keyword'] = '家装 装修 互联网家装 装修套餐 主材套餐美宅客 imeizhaike 建材选购';
Yii::$app->params['tdkInfos']['description'] = '美宅客是一家C2M+O2O的互联网家装平台；提供瓷砖、地板、抽油烟机、马桶、淋浴房、水槽等建材购买，提供自有工人的精品施工服务，提供1对1的房屋设计服务；同品质优惠40%以上；我们不用品牌掩盖品质，我们只提供一线工厂品质产品；';
$this->params['cidDefault'] = '667';
?>
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
</head>

<body>
<!--header-->
<div class="middle m_header">
	<p class="mlogo fl"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_logo.jpg"></p>
    <div class="drawer drawer-right">
        <!--<div class="drawer-toggle drawer-hamberger"><span></span></div>
        <div class="drawer-main drawer-default">
            <nav class="drawer-nav" role="navigation">
                <ul class="drawer-nav-list">
                    <li><a href="index_m.html">首 页</a></li>
                    <li><a href="outfits618_m.html">整装套餐</a></li>
                    <li><a href="material_m.html">主材套餐</a></li>
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
        <script>
            $(document).ready(function(){
            $('.drawer').drawer();
            $('.js-trigger').click(function(){
            $('.drawer').drawer("open");
            });
            });
        </script>
    </div>-->
</div>
<!--header-->

<!--content-->
<div class="m_jsgg"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/jsgg.jpg" /></div>
<section class="bgf8">
  <div id="fabiaoqu">
    <form id="froms" class="zxd-form">
      <div class="download-arrow1">
        <input type="text" id="area" placeholder="请选择您的所在城市">
      </div>
      <div class="touch-input2">
        <input type="tel" name="oarea" id="areaInput" placeholder="请输入您的房屋面积">
        <label for="areaInput">m&sup2</label>
      </div>
      <p class="oarea-remind">* 输入面积小于30㎡时，报价结果将按30㎡计算</p>
      <div class="jiting clearfix" id="jiting">
        <label>
          <select name="" id="secshi">
          </select>
        </label>
        <label>
          <select name="" id="secting">
          </select>
        </label>
      </div>
      <div class="jishi clearfix">
        <label>
          <select name="" id="secchu">
          </select>
        </label>
        <label>
          <select name="" id="secwei">
          </select>
        </label>
        <label style='float: right;'>
          <select name="" id="secyangtai">
          </select>
        </label>
      </div>
      <div>
        <input type="tel" id="newPhone" name="phone" placeholder="请输入您的手机号">
      </div>
      <input id="imeizhaike-form-submit" type="button" dataptag="2_4_19_594"  value="立即计算">
    </form>
  </div>
  <section class="calu-result">
    <h1 id="changeTxt">装修报价<p id="tubatu_totle">0<span>元</span></p></h1>
    <div id='bj'>
      <div class="calu-content">
        <p id="tubatu_rg"><b>卧室：</b><strong id="woshi_bj">0<em>元</em></strong></p>
        <p id="tubatu_cl"><b>客厅：</b><strong id="ting_bj">0<em>元</em></strong></p>
        <p id="tubatu_rg"><b>厨房：</b><strong id="chuf_bj">0<em>元</em></strong></p>
        <p id="tubatu_cl"><b>卫生间：</b><strong id="weisj_bj">0<em>元</em></strong></p>
        <p id="tubatu_rg"><b>阳台：</b><strong id="yangt_bj">0<em>元</em></strong></p>
        <p id="tubatu_cl"><b>其他：</b><strong id="qita_bj">0<em>元</em></strong></p>
      </div>
    </div>
  </section>
  <article class="tipss" id="tipss" >
    <h3>* 稍后装修管家将回电您，免费提供装修咨询服务</h3>
    <h4 id="other-city-text">* 因材料品牌及工程量不同，具体报价以量房实测为准</h4>
  </article>
</section>
<section class="select-planform">
  <figure class="hide-status"> <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_tg01.jpg" /> </figure>
  <figure class="hide-status"> <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_tg02.jpg" /> </figure>
  <figure class="hide-status"> <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_tg03.jpg" /> </figure>
  <figure class="hide-status"> <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_tg04.jpg" /> </figure>
</section>
<script type="text/javascript">
    $(function(){
        zxbjObj.init();
        var shenzhenSelectFirst = true;
        FabiaoSelect.initialize({targetDom: '#area',callback:function(){
            var city =  $("#area").val().split(" ")[1];
            var shenzhenOver = $('#shenzhenOver').val();
            var shenzhenA= $('#shenzhenA').val();
            var width = $(window).width();
            if (city==='深圳') {
                $('#banner-wx').show();
                //banner出现初始态报价清单上移
                if ($('#initialStatus').val()==='true') {
                            $('.calu-result').css({
                                'margin-bottom': '70px'
                            });
                };
                if (shenzhenSelectFirst) {
                     (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_4_11_1292');    //埋点
                     shenzhenSelectFirst = false;
                };
                if (width>760) {
                     $('.phone-background-img').css('bottom','10rem');
                }
                else if(width>325) {
                    $('.phone-background-img').css('bottom','6rem');
                }
                else {
                    $('.phone-background-img').css('bottom','5.5rem');
                };
                if (shenzhenA==='falseA') {
                    $('#zxd-form-submit').removeAttr('style').removeClass('active').addClass('unused').val('报价短信已发送到您的手机，请注意查收');
                    $('#shenzhenOver').val('falseS');
                    //初始态不出现文案
                    if ($('#initialStatus').val()==='false') {
                        //清空原有的文案
                        $('#tipss #other-city-text').hide();
                        $('#shenzhen-text').show();
                        $('#tipss').css({
                                        'margin-top': '15px'
                                    }).show();
                    }
                    $('.calu-result').hide();
                }
            }
            else {
                 $('#banner-wx').hide();
                   //banner出现初始态报价清单上移
                    $('.calu-result').css({
                        'margin-bottom': '15px'
                    });
                 //banner出现初始态报价清单上移恢复
                if ($('#initialStatus').val()==='true') {
                            $('.calu-result').css({
                                'margin-bottom': '15px'
                            });
                };
                 $('.phone-background-img').css('bottom','25px');

                if (shenzhenOver==='falseS') {
                    $('#zxd-form-submit').removeAttr('style').removeClass('unused').addClass('active').val('重新计算');
                };
                $('#shenzhenOver').val('trueS');
                //初始态不出现文案
                if ($('#initialStatus').val()==='false') {
                     $('#tipss #shenzhen-text').hide();
                    $('#tipss #other-city-text').show();
                    $('#tipss').css({
                        'margin-top': '15px'
                    }).show();
                }
                
            }
        }});
        var search = parseQuery();
        $('.phone-background-img').show();
        if(search['utm_source'] !== undefined || search['utm_from'] !== undefined){
        }else{
            $('#phonelink').data('ptag', '2_4_11_918');
            $($('.publick-button-box').find('a')[0]).data('ptag', '2_4_11_920');
            $($('.publick-button-box').find('a')[1]).data('ptag', '2_4_11_921');
        }
    });
    if ("" == 'dz') {
        (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_4_11_481');
    }
    $('.touch-input').on('touchstart', function(e){
        e.preventDefault();
        e.stopPropagation();
        $(this).find('input').focus();
    });
    $('#phonelink').on('touchstart', function(e){
        var search = parseQuery();
        if(search['fromapp'] === 'app' && search['appostype'] == 2){
            location.href = 'http://www.sobot.com/chat/h5/index.html?sysNum=613b490be53d49e58e97db76dc3dec34';
        }else{
            $('.layerout').show();
            $('#msgOne').show();
        }
    });
    $('#msgOne,#msgTwo').on('touchmove', function(e){
        e.preventDefault();
    });
    $('#close_msgOne,.layerout').on('touchend', function(e){
        e.preventDefault();
        if($('#msgTwo').is(':visible')){
            return;
        }
        $(".layerout").hide();
        $('#msgOne').hide();

    });
    $('.window-shoot-zxzx2').on('touchend', function(e){
        e.preventDefault();
        $(".layerout").hide();
        $('#msgTwo').hide();
        
    });
</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/js/fabiao_endalert.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/js/fabiao_select.js"></script> 
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/js/seostatis.min.js"></script> 
<!--content-->

<!--footer-->
<div class="mindex_tj mt15">
	<div class="m_foot"><span>点击拨打服务热线：<a href="tel:400-8118-088">400-8118-088</a></span><br>地址：北京市丰台区宋庄路26号院11号楼110<br>ICP备16008343号-1</div>
</div>
<!--footer-->

<!--悬浮-->
<div class="m_db"><a href="tel:4008118088"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/dbyf.png" width="100%" /></a></div>
<!--<div class="mindex_xf">
	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/images/m_index_xf.png">
    <p class="mindex_xftext">同品质优惠40%以上<span>提供一线工厂品质产品！</span></p> <a href="../ordered.html" class="mindex_xfan">立即预约</a>
</div>-->
<!--悬浮-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/mzk/m/js/idangerous.swiper.min.js"></script><!--banner -->
<script src="/stat1.php"></script>
