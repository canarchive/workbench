    <div class="tenth" id="tenth">
        <div class="tenth_title clearfix">
            <span class="clear_h2">我要咨询</span>
            <div class="tenth_phone">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/b0a29-2052.png" alt="" />
                <span>全国免费电话：</span>
                <!--<strong style="display:inline-block; vertical-align:middle; color:#fff; font-size:23px;">4000-500-555转95542</strong>-->
                <strong style="display:inline-block; vertical-align:middle; color:#fff; font-size:23px;">4000-500-555</strong></div>
        </div>
        <div class="J-messages">
            <form action="" method="post">
                <input type="hidden" name="lasturl" id="lasturl" />
                <input type="hidden" name="fromurl" id="fromurl" />
                <input type="hidden" name="project_message_targetId" id="project_message_targetId" value="137829" />
                <input type="hidden" name="project_message_origin" id="project_message_origin" value="7" />
                <div class="J-say">
                    <div class="say_t">
                        <div class="say_tL">
                            <div class="teae">
                                <textarea id="areaCont" name="content" onblur="checkcontent()"></textarea>
                                <div class="J-quickly">
                                    <p>您可以根据意向选择下列
                                        <span>[
                                            <u>快捷留言</u>]</span>
                                    </p>
                                    <ul>
                                        <li>
                                            <a href="javascript:;" title="晨阳水漆项目很好，请尽快联系我详谈。">晨阳水漆项目很好，请尽快联系我详谈。</a></li>
                                        <li>
                                            <a href="javascript:;" title="请问我所在的地区有晨阳水漆加盟商了吗？">请问我所在的地区有晨阳水漆加盟商了吗？</a></li>
                                        <li>
                                            <a href="javascript:;" title="留下邮箱，请将晨阳水漆详细资料邮件给我。">留下邮箱，请将晨阳水漆详细资料邮件给我。</a></li>
                                        <li>
                                            <a href="javascript:;" title="想了解晨阳水漆的加盟流程，请与我联系！">想了解晨阳水漆的加盟流程，请与我联系！</a></li>
                                        <li>
                                            <a href="javascript:;" title="做为晨阳水漆的代理加盟商能得到哪些支持？">做为晨阳水漆的代理加盟商能得到哪些支持？</a></li>
                                        <li>
                                            <a href="javascript:;" title="请问投资晨阳水漆所需要的费用有哪些？">请问投资晨阳水漆所需要的费用有哪些？</a></li>
                                        <li>
                                            <a href="javascript:;" title="我想加盟晨阳水漆，请电话联系我。">我想加盟晨阳水漆，请电话联系我。</a></li>
                                        <li>
                                            <a href="javascript:;" title="晨阳水漆加盟，有什么优惠吗？">晨阳水漆加盟，有什么优惠吗？</a></li>
                                    </ul>
                                    <span class="quick_bg"></span>
                                </div>
                            </div>
                            <div class="clearfix J-select">
                                <div class="fl J-address_w">地 区</div>
                                <div class="fl location-1 J-local">
                                    <span target="_self" href="javascript:;" id="sid1s_show_dq_1" value="省/市">省/市</span>
                                    <div class="ul_list1" id="ul_list1">
                                        <ul id="list_1" style="max-height: 265px; overflow: auto;position:relative;"></ul>
                                    </div>
                                </div>
                                <script>var s0 = ["sid1s_show_dq_1", "sid1s_show_dq_2", "sid1s_show_dq_3"];
                                    var opt0 = ["省/市", "地/州", "区/县"];
                                    change(0, 1);
                                    bindSelectBG();

                                    $(function() {
                                        $("#list_1 li").click(function() {
                                            setDQhtml($(this), 1);
                                            $("#dqid10").val($(this).attr('dqid_value'));

                                            $("#" + $(this).parent("ul").attr("id") + " li").removeClass('selected');
                                            var dqLevel = 0;
                                            $(this).addClass('selected');
                                            var val = $(this).attr('dqid_value');

                                            $("#sid1s_show_dq_1").html(val);
                                            $("#" + $(this).parent("ul").attr("id")).hide();
                                            var id = dqLevel + "_" + getDQid(val, dqLevel);
                                            change(id, 2);
                                            bindSelectBG();
                                            bindListUl(2, $(this).attr('position'));

                                        });

                                        $("#sid1s_show_dq_1").click(function() {
                                            $("#ul_list1").show();
                                            $("#list_1").show();
                                            return false;
                                        });
                                        $("#sid1s_show_dq_2").click(function() {
                                            $("#ul_list2").show();
                                            $("#list_2").show();
                                            return false;
                                        });
                                        $("#sid1s_show_dq_3").click(function() {
                                            $("#ul_list3").show();
                                            $("#list_3").show();
                                            return false;
                                        });
                                    });
                                    function getDQid(dqname, dqLevel) {
                                        return dsy.getId(dqname, dqLevel);
                                    }
                                    function setDQhtml(obj, u) {
                                        if (u != 1) {
                                            $('#sid1s_show_dq_' + u).html(obj.html());
                                            if (u == 2) {
                                                var id = obj.attr('position');
                                                change(id, 3);
                                                $('#sid1s_show_dq_' + u).html(obj.html());
                                                bindSelectBG();
                                                bindListUl(3, id);
                                            }
                                        }
                                    }

                                    function bindSelectBG() {
                                        $("#ul_list1 li,#ul_list2 li,#ul_list3 li").hover(function() {
                                            $(this).css('background', '#316ac5');
                                            $(this).css('color', '#ffffff');
                                        },
                                        function() {
                                            $(this).css('background', '#ffffff');
                                            $(this).css('color', '#000000');
                                        });
                                    }
                                    function bindListUl(level, dq_key) {
                                        $("#list_" + level + " li").click(function() {
                                            setDQhtml($(this), level);
                                            $("#dqid" + level + "0").val($(this).attr('dqid_value'));

                                            $("#" + $(this).parent("ul").attr("id") + " li").removeClass('selected');
                                            var dqLevel = dq_key; //list_1 写死 0 (list_2 : 1| list_3 : 2)
                                            $(this).addClass('selected');
                                            var val = $(this).attr('dqid_value');

                                            $("#sid1s_show_dq_" + level).html(val);
                                            $("#" + $(this).parent("ul").attr("id")).hide();
                                            var id = dqLevel + "_" + getDQid(val, dqLevel);
                                        });
                                    }</script>
                                <div class="fl location-2 J-local">
                                    <span target="_self" href="javascript:;" id="sid1s_show_dq_2">地/州</span>
                                    <div class="ul_list2" id="ul_list2">
                                        <ul id="list_2" style="max-height: 265px; overflow: auto; position:relative;display:none;"></ul>
                                    </div>
                                </div>
                                <div class="fl location-3 J-local">
                                    <span target="_self" href="javascript:;" id="sid1s_show_dq_3">区/县</span>
                                    <div class="ul_list3" id="ul_list3">
                                        <ul id="list_3" style="max-height: 265px; overflow: auto;position:relative; display:none;"></ul>
                                    </div>
                                </div>
                                <span id="xiaspan" class=""></span>
                                <input type="hidden" value="" name="dqid10" id="dqid10" />
                                <!-- 省级 -->
                                <input type="hidden" value="" name="dqid20" id="dqid20" />
                                <!-- 市级 -->
                                <input type="hidden" value="" name="dqid30" id="dqid30" />
                                <!-- 区级 -->
                                <script>$(function() {
                                        $("#sid1s_show_dq_3").click(function() {
                                            var dqid30_value = $("#dqid30").val();
                                            if (dqid30_value != '区/县') {
                                                $("#xiaspan").attr('class', "correct");
                                            }
                                        });
                                    });</script>
                                <span class="J-input1">(请输入您的地区)</span></div>
                            <div class="J-address clearfix">
                                <div class="J-address_w">姓 名</div>
                                <input type="text" id="sname" name="sname" onblur="checksname()" style="width:57px;" value="" />
                                <span class="chk3" style="float:left; font-size:15px; color:#000; line-height:32px; padding-left:5px; padding-right:11px;">性别</span>
                                <input type="radio" class="chk4" name="chk" style="margin-top:7px;" value="0" checked="checked" />
                                <label style="float:left; font-size:15px; color:#000; line-height:32px; padding:0 14px 0 5px;">男</label>
                                <input type="radio" class="chk4" name="chk" style="margin-top:7px;" value="1" />
                                <label style="float:left; font-size:15px; color:#000; line-height:32px; padding:0 14px 0 5px;">女</label>
                                <span id="spanname"></span>
                                <span class="J-input2">(请输入您的姓名)</span></div>
                            <div class="J-address clearfix">
                                <div class="J-address_w">手 机</div>
                                <input type="text" name="mobile" id="mobile" onblur="checkmobile()" maxlength="11" style="width: 197px;" value="" />
                                <span id="spanmobile"></span>
                                <span class="J-input3">(请输入您的手机)</span></div>
                            <div class="say_b">
                                <input type="button" value="提交咨询" id='hideFootSubmit' onclick="return projectFootMessage();" /></div>
                            <style type="text/css">.tongShi{padding:17px 0 20px 12px;} .tongShi input{margin:2px 12px 0 0;} .tongShi p a{color:#e43c01;font-weight:bold;}</style>
                            <div class="tongShi clearfix">
                                <input type="hidden" name="zhanhui" value="0" />
                                <!--<input type="checkbox" name="zhanhui" class="fl" value="1" checked/>
                                <p class="fl">已有
                                    <i style="color:#e43c01;font-weight:bold;"></i>人想去
                                    <a href="http://zch.jmw.com.cn" target="_blank">
                                        <a href="http://zch.jmw.com.cn" target="_blank">第九届中国品牌加盟投资博览会-北京国家会议中心</a>现场看
                                        <span style="color: #E43C01;font-weight: bold;">晨阳水漆</span>创业项目(
                                        <a href="http://zch.jmw.com.cn" target="_blank">我也想去</a>)</p>--></div></div>
                    </div>
                </div>
            </form>
            <!--<div class="J-say-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/86bea-2932.jpg" alt="" /></div>-->
            <style>.J-say-img .three_pic{padding-bottom:50px;margin-top:10px;} .J-say-img .three_pic a{display:block;float:left;margin-right:10px;width:200px;height:62px;} .J-say-img .three_pic img{float:left;width:100%;height:100%;}</style>
            <div class="J-say-img">
                <div class="clearfix" style="height:40px;margin-right:6px;color:#717171;">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2498b-4213.jpg" alt="" class="fl" />
                    <!--<p class="fr" style="line-height:30px;">已有<i style="color:#e43c01;font-weight:bold;">位</i>创业者线上发送意向：在<i style="color:#e43c01;font-weight:bold;position:relative">北京<span style="font-size:25px;position:absolute;top:-13px;">.</span>&nbsp;&nbsp;国家会议中心</i>现场去看<i style="color:#e43c01;font-weight:bold;">投资博览会</i></p>--></div>
                <div class="three_pic">
                    <a href="http://search.jmw.com.cn/cybd.php" target="_blank">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/8cffc-5192.png" alt="" /></a>
                    <a href="http://zch.jmw.com.cn/" target="_blank" style="width:275px;">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/957e2-7586.gif" alt="" /></a>
                    <a href="javascript:;" onclick="waitTime();">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/171fd-8106.png" alt="" /></a>
                </div>
            </div>
            <style>.jingQingQidai{display: none;width:295px;height:116px;border-radius:6px;background:rgba(0,0,0,0.27);position:fixed;top:50%;left:50%;margin-left:-145px;margin-top:-50px;z-index:8000;} .jingQing{width:280px;height:100px;background:#fff;margin:8px auto;} .jingQing p{height:24px;} .jingQing p img{margin:6px 6px 0 0;cursor:pointer;} .jingQing dl{display:block;text-align:center;font-size:24px;font-weight:bold;color:#e43c01;} .jingQing dl img{margin:4px auto;}</style>
            <div class="jingQingQidai">
                <div class="jingQing">
                    <p onclick="waitTimeClose()">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/661b8-5792.png" alt="" class="fr" /></p>
                    <dl>
                        <dt>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/platj/img/2d3f9-1179.png" alt="" /></dt>
                        <dd>敬请期待!</dd></dl>
                </div>
            </div>
            <script>function waitTime() {
                    $('.jingQingQidai').show();
                    $('#black_ceng').show();
                }
                function waitTimeClose() {
                    $('.jingQingQidai').hide();
                    $('#black_ceng').hide();
                }</script>
        </div>
    </div>
    <script type="text/javascript">$(function() {
            $(".J-quickly ul li a").click(function() {
                var oldcontent = $(this).html();
                newcontent = oldcontent.replace('该项目', "晨阳水漆");
                $("#areaCont").val(newcontent);
            });
        });</script>
		<style type="text/css">.tenth{ margin-top:10px;} .tenth .tenth_title{ background:#e43c01; height:50px; overflow:hidden;} .tenth .tenth_title h2{ float:left; font-size:20px; color:#fff; padding-left:20px; line-height:50px;} .tenth_phone{ float: right; margin-top: 13px; padding-right: 30px;} .tenth_phone img{ display: inline-block; vertical-align: middle;} .tenth_phone span{ display: inline-block; vertical-align: middle; font-size: 18px; color: #fff; padding-left: 4px;} .tenth .J-messages{ border:1px solid #cfcfcf; border-top:none; padding: 20px 9px 9px;} .tenth .J-say{ background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/0def7-1244.gif) no-repeat; width:720px; padding-top: 10px; border-bottom: 1px solid #e9e9e9;} .say_t .say_tL{ width:700px; padding-left:19px;} .say_t .say_tL .teae{ position:relative; *z-index:100;} .say_t .say_tL .teae textarea{ width:364px; height:110px; border:none; border:1px solid #bebebe; background:#fff; color:#333; font-size:12px; font-family:"微软雅黑"; line-height:20px; padding:5px;} .J-quickly{ position:absolute; left:386px; top:0px; z-index:100; width:297px;} .J-quickly p{ background:#ea6d41; height:41px; line-height:41px; font-size:14px; color:#fff; padding-left:18px; } .J-quickly p span{ color:#ffff00; padding-left:7px;} .J-quickly ul{ border:1px solid #ea6d41; background:#fff; border-top:none; padding: 18px 0; width:295px;} .J-quickly ul li{ height:30px; line-height:30px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/6a261-2612.png) no-repeat 14px 14px; text-indent:25px;overflow:hidden; vertical-align: bottom; width:295px;} .J-quickly ul li a{ color:#666; display:block; width:500px;} .J-quickly ul li a:hover{ background:#ffd9cb url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/6a261-2612.png) no-repeat 14px 14px; color:#e43c01;width:295px;} .J-quickly .quick_bg{ background: url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/b06bf-9063.gif) no-repeat; width: 7px; height: 14px; position: absolute; top: 14px; left: -7px; z-index: 10;} .J-select{ margin-top:14px;} .location-1{ width:63px; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-1 span{ display:block; width:63px; height:30px; font-size:12px; color:#333; text-indent:6px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 47px center; cursor: pointer;} .location-1 .ul_list1{ width:63px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-1 .ul_list1 ul li{ line-height:26px; padding-left:6px;} .location-1 .ul_list1 ul li a{ color:#999;} .location-2{ width:60px; margin-left:5px; display:inline; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-2 span{ display:block; width:60px; height:30px; font-size:12px; color:#333; text-indent:4px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 43px center; cursor: pointer;} .location-2 .ul_list2{ width:60px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-2 .ul_list2 ul li{ line-height:26px; padding-left:4px;} .location-2 .ul_list2 ul li a{ color:#999;} .location-3{ width:66px; margin-left:5px; display:inline; background:#fff; border-radius:0; border:1px solid #bebebe; height:30px; line-height:30px; position:relative; z-index:99;} .location-3 span{ display:block; width:66px; height:30px; font-size:12px; color:#333; text-indent:5px; background:url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/48a61-8765.png) no-repeat 45px center; cursor: pointer;} .location-3 .ul_list3{ width:66px; position:absolute; left:-1px; top:29px; z-index:100; border:1px solid #bebebe; border-top: none; background:#fff; display: none;} .location-3 .ul_list3 ul li{ line-height:26px; padding-left:5px;} .location-3 .ul_list3 ul li a{ color:#999;} .J-input1{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-input2{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-input3{ float: left; color: #e10000; line-height: 32px; padding-left: 11px;} .J-address{ margin-top:14px;} .J-address_w{ float:left; padding-right: 12px; color:#000; font-size:15px; line-height:32px;} .J-address input{ float:left; /*width:197px;*/ height:18px; line-height:18px; padding: 6px 3px; overflow:hidden; border:1px solid #bebebe; background:#fff; color:#333;} .J-say .say_b input{ background: url(http://60.205.145.0/filesys/spider/pages/asset/platj/img/8ce6e-7742.png) no-repeat; width:204px; height:42px; line-height:38px; overflow:hidden; border:none; font-size:18px; color:#fff; text-align:center; font-family:"微软雅黑"; margin:15px 0 0 46px; cursor:pointer;} .J-say-img{padding: 25px 0px 22px 6px;}</style>
