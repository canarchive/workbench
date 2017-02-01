<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssStr'] = $this->render('@gallerycms/views/plat8/pc/_pic-css');
$this->params['jsStr'] = $this->render('@gallerycms/views/plat8/pc/_pic-js');
$this->params['bodyClass'] = 'id="i_body"';
?>

<script type="text/javascript">var webScreen = window.screen.width;
    if (webScreen < 1250) {
        jq('body').addClass('narrow_980');
    } else {
        jq('body').addClass('narrow_1220');
    };</script>
<div class="zgs_header">
    <div class="zgsh_top">
        <div class="zgsh_top_center">
            <div class="zgsh_top_center_right">
                <ul>
                    <li>
                        <!--<div class="htr_username" rel="nofollow" id="user_data"></div>-->
                        <div class="fl" rel="nofollow" id="user_msgnum"></div>
                        <label id="nav_user_data">
                            <a href="http://www.to8to.com/new_login.php" class="htr_login" rel="nofollow">登录</a>
                            <a href="http://www.to8to.com/reg/" class="htr_reg" rel="nofollow">注册</a></label>
                        <!--<a href="http://www.to8to.com/new_login.php" class="htr_login" rel="nofollow">登录</a>
                        <a href="http://www.to8to.com/reg/" class="htr_reg" rel="nofollow">注册</a>-->
                        <span class="htr_line"></span>
                        <a href="http://www.to8to.com/about/shangwu.php" target="_blank" rel="nofollow">装修公司合作</a>
                        <em>咨询热线：4006-900-288</em></li>
                </ul>
            </div>
            <div class="zgsh_top_center_left">
                <ul>
                    <li>
                        <a class="logo" href="http://www.to8to.com" target="_blank"></a>
                    </li>
                    <li>
                        <a class="nav_fzlink" href="http://www.to8to.com" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_43')">回到首页</a></li>
                    <li class="on">
                        <a href="http://xiaoguotu.to8to.com/" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_44')">装修效果图</a></li>
                    <li>
                        <a href="http://www.to8to.com/gonglve/" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_45')">装修攻略</a></li>
                    <li>
                        <a class="nav_fzlink" href="http://www.to8to.com/zb/" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_46')">设计与报价</a></li>
                    <li>
                        <a class="nav_fzlink" href="http://www.to8to.com/company/" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_47')">装修公司</a></li>
                    <li>
                        <a href="http://mall.to8to.com/" target="_blank" onclick="javascript:clickStream.getCvParams('1_2_2_48')">家居商城</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="http://www.to8to.com/get_city_name.php" type="text/javascript"></script>
<script type="text/javascript">//设置uid 身份
    var to8tomsgNum = 0;
    var username = getCookie('username', 1);
    //用户id
    var uid = getCookie('uid', 1);
    jq("#weixin").hover(function() {
        jq("#erweima").toggle();
    });

    var city_id = getCookie('townid', 1);
    var current_city = city_arr[city_id];
    current_city = current_city ? current_city: '深圳';
    var current_tcode = getCookie('tcode', 1);
    current_tcode = current_tcode ? current_tcode: 'sz';

    jq(".nav_fzlink").each(function() {
        var href = jq(this).attr('href');
        if (href.indexOf("sz") > 0) {
            var new_href = href.replace(/sz/g, current_tcode);
        } else if (href.indexOf("www") > 0) {
            var new_href = href.replace(/www/g, current_tcode);
        }
        jq(this).attr("href", new_href);
    });</script>
<script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/xgtparseurl.js"></script>
<script type="text/javascript">var picList = 0;
    var piccType = 3;</script>
<div class="top_bar ">
    <input type="hidden" class="weixin-pop-quit" />
    <div class="crumbs">
        <a href="http://xiaoguotu.to8to.com">装修效果图</a>>
        <span id="tuche">
            <a href="http://xiaoguotu.to8to.com/meitu/">家居美图</a>
            <i>
            </i>
            <ul class="otherTag">
                <li>
                    <dl>
                        <dt>空间</dt>
                        <dd class='left'>
                            <a href="/list-h1s1i0">客厅</a>
                            <a href="/list-h1s2i0">卧室</a>
                            <a href="/list-h1s3i0">餐厅</a>
                            <a href="/list-h1s4i0">厨房</a>
                            <a href="/list-h1s5i0">卫生间</a>
                            <a href="/list-h1s6i0">阳台</a>
                            <a href="/list-h1s7i0">书房</a>
                            <a href="/list-h1s8i0">玄关</a></dd>
                        <dd class="right">
                            <a href="/list-h1s10i0">儿童房</a>
                            <a href="/list-h1s11i0">衣帽间</a>
                            <a href="/list-h1s12i0">花园</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>局部</dt>
                        <dd class='left'>
                            <a href="/list-h6s340i0">飘窗</a>
                            <a href="/list-h6s23i0">鞋柜</a>
                            <a href="/list-h6s14i0">隔断</a>
                            <a href="/list-h6s249i0">隐形门</a>
                            <a href="/list-h6s333i0">阁楼</a>
                            <a href="/list-h6s22i0">酒柜</a>
                            <a href="/list-h6s24i0">衣柜</a>
                            <a href="/list-h6s336i0">背景墙</a></dd>
                        <dd class="right">
                            <a href="/list-h6s19i0">窗户</a>
                            <a href="/list-h6s9i0">窗帘</a>
                            <a href="/list-h6s20i0">相片墙</a>
                            <a href="/list-h6s17i0">橱柜</a>
                            <a href="/list-h6s33i0">榻榻米</a>
                            <a href="/list-h6s18i0">楼梯</a>
                            <a href="/list-h6s21i0">吧台</a>
                            <a href="/list-h6s16i0">吊顶</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>风格</dt>
                        <dd class='left'>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=13&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">简约</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=15&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">现代</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=4&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">中式</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=2&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">欧式</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=9&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">美式</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=11&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">田园</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=6&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">新古典</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=0&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">混搭</a></dd>
                        <dd class="right">
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=12&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">地中海</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=8&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">东南亚</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=17&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">日式</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=18&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">宜家</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=19&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">北欧</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=20&amp;a7=&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">简欧</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>颜色</dt>
                        <dd class='left'>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=1&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">白色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=12&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">米色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=4&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">黄色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=6&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">橙色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=3&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">红色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=7&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">粉色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=5&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">绿色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=8&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">蓝色</a></dd>
                        <dd>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=10&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">紫色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=2&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">黑色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=14&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">咖啡色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=9&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">灰色</a>
                            <a href="/list.php?a1=0&amp;a2=1&amp;a3=&amp;a4=&amp;a5=&amp;a6=&amp;a7=13&amp;a8=&amp;a9=0&amp;p=" rel="nofollow">彩色</a></dd>
                    </dl>
                </li>
            </ul>
        </span>&nbsp;>
        <strong id="fine_n">大气时尚改造厨房设计图片</strong>
        <span class="wechatapp">
            <div class="threeDshare">
                <i>
                </i>
                <span>3D效果图</span>
                <div class="threeDshare-boxing">
                    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/063eb-6681.png" class="qrcode-3d">
                    <div>下载土巴兔APP</div>
                    <div class="g-orange">查看案例3D效果图</div>
                    <span class="arr"></span>
                </div>
            </div>
            <label class="left">
                <i>
                </i>
                <span class='collect'>收藏到微信</span>
                <span class="boximg" style="display:none;">
                    <span class="sanjiao"></span>
                    <span class="closeimg"></span>
                    <span>扫码即获10000套效果图</span>
                    <span class='img'></span>
                    <span class="newtext">收藏到微信</span></span>
            </label>
            <label class="right">
                <i>
                </i>
                <span class='phone' style="cursor:pointer;color:#f25618;" data_ptag="1_2_2_49">发送到手机</span></label>
            <label class="finework-share">
                <i class="share-ioc finework-share-share"></i>
                <span class="share-font">分享</span>
                <div class="share-link">
                    <div class="bdsharebuttonbox" data-tag="share_1">
                        <a href="#" class="bds_tsina ie-baidushare website-ioc website-tsina" data-cmd="tsina" title="新浪微博">新浪微博</a>
                        <a href="#" class="bds_qzone ie-baidushare website-ioc website-qzone" data-cmd="qzone" title="QQ空间">QQ空间</a>
                        <a href="#" class="bds_weixin ie-baidushare website-ioc website-weixin" data-cmd="weixin" title="微信">微信</a>
                        <a href="#" class="bds_tqq ie-baidushare website-ioc website-tqq" data-cmd="tqq" title="腾讯微博">腾讯微博</a>
                        <a href="#" class="bds_more ie-baidushare website-ioc share-more" data-cmd="more">更多···</a></div>
                </div>
                <span class="arrow1">◆</span>
                <span class="arrow2">◆</span></label>
        </span>
    </div>
</div>
<!-- 效果图内页Satrt -->
<div style="display:none">
    <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/ae2cc-5103.jpg" width="" height="" id="show_img" alt="大气时尚改造厨房设计图片" />
    <div id='imgids'></div>
</div>
<!-- 效果图内页Satrt -->
<div class="picture">
    <div class="container">
        <div class="right_content">
            <div class="right_part">
                <div class="zxbj" style="margin-bottom: 20px;">
                    <link rel="stylesheet" type="text/css" href="http://60.205.145.0/filesys/spider/pages/asset/plat8/css/460c4-2734.css">
                    <!-- <script src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/common_new.js" type="text/javascript"></script> -->
                    <div class="widget-frame">
                        <div class="new-container">
                            <div class="zxbj-calc-wrap zxbj-yqbj">
                                <input type="hidden" value="" name="ptag">
                                <div class="zxbj-calc-header">
                                    <div class="calc-header-total new-calc-header-total new-num-tab">
                                        <em class="new-calc-header-money">万元</em>
                                        <p class="stochastic-price-p1">
                                            <span class="new-calc-header-number new-tab-num11"></span>
                                            <span class="new-calc-header-number new-tab-num12">6</span>
                                            <span class="new-calc-header-number new-tab-num13">.</span>
                                            <span class="new-calc-header-number new-tab-num14">5</span></p>
                                        <p class="stochastic-price-p2">
                                            <span class="new-calc-header-number new-tab-num21"></span>
                                            <span class="new-calc-header-number new-tab-num22"></span>
                                            <span class="new-calc-header-number new-tab-num23"></span>
                                            <span class="new-calc-header-number new-tab-num24"></span>
                                            <span class="new-calc-header-number new-tab-num25"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="zxbj-calc-con" style="display:block">
                                    <div class="element clearfix">
                                        <select class="province" name="User_Shen" id="zxbjcalcUser_Shen" onchange="changeProvince('zxbjcalcUser_Shen','zxbjcalcUser_City','zxbjcalcUser_Town');">
                                            <option value="">省/市</option></select>
                                        <select class="city" name="User_City" id="zxbjcalcUser_City" onchange="changeTown('zxbjcalcUser_Shen','zxbjcalcUser_City','zxbjcalcUser_Town');">
                                            <option value="">市/地区</option></select>
                                        <div style="display:none;">
                                            <select class="langSelect" id="zxbjcalcUser_Town" name="User_Town">
                                                <option>县/区</option></select>
                                        </div>
                                    </div>
                                    <div class="element">
                                        <input class="text area" type="text" name="square" id="bj_square">
                                        <b>房屋面积</b>
                                        <i class="unit">m²</i></div>
                                    <div class="element clearfix szxbj-type">
                                        <select name="shi" id="szxbj_shi">
                                            <option value="1">1室</option>
                                            <option value="2">2室</option>
                                            <option value="3">3室</option>
                                            <option value="4">4室</option>
                                            <option value="5">5室</option>
                                            <option value="6">6室</option></select>
                                        <select name="ting" id="szxbj_ting">
                                            <option value="1">1厅</option>
                                            <option value="2">2厅</option>
                                            <option value="3">3厅</option>
                                            <option value="4">4厅</option>
                                            <option value="5">5厅</option>
                                            <option value="6">6厅</option></select>
                                        <select name="chu" id="szxbj_chu" class="second-line line-chu">
                                            <option value="1">1厨</option>
                                            <option value="2">2厨</option>
                                            <option value="3">3厨</option></select>
                                        <select name="wei" id="szxbj_wei" class="second-line line-wei">
                                            <option value="1">1卫</option>
                                            <option value="2">2卫</option>
                                            <option value="3">3卫</option>
                                            <option value="4">4卫</option>
                                            <option value="5">5卫</option>
                                            <option value="6">6卫</option></select>
                                        <select name="yangtai" id="szxbj_yangtai" class="second-line">
                                            <option value="1">1阳台</option>
                                            <option value="2">2阳台</option>
                                            <option value="3">3阳台</option>
                                            <option value="4">4阳台</option>
                                            <option value="5">5阳台</option>
                                            <option value="6">6阳台</option></select>
                                    </div>
                                    <div class="element">
                                        <input class="text" type="text" name="chkPhone">
                                        <b>输入手机号码，获取报价结果</b>
                                    </div>
                                    <input type="hidden" name="dangci" value="jianzhuang">
                                    <div class="element">
                                        <a class="submit-btn" href="javascript:void(0);" searchtage="">获取报价</a></div>
                                    <!-- 装修日记及装修论坛的功能 -->
                                    <div class="element glideimg" style="display:none">
                                        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/13e56-4858.png" alt=""></div>
                                </div>
                                <div class="zxbj-clac-yqbj" style="display:none">
                                    <p class="glide-text">
                                        <span class="glide-text-left">——/</span>
                                        <span class="glide-text-right">/——</span>您家的装修预算为</p>
                                    <p class="glide-unit">
                                        <span id="yqbj_total">?</span>万元</p>
                                    <div>
                                        <ul class="glide-yqbj">
                                            <li>材料费：
                                                <strong id="materials_cost">?</strong>
                                                <span>元</span>
                                                <li>人工费：
                                                    <strong id="labor_cost">?</strong>
                                                    <span>元</span>
                                                    <li>设计费：
                                                        <strong id="design_fees">?</strong>
                                                        <span>元</span>
                                                        <span id="old_design_fees" class="old_fees" style="display:none;">
                                                            <span></span>
                                                            <em>元</em></span>
                                                    </li>
                                                    <li>质检费：
                                                        <strong id="quality_fees">?</strong>
                                                        <span>元</span>
                                                        <span id="old_quality_fees" class="old_fees" style="display:none;">
                                                            <span></span>
                                                            <em>元</em></span>
                                                    </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zxbj-calc-result" style="display:none">
                                    <p class="calc-call holiday-text">*稍后装修管家将回电您，免费提供装修咨询服务</p>
                                    <p class="calc-explain">*因材料品牌及工程量不同，具体用量以实际施工为准。</p></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/plat8/js/zxbjwidgetnew.js"></script>
                    <script>(function() {
                            if (location.href.indexOf('company/') > -1) {
                                jq('.widget-frame').css('margin-top', '30px');
                                jq('.zxbj-calc-con .text').css('*width', '213px');
                            };
                            if (location.href.indexOf('scene') > -1 || location.href.indexOf('zwj') > -1) {
                                jq('.widget-frame').css('margin-bottom', '20px');
                            }

                            var year1 = new Date('2017/1/19 18:30:00');    year1_unix = year1.getTime();
                            var year2 = new Date('2017/2/2 23:59:59');
                            year2_unix = year2.getTime();
                            var year = new Date();
                            year_unix = year.getTime();
                            if (year1_unix <= year_unix && year_unix <= year2_unix) {    jq('.holiday-text').html('亲爱的业主，因春节工作人员放假(1.20-2.2)，我们将不能及时与您联系。如未接到电话，我们会在年后第一时间给您回电，请注意接听。祝您新春愉快、阖家幸福。');
                            }
                        })()</script>
                </div>
                <div class="add2" style="margin-bottom: 20px;">
                    <a href="http://mall.to8to.com/cs/sz" hidefocus target="_blank" rel="nofollow">
                        <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/4282c-2273.jpg" width="245" height="100" alt="家居商城" /></a>
                </div>
                <!-- <div class="apply_form"> -->
                <!-- <form action="" target="_blank" id="apply_form" onsubmit="return false;"> -->
                <!-- <p class="right_title_20 txt_c">申请免费设计</p> -->
                <!-- <p class="txt_c">优质装修公司免费帮您出方案</p> -->
                <!-- <div class="row gray_4"> -->
                <!-- <label></label> -->
                <!-- <input type="text" value="您的称呼" class="input_text" id="name" />-->
                <!-- </div> -->
                <!-- <div class="err_msg"><i class="err_ico"></i><span>您的称呼不能为空</span></div> -->
                <!-- <div class="row gray_4"> -->
                <!-- <label class="phone"></label> -->
                <!-- <input type="text" value="手机号码" class="input_text" id="phone" />-->
                <!-- </div> -->
                <!-- <div class="err_msg"><i class="err_ico"></i><span>请填写正确的手机号码</span></div> -->
                <!-- <div class="area"> -->
                <!-- <select class="adress" id="PUser_Shen" name="User_Shen" onChange="changeProvince('PUser_Shen','PUser_City','PUser_Town');"></select> -->
                <!-- <select class="adress" id="PUser_City" name="User_City"></select> -->
                <!-- <select class="adress" id="PUser_Town" name="User_Town"></select> -->
                <!-- </div> -->
                <!-- <div class="err_msg"><i class="err_ico"></i><span>请选择所属城市</span></div> -->
                <!-- <input type="submit" value="" class="apply_btn tran" id="applyBtn" />-->
                <!-- </form> -->
                <!-- </div> -->
                <div class="pic_author">
                    <h3>图片信息</h3>
                    <span>上传者：
                        <i id="nick">未知</i></span>
                </div>
                <div class="hot_search" id="hot_search">
                    <p class="right_title">相关标签</p>
                    <div class="hot_tag xg_tag">
                        <a class="tran" href="http://xiaoguotu.to8to.com/list-h1s4i0" target="_blank" title="厨房" rel="nofollow">厨房</a>
                        <div class='cf'></div>
                    </div>
                </div>
                <div class="you_like clear">
                    <strong class="right_title">相关图片</strong>
                    <div class="like_list">
                        <a href="http://xiaoguotu.to8to.com/p10375569.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/fc1fd-5432.jpg" alt="老房子装修改造厨房设计" title="老房子装修改造厨房设计" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10516821.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/351a8-6642.jpg" alt="大气交换空间旧物改造图片" title="大气交换空间旧物改造图片" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10547947.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/87840-4267.jpg" alt="大气时尚改造厨房设计图片" title="大气时尚改造厨房设计图片" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10410988.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/e38a0-4416.jpg" alt="现代5平米厨房改造" title="现代5平米厨房改造" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10411003.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/d9507-6510.jpg" alt="家居设计厨房改造" title="家居设计厨房改造" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10543882.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/99130-9268.jpeg" alt="大气雅致厨房设计效果图片" title="大气雅致厨房设计效果图片" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10410986.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/0b264-3832.jpg" alt="最新装修厨房改造效果图" title="最新装修厨房改造效果图" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10547949.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/49b2d-8691.jpg" alt="现代都市改造厨房设计图片" title="现代都市改造厨房设计图片" width="68" height="68" /></a>
                        <a href="http://xiaoguotu.to8to.com/p10330878.html" target='_blank'>
                            <img src="http://60.205.145.0/filesys/spider/pages/asset/plat8/img/a1c39-7262.jpg" alt="装修设计旧物改造图片 " title="装修设计旧物改造图片 " width="68" height="68" /></a>
                    </div>
                </div>
                <div class="every_look">
                    <strong class="right_title">大家都在看</strong>
                    <ul class="look_list">
                        <li>
                            <div class="intro">
                                <em class="cur_num  bgyellow ">1</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10330878.html" target='_blank' title="装修设计旧物改造图片 ">装修设计旧物改造图片</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num  bgyellow ">2</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10531450.html" target='_blank' title="大气时尚厨房设计效果图">大气时尚厨房设计效果图</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num  bgyellow ">3</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10544691.html" target='_blank' title="简洁大气时尚厨房设计效果图">简洁大气时尚厨房设计效果图</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">4</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10544690.html" target='_blank' title="浪漫大气时尚厨房设计效果图">浪漫大气时尚厨房设计效果图</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">5</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10547250.html" target='_blank' title="大气时尚别墅敞开式厨房装修效果图">大气时尚别墅敞开式厨房装修效果图</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">6</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10411000.html" target='_blank' title="北欧设计厨房改造">北欧设计厨房改造</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">7</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10410992.html" target='_blank' title="室内厨房改造设计大全">室内厨房改造设计大全</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">8</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10410991.html" target='_blank' title="装修6平米厨房改造">装修6平米厨房改造</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">9</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10431573.html" target='_blank' title="房屋改造装修设计图片">房屋改造装修设计图片</a></div>
                        </li>
                        <li>
                            <div class="intro">
                                <em class="cur_num gray_1">10</em>
                                <a class="this_title " href="http://xiaoguotu.to8to.com/p10537644.html" target='_blank' title="大气时尚楼梯设计图片大全">大气时尚楼梯设计图片大全</a></div>
                        </li>
                    </ul>
                </div>
                <div class="hot_search nomargin">
                    <strong class="right_title">热门标签</strong>
                    <div class="hot_tag">
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/3226" target="_blank" title="小户型厨房">小户型厨房</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/64043" target="_blank" title="时尚家居">时尚家居</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/66037" target="_blank" title="时尚家居">时尚家居</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/66495" target="_blank" title="时尚">时尚</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/67832" target="_blank" title="厨房改造">厨房改造</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/62987" target="_blank" title="盆栽植物">盆栽植物</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/66381" target="_blank" title="老榆木家具">老榆木家具</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/66853" target="_blank" title="黑色壁纸">黑色壁纸</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/65911" target="_blank" title="金迪木门">金迪木门</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/64759" target="_blank" title="海天大酒店">海天大酒店</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/63962" target="_blank" title="家用书柜">家用书柜</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/59485" target="_blank" title="卧室推拉门">卧室推拉门</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/65217" target="_blank" title="金碧辉煌大理石">金碧辉煌大理石</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/63680" target="_blank" title="私家庭院景观">私家庭院景观</a>
                        <a class="tran" href="http://xiaoguotu.to8to.com/search/65435" target="_blank" title="you+国际青年公寓">you+国际青年公寓</a>
                        <div class="cf"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img_content">
            <div class="img_box">
                <input type="hidden" value=i d="t_id" />
                <div class="img_div">
                    <div class="img_div_tag"></div>
                    <div class="prev cur-l"></div>
                    <div class="next cur-r"></div>
                </div>
            </div>
            <div class="img_list">
                <div class="marquee">
                    <div class="marquee_con">
                        <div class="list"></div>
                        <b id="left_Arrow" class="album_prev album_btn_style not">
                            <span></span>
                        </b>
                        <b id="right_Arrow" class="album_next album_btn_style">
                            <span></span>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->render('@gallerycms/views/plat8/pc/_pic-footer'); ?>
