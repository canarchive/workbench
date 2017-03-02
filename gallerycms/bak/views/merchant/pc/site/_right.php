<!---右-->
<div class="fr cont_right" style='margin-top:10px'>
    <style>.huiyuan_year { background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/a1254-2148.gif") no-repeat scroll 0 0 rgba(0, 0, 0, 0); height: 42px; margin: 5px 0 5px 15px; overflow: hidden; padding: 1px 0 0 148px; width: 58px; } .huiyuan_year span { color: #f40303; display: block; font-family: "微软雅黑",黑体; font-size: 18px; font-weight: normal; height: 30px; line-height: 30px; text-align: center; width: 27px; }</style>
    <div class="people fr">
        <div>
            <span showYears="showYears" showYearId="137829"></span>
        </div>
        <script type="text/javascript">$(function() {
                var show_project_id = $('[showYears="showYears"]').attr('showYearId');
                $.ajax({
                    url: 'http://protectedapi.jmw.com.cn/search/showAuthenticationYear.php',
                    type: 'get',
                    data: 'id=' + show_project_id,
                    dataType: 'jsonp',
                    jsonp: "jsonpcallback",
                    success: function(data) {
                        $.each(eval(data),
                        function(k, v) {
                            //if(show_project_id==v.id && v.showYear != 0)
                            if (show_project_id == v.id) {
                                if (v.showYear == 0) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/55e5a-6218.jpg' />");
                                } else if (v.showYear == 1) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b2faf-8341.jpg' />");
                                } else if (v.showYear == 2) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/bd621-1490.jpg' />");
                                } else if (v.showYear == 3) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/f336a-2010.jpg' />");
                                } else if (v.showYear == 4) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/881e5-8521.jpg' />");
                                } else if (v.showYear == 5) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b73e2-6130.jpg' />");
                                } else if (v.showYear == 6) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/ba5d1-5028.jpg' />");
                                } else if (v.showYear == 7) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/30fb8-6049.jpg' />");
                                } else if (v.showYear == 8) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/838d7-6575.jpg' />");
                                } else if (v.showYear == 9) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6d3ac-7295.jpg' />");
                                } else if (v.showYear == 10) {
                                    $('[showYears="showYears"]').html("<img src='<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/830b9-8018.jpg' />");
                                }
                            }
                        });
                    }
                });
            });</script>
        <div class="people_t clearfix">
            <a class="fl" href="http://www.jmw.com.cn/xm137829/">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/f3dc5-2512.jpg" width="113" height="87" alt="" title="晨阳水漆加盟" /></a>
            <dl class="fr">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d794d-5639.png" alt="" /></dt>
                <dd class="dd1">
                    <a href="http://www.jmw.com.cn/xm137829/zizhiheshi/" title="晨阳水漆加盟查看档案">查看档案</a></dd>
                <dd class="dd2">
                    <a href="javascript:;" title="晨阳水漆加盟投诉举报">投诉举报</a></dd>
            </dl>
        </div>
        <div class="people_m clearfix">
            <ul class="fl mouthL">
                <li>
                    <span>本月访问：</span>
                    <span id="currentMonthPv" style="color:red;"></span>
                </li>
                <li>
                    <span>本月排名：</span>
                    <span id="rank" style="color:red;"></span>
                </li>
            </ul>
            <ul class="fl mouthR">
                <li>
                    <span>
                        <i>总访问</i>：</span>
                    <span id="totalPv" style="color:red;"></span>
                </li>
                <li>
                    <span>综合指数：</span>
                    <span id="integral" style="color:red;"></span>
                </li>
            </ul>
            <script>$.ajax({
                    url: "http://protectedapi.jmw.com.cn/newSearch/getProjectIndexCheckNum.php?pid=137829",
                    type: "get",
                    dataType: "jsonp",
                    jsonp: 'jsoncallback',
                    success: function(html) {
                        $('#currentMonthPv').html(html.currentMonthPv);
                        $('#rank').html(html.rank);
                        $('#totalPv').html(html.totalPv);
                        $('#integral').html(html.integral);
                    }
                })</script>
        </div>
    </div>
    <div class='chick_box' style="border-top:2px solid rgb(227, 227, 227);">
        <div class="chick clearfix">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/8fc7b-4017.jpg" width="45" height="45" alt="" />
            <ul>
                <li>核实专员：
                    <span>吴彤彤</span></li>
                <li>核实日期：
                    <span>2016-11-11</span></li>
            </ul>
        </div>
        <style type="text/css">.chick_title{ background:#fff; } .chick_box .chick_cont .chick_title span.xm{ background:#fff; color:#333; font-size:14px; } .chick_box .chick_cont .chick_title span.zt{ background:#fff; color:#333; font-size:14px; }</style>
        <div class="chick_cont">
            <div class="chick_title clearfix">
                <span class="fl xm">审核项目</span>
                <span class="fr zt">审核状态</span></div>
            <ul>
                <li class="clearfix">
                    <span>加盟热线</span>
                    <i>
                    </i>
                </li>
                <li class="clearfix">
                    <span>公司地址</span>
                    <i>
                    </i>
                </li>
                <li class="clearfix">
                    <span>直营店数量</span>
                    <i>
                    </i>
                </li>
                <li class="clearfix">
                    <span>加盟/代理店数量</span>
                    <i>
                    </i>
                </li>
            </ul>
        </div>
    </div>
    <!-- 加盟创业好帮手style -->
    <!-- 加盟创业好帮手 -->
    <div class="p_helpHand">
        <p class="p_p_title">
            <span>加盟创业好帮手</span></p>
        <div class="helpHand_two clearfix">
            <dl onclick="check_zhao('137829','23-1','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/ab5f8-7528.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="找资金">找资金</a></dd>
            </dl>
            <dl onclick="check_zhao('137829','23-2','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/bab56-1445.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="找场地">找场地</a></dd>
            </dl>
            <dl onclick="check_zhao('137829','23-3','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/aa82a-3267.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="找装修">找装修</a></dd>
            </dl>
            <dl onclick="check_zhao('137829','23-4','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/887ed-2968.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="找优惠">找优惠</a></dd>
            </dl>
            <dl onclick="check_zhao('137829','23-5','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/54bad-2048.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="合伙开店">合伙开店</a></dd>
            </dl>
            <dl onclick="check_zhao('137829','23-6','晨阳水漆')" class="dl1">
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/19b7b-1058.png" alt="" /></dt>
                <dd>
                    <a href="javaScript:;" title="找委托">找委托</a></dd>
            </dl>
        </div>
    </div>
    <!-- 中国加盟网创业指导 -->
    <div class="p_helpHand" style="background:#f7f6f6;">
        <p class="p_p_title">
            <span>中国加盟网创业指导</span></p>
        <dl class="dl2 clearfix" onclick="NewshowSQ(2,'16-24-1')">
            <dt class="fl">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/ddde7-5526.png" alt="" /></dt>
            <dd class="fl">
                <p class="p_teacher">创业顾问-苏老师</p>
                <p class="p_line">
                    <i class="fl"></i>在线咨询</p>
            </dd>
        </dl>
        <dl class="dl2 clearfix" onclick="NewshowSQ(2,'16-24-2')">
            <dt class="fl">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/71c04-1671.png" alt="" /></dt>
            <dd class="fl">
                <p class="p_teacher">创业顾问-杨老师</p>
                <p class="p_line">
                    <i class="fl"></i>在线咨询</p>
            </dd>
        </dl>
        <dl class="dl2 clearfix" style="border-bottom:none;" onclick="NewshowSQ(2,'16-24-3')">
            <dt class="fl">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5a6a8-7430.png" alt="" /></dt>
            <dd class="fl">
                <p class="p_teacher">创业顾问-秦老师</p>
                <p class="p_line">
                    <i class="fl"></i>在线咨询</p>
            </dd>
        </dl>
    </div>
    <!-- 网友点评 -->
    <div class="p_dianPing">
        <p class="p_p_title clearfix">
            <span class="fl">网友点评</span>
            <a href="http://www.jmw.com.cn/xm137829/wangyoudianping/" class="fr">更多(17)>></a></p>
        <ul class="dianPing_ul">
            <li class="li1">
                <font class="p_red">
                    <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                <font class="p_red"></font></li>
            <li class="li2 clearfix">
                <span class="fl span1">
                    <image src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1a0eb-2516.png"></span>
                <span class="fr span2">2015 - 10 - 30</span></li>
            <li class="li3">晨阳水漆后，觉得这个品牌挺不错的，整体感觉不错，很想加盟这个...</li></ul>
        <ul class="dianPing_ul">
            <li class="li1">
                <font class="p_red">
                    <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                <font class="p_red"></font></li>
            <li class="li2 clearfix">
                <span class="fl span1">
                    <image src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1a0eb-2516.png"></span>
                <span class="fr span2">2015 - 10 - 29</span></li>
            <li class="li3">晨阳水漆了解后觉得品牌整体还不错，打算加盟这个品牌</li></ul>
        <ul class="dianPing_ul">
            <li class="li1">
                <font class="p_red">
                    <a style="color:red;" href="http://www.jmw.com.cn/xm137829">晨阳水漆</a></font>意向加盟者
                <font class="p_red"></font></li>
            <li class="li2 clearfix">
                <span class="fl span1">
                    <image src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1a0eb-2516.png"></span>
                <span class="fr span2">2015 - 09 - 28</span></li>
            <li class="li3">觉得晨阳水漆有一定的品质，加盟政策了解了一下，迟迟力度还行，...</li></ul>
    </div>
    <!-- 网友点评 end -->
    <style>span[type='text']{height: 28px; margin: 5px 0;padding: 5px;width: 30px;background-color: transparent;_background-color: transparent;}</style>
    <!-- <div class="advertisement">
    <!---->
    <!-- <a href="http://zch.jmw.com.cn/d8/" target="blank" style="position:relative;display:block;width:230px;height:90px;border:none;text-decoration:none;_text-decoration:none;">
    <!--<span type="text" id="time_d" style="position:absolute;_position:absolute;top:64px;left:18px;_top:64px;_left:22px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
    <span type="text" id="time_h"style="position:absolute;_position:absolute;top:64px;left:66px;_top:64px;_left:70px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
    <span type="text" id="time_m" style="position:absolute;_position:absolute;top:64px;left:124px;_top:64px;_left:129px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>
    <span type="text" id="time_s"style="position:absolute;_position:absolute;top:64px;left:170px;_top:64px;_left:176px; border:none;text-decoration:none;_text-decoration:none;font-weight:bold;color:#EDDE00"></span>-->
    <!--<img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/fab84-3418.jpg" style="width:230px;height:90px;border:none;"></a>
    </div>
    <!--<script>
    //展会计时器
    $(function(){ 
    show_time();
    }); 
    function show_time(){ 
    var time_start = new Date().getTime(); //设定当前时间
    var time_end =  new Date("2015/12/19 00:00:00").getTime(); //设定目标时间
    // 计算时间差 
    var time_distance = time_end - time_start; 
    // 天
    var int_day = Math.floor(time_distance/86400000) 
    time_distance -= int_day * 86400000; 
    // 时
    var int_hour = Math.floor(time_distance/3600000) 
    time_distance -= int_hour * 3600000; 
    // 分
    var int_minute = Math.floor(time_distance/60000) 
    time_distance -= int_minute * 60000; 
    // 秒 
    var int_second = Math.floor(time_distance/1000) 
    // 时分秒为单数时、前面加零 
    if(int_day < 10){ 
    int_day = "0" + int_day; 
    } 
    if(int_hour < 10){ 
    int_hour = "0" + int_hour; 
    } 
    if(int_minute < 10){ 
    int_minute = "0" + int_minute; 
    } 
    if(int_second < 10){
    int_second = "0" + int_second; 
    } 
    // 显示时间 
    $("#time_d").html(int_day); 
    $("#time_h").html(int_hour); 
    $("#time_m").html(int_minute); 
    $("#time_s").html(int_second); 
    // 设置定时器
    setTimeout("show_time()",1000); 
    }
    </script>-->
    <div class="recommend">
        <div class="recommend_title">
            <span>加盟品牌推荐</span></div>
        <div class="recommend_cont">
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/683ed-3544.css" />
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm6649630/" target="_blank">
                            <img title="东时便当加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/7e954-2138.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('6649630','东时便当','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6649630','东时便当','','7','1'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm6649630/" target="_blank" title="东时便当加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="东时便当加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">东时便当</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="东时便当3万—10万加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">3万—10万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="东时便当加盟" href="http://www.jmw.com.cn/xm6649630/" target="_blank">全球便当料理工坊。</a></li>
                    </ul>
                </div>
            </div>
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm6673056/" target="_blank">
                            <img title="学习星加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/d7faf-5904.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('项目id号6673056','学习星','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('项目id号6673056','学习星','','7','2'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm6673056/" target="_blank" title="学习星加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="学习星加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">学习星</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="学习星20万-50万加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">20万-50万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="学习星加盟" href="http://www.jmw.com.cn/xm6673056/" target="_blank">朝阳教育教具行业。</a></li>
                    </ul>
                </div>
            </div>
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm86635/" target="_blank">
                            <img title="爱贝国际少儿英语加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/85e42-8962.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('86635','爱贝国际少儿英语','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('86635','爱贝国际少儿英语','','7','3'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm86635/" target="_blank" title="爱贝国际少儿英语加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="爱贝国际少儿英语加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">爱贝国际少儿英语</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="爱贝国际少儿英语100万-200万加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">100万-200万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="爱贝国际少儿英语加盟" href="http://www.jmw.com.cn/xm86635/" target="_blank">高端幼少儿英语知名品牌。</a></li>
                    </ul>
                </div>
            </div>
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm6572151/" target="_blank">
                            <img title="爱代驾加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/9fda6-9920.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('6572151','爱代驾','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6572151','爱代驾','','7','4'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm6572151/" target="_blank" title="爱代驾加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="爱代驾加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">爱代驾</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="爱代驾20万—50万加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">20万—50万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="爱代驾加盟" href="http://www.jmw.com.cn/xm6572151/" target="_blank">专业代驾服务平台，酒后代驾、公司代驾服务。</a></li>
                    </ul>
                </div>
            </div>
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm6578773/" target="_blank">
                            <img title="kiumi韩式美食屋加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b87a7-1869.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('6578773','kiumi韩式美食屋','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('6578773','kiumi韩式美食屋','','7','5'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm6578773/" target="_blank" title="kiumi韩式美食屋加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="kiumi韩式美食屋加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">kiumi韩式美食屋</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="kiumi韩式美食屋5万—10万加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">5万—10万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="kiumi韩式美食屋加盟" href="http://www.jmw.com.cn/xm6578773/" target="_blank">韩式美食，独家绝味！</a></li>
                    </ul>
                </div>
            </div>
            <div class="recommend_child">
                <div class="clearfix re_childTop">
                    <div class="fl">
                        <a href="http://www.jmw.com.cn/xm143208/" target="_blank">
                            <img title="例格女装加盟" width="113" height="87" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4511f-3650.jpg"></a>
                    </div>
                    <ul class="fl">
                        <li class="li_libj">
                            <a onclick="javascript:attention('143208','例格女装','6');_gaq.push(['_trackEvent', '关注', '点击', '项目推荐关注点击']);return false;" class="color_w" href="javascript:;">关注项目</a></li>
                        <li class="li_libj li_message">
                            <a class="color_w" href="javascript:;" onclick="onClickBBSInfoNew_pc('143208','例格女装','','7','6'); return false;" onblur="">快捷留言</a></li>
                        <li class="li_libj orenge_bj">
                            <a class="color_w" href="http://www.jmw.com.cn/xm143208/" target="_blank" title="例格女装加盟">项目详情</a></li>
                    </ul>
                </div>
                <div class="re_childBtn">
                    <ul>
                        <li>
                            <span>
                                <span class="span_leter">项目名</span>：</span>
                            <a title="例格女装加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">例格女装</a></li>
                        <li>
                            <span>
                                <span class="span_leter">投资额</span>：</span>
                            <a title="例格女装10万-20万加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">10万-20万</a></li>
                        <li class="li_last">
                            <span>项目特点：</span>
                            <a title="例格女装加盟" href="http://www.jmw.com.cn/xm143208/" target="_blank">例格女装，源自意大利，欧洲风格流行元素。</a></li>
                    </ul>
                </div>
            </div>
            <!--<style type="text/css"> 
            .secfrom_1{ padding:0; position: absolute; top: -26px; right: -62px; }
            .box_1{ padding:0;}
            .box_2 p.btn{ padding-top:0;}
            #show_hide{width:375px; height:352px; border:1px solid #000;background:#fff;z-index:1009;left:50%;/*FF IE7*/
            top:50%;/*FF IE7*/
            margin-left:-187px!important;/*FF IE7*/
            margin-top:-151px!important;/*FF IE7*/
            margin-top:0;position:fixed!important;/*FF IE7*/
            position:absolute;/*IE6*/
            _top:expression(eval(document.compatMode &&
            document.compatMode=='CSS1Compat') ?
            documentElement.scrollTop + (document.documentElement.clientHeight-this.offsetHeight)/2 :/*IE6*/
            document.body.scrollTop + (document.body.clientHeight - this.clientHeight)/2);/*IE5 IE5.5*/
            }
            #sec_from,.secIframe{width:315px; position:absolute;left:-1px;top:-1px;}
            .secIframe{filter:alpha(opacity=0);opacity:0;}
            .secfrom_1{text-align:right; }
            .secfrom_2{width:315px;position:relative; margin-left:30px; }
            .secfrom_2 .secMsg{left:66px;top:30px;}
            .box_1 span{margin-left:15px;}
            .box_1 span a{color:#0A4DA4;}
            .box_1 textarea{width:298px;height:100px;resize:none; color:#999999; padding:8px; }
            .box_2{width:100%;overflow:hidden;}
            .box_2 p{height:36px;line-height:36px; margin-top:15px; overflow:hidden;}
            .box_2 p span{color:#f00;margin:0 3px;}
            .box_2 p input.name,.box_2 p input.tel{height:34px;border:1px solid #ccc;line-height:34px;padding:0 5px;}
            .box_2 p input.name{width:140px;}
            .box_2 p input.tel{width:243px;}
            .box_2 p label{margin:0 2px;}
            .box_2 p.tel input{width:214px;}
            .box_2 .btn{ width: 315px; background: #e93c00; height:36px; line-height: 36px; text-align: center; color: #fff; border: none;}
            </style>-->
            <!--快捷留言固定定位-->
            <!--<div name="show_hide" style="display: none;" id="show_hide">
            <iframe frameborder="0" class="secIframe"></iframe>
            <div id="sec_from">
            <div class="secfrom_1"><a onclick="closeBg();" href="javascript:;"><img width="26" height="26" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1b5cd-8225.png"></a></div>
            <div class="secfrom_2">
            <form action="http://liuyan.jmw.com.cn/message/messageProjectQuick.php" name="UbbFm" id="postFrom" method="post" onsubmit="return onClickMessInfoNew();">
            <input type="hidden" name="lasturl_quick" id="lasturl_quick" />
            <input type="hidden" name="fromurl_quick" id="fromurl_quick" />            
            <input type="hidden" name="project_message_origin" id="origin_quick"  />
            <div class="box_1" style="height:44px; line-height:44px;">留言内容:<span>[<a href="javascript:;" onmouseover="javascript:jQuery('#secly_1').show();" onmouseout="javascript:jQuery('#secly_1').hide();" onclick="return false">快捷留言</a>]</span></div>
            <div class="box_1"><textarea id="js_textarea" name="content" onkeyup="keyUp();">此项目很好，请尽快联系我详谈。</textarea></div>
            <div class="box_2">
            <p>您的姓名：<input type="text" class="name" value="" id="Uname" name="sname" maxlength="6"><span></span>性别：<label>男</label><input type="radio" class="a3" checked="" value="0" id="sexm" name="sex"><label>女</label><input type="radio" class="a3" value="1" id="sexfm" name="sex"></p>
            <p>联系电话：<input type="text" class="tel" maxlength="11" value="" id="Utel" name="mobile"></p>
            <input type="hidden" name="sid" value="770" id="Usid">
            <p><input id='firstQuick' type="submit" class="btn" value="提交"/></p></div>
            <div onmouseover="jQuery('#secly_1').show();" onmouseout="jQuery('#secly_1').hide();" style="display: none;" id="secly_1" class="secMsg">
            <p><strong>您可以根据意向选择下列[快捷留言] ↓</strong></p>
            <ul>
            <li><a href="javascript:;" onclick="onClickBBSFrom('此项目很好，请尽快联系我详谈。')">此项目很好，请尽快联系我详谈。</a></li>
            <li><a href="javascript:;" onclick="onClickBBSFrom('请问我所在的地区有此项目加盟商了吗？')">请问我所在的地区有此项目加盟商了吗？</a></li>
            <li><a href="javascript:;" onclick="onClickBBSFrom('我已留下了邮箱，请将此项目详细资料发邮件给我。')">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
            <li><a href="javascript:;" onclick="onClickBBSFrom('我想详细了解此项目的加盟流程，请与我联系。')">我想详细了解此项目的加盟流程，请与我联系。</a></li>
            <li><a href="javascript:;" onclick="onClickBBSFrom('做为此项目的代理加盟商能得到哪些支持？')">做为此项目的代理加盟商能得到哪些支持？</a></li>
            <li><a href="javascript:;" onclick="onClickBBSFrom('请问投资此项目所需要的费用有哪些？')">请问投资此项目所需要的费用有哪些？</a></li>
            <li class="noLine"><a href="javascript:;" onclick="onClickBBSFrom('我想加盟此项目，请电话联系我。')">我想加盟此项目，请电话联系我。</a></li></ul>
            </div>
            </form>
            </div>
            </div>
            </div>-->
            <!--加盟品牌推广 start--->
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/platj/css/35fe8-8296.css" />
            <div class="Pfind_money" id="pFind12" style="display:none; ">
                <form action="" name="UbbFm" id="postFrom" method="post">
                    <input type="hidden" name="lasturl_quick" id="lasturl_quick" />
                    <input type="hidden" name="fromurl_quick" id="fromurl_quick" />
                    <input type="hidden" name="project_message_origin" id="origin_quick" class="origin_quick_check" />
                    <p class="p_title1 clearfix">
                        <span class="fr" onclick="$('#pFind12').hide();$('.gray_mask').hide();">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1b5cd-8225.png" alt="" /></span>
                    </p>
                    <div class="Pfind_money2">
                        <p class="p_title4 clearfix">
                            <span>留言内容</span>
                            <span class="fr hover_SJ" onmouseout="$('#tj_secMsg').hide();" onmouseover="$('#tj_secMsg').show();">快捷留言</span></p>
                        <style type="text/css">.secMsg { width: 360px; position: absolute; z-index: 1008; background: #fff; left: 238px; top: 113px; } .secMsg .msgIframe { width: 360px; height: 228px; position: absolute; left: 0; top: 0; z-index: -1; opacity: 0;} .sq_form .secMsg p { height: 35px; line-height: 35px; padding: 0 10px; margin: 0; overflow: hidden; color: #fff; } .secMsg p strong { float: left;} .secMsg p a { float: right; width: 13px; height: 13px; margin-top: 7px; outline: none;} .sq_form .secMsg ul { padding:5px 10px; } .secMsg ul li { height: 25px; line-height: 25px; padding-left: 11px; overflow: hidden; white-space: nowrap; border-bottom: 1px dashed #ccc; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/ccd23-4092.jpg) no-repeat 3px center;}</style>
                        <div class="secMsg" id="tj_secMsg" style="display: none; left:273px; top:78px;" onmouseout="$('#tj_secMsg').hide();" onmouseover="$('#tj_secMsg').show();">
                            <iframe class="msgIframe" frameborder="0"></iframe>
                            <p style="background:#e93c00;">
                                <strong>您可以根据意向选择下列[快捷留言]</strong>
                                <a style="margin-top:7px;" target="_self" href="javascript:;" onclick="$('.secMsg').hide();">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3bb8b-4720.gif"></a>
                            </p>
                            <ul style="border:1px solid #e93c00;">
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this))">此项目很好，请尽快联系我详谈。</a></li>
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this))">请问我所在的地区有此项目加盟商了吗？</a></li>
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我已留下了邮箱，请将此项目详细资料发邮件给我。</a></li>
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我想详细了解此项目的加盟流程，请与我联系。</a></li>
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">做为此项目的代理加盟商能得到哪些支持？</a></li>
                                <li>
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">请问投资此项目所需要的费用有哪些？</a></li>
                                <li class="noLine">
                                    <a target="_self" href="javascript:;" onclick="onClickBBSFrom_pc($(this));return false;">我想加盟此项目，请电话联系我。</a></li>
                            </ul>
                        </div>
                        <textarea onkeyup="keyUp();" name="content" id="js_textarea" cols="30" rows="10">请输入您的疑问</textarea>
                        <div class="name_box">
                            <p>姓&nbsp;名：
                                <input type="text" class="name" value="您的姓名" id="Uname" name="sname" maxlength="6" onfocus="if(this.value=='您的姓名'){this.value=''}" onblur="if(this.value==''){this.value='您的姓名'}">性别：
                                <label>
                                    <input type="radio" class="a3" value="0" id="sexm" name="sex" checked="">男</label>
                                <label>
                                    <input type="radio" class="a3" value="1" id="sexfm" name="sex">女</label></p>
                            <p>手&nbsp;机：
                                <input type="text" class="tel" maxlength="11" value="手机号码" id="Utel" name="mobile" onfocus="if(this.value=='手机号码'){this.value=''}" onblur="if(this.value==''){this.value='手机号码'}"></p>
                            <input type="hidden" name="sid" value="770" id="Usid">
                            <p>
                                <input id='firstQuick' type="button" value="提交" class="btn" onclick="onClickMess($(this));" /></p>
                        </div>
                    </div>
                </form>
            </div>
            <!--加盟品牌推广 end---></div>
    </div>
    <div class="advertisement">
        <a title="巴比酷" ad_need_click="true" ad_id="435" href="http://www.jmw.com.cn/xm6624475/" target="_blank">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4fa1e-9972.gif" width='230' height='90' /></a>
        <a title="寻鱼私烤招商加盟" ad_need_click="true" ad_id="436" href="http://search.jmw.com.cn/jmw_user/xunyu/" target="_blank">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/551e2-8821.gif" width='230' height='90' /></a>
        <a title="千叶珠宝" ad_need_click="true" ad_id="437" href="http://www.jmw.com.cn/xm6584328/" target="_blank">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/20ee2-9171.gif" width='230' height='90' /></a>
        <a title="勾馋麻辣烫" ad_need_click="true" ad_id="451" href="http://search.jmw.com.cn/jmw_user/gcmlt/" target="_blank">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/1c6c6-2025.gif" width='230' height='90' /></a>
    </div>
</div>
