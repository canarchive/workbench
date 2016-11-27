<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="lxwm_main">
    <div class="topimg-240">
        <style type="text/css">*{margin:0; padding:0;} ul,li{list-style: none;} .flexslider{width:100%; height:240px; margin:0 auto; position: relative; overflow: hidden;} .flex-viewport{height:100%;} .flexslider .slides{width:800%; height:100%; position:absolute; top:0; left: 0;} .slides li{float: left; height:240px; text-align: center;} .flex-control-nav{position: absolute; bottom: 20px; z-index: 2; text-align: center; z-index: 9999;} .flex-control-nav li{display: inline-block; width: 68px; height: 8px; margin: 0 5px; *display: inline; zoom: 1;} .slides li a{width: 100%; height: 240px; display: inline-block;} .flex-control-nav a {display: inline-block; width: 68px; height: 8px; line-height: 40px; overflow: hidden; background-color:#FFF; cursor: pointer; opacity:0.3; filter:alpha(opacity=30);} .flex-control-nav .flex-active{opacity:1; filter:alpha(opacity=100);}</style>
        <div class="flexslider">
            <ul class="slides">
                <li style="display: none; background: url(http://www.300.cn/attach/banner/20160126/56a725e723c20.jpg) 50% 0% no-repeat;">
                    <a href="http://www.300.cn/free.html" class="qplj" target="_blank"></a>
                </li>
                <li style="display: none; background: url(http://a.300.cn/banner/20151202/565eeebc9b20d.jpg) 50% 0% no-repeat;">
                    <a href="http://www.300.cn/guanwang.html" class="qplj" target="_blank"></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="top_links">
            <a href="/" class="index_link">首页</a>
            <em>></em>
            <a href="/aboutus/company">关于中企</a>
            <em>></em>
            <a href="/info/">资讯中心</a></div>
        <div class="aboutzq">
            <div class="zq-left floatL">
                <div class="zq-menu floatL">
                    <ul>
                        <li class="t">资讯中心</li>
                        <script>var cate = '';
                            cate = cate ? cate: '';
                            $(document).ready(function() {
                                var str = window.location.pathname;
                                var str_sp = str.split("/");
                                if (str_sp['2']) {
                                    $('.' + str_sp['2']).addClass("active");
                                }
                                if (cate) {
                                    $('.' + cate).addClass("active");
                                }
                            });</script>
                        <li></li>
                        <li class="m1">
                            <a href="/info/news" class="news" id="新闻公告">新闻公告</a>
                            <ul style=""></ul>
                        </li>
                        <li></li>
                        <li class="m1">
                            <a href="/info/report" class="report" id="媒体报道">媒体报道</a>
                            <ul style=""></ul>
                        </li>
                        <li></li>
                        <li class="m1">
                            <a href="/info/projectevents" class="projectevents" id="专题活动">专题活动</a>
                            <ul style=""></ul>
                        </li>
                        <li></li>
                        <li class="m1">
                            <a href="/info/advert" class="advert" id="中企广告">中企广告</a>
                            <ul style=""></ul>
                        </li>
                        <li></li>
                        <li class="m1">
                            <a href="/info/gongyi" class="gongyi" id="社会公益">社会公益</a>
                            <ul style=""></ul>
                        </li>
                    </ul>
                </div>
                <div class="ad-con ad-con1">
                    <a href="/case" target="_blank">
                        <h2>经典案例</h2>
                        <div class="ad-img">
                            <img src="http://s.300.cn/current/home/images/about-ad-img1.jpg" alt=""></div>
                        <p>看经典案例，放心建网站</p>
                    </a>
                </div>
                <div class="ad-con ad-con2">
                    <a href="/quanwangyingxiao.html" target="_blank">
                        <h2>
                            <span>建网站？</span>
                            <i>
                            </i>
                        </h2>
                        <div class="ad-img">
                            <img src="http://s.300.cn/current/home/images/about-ad-img2.jpg" alt=""></div>
                        <p>中企动力服务过120万客户</p>
                    </a>
                </div>
                <!-- <div class="ad-con ad-con3">
                <a href="/guoneituiguang.html" target="_blank">
                <h2>帮您网站宣传网站</h2>
                <div class="ad-img"><img src="http://s.300.cn/current/home/images/about-ad-img3.jpg" alt=""></div>
                <p>中企动力，只拿网站宣传效果说话</p>
                </a>
                </div> -->
            </div>
            <div class="zq-content floatL">
                <ul class="media-list-con">
                    <li>
                        <a href="/info/102311.html">
                            <div class="t">致敬世界互联网大会：当我们年轻时 我们谈什么...
                                <span class="time">2016-11-21 15:27:14</span></div>
                            <div class="des">中企动力是一家为企业提供企业级互联网服务的资深公司，域名、官网建设、网上商城、网络营销宣传、数据管理、互联网行业咨询等都是他们一直为企业做的服务。...</div></a>
                    </li>
                    <li>
                        <a href="/info/102310.html">
                            <div class="t">乌镇时间 | 小编手记：用脚步丈量互联网的温度...
                                <span class="time">2016-11-19 21:53:32</span></div>
                            <div class="des">作为世界级的互联网盛会，获得参展资格的企业仅有310席，囊括了国内互联网行业内的各大领军企业，中企动力能有资格参展，实力所致。小编进馆首日任是参加互联网之光博览会的开幕式...</div></a>
                    </li>
                    <li>
                        <a href="/info/102309.html">
                            <div class="t">乌镇时间 | 创新，我们E路前行
                                <span class="time">2016-11-18 17:42:53</span></div>
                            <div class="des">从1999年成立到今天亮相世界互联网大会；从信息化到电子商务，再到现在的互联网+等，中企动力见证和陪伴了中国互联网的发展，以及中国企业需求的变化，而我们自身也随之在创新的道路...</div></a>
                    </li>
                    <li>
                        <a href="/info/102308.html">
                            <div class="t">乌镇时间|大会开幕 这里有你要的全部现场...
                                <span class="time">2016-11-17 14:57:43</span></div>
                            <div class="des">11月16日，由国家互联网信息办公室和浙江省人民政府共同牵头，备受世界瞩目的第三届世界互联网大会在浙江乌镇盛大开幕！来自全球110多个国家和地区、16个国际组织的1600位嘉宾齐聚美...</div></a>
                    </li>
                    <li>
                        <a href="/info/102307.html">
                            <div class="t">乌镇时间 | 世界互联网大会首日看点全在这里...
                                <span class="time">2016-11-16 09:59:01</span></div>
                            <div class="des">中企动力作为第三届世界互联网大会受邀参展单位，出席了“互联网之光”博览会开幕式。同时参展的还有微软、IBM、阿里巴巴、腾讯、小米等国内外著名互联网企业。...</div></a>
                    </li>
                    <li>
                        <a href="/info/102305.html">
                            <div class="t">第三届世界互联网大会启动，中企动力受邀魅力亮...
                                <span class="time">2016-11-09 13:36:30</span></div>
                            <div class="des">全球互联网领域规模最大、层次最高的高峰会议——第三届世界互联网大会将于2016年11月15日至19日在浙江乌镇开启。届时，世界互联网将进入“乌镇时间”。中企动力将作为第一批参展企业...</div></a>
                    </li>
                    <li>
                        <a href="/info/102304.html">
                            <div class="t">做中小企业最好的伙伴：中企动力亮相义乌博览会...
                                <span class="time">2016-10-26 11:14:40</span></div>
                            <div class="des">10月21日-25日，第22届中国义乌国际小商品博览会（义博会）正在进行时，中企动力作为国内领先的电子商务服务提供商受邀参加此次义博会，作为中小企业最好的伙伴我们为前来参展的中小...</div></a>
                    </li>
                    <li>
                        <a href="/info/102302.html">
                            <div class="t">“双创周”项目路演 中企动力助力大众创业万众...
                                <span class="time">2016-10-17 16:35:58</span></div>
                            <div class="des">时值第二届双创周（10月12日-18日），各地以精彩纷呈的活动推进“大众创业、万众创新”。2016年10月13日上午，作为内蒙古自治区双创周活动的一部分，在内蒙古国际会展中心，以“打造...</div></a>
                    </li>
                    <li>
                        <a href="/info/102299.html">
                            <div class="t">当我们谈论营销价值的时候，用户们在关注什么？...
                                <span class="time">2016-10-13 15:22:46</span></div>
                            <div class="des">正是因为“大把推”给客户朋友带来真正的价值，在上市两年多的时间里，取得了“上万家的企业客户”、“近1亿的销售额度”、“87%的客户满意度”、“68%的续费率”等骄人的成绩。并且...</div></a>
                    </li>
                    <li>
                        <a href="/info/102297.html">
                            <div class="t">中企动力客户服务沙龙：一场心与心的交接...
                                <span class="time">2016-09-30 16:05:08</span></div>
                            <div class="des">中企动力各分公司商务代表与中小企业的客户一起分享网站宣传与优化，互联网+转变得经营之道。</div></a>
                    </li>
                </ul>
                <div class="page">
                    <div class="all-page">共
                        <span>940</span>条</div>
                    <div class="flip-page">
                        <ul>
                            <li>
                                <a class="active">1</a></li>
                            <li>
                                <a class="num" href="/info/index/page/2.html">2</a></li>
                            <li>
                                <a class="num" href="/info/index/page/3.html">3</a></li>
                            <li>
                                <a class="num" href="/info/index/page/4.html">4</a></li>
                            <li>
                                <a class="num" href="/info/index/page/5.html">5</a></li>
                            <li>
                                <a class="next" href="/info/index/page/2.html">下一页</a></li>
                            <li>
                                <a class="end" href="/info/index/page/94.html">尾页</a></li>
                        </ul>
                    </div>
                    <div class="now-page">当前第
                        <span>1/94</span>页</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="ask_ways floatR">
                <ul>
                    <li class="ask_ways1">
                        <h3>预约专家</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL pop_zixun">
                                <div>为您提供一对一解决方案</div>
                                <a class="" href="javascript:" value="1">立即预约</a></div>
                        </div>
                    </li>
                    <li class="ask_ways2">
                        <h3>售前咨询</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>周一至周五9:00——17:30</div>
                                <a id="TQzx0" class="zaixianzixun" clickCount="true" clickAdd="zaixianzixun">立即咨询</a></div>
                        </div>
                    </li>
                    <li class="ask_ways3">
                        <h3>联系方式</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <p>400-660-5555</p>
                                <div>全国7×24小时热线服务</div></div>
                        </div>
                    </li>
                    <li class="ask_ways4">
                        <h3>免费报价</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>专属专业顾问1对1报价</div>
                                <a href="/free.html" target="_blank">免费报价</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- 免费咨询 begin-->
    <div class="free-ask">
        <div class="title">
            <span>免费咨询</span></div>
        <div class="con">
            <div class="form">
                <form action="/customer/feedback?is_ajax=1">
                    <input type="hidden" name="ischeckMobile" value="0" />
                    <div class="textfile">
                        <span class="t">公司名称</span>
                        <input type="text" name="company" id="company_bottom"></div>
                    <div class="textfile">
                        <span class="t">手机号码</span>
                        <input type="text" name="mobile" id="mycall_bottom"></div>
                    <div class="textfile wherecity wrap">
                        <span class="t">所在城市</span>
                        <div class="nice-select marginr gpp" name="nice-select">
                            <input type="text" class="gp" value="请选择省份" readonly="" id="gp_bottom2" name="province"></div>
                        <div class="nice-select marginr gtt" name="nice-select">
                            <input type="text" class="gt" value="请选择城市" readonly="" id="gt_bottom2" name="city">
                            <ul class="city" style="display: none;"></ul>
                        </div>
                        <div class="nice-select gbb" name="nice-select">
                            <input type="text" class="gd" value="请选择区/县" readonly="" id="gd_bottom2" name="district">
                            <ul class="district" style="display: none;"></ul>
                        </div>
                    </div>
                    <div class="textfile lxman">
                        <span class="t">联系人</span>
                        <input type="text" name="truename" id="name_bottom">
                        <div class="appellation">
                            <input type="radio" name="sex" checked="checked" value="先生">
                            <span>先生</span>
                            <input type="radio" name="sex" value="女士">
                            <span>女士</span></div>
                    </div>
                    <div class="textfile z2">
                        <span class="t">邮箱地址</span>
                        <input type="text" name="email" id="email_bottom2"></div>
                    <div class="textfile">
                        <a href="javascript:void(0);" class="submit zixunsubmit" value="99">提交</a></div>
                </form>
            </div>
            <div class="free-tips">我们会尽快联系您，等待期间需要获取更多信息，请
                <a href="http://www.300.cn">继续访问</a>或
                <a id="TQzx3" clickCount="true" clickAdd="zaixianzixun">联系我们</a>。感谢您对中企产品及服务的支持。</div></div>
    </div>
    <script>$(function() {
            $('#email_bottom2').mailAutoComplete({
                width: '404px'
            });
            $('#gp_bottom2').cityselect({
                cityNode: $('#gt_bottom2'),
                districtNode: $('#gd_bottom2')
            });

            var isLock = false;
            $('#verify_message').on('click',
            function() {
                if (isLock) {
                    //alert('手机短信已发送');
                    return false;
                }
                var mobile = $('#mycall_bottom').val();
                if (!validate.checkMobile(mobile)) {
                    alert('手机号码格式有误');
                    return false;
                }
                isLock = true;
                // $(this).attr('href')
                $.post('/verify/message', {
                    mobile: mobile
                },
                function(json) {
                    if (json.status == 0) {
                        alert(json.info);
                        isLock = false;
                        return false;
                    }
                    alert(json.info);
                },
                'json');
                return false;
            })
        });</script>
    <!-- 免费咨询 end--></div>
<input type="hidden" name="admin_add" id="admin_add" value="46" />
<input type="hidden" id="admin_add_value" name="admin_add_value" value="">
<input name="areacode" id="area_code" type="hidden" value="" />
<!-- footer -->
<div class="footer border-top">
    <div class="container">
        <div class="footer-menu">
            <p id="list" class="list">
                <a target="_blank" href="/aboutus/company" class="first">关于中企</a>
                <span>|</span>
                <a target="_blank" href="/attention.html">法律隐私</a>
                <span>|</span>
                <a target="_blank" href="/job/">工作机会</a>
                <span>|</span>
                <a target="_blank" href="/contact.html">联系我们</a>
                <span>|</span>
                <a target="_blank" href="/map.html">网站地图</a>
                <span>|</span>
                <a target="_blank" href="/link.html">友情链接</a>
                <span>|</span>
                <a href="/feedback.html" target="_blank">意见反馈</a></p>
        </div>
        <div class="copyright">版权所有 © 1999-2016 中企动力科技股份有限公司&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 1999-2016 300.cn All Rights Reserved
            <!-- <span style="color:#ffffff">v1.01</span> -->
            <br>京公网安备110301000300号
            <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#999">京ICP证010249号</a></div>
        <div class="gzwm">
            <div class="hotLine">客服热线：
                <a>400-660-5555</a>
            </div>
            <div class="attention">关注我们：
                <a href="http://weibo.com/zqdl300" class="gz-wb" target="_blank">新浪微博</a>
                <div class="ewm">
                    <img src="http://s.300.cn/current/home/images/zqdl-wx.png"></div>
            </div>
            <div class="kxwz">
                <script src="http://kxlogo.knet.cn/seallogo.dll?sn=2009111300100000738&size=0"></script>
            </div>
            <!--<a href="/kexinwangzhanyanzheng.html" target="_blank" class="kxwz"></a>-->
            <!-- 原可信网站链接https://ss.knet.cn/verifyseal.dll?sn=2009111300100000738&ct=df&a=1&pa=0.16607889386939778 --></div>
    </div>
</div>
<!-- footer end -->
<div class="onlineserver" id="onlineserver"></div>
<div class="activityrecommend" id="activityrecommend"></div>
<div class="scrolltop">
    <a href="###" class="t" style="display:none"></a>
</div>
<div class="jz-service">
    <div class="jz-service-open jz-service-con">
        <span class='jz-service-close'></span>
        <a target='_blank' href="/guanwang.html" class='jz-service1'>定制建站</a>
        <a target='_blank' href="/quanwangyingxiao.html" class='jz-service2'>全网建站</a>
        <a target='_blank' href="/appzhuanti.html" class='jz-service3'>手机APP</a>
        <a target='_blank' href="/shangcheng.html" class='jz-service4'>网上商城</a>
        <a target='_blank' href="/shoujijianzhan.html" class='jz-service5'>手机建站</a>
        <a target='_blank' href="/sheji.html" class='jz-service6'>高端设计</a></div>
    <div class="jz-service-packup jz-service-con"></div>
</div>
<div class=" zx_pop active_pop" style="display:none">
    <div class="apply-con">
        <a href="javascript:void(0);" class="close"></a>
        <div class="title">免费咨询</div>
        <div class="subtitle">欢迎您免费咨询，请填写以下信息，我们收到后会尽快与您联系</div>
        <div class="form">
            <form action="/customer/feedback?is_ajax=1" method="post" id="submitform" name="submitform">
                <input type="hidden" name="is_pop" value="1" />
                <div class="textfile">
                    <span class="t">公司名称</span>
                    <input type="text" name="company" id="company"></div>
                <div class="textfile wherecity wrap">
                    <span class="t">所在城市</span>
                    <div class="nice-select marginr gpp" name="nice-select">
                        <input type="text" class="gp" value="请选择省份" readonly="" name="province" id="gp">
                        <ul class="province"></ul>
                    </div>
                    <div class="nice-select marginr gtt" name="nice-select">
                        <input type="text" class="gt" value="请选择城市" readonly="" name="city" id="gt">
                        <ul class="city"></ul>
                    </div>
                    <div class="nice-select gdd" name="nice-select">
                        <input type="text" class="gd" value="请选择区/县" readonly="" name="district" id="gd">
                        <ul class="district"></ul>
                    </div>
                </div>
                <div class="textfile">
                    <span class="t">手机号码</span>
                    <input type="text" name="mobile" id="mycall"></div>
                <div class="textfile lxman">
                    <span class="t">联系人</span>
                    <input type="text" name="truename" id="name">
                    <div class="appellation">
                        <input type="radio" name="sex" checked="checked" value="先生">
                        <span>先生</span>
                        <input type="radio" name="sex" value="女士">
                        <span>女士</span></div>
                </div>
                <div class="textfile">
                    <span class="t">邮箱地址</span>
                    <input type="text" name="email" id="email" /></div>
                <div class="textfile">
                    <a href="javascript:void(0);" class="submit zixunsubmit">提交</a></div>
            </form>
        </div>
    </div>
</div>
<script>$(function() {
        $('#email').mailAutoComplete({
            width: '404px'
        });
        $('.emailist li').live('mouseover',
        function() {
            $(this).addClass('on').siblings().removeClass('on');
        });
        $('#gp').cityselect({
            cityNode: $('#gt'),
            districtNode: $('#gd')
        });

        var isLock = false;
        /*$('#verify_mes').on('click', function() {
    console.log('yes');
});*/
        $('#verify_mes').on('click',
        function() {
            if (isLock) {
                //alert('手机短信已发送');
                return false;
            }
            var mobile = $('#mycall').val();
            if (!validate.checkMobile(mobile)) {
                alert('手机号码格式有误');
                return false;
            }
            isLock = true;
            // $(this).attr('href')
            $.post('/verify/message', {
                mobile: mobile
            },
            function(json) {
                if (json.status == 0) {
                    alert(json.info);
                    isLock = false;
                    return false;
                }
                alert(json.info);
            },
            'json');
            return false;
        })
    });</script>
<script>//-----GA----
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-43684048-3', 'auto');
    ga('send', 'pageview');</script>
<script type="text/javascript">var yodao_conversion_id = "284700";
    var yodao_conversion_label = "landing";</script>
<script language="JavaScript" src="http://a.youdao.com/conv/conversion.js"></script>
<noscript>
    <img height=0 width=0 border=0 src="http://a.youdao.com/conv/284700/imp.gif?value=1&label=landing"></noscript>
<script type="text/javascript" src="http://s.300.cn/current/home/js/common.js"></script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/position.js"></script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/public.js"></script>
<script type="text/javascript" src="/city/createCityJs"></script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/submit.js?20160707"></script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/jquery.cityselect.js?20160707"></script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/jquery.mailAutoComplete.js"></script>
<script type="text/javascript" src="/common"></script>
<script type="text/javascript" src="/common/count"></script>
<script>$(function() {
        // 邮箱后缀名自动加载
        $('#email_bottom').mailAutoComplete();
        // 城市选择加载
        $('#gp_bottom').cityselect({
            cityNode: $('#gt_bottom'),
            districtNode: $('#gd_bottom')
        });
    });</script>
<script type="text/javascript">$(function() {
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: true,
            animation: "slide"
        });
    });
    $(function() {
        var butwidth = parseInt($('.flex-control-nav').css('width'));
        var bannerwidth = parseInt($('.flexslider').css('width'));
        $('.flex-control-nav').css('margin-right', (bannerwidth - butwidth) / 2);
    });</script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/jquery.flexslider-min.js"></script>
<!-- 轮播图 -->
