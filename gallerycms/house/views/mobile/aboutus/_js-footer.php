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
