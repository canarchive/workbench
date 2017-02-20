<?php
$info = $this->context->mDatas['info'];
?>
<section class="b_section1">
    <div class="section1_top clear">
        <div class="clear section1_top1">
            <h1 class="fl"><?= $info['name_full']; ?></h1>
            <span style="text-align:right;">
                <a class="section1_2" style="margin-left:99px;" href="<?= "/{$this->context->currentCityCode}/"; ?>" title="<?= $this->context->currentCityName; ?>"><?= Yii::$app->params['siteNameBase']; ?></a>
                <i class="section1_2">&gt;</i>
                <a class="section1_2" href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName; ?>装饰公司"><?= $this->context->currentCityName; ?>装饰公司</a>
                <i class="section1_2">&gt;</i>
                <a class="section1_2" href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
            </span>
        </div>
        <p class="zhaoshang" style="color:#fff;"><?= $info['name']; ?></p>
    </div>
    <div class="content_phone wrap" style="margin-bottom:0;">
        <ul class="clear ul1">
            <li class="icons1 fl">服务业主
                <span style="color:red;"><?= $info['num_owner']; ?></span></li>
            <li class="icons2 fr">
                <span id="attentionCountNum" style="color:red;"><?= $info['num_realcase']; ?></span>设计案例</li>
            <li class="icons3 fl">
                <span style="color:red;"><?= $info['num_working']; ?></span>个工地</li>
            <li class="icons4 fr">
                <a style="display: block;width: 100%;height: 100%;" onclick="$('.gray_mask').show();$('.tm_bg').show()&amp;&amp;$('#online_consult').show();$('#zj_origin').val('1');$('#contents').val('免费设计');">
                    <i class="icon"></i>免费设计</a>
            </li>
        </ul>
        <script>$(function() {
                getAttentionCountByAjax('137829');
            });</script>
        <style type="text/css">.jiaM_tele{ height:44px; line-height:44px; font-size:13px; color:#999; } .chaKan{ margin-left:17px; color:#008ac3; } .chaKan i{ display:block; width:16px; height:16px; background-size:16px 16px; margin:3px 3px 0 0; font-size:15px; } .inquire_tele{background: #fff; width: 88%; position: fixed; left: 6%; top: 20%; border-radius: 10px; z-index: 1000; display:none; } .inquire_top{height: 55px; line-height: 55px;text-align: center;border-bottom: 1px solid #e8e8e8;font-size: 1rem;color: #000;} .inquire_tele .hot_line{ height:45px; line-height:45px; padding-left:4%; font-size:13px; color:#999; } .inquire_tele ul li{ line-height: 45px;padding: 0 4%; } .inquire_tele ul li span{ display: inline-block;font-size: 0.95rem;color: #666;} .inquire_tele ul li span .em1{ float: left;color: #e10000;margin-right: 5px;} .inquire_tele ul li span .em2{ margin-left:6px; } .inquire_tele ul li .text{ width: 30%;height: 28px;font-size: 0.8rem;color: #c3c3c3;box-sizing: border-box;padding-left: 3px;margin-left: 3px;border: medium none;} .inquire_tele .li_sex{ font-size:0.85rem; } .inquire_tele ul .li5 { height: 48px; line-height: 48px; border-top:1px solid #e8e8e8; } .inquire_tele ul li a {text-align: center; width: 50%; display: inline-block; font-size: 0.95rem;} .inquire_tele ul .a1{ border-right: 1px solid #e8e8e8; box-sizing: border-box; color: #cdcdcd;} .inquire_tele ul .a2 { color: #4283e4;} .icon_tel_sex3{ background:url('http://m.jmw.com.cn/images/icon-radio_02.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; } .icon_tel_sex4{ background:url('http://m.jmw.com.cn/images/icon-radio2_01.png') no-repeat center; width:13px; height:13px; background-size:13px 13px; margin:16px 6px 0 0; }</style>
        <!--<div class="jiaM_tele clear">
            <p class="fl">
                <span class="same fl">咨询电话：</span>
                <span class="toggle_shu1"><?= Yii::$app->params['siteHotline']; ?></span>
                <span class="toggle_shu2" style="display:none;">
                    <a class="fl" onclick="addTelForWap(137829,1,&quot;0312-8593111&quot;)">0312-8593111</a></span>
            </p>
            <p class="fl chaKan" onclick="check_is_login2(137829,1,2,27,'晨阳水漆');return false;">
                <i class="fl">
                    <img src="http://m.jmw.com.cn//images/fangDj.png" alt=""></i>查看</p>
        </div>-->
        <form action="" method="post" id="see_tel">
            <div class="inquire_tele">
                <p class="inquire_top">询加盟电话</p>
                <p class="hot_line">请您输入手机号码，查看企业加盟热线</p>
                <ul>
                    <li>
                        <span>
                            <em class="em1">*</em>姓名
                            <em class="em2">:</em></span>
                        <input class="text" name="name" id="tel_name" placeholder="请输入姓名" value="" maxlength="6" type="text">
                        <p class="li_sex fr">&nbsp;&nbsp;性别:
                            <label id="tel_label3" style="display:inline-block;">
                                <i class="icon_tel_sex3 fl icon_tel_sex4"></i>男 &nbsp;</label>
                            <label id="teo_label4" style="display:inline-block;">
                                <i class="icon_tel_sex3 fl "></i>女</label>
                        </p>
                    </li>
                    <li>
                        <span>
                            <em class="em1">*</em>手机
                            <em class="em2">:</em></span>
                        <input class="text" name="phone" id="tel_phone" placeholder="请输入手机号" value="" maxlength="11" style="width:75%;" type="text"></li>
                    <li class="li5 clear">
                        <a href="javaScript:;" class="fl a1" onclick="$('.inquire_tele').hide();$('.gray_mask').hide();">取消</a>
                        <a href="javaScript:;" class="fr a2" onclick="return see_tel($(this));">确定</a></li>
                </ul>
            </div>
            <input name="gender" class="fl" id="tel_sex" value="0" type="hidden">
            <input name="content" class="fl" id="tel_content" value="" type="hidden">
            <input name="target_id" id="tel_target_id" value="137829" type="hidden">
            <input value="" name="origin" id="tel_origin" type="hidden">
            <input name="MFoot_lasturl" id="MCeng_lasturl_1" value="http://m.jmw.com.cn/xm137829/" type="hidden">
            <input name="MFoot_fromurl" id="MCeng_fromurl_1" value="" type="hidden"></form>
        <!-- 询加盟电话 end --></div>
</section>
