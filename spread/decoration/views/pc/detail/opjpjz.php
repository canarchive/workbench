<?php
$date = date('m月d日');
$hour = date('G');
$datePre = date('m月d日', time() - 86400);
$dateMid = $hour <= 3 ? $datePre : $date;
$date2 = $hour <= 8 ? $datePre : $date;
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/css/99957-1347.css" />
<link href="http://img.oppein.cn/images/favicon.ico" rel="Shortcut Icon">
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/cityjson.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/projson.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/districtjson.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/jquery.kxbdmarquee.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/countdown.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/js/common.ajax.js"></script>
<title>欧派橱柜衣柜促销_最新欧派定制家具优惠活动_欧派家居商城</title>
<meta name="keywords" content="欧派橱柜,欧派衣柜,定制家具">
<meta name="description" content="欧派为中国最大整体家居品牌,专业定制家具、欧派橱柜、欧派衣柜、欧派欧铂尼木门、欧派厨具,一站式全屋家居网购商城,提供定制家具免费测量服务,让您网上买家具更安全,更方便!">
<style type="text/css">/*公共样式*/ html{overflow-x: hidden;} body{min-width:1165px;overflow: hidden;background:#9a0045;font-family:"微软雅黑";} a:hover{text-decoration:none;} .clear{clear: both;} .header_top img,.header_banner img{position:relative;left:50%;margin-left:-581px;} .wd img{position:relative;left:50%;margin-left:-960px;} .alert{display:block;background:#000;opacity:0;filter:alpha(opacity=0);z-index:100;} /*表单提交*/ .mb16{position:relative; padding-left:49px;height:48px;font-size: 14px;} ._mb16{ height: 56px;} .word{position:absolute;left:2px; top:6px;font-size:18px;color:#444;} .alert_con .word{top:9px;left:6px;color:#fff7d3;font-size:22px;} .word_city{ left:197px;} .alert_con .word_city{ left:302px;} .header_banner{padding-bottom:46px;background:#fff;position:relative;} .header_banner .stars{width:300px;height:40px;position:absolute;left:50%;top:50%;margin:-274px 0 0 -98px;} .header_banner .stars span{float:left;width:32px;height:32px;margin-right:73px;} .header_banner .stars img{position:static;left:0;margin:0;display:none;} .big_star{width:880px;height:649px;position:absolute;left:50%;margin-left:-669px;top:0px;display:none;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/643fc-5879.png) no-repeat 0 0;} .apply{font-family:"微软雅黑";position:relative;} .apply_con{position:absolute;width:420px; height:380px; left:50%; top:102px; margin-left:-448px; padding-top: 10px;} .apply .time{width:700px;height:55px;position:absolute;left:50%;margin-left:-350px;top:16px;text-align:center;line-height:38px;} .apply .time span{display:inline-block;width:72px;height:55px;margin:0 4px;text-indent:4px;font-size:38px;color:#fff;letter-spacing:16px;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/7facf-3019.png) no-repeat 0 0;} .apply .time em{font-size:30px;color:#fff;height:55px;display:inline-block;} .apply_con_list{padding-left:20px;} .mb_select{overflow: hidden;height:44px;} .mb_select .word{top:10px;} .select_con{ position:relative; float:left;width:146px;height:44px; } select{position:absolute; left:0; top:0; padding:4px 0;width:114px; height:40px;border:1px solid #696969; background: #fff; vertical-align: middle; opacity: 0; filter:alpha(opacity=0); z-index: 500;} .selectMask{position: absolute; left:0; top:3px; width:114px; height:38px;line-height:38px;text-align:center;color: #808080;overflow: hidden;border:1px solid #bfbfbf;background:#fff;} .alert_con .selectMask{width:176px;height:42px;left:0;top:0;font-size:20px;line-height:42px;color:#bdbdbd;background:#fff;border:1px solid #bfbfbf;} .apply_con .text{margin-left:7px;padding-left:10px;width:295px;height:38px;line-height:38px;color:#808080;font-size:14px;vertical-align: middle;background: #fff;border:1px solid #bfbfbf;} .apply_con .province{ margin-right:45px;margin-left:7px; } .apply_con .checkbox .group{float:left; width:82px;height:46px; } .ticks{position:relative;} .apply_con .checkbox .group label{margin-left:16px;line-height:50px;font-size: 15px;color:#333;} .apply_con .checkbox .group_first{width:80px;top:15px;} .apply_con .checkbox .check_other{width:235px;float:left;margin-top:7px;} .apply_con .check_other .other{display:inline-block;margin-left:11px;color:#999;} .apply_con .check_other .text{margin:-20px 0 0 41px; width:177px;height:34px;line-height:34px; } .apply_con .tip_show{position:absolute;left:0;top:375px;height:20px;width:100%;line-height:18px;font-size:16px;color:#e12521;text-align: center;} .apply_con .hint_text{position:absolute;left:82px;top:278px;cursor:pointer;font-size:35px;font-weight:bold;color:#fff;*top:245px;display: none;} .apply_con .apply_btn{position:absolute;left:70px;top:312px;width:270px; height:57px;cursor:pointer;background:#000;opacity:0;filter:alpha(opacity=0);} .apply_con .apply_con_txt{position:absolute;left:10px; top:0; padding:32px;display:none;width:334px; height:316px; line-height:50px;font-size:18px;font-weight:bold;color:#333; background:#fdff74;} .apply_con .apply_con_txt em{color:#e02421;} .apply_con .apply_con_txt .apply_btn{width: 270px; height: 59px; left:63px;top:295px; line-height: 49px;text-align: center; font-size: 32px;color: #fff; background:#eb3d36;letter-spacing:10px;} .alert_con_tit{position:absolute;top:-76px;left:66px;font-size: 50px; color: #fff; font-family: '黑体';font-weight:bold;line-height: 62px;letter-spacing:4px;} .tip{z-index:10;display:block;height:20px; position:absolute; left:110px; top:247px; color:#e36279;font-size:12px;} /*预约客户滚动部分*/ #marquee4{overflow:hidden;position:absolute;right:50%;margin-right:-421px;top:175px;width:355px;height:280px; z-index: 50;} .marquee4_tit{position:absolute;width:400px;top:94px;right:50%;margin-right:-447px;line-height:60px;text-align: center;font-size:40px;color:#444;z-index:50;} #marquee4 ul li{line-height:30px;font-size:14px;color:#5f1126;text-align:center;} #marquee4 ul li span {display: inline-block;width:54px;background:#fff; filter:alpha(opacity=0); -moz-opacity:0; opacity:0; } /*弹出*/ .tckbg{position:fixed;top:0;left:0;z-index:1002;display:none;width:100%;height:100%;background:#000;filter:alpha(opacity=50);-moz-opacity:0.5;opacity:0.5;} .sqk_alert{display:none;position:fixed;top:50%;left:50%;z-index:1003;margin:-300px 0 0 -303px;width:606px;height:600px;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/b423a-9832.png) no-repeat 0 0;} .alert_con{position:absolute;left:75px;top:158px;width:400px;} .alert_con .mb20{position: relative; height:66px;font-size:22px;overflow:hidden;} .sqk_alert_close{position:absolute;top:0;right:0;width:55px;height:55px;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/8e2dd-5123.png) no-repeat center top;z-index:5;} .alert_con .text{padding-left:10px;width:383px;height:44px;font-size:20px;font-family:"微软雅黑";line-height:44px;color:#bdbdbd; background:#fff;border:1px solid #bfbfbf;} .alert_con select{height:52px;width:146px;} .alert_con .province{ margin-right:71px;} .alert_con .checkbox{position:relative;width:450px;overflow:hidden;height:120px;margin-left:-32px;} .alert_con .checkbox .group{float:left;margin:5px 0 0 2px;width:90px;*width:92px;height:50px; font-size:24px; color:#fff7d3;z-index:3;} .alert_con .checkbox .first{margin-left:63px;} .alert_con .checkbox .group input{position:relative;top:0;left:16px;vertical-align:middle;filter:alpha(opacity=0);opacity:0;-moz-opacity:0;} .alert_con .checkbox .group label{margin-left:8px;*margin-left:2px;line-height:28px;} .alert_con .checkbox .group_first{width:90px;margin: 0 -36px 0 50px; font-size: 18px;line-height: 30px;font-family: '黑体';color: #000;font-weight:normal;} .alert_con .checkbox .check_other{margin-top:9px;padding-left:103px;text-align:left;} .alert_con .checkbox .text{margin-top:-1px;width:220px;height:40px;line-height:40px;font-family:"微软雅黑";} .alert_con .checkbox .chk_opa{margin-left:17px;filter:alpha(opacity=0);opacity:0;-moz-opacity:0;} .alert_con .tip_show1{position:absolute; top:325px;left:22px; width:354px;color:#c91a1a;line-height:20px;font-size:15px;text-align: center;} .alert_con .apply_submit_alert{
    left:178px; top:293px; line-height: 76px; } .alert_con .apply_btn{cursor:pointer;position:absolute;left:61px;top:349px;width:273px;height:61px;opacity:0;filter:alpha(opacity=0);} .alert_con .hint_text{font-size: 19px; margin-top: -22px; font-family:"黑体";color: #4b4b4b; text-align: center;} .alert_con_list .tit{position:absolute;top:343px;left:65px;font-size: 16px; color: #444444;} .alert_con .tick img{top:-5px; left:0;} .tick{position: absolute;top:17px;left:8px;width:18px;height:18px;background: #fff;border: 1px solid #bfbfbf;} .alert_con .tick{top:3px;left:0px;width:24px;height:24px;background:#fff;border:1px solid #bfbfbf;} .check_other .tick{top:10px;} .apply_con input[type="checkbox"]{opacity:0; filter:alpha(opacity=0);} .tick img{display:none;position: absolute;top: -4px;left: 1px; margin-left:0px;} /* part */ .parts{position:relative;} .parts .con{position:absolute;left:50%;top:50%;} .parts .btn{position:absolute;width:438px;height:71px;} .part1 .con{width:1000px;height:760px;margin:-142px 0 0 -461px;} .con .peizhi{position:absolute;left:50%;top:50%;z-index:100;display:none;} .con .peizhi_btn{position:absolute;left:50%;top:50%;z-index:99;width:100px;height:30px;} .part1 ul.text{overflow:hidden;} .part1 ul.text li{width:242px;height:230px;padding-top:11px;float:left;margin-right:95px;color:#ff4800;text-align:center;} .part1 ul.text li span{display:block;} .part1 ul.text .price{font-size:90px;line-height:86px;color:#ff3737;} .part1 ul.text .span_01{font-size:22px;line-height:24px;color:#51080c;} .part1 ul.text .span_02{font-size:20px;color:#ff316b;line-height:20px;padding-top:4px;} .part1 ul.text .alert{width:122px;height:30px;margin:0 auto;margin-top:12px;} .con .part_tit{width:420px;height:60px;margin:0 auto;font-size:48px;color:#fff;line-height:60px;} .part2 .con{width:990px;height:670px;} .parts .con .turn{width:990px;height:460px;overflow:hidden;margin-top:27px;} .parts .turn .big_pics{position:relative;width:715px;height:445px;margin:6px 0 0 5px;float:left;} .parts .turn .big_pics li{width:715px;height:445px;position:absolute;left:0;top:0;} .parts .turn .big_pics img{height:100%;} .parts .turn .sm_pics{width:250px;height:460px;float:left;margin-left:15px;} .parts .turn .sm_pics li{width:246px;height:137px;border:4px solid #fff;margin-bottom:10px;*margin-bottom:8px;position:relative;} .turn .sm_pics .bg span{display:block;width:100%;height:100%;position:absolute;left:0;top:0;background:#000;opacity:0.5;filter:alpha(opacity=50);} .part3 .turn .sm_pics li{width:246px;height:99px;*margin-bottom:6px;} .part3 .con2{width:970px;height:500px;margin:254px 0 0 -483px;} .part4{background:#ffead9;padding-bottom:30px;} .consult_ser{margin-top:-190px;} .consult_ser .wechat_img{display:block;width:150px;height:150px;position:absolute;left:-155px;top:-40px;} .com_introduce{background:#bd0b21 !important;padding-top:60px;}</style>
</head>

<body>
<div id="header" class="header">
    <?= $this->render('op/_top'); ?>
    <div class="header_banner">
        <div class="wd">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/caf7a-9706.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/b018b-8134.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/75ada-7083.jpg" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/0375c-7367.jpg" /></div>
        <div class="stars">
            <span>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c14a5-2202.png" /></span>
            <span>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c14a5-2202.png" /></span>
            <span style="margin-right:0;">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c14a5-2202.png" /></span>
        </div>
        <div class="big_star"></div>
    </div>
</div>
<div id="apply" class="apply">
    <div class="wd">
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/f631c-4050.jpg" />
        <img height="297px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c11b2-1995.jpg" /></div>
    <div class="time" id="time">
        <em>还剩</em>
        <span class="day">00</span>
        <em>天</em>
        <span class="hour">00</span>
        <em>小时</em>
        <span class="minute">00</span>
        <em>分</em></div>
    <div class="apply_con">
        <div class="apply_con_list">
            <form name="seosbl20141128">
                <div class="mb16">
                    <span class="word">姓名:</span>
                    <input id="app_name0" class="text" type="text" name="Appuser[username]" value="您的姓名" /></div>
                <div class="mb16">
                    <span class="word">手机:</span>
                    <input id="app_tel0" class="text" type="text" name="Appuser[mobile]" value="您的手机号" /></div>
                <div class="mb16 mb_select">
                    <span class="word">省份:</span>
                    <div class="select_con province">
                        <div class="selectMask">省份</div>
                        <select id="selProvince0">
                            <option value="0">省份</option></select>　</div>
                    <span class="word word_city">城市:</span>
                    <div class="select_con">
                        <div class="selectMask">城市</div>
                        <select id="selCity0">
                            <option value="0">城市</option></select>
                    </div>
                </div>
                <div id="checkboxarea0" class="mb16 checkbox ">
                    <div class="group_first word ">需求:</div>
                    <div class="clear"></div>
                    <div class="group ticks">
                        <span id="Appuser_needtype">
                            <input value="0" id="Appuser_needtype_0" type="checkbox" name="Appuser[needtype][]">
                            <label for="Appuser_needtype_0">橱柜</label></span>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="group ticks">
                        <input value="1" id="Appuser_needtype_1" type="checkbox" name="Appuser[needtype][]">
                        <label for="Appuser_needtype_1">衣柜</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="group ticks">
                        <span id="Appuser_needtype">
                            <input value="2" id="Appuser_needtype_2" type="checkbox" name="Appuser[needtype][]">
                            <label for="Appuser_needtype_2">木门</label>
                            <div class="tick">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                        </span>
                    </div>
                    <div class="group ticks">
                        <span id="Appuser_needtype">
                            <input value="3" id="Appuser_needtype_3" type="checkbox" name="Appuser[needtype][]">
                            <label for="Appuser_needtype_3">卫浴</label>
                            <div class="tick">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                        </span>
                    </div>
                    <div class="clear"></div>
                    <div class="group ticks">
                        <span id="Appuser_needtype">
                            <input value="14" id="Appuser_needtype_14" type="checkbox" name="Appuser[needtype][]">
                            <label for="Appuser_needtype_14">壁纸</label>
                            <div class="tick">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                        </span>
                    </div>
                    <div class="check_other">
                        <div class="ticks tick_other">
                            <input value="-1" type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype" />
                            <input id="app_other0" type="text" class="text other_text" name="Appuser[needother]" value="其它" />
                            <div class="tick">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                        </div>
                    </div>
                </div>
                <div id="tip_show0" class="tip_show"></div>
                <input id="btn_appsubmit0" class="apply_btn" type="button" value="" />
                <p id="btn_appsubmit0" class="hint_text"></p>
            </form>
        </div>
        <div class="tip">1、免费量尺设计不收取任何费用。
            <br>2、我们承诺对您的个人信息绝对保密。
            <br>3、已交订金的客户请勿申请，谢谢。</div>
        <div class="apply_con_txt userapp_ok"></div>
    </div>
    <div class="apply_custorm">
        <div class="marquee4_tit">成功申请客户</div>
        <div id="marquee4">
            <ul>
                <li>李女士
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>丘女士
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>陈先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>曾先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>王先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>陈先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>杨女士
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>孔女士
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>刘先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>张先生
                    <span></span><?= $date; ?>
                    <span></span>已预约上门量尺</li>
                <li>陈先生
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>刘女士
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>刘先生
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>王女士
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>林先生
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>张女士
                    <span></span><?= $dateMid; ?>
                    <span></span>已预约上门量尺</li>
                <li>刘先生
                    <span></span><?= $date2; ?>
                    <span></span>已预约上门量尺</li>
                <li>陈先生
                    <span></span><?= $date2; ?>
                    <span></span>已预约上门量尺</li>
                <li>许女士
                    <span></span><?= $date2; ?>
                    <span></span>已预约上门量尺</li>
                <li>刘女士
                    <span></span><?= $date2; ?>
                    <span></span>已预约上门量尺</li>
                <li>黄先生
                    <span></span><?= $date2; ?>
                    <span></span>已预约上门量尺</li></ul>
        </div>
    </div>
</div>
<div class="parts part1">
    <div class="wd">
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c39c9-8295.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ac3b4-3065.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/bc270-9353.jpg" />
        <img height="207px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/0df61-2410.jpg" /></div>
    <div class="con">
        <ul class="text">
            <li>
                <span class="price">400</span>
                <span class="span_01">回传合同，橱柜/
                    <br>衣柜/木门/卫浴
                    <br>各领100元红包</span>
                <span class="span_02">各单品类满5000元领</span>
                <a href="javascript:;" class="alert"></a>
            </li>
            <li>
                <span class="price">800</span>
                <span class="span_01">回传合同，橱柜/
                    <br>衣柜/木门/卫浴
                    <br>各领200元红包</span>
                <span class="span_02">各单品类满20000元领</span>
                <a href="javascript:;" class="alert"></a>
            </li>
            <li style="margin-right:0">
                <span class="price" style="font-size:77px;padding-top:5px;">1200</span>
                <span class="span_01" style="margin-top:-5px;">回传合同，橱柜/
                    <br>衣柜/木门/卫浴
                    <br>各领300元红包</span>
                <span class="span_02">各单品类满30000元领</span>
                <a href="javascript:;" class="alert"></a>
            </li>
        </ul>
    </div>
</div>
<div class="parts part2">
    <div class="wd">
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/d1011-7660.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/4ad86-4067.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/4f03c-3102.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/2266d-9718.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c6823-8706.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/8ef68-8076.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/7bb3b-1537.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/72681-8665.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/66d7b-1009.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/f7681-2622.jpg" />
        <img height="387px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/afb44-7457.jpg" /></div>
    <div class="con con1" style="margin:-1097px 0 0 -494px;">
        <div class="part_tit">秋林晚枫整体橱柜</div>
        <div class="turn">
            <ul class="big_pics">
                <li style="z-index:10;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/694ea-7085.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/27a24-9909.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/b6391-7263.jpg" /></li>
            </ul>
            <ul class="sm_pics">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/f071e-7622.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/2ad97-8574.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/937b8-7272.jpg" />
                    <span></span>
                </li>
            </ul>
        </div>
        <div class="peizhi" style="margin:-185px 0 0 -423px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/e014e-9244.png" /></div>
        <div class="peizhi_btn" style="margin:153px 0 0 -470px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ea0e9-6031.png" /></div>
        <a href="javascript:;" class="alert btn" style="left:536px;bottom:3px;"></a>
    </div>
    <div class="con con2" style="margin:-255px 0 0 -496px;">
        <div class="part_tit">咖啡物语整体橱柜</div>
        <div class="turn">
            <ul class="big_pics">
                <li style="z-index:10;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/11092-4253.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ed283-2826.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/fde5e-6865.jpg" /></li>
            </ul>
            <ul class="sm_pics">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/594d2-5845.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/3b550-2176.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/480ab-3563.jpg" />
                    <span></span>
                </li>
            </ul>
        </div>
        <div class="peizhi" style="margin:-205px 0 0 -420px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/495df-1791.png" /></div>
        <div class="peizhi_btn" style="margin:149px 0 0 -472px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ea0e9-6031.png" /></div>
        <a href="javascript:;" class="alert btn" style="left:538px;bottom:3px;"></a>
    </div>
    <div class="con con3" style="margin:587px 0 0 -495px;">
        <div class="part_tit">几米阳光整体橱柜</div>
        <div class="turn">
            <ul class="big_pics">
                <li style="z-index:10;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/9c06b-1482.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/746ec-3864.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/0a84c-8631.jpg" /></li>
            </ul>
            <ul class="sm_pics">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/91509-7976.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/8c4b0-7455.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/65f78-6416.jpg" />
                    <span></span>
                </li>
            </ul>
        </div>
        <div class="peizhi" style="margin:-220px 0 0 -425px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/611ff-5353.png" /></div>
        <div class="peizhi_btn" style="margin:150px 0 0 -472px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ea0e9-6031.png" /></div>
        <a href="javascript:;" class="alert btn" style="left:537px;bottom:3px;"></a>
    </div>
</div>
<div class="parts part3">
    <div class="wd">
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/f4d89-6980.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/69620-3581.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/43375-1833.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/76f37-2591.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/cbd91-9350.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/d104b-6697.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/a283c-5946.jpg" />
        <img height="367px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c7193-9305.jpg" /></div>
    <div class="con con1" style="margin:-736px 0 0 -495px;">
        <div class="part_tit" style="margin-left:90px;">圣马诺全屋定制</div>
        <div class="turn">
            <ul class="big_pics">
                <li style="z-index:10;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/1945c-5097.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/17963-5198.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/06855-1026.jpg" /></li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/0040e-4804.jpg" /></li>
            </ul>
            <ul class="sm_pics">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/21b9f-3332.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/fad46-7110.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/5bbbf-2171.jpg" />
                    <span></span>
                </li>
                <li class="bg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/a9a20-4535.jpg" />
                    <span></span>
                </li>
            </ul>
        </div>
        <div class="peizhi" style="margin:-160px 0 0 -425px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/6d4e3-6296.png" /></div>
        <div class="peizhi_btn" style="margin:215px 0 0 -466px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ea0e9-6031.png" /></div>
        <a href="javascript:;" class="alert btn" style="left:537px;bottom:-120px;"></a>
    </div>
    <div class="con con2">
        <div class="peizhi" style="margin:-192px 0 0 -355px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/38a89-8256.png" /></div>
        <div class="peizhi_btn" style="margin:219px 0 0 -467px">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/ea0e9-6031.png" /></div>
    </div>
    <a href="javascript:;" class="alert btn" style="left:50%;top:50%;margin:832px 0 0 42px;"></a>
</div>
<div class="parts part4">
    <div class="wd">
        <img height="276px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/d5bac-1301.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/8e1d5-7839.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/47278-7493.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/7fdea-4591.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c2425-7785.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/cab56-7377.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/06805-7641.jpg" />
        <img height="230px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/fb8e5-8781.jpg" />
        <img height="398px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/9a012-5673.jpg" /></div>
    <a href="javascript:;" class="alert btn" style="width:367px;left:50%;top:50%;margin:-303px 0 0 114px;"></a>
    <a href="javascript:;" class="alert btn" style="width:304px;left:50%;top:50%;margin:888px 0 0 177px;"></a>
</div>
<?php //echo $this->render('op/_consult'); ?>
<div class="tckbg"></div>
<div class="sqk_alert">
    <a href="javascript:;" class="sqk_alert_close"></a>
    <div class="alert_con">
        <div class="alert_con_list">
            <form name="seosbl20141128">
                <div class="mb20">
                    <input id="app_name1" class="text" type="text" name="Appuser[username]" value="您的姓名" /></div>
                <div class="mb20">
                    <input id="app_tel1" class="text" type="text" name="Appuser[mobile]" value="您的手机号" /></div>
                <div class="mb20">
                    <div class="select_con province">
                        <div class="selectMask">广东省</div>
                        <select id="selProvince1" class="">
                            <option value="0">省份</option></select>
                    </div>
                    <div class="select_con">
                        <div class="selectMask">广州市</div>
                        <select id="selCity1">
                            <option value="0">城市</option></select>
                    </div>
                </div>
                <div id="checkboxarea1" class="mb20 checkbox">
                    <div class="word">需求:</div>
                    <div class="clear"></div>
                    <div class="group ticks first">
                        <input type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype_0b" value="0">
                        <label for="Appuser_needtype_0b" class="tick_check"></label>
                        <label for="Appuser_needtype_0b">橱柜</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="group ticks">
                        <input type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype_1b" value="1">
                        <label for="Appuser_needtype_1b" class="tick_check"></label>
                        <label for="Appuser_needtype_1b">衣柜</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="group ticks">
                        <input type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype_2b" value="2">
                        <label for="Appuser_needtype_2b" class="tick_check"></label>
                        <label for="Appuser_needtype_2b">木门</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="group ticks">
                        <input type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype_3b" value="3">
                        <label for="Appuser_needtype_3b" class="tick_check"></label>
                        <label for="Appuser_needtype_3b">卫浴</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="clear"></div>
                    <div class="group ticks" style="margin-left:63px;">
                        <input type="checkbox" name="Appuser[needtype][]" id="Appuser_needtype_14" value="14">
                        <label for="Appuser_needtype_14" class="tick_check"></label>
                        <label for="Appuser_needtype_14">壁纸</label>
                        <div class="tick">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="check_other1 ticks" style="float: left;margin-left:2px;">
                        <input class="chk_opa" type="checkbox" id="Appuser_needtype_b" name="Appuser[needtype][]" value="-1">
                        <label for="Appuser_needtype_b" class="tick_check"></label>
                        <input id="app_other1" type="text" class="text" name="Appuser[needother]" value="其它" />
                        <div class="tick" style="top:7px;">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/57355-9186.png" /></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="tip_show1" class="tip_show1"></div>
                <input id="btn_appsubmit1" class="apply_btn" type="button" value="" /></form>
        </div>
    </div>
</div>
<iframe id="iframeDoApp" src="" frameborder="0" style="display:none;"></iframe>
<!--serve begin-->
<style>.com_introduce{background:#f5f5f5;} .com_introduce img{position:static;margin:0 auto;}</style>
<div class="com_introduce" id="com_introduce">
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/18e24-2084.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/a3b40-4730.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/50e67-1091.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/32490-5620.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/0b85a-6075.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/191e4-3900.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/e9032-8091.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/7bd52-5897.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/e166c-7146.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/56b52-6416.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/b90be-1788.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/6fb69-2949.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/499bc-6851.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/f95bd-3307.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/d3f0d-9137.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/14064-9797.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c7df0-2290.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/56cc1-2432.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/3b9f9-7892.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/3feb8-3119.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/a5f87-1118.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/51ba1-8224.jpg" />
    <img height="206px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/b0d10-7914.jpg" />
    <img height="205px" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/004cd-3744.png" data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/654eb-9980.jpg" /></div>
<!-- 底部模板 -->
<script type="text/javascript">/*
* 根据不同ip访问抓取用户地址
*/
    var local_ip = '106.120.33.22'; //IP全局变量(获取IP地址)
    //ip默认地址
    $(function() {
        if (typeof local_ip != 'undefined') { (function getAdress() {
                $.getScript('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' + local_ip,
                function(data) {
                    var PrID = null;
                    if (remote_ip_info.ret == '1' && remote_ip_info.province != '') {
                        $.each(province,
                        function(k, p) {
                            if (p.ProName.substr(0, 2) == remote_ip_info.province.substr(0, 2)) {
                                PrID = p.ProID;
                                $("#selProvince,#selProvince0,#selProvince1").val(PrID);
                                $("#selCity,#selCity0,#selCity1").html('');
                                $("#selProvince,#selProvince0,#selProvince1").change();
                            }
                        });
                        if (remote_ip_info.city != '') {
                            $.each(city,
                            function(k, p) {
                                if (p.CityName.substr(0, 2) == remote_ip_info.city.substr(0, 2)) {
                                    $("#selCity,#selCity0,#selCity1").val(p.CityID);
                                    //$("#selCity,#selCity0,#selCity1").append("<option selected='selected' value="+ p.CityID+">" + p.CityName + "</option>");
                                }
                            });
                        }
                    }
                });
            } ());
        }
    });</script>
<!-- 根据不同IP抓取地址 -->
<!-- 报名成功后的在线qq微信咨询弹窗 -->
<script type="text/javascript">window.alert = function(str) {
        return false;
    }</script>
<style>.apply_ok_chat_bg{display:none;width:100%;height:100%;position:fixed;left:0;top:0;background:#000;opacity:0.5;filter:alpha(opacity=50);z-index:1000;} .apply_ok_chat_close{display:block;position:absolute;top:-21px;right:-11px; width:58px;height:58px;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/fe177-9415.png) no-repeat 0 0;} .apply_ok_chat{display:none;position:fixed;width:640px;height:650px;left:50%;top:50%;margin:-325px 0 0 -320px;z-index:1001;color:#3d3d3d;} .apply_ok_chat img{position:static;margin:0 auto !important;} .apply_ok_chatTop,.apply_ok_chatCen,.apply_ok_chatBot{background:#fff;} .apply_ok_chat .result{ font:normal 20px/30px "微软雅黑";text-align:center; } .apply_ok_chat .apply_ok_chatTop{height:165px;} .apply_ok_chatCen .p02{font-size: 28px;line-height:43px;text-align:center;} .apply_ok_chatCen .p02 strong{ color:#f71e6b; } .apply_ok_chatCen .p03{ font-size: 24px; line-height:43px;text-align:center;} .wechatQQ{font:normal 18px/24px "微软雅黑"; color:#1d1d1d; text-align: center;} .wechatQQ .wq{width:220px; height:auto; display: inline-block; } .apply_ok_chatBot{padding:30px 0 15px 0;} .apply_ok_chatBot .type1_4{text-align:center;line-height:46px;height:56px;font:bolder 48px/48px "微软雅黑"; color:#f71e6b;} .apply_ok_chatBot .type5{text-align:center;line-height:46px;height:56px;font:bolder 24px/48px "微软雅黑"; } .apply_ok_chatBot .type5 .red{color:red;} .apply_ok_chatBot .back{width:130px; height:35px; display:block;margin:0 auto;background:url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/9157a-9127.png) no-repeat 0 0; }</style>
<div id="apply_ok_chat_bg" class="apply_ok_chat_bg"></div>
<div id="apply_ok_chat" class="apply_ok_chat">
    <a href="javascript:;" class="apply_ok_chat_close"></a>
    <div class="apply_ok_chat_Head">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/5acdb-6521.png" usemap="#planetmap" alt="Planets" />
        <map name="planetmap" id="planetmap">
            <area shape="rect" coords="0,0,195,55" href="http://m.oppein.cn" target="_blank">
            <area shape="rect" coords="235,0,375,55" href="http://m.oppein.cn/site/app" target="_blank">
            <area shape="rect" coords="434,0,640,55" href="http://v2.live800.com/live800/chatClient/chatbox.jsp?companyID=661555&configID=126120&jid=8095036864&skillId=6934&enterurl=" target="_blank"></map>
    </div>
    <div class="apply_ok_chatTop">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/6343a-6327.png" />
        <h2 class="result">
            <!---->感谢您的申请，我们的工作人员将会尽快与您取得联系。</h2></div>
    <div class="apply_ok_chatCen">
        <p class="p03">加专属家居顾问微信或QQ</p>
        <p class="p03">获取更多门店活动优惠，推荐新客户还有好礼相送</p>
        <div class="wechatQQ">
            <div class="wechat wq">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/732ae-9955.png" />
                <p>扫描二维码</p>
                <p>微信号：oppein6026</p>
            </div>
            <div class="qq wq">
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1109669563&site=qq&menu=yes">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/c45fe-6501.png" /></a>
                <p>点击图标咨询</p>
                <p>QQ号：1109669563</p>
            </div>
        </div>
    </div>
    <div class="apply_ok_chatBot">
        <p class="type1_4">全年好礼免费领</p>
        <a class="back" href="javescript:;"></a>
    </div>
</div>
<?= $this->render('op/_footer'); ?>
<style>.fixed a:hover{color:#fff;text-decoration:none;} .fixed{position:fixed;display:none;} .webcall_bg{width:100%;height:100%;left:0;top:0;background:#000;opacity:0.6;filter:alpha(opacity=60);} .webcall_con{width:502px;height:272px;left:50%;top:50%;margin:-136px 0 0 -256px; background: url(<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/41363-9884.png) 0 0 no-repeat;} .webcall_close{display:block;width:40px;height:40px;position:absolute;right:0;top:0;cursor:pointer;font-size:20px;color:#fff;font-weight:lighter;font-family:"微软雅黑";text-align:center;line-height:40px; z-index: 10;} .webcall_con .webcall-row{ position:relative; width:100%; height:85px; padding-top:149px; overflow: hidden; } .webcall_tel{float:left;width:276px;height:46px;margin:0 8px 0 31px;border:2px solid #bfbfbf;color:#808080;line-height:46px;text-indent:10px;display:block;} .webcall_btn{float:left;width:155px;height:50px;background:#ff6c00;display:block;font-size:14px;color:#fff;text-align:center;line-height:50px;cursor:pointer;} .webcall_con .web_tip{position:absolute; left:0; bottom:7px; width:100%; text-align:center;} .webcall_result{position:fixed;display:none;width:370px;height:155px;left:50%;top:50%;margin:-77px 0 0 -185px;border:6px solid rgba(0,0,0,0.2);border-radius:5px;} .webcall_result_in{width:100%;height:129px;padding-top:26px;background:#fff;text-align:center;line-height:36px;} .webcall_result_in h3{width:120px;height:32px;margin:0 auto;font-size:16px;color:#333;line-height:32px;text-align:left;text-indent:42px;background:url("<?= Yii::getAlias('@asseturl'); ?>/spread/house/oppein/img/a4576-4603.png") no-repeat 0 center;} .webcall_result_in .txt1{font-size:12px;color:#666;} .webcall_result_in .txt2{color:#808080} .webcall_result_in .txt2 span{color:#ff6c00;} .consult_ser .ser_list li a i.call{background-position:-346px 6px;} .consult_ser .ser_list li a:hover .call{background-position:-346px -38px;}</style>
<div class="fixed webcall_bg" style="z-index:999;"></div>
<div class="fixed webcall_con" style="z-index:1000;">
    <div style="width:100%;height:100%">
        <span class="webcall_close"></span>
        <div class="webcall-row">
            <input type="text" maxlength="20" class="webcall_tel" value="请输入您的联系手机" onblur="inpBlur(this,'请输入您的联系手机')" onfocus="inpFocus(this,'请输入您的联系手机')" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
            <input type="button" class="webcall_btn" value="免费电话咨询">
            <div class="web_tip"></div>
        </div>
        <p style="width:100%;text-align: center;color:#999;">全国客服热线：400-884-1869</p></div>
</div>
<div class="webcall_result" style="z-index:1000;">
    <div class="webcall_result_in">
        <h3>提交成功</h3>
        <p class="txt1">我们客服稍后会联系您，请留意电话</p>
        <p class="txt2">
            <span>5</span>秒后自动关闭</p></div>
</div>
<script>$('.webcall_show').click(function() {
        $('.webcall_con,.webcall_bg').css('display', 'block');
    }); $('.webcall_close').click(function() {
        $('.webcall_con,.webcall_bg').css('display', 'none');
    }); $('.webcall_btn').bind('click',
    function() {
        var tel = $('.webcall_tel').val();
        var pattern = /^1[34578]\d{9}$/;
        if (!pattern.test(tel)) {
            $('.webcall_con .web_tip').text("请输入正确的手机号");
            return false;
        }
        $('.webcall_con .web_tip').text("");
        var url = "http://www.oppein.cn/api/smoor/";
        var webcall_timer = null;
        var webcall_num = 5;
        $.ajax({
            url: url,
            data: {
                tel: tel
            },
            type: 'GET',
            cache: false,
            dataType: "json",
            success: function(data) {
                if (data.Succeed == true) {
                    $('.webcall_result_in .txt2 span').html(5);
                    $('.webcall_con').hide();
                    $('.webcall_result').show();
                    clearInterval(webcall_timer);
                    webcall_timer = setInterval(function() {
                        webcall_num--;
                        console.log(webcall_num);
                        $('.webcall_result_in .txt2 span').html(webcall_num);
                        if (webcall_num <= 0) {
                            $('.webcall_bg,.webcall_result').hide();
                            clearInterval(webcall_timer);
                            return false;
                        }
                    },
                    1000)
                }
            }
        }); $('.webcall_tel').val("请输入您的联系手机");
        //$('.webcall_con .web_tip').text("系统正在回拨，请稍候");
    })
    //网页回呼测试结束
    </script>
<script type="text/javascript">/*活动倒计时*/
    countDown("2017/6/1 00:00:00", "#time", 2);
    //报名列表滚动
    $("#marquee4").kxbdMarquee({
        direction: "up",
        isEqual: false
    });
    //select
    $(document).on("change",
    function() {
        $("select").each(function() {
            var $selectText = $(this).children("option:selected").text();
            $(this).parent().find(".selectMask").text($selectText);
        });
    });
    $('.ticks').each(function() {
        var $this = $(this);
        $this.find(".tick").on("click",
        function() {
            if ($this.find('img').css('display') == 'none') {
                $this.find('img').show();
                $this.find('input').attr("checked", 'true');
            } else {
                $this.find('input').attr("checked", false);
                $this.find('img').hide();
            }
            return false;
        })
    })
    //星星闪烁
    var timer_star = null,
    star_num = 0;
    timer_star = setInterval(function() {
        if (star_num > 2) star_num = 0;
        $('.header_banner .stars span').eq(star_num).find('img').fadeIn();
        $('.header_banner .stars span').eq(star_num).siblings().find('img').fadeOut();
        star_num++;
    },
    500); var timer_bigStar = null,
    timer_one = null;
    timer_bigStar = setInterval(function() {
        $('.big_star').fadeIn(200,
        function() {
            clearTimeout(timer_one);
            timer_one = setTimeout(function() {
                $('.big_star').fadeOut(200);
            },
            600)
        });
    },
    1500); $('.consult_ser .ser_list .wechat').hover(function() {
        $('.consult_ser .wechat_img').toggle();
    }); $('.con .peizhi_btn').hover(function() {
        $(this).siblings('.peizhi').show();
    },
    function() {
        $(this).siblings('.peizhi').hide();
    })
    //轮播
    var $turn = $(".turn");
    $turn.each(function() {
        var num = 0;
        var timer = null;
        var imgLen = $(this).find('.big_pics').find("img").length - 1;
        var $big = $(this).find(".big_pics");
        var $big_li = $big.find("li");
        var $small = $(this).find(".sm_pics");
        var $small_li = $small.find("li");
        //鼠标移上li时的函数
        $small_li.each(function(index) {
            $(this).hover(function() {
                clearInterval(timer);
                num = index;
                $big_li.eq(num).stop(false, true).fadeIn().siblings("li").stop(false, true).fadeOut();
                $small_li.eq(num).removeClass("bg").siblings("li").addClass("bg");
            },
            function() {
                change();
            })
        });
        //自动轮播函数
        function change() {
            clearInterval(timer);
            timer = setInterval(function() {
                num++;
                if (num > imgLen) num = 0;
                $big_li.eq(num).stop(false, true).fadeIn().siblings("li").stop(false, true).fadeOut();
                $small_li.eq(num).removeClass("bg").siblings("li").addClass("bg");
            },
            3000);
        }
        change();
    });
    //页面申请表单
    var tim0 = null,
    tim1 = null,
    lock0 = 1,
    lock1 = 1;
    $('#btn_appsubmit0').click(function() {
        $data = '';
        validation0(0);
        if (validation0(0) && lock0 == 1) {
            lock0 = 0;
            signupApply($data);
            /*$.post('/oppein/edmsys/index.php?r=site/app&c=seosbl20141128', $data,
            function(data) {
                if (data == 'yes') {
                    Hide(".apply_con_list,.tip");
                    Show(".apply_con_txt");
                    $('#iframeDoApp').attr('src', '/oppein/edmsys/index.php?r=site/ajaxdoapp&c=seosbl20141128&mobile=' + $data.Appuser.mobile);
                } else if (data == 'compno') {
                    $('#tip_show0').text('对不起，该手机号已经申请过，申请测量失败！');
                } else {
                    $('#tip_show0').text('申请测量失败！');
                }
            });*/
        }
        tim0 = setTimeout(function() {
            lock0 = 1;
        },
        3000)
    });
    /*页面申请表单*/
    $('#btn_appsubmit1').click(function() {
        $data = '';
        validation0(1);
        if (validation0(1) && lock1 == 1) {
            lock1 = 0;
            signupApply($data);
            /*$.post('/oppein/edmsys/index.php?r=site/app&c=seosbl20141128', $data,
            function(data) {
                if (data == 'yes') {
                    Hide('.tckbg , .sqk_alert');
                    $('#iframeDoApp').attr('src', '/oppein/edmsys/index.php?r=site/ajaxdoapp&c=seosbl20141128&mobile=' + $data.Appuser.mobile);
                    alert('申请成功');
                } else if (data == 'compno') {
                    $('#tip_show1').text('对不起，该手机号已经申请过，申请测量失败！');
                } else {
                    $('#tip_show1').text('申请测量失败！');
                }
            });*/
        }
        tim1 = setTimeout(function() {
            lock1 = 1;
        },
        3000)
    });
    $('#app_other0,#app_other1,#app_other2').bind('focus',
    function() {
        var tname = $(this).val();
        if (tname == '玄关柜/鞋柜/酒柜/书柜/其它家具') {
            $(this).val('')
        }
    }).bind('blur',
    function() {
        var tname = $(this).val();
        if ($(this).val() == '') {
            $(this).val('玄关柜/鞋柜/酒柜/书柜/其它家具');
        }
    });</script>
<div style="display:none;">
    <script>var _hmt = _hmt || []; (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?0fac6434bdefdcd9cceeb05d29231da4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();</script>
    <script type="text/javascript" src="http://tajs.qq.com/gdt.php?sId=35791314" charset="UTF-8"></script>
    <script type="text/javascript" src="http://tajs.qq.com/gdt.php?sId=35791314" charset="UTF-8"></script>
    <script>//公共部分代码， 以下代码在整个页面只需要安装一次即可
        (function(d, s, id) {
            var n = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            s = d.createElement(s);
            s.id = id;
            s.setAttribute('charset', 'utf-8');
            s.src = '//dmp.sina.com.cn/fyr.js';
            //wap 网站请将上一行dmp.sina.com.cn/fyr.js 更替为dmp.sina.cn/wap_fyr.js
            n.parentNode.insertBefore(s, n);
        })(document, 'script', 'fyr-script');
        _fyr = window._fyr || [];
        _fyr.push(['_setAccount', 'n7134']);</script>
    <script>//调用
        _fyr.push(['_visit', '1_1']);</script>
</div>
<input type="hidden" id="position" value="jpjz" />
<input type="hidden" id="position_name" value="精品家装" />
</body>

</html>
