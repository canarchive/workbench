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
        <!-- <img src="http://s.300.cn/current/home/images/gsjj.jpg" />-->
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
            <a href="/" class="index_link">首页></a>
            <a href="/aboutus/company">关于中企></a>
            <a href="/info/">资讯中心></a>
            <a href="/info/news" target="_blank">新闻公告></a>
            <a target="_blank" href="#">致敬世界互联网大会：当我们年轻时 我们谈什么</a></div>
        <div class="aboutzq">
            <div class="zq-left floatL">
                <div class="zq-menu floatL">
                    <ul>
                        <li class="t">资讯中心</li>
                        <script>var cate = 'news';
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
                <div class="news-content">
                    <h1 class="title">致敬世界互联网大会：当我们年轻时 我们谈什么</h1>
                    <div class="sub-info">
                        <span>来源： 中企动力</span>
                        <span>发布时间：2016-11-21 15:48:06</span></div>
                    <div class="content">
                        <p>
                            <strong>
                                <span style="font-family:微软雅黑;color:rgb(255, 0, 0);font-size:12pt;">
                                    <span style="font-family:微软雅黑;"></span>
                                </span>
                            </strong>
                        </p>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>互联网从来不乏新奇特的产品与技术，这个把创新视为第一生产力的行业，平庸意味着失败。这几天，世界互联网中心定位在江南水乡乌镇，潮湿阴沉的天气下这个古老的小镇却尽情碰撞着最前沿的互联网创新思维。今年的世界互联网大会将创新写进主题，无人车、互联交通、VR眼镜、智能机器人标记了互联网最新的技术应用，并让我们对未来充满无限期待。</p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a560cf479.jpg" alt="" />
                                <br />智能机器人</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>互联网诞生的这20年，从各种网络媒体到自媒体的兴起，从移动互联网热潮到云计算大数据，从团购“百团大战”到O2O“厉兵秣马”，从豆瓣、知乎到分答、在行……互联网世界造就了大佬、走出了网红、滋养了专家。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>在猪都能飞起来的互联网风口，互联网吸引了眼球，也吸引了资本。人们在网络里花费了大量的时间，也倾注了太多的热情，平台上每一个IP都在呼吸着互联网的新鲜空气。</strong></span>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>
                                                    <br /></strong>
                                            </span>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;">
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>
                                        </span>然而，我们追本溯源，回到热闹的互联网平台，皆是域名下一个个页面组成的站点。对于网站的功能交互，页面呈现是每一个平台内涵的最终表达。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>在中国有几千万家企业，他们与互联网的第一次亲密接触，或是入驻第三方平台，或是建设自己的网站。如果企业想拥有自己的品牌宣传平台，搭建自己的网络平台是首选。</strong></span>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>
                                                    <br /></strong>
                                            </span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;">
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>
                                        </span>“1999年，互联网刚刚兴起的时候，企业对互联网的需求主要就是域名和展示页面，我们会将一个首页和几个二级页打包给客户。”这是中企动力培训部负责人在给员工讲解公司发展时必讲的一段公司历史，更是中国互联网的发展史。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>然而到了今天，企业对互联网的认知参差不齐，需求自然也是千差万别。</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a5836814b.jpg" alt="" />
                                <br />中企动力北京分公司前台</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;">
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>
                                        </span>中企动力是一家为企业提供企业级互联网服务的资深公司，域名、官网建设、网上商城、网络营销推广、数据管理、互联网行业咨询等都是他们一直为企业做的服务。从1999年成立至今，从信息化到电子商务，再到现在的互联网+，中企动力见证陪伴了太多企业的兴衰成败。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>互联网的产品和技术在不断更新迭代，企业用户的需求也在随之变化。中企动力服务过累计超过120万家企业，随着时间的发展，企业的需求从一个简单的企业官网到网上商城，从PC端到移动端，现在很多企业已经熟练地掌握了网上营销推广。</strong></span>
                                        </span>
                                        <span style="line-height: 1.8;">&nbsp;</span></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="line-height: 1.8;">
                                            <br /></span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;">
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>
                                        </span>对于每一个鲜活的个体而言，享受互联网生活需要认知上的学习；对于每一个企业来说，实现企业的互联网＋也同样需要付出。互联网并非完美无缺，不能解决所有问题。有些企业早早的接触了互联网，但互联网并非万能的法宝；有的企业刚开启了互联网，但离实际的熟练应用还尚须时日；有的企业还徘徊在互联网的门外观望，犹豫不决……
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgba(149, 10, 1, 0.658824); word-wrap: break-word !important;">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>此时此刻，被寄予让人们生活变得更美好的互联网，作为一家为企业提供互联网服务的互联网公司，在企业中担当着什么重要角色，又能为企业的发展做些什么呢？</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <p style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a58d489a9.jpg" alt="" />
                                <br />中企动力主要产品介绍</p>
                            <p style="text-align: left; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <span style="white-space: pre-wrap; color: rgb(102, 102, 102); font-size: 15px; line-height: 27px; text-align: justify;">
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>
                                    </span>
                                </span>
                                <span style="white-space: pre-wrap; color: rgb(102, 102, 102); font-size: 15px; line-height: 27px; text-align: justify;">
                                    <strong>一、产品：需求碰撞出的绚丽火花</strong></span>
                            </p>
                            <p style="text-align: left; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <span style="color: rgb(102, 102, 102); font-size: 15px; line-height: 27px; white-space: pre-wrap;">
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>中企动力是一家为企业提供企业级互联网服务的资深公司，域名、官网建设、网上商城、网络营销推广、数据管理、互联网行业咨询等都是他们一直为企业做的服务。</span>
                            </p>
                            <p style="text-align: left; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <span style="white-space: pre-wrap; color: rgb(102, 102, 102); font-size: 15px; line-height: 1.8; text-align: justify;">
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>年轻的生命是善于感知的，互联网感知着大众生活方方面面的需求，于是催生了网上便捷的生活方式。几年前，有很多客户向中企动力提出了新的需求：“企业门户建好了，我该怎么做才能让更多的人知道，但我们没有太多推广费。”“我们有家分店要开业了，你们有渠道可以帮我们发下软文吗？”“我们想在很多商贸平台上放公司的产品信息，但每个都要注册会员，还要交年费，有没有什么平台可以帮我们一下都发出去啊？”在收集了诸如此类的大量用户需求，中企动力网络营销产品“大把推”在2014年应运而生，这是一个整合了国内外各类优势资源的综合推广平台，让企业用最少的花费赢得最大的传播效果。这款针对每一家企业不同而颇具个性化的产品于2014年底正式发布后，得到很多企业的认同。至今，大把推服务了上万家企业，销售额过亿。</span>
                            </p>
                            <p style="text-align: center; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <span style="white-space: pre-wrap; color: rgb(102, 102, 102); font-size: 15px; line-height: 1.8; text-align: justify;">
                                    <img src="http://a.300.cn/images/20161121/5832a5c2c6e0f.jpg" alt="" />
                                    <br /></span>
                            </p>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">辽宁东奥电梯总经理致辞</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>在公司，你很少能见到大把推的产品负责人叶青沅，这名技术出身的产品负责人现在是一个标准的市场控、用户控，一个月有一大半的时间在跑市场，跟用户在一起。不论刮风下雨，他经常卷起裤腿跟分公司同事一起拎着电脑给客户上门咨询和服务。沈阳东奥电梯是大把推众多客户中的一个，创始人赵姐几乎每个月都会跟叶青沅通几个电话，每次都会在半小时以上，跟他反映推广的效果、公司的新需求，甚至包括公司经营的许多问题。而不管多忙，叶总都一定会抽时间和用户一起去沟通去想办法。今年8月，合作快两年了，东奥电梯在电梯行业的寒冬里找到了发展的春天，特意把一面写满感谢的锦旗送到公司。而叶总和团队深深知道，大把推的使命是要帮助千千万万家东奥电梯这样的企业，这条路还很长。他坚信，
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgba(149, 10, 1, 0.658824); word-wrap: break-word !important;">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>只有了解用户的需求，产品才有持久的生命力。</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a5ce30383.png" alt="" />
                                <br />中企动力大把推产品介绍</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>大把推只是中企动力产品的一个缩影，很多人知道中企动力为企业建设企业门户，却并不了解这家互联网服务商也是谷歌在中国最早的合作伙伴，而且一直合作至今，最主要的原因是为了满足大量外贸客户的海外推广需求。无论是在2006年并购红旗2000、还是早在1999年实现静态网站制作，这些都是技术与需求碰撞的火花。</p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <br /></p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>所以，
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>对于互联网服务的壁垒，中企动力认为关键并不在于技术本身，而在于如何真正贴合用户的需求。</strong></span>
                                        </span>17年来，中企动力所服务上百万家用户，每一家企业都各有不同，他们处在不同行业、处于不同的发展阶段，他们对于互联网的需求也各有不同，正是
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>这些需求触发了中企动力的产品升级迭代，这是独一无二的竞争力。</strong></span>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>
                                                    <br /></strong>
                                            </span>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>而今，中企动力正在为成长型企业用户打造一个互联网＋生态系统。中企动力产品负责人詹衡透露，“未来，除了用户和合作伙伴，我们的平台还会向市场逐步开放，让更多人在开放的环境中共享。”这不禁让人想到，中企动力总经理陈鸣飞在年会上说的“平台＋战略”。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>在产品应用之初，公司想到的是满足客户的需求；随着技术和经验的积累，公司会考虑将技术工具化、平台化，以此更便捷的满足大量客户类似的问题；最终将为所有用户建立一个开放的生态平台，即是可以通过共享平台实现用户的各种需求。</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a5d877ac1.jpg" alt="" />
                                <br />中企动力办公区</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <strong>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>二、创新：克己的成长选择</strong>
                                        <br /></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <strong>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>
                                            <br /></strong>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>在这个瞬息万变的互联网时代，沉寂了2年没有发布新产品在互联网企业中是不可思议的。但是，没有新品的发布并不代表没有在技术研发方面的大量投入。位于北京数码庄园的中企动力总部，有资深研发人员400多名，这些研发人员又分为多个不同的专项研发小组。</p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <br /></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="line-height: 1.8;">
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>服务企业的过程就是不断发现问题、更新自己的过程。从中企动力近几年的产品路径可以看到企业对于互联网服务的需求变化。总经理陈鸣飞在今年5月份的精英年会上曾表示：“</span>
                                        <span style="line-height: 1.8; ">
                                            <strong>
                                                <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                                    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">我们不着急推新产品，但我们要推最具价值的产品。什么是价值？就是真正贴合市场和用户需求的产品。</span></span>”</strong>
                                        </span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="line-height: 1.8; ">
                                            <strong>
                                                <br /></strong>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>就像一个壮志满怀的青年，不断向往着新潮与前沿，不断追求创新与突破，挥洒着源源不断的热情。但当我们在
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>有了一定丰富的阅历，对理想尚怀一份敬畏与执着，对自我和用户负责，我们把这称为克己。</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a5e227248.jpg" alt="" />
                                <br />中企动力公益活动</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <strong>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                            <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>三、陪伴：最长情的告白</strong>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <strong>
                                            <br /></strong>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>在中企动力总部的办公室里，总经理陈鸣飞接到过一个电话，电话另一头是客户朋友的“求助”，客户很着急。其实这位客户情绪激动情有可缘，他在赶去一场自己企业的新闻发布会，发布会要演示新上线的企业门户网站，可服务器却宕机了，而官网服务商却找不到了，于是，他情急之下只能找到中企动力“救火”。网上各种百元建站、千元建站的小服务商很多，企业主贪图便宜之后又发现不靠谱，这样的案例在中企动力并不新鲜，绝大多数中企人都接到过这样或那样的求助。
                                        <span style="line-height: 1.8;">&nbsp;</span></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="line-height: 1.8;">
                                            <br /></span>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>大家都知道，
                                        <strong>
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgba(149, 10, 1, 0.658824); word-wrap: break-word !important;">
                                                <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">服务中小企业事多、钱少、难做，不是一件容易的事情，可中企动力为什么从成立之初直到今天都专注于为中小企业提供服务呢？这源自公司的创立者中国数码集团董事长于品海先生的强国梦想。</span></span>
                                            <span style="line-height: 1.8;">&nbsp;</span></strong>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <strong>
                                            <span style="line-height: 1.8;">
                                                <br /></span>
                                        </strong>
                                    </p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 27px;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 30px; text-align: justify; white-space: pre-wrap;"></span>截止到2014年11月份全国工商登记的企业大概是1788万，中小企业是我国数量最大最具有创新活力的企业群体，同时中小企业也是实体经济的主体。促进中小企业发展，也是实现中国梦的有效途径，它不但是个经济问题，它更是社会问题和政治问题。如何服务好这个群体，帮助他们在互联网上更自由便捷地开展业务，就是中企动力这类企业级互联网服务公司的最大信念。</p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a62fa5052.jpg" alt="" />
                                <br />
                                <img src="http://a.300.cn/images/20161121/5832a637ed3aa.jpg" alt="" />
                                <br /></section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">中企动力和客户在一起</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>即便是作为国内最大的企业级互联网服务提供商之一，中企动力的商务人员也还是会抱怨为企业客户提供服务过程中的各种心酸不易，总经理陈鸣飞说，如果你觉得难，那么你的同行比你还难千百倍。因为如果中企动力遍布全球的服务器、数千名专家顾问和技术工程师、还有遍布全国70多个城市的落地服务都不能为你支撑，同行中其他企业他们又将如何应对？</p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <br /></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgba(149, 10, 1, 0.658824); word-wrap: break-word !important;">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>
                                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>规模代表的不仅是实力，还有针对不同地域的落地服务。</strong>
                                            </span>
                                        </span>中国每个城市的经济发展状况不同，企业所处的行业以及企业的发展阶段也会不同，这也是为什么中企动力一直所强调的“本地化”、“一对一”的服务。你的企业在哪里，就会有当地的服务顾问和企业一对一进行对接沟通。
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>比互联网技术更贴心的，其实，仍旧是服务。本地化需要公司在管理和成本方面付出很多，但中企动力从未舍弃。</strong></span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: center;">
                                <img src="http://a.300.cn/images/20161121/5832a6418f05e.jpg" alt="" />
                                <br />国盛科技创始人致辞</section></section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgb(62, 62, 62); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 16px; line-height: 25.6px; word-wrap: break-word !important;">
                            <section style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <section style="margin: 0px; padding: 0px 15px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; text-align: justify; font-size: 15px; color: rgb(102, 102, 102); line-height: 1.8;">
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                        <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>年初，中企动力高管曾拜访了中企动力最早的客户国盛科技，这家公司和中企动力同是1999年成立，目前是全国最大的电位器生产厂家。它的创始人周正军特别感慨地说：“这十多年，我们真的是陪伴着一起走过来的，也一起经历各种困难和问题。我和你们的关系就像是谈恋爱，一见钟情，然后结婚，一直相爱了17年，这中间就算有点小情绪，但从来没有想过要分开。既然在一起了，那就一直走下去吧，风雨同舟，永不分离。”</p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <br /></p>
                                    <p style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; clear: both; min-height: 1em; white-space: pre-wrap;">
                                        <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important; color: rgba(149, 10, 1, 0.658824);">
                                            <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                                <strong>
                                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>陪伴是最长情的告白，把脉企业对于互联网的需求，通过对互联网服务的重构，让每一家企业都能在互联网时代感受到便捷，并赋予互联网服务新的意义。如此为互联网服务买单，无疑是值得的，也是必须的。</strong>
                                            </span>
                                        </span>
                                    </p>
                                </section>
                            </section>
                        </section>
                        <section powered-by="xiumi.us" style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; word-wrap: break-word !important;">
                            <p style="color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; text-align: center; word-wrap: break-word !important;">
                                <img src="http://a.300.cn/images/20161121/5832a649de110.jpg" alt="" />
                                <br />中企动力总部办公楼</p>
                            <p style="text-align: left; margin: 10px 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                <span style="white-space: pre-wrap;">
                                    <span style="color:#3e3e3e;">
                                        <span style="font-size: 16px; line-height: 25.6px;">
                                            <strong>
                                                <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                                <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>结语</strong>
                                        </span>
                                    </span>
                                </span>
                            </p>
                            <div style="color: rgb(62, 62, 62); font-size: 16px; line-height: 25.6px; text-align: left;">
                                <span style="color: rgb(102, 102, 102); font-size: 15px; line-height: 1.8; text-align: justify;">
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; line-height: 27px; text-align: justify; white-space: pre-wrap;"></span>
                                    <span style="color: rgb(102, 102, 102); font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-serif; font-size: 15px; white-space: pre-wrap; line-height: 30px;"></span>第三届世界互联网大会刚刚结束，但互联网的高速发展会越来越渗透我们的思想和生活，这让我们既充满期待又有些许忐忑。在这样的国家级互联网盛会举办之时，</span>
                                <span style="font-size: 15px; line-height: 1.8; margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; color: rgba(149, 10, 1, 0.658824); word-wrap: break-word !important;">
                                    <span style="margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box; word-wrap: break-word !important;">
                                        <strong>当我们聊产品、聊创新、聊面对面服务与陪伴成长，其实我们更想聊的是改变与不变，是现实与梦想，是我们的使命与坚持。</strong></span>
                                </span>
                                <span style="color: rgb(102, 102, 102); font-size: 15px; line-height: 1.8; text-align: justify;">习近平主席在大会开幕致辞时说：“君子务本，本立而道生。”愿我们透过对中企动力这样的企业级服务公司的一些了解，感受到中国互联网服务行业强大的内生力量，并期待着这股代表着先进生产力的力量，真正引领伴随中国的经济走向更远大的未来，真正实现“创新驱动 造福人类”的理想。</span></div>
                            <p>
                            </p>
                        </section>
                        <p>
                            <span style="font-family:微软雅黑;font-size:12pt;"></span>
                        </p>
                    </div>
                    <div class="shar">
                        <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1446885378413">
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                        </div>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0",
                                    "bdSize": "32"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                    </div>
                </div>
                <div class="related-article">
                    <div class="t">相关文章</div>
                    <ul>
                        <li>
                            <a href="/info/102311.html" target="_blank">
                                <span>2016-11-21 15:48:06</span>致敬世界互联网大会：当我们年轻时 我们谈什么...</a></li>
                        <li>
                            <a href="/info/102310.html" target="_blank">
                                <span>2016-11-19 21:54:15</span>乌镇时间 | 小编手记：用脚步丈量互联网的温度...</a></li>
                        <li>
                            <a href="/info/102309.html" target="_blank">
                                <span>2016-11-18 17:53:50</span>乌镇时间 | 创新，我们E路前行</a></li>
                        <li>
                            <a href="/info/102308.html" target="_blank">
                                <span>2016-11-17 15:09:30</span>乌镇时间|大会开幕 这里有你要的全部现场...</a></li>
                        <li>
                            <a href="/info/102307.html" target="_blank">
                                <span>2016-11-16 10:31:43</span>乌镇时间 | 世界互联网大会首日看点全在这里...</a></li>
                    </ul>
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
    <!-- 免费咨询 end-->
</div>
<script>window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "32"
        },
        "share": {}
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];

    $(function() {
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
