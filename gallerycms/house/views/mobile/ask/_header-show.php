<style>.icon-tbt,.icon-dt-hd2, .icon-navn2{ background: url('<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/10d63-8906.png') no-repeat; background-size: 187.5px 1087px; display: inline-block; } #dt-hd-nav .icon-dt-hd ,#dt-hd-nav .icon-dt-hd2 { display: block; } .navstyle3{ position: fixed; top: 0; width: 100%; z-index: 1111; } #dt-hd .icon-back { width: 10px; height: 10px; border-top: 2px solid #7c7c7c; border-left: 2px solid #7c7c7c; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); display: block; position: absolute; left: 15px; top: 16px; } .back-home-page{ text-align: left; padding-left: 28px; } .icon-dt-hd2{ width: 22px; height: 34px; background-position: -60px -296px; } .icon-tbt{ background-position: -127px -1068px; display: inline-block; height: 21px; width: 62px; margin-top: 11px; } .back-home-page a{ font-size: 14px; display: inline-block; padding-left: 4px; } .back-home-page a b{ vertical-align: 5px; display: inline-block; padding-left:4px; } .dn{ display: none; } #dt-hd-nav .dn{ display:none; } #dt-hd-nav{ width: 60px; height: 36px; } .loadapp-dt-hd{ position:relative; top:3px; z-index:10; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-text{ position:absolute; left:6px; z-index:2; width: 60px; height: 36px; } .loadapp-dt-hd .loadapp-icon{ position:relative; float:right; background-color: #F9F8F8; z-index:3; width: 62px; height: 25px; } .loadapp-dt-hd .loadapp-text p{ font-size:12px; line-height:12px; color:#5ACC9A; text-align:center; } .loadapp-dt-hd .loadapp-icon em{ display: block; width: 21px; height: 25px; background:url(<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/3503c-7033.png) no-repeat -92.5px -300px; background-size:187.5px 1087px; }</style>
<!-- 0级 -->
<!--二级-->
<header id="dt-hd" class="navstyle3">
    <a href="javascript:history.go(-1);" class="dt-hd-back-link">
        <i class="icon-back"></i>
    </a>
    <header id="dt-hd" class="navstyle3">
        <a class="zxzs-set" dataptag="2_3_10_487" href="  javascript:history.go(-1);  ">
            <i class="icon-back"></i>
        </a>
        <h1 class="back-home-page">
            <a class="zxzs-set" dataptag="2_3_10_487" href="http://m.to8to.com/bj">
                <span class="icon-tbt"></span>
                <b>首页</b>
            </a>
        </h1>
        <nav id="dt-hd-nav" class="zxzs-set" dataptag='2_3_10_495'>
            <i class="icon-dt-hd2 dn"></i>
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
        <div class="zxask-mask"></div>
    </header>
    <script type="text/javascript">$(document).ready(function() {
            /*动态确定返回链接*/
            $.ajax({
                'url': 'http://m.to8to.com/xiaoguotu/reUrl?' + Math.random(),
                'cache': false,
                'async': false,
                'type': 'get',
                'dataType': "json",
                'success': function(data) {
                    if (data) {
                        if (document.getElementById("rebackUrl")) {
                            var rebackUrl = (data.rebackUrl != undefined) ? data.rebackUrl: '/xiaoguotu';
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
    <nav id="dt-hd-nav">
        <i class="icon-dt-hd2" id="add_nav_hovers"></i>
    </nav>
    <div id="dt-hd-navs-wrap" class="hide">
        <ul class="dt-hd-navs">
            <li>
                <a class="goIndex" href="http://m.to8to.com">
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
                <a class="click-point" data-point="2_1_1_3" href="/bj/zb/index2.html">
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
</header>
<script>$(function() {
        $('#addhovers,#add_nav_hovers').on('touchstart',
        function() {
            $(this).addClass('add_hover');
        });
        $('#addhovers,#add_nav_hovers').on('touchend',
        function() {
            $(this).removeClass('add_hover');
        });

        // 更改导航栏
        if (location.href.indexOf('xiaoguotu/') > -1) {
            $('.loadapp-dt-hd').parent().siblings().removeClass('dn');
        } else {
            $('.loadapp-dt-hd').parent().removeClass('dn');
            setTimeout(gifLoadApp, 500);
            // 移除导航原来的dataptag，防止统计数据错误
            $('.loadapp-dt-hd').parent().parent().removeAttr('dataptag');
            $('.loadapp-dt-hd').parent().click(function() {
                var ptag = $(this).data('ptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag);
            });
        };
        function gifLoadApp() {
            $('.loadapp-icon').animate({
                width: '21px'
            },
            1000);
            $('.loadapp-text').animate({
                left: '-17px'
            },
            1000);
            $('.loadapp-dt-hd').parent().parent().unbind();
        }
    });</script>
