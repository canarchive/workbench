<header id="dt-hd" class="navstyle4">
    <a id="rebackUrl" href="" class="dt-hd-back-link">
        <i class="icon-back-white"></i>
    </a>
    <script type="text/javascript">$(document).ready(function() {
            /*动态确定返回链接*/
            /*$.ajax({
                'url': '//m.to8to.com/xiaoguotu/reUrl?' + Math.random(),
                'cache': false,
                'async': false,
                'type': 'get',
                'dataType': "json",
                'success': function(data) {
                    if (data) {
                        if (document.getElementById("rebackUrl")) {
                            var rebackUrl = "/xiaoguotu/tuce/?xgt=xgt";
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
            });*/
        });</script>
    <!--右边导航按钮-->
    <!--<nav id="dt-hd-nav">
        <i class="icon-dt-hd-white"></i>
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
    </div>-->
    <span class="img-count"></span>
</header>
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
<style>.login-heads-frame span{display:none} .shade-layer{ position: fixed; left: 0px; top: 0px; z-index: 99; text-align: center; bottom: 0px; right: 0px; display: block; background-color: rgba(0, 0, 0, 0.543); } .shade-xg-bg{ background: url(<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/3595f-5768.png) no-repeat; z-index: 999; display: inline-block; width: 240px; height: 154px; position: absolute; background-size: 239px 154px; left: 50%; bottom: 71px; margin-left: -120px; } .shade-xg-bg map area{ width: 114px; height: 32px; display: block; position: absolute; top: 78px; right: 25px; border-radius: 5px; } .overlay-btn-ok em{ position: absolute; display: block; width: 36px; height: 36px; bottom: -1px; left: 45%; background: url("<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/3503c-7033.png") no-repeat -262px -504px; }</style>
