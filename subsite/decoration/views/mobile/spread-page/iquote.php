<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
        <meta name="format-detection" content="telephone=no" />
        <meta content="no-cache" http-equiv="pragma">
        <meta content="no-cache" http-equiv="cache-control">
        <meta content="0" http-equiv="expires">
        <title>装修费用计算</title>
        <script type="text/javascript">var postFix = 'bj';</script>
        <link href="http://60.205.145.0/filesys/spider/pages/asset/collect/m/css/8f81b-4054.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/cookie.utils.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/first.visit.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/user.source.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/reservation.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/jquery.animatenumber.min.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/geetest.js"></script>
        <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/countdown.js"></script>
        <script src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/js/gt.js"></script>
    </head>
    
    <body>
        <header class="head headTitle">
            <a class="back" href="javascript:history.go(-1)">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/6580d-1297.png" alt="返回"></a>
            <h1 class="title">装修费用计算</h1></header>
        <section class="costCount">
            <div class="countBox">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/883a4-8158.jpg" alt="免费获取装修报价" />
                <div class="useNum">已有
                    <span id="num">0</span>个业主获取了装修报价</div>
                <div class="count">
                    <p>
                        <input type="number" name="area" id="area" value="" placeholder="请输入您的房屋面积">
                        <span>m²</span></p>
                    <p>
                        <input type="text" name="userName" id="userName" value="" placeholder="请输入您的姓名"></p>
                    <p>
                        <input type="tel" name="mobile" id="mobile" value="" placeholder="请输入手机号，报价结果将发送到您的手机"></p>
                    <button class="submitBtn">立即获取报价</button></div>
            </div>
            <script type="text/javascript">$(document).ready(function() {
                    $.post("/bj/reservation/getReservationNum", {},
                    function(data) {
                        $('#num').animateNumber({
                            number: data
                        },
                        1500);
                    }); $('.submitBtn').click(function() {
                        var userName = $('#userName').val(),
                        mobile = $('#mobile').val(),
                        area = $('#area').val();
                        if (area == null || area == '' || !(area >= 1 && area <= 10000)) {
                            error('请填写正确的房屋面积');
                            return;
                        }
                        if (userName == null || userName == '') {
                            error('用户名不能为空');
                            return;
                        }
                        if (mobile == null || mobile == '') {
                            error('手机号不能为空');
                            return;
                        }
                        $(this).initCaptcha(function() {
                            $.decorateCost(userName, mobile, area,
                            function() {
                                $('#userName, #mobile, #area').val('');
                            })
                        })
                    })
                })</script>
        </section>
        <script type="text/javascript">function errorCss() {
                $('.loginPop').css({
                    'position': 'fixed',
                    'width': '100%',
                    'height': '100%',
                    'background': 'rgba(2,2,7,.5)',
                    'top': '0',
                    'left': '0',
                    'z-index': '3'
                }), $('.loginPopDiv').css({
                    'background': '#fff',
                    'margin': '50% auto 0',
                    'border-radius': '0.572rem',
                    'width': '19.286rem',
                    'min-height': '8.572rem',
                    'display': 'table',
                }), $('.loginPopDivBno').css({
                    'border-radius': '0.572rem 0.572rem 0 0',
                    'min-height': '7.3rem'
                }), $('.loginPopDiv p').css({
                    'font-size': '1.14286rem',
                    'text-align': 'center',
                    'display': 'table-cell',
                    'vertical-align': 'middle',
                    'padding': '1.64282rem',
                    'line-height': '2rem'
                }), $('.loginPopAn').css({
                    'background': '#fff',
                    'margin': '0 auto',
                    'border-radius': '0 0 0.572rem 0.572rem',
                    'width': '19.286rem',
                    'height': '3.3rem',
                    'line-height': '3.3rem',
                    'border-top': '0.1rem solid #E8E8EF',
                    'overflow': 'hidden'
                }), $('.loginPopAn a').css({
                    'text-align': 'center',
                    'float': 'left',
                    'font-size': '1.14286rem',
                    'width': '50%'
                }), $('.loginPopAn a').eq('0').css({
                    'border-right': '0.1rem solid #E8E8EF'
                })
            }
            function error(text) {
                var divPop = $('<div/>').addClass('loginPop'),
                divText = $('<div/>').addClass('loginPopDiv'),
                p = $('<p/>').text(text);
                $('body').append(divPop.append(divText.append(p))); errorCss();
                setTimeout(function() {
                    $(".loginPop").remove();
                },
                1500);
            }</script>
        <script>(function(i, s, o, g, r, a, m) {
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
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-86401214-1', 'auto');

            var dimensionValue = 'M Site';

            ga('set', 'dimension1', dimensionValue);
            ga('send', 'pageview');</script>
        <script>var _hmt = _hmt || []; (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?4a42e83d2abaa0082a208bd5a6278147";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();</script>
        <script>var _hmt = _hmt || []; (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?209cc82573b5c2784301c2b03973d792";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();</script>
        <!-- Piwik -->
        <script type="text/javascript">var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['trackVisibleContentImpressions']);
            _paq.push(['enableLinkTracking']); (function() {
                var u = "//piwik.ikongjian.com/";
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                _paq.push(['setSiteId', 5]);
                _paq.push(['setCookiePath', '/bj']);
                _paq.push(['setDomains', 'm.ikongjian.com/bj']);
                _paq.push(['setTrackerUrl', u + 'piwik.php']);
                var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
                g.type = 'text/javascript';
                g.async = true;
                g.defer = true;
                g.src = u + 'piwik.js';
                s.parentNode.insertBefore(g, s);
            })();</script>
        <noscript>
            <p>
                <img src="//piwik.ikongjian.com/piwik.php?idsite=5" style="border:0;" alt="" /></p>
        </noscript>
        <!-- End Piwik Code -->
        <!-- 品友访客 -->
        <script type="text/javascript">var _py = _py || [];
            _py.push(['a', 'g684T..yx2WkNsu_FIXccucE4J2lP']);
            _py.push(['domain', 'stats.ipinyou.com']);
            _py.push(['e', '']); -
            function(d) {
                var s = d.createElement('script'),
                e = d.body.getElementsByTagName('script')[0];
                e.parentNode.insertBefore(s, e),
                f = 'https:' == location.protocol;
                s.src = (f ? 'https': 'http') + '://' + (f ? 'fm.ipinyou.com': 'fm.p0y.cn') + '/j/adv.js';
            } (document);</script>
        <noscript>
            <img src="http://60.205.145.0/filesys/spider/pages/asset/collect/m/img/a360f-1320.gif" style="display:none;" /></noscript>
        <img src="http://c.cnzz.com/wapstat.php?siteid=1261312677&r=&rnd=804664944" width="0" height="0" /></body>

</html>
