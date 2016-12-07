<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
?>
<script>//微信tel失效问题,去除sukey
    if (navigator.userAgent.indexOf('MicroMessenger') != -1) {
        var shref = window.location.href;
        if (shref.indexOf('wxref=mp.weixin.qq.com') == -1) window.location.href += shref.indexOf('?') == -1 ? '?wxref=mp.weixin.qq.com': '&wxref=mp.weixin.qq.com';
    }
    //ios7 不用webapp
    (function() {
        if (/(iPhone|iPad)\sOS\s7_/.test(window.navigator.userAgent)) {
            var t = document.head.querySelector('meta[name="apple-mobile-web-app-capable"]');
            if (t) t.remove();
        }
    })()

    function getCookieObj() {
        var ary = document.cookie.split(/;\s?/),
        cookieObj = {};
        for (var i = 0,
        n = ary.length; i < n; i++) {
            var t = ary[i].split('=');
            if (t.length == 2) cookieObj[t[0]] = t[1];
        }
        return cookieObj;
    } (function() {
        var defaultImgMode = window.localStorage.getItem('browseMode');
        if (defaultImgMode && defaultImgMode != 'close') {
            var imgMode = getCookieObj().imgDispMode;
            if (imgMode == 'pq') {
                document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd480.css">');
            } else if (imgMode == 'gq') {
                document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd640.css">');
            } else if (!imgMode) {
                if (defaultImgMode == 'gq') {
                    var dpr = window.devicePixelRatio;
                    if (dpr > 1.5) {
                        document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd640.css">');
                    } else {
                        document.write('<link id="hdLink" rel="stylesheet" type="text/css" href="http://s.300.cn/current/mobile/css/common_hd480.css">');
                    }
                }
            }
        }
    })()

    var CompInit = function() {
        var initFuncs = {};
        var requireJsAry = [];
        return {
            addCompInit: function(key, opts) {
                if (opts.initFunc) {
                    initFuncs[key] = opts.initFunc;
                }
                if (opts.requireJs) {
                    requireJsAry.push(opts.requireJs);
                }
            },
            initAll: function(fn) {
                fn({
                    requireJsAry: requireJsAry,
                    initFuncs: initFuncs
                })
            }
        }
    } ()</script>
<script type="text/javascript">(function(doc, win) {
        var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange': 'resize',
        recalc = function() {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
        };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);</script>
<script type="text/javascript" src="//s.union.360.cn/9092.js"></script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?9ab88a4c3276bdc61d552de7d31ba071";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?bda2db5fdc3fbeec114a8a7e5bfa11a4";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</head>

<body>
<!-- wrapper -->
<!-- header -->
<header>
    <div class="logo">
        <a href="/">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/logo.png" alt=""></a>
    </div>
    <div class="category">
        <a href="javascript:;"></a>
    </div>
</header>
<!-- header end -->
<section class='content'>
    <div class="swiper-container" id='wrap-b'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="zqdl-content container mt0 btNone">
                    <div class="bd">
                        <ul class='bd clearfix'>
                            <li class="active">
                                <h3>为什么选择中企动力？</h3>
                                <div class="txt-con">
                                    <div class='txt-con-item1'>
                                        <h4>16年行业经验</h4>
                                        <p>16年行业经验积累，服务超过120万客户</p>
                                    </div>
                                    <div class='txt-con-item2'>
                                        <h4>80家分公司</h4>
                                        <p>全国70多个城市，近80家分公司</p>
                                    </div>
                                    <div class='txt-con-item3'>
                                        <h4>资深设计师，一对一服务</h4>
                                        <p>全国500名设计师，200名资深高级设计师</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>企业资质</h3>
                    <div class="swiper-container wrap-s" id='wrap-s'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img1.jpg" alt=""></div>
                                <div class="zz-name">2013年度优秀域名注册服务机构</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img2.jpg" alt=""></div>
                                <div class="zz-name">ZtouchS软件著作权登记证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img3.jpg" alt=""></div>
                                <div class="zz-name">质量管理体系认证证书(中文)</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img4.jpg" alt=""></div>
                                <div class="zz-name">Z+软件著作权证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img5.jpg" alt=""></div>
                                <div class="zz-name">可信网站明星验证服务中心</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img6.jpg" alt=""></div>
                                <div class="zz-name">通用网址金牌验证服务中心</div></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>所获荣誉</h3>
                    <div class="swiper-container wrap-s" id='wrap-s1'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img1.png" alt=""></div>
                                <div class="zz-name">2015.02|荣获“2014年度最佳最佳创新应用奖”和
                                    <br>“NewgTLD最佳注册服务机构”两项殊荣</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img2.png" alt=""></div>
                                <div class="zz-name">2013.12|“云计算领域平台应用最具影响力企业”</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img3.png" alt=""></div>
                                <div class="zz-name">2012.01 | “2011年度可信网站金牌注册服务机构”
                                    <br>2011年度通用网址金牌注册服务机构”</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img4.png" alt=""></div>
                                <div class="zz-name">Z+2010.05|“中小企业网站建设推荐示范平台”</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img5.png" alt=""></div>
                                <div class="zz-name">2009.05|“2008北京市电子商务诚信十佳企业”
                                    <br>总经理陈丹女士荣获 “2008首都电子商务
                                    <br>‘诚信兴商’十大精英奖”</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/ry-img6.png" alt=""></div>
                                <div class="zz-name">2008.08|“五星级注册服务机构”</div></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>发展历程</h3>
                    <div class="swiper-container wrap-s" id='wrap-s2'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class='develop-progress'>
                                    <li>
                                        <span>• 2014.09</span>
                                        <p>中企动力自1999年成立以来15年风雨历程，15年华彩篇章。为了感谢广大客户的支持，9月14日在国家奥体中心举办了群星演唱会，邀约客户一同狂欢。</p>
                                    </li>
                                    <li>
                                        <span>• 2013.01</span>
                                        <p>由中企动力研发的ZtouchS全网营销型网站正式上市。</p>
                                    </li>
                                    <li>
                                        <span>• 2013.03</span>
                                        <p>3月14日，由中企动力主办、中国互联网协会网络营销委员会协办的“2013中小企业移动互联网安家工程全国巡讲”活动在冰城哈尔滨正式启动。</p>
                                    </li>
                                    <li>
                                        <span>• 2013.06</span>
                                        <p>6月27日，由工信部中小企业司主办的“云计算服务中小企业”活动在北京举行，来自全国中小企业主管部门的近300名领导考察了中企动力科技股份有限公司。</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="swiper-slide">
                                <ul class='develop-progress'>
                                    <li>
                                        <span>• 2012.06</span>
                                        <p>6月5日，中企动力在风景宜人的青岛海滨举办了题为“触享官网新时代”的新品发布会，隆重推出了新一代企业官方网站建站产品Ztouch触享官网。</p>
                                    </li>
                                    <li>
                                        <span>• 2012.12</span>
                                        <p>12月24日，中企动力隆重推出Zmobile手机客户端。Zmobile能够帮助企业在手机上宣传品牌，展示产品，联系客户，助力中小企业开启移动营销之路。</p>
                                    </li>
                                    <li>
                                        <span>• 2011.06</span>
                                        <p>举办主题为“运营•提速•成长”的2011成长型企业信息化应用全国推进工程新闻发布会，这也标志着中企动力“成长型企业信息化服务工程”第二阶段工作的正式启动。</p>
                                    </li>
                                    <li>
                                        <span>• 2011.09</span>
                                        <p>举行召开“新中企时代——中企动力12周年庆典暨战略发布会”，回顾了公司12年的成长历程，并对外发布了公司的未来发展战略。</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="swiper-slide">
                                <ul class='develop-progress'>
                                    <li>
                                        <span>• 2011.11</span>
                                        <p>隆重推出运营级企业在线零售运营管理平台产品——Zshop，在业内发起电商革命，倡导独立网上商城的经营模式。</p>
                                    </li>
                                    <li>
                                        <span>• 2010.9</span>
                                        <p>中企动力发起成立“中国电子商务协会信息化应用中心”，致力于推动中国企业信息化应用。</p>
                                    </li>
                                    <li>
                                        <span>• 2010.10</span>
                                        <p>由中国电子商务协会信息化应用中心主办，中企动力承办的“成长型企业信息化应用研讨会”在京隆重召开。</p>
                                    </li>
                                    <li>
                                        <span>• 2010.10</span>
                                        <p>中企动力与中国电子商务协会信息化应用中心联合启动“成长型企业信息化服务工程”，开始在全国各地开展400余场的中小企业主的信息化培训。</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>联系我们</h3>
                    <div class="linkus-con">
                        <div class="linkus-add">
                            <dl>
                                <dt>地址：</dt>
                                <dd>北京市经济技术开发区地盛西路1号 数码庄园A2座</dd></dl>
                            <dl>
                                <dt>邮编：</dt>
                                <dd>100176</dd></dl>
                            <dl>
                                <dt>ADD：</dt>
                                <dd>Building A2,No.1,Disheng West Road Beijing Econom ic-Technological Development Area</dd></dl>
                        </div>
                        <div class="linkus-ways">
                            <dl>
                                <dt>电话：</dt>
                                <dd>400-660-5555</dd></dl>
                            <dl>
                                <dt>网址：</dt>
                                <dd>www.300.cn</dd></dl>
                            <dl>
                                <dt>邮箱：</dt>
                                <dd>
                                    <p>客户服务 -
                                        <a href="mailto:sevice@weinaya.com">service@weinaya.com</a>
                                    </p>
                                    <p>产品合作 -
                                        <a href="mailto:chanpinhezuo@weinaya.com">chanpinhezuo@weinaya.com</a>
                                    </p>
                                    <p>媒介合作 -
                                        <a href="mailto:meijiehezuo@weinaya.com" >meijiehezuo@weinaya.com</a>
                                    </p>
                                </dd>
                            </dl>
                        </div>
                        <div class="address-detail" style="padding-top:20px;">
                            <div style="width:100%;height:180px;border:#ccc solid 1px;" id="dituContent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<input name="areacode" id="area_code" type="hidden" value="" />
<div class="scrTop">
    <span></span>
</div>
<div class="shareCon">
    <span></span>
</div>
<div class="baidushare">
    <div class="share-inner">
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
        </div>
        <script>window._bd_share_config = {
                "common": {
                    "bdSnsKey": {},
                    "bdText": "",
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": "",
                    "bdStyle": "0",
                    "bdSize": "24"
                },
                "share": {}
            };
            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
    </div>
</div>
<!-- footer -->
<section class="nav">
    <header>
        <div class="logo">
            <a href="/">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/logo.png" alt=""></a>
        </div>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href="http://m.300.cn/">首页</a></li>
            <li>
                <a href="http://m.300.cn/productlist.html">建站产品</a></li>
            <li>
                <a href="http://m.300.cn/case">精美案例</a></li>
            <li>
                <a href="http://m.300.cn/aboutzq.html">关于中企</a></li>
            <li>
                <a href="http://m.300.cn/info">资讯中心</a></li>
            <li>
                <a href="http://m.300.cn/message">信息讲堂</a></li>
            <li>
                <a href="http://m.300.cn/service">服务与支持</a></li>
        </ul>
    </nav>
</section>
<section class="freebj">
    <div class="free-ask">
        <div class="title">
            <span>免费报价申请</span></div>
        <p class='txt'>申请成功后，将由我们的专属互联网顾问
            <br>为您预约报价</p>
        <span class='freebj-close'></span>
        <div class="con">
            <div class="form">
                <div class="info-block">
                    <form action="/customer/feedback" method="post" onsubmit="return ZQDL.submit.submit.checkBj(this.form);">
                        <div class="info-item">
                            <div class="t">公司名称</div>
                            <input type="text" placeholder="请输入公司名称" name="company" id="company2"></div>
                        <div class="info-item positionR">
                            <span class="redStar">*</span>
                            <div class="t">手机号码</div>
                            <input type="text" placeholder="请输入手机号码" name="mobile" id="mobile2"></div>
                        <div class="info-item info-add positionR">
                            <span class="redStar">*</span>
                            <div class="t">所在城市</div>
                            <div class="add-select">
                                <select name="province" id="province2" class="gp" onchange="set_city(this, this.form.city, this.form.district);">
                                    <option value="0">请选择省份</option></select>
                                <select name="city" id="citys2" class="gt" onchange="set_district(this.form.province, this, this.form.district)">
                                    <option value="0">请选择城市</option></select>
                                <select name="district" id="district2" class="gd" onchange="set_area_code($(this));">
                                    <option value="0">请选择区/县</option></select>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="t">联系人</div>
                            <input type="text" placeholder="请输入联系人姓名" name="truename" id="truename2"></div>
                        <input type="hidden" name="port_from" id="port_from" value="1" />
                        <input type="hidden" name="" id="admin_add_value2" value="1">
                        <input type="hidden" name="admin_add" id="admin_add2" value="">
                        <div class="btn-submit">
                            <input type="submit" class="submit" value="立即提交"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="succseeTips">
    <p>信息提交成功！</p>
</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script>var winH = $(window).height() - $('header').outerHeight(true) - $('footer').outerHeight(true);
    $('#wrap-b .swiper-wrapper .swiper-slide').height(winH);
    var swiper1 = new Swiper('#wrap-s', {
        pagination: '#wrap-s .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper1 = new Swiper('#wrap-s1', {
        pagination: '#wrap-s1 .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper1 = new Swiper('#wrap-s2', {
        pagination: '#wrap-s2 .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper = new Swiper('#wrap-b', {
        paginationClickable: true,
        slidesPerView: 1,
        direction: 'vertical',
        paginationClickable: true
    });</script>
<script type="text/javascript">//创建和初始化地图函数：
    function initMap() {
        createMap(); //创建地图
        setMapEvent(); //设置地图事件
        addMapControl(); //向地图添加控件
        addMarker(); //向地图中添加marker
    }

    //创建地图函数：
    function createMap() {
        var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
        var point = new BMap.Point(116.506201, 39.789913); //定义一个中心点坐标
        map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map; //将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent() {
        map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
        map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard(); //启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl() {
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({
            anchor: BMAP_ANCHOR_TOP_LEFT,
            type: BMAP_NAVIGATION_CONTROL_LARGE
        });
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({
            anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
            isOpen: 0
        });
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({
            anchor: BMAP_ANCHOR_BOTTOM_LEFT
        });
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{
        title: "中企动力科技股份有限公司",
        content: "我的备注",
        point: "116.506507|39.789206",
        isOpen: 0,
        icon: {
            w: 21,
            h: 21,
            l: 0,
            t: 0,
            x: 6,
            lb: 5
        }
    }];
    //创建marker
    function addMarker() {
        for (var i = 0; i < markerArr.length; i++) {
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0, p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point, {
                icon: iconImg
            });
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title, {
                "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
            });
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor: "#808080",
                color: "#333",
                cursor: "pointer"
            });

            (function() {
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",
                function() {
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",
                function() {
                    _marker.getLabel().hide();
                }) _iw.addEventListener("close",
                function() {
                    _marker.getLabel().show();
                }) label.addEventListener("click",
                function() {
                    _marker.openInfoWindow(_iw);
                }) if ( !! json.isOpen) {
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i) {
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json) {
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
            imageOffset: new BMap.Size( - json.l, -json.t),
            infoWindowOffset: new BMap.Size(json.lb + 5, 1),
            offset: new BMap.Size(json.x, json.h)
        }) return icon;
    }

    initMap(); //创建和初始化地图
    </script>
<script type="text/javascript">var _mvq = window._mvq || [];
    window._mvq = _mvq;
    _mvq.push(['$setAccount', 'm-72632-0']);
    _mvq.push(['$setGeneral', '', '',
    /*用户名*/
    '中企动力科技',
    /*用户id*/
    '324879318']); //如果不传用户名、用户id，此句可以删掉
    _mvq.push(['$logConversion']); (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript';
        mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js': 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();</script>
<script type="text/javascript">$(function() {
        var position = ZQDL.position.getCity();
        var city = document.getElementsByName("city");
        var province = document.getElementsByName("province");
        var district = document.getElementsByName("district");
        var areacode = document.getElementById('area_code');
        var ii = city.length;
        for (var i = 0; i < ii; i++) {
            var res = get_inf(position.province, position.city, position.district, city[i], district[i]);
            if (res['city']) city[i].value = res['city'];
            if (res['province']) province[i].value = res['province'];
            if (res['district']) district[i].value = res['district'];
            if (res['areacode']) {
                areacode.value = res['areacode'];
            }
        }

    });</script>
