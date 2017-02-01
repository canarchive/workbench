<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['95055-5881', '35df6-9609', '235a4-6274', 'cd7cd-5015'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!--<标项页头部定位 start-->
<div class="top-header">
    <a class="close fl" onclick="$('.top-header').hide();"></a>
    <img class="top-log fl" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/6f271-8932.png">
    <ul class="top-wenzi fl">
        <li style="font-size: 0.75em;color:#333;line-height: 1.2rem;">下载中国加盟网APP</li>
        <li style="font-size: 0.625em;color:#c7c7c7;">随时随地轻松找项目</li>
    </ul>
    <a href="javaScript:;"  class="top-download fr" id="downLoad_lm" onClick="func_lm()">马上下载</a>
</div>
<!-- app下载 end -->
<script type="text/javascript">
function goBack()
{
    window.location.href = "http://m.jmw.com.cn/so/";   }
function func_lm(){
var u = navigator.userAgent, app = navigator.appVersion;
var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if  (isAndroid == true){
        document.getElementById("downLoad_lm").href="http://m.jmw.com.cn/app/android/中国加盟网.apk";
    }else if (isiOS == true){
        document.getElementById("downLoad_lm").href="https://appsto.re/cn/ukd68.i";
    }else{
        alert("请在手机端下载app");
    }
}
</script> 
<!--<标项页头部定位 stop-->
<style>
.top-header{height:35px;width: 94%;padding: 10px 3%;background: #ffffff;position: relative;}
.top-header .close{display:block;margin-right: 9px; height:14px;width: 14px;margin-top: 10px;background: url("http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0ac58-3198.png") no-repeat;background-size: 100%;}
.top-header .top-log{width: 36px;height: 36px;margin-right: 6px;}
.top-header .top-download{display: block; background: #E44B46;color: #ffffff;width: 70px;height: 23px;border-radius: 10px;text-align: center;line-height: 22px;margin-top: 7px;font-size: 0.75em;}
</style>
<!-----面包屑 start----->
<header class="b_header" style="position:relative;">
    <div class="wrap"> 
        <div class="fl header_1"><a href="javascript:;" onclick="goBack()"  class="icon icon1"></a></div>
                        <h2 style="width:86%;text-align:center;float:left;font-size:1.2rem;color:#fff;">晨阳水漆加盟</h2>
                    <div class="fr header_2">
            <!--<a href="javascript:;" id="fenxiang" class="icon icon3"></a>-->
            <html>
<head>
<link rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/platj/m/css/95055-5881.css" />
<link rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/platj/m/css/35df6-9609.css" />
</head>
<body>
    <!-- JiaThis Button BEGIN -->
    <!--<a href="javascript:;" title="" class="icon icon3" onclick="$('#my').show()" ></a>-->
    <!--pingbi分享-->
    <a href="javascript:;" title=""  ></a>
    <div id="my" style="z-index:2000; width: 220px; padding: 16px 0px 8px 24px; display:none; background: rgba(0, 0, 0, 9) none repeat scroll 0% 0%; position: fixed; top: 50%; left: 50%;margin-top:-40px;margin-left:-117px;">
        <div class="bdsharebuttonbox" data-tag="share_1">
            <a  style="margin-right:20px;" class="bds_tsina" data-cmd="tsina"></a>
            <a  style="margin-right:20px;" class="bds_qzone" data-cmd="qzone" href="#"></a>
            <a  style="margin-right:20px;" class="bds_weixin" data-cmd="weixin"></a>
            <a  style="margin-right:20px;" class="bds_tqq" data-cmd="tqq"></a>
        </div>
        <a href="javascript:;" onclick="$('#my').hide()"><input type="button" style="width:140px;height:26px;margin-left:20px;" value="取  消"></a>
    </div>
    <script>
        window._bd_share_config = {
            share : [{
                "bdSize" : 32       //分享按钮的尺寸  16｜24｜32
            }]
        }
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://60.205.145.0/filesys/spider/pages/asset/platj/m/js/share.js'+~(-new Date()/36e5)];
    </script>
</body>
</html>


            <a href="http://m.jmw.com.cn/seek.php" class="icon icon2"></a>
        </div>
    </div>
</header>
<!-----面包屑 end----->
<!--图片轮播 start-->
<div class="mui-slider">
    <div class="mui-slider-group mui-slider-loop">
        <!--支持循环，需要重复图片节点-->
                    <div class="mui-slider-item mui-slider-item-duplicate"><img id="img_url" src="" /></div>
                                <div class="mui-slider-item"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0c59-2746.jpg" /></div>
                                            <div class="mui-slider-item"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/4634b-4708.jpg" /></div>
                                            <div class="mui-slider-item"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/004c6-4388.jpg" /></div>
                                            <div class="mui-slider-item"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/29be4-6543.jpg" /></div>
                                            <div class="mui-slider-item"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/d0559-9249.jpg" /></div>
                    <script>
                    var img_url = "http://60.205.145.0/filesys/spider/pages/asset/platj/img/d0559-9249.jpg";
                    $('#img_url').attr('src',img_url);
                    </script>
                                    <div class="mui-slider-item mui-slider-item-duplicate"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0c59-2746.jpg" /></div>
         
        <!--支持循环，需要重复图片节点-->
    </div>
    <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
    </div>
    <h1 style="position:absolute;bottom:22px;color:#fff;z-index:988;padding: 0 3%;">晨阳水漆加盟</h1>
    <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" class="many_pic"><span>共48张</span></a>
</div>
 <script>
   //获得slider插件对象
   var gallery = mui('.mui-slider');
   gallery.slider({
       interval:3000//自动轮播周期，若为0则不自动播放，默认为0；
   });
   </script>
<!--图片轮播 end--> 
<!-- 晨阳水漆加盟 -->
<section class="b_section1">
    <div class="section1_top clear">
        <div class="clear section1_top1">
            <h1 class="fl">晨阳水漆加盟</h1>

<script type='text/javascript'>
(function(m, ei, q, i, a, j, s) {
    m[a] = m[a] || function() {
        (m[a].a = m[a].a || []).push(arguments)
    };
    j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
    j.async = true;
    j.charset = 'UTF-8';
    j.src = i + '?v=' + new Date().getUTCDate();
    s.parentNode.insertBefore(j, s);
})(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
_MEIQIA('entId', 18836);
_MEIQIA('withoutBtn', true);
</script>
        <span style="text-align:right;">
                            <a class="section1_2" style="margin-left:99px;" href="http://m.jmw.com.cn" title="中国加盟网">中国加盟网</a>
                            <i class="section1_2">&gt;</i>
            <a class="section1_2" href="http://m.jmw.com.cn/so/i24/" title="建材加盟">建材</a>
            <i class="section1_2">&gt;</i>
            <a class="section1_2" href="http://m.jmw.com.cn/so/i89/" title="油漆加盟">油漆</a>
            <i class="section1_2">&gt;</i>
            <a class="section1_2" href="http://m.jmw.com.cn/xm137829/" title="晨阳水漆加盟">晨阳水漆</a>
        </a>
        </div>
        <p class="zhaoshang" style="color:#fff;">晨阳水漆招商</p>
</div>
    <div class="content_phone wrap" style="margin-bottom:0;">
        <ul class="clear ul1"> 
            <li class="icons1 fl">投资金额<span style="color:red;">5-30万</span></li>
            <li class="icons2 fr"><span id="attentionCountNum" style="color:red;"></span>创业者已关注</li>
            <li class="icons3 fl"><span style="color:red;">2922</span>人已加盟成功</li>
            <li class="icons4 fr"><a style="display: block;width: 100%;height: 100%;" onclick="$('.gray_mask').show();$('.tm_bg').show()&&$('#online_consult').show();$('#zj_origin').val('1');$('#contents').val('请问投资晨阳水漆所需要的费用有哪些!!!');"><i class="icon icon5"></i>立即咨询</a></li>
        </ul>
        <script>$(function(){getAttentionCountByAjax('137829');});</script>
        <!--<ul class="tellphone clear" style="padding:6px 0;">
            <li class="li1 fl">加盟电话:4000500555</li>
            <li class="li3 fr"><span style="color:red;" id="tel_1"></span>人已拨</li>
            <li class="li2 fr">
                                    <a class="fl" onclick="addTelForWap(,1,'');">
                                    <a class="fl" onclick="addTelForWap(,1,'4000500555');">
                                    <i class="icon6"></i>立刻咨询</a>
            </li>
            
            <script type='text/javascript'>
              showTelHitsForWap(,1);
            </script>
        </ul>-->
        <!-- 询加盟电话 start-->
        <style type="text/css"> 
            .jiaM_tele{ height:44px; line-height:44px; font-size:13px; color:#999;  }
            .chaKan{ margin-left:17px; color:#008ac3; }
            .chaKan i{ display:block; width:16px; height:16px; background-size:16px 16px; margin:3px 3px 0 0; font-size:15px; }
            
            .inquire_tele{background: #fff; width: 88%; position: fixed; left: 6%; top: 20%; border-radius: 10px; z-index: 1000; display:none; }
            .inquire_top{height: 55px; line-height: 55px;text-align: center;border-bottom: 1px solid #e8e8e8;font-size: 1rem;color: #000;}
            .inquire_tele .hot_line{ height:45px; line-height:45px; padding-left:4%; font-size:13px; color:#999; }
            .inquire_tele ul li{ line-height: 45px;padding: 0 4%; }
            .inquire_tele ul li span{ display: inline-block;font-size: 0.95rem;color: #666;}
            .inquire_tele ul li span .em1{ float: left;color: #e10000;margin-right: 5px;}
            .inquire_tele ul li span .em2{ margin-left:6px; }
            .inquire_tele ul li .text{ width: 30%;height: 28px;font-size: 0.8rem;color: #c3c3c3;box-sizing: border-box;padding-left: 3px;margin-left: 3px;border: medium none;}
            .inquire_tele .li_sex{ font-size:0.85rem; }
            .inquire_tele ul .li5 { height: 48px; line-height: 48px; border-top:1px solid #e8e8e8; }
            .inquire_tele ul li a {text-align: center; width: 50%; display: inline-block; font-size: 0.95rem;}
            .inquire_tele ul .a1{ border-right: 1px solid #e8e8e8; box-sizing: border-box; color: #cdcdcd;}
            .inquire_tele ul .a2 { color: #4283e4;}
            .icon_tel_sex3{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }
            .icon_tel_sex4{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }
        </style>
                    <div class="jiaM_tele clear"> 
            <p class="fl"><span class="same fl">加盟电话：</span><span class="toggle_shu1">0312-8593****</span><span class="toggle_shu2" style="display:none;">
            <a class='fl' onclick='addTelForWap(137829,1,"0312-8593111")'>0312-8593111</a>              </span></p>
            <p class="fl chaKan" onclick="check_is_login2(137829,1,2,27,'晨阳水漆');return false;"><i class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/a04f5-1567.png" alt="" /></i>查看</p>
        </div>
                    <form action="" method="post" id="see_tel">
        <div class="inquire_tele"> 
            <p class="inquire_top">询加盟电话</p>
            <p class="hot_line">请您输入手机号码，查看企业加盟热线</p>
            <ul> 
                <li>
                    <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
                    <input type="text" class="text" name="name" id="tel_name" placeholder="请输入姓名" value=""  maxlength="6"/>
                    <p class="li_sex fr">&nbsp;&nbsp;性别:
                        <label id="tel_label3" style="display:inline-block;"><i class="icon_tel_sex3 fl icon_tel_sex4"></i>男 &nbsp;</label>
                        <label id="teo_label4" style="display:inline-block;"><i class="icon_tel_sex3 fl "></i>女</label>
                    </p>
                </li>
                <li>
                    <span><em class="em1">*</em>手机<em class="em2">:</em></span>
                    <input type="text" class="text" name="phone" id="tel_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:75%;"/>
                </li>
                <li class="li5 clear"> 
                    <a href="javaScript:;" class="fl a1" onclick="$('.inquire_tele').hide();$('.gray_mask').hide();">取消</a>
                    <a href="javaScript:;" class="fr a2" onclick="return see_tel($(this));">确定</a>
                </li>
            </ul>
        </div>
            <input type="hidden" name="gender" class="fl" id="tel_sex" value="0">
            <input type="hidden" name="content" class="fl" id="tel_content" value="">
            <input type="hidden" name="target_id" id="tel_target_id" value="137829" >
            <input type="hidden" value="" name="origin" id="tel_origin">
            <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
            <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
        </form>     
        <!-- 询加盟电话 end -->
    </div>
</section>
<!-- 加盟动态 start -->
<style type="text/css"> 
    .zp_dongT{ position:relative; }
    .zp_dongT i{ width:14px; height:12px; display:inline-block; position:absolute; right:0; top:-8px; }
</style>
<section class="ziXun">
    <div class="wen_p wrap zp_dongT clear">
        <h2 class="fl" style="border-bottom:none;"><a style="font-size: 16px;color:#e44b46;" >加盟动态</a></h2>
        <a class="fr" style="color:#000000; margin-right:15px;">【中国加盟网独家活动】</a>
        <i><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/2f89f-9942.gif" alt=""></i>
    </div>
    <ul class="diJia clear"> 
        <li class="fl" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('我想咨询晨阳水漆加盟费用最低多少钱？');$('#origin').val(5);"><i class="icon icon7"></i><a>询加盟底价</a></li>
        <li class="fr" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('晨阳水漆加盟项目的最新优惠请第一时间通知我。');$('#origin').val(6);"><i class="icon icon8"></i><a>问加盟优惠</a></li>
    </ul>                                                                                                  
</section>
<!-- 加盟动态 end -->
<!-- 项目介绍 -->
<ul class="main-title">
    <li><a href="#xiangmujieshao">项目介绍</a></li>
    <li><a href="#jiamengfeiyong">加盟费用</a></li>
    <li><a href="#jiamengyoushi">加盟优势</a></li>
    <li><a href="#jiamengdianpu">加盟店铺</a></li>
</ul>
<style>
  #directory p{ color:#333; }
</style>
        <div class="xiangmujieshao" name="xiangmujieshao" id="xiangmujieshao">
                    <div class="xiangmujieshao-title">
            <h2 class="fl"><a href="http://m.jmw.com.cn/xm137829/xiangmujieshao/">晨阳水漆项目介绍</a></h2>
                            <a class="fr jiameng-more show_content1" href="javascript:;" style="display: block;color: #b0b0b0;font-size: 10px;line-height: 39px;">展开更多加盟信息<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png"></a>
            <a class="fr jiameng-more hide_content1"  href="javascript:;"  style="display: none;color: #b0b0b0;font-size: 10px;line-height: 39px;">收起<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41a26-4399.png"></a>
                        </div>
                    <div class="xiangmujieshao-article basic1" id="directory" style="display: block;padding-bottom:20px;color: #333333;font-size: 13px;overflow: hidden;max-height: 730px;width:100%;">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;晨阳水漆加盟简介<br />
<br />
河北<a href="http://www.jmw.com.cn/xm137829/" target="_blank">晨阳</span></a>工贸集团有限公司乃集水漆生产、电子商务、家政保洁、建材贸易及工程施工为一体的现代化集团公司，地处京津石经济金三角腹地徐水晨阳大街，占地面积15万平米，总资产数十亿元。晨阳集团年产具有国际领先水平的各种环保节能水性漆12.5万吨，是全国全水漆生产企业，是国家863计划&ldquo;风电叶片防护涂料&rdquo;项目承担者，是河北省重点企业、地方财政的支柱性企业，河北省&ldquo;三年大变样&rdquo;重点工程推广示范单位，国家&ldquo;既有建筑节能改造&rdquo;工程示范单位，是全国唯一水性涂料院士工作站承建单位，河北省企业技术中心及河北省水性涂料工程技术研究中心依托单位，与北京化工大学联合建立水性涂料&ldquo;院士工作站&rdquo;，是中国推行水性化涂装的发起人。</span></span></span></p>
<p>&nbsp;</p>
<p style="text-align: center;"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/9ec98-5416.jpg" /></span></span></span><br />
&nbsp;</p>
<p>公司主要产品有：水性建筑漆、&ldquo;漆伴侣&rdquo;（高档腻子）、水性工业漆、水性木器漆、水性柳编漆、水性树脂等几大系列上百个品种。产品通过中国环境标志产品认证、中国船级社认证、欧盟SGS、德国TUV环保检测认证、CCCF中国消防产品质量认证、CTC中国建材认证等。公司通过ISO9001国际质量管理体系认证、GB/T28001职业健康安全管理体系认证。</span></span></span><br />
&nbsp;</p>
<p><a href="http://www.jmw.com.cn/xm137829/" target="_blank">水漆系列</span></a>产品以水为稀释剂，无毒无味，不燃不爆，并且具有节约能源、杜绝污染、降低有害排放等特点，是国家十二&middot;五规划中重点支持和鼓励类产业。水漆取代油漆是人类生存需要、科学技术发展的必然趋势。产品市场覆盖机械制造、五金家电、汽车行业、建筑行业、家具家居及铸造、桥梁、船舶、集装箱、铁路等应用领域。我公司拥有发明专利30余项，产品技术居于国际领先水平。</span></span></span></p>
<p>&nbsp;</span></span></span></p>
<p style="text-align: center;"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8ae9b-5595.jpg" /></span></span></span></p>
<p><br />
晨阳集团热心支持社会公益事业，多次参加国内各项公益活动，捐资助教，扶贫助学，是河北省和谐企业的典范和代表。<br />
<br />
<a href="http://www.jmw.com.cn/xm137829/" target="_blank">晨阳</span></a>集团的企业宗旨是引领中国涂装行业、优化地球生态环境、保护人类身心健康。晨阳人，期待与您携手，共同发展，共同担当起振兴民族水漆未来的大业，为改善、建立并保持一个宜居的生态环境，为人类的健康繁衍生生不息而努力。</span></span></span></p>
<p><br />
<strong>招商基本条件：</strong></span></span></span></p>
<p>1、经销商应具有强烈的创业精神，并有在水性漆行业发展的强烈愿望与拓展热情；</span></span></span></p>
<p>2、经销商须认同&quot;<a href="http://www.jmw.com.cn/xm137829/" target="_blank">晨阳</span></a>&quot;品牌的发展理念和市场运营模式，面对自己的区域市场，应用清晰的规划目标与发展策略；</span></span></span></p>
<p>3、经销商需有固定、合法的经营场所，并能提供该营业场所的使用权证明及有效地营业执照；</span></span></span></p>
<p>4、经销商应有一支高效的团队专门负责此项目的运营，营业场所的面积应能满足经营规格的需要；</span></span></span></p>
<p>5、经销商须具备相应的销售经验及投资实力。</span></span></span><br />
&nbsp;</p>
...
        </div>
        <p style="height:30px;line-height:30px; font-size:12px;">
            <a class="fr show_content1" href="javascript:;" style="display: block;color: rgb(51, 51, 51);" >[更多]</a>
        </p>            
        <div class="xiangmujieshao-article moreInfor1"  id="content" style="display: none;">
            <p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">&nbsp;&nbsp;&nbsp;&nbsp;晨阳水漆加盟简介<br />
<br />
河北<a href="http://www.jmw.com.cn/xm137829/" target="_blank"><span style="background-color: rgb(255, 240, 245);">晨阳</span></a>工贸集团有限公司乃集水漆生产、电子商务、家政保洁、建材贸易及工程施工为一体的现代化集团公司，地处京津石经济金三角腹地徐水晨阳大街，占地面积15万平米，总资产数十亿元。晨阳集团年产具有国际领先水平的各种环保节能水性漆12.5万吨，是全国全水漆生产企业，是国家863计划&ldquo;风电叶片防护涂料&rdquo;项目承担者，是河北省重点企业、地方财政的支柱性企业，河北省&ldquo;三年大变样&rdquo;重点工程推广示范单位，国家&ldquo;既有建筑节能改造&rdquo;工程示范单位，是全国唯一水性涂料院士工作站承建单位，河北省企业技术中心及河北省水性涂料工程技术研究中心依托单位，与北京化工大学联合建立水性涂料&ldquo;院士工作站&rdquo;，是中国推行水性化涂装的发起人。</span></span></span></p>
<p>&nbsp;</p>
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/9ec98-5416.jpg" /></span></span></span><br />
&nbsp;</p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">公司主要产品有：水性建筑漆、&ldquo;漆伴侣&rdquo;（高档腻子）、水性工业漆、水性木器漆、水性柳编漆、水性树脂等几大系列上百个品种。产品通过中国环境标志产品认证、中国船级社认证、欧盟SGS、德国TUV环保检测认证、CCCF中国消防产品质量认证、CTC中国建材认证等。公司通过ISO9001国际质量管理体系认证、GB/T28001职业健康安全管理体系认证。</span></span></span><br />
&nbsp;</p>
<p><span style="font-family: 宋体;"><span style="color: rgb(0, 0, 0);"><span style=";"><a href="http://www.jmw.com.cn/xm137829/" target="_blank"><span style="background-color: rgb(255, 240, 245);">水漆系列</span></a>产品以水为稀释剂，无毒无味，不燃不爆，并且具有节约能源、杜绝污染、降低有害排放等特点，是国家十二&middot;五规划中重点支持和鼓励类产业。水漆取代油漆是人类生存需要、科学技术发展的必然趋势。产品市场覆盖机械制造、五金家电、汽车行业、建筑行业、家具家居及铸造、桥梁、船舶、集装箱、铁路等应用领域。我公司拥有发明专利30余项，产品技术居于国际领先水平。</span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">&nbsp;</span></span></span></p>
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8ae9b-5595.jpg" /></span></span></span></p>
<p><br />
<span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">晨阳集团热心支持社会公益事业，多次参加国内各项公益活动，捐资助教，扶贫助学，是河北省和谐企业的典范和代表。<br />
<br />
<a href="http://www.jmw.com.cn/xm137829/" target="_blank"><span style="background-color: rgb(255, 240, 245);">晨阳</span></a>集团的企业宗旨是引领中国涂装行业、优化地球生态环境、保护人类身心健康。晨阳人，期待与您携手，共同发展，共同担当起振兴民族水漆未来的大业，为改善、建立并保持一个宜居的生态环境，为人类的健康繁衍生生不息而努力。</span></span></span></p>
<p><br />
<span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;"><strong>招商基本条件：</strong></span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">1、经销商应具有强烈的创业精神，并有在水性漆行业发展的强烈愿望与拓展热情；</span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">2、经销商须认同&quot;<a href="http://www.jmw.com.cn/xm137829/" target="_blank"><span style="background-color: rgb(255, 240, 245);">晨阳</span></a>&quot;品牌的发展理念和市场运营模式，面对自己的区域市场，应用清晰的规划目标与发展策略；</span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">3、经销商需有固定、合法的经营场所，并能提供该营业场所的使用权证明及有效地营业执照；</span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">4、经销商应有一支高效的团队专门负责此项目的运营，营业场所的面积应能满足经营规格的需要；</span></span></span></p>
<p><span style="color: rgb(0, 0, 0);"><span style=";"><span style="font-family: 宋体;">5、经销商须具备相应的销售经验及投资实力。</span></span></span><br />
&nbsp;</p>
<a class="fr hide_content1" href="javascript:;" style="color: #333;padding-buttom:10px;">[收起]</a>             <br><br>
        </div>
    </div>
  
<!----项目介绍 end---->
<div class="blank"></div>   
<!----加盟费用 start---->
    <div class="jiamengfeiyong" name="jiamengfeiyong" id="jiamengfeiyong">

                    <div class="xiangmujieshao-title">
            <h2 class="fl"><a href="http://m.jmw.com.cn/xm137829/jiamengfeiyong/">晨阳水漆加盟费用</a></h2>
                            <a class="fr jiameng-more show_content" style="display: block;color: #b0b0b0;font-size: 10px;line-height: 39px;" href="javascript:;">展开更多加盟信息<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png"></a>
            <a class="fr jiameng-more hide_content" style="display: none;color: #b0b0b0;font-size: 10px;line-height: 39px;" href="javascript:;">收起<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41a26-4399.png"></a>
                        </div>
        
        <ul class="jiamengfeiyong-explainin basic" style="display: block;">
                                <li class="feiyongshuoming">
                    <p>特许使用:
                    <span>
                            0                                    元
                        </span></p>
                    <p>费用说明：<span style="color:#b0b0b0;">无特许使用</span></p>
              </li>
                                <li class="feiyongshuoming">
                    <p>保证金:
                    <span>
                            0                                    元
                        </span></p>
                    <p>费用说明：<span style="color:#b0b0b0;">无保证金</span></p>
              </li>
                                <li class="feiyongshuoming">
                    <p>代理费:
                    <span>
                            0                                    元
                        </span></p>
                    <p>费用说明：<span style="color:#b0b0b0;">无代理费</span></p>
              </li>
                        </ul>
                    <ul class="jiamengfeiyong-explainin moreInfor" style="display: none;">
                                    <li class="feiyongshuoming">
                        <p>特许使用:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无特许使用</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>保证金:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无保证金</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>代理费:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无代理费</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>首批进货:
                        <span>
                            3万~1000万                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">首批进货3万</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>品牌使用:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无品牌使用费</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>权益金:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无权益金</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>设备费:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">面议</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>培训费:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">免费培训</span></p>
                  </li>
                                        <li class="feiyongshuoming">
                        <p>管理费:
                        <span>
                            0                                    元
                        </span></p>
                        <p>费用说明：<span style="color:#b0b0b0;">无管理费</span></p>
                  </li>
                            </ul>
                    
</div>
    <!----加盟费用 end---->
<div class="blank"></div>
<!----加盟优势 start---->
    <div class="jiamengyoushi" name="jiamengyoushi" id="jiamengyoushi">
            <div class="xiangmujieshao-title">
        <h2 class="fl"><a href="http://m.jmw.com.cn/xm137829/youshizhichi/">晨阳水漆加盟优势</a></h2>
                    <a class="fr jiameng-more show_content" style="display: block;color: #b0b0b0;font-size: 10px;line-height: 39px;" href="javascript:;">展开更多加盟信息<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png"></a>
        <a class="fr jiameng-more hide_content" style="display: none;color: #b0b0b0;font-size: 10px;line-height: 39px;" href="javascript:;">收起<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41a26-4399.png"></a>
                </div>
            <ul class="basic pres clear" style="display: block;">
            <li><p>
    经营模式：<span style="color:#b0b0b0;">代理 加盟 经销 直营</span>
    </p></li>
            <li><p>
    合作模式：<span style="color:#b0b0b0;">代理 加盟 经销 直营</span>
    </p></li>
            <li><p>
    其他条件：<span style="color:#b0b0b0;">面议</span>
    </p></li>
        
    </ul>
    
       
    
            <ul class="moreInfor pres clear" style="display: none;">
            <li><p>
    经营模式：<span style="color:#b0b0b0;">代理 加盟 经销 直营</span>
    </p></li>
            <li><p>
    合作模式：<span style="color:#b0b0b0;">代理 加盟 经销 直营</span>
    </p></li>
            <li><p>
    其他条件：<span style="color:#b0b0b0;">面议</span>
    </p></li>
            <li><p>
    店铺条件：<span style="color:#b0b0b0;">无限制</span>
    </p></li>
            <li><p>
    运营管理：<span style="color:#b0b0b0;">经销、直营、专卖均可</span>
    </p></li>
            <li><p>
    店铺形象：<span style="color:#b0b0b0;">可免费提供店铺形象设计，获得相应装修补</span>
    </p></li>
            <li><p>
    加盟商身：<span style="color:#b0b0b0;">经销、直营、专卖均可</span>
    </p></li>
            <li><p>
    基本投资：<span style="color:#b0b0b0;">1万-10万</span>
    </p></li>
            </ul>
        </div>
    <!----加盟优势 end---->
<div class="blank"></div>
<!----加盟店铺 start---->
<div class="jiamengdianpu" name="jiamengdianpu" id="jiamengdianpu" style="border-bottom:1px solid #E8EAEE; ">
            <div class="xiangmujieshao-title">
        <h2 class="fl"><a href="http://m.jmw.com.cn/xm137829/jiamengdian/" title="晨阳水漆加盟">晨阳水漆加盟店铺</a></h2>
        <a class="fr" href="http://m.jmw.com.cn/xm137829/jiamengdian/">展开更多加盟信息<img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png"></a>
    </div> 
         
    <ul class="jiamengfeiyong-explainin basic">
        <li class="feiyongshuoming">
             <p>晨阳水漆目前共有店铺<span>390</span>个</p>
            <p>直营店<span>90</span>个</p>
            <p>加盟代理店<span>300</span>个</p>
        </li>
    </ul>
</div> 
<!----加盟店铺 end---->
<!--我要咨询项目 start-->
        <div class="zaixianzixun ziXun">
    <div class="wen_p clear">
        <div class="fl" style="border-bottom:none; color:#e44b46;line-height:50px;">
                    <a href="http://m.jmw.com.cn/xm137829/liuyan/" style="color:#e44b46;font-size: 16px; ">晨阳水漆在线咨询</a>
                </div>
        <span class="fr"><span style="color:red;">2922</span>人已成功加盟</span>
    </div>
    <ul class="zaixianzixun-example">
                <li>
            <dl class="mass-1 fl">
                <dt><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/79506-4799.jpg" alt=""></dt>
                <dt style="margin-bottom: 6px;">
            鲍先生                  </dt>
                <dt>网页版</dt>
            </dl>
            <ul class="mass-2 fr">
                <i></i>
                <li class="mass-2-1">
                    IP：121.17.120.*                        <span class="fr">留言时间:2017-01-17 15:43:09</span>
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" class="fr" style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;"/>
                                        </li>
                <li class="mass-2-2">
                    资金看项目                  </li>
                                </ul>
        </li>
                <li>
            <dl class="mass-1 fl">
                <dt><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/5448b-6171.jpg" alt=""></dt>
                <dt style="margin-bottom: 6px;">
            吴正军                  </dt>
                <dt>网页版</dt>
            </dl>
            <ul class="mass-2 fr">
                <i></i>
                <li class="mass-2-1">
                    IP：180.174.146.*                       <span class="fr">留言时间:2017-01-17 15:11:13</span>
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" class="fr" style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;"/>
                                        </li>
                <li class="mass-2-2">
                    ·我想详细了解此项目的加盟流程，请与我联系！                 </li>
                                </ul>
        </li>
                <li>
            <dl class="mass-1 fl">
                <dt><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/5448b-6171.jpg" alt=""></dt>
                <dt style="margin-bottom: 6px;">
            陆前锋                  </dt>
                <dt>网页版</dt>
            </dl>
            <ul class="mass-2 fr">
                <i></i>
                <li class="mass-2-1">
                    IP：58.40.195.*                     <span class="fr">留言时间:2017-01-16 15:19:31</span>
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/c91dc-9102.gif" class="fr" style="width:22px; height:9px;position:absolute;bottom:2px;right:4px;"/>
                                        </li>
                <li class="mass-2-2">
                    ·我想详细了解此项目的加盟流程，请与我联系！                 </li>
                                </ul>
        </li>
                <li>
            <dl class="mass-1 fl">
                <dt><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6989f-5450.jpg" alt=""></dt>
                <dt style="margin-bottom: 6px;">
            李总                    </dt>
                <dt>手机版</dt>
            </dl>
            <ul class="mass-2 fr">
                <i></i>
                <li class="mass-2-1">
                    IP：223.104.24.*                        <span class="fr">留言时间:2017-01-15 12:45:33</span>
                                        </li>
                <li class="mass-2-2">
                    我想询问晨阳水漆项目                    </li>
                                </ul>
        </li>
            </ul>
</div>
<script>
$(function(){
var MFoot_lasturl = window.location.href;
var MFoot_fromurl = document.referrer;
$('#MCeng_lasturl_1').val(MFoot_lasturl);
$('#MFoot_lasturl').val(MFoot_lasturl);
$('#MCeng_fromurl_1').val(MFoot_fromurl);
$('#MFoot_fromurl').val(MFoot_fromurl);
});
</script>
<script>var is_login = "unlogin";</script>
<section class="ziXun" id="ljzx"> 
    <div class="wrap" style="color:#e44b46; border-bottom:1px solid #e8eaee; line-height:50px;">我要咨询晨阳水漆加盟项目</div>
    <form action=""  method="post" class="Iwant wrap" id="form_biao">
        <div class="clear">
            <p class="fl current6"><label>姓名</label><input type="text" name="name" id="namedbly" value=""></p>
            <div class="fl you_a">
                <label class="fl current8">性别:</label>
                <label class="fl" id="label5"><i class="icon_sex5 fl icon_sex6"></i>男 &nbsp;</label>
                <label class="fl" id="label6"><i class="icon_sex5 fl "></i>女</label>
                <input type="hidden" name="gender" class="fl" value="0" id="gender"/>
                <input type="hidden" name="target_id" id="target_id" value="137829" >
                <input type="hidden" value="13" name="origin">
                <input type="hidden" value="" name="m_dirname" id="m_dirname">
                <input type="hidden" name="MFoot_lasturl" id="MFoot_lasturl"/>
                <input type="hidden" name="MFoot_fromurl" id="MFoot_fromurl"/>
                <input type="hidden" name="message_num" id="message_num_m" value="1"/>
            </div>
        </div>
        <p><label>手机</label><input type="text" name="phone" id="phonedbly" value="" maxlength="11"></p>
        <p class="liuY"><label>留言</label><input type="text" name="content" id="contentdbly" value="请问投资晨阳水漆所需要的费用有哪些?"></p>
        <p class="current9"><a onclick="return checkMessageInfo_new_bx($(this));">提交留言</a></p>
        <style type="text/css"> 
        .tongShi{padding:14px 0 8px 0px;height:11px;line-height:9px;}
        .tongShi input{margin:2px 12px 0 0;}
        .tongShi p a{color:#e43c01;font-weight:bold; }
        </style>

        
        <div class="tongShi clearfix"> 
        <input type="hidden" name="zhanhui" value="0"/>
            
            <!--<input type="checkbox" name="zhanhui" class="fl" value="1" checked style="margin:5px 12px 0 0" />
            <p class="fl" style="width:90%;font-size:12px;padding-left:0;">已有<i style="color:#e43c01;"></i>人想去<span style="color: #E43C01;font-weight: bold;line-height:20px">第九届中国品牌加盟投资博览会-北京国家会议中心</span>现场看<span style="color: #E43C01;font-weight: bold;">晨阳水漆</span>创业项目(<i style="color:#e43c01;">我也想去</i>)</p>-->        
        </div>
                    <!--<p style="width:100%; padding-left:0px; line-height:25px; background:#f9f9f9; font-size:12px;margin-top:30px">已有<i style="color:#e43c01;"></i>位创业者线上发送意向：在<i style="color:#e43c01;position:relative;">北京<span style="font-size:25px;position:absolute;top:-11px;">.</span>&nbsp;&nbsp;国家会议中心</i>现场去看<i style="color:#e43c01;">投资博览会</i></p>-->
    </form>
</section>
<script type="text/javascript"> 
    $('#label5').click(function(){
        $('#label5 i').toggleClass('icon_sex6');
        $('#label6 i').removeClass('icon_sex6');
        $('#gender').val('0');
    })
    $('#label6').click(function(){
        $('#label6 i').toggleClass('icon_sex6');
        $('#label5 i').removeClass('icon_sex6');
        $('#gender').val('1');
    })
</script>
<script>
    function checkMessageInfo_new_bx(obj){
        if(obj.attr('checkMessageInfo_new') ==1)
        {
            alert('正在提交中。。请稍后');
            return false;
        }
        var name = $("#namedbly").val();
        var content = $("#contentdbly").val();
        var phone = $("#phonedbly").val();
        var m_dirname = $("#m_dirname").val();
        var target_id = $("#target_id").val();
        var origin = $("#origin").val();
        var gender = $("#gender").val();
        var zhanhui = $("input[name='zhanhui']:checked").val();
        if(zhanhui == undefined){
            zhanhui = 0;
        }
        var MFoot_lasturl = $("#MFoot_lasturl").val();
        var MFoot_fromurl = $("#MFoot_fromurl").val();
        var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    
        if(name == '' || name =='如 万先生'){
            alert('姓名不能为空！');
            return false;
        }else if(!regexp.test(content)){
            alert('留言格式不正确！');
            return false ;
        }else if(phone == '' || phone == '如 13111111111'){
            alert('联系方式不能为空！');  
            return false ; 
        }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
            alert('请输入正确的手机号码！');
            return false ;
        }else{
            /*var message_num = $("#message_num_m").val();
            if(message_num == -1){
                $('.safeCheckW').show();
                $('#loading-mask').show();
                return false;
            }
            if(message_num == -2){
                $('.safeTishiW').show();
                $('#loading-mask').show();
                return false;
            }*/
            //$('#form_biao').submit();
            obj.attr('checkMessageInfo_new',1);
            $.ajax({
                type:'get',
                url:'http://liuyan.jmw.com.cn/message/m_messageForMDBLY_temporary.php',
                dataType:'jsonp',
                jsonp:'callback',
                data:{is_login:is_login,name:name,phone:phone,content:content,target_id:target_id,origin:origin,gender:gender,MFoot_fromurl:MFoot_fromurl,MFoot_lasturl:MFoot_lasturl,zhanhui:zhanhui},
                success:function(html){
                    obj.attr('checkMessageInfo_new',0);
                    if(html.status == 'login'){
                        alert('留言成功！');
                        window.location.reload();
                    }else if(html.status == 'unlogin'){
                        $('#first_message_id').val(html.id);
                    }
                }
            });
            if(is_login == 'unlogin'){
                $('#Pline_Message').show();
                $('.gray_mask').show();
                $('#first_telephone').val(phone);
                Auto_trigger();
            }
        }
        
    }
</script>
<style>
.icon_sex5{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }
.icon_sex6{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }

</style>    <!--我要咨询项目 end-->
<!-- 官网活动  start-->
<section class="ziXun"> 
    <h2 class="wrap">晨阳水漆官网活动</h2>
    <div class="hongBao clear"> 
        <a class="hongBao_l fl" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('我想咨询晨阳水漆加盟项目，并领取开店礼包！');$('#origin').val(7);" style="margin-right:10px;widht:47%">

            <dl class="clear"> 
                <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/45ce1-7696.png" alt="" /></dt>
                <dd class="fl">
                    <p>开新店 领礼包</p>
                    <p><span>价值</span>  <span>￥</span>880</p>
                </dd>
            </dl>
            <p class="red_p">中国加盟网赠送</p>
        </a>
        <a class="hongBao_l fr" onclick="$('#Pline_consult').show();$('.gray_mask').show();$('#n_content').val('我想咨询晨阳水漆加盟项目，并领取开店礼包！');$('#origin').val(7);">
            <dl class="clear"> 
                <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/45ce1-7696.png" alt="" /></dt>
                <dd class="fl">
                    <p>开新店 领礼包</p>
                    <p><span>价值</span>  <span>￥</span>1880</p>
                </dd>
            </dl>
            <p class="red_p">中国加盟网赠送</p>
        </a>
    </div>
</section>
<!-- 官网活动  end-->
<style type="text/css">
.youLike dl{ background:#f5f5f5; width:48%; border-radius:10px 10px 0 0; margin-top:14px;}
.youLike dl a dt{ position:relative; }
.youLike dl a dd{ height:30px; line-height:30px; padding-left:3px; box-sizing:border-box; }
.youLike .p1{ font-size:0.85rem; width:100%; height:25px; line-height:25px; padding:0 2px; box-sizing:border-box; overflow:hidden; color:#fff; position:absolute; bottom:0; left:0; background:rgba(0,0,0,.7); }
.youLike .p2{ color:#aeaeae; font-size:0.8rem; }
.youLike .p2 em{ font-size:0.9rem; color:#e40000; font-weight:bold; }
.youLike .p2 .span_money{ margin-left:4px; }
.youLike .p2 .img1{ width:14px; height:14px; margin-top:8px;  }
.youLike dl dt img{ width:100%; height:100%;}
@media (min-width:315px) and (max-width:340px){
    .youLike .p2{ font-size:0.75rem; }
    .youLike .p2 .img2{ margin:1px 0px 0 1px; }
    .youLike .p2 .span_money{ margin-left:1px;}
    .youLike dl a dt{ height:96px; overflow:hidden; }
}
@media (min-width:351px) and (max-width:374px){
    .youLike .p2{ font-size:0.75rem; }
    .youLike .p2 .img2{ margin:1px 3px 0 4px; }
    .youLike .p2 .span_money{ margin-left:4px;}
}
@media (min-width:341px) and (max-width:360px){
    .youLike dl a dt{ height:110px; overflow:hidden; }
}
@media (min-width:361px) and (max-width:385px){
    .youLike dl a dt{ height:115px; overflow:hidden; }
}
@media (min-width:386px) and (max-width:440px){
    .youLike dl a dt{ height:125px; overflow:hidden; }
}
@media (min-width:441px) and (max-width:599px){
    .youLike dl a dt{ height:155px; overflow:hidden; }
}
@media screen and (min-width:600px) {
    .youLike dl a dt{ height:245px; overflow:hidden; }
}
 </style>
<!--猜你喜欢的加盟项目 start-->
<section class="ziXun"> 
    <h2 class="wrap">猜你喜欢的加盟项目</h2>
    <div class="wrap youLike clear"> 
                        <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm137829/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0c59-2746.jpg" alt="" />
                            <p class="p1">晨阳水漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~30</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm87619/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/9ae0f-5385.jpg" alt="" />
                            <p class="p1">防水博士加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm72966/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/1511b-3381.jpg" alt="" />
                            <p class="p1">泰诗尔壁膜加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm144347/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/df0f3-6345.jpg" alt="" />
                            <p class="p1">涂艺宝涂料加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>5~20</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm79341/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/d564b-1823.jpg" alt="" />
                            <p class="p1">樱花涂料加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>3~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm61213/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/e8e61-6500.jpg" alt="" />
                            <p class="p1">多乐士墙面漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm41954/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/82d17-3869.jpg" alt="" />
                            <p class="p1">立邦加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>10~20</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm20631/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0835b-1151.jpg" alt="" />
                            <p class="p1">科天水性漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    <dl class="fl">
                    <a href="http://m.jmw.com.cn/xm149696/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5f9c9-6781.jpg" alt="" />
                            <p class="p1">杜威漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                                    
                 <dl class="fr">
                    <a href="http://m.jmw.com.cn/xm74334/">
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/d1d46-4833.jpg" alt="" />
                            <p class="p1">久居香漆加盟火爆招商</p>
                        </dt>
                        <dd> 
                            <p class="p2 clear">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/73ee7-8473.png" alt="" class="fl img1" />
                                <span class="fl span_money">投资金额:</span>
                                <span><em>1~10</em>万</span>
                            </p>
                        </dd>
                    </a>
                </dl>
                        </div>
    <style>
    .more-icon {
            background: rgba(0, 0, 0, 0) url("http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/5b596-3112.png") no-repeat scroll 0 0 / 12px auto;
            display: inline-block;
            height: 6px;
            margin-left: 8px;
            width: 12px;
        }
    </style>
    <a href="http://m.jmw.com.cn/so/i89/"  style="font-size:12px;color:#62c77b;text-align: center;width: 100%;display:block; height:40px; line-height:40px; margin:auto;">查看更多加盟项目
        <i class="more-icon" id="more_jiameng"></i>
    </a>
</section>
<!--猜你喜欢的加盟项目 end-->
<!-- 创业问答  start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                        <h2 class="fl" style="border-bottom:none;"><a href="http://m.jmw.com.cn/xm137829/bbs/" style="font-size: 16px;color:#e44b46;" title="晨阳水漆创业问答">晨阳水漆创业问答</a></h2>
                    <a href="http://m.jmw.com.cn/xm137829/bbs/" title="更多创业问答" class="fr">更多创业问答</a>
    </div>
    <ul class="wrap answer" style="padding-bottom:7px;"> 
                        <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46969/1/1.html">
                        现在自己开店好，还是做加盟好...                     </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                                    <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46970/1/1.html">
                        加盟费多少？后期有什么扶持？                        </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                                    <li class="clearfix li1" style="height:48px;line-height:48px;">
                    <a style="color:#333;" href="http://bbs.jmw.com.cn/thread-46973/1/1.html">
                        赚钱吗？如何才能经营好？                        </a>
                    <span class="fr">
                        2016-1-26                       </span>
                </li>
                
                </ul>
</section>
<!-- 创业问答  end-->
<!-- 网友点评 start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                    <h2 class="fl" style="border-bottom:none;"><a style="font-size: 16px;color:#e44b46;" href="http://m.jmw.com.cn/xm137829/wangyoudianping/">晨阳水漆网友点评</a></h2>
        <span class="fr">已有<a href="http://m.jmw.com.cn/xm137829/wangyoudianping/">29</a>条点评</span>
                    </div>
    <div class="pingjia wrap"> 
        <div class="img-scroll">
                <span class="prev"></span>
                <span class="next"></span>
                <div class="img-list">
                    <ul class="clear" style="margin-left: 0px;padding-bottom:7px;">
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆后，觉得这个品牌挺不错的，整体感觉不错，很想加盟这个品牌。                              </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="18780" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_18780"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_18780">2</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆了解后觉得品牌整体还不错，打算加盟这个品牌                              </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="18705" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_18705"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_18705">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            觉得晨阳水漆有一定的品质，加盟政策了解了一下，迟迟力度还行，想加盟。                                </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="17758" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_17758"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_17758">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            <li>
                        <div class="pingjia_list">
                            <dl class="pingjia_dl clear">
                                <dt>
                                    <a href="javascript:;">
                                                                            <img class="fl" src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/6ca70-5407.jpg" alt="" />
                                                                            </a>
                                </dt>
                                <dd>
                                    <em class="fl">
                                    <!--意向加盟者-->
                                    意向加盟者                                      </em>
                                    <span class="fr">晨阳水漆怎么样?<i class="xs_5y my_fee4"></i></span>
                                </dd>
                            </dl>
                            <div class="pingjia_1">
                            晨阳水漆，在中国加盟网了解后，通过电话咨询了对方，觉得这个品牌总体感觉还是挺不错...                             </div>
                            <div class="pingjia_2 clear">
                                <p class="fl" onclick="location.href='http://m.jmw.com.cn/m_scoreAction.php?pid=137829'" style="cursor:pointer">
                                  <a href="javascript:;"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/0c91b-9852.png" alt=""></a>
                                  <em></em>
                                  <span onclick="javascript:;" >
                                  我也要点评晨阳水漆加盟                                      </span>
                                </p>
                                <p class="fr" style="margin-right:12px;" target_id="137829" set="up" sid="17632" onclick="hits(this);">
                                <a href="javascript:;" class="zan_a_17632"><img alt="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/bc4bc-3022.png" style="width:16px; height:15px;"></a>
                                    <em id="count_zan_17632">0</em>
                                    <span>赞一下</span>
                                </p>
                            </div>
                        </div>
                    </li>   
                                            </ul>
                </div>
        </div>
    </div>
</section>
<script type='text/javascript'> 
function hits(obj){
    var suid = $(obj).attr('sid');
    var set = $(obj).attr('set');
    var target_id = $(obj).attr('target_id');
        $.ajax({
            type: "GET",
            url:'http://rating.jmw.com.cn/adminSetHits.php',
            data:"sid="+suid+"&set="+set+'&target_id='+target_id,
            dataType:'jsonp',
            cache:false,
            jsonp:"jsonpcallback",
            success: function(html){
            if(html==1){
                if(set=='up'){
                    var info = "支持成功！";
                }else{
                    var info = "反对成功！";
                }
            }else if(html==-1){
                if(set=='down'){
                    var info = "您已经支持过了！";
                }else{
                    var info = "您已经反对过了！";
                }
            }
                $.ajax({
                    type: "GET",
                    async:true,
                    url:'http://m.jmw.com.cn/demo.php', 
                    data:"pid="+target_id+"&suid="+suid,
                    dataType:'html',
                    cache:false,
                    success: function(data){
                        $('#count_zan_'+suid).html(data);
                    } 
                });
                
            }
        });
        
    }
</script>
<script type="text/javascript">
     function DY_scroll(wraper,prev,next,img,speed,or)
     { 
      var wraper = $(wraper);
      var prev = $(prev);
      var next = $(next);
      var img = $(img).find('ul');
      var w = img.find('li').outerWidth(true);
      var s = speed;
      next.click(function()
           {
            img.animate({'margin-left':-w},function()
                      {
                       img.find('li').eq(0).appendTo(img);
                       img.css({'margin-left':0});
                       });
            });
      prev.click(function()
           {
            img.find('li:last').prependTo(img);
            img.css({'margin-left':-w});
            img.animate({'margin-left':0});
            });
      if (or == true)
      {
       ad = setInterval(function() { next.click();},s*1000);
       wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});
      }
     }
     DY_scroll('.img-scroll','.prev','.next','.img-list',3,false);// true为自动播放，不加此参数或false就默认不自动
</script>
<!-- 网友点评 end-->

<!-- 加盟资讯 start-->
<section class="ziXun"> 
    <div class="wen_p wrap clear">
                        <h2 class="fl" style="border-bottom:none;"><a style="font-size: 16px;color:#e44b46;" href="http://m.jmw.com.cn/xm137829/zixun/">晨阳水漆加盟资讯</a></h2>
                    <a href="http://m.jmw.com.cn/xm137829/zixun/" title="更多加盟资讯" class="fr">更多加盟资讯</a>
    </div>
    <!--<ul class="wrap ziXun_ul"> -->
    <ul class="wrap ziXun_ul" style="padding-bottom:7px;"> 
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhppdt/17532416.html">警惕最新加盟骗局 常见六种加盟...</a>
            <span class="fr">2016-04-07</span>
        </li>               
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhkdzn/17532808.html">创业不缺好点子好项目，只缺钱怎...</a>
            <span class="fr">2016-04-14</span>
        </li>               
                    <li class="clearfix li1" style="height:35px;line-height:35px;">
            <a style="color:#333;" href="http://jmw.com.cn/zhkdzn/17532593.html">【干货】开店需知二三事</a>
            <span class="fr">2016-03-23</span>
        </li>               
                </ul>
</section>
<!-- 加盟资讯 end-->
<!-- 中国加盟网创业指导 start-->
<!--
<section class="ziXun"> 
    <h2 class="wrap">中国加盟网创业指导</h2>
    <div class="zhiDao wrap clear"> 
        <dl class="fl">
            <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/b995b-1996.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-杨老师</p>
                <p class="p2">4000500555转70001</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('杨老师');$('#kf_origin').val(8);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
    <div class="zhiDao wrap clear"> 
        <dl class="fl">
            <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/e5ae2-3504.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-苏老师</p>
                <p class="p2">4000500555转70002</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('苏老师');$('#kf_origin').val(10);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
    <div class="zhiDao wrap clear" style="border-bottom:none;"> 
        <dl class="fl">
            <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/295c8-2055.png"/></dt>
            <dd class="fl">
                <p class="p1">创业顾问-秦老师</p>
                <p class="p2">4000500555转70003</p>
            </dd>
        </dl>
        <ul class="fr phone">
            <li><a style="display:block;width:90%;margin:0 auto;" onclick="$('#Pline_consult1').show();$('.gray_mask').show();$('#kf_content').val('我想咨询晨阳水漆加盟项目，求创业顾问指点！');$('#spd_kf').html('秦老师');$('#kf_origin').val(11);"><span class="a2 fl"></span><i style="font-size: 0.6875em;line-height:32px;">在线咨询</i></a></li>
        </ul>
    </div>
</section>
-->
<!-- 中国加盟网创业指导 end-->
<!-- 官网 start-->
    <section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/guanwang/" class="ziXun_a wrap pr" title="晨阳水漆官网"><h2>晨阳水漆官网</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">立即查看企业详情</span><i class="icon10"></i></a>
</section>
    <!-- 官网 end-->
<!-- 品牌图库 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/pinpaituku/" class="ziXun_a wrap pr" title="晨阳水漆品牌图库"><h2>晨阳水漆品牌图库</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">共有48张品牌图片<i class="icon10"></i></a>
</section>
<!-- 品牌图库 end-->
<!-- 成功案例 start-->
<section class="ziXun">
    <a href="http://m.jmw.com.cn/xm137829/chenggonganli/" class="ziXun_a wrap pr" title="晨阳水漆成功案例"><h2>晨阳水漆成功案例</h2><span style="width: 112px;display: inline-block;position: absolute;color: #999999;font-size: 0.625em;right: 0;top: 0;bottom: 0;">已有2922人成功加盟</span><i class="icon10"></i></a>
</section>
 <!-- 成功案例 end-->
<!-- 相关信息 start-->
<section class="message_list">
    <style type="text/css"> 
    @media screen and (max-width:359px){ 
        .zi_message li{ margin-left:2%;}
        .zi_message .li_4{ margin-left:4%;}
    }
    </style>
    <div class="ziXun zi_message clear" style="display:block;">
        <ul class="link">
            <li><h2><a style="color: #e44b46;">晨阳水漆相关</a></h2></li>
            <li>|</li>
            <li><h2><a>热门项目</a></h2></li>
            <li>|</li>
            <li><h2><a>加盟动态</a></h2></li>
        </ul>
    </div>
    <div class="con">
    <div class="jiaMeng_ul clear" style="display:block;">
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/xiangmujieshao/" title="晨阳水漆项目介绍">晨阳...项目介绍</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/youshizhichi/" title="晨阳水漆加盟优势">晨阳...加盟优势</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/jiamengdian/" title="晨阳水漆加盟店铺">晨阳...加盟店铺</a></li>
        </ul>
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/jiamengfeiyong/" title="晨阳水漆项目费用">晨阳...项目费用</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/wangyoudianping/" title="晨阳水漆网友点评">晨阳...网友点评</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/zixun/" title="晨阳水漆加盟资讯">晨阳...加盟资讯</a></li>
        </ul>
        <ul style="width:29%"> 
            <li><a href="http://m.jmw.com.cn/xm137829/liuyan/" title="晨阳水漆在线咨询">晨阳...在线咨询</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/pinpaituku/" title="晨阳水漆品牌图库">晨阳...品牌图库</a></li>
            <li><a href="http://m.jmw.com.cn/xm137829/bbs/" title="晨阳水漆创业问答">晨阳...创业问答</a></li>
        </ul>
    </div>
        <div class="jiaMeng_ul clear" style="display:none;">
                            <ul style="width:100%;">
                                <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm79341/" title="樱花涂料加盟">
                樱花涂料加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6562900/" title="室美伦加盟">
                室美伦加盟                  
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm158545/" title="舒鑫e家加盟">
                舒鑫e家加盟                 
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6589649/" title="空间美贝壳粉生态涂料加盟">
                空间美贝加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm58277/" title="德尔地板加盟">
                德尔地板加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6572154/" title="欧克斯门窗加盟">
                欧克斯门加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm60837/" title="法恩莎瓷砖加盟">
                法恩莎瓷加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm63088/" title="纤之韵-墙衣加盟">
                纤之韵-加盟                 
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm76445/" title="澳普利发门窗加盟">
                澳普利发加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6675488/" title="钛能门业加盟">
                钛能门业加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6581027/" title="荣事达管业加盟">
                荣事达管加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6593563/" title="VOTO沃土加盟">
                VOTO加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6594594/" title="忆江南锦缎泥加盟">
                忆江南锦加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6582517/" title="定荣家加盟">
                定荣家加盟                  
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm81364/" title="佛山照明加盟">
                佛山照明加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6584328/" title="千叶珠宝加盟">
                千叶珠宝加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6674681/" title="展腾投资集团加盟">
                展腾投资加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6597666/" title="能力风暴机器人加盟">
                能力风暴加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm210499/" title="阳光喔作文培训加盟">
                阳光喔作加盟                    
                </a></li>
                                    <li style="float:left; width:24%; margin-right:1%;"><a href="http://m.jmw.com.cn/xm6558704/" title="野马汽车加盟">
                野马汽车加盟                    
                </a></li>
                                </ul>
        </div>
        <!-----加盟动态----->
        <style type="text/css">
        #demo{
        overflow:hidden;
        height:200px;
        width:98%;
        position:relative;
        }
        #demo1{
           width: 98%;
           padding: 0 1%;
           margin: 0 auto;
           font-size: 0.9rem;
           line-height: 1.2rem;
           color: #333;
        }
        #demo1 .league-dynamic{
           border-bottom: 1px dashed #cccccc;
           padding:6px 0;
        }
        #demo1 .league-dynamic font{
           color: #CC0000;
        }
        #demo2{
           width: 98%;
           padding: 0 1%;
           margin: 0 auto;
           font-size: 0.9rem;
           line-height: 1.2rem;
           color: #333;
        }
        #demo2 .league-dynamic{
           border-bottom: 1px dashed #cccccc;
           padding:6px 0;
        }
        #demo2 .league-dynamic font{
           color: #CC0000;
        }
        </style>
        <div  style="display: none;" class="jiaMeng_ul clear scroll_DT ">
            <div id="demo">
                <ul id="demo1">
                <script type="text/javascript" src="http://port.jmw.com.cn/html/zh/zhxm.html"></script>
                <script type="text/javascript">
                  var num=userSort.length;
                  for(var i=0;i<num;i++){
                   document.getElementById("demo1").innerHTML+='<div class="league-dynamic">·来自'+userSort[i]['province']+'的<font onclick='+'dongtai_message(28,16,"我想入驻中国加盟网，成为企业会员，展示产品，推广项目")'+'>'+userSort[i]['sname']+'</font>正在寻找<span ></span>行业的创业项目，欢迎相关品牌自荐</div>';
                  }
                </script>
                </ul>
                <div id="demo2"></div>
            </div>
        </div>
        <script>
        function dongtai_message(target_id,origin,message){
            var target_id = target_id;
            var origin = origin;
            var message = message;

            $('#z_title').html('我要查看');
            $('#z_target_id').val(target_id);
            $('#z_origin').val(origin);
            $('#z_content').val(message);
            
            $('.black-all6').show();
            
        }
        </script>
        <script type="text/javascript"> 
        var speed=40 
        window.onload=function(){
        var demo=document.getElementById("demo"); 
        //var gundong=document.getElementById("gundong"); 
        var demo2=document.getElementById("demo2"); 
        var demo1=document.getElementById("demo1"); 
        demo2.innerHTML=demo1.innerHTML 
        function Marquee(){ 
        if(demo.scrollTop>=demo1.offsetHeight){
        demo.scrollTop=0; 
        }
        else{ 
        demo.scrollTop=demo.scrollTop+1;
        } 
        } 
        var MyMar=setInterval(Marquee,speed) 
        //gundong.onmouseover=function(){clearInterval(MyMar)} 
        //gundong.onmouseout=function(){MyMar=setInterval(Marquee,speed)} 
        }
        </script>
        <div class="black-all6" style="display: none;">
        <form action="http://liuyan.jmw.com.cn/message/FirstMessage.php" method="post" id="form_zhao">
            <input type="hidden" name="message_num" id="message_num" value="1"/>
            <ul class="all6">
                <li class="all6-title">
                    <span id="z_title"></span>
                </li>
                <li class="all6-name">
                    <label><span style="color:red;margin-right:3px;">*</span>项目名:</label>
                    <input type="text" name="name" id="z_name" value="如 驾校网" onfocus="if(this.value=='如 驾校网'){this.value=''}" onblur="if(this.value==''){this.value='如 驾校网'}"/>
                </li>
                <li class="all6-name">
                    <label><span style="color:red;margin-right:3px;">*</span>手&nbsp;&nbsp;&nbsp;机:</label>
                    <input type="text" name="phone" id="z_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11"/>
                </li>
                 <li class="all6-liuyan">
                    <label><span style="color:red;margin-right:3px;">*</span>留&nbsp;&nbsp;&nbsp;言:</label>
                    <textarea class="fr" name="contant" id="z_content"></textarea>
                </li>
                <li class="all6-button">
                    <a onclick="$('.black-all6').hide();" style="color:#ccc;border-right:1px solid #e8e8e8;box-sizing: border-box;" >取消</a>
                    <a onclick="return zhao_checkMessage();">确定</a>
                </li>
            </ul>
            <input type="hidden" name="target_id" id="z_target_id" value="" >
            <input type="hidden" value="" name="origin" id="z_origin">
            <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
            <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
            <input type="hidden" name="message_num" id="message_num_m" value="1"/>
        
        </form>
        </div>
        <style>
        /*弹框开始*/
        .black-all6{
           display: none;
           width: 100%;
           height: 100%;
           background: rgba(0,0,0,.5);
           position: fixed;
           z-index: 9998;
           top:0;
           left:0;
        }
        .all6{
            background: #ffffff none repeat scroll 0 0;
            border-radius: 20px;
            height: 235px;
            left: 50%;
            margin-left: -135px;
            margin-top: -117px;
            position: absolute;
            top: 50%;
            width: 270px;
        }
        .all6-title {
            border-bottom: 1px solid #e8e8e8;
            color: #333333;
            font-size: 17px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            width: 100%;
        }
        .all6-name {
            border-bottom: 1px solid #e8e8e8;
            height: 42px;
            line-height: 42px;
            width: 100%;
            overflow:hidden; 
        }
        .all6-liuyan, .all6-name label {
            margin-left: 21px;
        }
        .all6-name input {
            border: medium none;
            height: 23px;
            width: 168px;
            color:#999;
        }
        .all6-liuyan {
            height: 51px;
            margin-top: 15px;
        }
        .all6-liuyan textarea {
            border: medium none;
            color: #999;
            font-family: "Microsoft YaHei";
            font-size: 12px;
            height: 48px;
            line-height: 20px;
            margin-top: -2px;
            vertical-align: middle;
            width: 168px;
            margin-right:12px;
        }
        .all6-button {
            border-top: 1px solid #e8e8e8;
        }
        .all6-button a {
            color: #347ae2;
            display: block;
            float: left;
            line-height: 40px;
            text-align: center;
            width: 134px;
        }
        </style>
        <!-----加盟动态----->
    </div>
</section>
<!-- 相关信息 end-->
<script>
    //JQuary 方法做选项卡

    $(function(){
        $(".link a").click(function(){
            $(".con .jiaMeng_ul").css("display","none");
            $($(".con .jiaMeng_ul")[$(this).index(".link a")]).css("display","block");
        })
    })
</script>
    <!-- 标项页创业指导 在线咨询 -->
<div class="Pline_consult" id="Pline_consult1" style="display:none;"> 
<form action="" method="post" id="form2">
    <p class="P_title1">晨阳水漆免费咨询</p>
    <p class="ZJ_title2">你好，我是中国加盟网创业顾问<span id="spd_kf">cindy</span>，请问有 什么可以帮到您的？</p>
    <ul class="clear"> 
        <li>
            <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
            <input type="text" class="text" name="name" id="kf_name" placeholder="请输入姓名" value=""  maxlength="6"/>
            <p class="li_sex fr">&nbsp;&nbsp;性别:
            <label id="label3" style="display:inline-block;"><i class="icon_sex3 fl icon_sex4"></i>男 &nbsp;</label>
            <label id="label4" style="display:inline-block;"><i class="icon_sex3 fl "></i>女</label>
            </p>
        </li>
        <li>
            <span><em class="em1">*</em>手机<em class="em2">:</em></span>
            <input type="text" class="text" name="phone" id="kf_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:40%"/>
        </li>
        <li>
            <span class="fl"><em class="em1">*</em>留言<em class="em2">:</em></span>
            <textarea name="content" id="kf_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea>
        </li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult1').hide();$('.gray_mask').hide();">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return checkMessageInfo_new_kf($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="kf_sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="" name="origin" id="kf_origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_m" value="1"/>
</form>
</div>
<script type="text/javascript"> 
    $('#label3').click(function(){
        $('#label3 i').toggleClass('icon_sex4');
        $('#label4 i').removeClass('icon_sex4');
        $('#kf_sex').val('0');
    })
    $('#label4').click(function(){
        $('#label4 i').toggleClass('icon_sex4');
        $('#label3 i').removeClass('icon_sex4');
        $('#kf_sex').val('1');
    })
</script>
<script>
function checkMessageInfo_new_kf(obj){
    if(obj.attr('checkMessageInfo_new_kf') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#kf_name").val();
    var message = $("#kf_content").val();
    var phone = $("#kf_phone").val();
    var sex = $("#kf_sex").val();
    var target_id = $("#target_id").val();
    var origin = $("#kf_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(content == '' ){
        alert('留言内容不能为空！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('checkMessageInfo_new_kf',1);
        $.ajax({
            async:false,
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('checkMessageInfo_new_kf',0);
                if(html.status == 'login'){
                    $('#Pline_consult1').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        
        if(is_login == 'unlogin'){
            $('#Pline_consult1').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }

    }   
}
</script>
<style>
.icon_sex3{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }
.icon_sex4{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }

.kf-all{
display: none;
width: 100%;
height: 100%;
background: rgba(0,0,0,.5);
position: fixed;
z-index: 1000;
top:0;
left:0;
}
.kf{
width: 270px;
height: 334px;
border-radius: 20px;
background: #ffffff;
position: absolute;
top:50%;
left:50%;
margin-top: -167px;
margin-left: -135px;
}
.kf-title{
width: 100%;
text-align: center;
height: 37px;
line-height: 37px;
border-bottom: 1px solid #E8E8E8;
font-size: 17px;
color: #333333;
}
.kf-name{
height: 33px;
width: 100%;
line-height: 33px;
border-bottom: 1px solid #E8E8E8;
}
.kf-liuyan,.kf-name label{
margin-left: 21px;
margin-right: 6px;
}
.kf-name input{
height: 23px;
width: 180px;
border: none;
color:#999;
}
.kf-liuyan{
height: 51px;
margin-top: 15px;

}
.kf-liuyan textarea {
margin-top: -4px;
vertical-align: middle;
width: 170px;
height: 50px;
line-height: 20px;
color: #999;
border: none;
font-size: 0.6875rem;
font-family: "Microsoft YaHei";
}
.kf-button{
border-top: 1px solid #E8E8E8;
}
.kf-button a{
display: block;
float: left;
width: 134px;
color: #347AE2;
line-height: 40px;
text-align: center;
}
</style>
<script>
    $('#tel_label3').click(function(){
        $('#tel_label3 i').toggleClass('icon_tel_sex4');
        $('#teo_label4 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('0');
    })
    $('#teo_label4').click(function(){
        $('#teo_label4 i').toggleClass('icon_tel_sex4');
        $('#tel_label3 i').removeClass('icon_tel_sex4');
        $('#tel_sex').val('1');
    })
    
function check_is_login2(pid,ispay,paystate,origin,brand_name){
if(ispay==1 && paystate==2){
    $('.toggle_shu1').hide();
    $('.chaKan').hide();
    $('.toggle_shu2').show();
}else{
    if(is_login == 'login'){
        $('.toggle_shu1').hide();
        $('.chaKan').hide();
        $('.toggle_shu2').show();
    }else if(is_login == 'unlogin'){
        $('.inquire_tele').show();
        $('.gray_mask').show(); 
        $('#tel_content').val('我想查看'+brand_name+'项目的加盟电话，了解项目情况，请尽快联系我！');
        $('#tel_origin').val(origin);
    }
}   
}

function see_tel(obj){
    if(obj.attr('see_tel') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#tel_name").val();
    var message = $("#tel_content").val();
    var phone = $("#tel_phone").val();
    var sex = $("#tel_sex").val();
    var target_id = $("#tel_target_id").val();
    var origin = $("#tel_origin").val();
    if(origin == 27){
        var tel='tel';
    }
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(content == '' ){
        alert('留言内容不能为空！');
        return false ;
    }else{
        obj.attr('see_tel',1);
        $.ajax({
            async:false,
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('see_tel',0);
                if(html.status == 'login'){
                    $('.inquire_tele').hide();
                    $('.gray_mask').hide();
                }else if(html.status == 'unlogin'){
                    
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('.inquire_tele').hide();
            $('#Pline_Message').show();
            if(tel == 'tel'){
                $('#tel').val('tel');   
            }
            $('#first_telephone').val(phone);
            Auto_trigger();
        }

    }   
}
</script>

<a class="returntop" href="#top" style="display: none;"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/41560-7162.png"></a>
<script>
    $(document).scroll(function() {
        var top = $(document).scrollTop();
        if(top==0){
            $(".returntop").hide();
        }else{
            $(".returntop").show();
        }
    })
    $(".returntop").click(function(){
        $({aa:$(window).scrollTop()}).animate({aa:0},{duration:1200,step:function(){
            $(window).scrollTop(this.aa);
        }})
    })
</script>

<a  onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 14px; padding-left: 13px; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);">在线<br />咨询</a>
<!-- 项目页底部定位 start -->
            <!-- 公共底部 start -->
<footer class="copyRight"> 
    <p class="copy-1">
        <a href='http://m.jmw.com.cn/'>回到首页</a><i></i>
        <!--<a href="http://pc.jmw.com.cn">电脑版</a><i></i>-->
        <a href='javaScript:;'  class="wy_download" id="downLoad"  onClick="func()">APP下载</a><i></i>
        <a href='http://m.jmw.com.cn/usercenter/register.php'>注册</a><i></i>
        <a href='http://m.jmw.com.cn/usercenter/login.php'>登录</a>
    </p>
    <p class="copy-2"><span>Copyright©2004-2016 JMW.COM.CN  京ICP证：040787号</span></p>
</footer>
<!-- 公共底部 end -->
<script type="text/javascript">
function func(){
var u = navigator.userAgent, app = navigator.appVersion;
var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    if  (isAndroid == true){
        document.getElementById("downLoad").href="http://m.jmw.com.cn/app/android/中国加盟网.apk";
    }else if (isiOS == true){
        document.getElementById("downLoad").href="https://appsto.re/cn/ukd68.i";
    }else{
        alert("请在手机端下载app");
    }
}
</script>  
<style>
.safeCheckW{
display: none;
width: 100%;
height: 100%;
background: rgba(0,0,0,.5);
position: fixed;
z-index: 9998;
top:0;
left:0;
}
.message{
width: 90%;
height: 294px;
border-radius: 20px;
background: #ffffff;
position: absolute;
top:50%;
left:5%;
margin-top: -147px;
}
.message-title{
width: 100%;
text-align: center;
height: 40px;
line-height: 40px;
border-bottom: 1px solid #E8E8E8;
font-size: 17px;
color: #333333;
}
.message-name{
height: 36px;
line-height: 36px;
margin: 14px 0;
}
.message-liuyan,.message-name label{
margin-left:5%;
display: inline-block;
width: 20%;
}
.message-name input{
height: 34px;
width : 32%;
}
.message-button{
border-top: 1px solid #E8E8E8;
}
.message-button a{
display: block;
float: left;
width: 50%;
color: #3478E3;
line-height: 51px;
text-align: center;
}
#loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); }
.code_color{width: 32%;height: 34px;text-align:center;line-height: 34px;background: #FF9D18;color: #ffffff;display: inline-block;float:right;margin:2px 3% 0 2%;}
</style>
<!--弹框-->
<div class="safeCheckW">
    <ul class="message">
        <li class="message-title">
            安全验证
        </li>
        <li  style="padding: 10px 21px;border-bottom: 1px solid #E8E8E8;color: #666;line-height: 1.4rem;">你今天已经连续留言2条，为了保障你的账户安全，请输入手机验证码或修改手机号码</li>
        <li class="message-name">
            <label>手机号:</label>
            <input type="text" name="telephone" id="telephone" value="" readonly="readonly">
        </li>
        <li class="message-name">
            <label>验证码:</label>
            <input type="text" name="code" id="code" value="">
            <a id="checkBtn" class="code_color">发送短信验证码</a>
        </li>
        <li class="message-button">
            <a onclick="$('.safeCheckW').hide();$('#loading-mask').hide();" style="color: #666;box-sizing: border-box;border-right: 1px solid #E8E8E8;">取消</a>
            <a class="button2">确定</a>
        </li>
    </ul>
</div>
<script type="text/javascript"> 
//验证码变化
/*function t1(){
    $("#vailcode").attr("src","http://m.jmw.com.cn/code.php?rand"+Math.random());
    var session_code = context.Session["Checkcode"].ToString();
    alert(session_code);
    return false;
}*/
var fal = true;
$('#checkBtn').click(function(){
    if(fal == true){
        var telephone = $("#telephone").val();
        $.ajax({
            type:'get',
            async:false,
            url:'http://person.jmw.com.cn/sendMessagecode.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{'telephone':telephone},
            success:function(html){
                if(html == 1){
                    fal = false;
                    var curCount = 90;
                    $(".code_color").css('background','#c3c3c3');
                     //$("#checkBtn").attr("disabled", "true");
                     $("#checkBtn").html("" + curCount + "秒倒计时");
                     //timer处理函数
                    function SetRemainTime() {
                        
                        if (curCount == 0) {                
                            window.clearInterval(InterValObj);//停止计时器
                            //$("#checkBtn").removeAttr("disabled");//启用按钮
                            $(".code_color").css('background','#FF9D18');
                            $("#checkBtn").html("重新发送");
                            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效   
                            fal = true;
                        }
                        else {
                            curCount--;
                            //$("#checkBtn").attr("disabled", "false");
                            $("#checkBtn").html("" + curCount + "秒倒计时");
                        }
                    }
                    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
                }       
            }
        })
    }
})

$('.button2').click(function(){
    var code = $('#code').val();
    if(code != ''){
        $.ajax({
            type:'get',
            async:false,
            url:'http://person.jmw.com.cn/m_code_check.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{'code':code},
            success:function(html){
                if(html == 1){
                    $("input[name=message_num]").val(1);
                    $('.safeCheckW').hide();
                    $('#loading-mask').hide();
                }else{
                    alert('验证码失效或不正确！');
                    $('.safeCheckW').hide();
                    $('#loading-mask').hide();
                }       
            }
        })
    }else{
        alert('验证码不能为空！');
        return false;
    }
    
})
</script>
<style type="text/css"> 
.clear{ zoom:1;clear:both;}
.clear:after{content:""; clear:both; height:0; line-height:0; display:block; visibility:hidden;}
.fl{float:left;display:inline;}
.fr{float:right;display:inline;}
#loading-mask{position:fixed;left:0;top:0;width:100%;height:100%;z-index:1005;background:rgba(0,0,0,.5); }
.safeTishiW{ width:94.4%; background:rgba(0,0,0,.3); position:fixed; top:25%; left:0; right:0; margin:0 auto; border-radius:5px; padding:0.9% 0; z-index:1100;}
.safeTishiL{ width:98%; margin-left:1%; }
.safeTishiL .p1{ background:#e44b46; height:28px; color:#fff; }
.safeTishiL .p1 .span_safe{ font-size:0.875rem; padding-left:7.4%; box-sizing:border-box; line-height:28px; }
.safeTishiL .p1 .span_close{ font-size:1.375rem; padding-right:1.8%; box-sizing:border-box; }
.safeTishiL_bottom{ background:#f3f4f7; padding:7.4%; box-sizing:border-box; font-size:1.0rem; }
.safeTishiL_bottom .ul1{ padding-bottom:15px; line-height:30px; font-weight:bold; padding-left:7.4%; }
.safeTishiL_bottom .button_sure{ width:30%; text-align:center; height:35px; line-height:35px; font-size:0.85rem; margin:auto; display:block; background:#e44b46; border:none; color:#fff; }
</style>
<div id="loading-mask" style="display:none;"></div>
<div class="safeTishiW" style="display:none;"> 
    <div class="safeTishiL"> 
        <p class="p1 clear">
            <span class="fl span_safe">安全提示</span>
            <span class="fr span_close">×</span>
        </p>
        <div class="safeTishiL_bottom"> 
            <ul class="ul1"> 
                <li>您今天留言次数已满<font class="font1">20</font>条,</li>
                <li>为了您的账号安全,</li>
                <li>请您明天继续.</li>
            </ul>
            <a class="button_sure" />确定</a>
        </div>
    </div>
</div>
<script>
    $('.span_close').click(function(){
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })
    $('.button_sure').click(function(){
        $('.safeTishiW').hide();
        $("#loading-mask").hide();
    })
</script>
        <!---留言限制条件 end-->
        <!-- 标项页立即咨询 -->
        <div class="gray_mask" style="display:none;"></div>
        <div class="Pline_consult" style="display:none;"id="online_consult"> 
            <div class="ZJ_title1">
                <p class="span1">专家咨询</p>
                <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p>
            </div>
                            <form action="" method="post">
                <input type="hidden" name="message_num" id="message_num_m" value="1"/>
                <ul class="clear"> 
                    <li>
                        <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
                        <input type="text" class="text" style="width:75%;" name="name" id="zx_name" placeholder="请输入姓名" value="" maxlength="6"/>
                    </li>
                    <li>
                        <span><em class="em1">*</em>手机<em class="em2">:</em></span>
                        <input type="text" class="text" style="width:75%;" name="phone" id="zx_phone" placeholder="请输入手机号" value="" maxlength="11" />
                    </li>
                    <li>
                        <span class="fl" style="position:relative;top:16px;"><em class="em1">*</em>留言<em class="em2">:</em></span>
                        <textarea name="content" id="zx_contents" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些？</textarea>
                    </li>
                    <li class="li5 clear"> 
                        <a href="javaScript:;" class="fl a1" onclick="$('#online_consult').hide();$('.gray_mask').hide();">取消</a>
                        <a href="javaScript:;" class="fr a2" onclick="return message_check_zx($(this));">确定</a>
                    </li>
                </ul>
                <input type="hidden" name="sex" value=""/>
                <input type="hidden" name="target_id" id="target_id" value="137829"/>
                <input type="hidden" name="origin" value="" id="zj_origin"/>
                <input type="hidden" value="" name="m_dirname">
                <input type="hidden" name="MCeng_lasturl" id="MCeng_lasturl"/>
                <input type="hidden" name="MCeng_fromurl" id="MCeng_fromurl"/>
            </form>
        </div>   
        <script>
function message_check_zx(obj){
    if(obj.attr('doing') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#zx_name").val();
    var message = $("#zx_contents").val();
    var phone = $("#zx_phone").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    var target_id = $("#target_id").val();
    var origin = $("#zj_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(message)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        //obj.html('提交中。。');
        obj.attr('doing',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                //obj.show();
                obj.attr('doing',0);
                if(html.status == 'login'){
                    $('#online_consult').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('#online_consult').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
   <!--<ul class="xm_footer">
            <li class="xm_ico1 fl"><a href="javascript:;" onclick="addTelForWap(137829,1,'4000500555,95542');"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/dddd7-9769.png">免费通话</a></li>
            <li class="xm_ico2 fl"><a onclick="$('.black-all').show();$('#n_content').val('请问晨阳水漆企业电话是多少？');$('#origin').val(9);"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/dcf8d-7090.png"><span>索要企业电话</span></a></li>
    <li class="xm_ico3 fl"><a onclick="$('.tm_bg').show()&amp;&amp;$('.J-extent').show();$('#zj_origin').val('1');$('#contents').val('请问投资晨阳水漆所需要的费用有哪些?');"><span>在线咨询</span></a></li>
</ul>-->
<!-- 项目页底部定位 stop -->
<style>
.xm_footer {
position: fixed;
bottom: 0;
left: 0;
z-index: 200;
width: 100%;
height: 48px;
background: #f9f9f9;
}
.xm_footer .xm_ico1,.xm_footer .xm_ico2{border-right: 1px solid #E0E1E5;box-sizing: border-box;border-top: 1px solid #e0e1e5;}
.xm_ico1,.xm_ico2{width: 30%;height:100%;position: relative;}
.xm_footer .xm_ico3{width: 40%;background: #E44B46;color: #ffffff;}
.xm_footer li a {
display: block;
color: #666666;
text-align: center;
font-size: 0.725em;
line-height: 66px;
}
.xm_footer .xm_ico3 a{color: #ffffff;font-size: 0.8em;line-height: 48px;}
.xm_footer .xm_ico1 img,.xm_footer .xm_ico2 img{width: 15px;height: 15px;display: block;position: absolute;top:6px;left:50%;margin-left: -7.5px;}
.icon_sex1{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/ff93c-8791.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;}
.icon_sex2{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; margin-top: 20px!important;}
.icon_liu_sex2{ background:url('http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/fe50e-9848.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:11px 6px 0 0; }

</style>
<!-- 标项页讯加盟低价 -->
<link rel="stylesheet" href="http://60.205.145.0/filesys/spider/pages/asset/platj/m/css/235a4-6274.css" />
<div class="gray_mask" style="display:none;"></div>
<div class="Pline_consult" style="display:none;"id="Pline_consult"> 
<form action="" method="post" id="form1">
    <p class="P_title1" id="P_title1">加盟咨询</p>
    <ul class="clear"> 
        <li>
            <span><em class="em1">*</em>姓名<em class="em2">:</em></span>
            <input type="text" class="text" name="name" id="n_name" placeholder="请输入姓名" value=""  maxlength="6"/>
            <p class="li_sex fr">&nbsp;&nbsp;性别:
            <label id="label1" style="display:inline-block;"><i class="icon_sex1 fl icon_sex2"></i>男 &nbsp;</label>
            <label id="label2" style="display:inline-block;"><i class="icon_sex1 fl "></i>女</label>
            </p>
        </li>
        <li>
            <span><em class="em1">*</em>手机<em class="em2">:</em></span>
            <input type="text" class="text" style="width:75%;" name="phone" id="n_phone" placeholder="请输入手机号" value="" maxlength="11" />
        </li>
        <li>
            <span class="fl" style="position: relative; top: 16px;"><em class="em1">*</em>留言<em class="em2">:</em></span>
            <textarea name="content" id="n_content" cols="30" rows="10">请问投资晨阳水漆所需要的费用有哪些?</textarea>
        </li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('#Pline_consult').hide();$('.gray_mask').hide();$('#P_title1').html('加盟咨询')">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return check_Standard($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="" name="origin" id="origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_f" value="1"/>
</form>
</div>

<script type="text/javascript"> 
    $('#label1').click(function(){
        $('#label1 i').toggleClass('icon_sex2');
        $('#label2 i').removeClass('icon_sex2');
        $('#sex').val('0');
    })
    $('#label2').click(function(){
        $('#label2 i').toggleClass('icon_sex2');
        $('#label1 i').removeClass('icon_sex2');
        $('#sex').val('1');
    })
</script>
<script>
function check_Standard(obj){
    if(obj.attr('check_Standard') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#n_name").val();
    var message = $("#n_content").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    var phone = $("#n_phone").val();
    var sex = $("#sex").val();
    
    var target_id = $("#target_id").val();
    var origin = $("#origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    
    if(name == ''){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(message)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('check_Standard',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:message,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('check_Standard',0);
                if(html.status == 'login'){
                    $('#Pline_consult').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                }
            }
        });
        if(is_login == 'unlogin'){
            $('#Pline_consult').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
<!--新增弹框  end-->

<!-- 我要留言 -->
<style type="text/css"> 
    .gray_mask{ background:rgba(0,0,0,.4); position:fixed; top:0; left:0; width:100%; height:100%; z-index:990; display:none; }
    .I_speak{ width:100%; height:41px; background:#404042; margin-top:4px; position:fixed; bottom:0; z-index:990;}
    .I_speak .li_left{ width:17.5%; background:#252724; color:#fff; height:41px; text-align:center; font-size:0.75rem; position:relative; }
    .I_speak .li_left i{ position:absolute; display:block; width:17px; height:17px; top:1px; right:14%; }
    .I_speak .li_left p{ margin-top:6px; line-height:16px; }
    .I_speak .li_center{ width:62%; }
    .I_speak .li_center input{ width:91.5%; height:31px; margin:4px auto; background:#e4e1e1; color:#a5a5a5; border:none; border-radius:6px; padding-left:13px; box-sizing:border-box; display:block; }
    .I_speak .li_right{ width:16%; background:#169e16; height:31px; border-radius:5px; margin-top:4px; }
    .I_speak .li_right dl{ margin:auto; width:81%; }
    .I_speak .li_right dt{ width:15px; height:15px; margin-top:8px ; }
    .I_speak .li_right dd{ font-size:0.75rem; color:#fff; line-height:14px; margin-left:6px;margin-top:2px;}
    @media (min-width:320px) and (max-width:365px){
        .I_speak .li_right dd{ margin-left:2px;margin-top:2px;}
    }
    @media screen and (min-width:384px){
        .I_speak .li_right dl{ margin:auto; width:74%; }
    }  
    
    .Pline_consultL{ background:#fff; width:83%; position:fixed; left:8.5%; top:20%; border-radius:10px; z-index:1305; display:none; }
    .Pline_consultL .P_title1{ height:45px; line-height:45px; text-align:center; border-bottom:1px solid #e8e8e8; font-size:0.95rem; }
    .Pline_consultL ul li{ line-height:42px; padding:0 3%; border-bottom:1px solid #e8e8e8; font-size:0.8rem;}
    .Pline_consultL ul li .text{ width:33%; height:28px;font-size:0.85rem; color:#999; box-sizing:border-box; padding-left:3px; margin-left:3px; border:medium none; }
    .Pline_consultL ul li .button{ width:32%; height:28px; border:1px solid #e10000; color:#e10000; line-height:28px; text-align:center; background:#fff; margin-top:8px; padding:0; border-radius:2px; }
    .Pline_consultL .li_sex{ font-size:0.8rem; margin-right:8px; }
    .Pline_consultL ul li span .em1{ float:left; color:#e10000; margin-right:2px;}
    .Pline_consultL ul li textarea{ height:40px;  font-family: "微软雅黑";width:81%;font-size:0.85rem; margin-left:3px; margin-top:10px; line-height:20px; color:#999; border:medium none; }
    @media screen and (max-width:330px){
        .Pline_consultL ul li textarea{ width:79%; }
    }
    .Pline_consultL ul .li5{ height:46px; line-height:46px; border-bottom:none;}
    .Pline_consultL ul li a{ text-align:center; width:50%; display:inline-block; font-size:0.95rem; }
    .Pline_consultL ul .a1{ border-right:1px solid #e8e8e8; box-sizing:border-box; color:#cdcdcd; }
    .Pline_consultL ul .a2{ color:#4283e4; }
</style>
<script language="javascript" type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/webcall.js"></script>
<script language="javascript" type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/js/iscroll.js"></script>
    <ul class="I_speak clear"> 
    <li class="fl li_left" onclick="$('.Pline_consultL').show();$('.gray_mask').show();"><p>我要<br />留言</p><i><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/2de72-9761.png" alt="" /></i></li>
    <li class="fl li_center"><input type="text" name="phone" id="si_mobel" value="输入您的电话:138******10" onfocus="if(this.value=='输入您的电话:138******10'){this.value=''}" onblur="if(this.value==''){this.value='输入您的电话:138******10'}" maxlength="11"/></li>
    <li class="fl li_right"  onclick="si_Webcall();return false;">
        <dl class="clear">
            <dt class="fl"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/m/img/00698-5306.png" alt="" /></dt>
            <dd class="fl">在线<br />咨询</dd>
            <input type="hidden" name="tid" id="si_tid" value="137829">
            <input type="hidden" name="cname" id="si_cname" value="晨阳水漆">
        </dl>
    </li>
</ul>

<div class="gray_mask" ></div>
<div class="Pline_consultL" style="display:none; z-index:1400;"> 
    <form action="" method="post" id="form_liu">
    <p class="P_title1" style="color:#333;">留言咨询</p>
    <ul class="clear"> 
        <li><span><em class="em1">*</em>姓名&nbsp;:</span><input type="text" class="text" name="name" id="liu_name"  value="如 万先生" onfocus="if(this.value=='如 万先生'){this.value=''}" onblur="if(this.value==''){this.value='如 万先生'}"/>
            <p class="li_sex fr" style="position:absolute;top:39px;height:35px;">性别&nbsp;:
            <label id="man" for="man" style="margin-right:10px; "><i class="icon_sex1 icon_liu_sex2" style="display:inline-block;"></i>男</label>
            <label id="woman" for="woman"><i class="icon_sex1 " style="display:inline-block;"></i>女</label>
            </p>    
        </li>
        <li style="clear:both;"><span><em class="em1">*</em>手机&nbsp;:</span><input type="text" class="text" style="width:80%;" name="phone" id="liu_phone" value="如 13111111111" onfocus="if(this.value=='如 13111111111'){this.value=''}" onblur="if(this.value==''){this.value='如 13111111111'}" maxlength="11"/></li>
        <li><span class="fl"><em class="em1">*</em>留言&nbsp;:</span><textarea name="contant" id="liu_content" cols="30" rows="10">我想咨询晨阳水漆加盟费用最低多少钱?</textarea></li>
        <li class="li5 clear"> 
            <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consultL').hide();$('.gray_mask').hide();">取消</a>
            <a href="javaScript:;" class="fr a2" onclick="return message_liuyan($(this));">确定</a>
        </li>
    </ul>
    <input type="hidden" name="gender" class="fl" id="liu_sex" value="0">
    <input type="hidden" name="target_id" id="target_id" value="137829" >
    <input type="hidden" value="22" name="origin" id="liu_origin">
    <input type="hidden" value="" name="m_dirname">
    <input type="hidden" name="MFoot_lasturl" id="MCeng_lasturl_1"/>
    <input type="hidden" name="MFoot_fromurl" id="MCeng_fromurl_1"/>
    <input type="hidden" name="message_num" id="message_num_f" value="1"/>
    </form>
</div>
<script type="text/javascript"> 
    $('#man').click(function(){
        $('#man i').toggleClass('icon_liu_sex2');
        $('#woman i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('0');
    })
    $('#woman').click(function(){
        $('#woman i').toggleClass('icon_liu_sex2');
        $('#man i').removeClass('icon_liu_sex2');
        $('#liu_sex').val('1');
    })
</script>
<script>
function message_liuyan(obj){
    if(obj.attr('message_liuyan') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var name = $("#liu_name").val();
    var content = $("#liu_content").val();
    var phone = $("#liu_phone").val();
    var sex = $("#liu_sex").val();
    var target_id = $("#target_id").val();
    var origin = $("#liu_origin").val();
    var MCeng_lasturl_1 = $("#MCeng_lasturl_1").val();
    var MCeng_fromurl_1 = $("#MCeng_fromurl_1").val();
    var regexp = /^([a-zA-Z0-9]|[\u4e00-\u9fa5]|【){1}([a-zA-Z0-9]|\s|\n|-|,|\.|。|\！|!|，|\?|？|【|】|—|[\u4e00-\u9fa5]){2,199}$/;
    
    if(name == '' || name =='如 万先生'){
        alert('姓名不能为空！');
        return false;
    }else if(sex == '' ){
        alert('请选择性别！');
        return false ;
    }else if(phone == '' || phone == '如 13111111111'){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(!regexp.test(content)){
        alert('留言格式不正确！');
        return false ;
    }else{
        /*var message_num = $("#message_num_m").val();
        if(message_num == -1){
            $('.safeCheckW').show();
            $('#loading-mask').show();
            return false;
        }
        if(message_num == -2){
            $('.safeTishiW').show();
            $('#loading-mask').show();
            return false;
        }*/
        obj.attr('message_liuyan',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message.php',
            dataType:'jsonp',
            jsonp:'callback',
            data:{is_login:is_login,name:name,telephone:phone,message:content,target_id:target_id,gender:sex,origin:origin,MFoot_lasturl:MCeng_lasturl_1,MFoot_fromurl:MCeng_fromurl_1},
            success:function(html){
                obj.attr('message_liuyan',0);
                if(html.status == 'login'){
                    $('.Pline_consultL').hide();
                    $('.gray_mask').hide();
                    alert('留言成功！');
                    window.location.reload();
                }else if(html.status == 'unlogin'){
                    $('#first_message_id').val(html.id);
                    
                }
            }
        });
        if(is_login == 'unlogin'){
            $('.Pline_consultL').hide();
            $('#Pline_Message').show();
            $('#first_telephone').val(phone);
            Auto_trigger();
        }
    }   
}
</script>
<!-------m站标页底部浮层类似400回拨------->
<script>
function  si_Webcall(){
var lasturl = window.location.href;
var fromurl = document.referrer;
var com_id = jQuery('#si_tid').val();
var tel_name;var tel_sex;

cname = jQuery("#si_cname").val();
cn_num = jQuery('#si_mobel').val();
if(cn_num == '输入您的电话:138******10' || cn_num == '')
{
    alert('请填写您的联系方式！');return false;
}else{
    if(!cn_num.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)){
        alert('请填写您正确的联系方式！');return false;
    }
}   
if(com_id != '' && cn_num != 0)
{
    $.ajax({
        type:'get',
        url:'http://liuyan.jmw.com.cn/message/messageMFor400Index_temporary.php',
        dataType:'jsonp',
        jsonp:'fouroorecord',
        data:'is_login='+is_login+'&phone='+cn_num+'&target_id='+com_id+'&sex=2&name=创业者&cname='+cname+'&origin=13-23&content='+'通过400电话为'+cname+'项目留言，想了解加盟流程。请尽快联系！'+'&400index_lasturl='+lasturl+'&400index_fromurl='+fromurl,
        success:function(html){
            if(html.status == 'login'){
                alert('留言成功！');
                /*var call=new WebCall400(com_id);
                call.fourTelUserName='创业者';
                call.fourTelUserGender=2;
                call.webcall(cn_num);
                jQuery.ajax({
                    url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                    type:'get',
                    data:'com_id='+com_id+'&cb_num='+cn_num,
                    cache:false,
                    dataType:'jsonp',
                    async:false,
                    jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                    success:function(data,text)
                    {
                        alert(data.msg);
                        setTimeout(sleepReload(),'2000');  
                    }
                });*/
            }else if(html.status == 'unlogin'){
                $('#first_message_id').val(html.id);
                
            }
        }
    });
    if(is_login == 'unlogin'){
        $('.gray_mask').show();
        $('#Pline_Message').show();
        $('#first_telephone').val(cn_num);
        $('#tel_400').val('tel_400');
        Auto_trigger();
    }
}
}
function sleepReload(){
    window.location.reload();
}
</script>
<!-- 公共短信验证 -->
<div class="Pline_consult" id="Pline_Message" style="display:none;"> 
<script>
function  Auto_trigger(){
    var curCount = 60;
     $("#chBtn").attr("disabled", "true");
     $("#chBtn").val("" + curCount + "秒");
     //timer处理函数
    function SetRemainTime() {
        
        if (curCount == 0) {                
            window.clearInterval(InterValObj);//停止计时器
            $("#chBtn").removeAttr("disabled");//启用按钮
            $("#chBtn").val("重新发送");
            code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
        }
        else {
            curCount--;
            $("#chBtn").attr("disabled", "false");
            $("#chBtn").val("" + curCount + "秒");
        }
    }
    InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
}
</script>
<div class="ZJ_title1">
    <p class="span1">短信验证</p>
    <p class="span2">温馨提示：为便于客服及时联系您，请验证手机号码</p>
</div>
<form>
<ul class="clear">
    <li>
        <span><em class="em1">*</em><em class="w4">手机号码</em><em class="em2">:</em></span>
        <input type="text" class="text" name="telephone" id="first_telephone" value="" maxlength="11" readonly="readonly">
    </li>
    <li>
        <span><em class="em1">*</em><em>短信验证码</em><em class="em2">:</em></span>
        <input type="text" name="code" class="text" id="che_code" placeholder="请输入验证码" value="" maxlength="4"/>
        <input type="button" value="60秒" class="button fr" id="chBtn" onclick="checkCodeClick();"/>
    </li>
    <li class="li5 clear"> 
        <a href="javaScript:;" class="fl a1" onclick="$('.Pline_consult').hide();$('.gray_mask').hide();window.clearInterval(InterValObj);">取消</a>
        <a href="javaScript:;" class="fr a2" onclick="return message_check_code($(this));">确定</a>
    </li>
    <input type="hidden" name="first_message_id" value="" id="first_message_id">
    <input type="hidden" name="tel" value="" id="tel">
    <input type="hidden" name="gem_collection" value="" id="gem_collection">
    <input type="hidden" name="tel_400" value="" id="tel_400">
    <input type="hidden" name="message_num" id="message_num_m" value="1"/>
</ul>
</form>
</div>
<script>
function checkCodeClick()
{
var curCount = 60;
 $("#chBtn").attr("disabled", "true");
 $("#chBtn").val("" + curCount + "秒");
 //timer处理函数
function SetRemainTime() {
    
    if (curCount == 0) {                
        window.clearInterval(InterValObj);//停止计时器
        $("#chBtn").removeAttr("disabled");//启用按钮
        $("#chBtn").val("重新发送");
        code = ""; //清除验证码。如果不清除，过时间后，输入收到的验证码依然有效    
    }
    else {
        curCount--;
        $("#chBtn").attr("disabled", "false");
        $("#chBtn").val("" + curCount + "秒");
    }
}
InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
var telephone = $("#first_telephone").val();
$.ajax({
    type:'get',
    url:'http://person.jmw.com.cn/telephone_check_again.php',
    dataType:'jsonp',
    jsonp:'callback',
     data:{telephone:telephone},
    success:function(html){
    }
});

}
function message_check_code(obj){
    if(obj.attr('m_biaoye') ==1)
    {
        alert('正在提交中。。请稍后');
        return false;
    }
    var phone = $("#first_telephone").val();
    var code = $("#che_code").val();
    var gem_collection = $("#gem_collection").val();
    var tel_400 = $("#tel_400").val();
    var tel = $("#tel").val();
    var first_message_id = $("#first_message_id").val();
    if(phone == ''){
        alert('联系方式不能为空！');  
        return false ; 
    }else if(!phone.match(/^(13[0-9]|14[0-9]|15([0-9])|18([0-9])|17([0-9]))[0-9]{8}$/)) {
        alert('请输入正确的手机号码！');
        return false ;
    }else if(code == '' ){
        alert('请输入验证码！');
        return false ;
    }else{
        //$('#check_two_message').submit();
        obj.attr('m_biaoye',1);
        $.ajax({
            type:'get',
            url:'http://liuyan.jmw.com.cn/message/first_message_check.php',
            data:{phone:phone,code:code,gem:gem_collection,id:first_message_id},
            dataType:'jsonp',
            jsonp:'callback',
            success:function(html){
            obj.attr('m_biaoye',1);
                if(html == 1){
                    $('.Pline_consult').hide();
                    $('.gray_mask').hide();
                    if(tel == 'tel'){
                        function modify_state(){
                            is_login='login';
                        }
                        modify_state();
                    /*}else if(tel_400 == 'tel_400'){
                        var com_id = jQuery('#si_tid').val();
                        if(com_id != ''){
                            var call=new WebCall400(com_id);
                            call.fourTelUserName='创业者';
                            call.fourTelUserGender=2;
                            call.webcall(phone);
                            jQuery.ajax({
                                url:'http://search1.jmw.com.cn/index.php/Term/Webcall',
                                type:'get',
                                data:'com_id='+com_id+'&cb_num='+phone,
                                cache:false,
                                dataType:'jsonp',
                                async:false,
                                jsonp: "call_status",//服务端用于接收callback调用的function名的参数
                                success:function(data,text)
                                {
                                    alert(data.msg);
                                    setTimeout(sleepReload(),'2000');  
                                }
                            });
                        }*/
                    }else{
                        alert('留言成功！');
                        window.location.reload();
                    }

                }else{
                    alert('验证码不正确！请输入正确的验证码');
                }
            }
        });
    }
}
(function(m, ei, q, i, a, j, s) {
    m[a] = m[a] || function() {
        (m[a].a = m[a].a || []).push(arguments)
    };
    j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
    j.async = true;
    j.charset = 'UTF-8';
    j.src = i + '?v=' + new Date().getUTCDate();
    s.parentNode.insertBefore(j, s);
})(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
_MEIQIA('entId', 18836);
_MEIQIA('withoutBtn', true);
</script>
<div id="div" style="display: block; position:fixed; right:-8px; top:56%; padding-top: 15px; text-align:center; z-index:9999; box-sizing: border-box;width:57px; height:57px; border-radius:50%; color: rgb(255, 255, 255);font-size: 14px; background-color: rgb(255, 70, 55);"><a id="widget" onclick="_MEIQIA._SHOWPANEL()" href="javascript:;" style="color:#fff;">在线<br />咨询</a></div>
<!-- 项目页底部定位 endd -->
