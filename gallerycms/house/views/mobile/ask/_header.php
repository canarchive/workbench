<!--body onselectstart="return false" -->
<style>.bodymargintop{ margin-top:44px; } #dt-hd.navstyle2{ padding: 0; position: fixed; z-index: 39; width: 100%; top: 0; } .icon-tbt { background: url('http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/10d63-8906.png') no-repeat; background-size: 187.5px 1087px; background-position: -128px -1068px; display: inline-block; height: 21px; width: 62px; margin-top: 11px; margin-left: 27px; } .back-home-page a b { vertical-align: 5px; display: inline-block; padding-left: 4px; font-size:14px; } #back { width: 10px; height: 10px; border-top: 2px solid #7c7c7c; border-left: 2px solid #7c7c7c; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); display: block; position: absolute; left: 15px; top: 16px; z-index: 10; } .navigation{ height:34px!important; background-position: -60px -296px!important; top: 7px!important; } .dn{ display: none; } #dt-hd-nav .dn{ display:none; } .loadapp-dt-hd{ position:relative; top:3px; z-index:10; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-text{ position:absolute; left:6px; z-index:2; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-icon{ position:relative; float:right; background-color: #fff; z-index:3; width: 62px; height: 25px; } .loadapp-dt-hd .loadapp-text p{ font-size:12px; line-height:12px; color:#5ACC9A; text-align:center; } .loadapp-dt-hd .loadapp-icon em{ display: block; width: 21px; height: 25px; background:url(http://60.205.145.0/filesys/spider/pages/asset/plat8/m/img/3503c-7033.png) no-repeat -92.5px -300px; background-size:187.5px 1087px; }</style>
<!-- 0级 -->
<!--二级-->
<header id="dt-hd" class="navstyle2">
    <a class="zxzs-set" dataptag="2_3_10_487" href="//m.to8to.com/bj">
        <i id="back"></i>
    </a>
    <h1 class="back-home-page">
        <a class="zxzs-set" dataptag="2_3_10_487" href="//m.to8to.com/bj">
            <span class="icon-tbt"></span>
            <b>首页</b>
        </a>
    </h1>
    <script type="text/javascript">$(document).ready(function() {
            /*动态确定返回链接*/
            $.ajax({
                'url': '//m.to8to.com/xiaoguotu/reUrl?' + Math.random(),
                'cache': false,
                'async': false,
                'type': 'get',
                'dataType': "json",
                'success': function(data) {
                    if (data) {
                        if (document.getElementById("rebackUrl")) {
                            var rebackUrl = "//m.to8to.com/bj";
                            if (rebackUrl == '') {
                                var rebackUrl = (data.rebackUrl != undefined) ? data.rebackUrl: '/xiaoguotu';
                            }
                            document.getElementById("rebackUrl").href = rebackUrl;
                        }
                        if (document.getElementById("pre_Url")) {
                            var pre_Url = (data.pre_Url != undefined) ? data.pre_Url: '/xiaoguotu';
                            document.getElementById("pre_Url").href = pre_Url;
                        }
                    }
                }
            });
        });</script>
    <!--右边导航按钮-->
    <nav id="dt-hd-nav">
        <i class="icon-dt-hd navigation dn" id="add_nav_hovers"></i>
        <a href="/apps?headiptag=2_7_18_1177&headaptag=2_7_18_1178" data-ptag="2_7_18_1176" class="dn">
            <div class="loadapp-dt-hd">
                <div class="loadapp-text">
                    <p>一站式</p>
                    <p>装修神器</p>
                </div>
                <div class="loadapp-icon">
                    <em></em>
                </div>
            </div>
        </a>
    </nav>
    <div id="dt-hd-navs-wrap" class="hide">
        <ul class="dt-hd-navs">
            <li>
                <a class="goIndex" href="//m.to8to.com">
                    <i class="icon-navf0"></i>
                    <p>首页</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_1" href="/xiaoguotu">
                    <i class="icon-navf1"></i>
                    <p>效果图</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_2" href="/yezhu/zxbj.php?from=144">
                    <i class="icon-navf2">
                        <em>免费</em></i>
                    <p>装修报价</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_3" href="//m.to8to.com/tuiguang/mfsj/index.html?ptag=2_1_1_3">
                    <i class="icon-navf3">
                        <em>免费</em></i>
                    <p>户型设计</p>
                </a>
            </li>
            <li>
                <a class="click-point city-update-left" data-point="2_1_1_6" href="/company/">
                    <i class="icon-navf4"></i>
                    <p>找公司</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_4" href="/company/zxb.php">
                    <i class="icon-navf6">
                        <em>免费</em></i>
                    <p>装修保</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_5" href="/gonglve/">
                    <i class="icon-navf5"></i>
                    <p>学装修</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_7" href="/mall/">
                    <i class="icon-navf8"></i>
                    <p>品牌特卖</p>
                </a>
            </li>
            <li>
                <a class="click-point" data-point="2_1_1_8" href="/news/">
                    <i class="icon-navf9"></i>
                    <p>资讯</p>
                </a>
            </li>
        </ul>
    </div>
    <!--页码-->
    <span class="img-count"></span>
</header>
<script>$('.xgt-search-btn').click(function() {
        var keyword = $('.xgt-list-search').val();
        location.href = "//m.to8to.com/xiaoguotu/search.php/keyword/" + keyword;
    }) $(function() {
        if (location.href.indexOf('xiaoguotu/') > -1) {
            $('.loadapp-dt-hd').parent().siblings().show();
        } else {
            $('.loadapp-dt-hd').parent().show().siblings().hide();
            setTimeout(gifLoadApp, 500);
        }
        $('#addhovers,#add_nav_hovers').on('touchstart',
        function() {
            $(this).addClass('add_hover');

        });
        $('#addhovers,#add_nav_hovers').on('touchend',
        function() {
            $(this).removeClass('add_hover');
        });

        if (window.location.pathname === '/mall/zcb/' || window.location.pathname === '/mall/zcb') {
            if (getQueryString('appostype') && $('#dt-hd.navstyle2').length > 0) {
                $('#dt-hd.navstyle2').remove();
            } else if (!getQueryString('appostype') && $('#dt-hd.navstyle2').length != 1) {
                $('#pageContain').before('<header id="dt-hd" class="navstyle2"><a class="icon-logo-index goIndex" href="//m.to8to.com/sz"></a><h1>· 主材包</h1><nav class="login-heads-frame"><a href="/my/my/index"><span class="login-heads-top" id="addhovers"></span></a></nav><nav id="dt-hd-nav"><i class="icon-dt-hd" id="add_nav_hovers"></i></nav><div id="dt-hd-navs-wrap" class="hide"><ul class="dt-hd-navs"><li><a class="goIndex" href="//m.to8to.com/sz"><i class="icon-navf0"></i><p>首页</p></a></li><li><a class="click-point" data-point="2_1_1_1" href="/xiaoguotu"><i class="icon-navf1"></i><p>效果图</p></a></li><li><a class="click-point" data-point="2_1_1_2" href="/yezhu/zxbj.php?from=144"><i class="icon-navf2"></i><p>装修报价</p></a></li><li><a class="click-point" data-point="2_1_1_2" href="/sz/zb/index2.html"><i class="icon-navf3"></i><p>户型设计</p></a></li><li><a class="click-point city-update-left" data-point="2_1_1_6" href="/sz/company/"><i class="icon-navf4"></i><p>找公司</p></a></li><li><a class="click-point" data-point="2_1_1_4" href="/company/zxb.php"><i class="icon-navf6"></i><p>装修保</p></a></li><li><a class="click-point" data-point="2_1_1_5" href="/gonglve/"><i class="icon-navf5"></i><p>学装修</p></a></li><li><a class="click-point" data-point="2_1_1_7" href="/mall/"><i class="icon-navf8"></i><p>品牌特卖</p></a></li><li><a class="click-point" data-point="2_1_1_8" href="/news/"><i class="icon-navf9"></i><p>资讯</p></a></li></ul></div></header>');
            }
        }
        $('.loadapp-dt-hd').parent().one('click',
        function() {
            var ptag = $('.loadapp-dt-hd').parent().data('ptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag);
        });
        function gifLoadApp() {
            $('.loadapp-dt-hd').parent().parent().unbind();
            $('.loadapp-icon').animate({
                width: '21px'
            },
            1000);
            $('.loadapp-text').animate({
                left: '-17px'
            },
            1000);
        }
        function getQueryString(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) {
                return unescape(r[2]);
            }
            return null;
        }
        // app中打开隐藏头部
        // 判断是否to8to app商城
        function is_to8toapp() {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/to8toapp/i) == "to8toapp") {
                return true;
            } else {
                return false;
            }
        }
        function is_weixin() {
            var ua = navigator.userAgent.toLowerCase();
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                return true;
            } else {
                return false;
            }
        }
        if (is_to8toapp() || is_weixin() || document.location.href.indexOf('to8to_from=wechat') != -1 || document.location.hash.indexOf('fromapp=app') != -1 || document.location.href.indexOf('to8to_from=zhidahao') != -1 || document.location.hash.indexOf('from=app') != -1 || document.location.href.indexOf('fromapp=app') != -1 || document.location.href.indexOf('ajk_from=1') != -1) {
            if (document.getElementById("dt-hd")) {
                $("#dt-hd").css("display", "none");
            }
            if ($(".navstyle2").length > 0) {
                $(".navstyle2").css("display", "none");
            }
            $('.cc-box-style').css('top', '0px');
            if (document.getElementById('menu')) {
                $('#menu').css('top', '0px');
            }
            if (document.getElementById('xgtSearchResultSearchWrap')) {
                $('#xgtSearchResultSearchWrap').css('top', '0px');
            }
        } else {
            if ($('#dt-hd.navstyle2').is(':visible')) {
                $('body').addClass('bodymargintop');
            }
        }
    });</script>
<script>(function() {
        function fullstoryFuc() {

            function setCookie(c_name, value, exdays) {
                var exdate = new Date();
                exdate.setDate(exdate.getDate() + exdays);
                var c_value = escape(value) + ((exdays == null) ? "": "; expires=" + exdate.toUTCString());
                document.cookie = c_name + "=" + c_value + ';path=/;domain=.to8to.com';
            }
            function getCookie(c_name) {
                var c_value = document.cookie;
                var c_start = c_value.indexOf(" " + c_name + "=");
                if (c_start == -1) {
                    c_start = c_value.indexOf(c_name + "=");
                }
                if (c_start == -1) {
                    c_value = null;
                } else {
                    c_start = c_value.indexOf("=", c_start) + 1;
                    var c_end = c_value.indexOf(";", c_start);
                    if (c_end == -1) {
                        c_end = c_value.length;
                    }
                    c_value = unescape(c_value.substring(c_start, c_end));
                }
                return c_value;
            }
            function getSearchWord() {
                var ref = '';
                if (document.referrer.length > 0) {
                    ref = document.referrer;
                } else {
                    if (opener) {
                        ref = opener.location.href;
                    };
                }
                if (ref && ref != '') {
                    var query = ref.split('?')[1] || '';

                    var queryList = query.substr(0).split('&');

                    if (queryList.length > 0) {
                        for (var i = 0; i < queryList.length; i++) {
                            var kv = queryList[i].split('=');
                            if ((kv[0] == 'wd' || kv[0] == 'word') && kv[1] && kv[1] != '') {
                                return kv[1];
                            };
                        }
                    }
                    return '';
                };
            }

            window['_fs_debug'] = false;
            window['_fs_host'] = 'www.fullstory.com';
            window['_fs_org'] = '1MTWJ';
            window['_fs_namespace'] = 'FS'; (function(m, n, e, t, l, o, g, y) {
                if (e in m && m.console && m.console.log) {
                    m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');
                    return;
                }
                g = m[e] = function(a, b) {
                    g.q ? g.q.push([a, b]) : g._api(a, b);
                };
                g.q = [];
                o = n.createElement(t);
                o.async = 1;
                o.src = 'https://' + _fs_host + '/s/fs.js';
                y = n.getElementsByTagName(t)[0];
                y.parentNode.insertBefore(o, y);
                g.identify = function(i, v) {
                    g(l, {
                        uid: i
                    });
                    if (v) g(l, v)
                };
                g.setUserVars = function(v) {
                    g(l, v)
                };
                g.identifyAccount = function(i, v) {
                    o = 'account';
                    v = v || {};
                    v.acctId = i;
                    g(o, v)
                };
                g.clearUserCookie = function(d, i) {
                    d = n.domain;
                    while (1) {
                        n.cookie = 'fs_uid=;domain=' + d + ';path=/;expires=' + new Date(0);
                        i = d.indexOf('.');
                        if (i < 0) break;
                        d = d.slice(i + 1)
                    }
                }
            })(window, document, window['_fs_namespace'], 'script', 'user');
            $(function() {
                var fs_uid = getCookie('fs_uid');
                var searchword = getSearchWord();

                if (searchword && searchword != '') {
                    FS.identify(fs_uid, {
                        searchword_str: searchword
                    });
                };
            });
            window.onload = function() {

                setTimeout(function() {
                    var fs_uid = getCookie('fs_uid') ? getCookie('fs_uid').replace(/`/g, '') : '';
                    if (!fs_uid || fs_uid == '') {
                        return;
                    };
                    setCookie('fs_uid', new Date().getTime(), 360000000000);
                },
                2000)

            };
        }
        var random = parseInt(Math.random() * 5); //20%概率
        if (!random) {
            fullstoryFuc();
        }
    })()</script>
