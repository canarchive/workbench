<style>.footer a { margin: 0 10px; }</style>
<!--底部 开始-->
<?php echo $this->render('@gallerycms/views/layouts/platj/_footer-base'); ?>

<!--确认弹出层-->
<div id="black_ceng"></div>
<div class="submit">
    <div class="clearfix sub_tit">
        <span>加盟小秘书</span>
        <a href="javascript:;"></a>
    </div>
    <div class="sub_cont">
        <dl>
            <dt>提交成功</dt>
            <dd>请您稍等，客服正在火速致电中</dd></dl>
    </div>
</div>
<!--<div class="contrast_tips">
<div class="clearfix contrast_tips_tit">
<span>加盟小秘书</span>
<a href="#2"></a></div>
<div class="contrast_tips_cont">
<dl>
<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1f658-4102.png"></dt>
<dd>最多只能选择 3 个项目进行对比</dd></dl>
</div> 
</div>-->
<!--快捷留言表单 start-->
<div id="show_hide" style="display:none;" name="show_hide">
    <iframe class="secIframe" frameborder="0"></iframe>
    <div id="sec_from">
        <div class="secfrom_1">
            <a href="javascript:;" onclick="closeBg();return false;">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4440e-5334.jpg" width="14" height="14" style="display:inline-block;" /></a>
            <!--a href="http://jmw.com.cn/zhuanti/shengdian/" style="color: rgb(255, 0, 0); position: absolute; left:112px; top: 16px; text-align: left;">第七届中国（国际）品牌加盟投资博览会于2014年12月<br>20日至21日隆重召开，点击可参与抽奖活动！</a--></div>
        <div class="secfrom_2">
            <form method="post" action="">
                <div class="box_1">留言内容:
                    <span>[
                        <a onclick="return false" onmouseout="jQuery('#secly_1').hide();" onmouseover="jQuery('#secly_1').show();" href="javascript:;">快捷留言</a>]</span></div>
                <div class="box_1">
                    <textarea onkeyup="keyUp();" name="content" id="js_textarea"></textarea>
                </div>
                <div class="box_2">
                    <p>您的姓名：
                        <input type="text" name="sname" id="Uname" value="" class="name" maxlength="6" />
                        <span></span>性别：
                        <label>男</label>
                        <input type="radio" name="sex" value="0" id="sexm" checked class="a3" />
                        <label>女</label>
                        <input type="radio" name="sex" value="1" id="sexfm" class="a3" /></p>
                    <p>联系电话：
                        <input type="text" name="mobile" id="Utel" value="" maxLength="11" class="tel" />
                        <span>*</span></p>
                    <input type="hidden" id="Usid" value="0" name="sid" />
                    <input type="hidden" id="brandname" value="0" name="brandname" />
                    <input type="hidden" name="ispay" id="ispay" value="" />
                    <input type="hidden" id="origin" value="16-9-1" name="origin" />
                    <input type="hidden" name="searchQuick_lasturl" id="searchQuick_lasturl" />
                    <input type="hidden" name="searchQuick_fromurl" id="searchQuick_fromurl" />
                    <p class="btn">
                        <input type="image" id="searchQuick" onclick="return onClickMessInfo($(this));" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/0aea7-7483.jpg" width="88" height="26" /></p>
                </div>
                <!--快捷留言 start-->
                <div class="secMsg" id="secly_1" style="display:none;" onmouseout="jQuery('#secly_1').hide();" onmouseover="jQuery('#secly_1').show();">
                    <p>
                        <strong>您可以根据意向选择下列[快捷留言]</strong>
                        <a href="javascript:;" onclick="javascript:jQuery('.secMsg').hide();">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3bb8b-4720.gif" /></a>
                    </p>
                    <ul>
                        <li>
                            <a onclick="onClickBBSFrom('此项目很好，请尽快联系我详谈。')" href="javascript:;">此项目很好，请尽快联系我详谈。</a></li>
                        <li>
                            <a onclick="onClickBBSFrom('请问我所在的地区有加盟商了吗？')" href="javascript:;">请问我所在的地区有加盟商了吗？</a></li>
                        <li>
                            <a onclick="onClickBBSFrom('我已留下了邮箱，请将详细资料发邮件给我。')" href="javascript:;">我已留下了邮箱，请将详细资料发邮件给我。</a></li>
                        <li>
                            <a onclick="onClickBBSFrom('我想详细了解此项目的加盟流程，请与我联系。')" href="javascript:;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                        <li>
                            <a onclick="onClickBBSFrom('做为此项目的代理加盟商能得到哪些支持？')" href="javascript:;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                        <li>
                            <a onclick="onClickBBSFrom('请问投资此项目所需要的费用有哪些？')" href="javascript:;">请问投资此项目所需要的费用有哪些？</a></li>
                        <li class="noLine">
                            <a onclick="onClickBBSFrom('我想加盟此项目，请电话联系我。')" href="javascript:;">我想加盟此项目，请电话联系我。</a></li>
                    </ul>
                </div>
                <!--快捷留言 end--></form>
        </div>
    </div>
</div>
<!--快捷留言表单 end-->
<!--400电话弹出层 开始-->
<div class="advice_hotline" id="advice_hotline">
    <div id="parameter"></div>
    <div class="advice-2">
        <span>免费通话</span>
        <span id="advicephone" style="padding-left:17px;"></span>
        <a href="javascript:;"></a>
    </div>
    <div class="advice-3">
        <div class="advice-3-tips">(请直接拨打免费热线，或留言咨询)</div>
        <p>
            <span for="">您的姓名</span>
            <input class="s_tes" type="text" onfocus="this.style.color='#000';if(this.value=='请填写姓名！') this.value='';" onblur="this.style.color='#999';if(this.value=='') this.value='请填写姓名！';" id="name" name="name" fourTelUserName="fourTelUserName" value="请填写姓名！" />
            <span class="sexi">
                <input type="radio" checked="checked" name="tel_sex" id="sex" fourTelUserGender="fourTelUserGender" value="0" />
                <label for="man">男</label></span>
            <span class="sexi">
                <input type="radio" name="tel_sex" id="sex" fourTelUserGender="fourTelUserGender" id="woman" value="1" />
                <label for="woman">女</label></span>
        </p>
        <p>
            <span for="">手机号码</span>
            <input type="text" class="s_tes" onblur="this.style.color='#999';if(this.value=='') this.value='请填写手机号码！';" onkeyup="if(event.keyCode==13){doSearch();}" onfocus="this.style.color='#000';if(this.value=='请填写手机号码！') this.value='';" value="请填写手机号码！" id="mobil" name="mobil"></p>
        <p>
            <span for="">电子邮箱</span>
            <input class="s_tes" type="text" id="email" name="email" /></p>
        <div class="advice-3-bot">
            <input type="button" value="立即咨询" onclick="Webcall();return false;" /></div>
    </div>
    <div class="advice-4">
        <span>温馨提示：</span>提供您的联系方式，加盟顾问会及时与您联系！</div></div>
<style type="text/css">.advice_hotline{ position: fixed !important; left: 50%; top: 50%; margin-left: -203.5px !important; margin-top: -219.5px; z-index: 8000; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/30f72-8080.png) no-repeat; width: 407px; height: 439px; overflow: hidden; padding: 5px; display: none;} .advice-1{ height: 67px; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/15c25-5270.png) no-repeat 34px 12px; width: 270px; text-align: center; padding-left: 105px; padding-top: 13px;} .advice-1 p{ font-size: 17px; color: #fff; line-height: 25px;} .advice-1 strong{ display: block; font-size: 24px; color: #fff;} .advice-2{ height: 46px;} .advice-2 span{ float: left; font-size: 14px; color: #fff; padding-left: 25px; line-height: 48px;} .advice-2 a{ float: right; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/49e17-5551.gif) no-repeat; width: 12px; height: 11px; margin-top: 17px; margin-right: 16px;} .advice-3{ height: 260px;} .advice-3-tips{ font-size: 14px; color: #999; height: 24px; line-height: 24px; text-align: left; float: left; width: 407px; text-indent: 26px; margin-top: 22px; margin-bottom: 14px;} .advice-3-tips span{ color: #444;} .advice-3 p{ margin-bottom: 10px; padding-left: 26px;} .advice-3 p span{ display: inline-block; vertical-align: middle; font-size: 14px; color: #444; padding-right: 7px;} .advice-3 p .s_tes{ vertical-align: middle; width: 168px; height: 18px; line-height: 18px; padding: 5px 3px; color: #333; border: 1px solid #e8e8e8;} .advice-3-bot input{ width: 149px; height: 42px; line-height: 40px; overflow: hidden; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/90902-5195.png) no-repeat; color: #fff; border: none; text-align: center; font-size: 18px; cursor: pointer; margin-left: 93px; margin-top: 2px;} .advice-3 p span.sexi{ padding-left: 5px; padding-right: 2px;} .sexi input{ vertical-align: middle;} .sexi label{ display: inline-block; vertical-align: middle;} .advice-4{ color: #999; height: 53px; line-height: 53px; overflow: hidden; padding-left: 32px;} .advice-4 span{ color: #126ebc;}</style>
<script type="text/javascript">$(function() {
        $("div.free").click(function() {
            $(".advice_hotline").show();
            $("#black_ceng").show();
        });
        $(".advice-2 a").click(function() {
            $(".advice_hotline").hide();
            $("#black_ceng").hide();
            //$("#bgDiv").hide();
        });
    });</script>
<!--400电话弹出层 结束-->
<!--项目关注弹出层 开始-->
<div class="popWrap" id="itemAtt">
    <iframe class="popIframe" id="popIframe" scrolling="0" frameborder="0"></iframe>
    <div class="popWrap_sub" id="popWrap_sub"></div>
    <div class="popBox" id="popBox">
        <!--未登录提示 begin-->
        <iframe id="hidLoginDiv" name="hidLoginDiv" style="display:none;" src="http://person.jmw.com.cn/iframeLogin.php?url=http%3A%2F%2Fsearch.jmw.com.cn%2FnewSearch%2FnewList.php%3Fcondition%3Di86%26page%3D1%26showType%3D2" width="634" scrolling="no" height="393" frameborder="0"></iframe>
        <!--未登录提示 end-->
        <!--关注状态 begin-->
        <div class="attState" id="hidAttentionDiv">
            <!--提示 B-->
            <div class="attTips ok" id="attTips">
                <p id="tipsOne">
                    <strong>恭喜您！</strong></p>
                <p id="tipsTwo">成功关注了
                    <span>[
                        <a id="brandNameOne" href="#" target="_blank"></a>]</span></p>
            </div>
            <!--提示 E-->
            <script>$(function() {
                    var attention_lasturl = window.location.href;
                    var attention_fromurl = document.referrer;
                    $('#attention_lasturl').val(attention_lasturl);
                    $('#attention_fromurl').val(attention_fromurl);
                });
                function attentionMessage() {
                    var messContent = $("#messContent").val();
                    messContent = messContent.replace(/(^\s*)|(\s*$)/g, "");
                    if (messContent == '') {
                        alert('留言内容不能为空！');
                        return false;
                    }
                    var mpnum = $("#messMobile").val();
                    var yanz = /^(86)?0?1\d{10}$/;
                    if (mpnum == '') {
                        alert('联系方式不能为空');
                        return false;
                    } else {
                        if (yanz.test(mpnum) == false) {
                            alert('请输入正确的联系方式');
                            return false;
                        }
                    }
                    $('#att_submitBtn').hide();
                }</script>
            <!--留言 B-->
            <form onsubmit="return attentionMessage();" method="post" id="attentionFrom" name="attentionFrom" action="http://liuyan.jmw.com.cn/message/messageProjectAttention.php">
                <div class="interested_item" id="interested_item" style="display:none;">
                    <p>
                        <strong>我们还为您准备了一些可能感兴趣的加盟项目：</strong></p>
                    <ul></ul>
                </div>
                <div class="submitBtn_box" id="submitBtn_box" style="display:none;">
                    <input type="hidden" name="attention_lasturl" id="attention_lasturl" />
                    <input type="hidden" name="attention_fromurl" id="attention_fromurl" />
                    <input type="hidden" name="pid" id="guanzhupid" value="" />
                    <input type="hidden" name="attention_origin" id="attention_origin" value="16-7" />
                    <input type="button" onclick="sendMessage();_gaq.push(['_trackEvent', '关注推荐', '点击', '标项页关注层点击<好的，联系我吧>']);return false;" class="contactBtn"></div>
                <div class="grayBox" id="quickBox" style="display:none;">
                    <table border="0" cellspacing="0" cellpadding="0" class="attMsg_table">
                        <caption>
                            <div class="secMsg_position">
                                <em>现在可以给
                                    <span>[
                                        <a id="brandNameTwo" href="#" target="_blank"></a>]</span>发送意向:</em>
                                <a class="quickMsg_link" href="javascript:;" onmouseover="jQuery('#secly_0000').show();" onmouseout="jQuery('#secly_0000').hide();">快捷留言</a>
                                <!--快捷留言 start-->
                                <div class="secMsg" id="secly_0000" style="display:none;" onmouseout="jQuery('#secly_0000').hide();" onmouseover="jQuery('#secly_0000').show();">
                                    <p>
                                        <strong>您可以根据意向选择下列[快捷留言]</strong>
                                        <a href="javascript:;" onclick="jQuery('#secly_0000').hide();">
                                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3bb8b-4720.gif" /></a>
                                    </p>
                                    <ul id="messageUl" class='clearfix'>
                                        <li>
                                            <a href="javascript:;">此项目很好，请尽快联系我详谈。</a></li>
                                        <li>
                                            <a href="javascript:;">请问我所在的地区有此项目加盟商了吗？</a></li>
                                        <li>
                                            <a href="javascript:;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                                        <li>
                                            <a href="javascript:;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                                        <li>
                                            <a href="javascript:;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                                        <li>
                                            <a href="javascript:;">请问投资此项目所需要的费用有哪些？</a></li>
                                        <li class="noLine">
                                            <a href="javascript:;">我想加盟此项目，请电话联系我。</a></li>
                                    </ul>
                                </div>
                                <!--快捷留言 end--></div>
                        </caption>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <textarea id="messContent" name="content"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th width="15%">姓 名：</th>
                                <td width="85%">
                                    <!-- <font>*</font> -->
                                    <font></font>
                                    <input type="text" value="" id="realname" name="sname" class="Inp1" maxlength="6" />
                                    <em>性 别：</em>
                                    <label>
                                        <input type="radio" id="messsexm" checked="checked" value="0" name="sex">男</label>
                                    <label>
                                        <input type="radio" id="messsexfm" value="1" name="sex">女</label></td>
                            </tr>
                            <tr>
                                <th>手 机：</th>
                                <td>
                                    <font>*</font>
                                    <input type="text" value="" id="messMobile" name="mobile" class="Inp2" maxlength="11" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="att_submitBtn" id="att_submitBtn">
                        <input type="submit" value="" /></p>
                </div>
                <!--input id="hidSidVal" type="hidden" name="sid" value="24" />
                <input id="attentionbrandname" type="hidden" name="attentionbrandname" value="" />
                <input type="hidden" id="8_list_attention" value="" name="origin" />
                <input type="hidden" name="url" id="url" value="" />
                <input type="hidden" name="ispay" id="ispay" value="" /---></form>
            <!--留言 E--></div>
        <!--关注状态 end-->
        <!--确然信息 B-->
        <div class="c_infoBox" id="c_infoBox1" style="display:none;">
            <h3>确认您的信息</h3>
            <table cellpadding="0" cellspacing="0" class="infoTable c_sub">
                <tbody>
                    <tr>
                        <th width="27%">
                            <i>
                            </i>真实姓名：</th>
                        <td width="73%" id="user_name"></td>
                    </tr>
                    <tr>
                        <th>
                            <i>
                            </i>手机号码：</th>
                        <td id="user_mobile"></td>
                    </tr>
                    <tr>
                        <th>
                            <i>
                            </i>电子邮箱：</th>
                        <td id="user_email"></td>
                    </tr>
                    <tr>
                        <th>
                            <i>
                            </i>性
                            <font>别</font>：</th>
                        <td id="user_sex">男</td></tr>
                    <tr>
                        <th class="noLine">&nbsp;</th>
                        <td class="c_submitBtn noLine">
                            <input type="hidden" id="basicid" name="basicid" value="">
                            <input type="hidden" id="basicname" name="basicname" value="">
                            <input type="hidden" id="basicsex" name="basicsex" value="">
                            <input type="hidden" id="basicmobile" name="basicmobile" value="">
                            <input type="hidden" id="basicemail" name="basicemail" value="">
                            <input type="hidden" id="messagetype" name="messagetype" value="">
                            <input type="hidden" id="8_5_origin" name="origin" value="">
                            <input type="button" name="" id="submitEdit" value="" onclick="addMessagesToLiuyan();return false;" />
                            <a href="javascript:;" onclick="jQuery('#c_infoBox1').hide();jQuery('#c_infoBox2').show();">修改我的信息</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--确然信息 E-->
        <!--修改信息 B-->
        <div class="c_infoBox" id="c_infoBox2" style="display:none;">
            <h3>修改我的信息</h3>
            <table cellpadding="0" cellspacing="0" class="infoTable">
                <tbody>
                    <tr>
                        <th width="27%">
                            <i>
                            </i>真实姓名：</th>
                        <td width="73%">
                            <input type="text" maxlength="6" name="basicname" id="UserName" value="" class="c_inp1" />
                            <!--验证提示-->
                            <span class="tipsIcon" id="nameError"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <i>*</i>手机号码：</th>
                        <td>
                            <input type="text" name="basicmobile" id="UserMobile" maxlength="11" value="" class="c_inp1" />
                            <!--验证提示-->
                            <span class="tipsIcon" id="mobileError"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <i>
                            </i>电子邮箱：</th>
                        <td>
                            <input type="text" maxlength="50" name="basicemail" id="UserEmail" value="" class="c_inp1" />
                            <!--验证提示-->
                            <span class="tipsIcon" id="emailError"></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <i>
                            </i>性
                            <font>别</font>：</th>
                        <td>
                            <label for="nan">
                                <input id="UserNan" type="radio" value="0" name="basicsex" />男</label>
                            <label for="nv">
                                <input id="UserNv" type="radio" value="1" name="basicsex" />女</label></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td class="c_submitBtn">
                            <input type="hidden" name="basicid" value="" id="sid" />
                            <input type="hidden" name="messagetype" value="" id="UserType" />
                            <input type="hidden" id="8_5_origin_edit" name="origin" value="">
                            <input type="button" name="" id="" value="" onclick="quickButtonMessage();return false;" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--修改信息 E-->
        <!--索要资料、发送意向、回电话 成功 B-->
        <div class="c_infoBox" id="c_infoBox3" style="display:none;">
            <h3 id="sendType">索要资料</h3>
            <div class="success_alert syzl" id="sendClass">
                <!--索要资料syzl | 发送意向fsyx — 回电话hdh -->
                <p class="successTit" id="msgSuccess">
                    <strong>成 功！</strong></p>
                <p>
                    <em id="sendStatus">您已向企业索要加盟资料</em></p>
                <p id="sendContent">企业会将更多详细资料发送至您的电子邮箱中，请注意查收！</p></div>
            <div class="submitBtn_box c_sub" id="editButton">
                <input class="c_confirmBtn" type="button" value="" name="" id="" onclick="hidDiv();" />
                <a href="http://person.jmw.com.cn/updateContact.php" target="_blank">修改我的联系方式</a></div>
        </div>
        <!--索要资料、发送意向、回电话 成功 E-->
        <div class="c_infoBox" id="c_infoBox4" style="display:none;">
            <h3 id="sendType">索要sssssss资料</h3>
            <div class="success_alert syzl" id="sendClass">
                <!--索要资料syzl | 发送意向fsyx — 回电话hdh -->
                <p class="successTit" id="msgSuccess">
                    <strong>成 功！</strong></p>
                <p>
                    <em id="sendStatus">您已向企业索要加盟资料</em></p>
                <p id="sendContent">企业会将更多详细资料发送至您的电子邮箱中，请注意查收！</p></div>
            <div class="submitBtn_box c_sub" id="editButton">
                <input class="c_confirmBtn" type="button" value="" name="" id="" onclick="hidDiv();" />
                <a href="http://person.jmw.com.cn/updateContact.php" target="_blank">修改我的联系方式</a></div>
        </div>
    </div>
    <a href="javascript:;" onclick="hidDiv();" id="popClose" class="popClose" title="关闭"></a>
</div>
<!--项目关注弹出层 结束-->
<!--背景遮罩层 开始-->
<iframe id="bgIframe" class="bgIframe" frameborder="0"></iframe>
<div id="bgDiv" class="bgDiv"></div>
<!--背景遮罩层 结束-->
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/af28d-4814.css">
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/6d681-4893.css">-->
<script>$(function() {
        $.ajax();
        var availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"];
        $("#keyword_fenci").autocomplete({
            source: "http://search.jmw.com.cn/Search.php",
            minLength: 1,
            select: function(event, ui) {
                // event 是当前事件对象
                window.location.href = ui.item.active;
                // ui对象仅有一个item属性，它表示当前被选中的菜单项对应的数据源对象
                // 该对象具有label和value属性，以及其它自定义(如果有的话)的属性
            }
        });
    });</script>
<div style="display:none;">
    <!--综合页360统计代码-->
    <!--<script src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/c.js' language='JavaScript'></script>
    <script src='http://pw.cnzz.com/tongji_360.php?id=1256636396&pid=e360&l=2' language='JavaScript' charset='gb2312'></script> -->
    <!--综合页360统计代码end--></div>
