<?php
use yii\helpers\Url;

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2018装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';
?>
<link rel="Shortcut Icon" href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/4a5b1-5968.png">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/css/31ce5-2348.css" />
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/css/a31f0-4841.css" rel="stylesheet" />
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/offer.js"></script>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/css/30075-1553.css" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/css/ad67e-1189.css" />
<style>input::-webkit-input-placeholder { /* placeholder颜色 */ color: #bbb; }</style>
<!--<div style="width:1000px;margin: 0 auto;height:65px;">
    <a href="/" target="_blank">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/" title=""></a>
</div>-->
<!-- 首屏 装修计算器 start -->
<div class="calc-box">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/8be71-4953.png" class="calc-img">
    <div class="wbox" style="height: 590px;">
        <div class="wbox-l">
            <p class="tit_p fB" style="font-size:24px; text-indent:100px;margin-top: -25px">装 修 计 算 器</p>
            <p class="t1">
                <span>今日已有
                    <i class="cOrange"></i>人成功获取装修预算</span></p>
            <br>
            <div class="form-group">
                <div class="form-group-label f16">
                    <em class="fc-red"></em>房屋地址：</div>
                <select id="fotProvin" name="provin" class="form-select">
                    <option value="0">省份</option></select>
                <select id="fotCity" name="city" class="form-select">
                    <option value="0">城市</option></select>
                <select id="fotArea" name="area" class="form-select">
                    <option value="0">地区</option></select>
            </div>
            <div class="form-group">
                <div class="form-group-label f16">
                    <em class="fc-red"></em>房屋户型：</div>
                <div class="form-group-info">
                    <select id="room" name="room" class="form-select">
                        <option value="1" selected>1室</option>
                        <option value="2">2室</option>
                        <option value="3">3室</option>
                        <option value="4">4室</option>
                        <option value="5">5室</option>
                        <option value="6">6室</option></select>
                    <select id="hall" name="hall" class="form-select">
                        <option value="0" selected>0厅</option>
                        <option value="1">1厅</option>
                        <option value="2">2厅</option>
                        <option value="3">3厅</option>
                        <option value="4">4厅</option></select>
                    <select id="kitchen" name="kitchen" class="form-select">
                        <option value="0" selected>0厨</option>
                        <option value="1">1厨</option>
                        <option value="2">2厨</option>
                        <option value="3">3厨</option></select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-label">&nbsp;</div>
                <div class="form-group-info selects">
                    <select id="toilet" name="toilet" class="form-select">
                        <option value="0" selected>0卫</option>
                        <option value="1">1卫</option>
                        <option value="2">2卫</option>
                        <option value="3">3卫</option></select>
                    <select id="balcony" name="balcony" class="form-select">
                        <option value="0" selected>0阳台</option>
                        <option value="1">1阳台</option>
                        <option value="2">2阳台</option>
                        <option value="3">3阳台</option>
                        <option value="4">4阳台</option>
                        <option value="5">5阳台</option>
                        <option value="6">6阳台</option></select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-label f16">
                    <em class="fc-red"></em>房屋面积：</div>
                <div class="form-group-info">
                    <input type="text" id="fotAcreage" name="area" style="height: 25px;" class="form-input form-input-block" placeholder="请输入您的房屋面积" maxlength="10" onkeyup="clearNoNum(this)">
                    <em class="square">m
                        <sup>2</sup></em>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group-label f16">
                    <em class="fc-red"></em>您的姓名：</div>
                <div class="form-group-info">
                    <input type="text" id="fotChenghu" name="chenghu" style="height: 25px;" class="form-input form-input-block" placeholder="如何称呼您"></div>
            </div>
            <div class="form-group">
                <div class="form-group-label f16">
                    <em class="fc-red"></em>手机号码：</div>
                <div class="form-group-info">
                    <input type="text" id="fotMobile" name="mobile" style="height: 25px;" class="form-input form-input-block" placeholder="报价结果将发送到您的手机"></div>
            </div>
            <p style="margin-bottom: 15px;padding: 8px 0 0 87px;height:12px;color:#666;font-size: 14px;width: 300px">
                <span>为了您的权益，您的隐私将被严格保密。</span></p>
        </div>
        <div class="wbox-c">
            <div class="btnbox">
                <a class="btn-compute fotBtnCompute">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/0427f-5087.gif" class="btnbox-img" id="btns"></a>
            </div>
        </div>
        <div class="wbox-r">
            <input type="hidden" name="position" value="http://www.yzb315.com/Ac3601_12A183/index.html" />
            <div class="budget-right">
                <!--<div class="btn-close fotBtnClose"></div>-->
                <div class="txt-box">
                    <div class="h2" style="margin-top: -35px">您的装修预算约为
                        <small>
                            <em class="fc-orange" id="base_all">?</em>万元</small></div>
                </div>
                <div class="small-txt-box fs-12 fc-gray">*以下为半包明细，具体报价以量房实测为准</div>
                <div class="result-item">
                    <div id="fotResultDefault" class="result-default">
                        <div class="result-bds-count scroll">
                            <dl>
                                <dt>卧室：</dt>
                                <dd><em class="fc-orange" id="woshi">?</em>元</dd></dl>
                            <dl>
                                <dt>客厅：</dt>
                                <dd><em class="fc-orange" id="base_shi">?</em>元</dd></dl>
                            <dl>
                                <dt>厨卫：</dt>
                                <dd><em class="fc-orange" id="base_cw">?</em>元</dd></dl>
                            <dl>
                                <dt>其他：</dt>
                                <dd><em class="fc-orange" id="base_other">?</em>元</dd></dl>
                        </div>
                    </div>
                    <div id="fotResult" class="result-box cl fc-666 hide">
                        <div id="fotResultContent" class="result-bd fl scroll"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--文字滚动start-->
        <div class="Roll_txt" id="Roll_txt">
            <div class="man_num">
                <b>今日已有
                    <span></span>人
                    <br />成功获取装修预算</b></div>
            <div class="scoll-y sc-ul">
                <ul class="cDGray">
                    <li>
                        <span>王先生</span>&nbsp;&nbsp;
                        <span>135****8607</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">刘先生</span>&nbsp;&nbsp;
                        <span>138****2867</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>李女士</span>&nbsp;&nbsp;
                        <span>139****1825</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">于女士</span>&nbsp;&nbsp;
                        <span>136****3602</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>董先生</span>&nbsp;&nbsp;
                        <span>138****1187</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">张女士</span>&nbsp;&nbsp;
                        <span>186****4781</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>邹先生</span>&nbsp;&nbsp;
                        <span>186****9165</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">柳先生</span>&nbsp;&nbsp;
                        <span>136****1015</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>黄先生</span>&nbsp;&nbsp;
                        <span>135****9916</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">于女士</span>&nbsp;&nbsp;
                        <span>136****3602</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>赵女士</span>&nbsp;&nbsp;
                        <span>186****5017</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">王先生</span>&nbsp;&nbsp;
                        <span>135****8607</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                </ul>
                <ul class="cDGray">
                    <li>
                        <span>王女士</span>&nbsp;&nbsp;
                        <span>135****2803</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">张女士</span>&nbsp;&nbsp;
                        <span>186****4781</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>柳先生</span>&nbsp;&nbsp;
                        <span>136****1015</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">于女士</span>&nbsp;&nbsp;
                        <span>136****3602</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>董先生</span>&nbsp;&nbsp;
                        <span>139****2907</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">邹先生</span>&nbsp;&nbsp;
                        <span>186****9165</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                    <li>
                        <span>刘先生</span>&nbsp;&nbsp;
                        <span>138****2867</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span>
                        <span class="cDGray_spa">董先生</span>&nbsp;&nbsp;
                        <span>138****1187</span>&nbsp;&nbsp;
                        <span>刚刚获取了装修预算</span>&nbsp;&nbsp;
                        <span class="s_new">2017-08-31</span></li>
                </ul>
            </div>
        </div>
        <!--文字滚动end-->
        <!--报名后提示文字start-->
        <div class="Reminder_text" id="Reminder_text">
            <ul>
                <li>
                    <strong>温馨提示：</strong></li>
                <li>15分钟内装修顾问将为您讲解如何根据房屋特点来测算装修报价，</li>
                <li>避免后期增项陷阱。请留意接听来电。</li></ul>
            <dl>
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/29922-5767.jpg" id="show2weima11" /></dt>
                <dd>微信扫一扫
                    <br />查看更多装修资讯</dd></dl>
        </div>
        <!--报名后提示文字end--></div>
    <a class="big-more-btn" style="display:none;">计算后查看报价清单 &gt;</a></div>
<!-- 首屏 装修计算器 end -->
<!-- 页脚 start -->
<div class="s_footer">
    <div class="s_footer_content">
        <ul class="footer_head">
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/845a3-8507.jpg" alt="" />
                <h3>专 业 平 台</h3>
                <p>百万业主 权威保障</p>
            </li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/18116-9547.jpg" alt="" />
                <h3>自 由 比 价</h3>
                <p>四家公司 自由竞价</p>
            </li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/d0b5d-9502.jpg" alt="" />
                <h3>优 质 服 务</h3>
                <p>优质客服 全程服务</p>
            </li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/ae8a6-7614.jpg" alt="" />
                <h3>诚 信 商 家</h3>
                <p>诚信商家 安全保障</p>
            </li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/bf0f8-6008.jpg" alt="" />
                <h3>业 主 监 督</h3>
                <p>一起消费 集体维权</p>
            </li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/d780d-5290.jpg" alt="" />
                <h3>装 修 保 障</h3>
                <p>装修保障 立信致远</p>
            </li>
        </ul>
        <div class="about_us">
			<div>全国统一热线：<?= Yii::$app->params['siteHotline']; ?></div>
		    <div><?= $this->context->currentSiteInfo['copy']; ?></div>
		    <div><?= $this->context->currentSiteInfo['icp']; ?></div>
        </div>
    </div>
</div>
<!-- 页脚 end -->
<!--悬浮栏-->
<div class="bottom_nav">
    <div class="bottom_center">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/3cd79-8782.png" alt="" class="tp" style=" top: -10px;" />
        <ul>
            <li>
                <input type="text" name="name" data-value="您的称呼" placeholder="您的称呼" /></li>
        </ul>
        <ul>
            <li>
                <input type="tel" name="tel" data-value="手机号码" placeholder="手机号码" /></li>
        </ul>
        <ul>
            <li>
                <input type="button" id="bidBtn33" value="立即免费获取" /></li>
            <input type="hidden" value="1" name="b_type" /></ul>
        <a href="javascript:void(0)">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/01cc7-2562.png" alt="" /></a>
    </div>
</div>
<div class="show">
    <a href="javascript:void(0)">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/img/c84bb-5120.png" alt="" /></a>
</div>
<!--悬浮栏end-->
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/css/bd998-5708.css">
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/bm.js?v=2"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/function1.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/data.city.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/jquery.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/layer.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/budet.common.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/js/linkagesel.min.js?v=2"></script>
<script>$(document).ready(function() {
    $('#bidBtn33').click(function() {
        var mEmt = $('[name="tel"]');
        var chEmt = $('[name="name"]');
        var position = $('[name="position"]').val();
        var mo = mEmt.val();
        var ch = chEmt.val();

        if (mo.length == 0 || mo == '' || mo == mEmt.data('value')) {

            layer.alert('手机号不能为空', {
                skin: 'layui-layer-molv',
                time: 1500
            });
            return false;
        }
        //					alert(mo);
        if (moReg.test(mo) == false) {
            layer.alert('手机号码格式不正确', {
                skin: 'layui-layer-molv',
                time: 1500
            });
            return false;
        }


    	var $data = {};
        var positionName = $('#position_name').val();
        $data.name = ch;
        $data.mobile = mo;
        $data.position = $('#position').val();
        $data.position_name = positionName;
        $data.city_input = '';
        $data.area_input = 0;
        $data.cid = $("#cid").val();
        $data._csrf = $("#_csrf").val();
        $.ajax({
            type: 'POST',
            data: $data,
            url: window.signupUrl,// + '/jz-signup.html',
            dataType: "json",
            success:function(data){
                if(data.status == 200){
                    var returnUrl = $('#returnUrl').val();
                    alert('您好，您已成功预约装修服务，注意接听装修顾问的电话哦');
                    window.location.href = returnUrl;
                }else if ( data.status == 400 ) {
                    //errorCallback(data);
                    alert(data.message);
                } else {
                    alert('报名失败，请您重新报名！');
                }
            }
        })

    });

    // 装修状态弹窗
    $('#decState').on('click',
    function() {
        $('#decStatePop').show();
        setTimeout(function() {
            $('.state-item').removeClass("hide").addClass("show");
        },
        50);
    });
    $('.btnDecCancel,.btnStateCloseMask').on('click',
    function() {
        $('.state-item').removeClass("show").addClass("hide");
        setTimeout(function() {
            $('#decStatePop').hide();
        },
        50);
    });
    $('#selRoom li').on('click',
    function() {
        var typeId = $(this).data("value");
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
        $('#selVal').show();
        $('#selRoomVal').html(typeId + '室 ');
        $('#room').val(typeId);
    });
    $('#selHall li').on('click',
    function() {
        var typeId = $(this).data("value");
        if ($('#selVal').css("display") == "none") {
            layer.open({
                content: "请选择几室",
                skin: "msg",
                time: 2
            });
            return false;
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('#selHallVal').html(typeId + '厅 ');
            $('#hall').val(typeId);
        }
    });
    $('#selKitchen li').on('click',
    function() {
        var typeId = $(this).data("value");
        if ($('#selVal').css("display") == "none") {
            layer.open({
                content: "请选择几室",
                skin: "msg",
                time: 2
            });
            return false;
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('#selKitchenVal').html(typeId + '厨 ');
            $('#kitchen').val(typeId);
        }
    });
    $('#selToilet li').on('click',
    function() {
        var typeId = $(this).data("value");
        if ($('#selVal').css("display") == "none") {
            layer.open({
                content: "请选择几室",
                skin: "msg",
                time: 2
            });
            return false;
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('#selToiletVal').html(typeId + '卫 ');
            $('#toilet').val(typeId);
        }
    });
    $('#selBalcony li').on('click',
    function() {
        var typeId = $(this).data("value");
        if ($('#selVal').css("display") == "none") {
            layer.open({
                content: "请选择几室",
                skin: "msg",
                time: 2
            });
            return false;
        } else {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");
            $('#selBalconyVal').html(typeId + '台 ');
            $('#balcony').val(typeId);
        }
    });
    $('.state-item-bd li').on('click',
    function() {
        $('.txtDec').show();
        var stateId = $(this).data("state");
        if ($(this).hasClass("active")) {
            return; //已选中
        }

        $(this).siblings().removeClass("active");

        $(this).addClass("active");

        $('#iState').val(stateId);
        $('.txtDec').text($(this).text());

    });
    $('.btnDecConfirm').on('click',
    function() {
        $('#decStateTxt').attr("placeholder", $('.txtDec').text());
        $('.state-item').removeClass("show").addClass("hide");
        setTimeout(function() {
            $('#decStatePop').hide();
        },
        50);
    });
});</script>
<script>$(document).ready(function() {
    //底部预算显示与隐藏
    $('#btnBudgetBox').on('click', '.btnUp',
    function() {
        $('.footer-budget').removeClass('hide').addClass('show');
        $('.budget-item-title').removeClass('btnUp').addClass('btnDown');
        $('.btnup').removeClass('show').addClass('hide');
        $('.btndown').removeClass('hide').addClass('show');
    });
    $('#btnBudgetBox').on('click', '.btnDown',
    function() {
        $('.footer-budget').removeClass('show').addClass('hide');
        $('.budget-item-title').removeClass('btnDown').addClass('btnUp');
        $('.btnup').removeClass('hide').addClass('show');
        $('.btndown').removeClass('show').addClass('hide');
    });

    var areaUrl = "https://www.fcz.cn/area";
    var province_id = 0;
    var city_id = 0;
    var county_id = 0;

    var opts17 = {
        //data: districtData,   // demo7
        ajax: areaUrl,
        head: '请选择',
        minWidth: 50,
        fixWidth: 60,
        level: 3,
        select: ['#fotProvin', '#fotCity', '#fotArea'],
        defVal: [province_id, city_id, county_id]
    };

    var linkageSel17 = new LinkageSel(opts17);

    // 底部计算
    $('.fotBtnCompute').on('click',
    function() {

        var area = $('#fotAcreage').val();
        var addr = $('#fotProvin').val();
        var mobile = $('#fotMobile').val();
        var ch = $('#fotChenghu').val();
        var decState = $('#iState').val();
        if (addr <= 0 || addr == '') {
            layer.msg('请选择所在省',
            function() {
                $('#fotProvin').focus();
            });
            return false;
        }
        if (city <= 0 || city == '') {
            layer.msg('请选择所在城市',
            function() {
                $('#fotCity').focus();
            });
            return false;
        }
        if (fotArea <= 0 || fotArea == '') {
            layer.msg('请选择所在区',
            function() {
                $('#fotArea').focus();
            });
            return false;
        }
        if (area.isEmpty()) {
            layer.msg('请输入您房屋的面积',
            function() {
                $('#fotAcreage').focus();
            });
            return false;
        }

        if (ch.isEmpty()) {
            layer.msg('请输入您的称呼',
            function() {
                $('#fotChenghu').focus();
            });
            return false;
        }

        if (!mobile.isEmpty()) {
            if (!checkMobile(mobile)) {
                layer.msg('请输入正确的手机号',
                function() {
                    $('#fotMobile').focus();
                });
                return false;
            }
        } else {
            layer.msg('请输入您的手机号',
            function() {
                $('#fotMobile').focus();
            });
            return false;
        }

        // 执行
        var room = $('#room').val();
        var hall = $('#hall').val();
        var kitchen = $('#kitchen').val();
        var toilet = $('#toilet').val();
        var balcony = $('#balcony').val();
        var position = $('[name="position"]').val();
        var fotArea = $('#fotArea').val();
        var city = $('#fotCity').val();
        var fotProvin = $('#fotProvin').val();

        var fotAreaText = $('#fotArea option:selected').text();
        var fotCityText = $('#fotCity  option:selected').text();
        var fotProvinText = $('#fotProvin  option:selected').text();

        var iarea = $('#fotProvin').val() + "," + $('#fotCity').val() + "," + $('#fotArea').val();
        var decorationStatus = $('#iState').val();
        var fk = "402C0D80-7129-0A37-0CEB-620265A5BBAB";

    	var $data = {};
        var positionName = $('#position_name').val();
        $data.name = ch;
        $data.mobile = mobile;
        $data.position = $('#position').val();
        $data.position_name = positionName;
        $data.city_input = fotProvinText + '-' + fotCityText + '-' + fotAreaText;
        $data.area_input = area;
        $data.cid = $("#cid").val();
        $data._csrf = $("#_csrf").val();
    
        $.ajax({
            type: 'POST',
            data: $data,
            url: window.signupUrl,// + '/jz-signup.html',
            dataType: "json",
            success:function(data){
                if(data.status == 200){
                    var returnUrl = $('#returnUrl').val();
                    if ($data.area_input > 0 && data.quoteInfo.elems) {
                        var priceElems = data.quoteInfo.elems;
                        $('#base_all').html((data.quoteInfo.price/10000).toFixed(2));
    					//setPrice(parseInt(data.quoteInfo.price));
                        var woshi = priceElems.bedroom_master.price_result+priceElems.bedroom_second.price_result;
                        var keting = priceElems.living_room.price_result + priceElems.dining_room.price_result;
                        var chufang = priceElems.kitchen.price_result;
                        var weishj = priceElems.toilet.price_result;
                        var yangtai = priceElems.balcony.price_result;
                        var other = priceElems.other.price_result;
    					$('#woshi').html(parseInt(woshi));
                        $('#base_shi').html(parseInt(keting));
                        $('#base_cw').html(parseInt(weishj + chufang));
                        $('#base_other').html(parseInt(yangtai + other));
                    } else {
                        alert('您好，您已成功预约装修服务，注意接听装修顾问的电话哦');
                        window.location.href = returnUrl;
                    }
                }else if ( data.status == 400 ) {
                    //errorCallback(data);
                    alert(data.message);
                } else {
                    alert('报名失败，请您重新报名！');
                }
            }
        })
        /*$.post('/public/push_get_user/', {
            customer_name: ch,
            square: area,
            //面积
            mobile: mobile,
            //手机号码
            province: fotProvin,
            //省
            city: city,
            //市
            area: fotArea,
            //区
            position: position
        },
        function(result) {
            _ucq.push(['trackEvent', '推广表单', '报价', ch, result.id]);
            window.location.href = ridrect_url;
        },
		'json');
        $.ajax({
            type: 'post',
            data: data,
            url: '/public/ajaxBid/',
            dataType: 'json',
            success: function(result) {
                if (result.status == 1) {
                    layer.alert('申请成功，我们将在24小时内与您联系，请注意接听电话！', {
                        skin: 'layui-layer-molv',
                        title: '申请提示',
                        end: function() {
                            mEmt.val('');
                            chEmt.val('');

                        }
                    });
                } else {
                    layer.alert(result.msg, {
                        time: 1500
                    });
                }
            }
	    })*/

    });
});
</script>
