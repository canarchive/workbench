<script>project_id = 137829;
    addPageView("pv", project_id);

    $(function() {
        var attention_lasturl = window.location.href;
        var attention_fromurl = document.referrer;
        $('#attention_lasturl').val(attention_lasturl);
        $('#attention_fromurl').val(attention_fromurl);
        $('#basicfromurl').val(attention_fromurl);
        $('#basiclasturl').val(attention_lasturl);
        $('#editfromurl').val(attention_fromurl);
        $('#editlasturl').val(attention_lasturl);
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
    }
    function editMessageFrom() {
        jQuery('#c_infoBox1').hide();
        jQuery('#c_infoBox2').show();
        var add_blag_origin = $("#add_blag_origin").val();
        edit_blag_origin = parseInt(add_blag_origin) + 2;
        $("#edit_blag_origin").val(edit_blag_origin);
    }</script>
<iframe style="display:none;" id="createiframeq" src="about:blank" name="createiframeq"></iframe>
<iframe style="display:none;" id="frmForTel" src="about:blank" name="frmForTel"></iframe>
<script type="text/javascript">if (document.getElementById("chakanzbdh")) {
        document.getElementById("chakanzbdh").onclick = function() {
            document.getElementById("zongbudianhua").style.display = "block";
            document.getElementById("chakanzbdh").style.display = "none";
            document.getElementById("frmForTel").src = "http://search1.jmw.com.cn/index.php/Operat/index?&type=TEL&id=137829";
            document.getElementById("frmForTel").src = "http://liuyan.jmw.com.cn/?param=32-137829-3";
            var vid = document.getElementById("CompanyType").value;
            if (vid == 5 || vid == 6 || vid == 0) {
                document.getElementById("zongbudianhua").innerHTML = "<strong class=\"redTxt\">该项目信息暂未通过核实</strong>";
            } else {
                document.getElementById("zongbudianhua").innerHTML = "<strong class=\"redTxt\">0312-8593111<img src=\"http://image1.jmw.com.cn/search/images/left_ico5.jpg\" width=\"17\"  height=\"14\" style=\"_margin-top:5px;\" /></strong>";
            }
        }
    }</script>
<!--项目关注弹出层 开始-->
<div class="popWrap" id="itemAtt">
    <iframe class="popIframe" id="popIframe" scrolling="0" frameborder="0"></iframe>
    <div class="popWrap_sub" id="popWrap_sub"></div>
    <div class="popBox" id="popBox">
        <!--未登录提示 begin-->
        <iframe id="hidLoginDiv" name="hidLoginDiv" style="display:none;" src="http://person.jmw.com.cn/iframeLogin.php?url=http://www.jmw.com.cn/xm137829/wangyoudianping/" width="634" scrolling="no" height="393" frameborder="0"></iframe>
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
                    <input type="hidden" name="pid" id="pid" value="137829" />
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
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/3bb8b-4720.gif" /></a>
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
                <!--input id="hidSidVal" type="hidden" name="sid" value="137829" />
                <input id="attentionbrandname" type="hidden" name="attentionbrandname" value="晨阳水漆" />
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
                            <input type="hidden" id="basicbrand_name" name="basicbrand_name" value="晨阳水漆">
                            <input type="hidden" id="basicmobile" name="basicmobile" value="">
                            <input type="hidden" id="basicemail" name="basicemail" value="">
                            <input type="hidden" id="basiclasturl" name="basiclasturl" value="">
                            <input type="hidden" id="basicfromurl" name="basicfromurl" value="">
                            <input type="hidden" id="messagetype" name="messagetype" value="">
                            <input type="hidden" id="add_blag_origin" name="add_blag_origin" value="">
                            <!--input type="hidden" id="8_5_origin" name="origin" value=""-->
                            <input type="button" name="" id="submitEdit" value="" onclick="addMessagesToLiuyanNew();return false;" />
                            <a href="javascript:;" onclick="editMessageFrom()">修改我的信息</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--确然信息 E-->
        <!--修改信息 B-->
        <div class="c_infoBox" id="c_infoBox2" style="display:none;">
            <h3>我的信息</h3>
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
                            <input type="hidden" id="basicbrand_name" name="basicbrand_name" value="晨阳水漆">
                            <input type="hidden" id="editlasturl" name="editlasturl" value="">
                            <input type="hidden" id="editfromurl" name="editfromurl" value="">
                            <input type="hidden" id="edit_blag_origin" name="edit_blag_origin" value="">
                            <input type="button" name="" id="" value="" onclick="quickButtonMessageNew();return false;" /></td>
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
        <!--索要资料、发送意向、回电话 成功 E--></div>
    <a href="javascript:;" onclick="hidDiv();" id="popClose" class="popClose" title="关闭" style=""></a>
</div>
<!--项目关注弹出层 结束-->
<!--发送到手机成功 开始-->
<div class="popWrap send_success" id="send_success">
    <iframe class="popIframe" scrolling="0" frameborder="0"></iframe>
    <div class="popWrap_sub"></div>
    <div class="popBox">
        <div class="successAlert">
            <div class="alertText">
                <p>
                    <strong>成功啦！</strong></p>
                <p>该项目的联系方式已发送至您的手机！</p>
            </div>
            <div class="alertConfirm_btn">
                <input type="button" name="" id="" value="" onclick="sendSuccess()" /></div>
        </div>
    </div>
</div>
<!--发送到手机成功 结束-->
<!--发送到手机出错 开始-->
<div class="popWrap send_success" id="send_failed">
    <iframe class="popIframe" scrolling="0" frameborder="0"></iframe>
    <div class="popWrap_sub"></div>
    <div class="popBox">
        <div class="successAlert">
            <div class="alertText">
                <p>
                    <strong>出错了！</strong></p>
                <p>您今天获取该项目的电话次数已经达到上限啦，请明天再试~</p>
            </div>
            <div class="alertConfirm_btn">
                <input type="button" name="" id="" value="" onclick="sendSuccess()" /></div>
        </div>
    </div>
</div>
<!--发送到手机出错 结束-->
<!--背景遮罩层 开始-->
<iframe id="bgIframe" class="bgIframe" frameborder="0"></iframe>
<div id="bgDiv" class="bgDiv"></div>
<!--背景遮罩层 结束-->
<input type="hidden" name="domain_seat" id="domain_seat" value="8-5-" />
<style>.footer a { margin: 0 10px; }</style>
<!--底部 开始-->
<?= $this->render('_footer-base'); ?>
<!--图片查看器容器-->
<div id="box" style="display:none;"></div>
<div id="showAlbumImgs"></div>
<!--投诉-->
<div class="reportZ_Z">
    <div class="reportZ_Z_title clearfix">
        <em>提示</em>
        <a href="javascript:;"></a>
    </div>
    <div class="reportZ_Z_cont clearfix">
        <div class="coot_Img">
            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/150a8-3384.png" /></div>
        <dl>
            <dt>请将投诉内容发送到指定邮箱</dt>
            <dd>邮箱地址：</dd>
            <dd>
                <span>tcsd-gc001@jmw.com.cn</span></dd>
        </dl>
    </div>
</div>
<script>$(function() {
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 700) {
                    $(".lireturn_top").fadeIn(1500);
                } else {
                    $(".lireturn_top").fadeOut(1500);
                }
            });

            //当点击跳转链接后，回到页面顶部位置
            $(".lireturn_top").click(function() {
                $('body,html').animate({
                    scrollTop: 0
                },
                1000);
                return false;
            });
        });
    });</script>
<script type="text/javascript" async="" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/ga.js"></script>
