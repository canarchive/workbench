<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'index'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="main">
    <?= $this->render('_banner'); ?>
    <?= $this->render('_myservice'); ?>
    <?php //echo $this->render('_service_more'); ?>
    <?php //echo $this->render('_sample', ['infos' => $sampleInfos]); ?>
    <?= $this->render('_why'); ?>
    <?php //$this->render('_buildweb'); ?>
    <?= $this->render('_info', ['infos' => $infoInfos]); ?>
    <?= $this->render('_advantage'); ?>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.SuperSlide.2.1.1.js"></script>
<script>$(function() {
        var count = $("#slideBox .bd li").length;
        var html = '';
        for (var i = 0; i < count; i++) {
            html += i ? '<li></li>': '<li class="on"></li>';
        }
        $('#slideBox .hd ul').append(html);

        // banner轮播图
        jQuery(".slideBox").slide({
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPlay: true,
            mouseOverStop: true,
            height: 500,
            interTime: 5000
        });

        // 16那么年行业积累手风琴
        !
        function(a) {
            var b = function() {
                this.init()
            };
            b.prototype = {
                init: function() {
                    this.productShow()
                },
                productShow: function() {
                    var b = a(".J_productsBox"),
                    c = b.find("li.J_item"),
                    d = function() {
                        var b = a(window).width();
                        return 1200 > b ? !0 : !1
                    };
                    c.hover(function() {
                        var b = a(this),
                        e = d() ? 238 : 238,
                        f = d() ? 464 : 464;
                        c.not(b).stop().animate({
                            width: e
                        }).removeClass("on"),
                        b.stop().animate({
                            width: f
                        }).addClass("on")
                    }),
                    a(window).resize(function() {
                        c.filter(".on").mouseenter()
                    })
                }
            },
            new b
        } (jQuery);

        // 16年的行业积累
        var oSpeed = 600;
        var oTop = $('.qyjz-productlist li').height();
        $('.qyjz-productlist li').hover(function() {
            $(this).find('.qyjz-productlist-on').stop().animate({
                'top': 0
            },
            oSpeed);
        },
        function() {
            $(this).find('.qyjz-productlist-on').stop().animate({
                'top': -oTop
            },
            oSpeed);
        });

        $('.jz-service-close').click(function(event) {
            $(this).parent('.jz-service-open').hide().siblings('.jz-service-packup').show();
        });
        $('.jz-service-packup').mouseenter(function() {
            $(this).hide().siblings('.jz-service-open').show();
        });

        // 成熟解决方案Tab切换
        $("#J_plan_av").delegate("LI", "mouseover",
        function() {
            $("#J_plan_av > LI").removeClass("action");
            var n = $(this).addClass("action").attr("num");
            $("div.anli-main-plan-cell").hide();
            $("div.anli-main-plan-cell[num='" + n + "']").show();
        });

        //初始化典型案例宽度
        var count = $(".slid li").length;
        $(".slid ul").css("width", (count * 243) + "px");
        //初始化给按钮绑定事件
        $(".case-con a.slid_next").bind("click",
        function() {
            customerleft();
        });
        $(".case-con a.slid_prev").bind("click",
        function() {
            customerright();
        });
        //向左滚动
        function customerleft() {
            var a_next = $(".case-con a.slid_next");
            var ul = $(".slid ul");
            a_next.unbind("click");
            var count = $(".slid li").length - 1;
            var left = ul.position().left;
            var pleft = left - 243;
            var aleft = -1 * count * 243 + 1200;
            if (left <= aleft) {
                ul.animate({
                    right: '10px'
                },
                500,
                function() {
                    a_next.bind("click",
                    function() {
                        customerleft()
                    })
                });
            } else {
                ul.animate({
                    left: pleft + 'px'
                },
                400,
                function() {
                    a_next.bind("click",
                    function() {
                        customerleft()
                    })
                });
            }
        }
        //向右滚动
        function customerright() {
            var a_prev = $(".case-con a.slid_prev");
            var ul = $(".slid ul");
            a_prev.unbind("click");
            var count = $(".slid li").length;
            var left = ul.position().left;
            var pleft = left + 243;
            if (left >= 0) {
                ul.animate({
                    left: '0px'
                },
                500,
                function() {
                    a_prev.bind("click",
                    function() {
                        customerright()
                    })
                });
            } else {
                ul.animate({
                    left: pleft + 'px'
                },
                400,
                function() {
                    a_prev.bind("click",
                    function() {
                        customerright()
                    })
                });
            }
        }
    });</script>
