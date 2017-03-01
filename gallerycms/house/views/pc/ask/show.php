<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['bodyClass'] = 'class="narrow_980"';
$this->params['tagInfos'] = $tagInfos;
?>
<script type="text/javascript">
document.body.oncopy = function() {
    alert("受保护的内容，暂不可复制！");
    return false;
}
</script>
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
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/b808b-9585.css">
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
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/fb13b-5113.gif" class="kfn-p">
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
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/best_decorate_day.js"></script>
            <script>//初始化页面根据ip接口得到的城市 展示对应微信小号
                jq(document).ready(function() {
                    city_from_ip(function(cityFromIp) {
                        showWechat(cityFromIp); //初始化对应操作
                    });
                }); function showWechat(city) {
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
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/77a4f-4217.jpg" alt="" width="90" height="106"></a>
            </div>
            <div class="ask_qustion best_answer ask_answer_li">
                <div class="title title2" id='zj' value=''>最佳答案</div>
                <ul class="clear">
                    <li class="hover">
                        <a href="http://bbs.to8to.com/space-uid-7250784.html" rel="nofollow" target="_blank" class="company_img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/bfeda-6201.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/bfeda-6201.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/80cf9-4738.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/80cf9-4738.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/c04a9-6251.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
                                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/c04a9-6251.jpg" rel="nofollow" alt="" width="54" height="54"></a>
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
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/ask.js"></script>
            <script type="text/javascript">var ids = '17694292' + ',';
                //getaskcommits(17694292, 7250784);
                //getaskcommits(17685660, 866339);
                ids += '17685660' + ',';
                //getaskcommits(17670766, 6195688);
                ids += '17670766' + ',';
                //getaskcommits(17676375, 6946165);
                ids += '17676375' + ',';</script>
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/67379-7523.css">
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
        </div>
        <?php echo $this->render('_right', ['merchantInfos' => $merchantInfos, 'tagInfos' => $tagInfos]); ?>
    </div>
</div>
<?php //echo $this->render('_left'); ?>
<?php //echo $this->render('_js-show'); ?>
