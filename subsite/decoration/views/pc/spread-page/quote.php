<?php
use yii\helpers\Html;
use yii\helpers\Url;
$cssFiles = [
    'common/css/webcommon', 'rabbithouse/webrabbit/web/mycss/calculator',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css', ['isSelf' => true, 'cssFiles' => $cssFiles, 'path' => '']);

$currentCode = '';//$this->params['currentCode'];
$signupNum = time() - strtotime(date('Y-m-d'));
$signupNum = ceil($signupNum / 30);
$domainCms = 'http://www.tu8zhang.com';
$urls = [
    'index' => $domainCms,
    'sample' => $domainCms . '/sample/',
    'merchant' => $domainCms . '/beijing/merchant/',
    'ask' => $domainCms . '/ask_lm_gzsj/',
    'quote' => $domainCms . '/beijing/quote/',
    'desc' => $domainCms . '/desc.html',
    'guestbook' => $domainCms . '/guestbook.html',
    'friendlink' => $domainCms . '/friendlink.html',
    'statement' => $domainCms . '/statement.html',
    'contactus' => $domainCms . '/contactus.html',
];
$names = ['王', '李', '孟', '石', '吕', '张', '赵', '刘', '黄', '胡', '王', '李', '张'];
$nameSuffixs = ['先生', '女士', '小姐'];
$mobiles = ['3', '4', '5', '8'];
$owners = [];
for ($i = 1; $i < 9; $i++) {
    $name = $names[array_rand($names)];
    $nameSuffix = $nameSuffixs[array_rand($nameSuffixs)];
    $mobile = '1' . $mobiles[array_rand($mobiles)] . '*****' . rand(1000, 9999);
    $owner = [
        'name' => $name . $nameSuffix,
        'area' => rand(80, 300),
        'minute' => rand(2, 30),
        'mobile' => $mobile,
    ];
    $owners[] = $owner;
}

?>
<div class="quote_header ">
    <a href="">
        <img class="lf" src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/logo/<?= $currentCode; ?>.png" alt=""/>
    </a>
    <ul class="">
        <li>
            <i class="i1"></i>
            一站式装修解决方案
        </li>
        <li>
            <i class="i2"></i>
            免费提供上门量房 
        </li>
        <li>
            <i class="i3"></i>
            咨询热线：400-8032-163
        </li>
    </ul>
    <div class="header_img">
        <a href="">
        </a>
    </div>
</div>
<!--装修计算器-->
<div class="quote_box">
    <img class="box_img" src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/bg_calc.jpg" alt=""/>

    <div class="qbox">
        <div class="qbox_l">
            <p class="box_titl">装修计算器</p>

            <p class="box_span">
                <span>
                    今日已有
                    <i class="num_tips"><?= $signupNum; ?></i>
                    人成功获取装修预算
                </span>
            </p>

            <form class="quote_form">
                <div class=" ml40 btn_item area_btn" style="display:none">
                    <select id="pro" onchange="selectc(this);"></select>
                    <select id="city"></select>
                </div>
                <div class="ml40 btn_item quote_input ">
                    <input autofocus id="quote_meter" type="text" placeholder="请输入您的建筑面积"/>
                    <span>㎡</span>
                </div>
                <div class="ml40 btn_item quote_input ">
                    <input maxlength="11" id="quote_phone" type="text" placeholder="输入您的手机号码接收报价结果"/>
                </div>
                <div class=" ml40 btn_item quote_input ">
                    <select>
                        <option value="">简单装修</option>
                        <option value="">高档装修</option>
                    </select>
                </div>
                <div class="err_tips ml40 quote_input btn_item">
                  <!--ccccc-->
                </div>
            </form>

        </div>
        <div class="qbox_c">
            <div class="bg_line"></div>
            <div class="btnbox" onclick="quoteCheck($(this))">
                <div class="x_line"></div>
                <div class="y_line"></div>
                <div class="btn_bg"></div>
                <div class="middle_anmite"></div>
                <div class="btn_text">开始计算</div>
            </div>
        </div>
        <div class="qbox_r">
            <div class="res_body">
                <div class="res_con">
                    <p class="res_title">
                        您的装修预算约为
                        <span id="money">？</span>
                        万元
                    </p>
                    <table class="res_table">
                        <tbody>
                        <?php $rooms = ['ws' => '卧室', 'kt' => '客厅', 'cf' => '厨房', 'wsj' => '卫生间', 'yt' => '阳台', 'other' => '其他']; ?>
                        <?php foreach ($rooms as $room => $rName) { ?>
                        <tr>
                            <td class="td1"><?= $rName; ?></td>
                            <td class="td2"><b id="price-<?= $room; ?>">?</b>元</td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--文字滚动-->
        <div class="text_roll">
            <div class="report_num">
                <b>
                    今日已有
                    <span><?= $signupNum; ?></span>
                    人
                    <br/>
                    成功获取装修预算
                </b>
            </div>
            <div class="roll_list">
                <ul type="box">
                    <?php $i = 0; foreach ($owners as $info) { ?>
                    <?php if ($i % 2 == 0) { echo '<li>'; } ?>
                        <em>·</em>
                        <span class="rl"><?= $info['name']; ?></span>
                        <span class="rl"><?= $info['area']; ?>㎡</span>
                        <span><?= $info['mobile']; ?></span>
                        <span class="bl"><?= $info['minute']; ?>分钟前</span>
                    <?php if ($i % 2 == 1) { echo '</li>'; } ?>
                    <?php $i++; } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--页脚-->
<footer class="quote_footer">

    <div class="footer_row2">
        <p>
            <a hidefocus="" href="<?= $urls['desc']; ?>" rel="nofollow">关于我们</a> | 
            <a hidefocus="" href="<?= $urls['friendlink']; ?>" rel="nofollow">友情链接</a> |
            <a hidefocus="" href="<?= $urls['guestbook']; ?>" rel="nofollow">意见反馈</a> |
            <a hidefocus="" href="<?= $urls['statement']; ?>" rel="nofollow">法律声明</a> |
            <a hidefocus="" href="<?= $urls['contactus']; ?>" rel="nofollow">联系我们</a>
        </p>
        <p>免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。</p>
        <p><?= $this->context->copyStr; ?></p>
        <p><?= $this->context->icpStr; ?></p>
    </div>
</footer>
<script src="<?= Yii::getAlias('@assetself'); ?>/common/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/web/myjs/index.js"></script>
<script>

    function quoteCheck($obj) {
        var $form=$obj.closest("form");
        var meter = "",phone='';
        var regPhone = /^1[3578]\d{9}$/;
            meter= $.trim($('#quote_meter').val());
            phone= $.trim($('#quote_phone').val());
        console.log(meter);
            if (meter=='') {
               $('.err_tips').text('面积不能为空');
                return false;
            } else {
                meter=parseInt(meter);
            }
            if(phone==''){
                $('.err_tips').text('手机号不能为空');
                return false;
            }
            if(!regPhone.test(phone)) {
                $('.err_tips').text('请填写正确的手机号码');
                return false;
            }else{
                $('.err_tips').text('');
            }


            var $data = {
                name: '',
                mobile: phone,
                area_input: meter,
                city_input: ''
            };
            //$("#pro").val() + $("#city").val(),
            $data.position = 'pcbj';
            $data.position_name = 'pc报价页';
            $data.cid = $("#cid").val();
            $data._csrf = $("#_csrf").val();
            $.ajax({
                type: 'POST',
                data: $data,
                url: window.signupUrl,// + '/jz-signup.html',
                dataType: "json",
                success:function(data){
                    if (data.quoteInfo) {
                        //func.call(_this, res);
                        if (data.quoteInfo.elems) {
                            var priceElems = data.quoteInfo.elems;
                            $('#money').html((data.quoteInfo.price/10000).toFixed(2));
                            //$('#money').html(data.quoteInfo.price);
                            $('#price-ws').text(priceElems.bedroom_master.price_result+priceElems.bedroom_second.price_result);
                            $('#price-kt').html(priceElems.living_room.price_result + priceElems.dining_room.price_result);
                            $('#price-cf').html(priceElems.kitchen.price_result);
                            $('#price-wsj').html(priceElems.toilet.price_result);
                            $('#price-yt').html(priceElems.balcony.price_result);
                            $('#price-other').html(priceElems.other.price_result);
                        }   
                        return ;
                    }   
                    if (data.status == 200) {
						var redirectUrl = $("#return_url").val();
						if (redirectUrl) {
                        //var redirectUrl = window.BASE_URL + '/bm-result.html';
                            window.location.href = redirectUrl;
						}
                    } else if (data.status == 400) {
                        alert(data.message);
                    } else {
                        alert('报名失败');
                    }
                }//end success

            })// end ajax
    }
        //    滚动的插件
(function($) {
        $.fn.easysroll = function(options) {
            var parameter = {
                direction: "left",
                numberr: "1",
                delays: "1000",
                scrolling: "1000",
                fadein: false,
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
                            function() {
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
                            function() {
                                for (var i = 0; i < _numberr; i++) {
                                    obj.find("li").eq(itemsleg - 1).prependTo(obj);
                                };
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
                            function() {
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
                            function() {
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
            $this.hover(function() {
                        if (_enterStop) {
                            clearInterval(_time);
                        }
                    },
                    function() {
                        _time = setInterval(scroll, _scrolling);
                    }).trigger('mouseleave');
        }
    })(jQuery);

    $(".roll_list").easysroll({
        direction: "top",
        numberr: "1",
//        delays: "1000",
        scrolling: "2000",
        fadein: true,
        enterStop: true
    });

</script>
