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
