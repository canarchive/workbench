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
    <?= $this->render('../common/_ask'); ?>
</div>
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
