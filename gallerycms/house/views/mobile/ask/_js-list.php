<script>$('.xgt-search-btn').click(function() {
        var keyword = $('.xgt-list-search').val();
        location.href = "//m.to8to.com/xiaoguotu/search.php/keyword/" + keyword;
    }); $(function() {
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
