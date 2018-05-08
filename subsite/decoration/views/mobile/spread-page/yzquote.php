<?php
use yii\helpers\Url;

Yii::$app->params['tdkInfos']['title'] =  '装修报价-装修预算表_装修到底需要多少钱';
Yii::$app->params['tdkInfos']['keyword'] = '装修报价，环保装修,环保家装,家装团购';
Yii::$app->params['tdkInfos']['description'] = '装修报价频道为您收集整理了大量2018装修报价单，装修预算表，装修到底需要多少钱，让您家装修更省钱！';
?>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/css/8f3c8-5832.css" rel="stylesheet" />
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/css/d32b8-9701.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/jquery.min.js"></script>
<div class="warp">
    <div class="bottom clearfix">
        <a class="fx-bar back " href="javascript:;">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/fbc8a-8153.png" alt="" /></a>
        <a class="fx-bar quote" href="javascript:;">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/7bb8c-5502.png" alt="" /></a>
    </div>
    <div>
        <img width="100%" alt="免费获取装修报价" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/97555-9341.png"></div>
    <div class="column">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/987ef-6595.gif" alt="" />
        <p class="title">今日已有
            <span></span>人申请免费量房，设计，报价!</p></div>
    <div class="choose">
        <ul class="m-bj-edit">
            <!--<li id="city_1" class="first">
            <span>所在城市</span></li>-->
            <li>
                <span>所在城市</span>
                <button id="showCityPicker2" class="c-zb-city" type="button">
                    <i class="fa fa-map-marker"></i>
                </button>
                <input type="hidden" name="province">
                <input type="hidden" name="city" data-id="">
                <input type="hidden" name="area" data-id="">
                <input type="hidden" name="hide_city_id" value=""></li>
            <li>
                <span>房屋面积</span>
                <input name="square" type="text" placeholder="请填写装修面积">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/ac052-3777.png" alt="" /></li>
            <li>
                <span>装修档次</span>
                <label>
                    <input name="grade" type="radio" value="1" />高档装修</label>
                <label>
                    <input name="grade" type="radio" value="2" />中档装修</label>
                <label>
                    <input name="grade" type="radio" value="3" />经济装修</label></li>
            <li>
                <span>您的称呼</span>
                <input name="chenghu" type="text" placeholder="请填写您的称呼"></li>
            <li>
                <span>您的手机</span>
                <input name="mobile" type="text" placeholder="请填写您的号码"></li>
            <ul>
                <p>
                    <input type="hidden" name="position" value="https://ap.yzb315.com/AmBd01_11A172/index.html" />
                    <input class="form_submit" id="btnShenq" type="button" value="免费获取报价"></p>
                <p>申请后，客服将在
                    <span>24小时内</span>跟您联系!</p></ul>
        </ul>
    </div>
    <script>var label = document.getElementsByTagName("label");
        for (i in label) {
            label[i].onclick = function(e) {
                for (j in label) {
                    label[j].className = "";
                }
                this.className = "check";
            }
        }</script>
    <div class="banner">
        <img width="100%" alt="流程" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/f9c64-8606.png"></div>
    <div class="main">
        <div class="banner3">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/6044a-8331.png" alt="" /></div>
        <div class="banner4">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/93bd5-2866.png" alt="" /></div>
        <div class="banner5">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/6409b-6283.png" alt="" /></div>
        <div class="banner6">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/55d97-6582.png" alt="" /></div>
        <div class="banner7">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/70889-7423.png" alt="" /></div>
        <div class="banner8">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/ea0ec-7223.png" alt="" /></div>
        <div class="banner9">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/eb75b-8779.png" alt="" /></div>
        <div class="banner10">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/99840-8473.png" alt="" /></div>
        <a target="_blank" href="https://www.fcz.cn/special/appdown/">
            <div class="banner11">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/img/3265c-7292.jpg" alt="非常宅，非常装" /></div>
        </a>
    </div>
    <div class="list">
        <p>最新业主报名</p>
        <div class="t_head">
            <span class="name">业主</span>
            <span class="phone">电话</span>
            <span class="need">需求</span></div>
        <div class="list_content">
            <ul style="margin-top: -20px;">
                <li>
                    <span class="people">王先生</span>
                    <span class="contact">1796****365</span>
                    <span class="msg">免费量房</span></li>
                <li>
                    <span class="people">王惠娜</span>
                    <span class="contact">1872****768</span>
                    <span class="msg">免费设计</span></li>
                <li>
                    <span class="people">朱先生</span>
                    <span class="contact">1363****566</span>
                    <span class="msg">免费量房</span></li>
                <li>
                    <span class="people">许先生</span>
                    <span class="contact">1395****299</span>
                    <span class="msg">报价单</span></li>
                <li>
                    <span class="people">黄先生</span>
                    <span class="contact">1721****999</span>
                    <span class="msg">免费量房</span></li>
                <li>
                    <span class="people">潘女士</span>
                    <span class="contact">1592****332</span>
                    <span class="msg">免费设计</span></li>
                <li>
                    <span class="people">彭先生</span>
                    <span class="contact">1580****789</span>
                    <span class="msg">报价单</span></li>
                <li>
                    <span class="people">李丽为</span>
                    <span class="contact">1882****555</span>
                    <span class="msg">免费量房</span></li>
                <li>
                    <span class="people">陈夏平</span>
                    <span class="contact">1301****243</span>
                    <span class="msg">报价单</span></li>
                <li>
                    <span class="people">孙女士</span>
                    <span class="contact">1879****898</span>
                    <span class="msg">免费设计</span></li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="text-center design_foot">
            <div>厦门优装保网络科技有限公司</div>
            <div>m.yzb315.com 闽ICP备17001564号-1</div>
            <div>全国服务热线:
                <span>400-699-6099</span></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=d3DrijLyxj4yO3ubjLPMrNYXXS1jKBwO"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/geolocation.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/rlpca20170824110006.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/jroll.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/qzcityselect.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/layer.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/snew/spready/m/js/scroll.js"></script>
<script type="text/javascript">// 城市选择插件
    selectQz.init({
        province: $("input[name=province]").attr("data-id"),
        city: $("input[name=city]").attr("data-id"),
        area: $("input[name=area]").attr("data-id")
    });</script>
<script language="javascript" type="text/javascript">$(function() {
        var times = new Date();
        var num = times.getHours() * 50 + 17;
        $(".column>p>span")[0].innerHTML = num;

        $(".fx-bar").hide();
        $(window).scroll(function() {
            if ($(window).scrollTop() > 450) {
                $(".fx-bar").show(1000);
            } else {
                $(".fx-bar").hide(1000);
            }
        });
        $(".fx-bar").click(function() {
            $('html,body').animate({
                scrollTop: '0px'
            },
            800);
        });
        $('.list_content').myScroll({
            speed: 40,
            //数值越大，速度越慢
            rowHeight: 26 //li的高度
        });
    })</script>
<script language="javascript" type="text/javascript">$('#btnShenq').click(function() {
        var moReg = /^((13|15|17|18)[0-9]{9}|14[57][0-9]{8})$/;
        var chenghu = $('[name="chenghu"]').val();
        var phone = $('[name="mobile"]').val();
        var square = $('[name="square"]').val();
        var provice = $('[name="province"]').attr("data-id");
        var city = $('[name="city"]').attr("data-id");
        var area = $('[name="area"]').attr("data-id");

        if (chenghu.length < 1) {
            layer.alert('请填写您的称呼!', {
                title: '提示',
                //提示框的title
                icon: 2,
                //提示图标
                skin: 'layui-layer-molv',
                //样式类名
                closeBtn: 0,
                //右上角关闭按钮的样式
                shift: 0,
                //提示框出现的动画
                time: 2000 //2s后自动关闭
            });
            return false;
        }
        if (phone.length != 11 || moReg.test(phone) == false) {
            layer.alert('请填写正确的手机号码!', {
                title: '提示',
                //提示框的title
                icon: 2,
                //提示图标
                skin: 'layui-layer-molv',
                //样式类名
                closeBtn: 0,
                //右上角关闭按钮的样式
                shift: 4,
                //提示框出现的动画
                time: 2000 //2s后自动关闭
            });
            return false;
        }
        var d = {};
        d.chenghu = chenghu;
        d.phone = phone;
        d.square = square;
        d.address = $('[name="address"]').val();
        d.position = $('[name="position"]').val(); //申请类型
        d.province = provice;
        d.city = city;
        d.type = 2; //报名招标的类型
        d.decoration_mold = $('[name="grade"]:checked').val();
        $.ajax({
            type: 'post',
            data: d,
            url: '/Bidding/sign',
            dataType: 'json',
            success: function(result) {
                if (result.status == 0) {
                    layer.alert(result.msg, {
                        title: '提示',
                        //提示框的title
                        icon: 2,
                        //提示图标
                        skin: 'layui-layer-molv',
                        //样式类名
                        closeBtn: 0,
                        //右上角关闭按钮的样式
                        shift: 4,
                        //提示框出现的动画
                        time: 2000 //2s后自动关闭
                    });
                    return false;
                }
                if (result.url) {
                    _ucq.push(['trackEvent', '推广表单', '报价', chenghu, result.id]);
                    window.location.href = result.url;
                }
                /*layer.alert('报名成功', {
						    title: '提示',            //提示框的title
						    icon: 1,                  //提示图标
						    skin: 'layui-layer-molv', //样式类名
						    closeBtn: 0,              //右上角关闭按钮的样式
						    shift: 4,                 //提示框出现的动画
						    time: 2000,               //2s后自动关闭
						    end: function () {

						    }
						});*/
                return false;
            }
        });
    });</script>
