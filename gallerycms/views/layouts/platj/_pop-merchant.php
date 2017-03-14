<!------------新版仿商桥模块 B------------>
<link href="http://image1.jmw.com.cn/public/css/jmw_shangqiao.css" type="text/css" rel="stylesheet" />
<script src="http://liuyan.jmw.com.cn/jmw_tpl_2011/js/jmw_util.js" type="text/javascript" language="javascript"></script>
<script src="http://image1.jmw.com.cn/newSearchPage/js/duibi.js" type="text/javascript" language="javascript"></script>
<link rel="stylesheet" href="http://search.jmw.com.cn/fenci/jquery-ui.css">
<script src="http://search.jmw.com.cn/fenci/jquery-ui.js"></script>
<!--侧边工具栏 B-->
<!--<div class="jmw_shangqiao_bar">
<iframe scrolling="no" frameborder="0"></iframe>
<ul class="sq_bar">
<li class="bar_first"><i class="toolbar_icon"></i><strong>工具栏</strong><a target="_self" href="javascript:;" class="close_sq_bar" onclick="showSQ(3)"></a></li>
<li onclick="goTop()" title="返回顶部"><i class="gotop_icon"></i><span>返回顶部</span></li>
<li onclick="showSQ(5)" title="联系电话"><i class="phone_icon"></i><span>联系电话</span></li>
<li onclick="showSQ(2)" title="在线客服"><i class="service_icon"></i><span>在线客服</span></li>
<li onclick="holdSQ_bar()" title="展开工具条"><i class="fold_icon"></i><span>收起工具条</span></li></ul>
</div>-->
<script src="http://image1.jmw.com.cn/newSearchPage/js/jmw_shangqiao.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://image1.jmw.com.cn/newSearchPage/css/gai1_style.css" />
<ul class="yiche-side">
    <li class="side_li_first" onclick="_MEIQIA._SHOWPANEL()">
        <a href="javascript:;">在线咨询</a></li>
    <li class="side_li_first" onclick="showStory('.$projectId.','0','.$name.')">
        <a href="javascript:;">免费电话</a></li>
    <li class="side_li_first" style="border:none;">
        <a rel="nofollow" style="cursor:pointer" onclick="
        qqdynamic(137829,4006122505)" id="clickqq">QQ咨询</a>
    </li>
    <li class="side_li_first addDB" style="border-top:1px solid #e9e9e9;">
        <p class="redJiao" style="display:none;">
            <img src="http://search.jmw.com.cn/images/left_j.png" alt="" /></p>
        <a href="javaScript:;" class="zp_db_jiaRu" id="zp_db_jiaRu" onclick="selectXM(137829,'晨阳水漆',5)">加入对比</a>
        <a href="javaScript:;" id="zp_db_chakan" style="display:none" onclick="hiddenChaKan()">查看对比</a>
        <div class="add_duiBi" style="display:none;">
            <p class="select_p">对比清单已选择
                <span id="zp_db_num">0</span>个项目
                <em>(最多可选择3个)</em>
                <span class="addclose2">
                    <img src="http://search.jmw.com.cn/images/addclose2_16.png" alt="" /></span>
            </p>
            <ul class="add_xiangMu" id="zp_db_addxm"></ul>
            <p class="pleaseAdd pleaseAdd1" id="zp_db_wrning">请至少添加2个项目进行对比</p>
            <a style="text-decoration:none" target="_blank" style="display:inline;color:#fff;" id="zp_db_href" href="http://search.jmw.com.cn/newSearch/ContrastXM.php">
                <p class="pleaseAdd pleaseAdd2" id="zp_db_start">开始对比</p></a>
        </div>
    </li>
    <li class="lireturn_top">
        <a href="javascript:;">返回顶部</a></li>
</ul>
<style type="text/css">.addDB{ position:relative; } .add_duiBi{ width:298px; border:1px solid #ff6b22; background:#fff; position:absolute; bottom:0; right:58px; z-index:999; } .select_p{ height:40px; line-height:40px; background:#f7f6f6; color:#333333; font-size:14px; text-indent:15px; position:relative; } .select_p em{ font-style:normal; color:#999999; } .addclose2{ display:block; position:absolute; width:19px; height:15px; right:0; top:0; cursor:pointer; } .pleaseAdd{ width:270px; height:36px; border-radius:2px; line-height:36px; text-align:center; font-size:14px; font-weight:bold; color:#fff; margin:10px auto 12px; cursor:pointer;} .add_xiangMu{ width:270px; margin:7px auto 0;} .add_xiangMu li{ height:30px; line-height:30px; border-bottom:none;} .add_xiangMu li a{ display:block; width:135px; height:30px; line-height:30px; overflow:hidden; font-size:14px; color:#333; margin-right:20px; padding:0; } .yiche-side .add_xiangMu li a:hover{ color:#df0303;} .add_xiangMu .money span{ color:#e93c00; } .add_xiangMu .addClose{ color:#1f435b; width:9px; height:9px; line-height:9px; font-size:18px; cursor:pointer; margin-top:10px; } .pleaseAdd1{ background:#c8c8c8; display:none; } .pleaseAdd2{ background:#ff6b22; } .redJiao{ width:8px; height:15px; position:absolute; right:50px; bottom:18px; } .input_xmName{ width:267px; height:28px; border:1px solid #ff6b22; margin:7px auto 0; } .input_xmName .pleaseShu{ width:202px; background:#fff; height:28px; line-height:28px; padding-left:6px; color:#999999; border:none; } .input_xmName .tianJia{ width:59px; height:28px; line-height:28px; text-align:center; background:#ff9920; color:#fff; border:none; }</style>
<script type="text/javascript">$(function() {
        $(".addclose2").click(function() {
            $(".add_duiBi").hide();
            $(".redJiao").hide();
        }); $(".zp_db_jiaRu").hover(function() {
            $(".zp_db_jiaRu").css("color", "#fff");
            $(".zp_db_jiaRu").css("background", "#e43c01");
        },
        function() {
            $(".zp_db_jiaRu").css("color", "#999");
            $(".zp_db_jiaRu").css("background", "#fff");
        })

        $(".add_duiBi").hover(function() {
            //$(".add_xiangMu").show();
            $(".zp_db_jiaRu").css("background", "#fff");
            $(".zp_db_jiaRu").css("color", "#999");
        },
        function() {
            //$(".add_xiangMu").hide();
            $(".zp_db_jiaRu").css("background", "#fff");
            $(".zp_db_jiaRu").css("color", "#999");
        })
    })</script>
<script>//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
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
            $("body,html").animate({
                scrollTop: 0
            },
            1000);
            return false;
        });
    }); (function(m, ei, q, i, a, j, s) {
        m[a] = m[a] ||
        function() { (m[a].a = m[a].a || []).push(arguments)
        };
        j = ei.createElement(q),
        s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = i + '?v=' + new Date().getUTCDate();
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '//static.meiqia.com/dist/meiqia.js', '_MEIQIA');
    _MEIQIA('entId', 18836);
    _MEIQIA('assign', {
        groupToken: '0aef37e3a9fd8c75101972c05c53e86f'
    });
    _MEIQIA('fallback', 2);
    //_MEIQIA('withoutBtn', true);
    </script>
<!--侧边工具栏 E-->
<div class="jmw_shangqiao_pop_wrap">
    <!--在线咨询 屏幕中间 B-->
    <div class="jmw_shangqiao_pop">
        <iframe class="sq_pop_iframe" scrolling="no" frameborder="0"></iframe>
        <!--咨询邀请 B-->
        <!--咨询邀请 B-->
        <div id="sq_part_1">
            <div class="sq_pop_tit">
                <em>晨阳水漆品牌资深顾问：</em>
                <span>
                    <a target="_self" href="javascript:;" onclick="closeAll_midAlert()" class="close_sq" title="关闭" hideFocus="true"></a>不再提醒</span>
            </div>
            <div class="sq_pop_box">
                <div class="pop_icon"></div>
                <div class="sq_pop_con">
                    <div class="pop_text_con">
                        <p>晨阳水漆品牌适合我吗？怎样加盟、费用多少？</p>
                        <p>资深顾问为您解惑！不错过每一次机会！</p>
                    </div>
                    <div class="sq_btn_box">
                        <a target="_self" href="javascript:;" class="sq_consult_btn" hideFocus="true" onclick="showSQ(2)">为我指南</a>
                        <a target="_self" href="javascript:;" class="sq_later_btn" hideFocus="true" onclick="hideSQ()">等会再说</a></div>
                </div>
            </div>
        </div>
        <!--咨询邀请 E-->
        <!--咨询邀请 E-->
        <!--疑问咨询部分 B-->
        <div id="sq_part_2" style="display:none;">
            <div class="sq_pop_tit">
                <em>告诉我们你的疑问，我们会尽力给您满意的解答！</em>
                <span>
                    <a target="_self" href="javascript:;" onclick="hideSQ()" class="close_sq" title="关闭" hideFocus="true"></a>
                </span>
            </div>
            <div class="sq_pop_box">
                <div class="pop_icon"></div>
                <div class="sq_pop_con">
                    <!--表单 B-->
                    <div class="sq_form">
                        <dl class="first">
                            <dt>您的疑问：</dt>
                            <dd style="float:right;">
                                <a target="_self" href="javascript:;" class="show_secMsg" onmouseout="$('#form_secMsg').hide();" onmouseover="$('#form_secMsg').show();">别人都问些什么？</a>
                                <!--快捷留言 B-->
                                <div class="secMsg" id="form_secMsg" style="display:none;" onmouseout="$('#form_secMsg').hide();" onmouseover="$('#form_secMsg').show();">
                                    <iframe class="msgIframe" frameborder="0"></iframe>
                                    <p>
                                        <strong>您可以根据意向选择下列[快捷留言]</strong>
                                        <a target="_self" href="javascript:;" onclick="$('.secMsg').hide();">
                                            <img src="http://image1.jmw.com.cn/search/images/sec_015.gif" /></a>
                                    </p>
                                    <ul>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">晨阳水漆项目很好，请尽快联系我详谈。</a></li>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">请问晨阳水漆在我所在的地区招商吗？</a></li>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">我已留下了邮箱，请将晨阳水漆详细资料发给我。</a></li>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">我想了解晨阳水漆代理的流程，请与我联系。</a></li>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">作为晨阳水漆的代理商能得到哪些支持？</a></li>
                                        <li>
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">请问代理晨阳水漆首次进货最低达到多少？</a></li>
                                        <li class="noLine">
                                            <a target="_self" href="javascript:;" onclick="sq_insertintotext($(this));return false;">我想代理晨阳水漆，请尽快电话联系我。</a></li>
                                    </ul>
                                </div>
                                <!--快捷留言 E--></dd>
                        </dl>
                        <form id="sq_From" action="" method="post">
                            <dl>
                                <dd style="height:72px;">
                                    <textarea onkeyup="sq_textmaxlength()" id="txt_area" cols="" rows="" name="content">请输入您的疑问</textarea></dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input id="txt_name" maxlength="7" type="text" class="txt_input" name="sname" value="" />
                                    <label for="Mr_2">
                                        <input name="sex" id="Mr_2" type="radio" checked="checked" />先生</label>
                                    <label for="Ms_2">
                                        <input name="sex" id="Ms_2" type="radio" />女士</label></dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input type="hidden" name="sid" value="137829" id="sq_Usid" />
                                    <input type="hidden" name="sq_lasturl" id="sq_lasturl" />
                                    <input type="hidden" name="sq_fromurl" id="sq_fromurl" />
                                    <input type="hidden" name="sq_origin" id="sq_origin" value="16-6" />
                                    <input id="txt_phone" maxlength="11" type="text" name="mobile" class="txt_input" value="" />
                                    <input type="button" class="msg_submit_btn" onclick="return sqOnClickMessInfoNewMessage($(this));" value="提交我的疑问" /></dd>
                            </dl>
                        </form>
                    </div>
                    <!--表单 E--></div>
            </div>
        </div>
        <!--疑问咨询部分 E-->
        <!--小提示 B-->
        <div id="sq_part_3" style="display:none;">
            <div class="sq_pop_tit">
                <em>小提示！</em></div>
            <div class="sq_pop_box">
                <div class="pop_icon"></div>
                <div class="sq_pop_con">
                    <div class="pop_text_con">
                        <p>工具栏可以帮您随时与企业取得联系，如果它妨碍了浏览，您也可以将它收起到网页边缘。</p>
                    </div>
                    <div class="sq_btn_box">
                        <a target="_self" href="javascript:;" class="sq_consult_btn" hideFocus="true" onclick="foldSQ_bar()">收起工具条</a>
                        <a target="_self" href="javascript:;" class="sq_later_btn" hideFocus="true" onclick="closeAll_rightToolbar()">关闭它</a></div>
                </div>
            </div>
        </div>
        <!--小提示 E-->
        <!--标页查看联系方式 B-->
        <div id="sq_part_5" style="display:none;">
            <div class="sq_pop_tit">
                <em>查看联系方式</em>
                <span>
                    <a target="_self" href="javascript:;" onclick="hideSQ()" class="close_sq" title="关闭" hideFocus="true"></a>
                </span>
            </div>
            <div class="sq_pop_box" style="height:167px;">
                <!--没人接听 B-->
                <div id="view_con_1" style="display:none;">
                    <div class="contact_sq_form">
                        <div class="warm_tips">
                            <p>没人接听？别急！</p>
                            <p>资深顾问会尽快帮您联系到[
                                <span>晨阳水漆</span>]</p></div>
                        <!--表单 B-->
                        <div class="sq_form">
                            <dl>
                                <dd>
                                    <input id="txt_name_contact" maxlength="7" type="text" class="txt_input" value="" style="width:80px;margin-right:10px;" />
                                    <input id="txt_phone_contact" maxlength="11" type="text" class="txt_input" value="" />
                                    <label for="Mr_2_contact">
                                        <input name="sex_contact" id="Mr_2_contact" type="radio" checked="checked" />先生</label>
                                    <label for="Ms_2_contact">
                                        <input name="sex_contact" id="Ms_2_contact" type="radio" />女士</label></dd>
                            </dl>
                            <dl>
                                <dd>
                                    <em>什么时间联系您：</em>
                                    <select id="select_contact">
                                        <option value="1">随时都行</option>
                                        <option value="2">上班时间</option>
                                        <option value="3">下班以后</option></select>
                                    <input type="submit" class="msg_submit_btn" value="帮我联系" onclick="sqHelpMeContact()" /></dd>
                            </dl>
                        </div>
                        <!--表单 E--></div>
                </div>
                <!--没人接听 E-->
                <!--查看联系方式 B-->
                <div id="view_con_2">
                    <div class="pop_icon sub2"></div>
                    <div class="sq_pop_con" style="margin-top:20px;">
                        <div class="view_contact">
                            <p>
                                <strong>
                                    <em>晨阳水漆</em>投资加盟热线：</strong></p>
                            <p>
                                <em><?= Yii::$app->params['siteHotline']; ?>转95542</em></p>
                            <p>
                                <em>0312-8593111</em></p>
                            <p style="display:none;">
                                <a target="_self" href="javascript:;" class="sq_gray_btn" onclick="sq_sendToMobile('137829');return false;">
                                    <i>
                                    </i>
                                    <span>免费发送到手机
                                        <font>（需登录）</font></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--查看联系方式 E-->
                <!--发送到手机 B-->
                <div id="view_con_2_1" style="display:none;">
                    <form id="sqfrm" onsubmit="return sq_sendmessageform();" method="post" action="http://person.jmw.com.cn/sendMessage.php">
                        <div class="mobile_msg">
                            <div class="m_m_left">
                                <p>短信内容：</p>
                                <span id="sq_message_infos"></span>
                                <input type="hidden" value="" name="content" id="sq_contents">
                                <input type="hidden" value="" name="mobile" id="sq_mobile"></div>
                            <div class="m_m_right">
                                <p>
                                    <em>接收号码：</em>
                                    <span id="sqshowmobile"></span>
                                </p>
                                <p>
                                    <em>验证码：</em>
                                    <span>
                                        <input type="text" value="" id="sq_checkcode" /></span>
                                </p>
                                <p>
                                    <em></em>
                                    <img height="30px" alt="点击刷新验证码" src="http://person.jmw.com.cn/telcode.php" onclick="changeimg(); return false;" id="sq_mess_img"></p>
                                <p>
                                    <input type="submit" value="发送" class="msg_send_btn" /></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!--发送到手机 E-->
                <!--为我推荐项目 B-->
                <div id="view_con_3" style="display:none;">
                    <div class="contact_sq_form">
                        <div class="warm_tips">
                            <p>想看看其他加盟好项目？</p>
                            <p>资深顾问会为您推荐一些适合您的加盟项目！</p>
                        </div>
                        <!--表单 B-->
                        <div class="sq_form">
                            <dl>
                                <dd>
                                    <input id="txt_name_recommend" maxlength="7" type="text" class="txt_input" value="" style="width:80px;margin-right:10px;" />
                                    <input id="txt_phone_recommend" maxlength="11" type="text" class="txt_input" value="" />
                                    <label for="Mr_2_recommend">
                                        <input name="sex_recommend" id="Mr_2_recommend" type="radio" checked="checked" value="0" />先生</label>
                                    <label for="Ms_2_recommend">
                                        <input name="sex_recommend" id="Ms_2_recommend" type="radio" value="1" />女士</label></dd>
                            </dl>
                            <dl>
                                <dd>
                                    <select style="width:92px;margin-right:10px;" id="Usid_recommend">
                                        <option value="0">选择行业</option>
                                        <option value="156365">服装项目</option>
                                        <option value="152566">餐饮项目</option>
                                        <option value="161552">美容项目</option>
                                        <option value="162353">干洗项目</option>
                                        <option value="201319">精品项目</option>
                                        <option value="201315">饰品项目</option>
                                        <option value="156359">教育项目</option>
                                        <option value="156361">幼儿项目</option>
                                        <option value="201320">零售项目</option>
                                        <option value="156374">家居项目</option>
                                        <option value="162354">环保项目</option>
                                        <option value="201318">五金项目</option>
                                        <option value="156370">珠宝项目</option>
                                        <option value="156373">家纺项目</option>
                                        <option value="201317">汽车项目</option>
                                        <option value="152592" selected="selected">建材项目</option>
                                        <option value="151082">酒店项目</option>
                                        <option value="201316">酒水项目</option>
                                        <option value="6571715">金融项目</option>
                                        <option value="151082">超市项目</option>
                                        <option value="151082">宠物店项目</option>
                                        <option value="151082">数码项目</option>
                                        <option value="151082">家电项目</option>
                                        <option value="151082">食品项目</option>
                                        <option value="151082">健身项目</option>
                                        <option value="151082">娱乐项目</option>
                                        <option value="151082">新行业项目</option>
                                        <option value="151082">服务项目</option></select>
                                    <select id="select_recommend">
                                        <option value="0">您的预期投资额</option>
                                        <option value="一万以下">一万以下</option>
                                        <option value="1到10万">1~10万</option>
                                        <option value="10到20万">10~20万</option>
                                        <option value="20到50万">20~50万</option>
                                        <option value="50到100万">50~100万</option>
                                        <option value="100万以上">100万以上</option></select>
                                    <input type="submit" class="msg_submit_btn" value="为我推荐" onclick="sqhelpMeRecommend()" /></dd>
                            </dl>
                        </div>
                        <!--表单 E--></div>
                </div>
                <!--为我推荐项目 E-->
                <!--提示 B-->
                <div id="sq_alert" style="display:none;">
                    <div class="sq_pop_alert">
                        <p>
                            <strong id="sqsendmessagers">成功啦！</strong></p>
                        <p>
                            <span id="sqsendmessageinfo">资深顾问请您敬候佳音！</span></p>
                    </div>
                </div>
                <!--提示 E--></div>
            <!--灰色操作按钮 B-->
            <div class="sq_gray_btn_box">
                <a target="_self" href="javascript:;" class="sq_gray_btn">
                    <span>没人接听</span></a>
                <a target="_self" href="javascript:;" class="sq_gray_btn current">
                    <span>查看联系方式</span></a>
                <a target="_self" href="javascript:;" class="sq_gray_btn">
                    <span>为我推荐其他好项目</span></a>
            </div>
            <!--灰色操作按钮 E--></div>
        <!--标页查看联系方式 E-->
        <!--该层通用成功提示 B-->
        <div id="sq_alert_all" style="display:none;">
            <div class="sq_pop_tit">
                <em>晨阳水漆品牌资深顾问：</em>
                <span>
                    <a target="_self" href="javascript:;" onclick="hideSQ()" class="close_sq" title="关闭" hideFocus="true"></a>
                </span>
            </div>
            <div class="sq_pop_box">
                <div class="sq_pop_alert">
                    <p>
                        <strong id="sqmessagers">成功啦！</strong></p>
                    <p>
                        <span id="sqmessageinfo">资深顾问请您敬候佳音！</span></p>
                </div>
            </div>
        </div>
        <!--该层通用成功提示 E--></div>
    <script src="http://image1.jmw.com.cn/newSearchPage/js/jmw_shangqiao.js" type="text/javascript"></script>
    <!--在线咨询 屏幕中间 E--></div>
<!-- 右侧悬浮新增加弹框 -->
<!-- 免费通话 -->
<div class="tongHua_mian_zong" style="display:none;">
    <p class="p_title1 clearfix">
        <span class="fr" onclick="click_hide();">
            <img src="http://search.jmw.com.cn/images/close_031.png" alt="" /></span>
    </p>
    <div class="tongHua_mian">
        <input type="hidden" id="sq_sid" value="137829" name="sid">
        <input type="hidden" name="domain_seat" id="domain_seat" value="8-5-" />
        <div class="Pfind_money2 clearfix" style="padding:14px 30px 50px 30px;" id="Pf_money2">
            <p class="p_title2">电话没人接听</p>
            <dl class="clearfix" style="border-bottom:1px solid #e1e1e1; font-size:14px; color:#4e4e4e; padding:16px 0; margin-bottom:16px;">
                <dt class="fl" style="width:42px; height:45px; margin:0 20px 0 3px;">
                    <img src="http://search.jmw.com.cn/images/right_people_03.png" alt="" /></dt>
                <dd class="fl" style="width:250px; font-weight:400;">
                    <p>没人接听?别急!</p>
                    <p>资深顾问会尽快帮您联系到[晨阳水漆]</p>
                </dd>
            </dl>
            <div class="name_box">
                <p>姓&nbsp;名：
                    <input type="text" class="name" value="您的姓名" id="name_contact" name="sname" maxlength="6">性别：
                    <label>
                        <input type="radio" class="a3" value="0" id="Mr_contact" name="contact" checked="checked">男</label>
                    <label>
                        <input type="radio" class="a3" value="1" id="Ms_contact" name="contact">女</label></p>
                <p>手&nbsp;机：
                    <input type="text" class="tel" maxlength="11" value="手机号码" id="phone_contact" name="mobile"></p>
                <p style="line-height:36px;">什么时间联系您:
                    <select id="select" class="select_span22">
                        <option value="1">随时都行</option>
                        <option value="2">上班时间</option>
                        <option value="3">下班以后</option></select>
                </p>
                <p>
                    <input type="button" value="帮我联系" class="btn" onclick="sqHelpMe($(this))" /></p>
            </div>
        </div>
        <div class="Pfind_money2 clearfix" style="display:block;" id="Pf_money1">
            <p class="p_title2">免费通话</p>
            <dl class="clearfix">
                <dt class="fl">
                    <img src="http://search.jmw.com.cn/images/right_phone.png" alt="" style="width:55px; height:55px; margin-top:8px;" /></dt>
                <dd class="fl" style="width:230px;">
                    <p style="color:#333; margin-bottom:6px;font-size:14px; margin-top:9px;">晨阳水漆 投资加盟热线：</p>
                    <p class="map2"><?= Yii::$app->params['siteHotline']; ?>
                        <span>转</span>95542</p></dd>
            </dl>
        </div>
        <div class="Pfind_money2 clearfix" style="padding:14px 30px 50px 30px;" id="Pf_money3">
            <p class="p_title2">为我推荐其他好项目</p>
            <dl class="clearfix" style="border-bottom:1px solid #e1e1e1; font-size:14px; color:#4e4e4e; padding:16px 0; margin-bottom:16px;">
                <dt class="fl" style="width:42px; height:45px; margin:0 20px 0 3px;">
                    <img src="http://search.jmw.com.cn/images/right_people_03.png" alt="" /></dt>
                <dd class="fl" style="width:250px; font-weight:400;">
                    <p>想看看其他加盟好项目</p>
                    <p>资深顾问会为您推荐一些适合您的加盟项目!</p>
                </dd>
            </dl>
            <div class="name_box">
                <p>姓&nbsp;名：
                    <input type="text" class="name" value="您的姓名" id="name_recommend" name="sname" maxlength="6">性别：
                    <label>
                        <input type="radio" class="a3" value="0" id="Mr_recommend" name="recommend" checked="checked">男</label>
                    <label>
                        <input type="radio" class="a3" value="1" id="Ms_recommend" name="recommend">女</label></p>
                <p>手&nbsp;机：
                    <input type="text" class="tel" maxlength="11" value="手机号码" id="phone_recommend" name="mobile"></p>
                <p style="line-height:36px;">
                    <select id="u_recommend" style="width:128px;margin-right:10px;" class="select_span11">
                        <option value="0">选择行业</option>
                        <option value="156365">服装项目</option>
                        <option value="152566">餐饮项目</option>
                        <option value="161552">美容项目</option>
                        <option value="162353">干洗项目</option>
                        <option value="201319">精品项目</option>
                        <option value="201315">饰品项目</option>
                        <option value="156359">教育项目</option>
                        <option value="156361">幼儿项目</option>
                        <option value="201320">零售项目</option>
                        <option value="156374">家居项目</option>
                        <option value="162354">环保项目</option>
                        <option value="201318">五金项目</option>
                        <option value="156370">珠宝项目</option>
                        <option value="156373">家纺项目</option>
                        <option value="201317">汽车项目</option>
                        <option value="152592" selected="selected">建材项目</option>
                        <option value="151082">酒店项目</option>
                        <option value="201316">酒水项目</option>
                        <option value="6571715">金融项目</option>
                        <option value="151082">超市项目</option>
                        <option value="151082">宠物店项目</option>
                        <option value="151082">数码项目</option>
                        <option value="151082">家电项目</option>
                        <option value="151082">食品项目</option>
                        <option value="151082">健身项目</option>
                        <option value="151082">娱乐项目</option>
                        <option value="151082">新行业项目</option>
                        <option value="151082">服务项目</option></select>
                    <select id="recommend" class="select_span">
                        <option value="0">您的预期投资额</option>
                        <option value="一万以下">一万以下</option>
                        <option value="1到10万">1~10万</option>
                        <option value="10到20万">10~20万</option>
                        <option value="20到50万">20~50万</option>
                        <option value="50到100万">50~100万</option>
                        <option value="100万以上">100万以上</option></select>
                </p>
                <p>
                    <input type="button" value="帮我联系" class="btn" onclick="sqhelpRecommend($(this))" /></p>
            </div>
        </div>
        <div class="Pfind_money3 clearfix" style="padding:14px 30px 50px 30px;display:none;">
            <p class="p_title2">为我推荐其他好项目</p>
            <dl class="clearfix" style="border-bottom:1px solid #e1e1e1; font-size:14px; color:#4e4e4e; padding:16px 0; margin-bottom:16px;">
                <dt class="fl" style="width:42px; height:45px; margin:0 20px 0 3px;">
                    <img src="http://search.jmw.com.cn/images/right_people_03.png" alt="" /></dt>
                <dd class="fl" style="width:250px;font-weight:400;">
                    <p id="b_sqmessagers"></p>
                    <p id="b_sqmessageinfo"></p>
                </dd>
            </dl>
        </div>
    </div>
    <ul class="pfind_ul clearfix">
        <li class="li1_mei1">没人接听</li>
        <li class="li1_mei2 orange_selected">查看联系方式</li>
        <li class="li1_mei3">为我推荐其他好项目</li></ul>
</div>
<script type="text/javascript">$(".tongHua_mian_zong .pfind_ul li").click(function() {
        $(this).addClass("orange_selected").siblings(".orange_selected").removeClass("orange_selected");
        $(".tongHua_mian_zong .tongHua_mian .Pfind_money2").eq($(this).index()).show().siblings().hide();
    })</script>
<!-- 浮层 -->
<div class="gray_mask"></div>
<!-- 右侧悬浮 -->
<div class="Pfind_money" id="pFind11" style="display:none;">
    <form action="#" id="js_From" method="post">
        <input type="hidden" id="js_Usid" value="137829" name="sid">
        <input type="hidden" id="js_lasturl" name="js_lasturl">
        <input type="hidden" id="js_fromurl" name="js_fromurl">
        <input type="hidden" value="" id="js_origin" name="js_origin">
        <p class="p_title1 clearfix">
            <span class="fr" onclick="hide_pFind11()">
                <img src="http://search.jmw.com.cn/images/close_031.png" alt="" /></span>
        </p>
        <div class="Pfind_money2">
            <p class="p_title2">在线咨询</p>
            <p class="p_title4 clearfix">
                <span>您的疑问</span>
                <span class="fr hover_SJ" onmouseout="form_zx_secMsg_hide()" onmouseover="form_zx_secMsg_show()">别人都问了什么?</span></p>
            <!--<style type="text/css"> 
            .secMsg { width: 360px; position: absolute; z-index: 1008; background: #fff; left: 238px; top: 113px; }
            .secMsg .msgIframe { width: 360px; height: 228px; position: absolute; left: 0; top: 0; z-index: -1; opacity: 0;}
            .sq_form .secMsg p { height: 35px; line-height: 35px; padding: 0 10px; margin: 0; overflow: hidden; color: #fff; }
            .secMsg p strong { float: left;}
            .secMsg p a { float: right; width: 13px; height: 13px; margin-top: 7px; outline: none;}
            .sq_form .secMsg ul { padding:5px 10px; }
            .secMsg ul li { height: 25px; line-height: 25px; padding-left: 11px; overflow: hidden; white-space: nowrap; border-bottom: 1px dashed #ccc; background: url(../images/sec_black.jpg) no-repeat 3px center;}
            </style>--->
            <div class="secMsg" id="form_zx_secMsg" style="display: none; left:238px; top:109px;" onmouseout="form_zx_secMsg_hide()" onmouseover="form_zx_secMsg_show()">
                <iframe class="msgIframe" frameborder="0"></iframe>
                <p style="background:#e93c00;">
                    <strong>您可以根据意向选择下列[快捷留言]</strong>
                    <a style="margin-top:7px;" target="_self" href="javascript:;" onclick="secMsg_hide()">
                        <img src="http://image1.jmw.com.cn/search/images/sec_015.gif"></a>
                </p>
                <ul style="border:1px solid #e93c00;">
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">晨阳水漆项目很好，请尽快联系我详谈。</a></li>
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">请问晨阳水漆在我所在的地区招商吗？</a></li>
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">我已留下了邮箱，请将晨阳水漆详细资料发给我。</a></li>
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">我想了解晨阳水漆代理的流程，请与我联系。</a></li>
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">作为晨阳水漆的代理商能得到哪些支持？</a></li>
                    <li>
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">请问代理晨阳水漆首次进货最低达到多少？</a></li>
                    <li class="noLine">
                        <a target="_self" href="javascript:;" onclick="onClickPCFrom($(this))">我想代理晨阳水漆，请尽快电话联系我。</a></li>
                </ul>
            </div>
            <textarea onkeyup="keyUp()" name="content" id="textarea" cols="30" rows="10">请输入您的疑问</textarea>
            <div class="name_box">
                <p>姓&nbsp;名：
                    <input type="text" class="name" value="您的姓名" id="js_name" name="sname" maxlength="6">性别：
                    <label>
                        <input type="radio" class="a3" value="0" id="sexm" name="sex" checked="checked">男</label>
                    <label>
                        <input type="radio" class="a3" value="1" id="sexfm" name="sex">女</label></p>
                <p>手&nbsp;机：
                    <input type="text" class="tel" maxlength="11" value="手机号码" id="js_tel" name="mobile"></p>
                <p>
                    <input type="button" value="快联系我" class="btn" onclick="sqOnClick($(this));return false" /></p>
            </div>
        </div>
    </form>
</div>
<!-- 加盟小顾问 start -->
<style type="text/css">.Pfind_money2 dl{ padding:28px 0 48px; font-size:16px; font-weight:bold; color:#e93c00; font-style:italic; } .Pfind_money2 dl dt{ margin:6px 18px 0 25px; width:55px; height:55px; } .Pfind_money2 .pfind_ul{ position:absolute; bottom:2px; left:1px; } .Pfind_money2 .pfind_ul li{ height:40px; color:#fff; line-height:40px; text-align:center; float:left; background:#c5c5c5; cursor:pointer; } .Pfind_money2 .pfind_ul li.orange_selected{ background:#f67621;} .Pfind_money2 .pfind_ul .li1_mei1{ width:109px; margin-left:1px; margin-right:1px; } .Pfind_money2 .pfind_ul .li1_mei2{ width:108px; margin-right:1px; } .Pfind_money2 .pfind_ul .li1_mei3{ width:156px; }</style>
<div class="Pfind_money" id="click_GU1" style="display:none; ">
    <p class="p_title1 clearfix">
        <span class="fr" onclick="GU1_hide();">
            <img src="http://search.jmw.com.cn/images/close_031.png" alt="" /></span>
    </p>
    <div class="Pfind_money2">
        <p class="p_title2">加盟小顾问</p>
        <dl class="clearfix">
            <dt class="fl">
                <img src="http://search.jmw.com.cn/images/right_dui2.png" alt="" /></dt>
            <dd class="fl">
                <p style="color:#e93c00; margin-bottom:10px; font-weight:bold; font-size:25px; " id="GU_text">成功啦！</p>
                <p style="color:#333; font-size:16px;" id="GU_des">加盟小顾问请您静候佳音！</p></dd>
        </dl>
        <ul class="pfind_ul clearfix">
            <li class="li1_mei1">没人接听</li>
            <li class="li1_mei2">查看联系方式</li>
            <li class="li1_mei3">为我推荐其他好项目</li></ul>
    </div>
</div>
<!-- 加盟小顾问 end -->
