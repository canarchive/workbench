<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['768a5-2994', '2a61f-3180', '89183-8983'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('_js-header');
$this->params['bodyClass'] = 'class="narrow_980"';
?>
<script type="text/javascript">document.body.oncopy = function() {
        alert("受保护的内容，暂不可复制！");
        return false;
    }
    function getaskcommits(anid, uid) {
        jq.get('ask_comments.php', {
            anid: anid,
            hostid: uid
        },
        function(data) {
            jq("#showCommit_" + anid).append(data);
        },
        'text')
    }</script>
<div class="ask_solved">
    <div class="global_pie">
        <div class="global_pie_container">
            <ul>
                <li class="has_arrow">
                    <a href="http://www.to8to.com/gonglve/">装修攻略</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="has_arrow">
                    <a href="http://www.to8to.com/ask/">问答</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="has_arrow">
                    <a href="more-h5i5">装饰材料</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="has_arrow">
                    <a href="more-h5s1i5">地板</a>
                    <span class="nav_arrow_right"></span>
                </li>
                <li class="last">请问地板砖渗水怎么处理</li></ul>
        </div>
    </div>
    <div class="container clear" style="position: relative;">
        <!--右侧浮动广告位-->
        <div class="col2_1">
            <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/b808b-9585.css">
            <div class="quoted-outside">
                <div class="quoted-budgetimg"></div>
                <span class="border-right"></span>
                <form id="quoted-form">
                    <input type="hidden" name="ptag" value="1_3_7_106" />
                    <div class="quoted-content clear">
                        <div class="form-line quoted-left">
                            <div class="element quoted-sheng">
                                <input type="hidden" name="dangci" value="jianzhuang">
                                <select name="shen" id="User_Shen_zxjr" onchange="changeProvince('User_Shen_zxjr','User_City_zxjr','User_Town_zxjr');">
                                    <option value="">省/市</option></select>
                            </div>
                            <div class="element">
                                <select name="city" id="User_City_zxjr" onchange="showWechat();">
                                    <option value="">市/地区</option></select>
                                <div style="display:none;">
                                    <select name="User_Town" id="User_Town_zxjr">
                                        <option value="">市/地区</option></select>
                                </div>
                            </div>
                            <div class="element">
                                <input class="text area" type="text" id="quoted_area" name="square" />
                                <em>房屋面积</em>
                                <i class="unit">m²</i></div>
                            <div class="element house" style="display: block;">
                                <div class="clear">
                                    <select name="shi" id="shi" class="select select_s select_s_s col_l">
                                        <!-- style="border-color:rgb(221, 221, 221);" -->
                                        <option value="1">1室</option>
                                        <option value="2">2室</option>
                                        <option value="3">3室</option>
                                        <option value="4">4室</option>
                                        <option value="5">5室</option>
                                        <option value="6">6室</option></select>
                                    <select name="ting" id="ting" class="select select_s select_s_s col_l">
                                        <option value="1">1厅</option>
                                        <option value="2">2厅</option>
                                        <option value="3">3厅</option>
                                        <option value="4">4厅</option>
                                        <option value="5">5厅</option>
                                        <option value="6">6厅</option></select>
                                    <select name="chu" id="chu" class="select select_s select_s_s col_l">
                                        <option value="1">1厨</option>
                                        <option value="2">2厨</option>
                                        <option value="3">3厨</option>
                                        <option value="4">4厨</option>
                                        <option value="5">5厨</option>
                                        <option value="6">6厨</option></select>
                                    <select name="wei" id="wei" class="select select_s col_l">
                                        <option value="1">1卫</option>
                                        <option value="2">2卫</option>
                                        <option value="3">3卫</option>
                                        <option value="4">4卫</option>
                                        <option value="5">5卫</option>
                                        <option value="6">6卫</option></select>
                                    <select name="yangtai" id="yangtai" class="select select_s col_l">
                                        <option value="1">1阳台</option>
                                        <option value="2">2阳台</option>
                                        <option value="3">3阳台</option>
                                        <option value="4">4阳台</option>
                                        <option value="5">5阳台</option>
                                        <option value="6">6阳台</option></select>
                                </div>
                            </div>
                            <div class="element inputphone">
                                <div class="yezhu-choose clear">
                                    <p>报价结果查看方式：</p>
                                    <ul class="yz-choosebjway">
                                        <li class="yz-blueradio">
                                            <p>
                                                <em></em>手机报价</p>
                                        </li>
                                        <li>
                                            <p>
                                                <em></em>微信人工报价</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_wrap">
                                    <input class="text" type="text" name="phone" id="phone_zxjr_top" />
                                    <em class="text_lbl">报价结果将发送到您的手机</em></div>
                                <div class="yz-suspend-wechat clear">
                                    <p class="yz-sus-head">微信加好友 获取详细报价</p>
                                    <div class="yz-sus-headimg">
                                        <div class="yz-headdetail"></div>
                                        <div class="yz-worddetail">
                                            <p>深圳装修顾问-馨馨</p>
                                        </div>
                                        <p>4年行业经验，24h可咨询</p>
                                        <em class="pre-result-contain-strategy"></em>
                                    </div>
                                    <div class="yz-sus-quocode">
                                        <div></div>
                                        <p>10秒闪电通过好友</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quoted-btn">
                                <a class="count-btn">
                                    <span class="text-js">开始计算</span></a>
                            </div>
                        </div>
                        <div class="quoted-right" style="*width:260px;">
                            <div class="budget-price" style="text-align:center;">
                                <span>您的装修预算约</span>
                                <b id="budget_prices">?</b>
                                <em>万元</em>
                                <!-- <a>查看预算明细</a> --></div>
                            <div class="budget-list">
                                <ul>
                                    <li>
                                        <b>
                                            <span id="quoted_rg_prices">?</span>
                                            <em>元</em></b>
                                        <span class="classmany">人工费：</span></li>
                                    <li class="budget-list-right">
                                        <b>
                                            <span id="quoted_cl_prices">?</span>
                                            <em>元</em></b>
                                        <span class="classmany">材料费：</span></li>
                                    <li>
                                        <b id="sj_prices">
                                            <span id="quoted_sj_prices">?</span>
                                            <em>元</em></b>
                                        <span class="classmany">设计费：</span></li>
                                    <li class="budget-list-right">
                                        <b id="zj_prices">
                                            <span id="quoted_zj_prices">?</span>
                                            <em>元</em></b>
                                        <span class="classmany">质检费：</span></li>
                                </ul>
                            </div>
                            <div class="quoted-point">
                                <p class="fon-fe6 holiday-text">
                                    <em>*</em>装修管家将回电您，免费提供装修咨询服务</p>
                                <p>
                                    <em>*</em>因材料品牌及工程量不同，具体报价以量房
                                    <br/>实测为准</p></div>
                            <div class="result-head">
                                <p>报价短信已发送到您的手机，注意查收！</p>
                                <p class="recall holiday-text">装修管家将回电您，免费提供装修咨询服务</p></div>
                            <div class="result-contain">
                                <p class="result-head">装修怕上当？问问靠谱的人</p>
                                <div class="left">
                                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/fb13b-5113.gif" class="kfn-p">
                                    <em></em>
                                    <p class="kfname kfname-new-name">
                                        <span class="kfn-city">深圳</span>装修顾问
                                        <span class="kfn-name">-馨馨</span></p>
                                    <p class="result-gw-p">（四年装修行业经验）</p></div>
                                <div class="result-contain-strategy"></div>
                                <div class="right">
                                    <em></em>
                                    <p>微信扫一扫</p>
                                    <p>加好友</p>
                                </div>
                            </div>
                            <div class="result-contain-ndg"></div>
                        </div>
                    </div>
                </form>
            </div>
            <style type="text/css">.budget-price b{ width: auto !important; }</style>
            <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/best_decorate_day.js"></script>
            <script>//初始化页面根据ip接口得到的城市 展示对应微信小号
                jq(document).ready(function() {
                    city_from_ip(function(cityFromIp) {
                        showWechat(cityFromIp); //初始化对应操作
                    });
                }) function showWechat(city) {
                    var city_name = '';
                    if (arguments.length > 0) {
                        city_name = city;
                    } else {
                        city_name = jq('#User_City_zxjr').val();
                    }
                    jq('.quoted-right .wechat-code').removeClass('wechat-code-dg');
                    jq('.result-contain-ndg').hide(); //初始化
                    if (city_name === '深圳') {
                        jq('.inputphone').addClass('specialcity'); // 标识城市初始态样式
                        window.is_shenzhen = true;
                        window.is_dongguan = false;
                        jq('.quoted-right').addClass('show-wechat');
                        jq('.quoted-point').hide();
                        jq('.to8tonama').text('深圳装修顾问-馨馨');
                        jq('.yz-worddetail p').text('深圳装修顾问-馨馨');
                        jq('.kfname-new-name .kfn-city').text('深圳');
                        jq('.kfname-new-name .kfn-name').text('馨馨');
                        jq('.yz-sus-quocode div').css('background-position-y', '-283px');
                    } else if (city_name === '东莞') {
                        jq('.inputphone').addClass('specialcity');
                        window.is_dongguan = true;
                        window.is_shenzhen = false;
                        jq('.quoted-right').addClass('show-wechat');
                        jq('.quoted-point').hide();
                        jq('.quoted-right .wechat-code').addClass('wechat-code-dg');
                        jq('.wechat-result .result-contain-ndg').show(); //初始化
                        jq('.to8tonama').text('东莞装修顾问-蓉蓉');
                        jq('.yz-worddetail p').text('东莞装修顾问-蓉蓉');
                        jq('.kfname-new-name .kfn-city').text('东莞');
                        jq('.kfname-new-name .kfn-name').text('蓉蓉');
                        jq('.yz-sus-quocode div').css('background-position-y', '-398px');
                    } else {
                        jq('.inputphone').removeClass('specialcity');
                        window.is_shenzhen = false;
                        window.is_dongguan = false;
                        jq('.quoted-right').removeClass('show-wechat');
                        if (jq('.wechat-result').length > 0) {
                            jq('.quoted-point').show();
                        }
                    }
                } (function(jq) {
                    // 深圳东莞城市切换微信报价
                    jq('.yz-choosebjway li').on('click',
                    function() {
                        jq(this).addClass('yz-blueradio').siblings().removeClass('yz-blueradio');
                        var index = jq(this).index() + 1;
                        if (index == 2) {
                            jq(this).parents('.element').children('div').eq(index).show().prev('div').hide();
                            jq('.quoted-btn .count-btn').addClass('calc-disabled');
                        } else if (index == 1) {
                            jq(this).parents('.element').children('div').eq(index).show().next('div').hide();
                            jq('.quoted-btn .count-btn').removeClass('calc-disabled');
                        }
                    });
                    jq('.quoted-btn').on('click', '.calc-disabled',
                    function() {
                        return false;
                    });
                    an_arrow('.result-contain-strategy', '120px', '100px');
                    an_arrow('.pre-result-contain-strategy', '160px', '172px');
                    //箭头动画
                    function an_arrow(target, start, end) {
                        jq(target).animate({
                            'left': start
                        },
                        500,
                        function() {
                            jq(target).animate({
                                'left': end
                            },
                            500,
                            function() {
                                an_arrow(target, start, end);
                            });
                        });
                    };

                    var year1 = new Date('2017/1/19 18:30:00');    year1_unix = year1.getTime();
                    var year2 = new Date('2017/2/2 23:59:59');
                    year2_unix = year2.getTime();
                    var year = new Date();
                    year_unix = year.getTime();
                    if (year1_unix <= year_unix && year_unix <= year2_unix) {    jq('.holiday-text').html('亲爱的业主，因春节工作人员放假(1.20-2.2)，我们将不能及时与您联系。如未接到电话，我们会在年后第一时间给您回电，请注意接听。祝您新春愉快、阖家幸福。');
                        jq('.holiday-text').css({
                            'text-align': 'left'
                        });
                        jq('.result-contain-ndg').css({
                            'top': '159px'
                        });
                    }

                })(jQuery)</script>
            <div class="ask_qustion">
                <h1 class="title3" style="width:560px;">请问地板砖渗水怎么处理</h1>
                <div class="ask_qustion_people mtb10" style="line-height: 32px;">提问者：
                    <b>俞沈静</b>
                    <span>|</span>地点：
                    <a href="http://chuxiong.to8to.com/" target="_blank" title="楚雄装修网">楚雄</a>
                    <span>|</span>浏览：
                    <b>36</b>
                    <span>|</span>时间：
                    <b>2017-01-11 15:09:44</b>
                    <div id='wyhd' style='display:none;margin-top: 35px;'>
                        <a href="javascript:void(0)" class="f_c_01af63" id="showthis">我要回答&gt;&gt;</a></div>
                </div>
                <div id='bcwt' style='display:none'>
                    <iframe src="" name="send" id="send" style="display:none;"></iframe>
                    <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="bucong" target="send">
                        <input type="hidden" name="action" value="editask">
                        <input type="hidden" name="ask_id" value="6377526">
                        <input type="hidden" name="uid" value="650943">
                        <input type="hidden" id="popwinid" value="answer">
                        <div class="bg_f8f8f8 p20">
                            <p class="ask_two_p">您的问题我们已经收到啦，专业人士正在积极帮您回答，稍等一下哦！您还可以
                                <a class="ask_arrow_two" href="javascript:void(0)">补充问题
                                    <i class="ask_arrow_green_up"></i></a>
                            </p>
                            <textarea class="ask_textarea_h100" style="display:none" name="direction" id="direction">详细说明问题的情况，可获得更准确的回答</textarea>
                            <div class="insert_img" style="display:none">
                                <input type="file" class="input_file" name="filename" id="filename" />
                                <div class="insert_img_modle clear">
                                    <span class="col_l">
                                        <i class="ico_pic"></i>
                                        <a href="javascript:void(0)">插入图片</a></span>
                                    <span class="col_l" style="display:none">
                                        <i>
                                        </i>
                                        <a type="button" class="ask_btn_green ml10" value="">删除</a></span>
                                    <span class="col_r">
                                        <span>还可以输入
                                            <label>1500</label>文字</span>
                                        <input onclick="answerTijiao2();" type="button" class="btn_green ml10" value="确认提交"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id='btjd' style='display:none;'>
                    <iframe src="" name="send" id="send" style="display:none;"></iframe>
                    <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="jiedawt" target="send">
                        <input type="hidden" name="action" value="addanswer">
                        <input type="hidden" name="ask_id" value="6377526">
                        <input type="hidden" id="popwinid" value="answer">
                        <div class="bg_f8f8f8 p20 bg_f8f8f82" style="display: none;margin-top:40px;">
                            <h3 class="title">我来帮他解答</h3>
                            <textarea class="ask_textarea_h100" name="content" id="content">为问友提供尽可能准确、详细和有效的回答，被采纳后将获得5积分哦~</textarea>
                            <div class="insert_img">
                                <input type="file" class="input_file" name="filename" id="filename" style="display: none;" />
                                <div class="insert_img_modle clear">
                                    <span class="col_l">
                                        <i class="ico_pic"></i>
                                        <a href="javascript:void(0)" id='denglu'>插入图片</a></span>
                                    <span class="col_l" style="display:none">
                                        <i>
                                        </i>
                                        <a href="javascript:void(0)" class="ask_btn_green ml10">删除</a></span>
                                    <span class="col_r">
                                        <span>还可以输入
                                            <label>1500</label>文字</span>
                                        <input onclick="answerTijiao();" type="button" class="btn_green ml10" id='tijiao' value="提交答案"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <i class="ico_green_ask"></i>
                <a href="" rel="nofollow" target="_blank" class="hot-hb-redian" style="position: absolute;right: 50px;top: 15px;">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/77a4f-4217.jpg" alt="" width="90" height="106"></a>
            </div>
            <div class="ask_qustion best_answer ask_answer_li">
                <div class="title title2" id='zj' value=''>最佳答案</div>
                <ul class="clear">
                    <li class="hover">
                        <a href="http://bbs.to8to.com/space-uid-7250784.html" rel="nofollow" target="_blank" class="company_img">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                        <div class="company_detail">
                            <a href="http://bbs.to8to.com/space-uid-7250784.html" rel="nofollow" target="_blank" class="company_name">a959373283
                                <i class="ask_ico_score"></i>
                                <span class="f_c_ffc619">5积分</span></a>
                            <div class="company_case">回答数：
                                <b>4695</b>
                                <span>|</span>被采纳数：
                                <b>1</b>
                                <b class="time">2017-01-13 15:25:13</b></div>
                        </div>
                        <div class="tip_triangle_left" style="display: none;">
                            <ul class="ask_answer_tip clear">
                                <li>
                                    <a href="http://bbs.to8to.com/space-uid-7250784.html" rel="nofollow" target="_blank" class="company_img">
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                                    <div class="company_detail">
                                        <span class="company_name">a959373283</span>
                                        <div class="company_case">等级&nbsp;
                                            <label>0</label></div>
                                        <div class="company_case">所有回答：&nbsp;
                                            <label>4695</label></div>
                                        <div class="company_case">
                                            <input onclick="askSolved.askHelpBox('a959373283',7250784);" class="btn_green" value="向他求助" type="button"></div>
                                    </div>
                                </li>
                            </ul>
                            <b>
                            </b>
                        </div>
                    </li>
                </ul>
                <p class="ask_one_p">您好，敲开地砖，通过闭水试验，查看原有防水层，如果破裂得比较厉害，则建议重做防水。如果是部分渗漏，则针对性修补到位。家庭防水建议选用聚合物水泥防水涂料（俗称JS复合防水涂料）或聚乙烯丙纶复合防水卷材，无毒无害，施工方便，效果持久。
                    <br />希望我的回答对您有所帮助。</p>
                <div class="ask_btn_reply">
                    <div class="clear">
                        <a href="javascript:void(0)" onclick="zan(17694292,6377526);">
                            <i id="class17694292" class="ico_praise_no_new"></i>赞
                            <b id="show17694292"></b></a>
                        <a href="javascript:void(0)" onclick="showcommit(17694292);" class="mr30 hov-underl">
                            <i class="ico_comment_new"></i>评论
                            <b id="allnums_17694292"></b></a>
                    </div>
                    <div id="showCommit_17694292" class="bg_f8f8f8 mtb10_ptl20 ask_commit" style="display: none;"></div>
                    <i class="ico_green_best"></i>
                </div>
            </div>
            <!--<div class="u_qstion u_qstion2">-->
            <!--<textarea></textarea>-->
            <!--<span class="pa1">-->
            <!--没找到满意的答案？简要描述您的问题，土巴兔专业家装顾问将进一步为您解答~-->
            <!--</span>-->
            <!--<span class="number">还可以输入100个字</span>-->
            <!--<label class="btn clear"><a href="javascript:;">向家装顾问提问</a><i class="ico"></i></label>-->
            <!--<p style="display: none">0</p>-->
            <!--</div>-->
            <div class="ask_answer_list">
                <div class="title title2">
                    <span>3</span>条其他回答</div>
                <div class="ask_answer_li">
                    <ul class="clear">
                        <li>
                            <a href="http://wh.to8to.com/zs/866339/" rel="nofollow" target="_blank" class="company_img">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/bfeda-6201.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                            <div class="company_detail">
                                <a href="http://wh.to8to.com/zs/866339/" target="_blank" class="company_name">武汉皇氏装饰设计工程有限公司</a>
                                <div class="company_case">回答数：
                                    <b>164722</b>
                                    <span>|</span>被采纳数：
                                    <b>75</b>
                                    <b class="time">2017-01-12 20:38:56</b></div>
                            </div>
                            <div class="tip_triangle_left" style="display: none;">
                                <ul class="ask_answer_tip clear">
                                    <li>
                                        <a href="http://wh.to8to.com/zs/866339/" rel="nofollow" target="_blank" class="company_img">
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/bfeda-6201.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                                        <div class="company_detail">
                                            <span class="company_name">武汉皇氏装饰设计工程有限公司</span>
                                            <div class="company_case">等级&nbsp;
                                                <label>97</label></div>
                                            <div class="company_case">所有回答：&nbsp;
                                                <label>164722</label></div>
                                            <div class="company_case">
                                                <input onclick="askSolved.askHelpBox('武汉皇氏装饰设计工程有限公司',866339);" class="btn_green" value="向他求助" type="button"></div>
                                        </div>
                                    </li>
                                </ul>
                                <b>
                                </b>
                            </div>
                        </li>
                    </ul>
                    <p class="ask_one_p edit_17685660">你好，可以用美缝剂。 &nbsp;&nbsp;
                        <br />1、准备好瓷砖填缝剂，注意其颜色尽量接近瓷砖颜色，另外一个主要工具是硅胶枪。
                        <br />2、要想把填缝剂放入硅胶枪，首先将硅胶枪上端压片按下，然后向上拉抽杆至最顶端，这样就可以把填缝剂放入硅胶枪。 &nbsp;&nbsp;
                        <br />3、在给瓷砖填缝之前，应将瓷砖缝隙打扫干净，尽量用毛刷扫净尘土，而且缝隙内不能有水。 &nbsp;&nbsp;
                        <br />4、沿瓷砖缝隙填补，边移动边挤出填缝剂，尽量使填缝剂成一条连续直线均匀填入缝隙。 &nbsp;&nbsp;
                        <br />5、戴上指套，沿着挤出的填缝剂滑动手指，使缝隙填满而光滑。 &nbsp;&nbsp;
                        <br />6、等待一分左右，即可用刀片轻松将挤出的余料刮走。 &nbsp;&nbsp;7、2小时后填缝剂就会凝固，24小时后会彻底凝固变硬，不影响擦地。美观的同时，以后就不用因有尘土进入不易擦净了。 &nbsp;&nbsp;希望我的回答对您有所帮助</p>
                    <div class="ask_btn_reply">
                        <div class='bjda_866339 clear'>
                            <a href="javascript:void(0)" onclick="zan(17685660,6377526);">
                                <i id="class17685660" class="ico_praise_no_new"></i>赞
                                <b id="show17685660"></b></a>
                            <a href="javascript:void(0)" onclick="showcommit(17685660);" class="mr30 hov-underl">
                                <i class="ico_comment_new"></i>评论
                                <b id="allnums_17685660"></b></a>
                            <span class="col_r zjda" style='display:none;'>
                                <input type="button" onclick="askSolved.setBestAnswer(17685660,6377526,866339);" class="btn_border_green" value="设为最佳答案"></span>
                        </div>
                        <div id="showCommit_17685660" class="bg_f8f8f8 mtb10_ptl20 ask_commit" style="display: none;"></div>
                    </div>
                    <div id='bj_866339' style='display:none;'>
                        <iframe src="" name="send" id="send" style="display:none;"></iframe>
                        <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="bianjida_17685660" target="send">
                            <input type="hidden" name="action" value="editanswer">
                            <input type="hidden" name="anid" value="17685660">
                            <input type="hidden" name="uid" value="866339">
                            <input type="hidden" name="ask_id" id='editanswer_askid' value="6377526">
                            <input type="hidden" id="popwinid" value="answer">
                            <div id="editquestion" class="bg_f8f8f8 mtb10_ptl20 editquestion_866339 edit_da" style="display: none;">
                                <textarea class="ask_textarea_h60 mtb0 editans" name="content" id="content">你好，可以用美缝剂。 &nbsp;&nbsp;
                                    <br />1、准备好瓷砖填缝剂，注意其颜色尽量接近瓷砖颜色，另外一个主要工具是硅胶枪。
                                    <br />2、要想把填缝剂放入硅胶枪，首先将硅胶枪上端压片按下，然后向上拉抽杆至最顶端，这样就可以把填缝剂放入硅胶枪。 &nbsp;&nbsp;
                                    <br />3、在给瓷砖填缝之前，应将瓷砖缝隙打扫干净，尽量用毛刷扫净尘土，而且缝隙内不能有水。 &nbsp;&nbsp;
                                    <br />4、沿瓷砖缝隙填补，边移动边挤出填缝剂，尽量使填缝剂成一条连续直线均匀填入缝隙。 &nbsp;&nbsp;
                                    <br />5、戴上指套，沿着挤出的填缝剂滑动手指，使缝隙填满而光滑。 &nbsp;&nbsp;
                                    <br />6、等待一分左右，即可用刀片轻松将挤出的余料刮走。 &nbsp;&nbsp;7、2小时后填缝剂就会凝固，24小时后会彻底凝固变硬，不影响擦地。美观的同时，以后就不用因有尘土进入不易擦净了。 &nbsp;&nbsp;希望我的回答对您有所帮助</textarea>
                                <div class="insert_img">
                                    <input type="file" class="input_file" name="filename" id="filename">
                                    <div class="insert_img_modle pr20 pb10 clear">
                                        <span class="col_l">
                                            <i class="ico_pic"></i>
                                            <a href="javascript:void(0)">插入图片</a></span>
                                        <span class="col_l" style="display:none">
                                            <i>
                                            </i>
                                            <a class="ask_btn_green ml10" href="javascript:void(0)">删除</a></span>
                                        <span class="col_r">
                                            <input type="button" onclick="editanswerTijiao(17685660);" class="btn_grey" value="确定">
                                            <a href="javascript:;" onclick="jq('.editquestion_866339').toggle();jq('#showCommit_17685660').hide();" class="ask_btn_grey ml10">取消</a></span>
                                    </div>
                                </div>
                                <b class="ask_arrow_down right"></b>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ask_answer_li">
                    <ul class="clear">
                        <li>
                            <a href="http://bbs.to8to.com/space-uid-6195688.html" rel="nofollow" target="_blank" class="company_img">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/80cf9-4738.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                            <div class="company_detail">
                                <a href="http://bbs.to8to.com/space-uid-6195688.html" rel="nofollow" target="_blank" class="company_name">21深蓝_3296</a>
                                <div class="company_case">回答数：
                                    <b>52684</b>
                                    <span>|</span>被采纳数：
                                    <b>6</b>
                                    <b class="time">2017-01-11 16:51:58</b></div>
                            </div>
                            <div class="tip_triangle_left" style="display: none;">
                                <ul class="ask_answer_tip clear">
                                    <li>
                                        <a href="http://bbs.to8to.com/space-uid-6195688.html" rel="nofollow" target="_blank" class="company_img">
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/80cf9-4738.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                                        <div class="company_detail">
                                            <span class="company_name">21深蓝_3296</span>
                                            <div class="company_case">等级&nbsp;
                                                <label>0</label></div>
                                            <div class="company_case">所有回答：&nbsp;
                                                <label>52684</label></div>
                                            <div class="company_case">
                                                <input onclick="askSolved.askHelpBox('21深蓝_3296',6195688);" class="btn_green" value="向他求助" type="button"></div>
                                        </div>
                                    </li>
                                </ul>
                                <b>
                                </b>
                            </div>
                        </li>
                    </ul>
                    <p class="ask_one_p edit_17670766">用隐形防水液做瓷砖缝渗水处理效果还好，这只能是对墙面瓷砖缝而言。如果是地面瓷砖缝渗水用隐形防水液及好的防水勾缝剂组合使用也只能是解决暂时的渗水问题。渗水的关键应该是你家的卫生间防水没做好。 &nbsp;&nbsp;很高兴能为你解答问题。希望我的回答对你有帮助。</p>
                    <div class="ask_btn_reply">
                        <div class='bjda_6195688 clear'>
                            <a href="javascript:void(0)" onclick="zan(17670766,6377526);">
                                <i id="class17670766" class="ico_praise_no_new"></i>赞
                                <b id="show17670766"></b></a>
                            <a href="javascript:void(0)" onclick="showcommit(17670766);" class="mr30 hov-underl">
                                <i class="ico_comment_new"></i>评论
                                <b id="allnums_17670766"></b></a>
                            <span class="col_r zjda" style='display:none;'>
                                <input type="button" onclick="askSolved.setBestAnswer(17670766,6377526,6195688);" class="btn_border_green" value="设为最佳答案"></span>
                        </div>
                        <div id="showCommit_17670766" class="bg_f8f8f8 mtb10_ptl20 ask_commit" style="display: none;"></div>
                    </div>
                    <div id='bj_6195688' style='display:none;'>
                        <iframe src="" name="send" id="send" style="display:none;"></iframe>
                        <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="bianjida_17670766" target="send">
                            <input type="hidden" name="action" value="editanswer">
                            <input type="hidden" name="anid" value="17670766">
                            <input type="hidden" name="uid" value="6195688">
                            <input type="hidden" name="ask_id" id='editanswer_askid' value="6377526">
                            <input type="hidden" id="popwinid" value="answer">
                            <div id="editquestion" class="bg_f8f8f8 mtb10_ptl20 editquestion_6195688 edit_da" style="display: none;">
                                <textarea class="ask_textarea_h60 mtb0 editans" name="content" id="content">用隐形防水液做瓷砖缝渗水处理效果还好，这只能是对墙面瓷砖缝而言。如果是地面瓷砖缝渗水用隐形防水液及好的防水勾缝剂组合使用也只能是解决暂时的渗水问题。渗水的关键应该是你家的卫生间防水没做好。 &nbsp;&nbsp;很高兴能为你解答问题。希望我的回答对你有帮助。</textarea>
                                <div class="insert_img">
                                    <input type="file" class="input_file" name="filename" id="filename">
                                    <div class="insert_img_modle pr20 pb10 clear">
                                        <span class="col_l">
                                            <i class="ico_pic"></i>
                                            <a href="javascript:void(0)">插入图片</a></span>
                                        <span class="col_l" style="display:none">
                                            <i>
                                            </i>
                                            <a class="ask_btn_green ml10" href="javascript:void(0)">删除</a></span>
                                        <span class="col_r">
                                            <input type="button" onclick="editanswerTijiao(17670766);" class="btn_grey" value="确定">
                                            <a href="javascript:;" onclick="jq('.editquestion_6195688').toggle();jq('#showCommit_17670766').hide();" class="ask_btn_grey ml10">取消</a></span>
                                    </div>
                                </div>
                                <b class="ask_arrow_down right"></b>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ask_answer_li">
                    <ul class="clear">
                        <li>
                            <a href="http://bbs.to8to.com/space-uid-6946165.html" rel="nofollow" target="_blank" class="company_img">
                                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/c04a9-6251.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                            <div class="company_detail">
                                <a href="http://bbs.to8to.com/space-uid-6946165.html" rel="nofollow" target="_blank" class="company_name">米甲大傻烂</a>
                                <div class="company_case">回答数：
                                    <b>38551</b>
                                    <span>|</span>被采纳数：
                                    <b>1</b>
                                    <b class="time">2017-01-12 00:37:16</b></div>
                            </div>
                            <div class="tip_triangle_left" style="display: none;">
                                <ul class="ask_answer_tip clear">
                                    <li>
                                        <a href="http://bbs.to8to.com/space-uid-6946165.html" rel="nofollow" target="_blank" class="company_img">
                                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/c04a9-6251.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                                        <div class="company_detail">
                                            <span class="company_name">米甲大傻烂</span>
                                            <div class="company_case">等级&nbsp;
                                                <label>0</label></div>
                                            <div class="company_case">所有回答：&nbsp;
                                                <label>38551</label></div>
                                            <div class="company_case">
                                                <input onclick="askSolved.askHelpBox('米甲大傻烂',6946165);" class="btn_green" value="向他求助" type="button"></div>
                                        </div>
                                    </li>
                                </ul>
                                <b>
                                </b>
                            </div>
                        </li>
                    </ul>
                    <p class="ask_one_p edit_17676375">要看一下渗水的位置，检测渗水原因。如果确实如你说的。检查一下瓷砖缝，把缝不严密的用勾缝剂填好，干燥后在用透明渗透型的仿水晶刷个2遍就可以了。</p>
                    <div class="ask_btn_reply">
                        <div class='bjda_6946165 clear'>
                            <a href="javascript:void(0)" onclick="zan(17676375,6377526);">
                                <i id="class17676375" class="ico_praise_no_new"></i>赞
                                <b id="show17676375"></b></a>
                            <a href="javascript:void(0)" onclick="showcommit(17676375);" class="mr30 hov-underl">
                                <i class="ico_comment_new"></i>评论
                                <b id="allnums_17676375"></b></a>
                            <span class="col_r zjda" style='display:none;'>
                                <input type="button" onclick="askSolved.setBestAnswer(17676375,6377526,6946165);" class="btn_border_green" value="设为最佳答案"></span>
                        </div>
                        <div id="showCommit_17676375" class="bg_f8f8f8 mtb10_ptl20 ask_commit" style="display: none;"></div>
                    </div>
                    <div id='bj_6946165' style='display:none;'>
                        <iframe src="" name="send" id="send" style="display:none;"></iframe>
                        <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="bianjida_17676375" target="send">
                            <input type="hidden" name="action" value="editanswer">
                            <input type="hidden" name="anid" value="17676375">
                            <input type="hidden" name="uid" value="6946165">
                            <input type="hidden" name="ask_id" id='editanswer_askid' value="6377526">
                            <input type="hidden" id="popwinid" value="answer">
                            <div id="editquestion" class="bg_f8f8f8 mtb10_ptl20 editquestion_6946165 edit_da" style="display: none;">
                                <textarea class="ask_textarea_h60 mtb0 editans" name="content" id="content">要看一下渗水的位置，检测渗水原因。如果确实如你说的。检查一下瓷砖缝，把缝不严密的用勾缝剂填好，干燥后在用透明渗透型的仿水晶刷个2遍就可以了。</textarea>
                                <div class="insert_img">
                                    <input type="file" class="input_file" name="filename" id="filename">
                                    <div class="insert_img_modle pr20 pb10 clear">
                                        <span class="col_l">
                                            <i class="ico_pic"></i>
                                            <a href="javascript:void(0)">插入图片</a></span>
                                        <span class="col_l" style="display:none">
                                            <i>
                                            </i>
                                            <a class="ask_btn_green ml10" href="javascript:void(0)">删除</a></span>
                                        <span class="col_r">
                                            <input type="button" onclick="editanswerTijiao(17676375);" class="btn_grey" value="确定">
                                            <a href="javascript:;" onclick="jq('.editquestion_6946165').toggle();jq('#showCommit_17676375').hide();" class="ask_btn_grey ml10">取消</a></span>
                                    </div>
                                </div>
                                <b class="ask_arrow_down right"></b>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form id='login'>
                <input type='hidden' id='ask_info_uid' value='650943'>
                <input type='hidden' id='ask_info_status' value='2'>
                <input type='hidden' id='isanswer' value=''>
                <input type='hidden' id='ask_userid' value='[866339,6195688,6946165]'>
                <input type='hidden' id='answeraccept' value='1'></form>
            <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/ask.js"></script>
            <script type="text/javascript">var ids = '17694292' + ',';
                getaskcommits(17694292, 7250784);
                getaskcommits(17685660, 866339);
                ids += '17685660' + ',';
                getaskcommits(17670766, 6195688);
                ids += '17670766' + ',';
                getaskcommits(17676375, 6946165);
                ids += '17676375' + ',';</script>
            <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/67379-7523.css">
            <div id='HotArea' style='display: block;'></div>
            <div class="question_list_box">
                <div class="title title2">相关问题</div>
                <div class="question_list">
                    <ul>
                        <li>
                            <div class="question_hd clear">
                                <a href="k6375630.html" target="_blank" class="ect col_l">[地板]请问地板砖缝怎么处理</a>
                                <div class="question_ft  col_r">
                                    <b>已有
                                        <em class="ans_num">3</em>个回答</b></div>
                            </div>
                        </li>
                        <li>
                            <div class="question_hd clear">
                                <a href="k2399041.html" target="_blank" class="ect col_l">[地板]卫生间地板砖缝渗水要怎么处理？</a>
                                <div class="question_ft  col_r">
                                    <b>已有
                                        <em class="ans_num">3</em>个回答</b></div>
                            </div>
                        </li>
                        <li>
                            <div class="question_hd clear">
                                <a href="k2921952.html" target="_blank" class="ect col_l">[地板]地板砖有味怎么处理</a>
                                <div class="question_ft  col_r">
                                    <b>已有
                                        <em class="ans_num">4</em>个回答</b></div>
                            </div>
                        </li>
                        <li>
                            <div class="question_hd clear">
                                <a href="k6374160.html" target="_blank" class="ect col_l">[涂料/油漆]请问地板砖上的油漆怎么处理</a>
                                <div class="question_ft  col_r">
                                    <b>已有
                                        <em class="ans_num">3</em>个回答</b></div>
                            </div>
                        </li>
                        <li>
                            <div class="question_hd clear">
                                <a href="k6371261.html" target="_blank" class="ect col_l">[地板]请问地板砖金属划痕怎么处理</a>
                                <div class="question_ft  col_r">
                                    <b>已有
                                        <em class="ans_num">3</em>个回答</b></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--<div class="question_list_box">-->
            <!--<div class="title title2"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/38297-4100.png">&nbsp;热门回答</div>-->
            <!--<div class="question_list">-->
            <!--<ul>-->
            <!--<li>-->
            <!--<div class="question_hd clear b_lc_fc5f00">-->
            <!--<a href="k3647187.html" target="_blank" class="ect col_l">[装修公司]马鞍山装修施工哪家最好？</a>-->
            <!--<div class="question_ft col_r">-->
            <!--<b>已有 <em class="ans_num">3</em> 个回答</b>-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="question_hd clear b_lc_fc5f00">-->
            <!--<a href="k3014476.html" target="_blank" class="ect col_l">[其它]哪位能告诉我几月装修房子最好？</a>-->
            <!--<div class="question_ft col_r">-->
            <!--<b>已有 <em class="ans_num">3</em> 个回答</b>-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="question_hd clear b_lc_fc5f00">-->
            <!--<a href="k474702.html" target="_blank" class="ect col_l">[瓷砖/石材]金典瓷砖吉象瓷砖哪个好？</a>-->
            <!--<div class="question_ft col_r">-->
            <!--<b>已有 <em class="ans_num">5</em> 个回答</b>-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="question_hd clear b_lc_fc5f00">-->
            <!--<a href="k4042880.html" target="_blank" class="ect col_l">[其他]广州市番禺捷能环保建材有限公司怎么样?</a>-->
            <!--<div class="question_ft col_r">-->
            <!--<b>已有 <em class="ans_num">3</em> 个回答</b>-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="question_hd clear b_lc_fc5f00">-->
            <!--<a href="k1901336.html" target="_blank" class="ect col_l">[瓷砖/石材]广东地砖价格高不</a>-->
            <!--<div class="question_ft col_r">-->
            <!--<b>已有 <em class="ans_num">3</em> 个回答</b>-->
            <!--</div>-->
            <!--</div>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--</div>--></div>
        <div class="col2_2">
            <div class="ask_side ask_user">
                <div class="ask_user_top">
                    <div class="user_log clear" style="display:none;">
                        <div class="user_info clear">
                            <a href="http://www.to8to.com/my/" target="_blank" class="user_img">
                                <img src="" width="60" height="60"></a>
                            <div class="user_name">
                                <a href="http://www.to8to.com/my/" target="_blank" class="ect">俞沈静</a>
                                <div class="user_jiffen">积分：9</div></div>
                        </div>
                        <div class="user_data clear">
                            <a href="http://www.to8to.com/my/ask.php" target="_blank" class="user_data_first">
                                <em>问过</em>
                                <span id="wenguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
                                <em>答过</em>
                                <span id="daguo"></span>
                            </a>
                            <a href="http://www.to8to.com/my/zxgs_answer.php" target="_blank">
                                <em>采纳</em>
                                <span id="caina"></a>
                            </span>
                        </div>
                    </div>
                    <div class="user_unlog">
                        <div class="answer_sum clear"></div>
                        <div class="answer_num_des">位业主已在问吧找到答案</div></div>
                </div>
                <div class="ask_user_btn clear">
                    <a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a>
                    <a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a></div>
            </div>
            <div class="ask_side ask-weixin-tuijian">
                <div class="side_hd ask-weixin-tuijian-hd">热门推荐</div>
                <div class="side_bd side_list">
                    <div class="need_case">
                        <a href="javascript:;" target="_blank" id="erweima01">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/91fff-7993.jpg" alt="">
                            <p>脑子进水造成的12大装修遗憾，你流泪了吗？</p>
                        </a>
                    </div>
                    <div class="need_case mar-20">
                        <a href="javascript:;" target="_blank" id="erweima02">
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/3c41d-7973.jpg" alt="">
                            <p>冬季养生必备神器焖烧杯，集齐6种食材即可领取。</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="float" style="margin-bottom: 20px;">
                <a class="clickstream_tag" data-ptag="1_3_4_20" href="http://mall.to8to.com/temai/22771.html?skuid=78420" hidefocus="" target="_blank" rel="nofollow">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/d9f0a-2922.jpg" width="240" height="240" alt="风魔方烟灶套餐"></a>
            </div>
            <div class="ask_side_opa">
                <a id="autourl" href="http://mall.to8to.com/search?keyword=%E9%9B%85%E6%A3%89 " hidefocus="" target="_blank" rel="nofollow">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff04f-1328.jpg" width="240" height="130"></a>
            </div>
        </div>
        <script type='text/javascript'>var href = jq('#HotArea a').attr('href');
            if (!href) {
                jq('#HotArea a').attr('href', 'javascript:void(0);');
            }

            //右侧新增热门推荐
            var ewmhtml = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/e8cd2-1545.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm01</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
            jq('#erweima01').on('click',
            function() {
                jq('body').append(ewmhtml);
            });
            jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
            function() {
                jq('.ewm-msg-layout').remove();
            }) var ewmhtml01 = '<div class="ewm-msg-layout">\
<div class="ewm-msg-box clear">\
<div class="wem-img"><img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/373c5-5471.png"></div>\
<div class="ewm-msg-text"><p>微信扫一扫</p><p>关注<em>土巴兔装修家居</em>公众号</p><p>发送<em>rm02</em>阅读</p></div>\
<i class="ico-ewm-remov"></i>\
</div>\
</div>';
            jq('#erweima02').on('click',
            function() {
                jq('body').append(ewmhtml01);
            });
            jq('body').on('click', '.ewm-msg-box > .ico-ewm-remov',
            function() {
                jq('.ewm-msg-layout').remove();
            }) if (typeof(ids) != 'undefined') {
                var anidstr = ids.substring(0, ids.lastIndexOf(','));
            } else {
                var anidstr = '';
            }
            jq(function() {
                jq.ajax({
                    'type': 'post',
                    'url': 'http://www.to8to.com/ask/ask_post.php',
                    'dataType': 'json',
                    'data': {
                        action: 'new_action_type',
                        anidstr: anidstr
                    },
                    'success': function(data) {
                        if (anidstr != '') {
                            var key = 0;
                            for (key in data.newzan) {
                                if (data.newzan[key]['status']) {
                                    jq('#class' + key).attr('class', 'ico_praise_new');
                                    jq('#show' + key).parents('a').css('color', "#f25618");
                                }
                                if (data.newzan[key]['num'] > 0) {
                                    jq('#show' + key).text(data.newzan[key]['num']);
                                }
                            }
                        }
                        if (data.status == 'nologin') {
                            jq('.user_log').hide();
                            jq('.user_unlog').show();
                            jq('.user_unlog .answer_sum').html(data.solvenum);
                            jq('.ask_user_btn').html('<a href="http://www.to8to.com/ask/k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="http://www.to8to.com/ask/more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        } else if (data.status == 'login') {
                            jq('.user_log').show();
                            jq('.user_unlog').hide();
                            jq('.user_log .user_img img').attr('src', data.photo);
                            jq('.user_log .user_name .ect').html(data.username);
                            jq('.user_log .user_name .user_jiffen').html('积分：' + data.credits);
                            jq('#wenguo').html(data.asknum);
                            jq('#daguo').html(data.answernum);
                            jq('#caina').html(data.acceptnum);
                            jq('.ask_user_btn').html('<a href="k.php?act=ask" rel="nofollow" class="btn_ask">我要提问</a><a href="more.php?btype=2&amp;id=3&amp;tpaixu=1" rel="nofollow" class="btn_answer">我要回答</a>');
                        }
                    }
                })
            })</script>
    </div>
</div>
<!--左侧分享互动-->
<style type="text/css">.left-article-nav { position: fixed; z-index: 7000; top: 324px; left: 50%; margin-left: -548px; } .left-article-nav .left-article-list{ width: 50px; } .left-article-nav .left-article-list a{ width: 48px; height: 48px; display: block; text-align: center; border: 1px solid #e8e8e8 !important; background: #fff; overflow: hidden; position: relative; margin: 0 0 -1px 0 !important; padding: 0 !important; } .left-article-nav .left-article-list .bd-sqz,.left-article-nav .left-article-list .bd-swb{ z-index: 9999; opacity: 0; filter:alpha(opacity=0); } .left-article-nav .left-article-list i{ display: block; text-align: center; margin: 0 auto; z-index: 7002; position: absolute; } .left-article-nav .article-nav-weixin i{ background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png"); _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif"); width: 25px; height: 25px; left: 0; margin: 12px 0 0 12px; background-position: -2px -1px; } .left-article-nav .article-nav-qqkongjian i{ background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png"); _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif"); width: 29px; height: 29px; left: 0; margin: 11px 0 0 10px; background-position: -1px -31px; } .left-article-nav .article-nav-sina i{ background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png"); _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif"); width: 30px; height: 24px; left: 0; margin: 10px 0 0 10px; background-position: -1px -64px; } .left-article-nav .article-nav-tdc i{ background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png"); _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif"); width: 24px; height: 24px; left: 0; margin: 12px 0 0 12px; background-position: -1px -96px; } .left-article-nav .article-nav-weixin i.on { background-position: -32px -1px } .left-article-nav .article-nav-qqkongjian i.on{ background-position: -32px -31px; } .left-article-nav .article-nav-sina i.on{ background-position: -39px -63px; } .left-article-nav .article-nav-tdc i.on{ background-position: -32px -96px; } .left-article-nav .article-nav-bg { display: block; background-color: #01af63; width: 0; height: 0; margin: 0 auto; position: relative; z-index: 7001; vertical-align: middle; margin-top: 50%; } /*二维码*/ .to8to-tdc{ position: absolute; top: 0; right: -135px; border: 1px solid #e8e8e8; background-color: #fff; display: none; } .to8to-tdc-wx { position: absolute; top: 0; right: -135px; border: 1px solid #e8e8e8; background-color: #fff; display: none; } .left-article-nav .bord-bot { border-bottom: 1px dashed #cecece; width: 125px; } .left-article-nav .app-tdc{ width: 125px; } .left-article-nav .weixin-tdc{ width: 125px; } .weixin-tdc img{ width: 96px; height: 96px; margin: 0 auto; padding: 15px 14px 0 14px; } .to8to-tdc p,.to8to-tdc-wx p { text-align: center; color: #ff5400; font-weight: bold; margin: 3px 0 11px 0; } .app-tdc img{ width: 96px; height: 96px; margin: 0 auto; padding: 15px 14px 0 14px; } .to8to-tdc-iconwx { position: absolute; background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png") no-repeat -2px -208px; _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif") no-repeat -2px -208px; width: 6px; height: 12px; left: -6px; top: 20px; } .to8to-tdc-icon{ position: absolute; background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/5d8ab-9124.png") no-repeat -2px -208px; _background: url("http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ff275-1316.gif") no-repeat -2px -208px; width: 6px; height: 12px; left: -6px; top: 165px; } .qzone-div{ width: 48px; height: 49px; border-left: 1px solid #e8e8e8 !important; border-right: 1px solid #e8e8e8 !important; border-bottom: 1px solid #e8e8e8 !important; position: absolute; top: 50px; left: 0; background-color: #fff; } .tsina-div{ width: 48px; height: 50px; border-left: 1px solid #e8e8e8 !important; border-right: 1px solid #e8e8e8 !important; position: absolute; top: 100px; left: 0; background-color: #fff; } /*.qwer{*/ /*zoom: 1;*/ /*}*/ /*.qwer a{*/ /*float: left;*/ /*line-height: 32px;*/ /*cursor: pointer;*/ /*color: #3a8ceb;*/ /*}*/ /*.qwer a:hover{*/ /*opacity: .8;*/ /*filter:alpha(opacity=80);*/ /*}*/</style>
<div class="left-article-nav">
    <div class="left-article-list bdsharebuttonbox" data-tag="share_1">
        <a href="javascript:void(0);" class='article-nav-weixin'>
            <i>
            </i>
            <span class='article-nav-bg'></span>
        </a>
        <div class="to8to-tdc-wx">
            <div class="weixin-tdc">
                <!--<img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/8cd06-3630.jpg">-->
                <img style="width:40px;height:40px;padding: 43px 42px 28px 42px;" src='http://60.205.145.0/filesys/spider/pages/asset/plat8/img/0d521-5115.gif' run='0' alt="" />
                <p>扫一扫分享至朋友圈</p>
            </div>
            <div class="to8to-tdc-iconwx"></div>
        </div>
        <a href="#" class="bd-sqz" data-cmd="qzone" rel="nofollow"></a>
        <div class='article-nav-qqkongjian qzone-div'>
            <i>
            </i>
            <span class='article-nav-bg'></span>
        </div>
        <a href="#" class='bd-swb' data-cmd="tsina" rel="nofollow">
            <!--<i></i>-->
            <!--<span class='article-nav-bg'></span>--></a>
        <div class='article-nav-sina tsina-div'>
            <i>
            </i>
            <span class='article-nav-bg'></span>
        </div>
        <a href="javascript:void(0);" class='article-nav-tdc'>
            <i>
            </i>
            <span class='article-nav-bg'></span>
        </a>
        <div class="to8to-tdc">
            <div class="weixin-tdc bord-bot">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/4b206-1893.png">
                <p>一万套装修案例</p>
            </div>
            <div class="app-tdc">
                <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/6a84c-5757.png">
                <p>土巴兔APP</p>
            </div>
            <div class="to8to-tdc-icon"></div>
        </div>
    </div>
</div>
<script>var left_top = '352px';
    if (jq('.container').offset().top) {
        left_top = jq('.container').offset().top + 34;
        left_top += 'px';
    }
    jq('.left-article-nav').css('top', left_top);

    var wh = jq('.ask_solved').offset().top; //参照物高度
    var ah = jq('.quoted-outside').offset().top; //文章顶部高度
    jq(window).scroll(function() {
        var sh = jq(window).scrollTop(); //滚动条高度
        var lh = ah - sh;
        //如果滚动条高度大于参照物高度，则固定不动
        if (sh < wh) {
            jq('.left-article-nav').css('top', lh + 'px');
        } else {
            lh = ah - wh;
            jq('.left-article-nav').css('top', lh + 'px');
        }
    });</script>
<script>window._bd_share_config = {
        "common": {
            // "bdSnsKey":{},
            // "bdText":"",//内容
            // "bdUrl":"",//分享的url
            // "bdDesc":"",//分享的摘要
            // "bdMini":"2",
            // "bdMiniList":false,
            // "bdPic":"",
            // "bdStyle":"0",
            // "bdSize":"16"
        },
        "share": [{
            "tag": "share_1",
            "bdSize": "32"
        }]
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
<!-- Baidu Button END -->
<script type="text/javascript">jq('.left-article-list a').hover(function() {
        var _this = jq(this);
        var height_a = '48px';
        if (jq(this).hasClass('bd-sqz')) {
            _this = jq('.left-article-list .article-nav-qqkongjian');
            height_a = '49px';
        }
        if (jq(this).hasClass('bd-swb')) {
            _this = jq('.left-article-list .article-nav-sina');
        }
        _this.find('i').addClass('on');
        _this.find('.article-nav-bg').css('display', 'block').stop().animate({
            height: height_a,
            width: '48px',
            marginTop: '0'
        },
        500,
        function() {});
        if (_this.hasClass('article-nav-weixin')) {
            jq('.to8to-tdc-wx').css('display', 'block');
        }
        if (_this.hasClass('article-nav-tdc')) {
            jq('.to8to-tdc').css('display', 'block');
        }

    },
    function() {
        var _this = jq(this);
        if (jq(this).hasClass('bd-sqz')) {
            _this = jq('.left-article-list .article-nav-qqkongjian');
        }
        if (jq(this).hasClass('bd-swb')) {
            _this = jq('.left-article-list .article-nav-sina');
        }
        jq('.left-article-nav .article-nav-bg').stop();
        _this.find('i').removeClass('on');
        _this.find('.article-nav-bg').css({
            'display': 'none',
            'width': '0',
            'height': '0',
            'margin-top': '50%'
        });
        //        _this.css('border', '5px solid #e8e8e8');
        if (_this.hasClass('article-nav-weixin')) {
            jq('.to8to-tdc-wx').css('display', 'none');
        }
        if (_this.hasClass('article-nav-tdc')) {
            jq('.to8to-tdc').css('display', 'none');
        }
    }) jq('.article-nav-weixin').hover(function() {
        //        jq(this).siblings('.to8to-tdc-wx').toggle();
        imgobj = jq('.to8to-tdc-wx').find('img');
        imgobj.attr('run', 0);
        imgobj.attr('style', '');
        imgobj.attr('src', 'http://www.to8to.com/api/weixin/run.php?action=createSimpQrcode&url=http://m.to8to.com' + location.pathname);
    });</script>
<script type="text/javascript">var ask_info_uid = jq('#ask_info_uid').val();
    var ask_info_status = jq('#ask_info_status').val();
    var isanswer = jq('#isanswer').val();
    var ask_userid = jq('#ask_userid').val();
    var ask_userid = JSON.parse(ask_userid);
    var answeraccept = jq('#answeraccept').val();
    var to8to_uid = getCookie('to8to_uid');
    userid = '';
    if (to8to_uid != '') {
        jq.ajax({
            dataType: "text",
            type: "POST",
            async: false,
            url: "/ask/ask_post.php",
            data: {
                current_userid: to8to_uid
            },
            success: function(res) {
                jq('body').data('userid', res);
            }
        });
        var userid = jq('body').data('userid');
    }
    if (ask_info_uid != to8to_uid && ask_info_status == 0 && isanswer != 1) {
        jq('#wyhd').css('display', 'block');
        jq('#btjd').css('display', 'block');
    }
    if (ask_info_uid == to8to_uid && ask_info_status == 0) {
        jq('#bcwt').css('display', 'block');
    }
    if (ask_info_uid == to8to_uid && ask_info_status == 0 && answeraccept == 0) {
        jq('.zjda').css('display', 'inline');
    }
    bj_uid = '#bj_' + to8to_uid;
    bjda = '.bjda_' + to8to_uid;
    editquestion_uid = '.editquestion_' + to8to_uid;
    jq(ask_userid).each(function() {
        if (this == to8to_uid && ask_info_status == 0 && userid == -1) {
            jq(bjda).append("<span class='col_r'><a href='javascript:;' onclick='jq(\"" + editquestion_uid + "\").toggle();jq(\".ask_commit\").hide();' class='ask_btn_green ml10'>编辑</a></span>");
        }
        if (this == to8to_uid && ask_info_status == 0) {
            jq(bj_uid).css('display', 'inline');
        }
    });

    jq('#tijiao').click(function() {
        jq('#tijiao').attr('disabled', true);
    });
    askSolved.init();
    var askpost = 0;
    var postTag = 0;
    jq('#denglu').click(function() {
        var username = getCookie('username', true);
        if (!username) {
            alert('请登录！');
        }
    }) function answerTijiao() {
        var username = getCookie('username', true);
        if (!username) {
            askpost = 1;
            form_id = 'jiedawt';
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('answer_sign', 'as', 3600 * 1000);
        if (postTag === 0) {
            postTag++;
            jq("#jiedawt").submit();
        }
    }
    function answerTijiao2() {
        var username = getCookie('username', true);
        if (!username) {
            askpost = 1;
            form_id = 'bucong';
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('bochong_sign', 'bs', 3600 * 1000);
        jq("#bucong").submit();
    }
    jq('#showthis').click(function() {
        jq('.bg_f8f8f82').show();
        jq(this).hide();
    }) function editanswerTijiao(anid) {
        var username = getCookie('username', true);
        form_id = '#bianjida_' + anid;
        if (!username) {
            askpost = 1;
            showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
            return false;
        }
        setCookie('editanswer_sign', 'es', 3600 * 1000);
        jq(form_id).submit();
    }

    //成功赚取金币弹窗
    function jinBiNum(num) {
        var successStr = '<div class="box_mobileverify_suc zxgxbg_coin_tips">\
<div class="mod_pagetip">\
    <span class="mod_pagetip_ico"><em class="ico_tip_ok"></em></span>\
    <div class="mod_pagetip_bd">\
        <div class="mod_pagetip_title">恭喜您成功赚取<span>' + num + '</span>金币！</div>\
        <div class="mod_pagetip_btn">\
            <a href="javascript:askSolvedCloseFn();" class="btn_cancel">关闭</a>\
        </div>\
    </div>\
</div>\
</div>';

        jq('.window_box').windowBox({
            width: 454,
            title: "",
            closeFn: 'askSolvedCloseFn',
            wbcStr: successStr
        });
    }
    function askSolvedCloseFn() {
        window_box_close();
        window.location.reload();
    }

    function pop_parent_submit() {
        form_id = '#' + form_id;
        if (askpost == 1) jq(form_id).submit();
        if (getCookie('ask_help') == 1) {
            var name = get_cookie('ask_name');
            var id = getCookie('ask_id');
            askSolved.askHelpBox(name, id);
        }
        jq("#filename").show();
    }
    function get_cookie(objName) {
        var arrStr = document.cookie.split("; ");
        for (var i = 0; i < arrStr.length; i++) {
            var temp = arrStr[i].split("=");
            if (temp[0] == objName) {
                return decodeURIComponent(decodeURIComponent(temp[1]));
            }
        }
    }
    function zan(anid, askid) {
        jq.ajax({
            type: 'post',
            url: 'ask_post.php',
            data: {
                action: 'zan',
                anid: anid,
                askid: askid
            },
            dataType: "json",
            success: function(data) {
                if (data.status == 'ok') {
                    jq('#class' + anid).attr("class", "ico_praise_new");
                    var zannum = Number(jq('#show' + anid).text());
                    jq('#show' + anid).html(zannum + 1);
                    jq('#show' + anid).parents('a').css('color', "#f25618");
                } else if (data.status == 'done') {
                    alert('您已点赞。24 小时后可再赞他一次。');
                } else {
                    alert('请稍后再试');
                }
            }
        })
    }
    function showcommit(id) {
        jq('.edit_da').hide();
        var commit = jq("#showCommit_" + id);
        if (commit.css('display') == 'none') {
            commit.show();
        } else {
            commit.hide();
        }
    }
    jq('.clickstream_tag').click(function() {
        var _tag = jq(this).attr('data-ptag');
        if (_tag) {
            try {
                clickStream.getCvParams(_tag);
            } catch(e) {

}
        }
    });
    //获取补充问题
    jq(document).ready(function() {
        var ajaxbs = getCookie('bochong_sign');
        ask_id = jq('input[name="ask_id"]').val();
        if (ajaxbs == 'bs') {
            jq.ajax({
                dataType: "json",
                type: "POST",
                url: "/ask/ask_post.php",
                data: {
                    ask_id: ask_id,
                    ans_sign: 'bs'
                },
                success: function(res) {
                    jq('#bc_direction').html(res.direction);
                }
            });
        }
    });

    //获取编辑问题
    jq(document).ready(function() {
        var ajaxes = getCookie('editanswer_sign');
        editanswer_askid = jq('#editanswer_askid').val();
        if (ajaxes == 'es') {
            jq.ajax({
                dataType: "json",
                type: "POST",
                url: "/ask/ask_post.php",
                data: {
                    editanswer_askid: editanswer_askid,
                    ans_sign: 'es'
                },
                success: function(res) {
                    jq.each(res,
                    function(key, value) {
                        anid = '.edit_' + value.anid;
                        jq(anid).html(value.content);
                        jq(anid + ' .editans').html(value.content);
                    })
                }
            });
        }
    });</script>
<script type="text/javascript">var slide_height = 1700;
    var slide_show_ptag = '1_3_9_879';</script>
<!--底部上滑浮框-->
<script>if (!window.tender) {
        jq.getScript('http://static.to8to.com/gb_js/tender.js?v=1464789987');
    }</script>
