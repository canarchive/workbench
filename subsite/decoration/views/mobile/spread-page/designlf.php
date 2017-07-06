<?php
use yii\helpers\Url;
use yii\helpers\Html;

Yii::$app->params['tdkInfos']['title'] = '北京装修公司_北京家装设计_家居装饰-兔班长装修网北京';
Yii::$app->params['tdkInfos']['description'] = '北京装修公司,北京装饰公司,北京家装设计,北京家庭装修,北京家装';
Yii::$app->params['tdkInfos']['keyword'] = '北京兔班长装修网提供北京装修公司、北京装饰公司、北京家装设计、北京建材团购、北京家居家具团购等相关服务信息。';
$urls = $this->context->navUrls;
?>
<link rel="shortcut icon" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/common/css/swiper.min.css"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/common/css/appcommon.css"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/app/mycss/mycss.css"/>
<link rel="stylesheet" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/app/mycss/quote.css"/>
<header class="quote_header cWhite cDGray clear">
    <div class="lf quote_img">
        <a href="">
            <!--<img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/db9f5-1759.png" alt=""/>-->
            <span>兔班长装修网</span>
        </a>
    </div>
    <div class="rt quote_title">
        <a href="<?= $urls['index'] . '/beijing/'; ?>">北京</a>
    </div>
</header>
<!--banner-->
<div class="quote_banner">
    <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/ys_banner.jpg" alt=""/>
</div>
<!--step-->
<div class="design_step clearfix">
    <dl>
        <dt>
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_03_.png" alt=""/>
        </dt>
        <dd>上门量房</dd>
    </dl>
    <div class="border_off"></div>
    <dl>
        <dt>
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_05_.png" alt=""/>
        </dt>
        <dd>免费设计</dd>
    </dl>
    <div class="border_off"></div>
    <dl>
        <dt>
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_07_.png" alt=""/>
        </dt>
        <dd>免费预约</dd>
    </dl>
</div>
<!--滚动视图-->
<div class="quote_scroll">
    <ul type="box">
        <li>
            <i></i><span>【北京】16秒钟前 席女士计算了装修报价</span>
        </li>
        <li>
            <i></i><span>【北京】17秒钟前 席女士计算了装修报价</span>
        </li>
        <li>
            <i></i><span>【北京】18秒钟前 席女士计算了装修报价</span>
        </li>
        <li>
            <i></i><span>【北京】19秒钟前 席女士计算了装修报价</span>
        </li>
    </ul>
</div>
<p class="cutoff_rule"></p>
<!--剩余人数-->
<div class="design_count">
    今日仅剩
        <span class="num">
            <div class="design_img">
                <span class="num1 animated infinite pulse">0</span>
            </div>
            <div class="design_img">
                <span class="num2 animated infinite pulse">8</span>
            </div>
            <div class="design_img">
                <span class="num3 animated infinite pulse">7</span>
            </div>
        </span>
    免费名额
</div>
<!--询价列表-->
<section class="quote_list">
    <form id="quote_form" class="quote_form">
        <!--输入面积-->
        <div>
            <input name="meter" placeholder="请输入您的房屋面积"/>
        </div>
        <!--输入手机号码-->
        <div>
            <input type="tel" name="phone" placeholder="请输入您的手机号码"/>
        </div>
        <!--选择城市-->
        <div>
            <input type="text" id="myAddrs" name="addr" data-key="1-36" value="北京 北京市" readonly/>
            <em class="quote_triangle"></em>
        </div>
        <p class="quote_err"></p>
        <input onclick="mobileCheck($(this))" class="quote_submit" type="button" value="免费报名"/>
    </form>
</section>
<!--友情提示-->
<div class="mess_tips">
    <b>我们承诺：</b>
    <br/>
    兔班长装修网提供该项<span>免费服务，绝不产生任何费用，</span>为了您的利益以及我们的口碑，您的隐私将被严格保密。

</div>
<!--图片列表-->
<div class="design_list">
    <a href="javascript:;">
        <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_12.jpg" alt=""/>
    </a>
    <div class="design_content">
        <span class="design_title">如何避免这些装修问题</span>
        <div class="content_list">
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_13__03.jpg" alt=""/>
            <p>提供专业测量仪器，确保测量分毫不差</p>
        </div>
        <div class="content_list">
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_13__07.jpg" alt=""/>
            <p>设计师现场规划简易方案，倾听客户装修需求</p>
        </div>
        <div class="content_list">
            <img src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/images/hxsj_13__09.jpg" alt=""/>
            <p>设计师现场沟通采光及布局方案</p>
        </div>
    </div>
    <!--对比-->
    <span class="design_title">兔班长 <i>PK</i>  传统装修</span>
    <div class="compare_list">
        <div class="compare_vs">
            vs
        </div>
        <ul>
            <li class="content_title">“利润为王”</li>
            <li class="content_text lh4">10%高昂广告费</li>
            <li class="content_company bcgary">传统家装公司</li>
            <li class="content_detail">
               用户口碑=企业生命房屋测量设计、报价方案费用全部让利给用户，用户口碑的提升等于我们的成长
            </li>
        </ul>
        <ul>
            <li class="content_title">“口碑至上”</li>
            <li class="content_text">
               <span>广告费<1%</span>
                <br/>
                <span> 70%来自口碑介绍</span>

            </li>
            <li class="content_company bcred">兔班长装修网</li>
            <li class="content_detail">
                用户口碑=企业生命房屋测量设计、报价方案费用全部让利给用户，用户口碑的提升等于我们的成长
            </li>
        </ul>
    </div>
</div>
<!--关于我们-->
<div class="about_list">
    <a href="<?= $urls['desc']; ?>" rel="nofollow">关于我们</a>
    <a href="<?= $urls['merchant']; ?>" rel="nofollow">装修公司</a>
    <a href="<?= $urls['ask']; ?>" rel="nofollow">装修问答</a>
    <a href="<?= $urls['quote']; ?>" rel="nofollow">装修报价</a>
</div>
<div class="footer_info">
	<p class=""><?= $this->context->currentSiteInfo['copy'] . '  ' . $this->context->currentSiteInfo['icp']; ?></p>
	<p class="">兔班长装修网隶属北京维纳亚科技有限公司</p>
	<p class=""><?= Yii::$app->params['siteAddressInfo']; ?></p>
	<p class="">联系电话：<?= Yii::$app->params['siteHotline']; ?></p>
</div>
<!--底部咨询-->
<ul class="fixed_btn clearfix">
    <li><a class="cr" href="tel:4008032163">立即咨询</a></li>
    <li><a class="cw bcred" href="#quote_form">立即报名</a></li>
</ul>
<?= $this->render('@subsite/decoration/views/_js-signup'); ?>
<script src="<?= Yii::getAlias('@assetself'); ?>/common/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/app/myjs/mobile_city.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/app/myjs/CNAddrArr.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/wapprabbit/app/myjs/jquery.scs.min.js"></script>
<script>
    function mobileCheck($obj) {
        var $form = $obj.closest('form');
        var meter = "", phone = '';
        var regPhone = /^1[3578]\d{9}$/;
        meter = $.trim($form.find("input[name='meter']").val());
        phone = $.trim($form.find("input[name='phone']").val());
        if (meter == '') {
            $form.find('.quote_err').text('面积不能为空');
            return false;
        } else {
            meter = parseInt(meter);
        }
        if (phone == '') {
            $form.find('.quote_err').text('手机号不能为空');
            return false;
        }
        if (!regPhone.test(phone)) {
            $form.find('.quote_err').text('请填写正确的手机号码');
            return false;
        } else {
            $form.find('.quote_err').text('');
        }

        var $data = {
            'area_input': meter,
            'city_input': $('#myAddrs').val(),
            'name': '',
            'mobile': phone
        };
        signupApply($data);
    }
    function fixedNav() {
        var height = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
        if (height > 450) {
            $('.fixed_btn').fadeIn();
        } else {
            $('.fixed_btn').fadeOut();
        }
    }
    $(window).bind('scroll', fixedNav);
    (function ($) {
        $.fn.easysroll = function (options) {
            var parameter = {
                direction: "left",
                numberr: "1",
                delays: "1000",
                scrolling: "1000",
                fadein: true,
                enterStop: true
            };
            var ops = $.extend(parameter, options);
            var $this = $(this);
            var _this = this;
            var _time = null;
            var obj = _this.find("[type='box']");
            var items = obj.find("li");
            var itemsleg = items.length;
            var itemsW = items.outerWidth(true);
            var itemsH = items.outerHeight(true);
            var _direction = ops.direction;
            var _numberr = ops.numberr;
            var _delays = ops.delays;
            var _scrolling = ops.scrolling;
            var _fadein = ops.fadein;
            var _enterStop = ops.enterStop;
            if (_direction == "top" || _direction == "bottom") {
                items.css({
                    "float": "none"
                });
                obj.width(itemsW * itemsleg);
                if (_direction == "bottom") {
                    obj.css("margin-top", -_numberr * itemsH);
                }
            } else if (_direction == "left" || _direction == "right") {
                items.css({
                    "float": "left"
                });
                obj.width(itemsW * itemsleg);
                if (_direction == "right") {
                    obj.css("margin-left", -_numberr * itemsW);
                }
            } else {
                alert("您配置的滚动方向有误，请重新配置");
                return true;
            }
            function scroll() {
                if (_direction == "left") {
                    obj.animate({
                                "margin-left": -_numberr * itemsW
                            },
                            Number(_delays),
                            function () {
                                for (var i = 0; i < _numberr; i++) {
                                    obj.find("li").eq(0).appendTo(obj);
                                }
                                obj.css({
                                    "margin-left": 0
                                });
                                if (_fadein) {
                                    obj.find("li").eq(0).animate({
                                                "opacity": 0
                                            },
                                            Number(_delays));
                                    obj.find("li").eq(itemsleg - 1).css({
                                        "opacity": 1
                                    });
                                }
                            });
                } else if (_direction == "right") {
                    obj.animate({
                                "margin-left": 0
                            },
                            Number(_delays),
                            function () {
                                for (var i = 0; i < _numberr; i++) {
                                    obj.find("li").eq(itemsleg - 1).prependTo(obj);
                                }
                                ;
                                obj.css("margin-left", -_numberr * itemsW);
                                if (_fadein) {
                                    obj.find("li").eq(0).animate({
                                                "opacity": 1
                                            },
                                            Number(_delays));
                                    obj.find("li").eq(itemsleg - 1).css({
                                        "opacity": 0
                                    });
                                }
                            });
                } else if (_direction == "top") {
                    obj.animate({
                                "margin-top": -_numberr * itemsH
                            },
                            Number(_delays),
                            function () {
                                for (var i = 0; i < _numberr; i++) {
                                    obj.find("li").eq(0).appendTo(obj);
                                }
                                obj.css({
                                    "margin-top": 0
                                });
                                if (_fadein) {
                                    obj.find("li").eq(0).animate({
                                                "opacity": 0
                                            },
                                            Number(_delays));
                                    obj.find("li").eq(itemsleg - 1).css({
                                        "opacity": 1
                                    });
                                }
                            });
                } else if (_direction == "bottom") {
                    obj.animate({
                                "margin-top": 0
                            },
                            Number(_delays),
                            function () {
                                for (var i = 0; i < _numberr; i++) {
                                    obj.find("li").eq(itemsleg - 1).prependTo(obj);
                                }
                                obj.css("margin-top", -_numberr * itemsH);
                                if (_fadein) {
                                    obj.find("li").eq(0).animate({
                                                "opacity": 1
                                            },
                                            Number(_delays));
                                    obj.find("li").eq(itemsleg - 1).css({
                                        "opacity": 0
                                    });
                                }
                            });
                }
            }

            $this.hover(function () {
                        if (_enterStop) {
                            clearInterval(_time);
                        }
                    },
                    function () {
                        _time = setInterval(scroll, _scrolling);
                    }).trigger('mouseleave');
        }
    })(jQuery);

    $(".quote_scroll").easysroll({
        direction: "top",
        numberr: "1",
//        delays: "1000",
        scrolling: "3000",
        fadein: false,
        enterStop: true
    });

</script>