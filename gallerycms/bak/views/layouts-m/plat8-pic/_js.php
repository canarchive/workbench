<script>jQuery(function($) {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var IsWeixin = sUserAgent.match(/MicroMessenger/i) == "micromessenger";
        if (IsWeixin) {
            $("#apply").attr('href', 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx23b5153a96c64877&redirect_uri=http://m.to8to.com/bj/zb/index2.html?to8to_from=wechat&response_type=code&scope=snsapi_userinfo&state=to8toweixin#wechat_redirect#point=2_2_1_1');
        }

        //页面来自app的分享
        if (document.location.hash.indexOf('from=app') > -1) {
            var ptag = '';
            if (ptag) {
                $('a.click-point').attr('data-point', ptag);
                $('a.click-point').attr('href', 'http://m.to8to.com/yezhu/zxbj.php?from=144&fromapp=1#point=' + ptag);
            }
        }
    });</script>
<script>//获取当前cookie的最大时间限度
    function setCookie1(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setTime(exdate.getTime() + exdays);
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
    }</script>
<script>(function() {
        // 编辑弹窗
        var recordptag = [],
        startTime = 0,
        endTime = 0,
        is_move = true;
        function popLoadApp() {
            var imgVisibleSrc = $('.swiper-slide-active').find('img').attr('src'),
            thistext = $('.atag').find('a').eq(1).text(),
            common = Components.simplepop(),
            poploadstr = '<div class="pop-mainbody">' + '<div class="pop-body-img">' + '<img src="' + imgVisibleSrc + '" alt="">' + '</div>' + '<div class="pop-body-text">' + '<img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/09518-8933.png">' + '<p>——已妥妥给你准备更多——</p>' + '<p class="pop-huxing"><span>' + thistext + '</span>美图</p>' + '</div>' + '<a class="pop-button" href="/apps?mxgtdi=2_2_10_1212&mxgtda=2_2_10_1213">' + '<p>马上打开土巴兔APP</p>' + '<em></em>' + '</a>' + '</div>';
            common();
            // 曝光弹窗
            (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_2_10_1210');
            $('#alertOveryLayer:visible .overlay-bd').css({
                'padding': '0',
                'border-radius': '4px',
                'margin': '0 auto'
            }).height(220).width(240).html(poploadstr);
            $('#alertOveryLayer:visible .overlay-btn-ok').html('<em></em>').width(0).css('margin', '0 auto');
            $('#alertOveryLayer:visible .overlay-foot').css({
                'border': '0'
            });
            $('#alertOveryLayer:visible .alert-lay').parent().css('top', '27%');
            $('#alertOveryLayer:visible .overlay-bd').find('.pop-mainbody').on('touchstart touchmove touchend',
            function(e) {
                switch (e.type) {
                case 'touchstart':
                    is_move = false;
                    startTime = Date.parse(new Date());
                    break;
                case 'touchmove':
                    is_move = true;
                    break;
                case 'touchend':
                    endTime = Date.parse(new Date());
                    if (!is_move) {
                        // 点击跳转
                        if (endTime - startTime < 300) { (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_2_10_1211');
                            window.location.href = "/apps?mxgtdi=2_2_10_1212&mxgtda=2_2_10_1213";
                        }
                    }
                    is_move = true;
                    break;
                default:
                    return;
                    break;
                }
            });
        }
        $('.show-shoucang-ad').on('touchstart touchmove touchend', 'p',
        function(e) {
            switch (e.type) {
            case 'touchstart':
                is_move = false;
                startTime = Date.parse(new Date());
                break;
            case 'touchmove':
                is_move = true;
                break;
            case 'touchend':
                endTime = Date.parse(new Date());
                if (!is_move) {
                    // 点击加载弹窗事件
                    if (endTime - startTime < 300) {
                        popLoadApp();
                    }
                }
                is_move = true;
                break;
            default:
                return;
                break;
            }
        });
    })()</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/plat8rsas.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/zbcommon.js"></script>
<div style="display:none">
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/5aaf0-1267.jpg' alt='欧式精致奢华二居室装修效果图' />
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/1aef6-8466.jpg' alt='欧式精致奢华卧室装修效果图' />
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/37d4d-8972.jpg' alt='欧式精致奢华餐厅装修效果图' />
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/aac84-9748.jpg' alt='欧式精致奢华电视背景墙装修效果图' />
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/336f2-1586.jpg' alt='欧式精致奢华过道装修效果图' />
    <img src='<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/ceb38-4961.jpg' alt='欧式精致奢华客厅设计效果图' /></div>
<script>var param = {
        'detail_data': [{
            "pid": "566645",
            "hxid": "2",
            "styleid": "2",
            "zoneid": "14",
            "partid": "0",
            "oldcid": "10042454",
            "oldaid": "10506520",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_68691369da65cbd8dd12d5va7rvns1b7.jpg",
            "issmall": "1",
            "caseid": "0",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u4e8c\u5c45\u5ba4\u88c5\u4fee\u6548\u679c\u56fe",
            "source": "0",
            "width": "860",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_68691369da65cbd8dd12d5va7rvns1b7_r.jpg",
            "size": [100, 80],
            "style": "\u6b27\u5f0f",
            "huxi": "\u4e8c\u5c45",
            "part": -1,
            "zone": -1
        },
        {
            "pid": "566642",
            "hxid": "0",
            "styleid": "2",
            "zoneid": "2",
            "partid": "0",
            "oldcid": "10042454",
            "oldaid": "10506517",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_c3373d21d3ced586acf5cz59guogbzjj.jpg",
            "issmall": "1",
            "caseid": "566641",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u5367\u5ba4\u88c5\u4fee\u6548\u679c\u56fe",
            "source": "0",
            "width": "859",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_c3373d21d3ced586acf5cz59guogbzjj_r.jpg",
            "size": [100, 80],
            "style": "\u6b27\u5f0f",
            "huxi": -1,
            "part": -1,
            "zone": "\u5367\u5ba4"
        },
        {
            "pid": "566643",
            "hxid": "0",
            "styleid": "2",
            "zoneid": "3",
            "partid": "0",
            "oldcid": "10042454",
            "oldaid": "10506518",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_d775810e4e766b8698690kcsfg6wwx6r.jpg",
            "issmall": "1",
            "caseid": "566641",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u9910\u5385\u88c5\u4fee\u6548\u679c\u56fe",
            "source": "0",
            "width": "544",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_d775810e4e766b8698690kcsfg6wwx6r_r.jpg",
            "size": [100, 126],
            "style": "\u6b27\u5f0f",
            "huxi": -1,
            "part": -1,
            "zone": "\u9910\u5385"
        },
        {
            "pid": "566644",
            "hxid": "0",
            "styleid": "2",
            "zoneid": "14",
            "partid": "336",
            "oldcid": "10042454",
            "oldaid": "10506519",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_8e748549710e5a417ea7ocegqo7y4xek.jpg",
            "issmall": "1",
            "caseid": "566641",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u7535\u89c6\u80cc\u666f\u5899\u88c5\u4fee\u6548\u679c\u56fe",
            "source": "0",
            "width": "867",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_8e748549710e5a417ea7ocegqo7y4xek_r.jpg",
            "size": [100, 79],
            "style": "\u6b27\u5f0f",
            "huxi": -1,
            "part": "\u80cc\u666f\u5899",
            "zone": -1
        },
        {
            "pid": "566641",
            "hxid": "0",
            "styleid": "2",
            "zoneid": "9",
            "partid": "0",
            "oldcid": "10042454",
            "oldaid": "10506516",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_a47a9769b543378c7a48o08ndfs0bvqi.jpg",
            "issmall": "1",
            "caseid": "1",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u8fc7\u9053\u88c5\u4fee\u6548\u679c\u56fe",
            "source": "0",
            "width": "861",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_a47a9769b543378c7a48o08ndfs0bvqi_r.jpg",
            "size": [100, 80],
            "style": "\u6b27\u5f0f",
            "huxi": -1,
            "part": -1,
            "zone": "\u8fc7\u9053"
        },
        {
            "pid": "566646",
            "hxid": "0",
            "styleid": "2",
            "zoneid": "1",
            "partid": "0",
            "oldcid": "10042454",
            "oldaid": "10506521",
            "filename": "http:\/\/pic.to8to.com\/case\/1611\/01\/20161101_27efccb08042137998cfgkw8ty1qh1mp.jpg",
            "issmall": "1",
            "caseid": "566641",
            "title": "\u6b27\u5f0f\u7cbe\u81f4\u5962\u534e\u5ba2\u5385\u8bbe\u8ba1\u6548\u679c\u56fe",
            "source": "0",
            "width": "874",
            "height": "690",
            "edittime": "1477979400",
            "thumb": "http:\/\/pic.to8to.com\/smallcase\/1611\/01\/20161101_27efccb08042137998cfgkw8ty1qh1mp_r.jpg",
            "size": [100, 78],
            "style": "\u6b27\u5f0f",
            "huxi": -1,
            "part": -1,
            "zone": "\u5ba2\u5385"
        }],
        'dataurl': '/xiaoguotu/getDetailData-0-0-0',
        'data_type': 'c'
    };
    if (location.hash == "#from=app") {
        $("#apphigh").css("display", "none");
    };</script>
<script>(function() {
        /**
         * 输入状态下隐藏导航栏
         */
        function initInputSelectFocus() {
            var dom_arr = document.querySelectorAll('input[type="text"]');
            var sel_arr = document.querySelectorAll('select');
            var txt_arr = document.querySelectorAll('textarea');
            var dom_len = dom_arr.length;
            var sel_len = sel_arr.length;
            var txt_len = txt_arr.length;
            if (sel_len > 0) {
                for (var i = 0; i < sel_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = sel_arr[i];
                }
                dom_len += sel_len;
            }
            if (txt_len > 0) {
                for (var i = 0; i < txt_len; i++) {
                    var _i = dom_len + i;
                    dom_arr[_i] = txt_arr[i];
                }
                dom_len += txt_len;
            }
            if (dom_len > 0) {
                var fix_dom = document.querySelector('.footer-fix');
                var screen_dom = document.querySelector('.screen');
                for (var i = 0; i < dom_len; i++) {
                    if (!dom_arr[i]) {
                        continue;
                    }
                    dom_arr[i].addEventListener('focus',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'none');
                        if (screen_dom) {
                            screen_dom.style.display = 'none';
                        }
                    },
                    false);
                    dom_arr[i].addEventListener('blur',
                    function() {
                        fix_dom && fix_dom.style && (fix_dom.style.display = 'block');
                    },
                    false);
                }
            }
        }
        initInputSelectFocus();
    })();</script>
<script>var browser = {
        versions: function() {
            var u = navigator.userAgent,
            app = navigator.appVersion;
            return { //移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1,
                //IE内核
                presto: u.indexOf('Presto') > -1,
                //opera内核
                webKit: u.indexOf('AppleWebKit') > -1,
                //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/),
                //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                //android终端或uc浏览器
                iPhone: u.indexOf('iPhone') > -1,
                //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1,
                //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        } ()
    };
    if (browser.versions.iPad) {
        $('head').find('meta[name=viewport]').attr('content', 'initial-scale=1.0,user-scalable=no,maximum-scale=1');
    }</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/provincesselect.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/compricepop.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/xgtdetail-list.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>
