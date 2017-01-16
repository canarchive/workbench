<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['cssFiles'] = [
    'new_global', 'consult_online', 'ask',
];
$this->params['jsFiles'] = [
    'jquery-1.10.2.min', 'to8torsas', 'tender', 'common_new', 
];
$this->params['formPosition'] = 'ask-index';
$this->params['formPositionName'] = '问答首页';
$this->params['bodyClass'] = 'class="narrow_1220"';
?>
<div class="global_wrap clear" id="gloWrap">
    <div class="header">
        <div class="header_top" style="display: none;">
            <div class="header_top_center">
                <div class="header_top_right">
                    <ul>
                        <li>
                            <label id="nav_user_data">
                                <a href="http://www.to8to.com/new_login.php" class="htr_login" rel="nofollow">登录</a>
                                <a href="http://www.to8to.com/reg/" class="htr_reg" rel="nofollow">注册</a></label>
                            <span class="htr_line"></span>
                            <a href="http://www.to8to.com/zb/" class="nav_fzlink" rel="nofollow">我要装修</a>
                            <span class="htr_line"></span>
                            <em>咨询热线：4006-900-288</em>
                            <span class="htr_line"></span>
                            <a href="http://www.shejiben.com" target="_blank">设计本</a>
                            <span class="htr_line"></span>
                            <a href="http://news.to8to.com/" target="_blank">新闻中心</a>
                            <span class="htr_line"></span>
                            <a href="http://jiaju.to8to.com/" target="_blank">产品百科</a></li>
                    </ul>
                </div>
                <div class="header_top_left">
                    <ul>
                        <li>
                            <em></em>
                            <label id="current_city">����</label>
                            <script type="text/javascript">// 黑名单城市
                                var no_showzwjCity = new Array(558, 959, 952, 1991, 1761, 1446, 1572, 1531, 2019, 1699, 74, 2255, 1106, 1206, 627, 2226, 1632, 1563, 814, 248, 255, 20, 229, 1460, 2763, 1464, 665, 647, 1262, 3009, 2994, 2280, 2939, 1713, 2735, 2687, 842, 2405, 2783, 2448, 2428, 2179, 1940, 2342, 1752, 3118, 218, 940, 2595, 1949, 1333, 1306, 1177, 1386, 1419, 2386, 1929, 3001, 1952, 2986, 3030, 3043, 1577, 1162, 2243, 2575, 176, 1377, 2392, 1639, 1350, 2458, 1501, 951, 637, 1511, 196, 1278, 2039, 190, 962, 1798, 1849, 1964, 653, 2095, 1976, 2494, 48, 876, 235, 1243, 2772, 99, 821, 1983, 2400, 1741, 725, 2308, 2510, 2565, 2518, 2528, 715, 3061, 3147, 3286, 3287);

                                // 根据域名来解析城市站
                                var hostname = location.hostname;
                                var tcode = getCookie('tcode', 1); //tcode = hostname.substr(0, hostname.indexOf('.'));
                                var city_id = getCookie('townid', 1),
                                cityName = getCookie('tname', 1),
                                expires = 7776000000;

                                // 如果cookie中没有城市站信息则初始化设置
                                if (!city_id) {
                                    var secondary = hostname.substr(0, hostname.indexOf('.'));
                                    typeof city_config !== 'undefined' ? setCityCookie(secondary, city_config, true) : initSetCookie();
                                } else {
                                    // 否则对比是否有更换城市站
                                    var secondary = hostname.substr(0, hostname.indexOf('.'));
                                    // 城市站有切换
                                    if (secondary != tcode && typeof city_config !== 'undefined') {
                                        setCityCookie(secondary, city_config, false);
                                    }
                                }

                                function setCityCookie(secondary, cityConfig, initlaize) {
                                    var _city = cityConfig[secondary] || null;
                                    if (_city) {
                                        tcode = secondary;
                                        city_id = _city.townid;
                                        cityName = _city.tname;
                                        setCookie('townid', _city.townid, expires, 1);
                                        setCookie('tcode', tcode, expires, 1);
                                        setCookie('tname', _city.tname, expires, 1);
                                    } else {
                                        initlaize && initSetCookie();
                                    }
                                }

                                function initSetCookie() {
                                    // 初始化深圳
                                    city_id = 1130;
                                    cityName = '深圳';
                                    tcode = 'sz';
                                    setCookie('townid', city_id, expires, 1);
                                    setCookie('tcode', tcode, expires, 1);
                                    setCookie('tname', cityName, expires, 1);
                                }

                                function to8toInArray(search, array) {
                                    for (var i in array) {
                                        if (array[i] == search) {
                                            return true;
                                        }
                                    }
                                    return false;
                                }

                                function buildMallLink() {
                                    return 'http://mall.to8to.com/cs/' + tcode;
                                }

                                jq('#current_city').html(cityName);
                                jq('.header_top').show();
                                jq(function() {
                                    // 是否显示找我家
                                    var href, new_href;
                                    jq(".nav_fzlink").each(function() {
                                        href = jq(this).attr('href');
                                        if (href.indexOf("www") > 0 && tcode.length > 0) {
                                            new_href = href.replace(/www/g, tcode);
                                            jq(this).attr("href", new_href);
                                        }
                                    });

                                    //免费设计报价菜单处理
                                    var select_ldcity_ids = new Array(1130, 1121, 1672, 1181, 2827, 1103, 591, 2920, 1695, 2929, 1547, 1196, 1681, 762, 118, 1, 2298, 317, 2013, 612, 1891, 2912, 2933, 2951, 2962, 2619, 974);
                                    var select_zxb_ids = new Array(1130, 1672, 1103, 118, 1121, 591, 1681, 2951, 1, 2619, 974, 762, 2298, 612, 2013, 1891, 317, 2912, 2933, 2920, 2929, 1695, 1547, 1196, 2827, 1181, 2962);

                                    var zxbhtml = '<a href="http://www.to8to.com/company/zxb.php" searchtage="1_7_18_604">装修保</a>';
                                    var zxdhtml = '<a href="http://www.to8to.com/zb/index11.html" searchtage="1_7_18_605">装修贷</a>';
                                    if (to8toInArray(city_id, select_ldcity_ids)) {
                                        jq(".jschgmenu").append(zxbhtml);
                                    }
                                    if (to8toInArray(city_id, select_zxb_ids)) {
                                        jq(".jschgmenu").append(zxdhtml);
                                    }
                                    jq('#mall-index-link').attr('href', buildMallLink());

                                    if (to8toInArray(city_id, no_showzwjCity)) {
                                        jq("#nevzwjurl").hide();
                                    };
                                })

                                var current_city = cityName;
                                var php_tcode = current_tcode = tcode;
                                try {
                                    headerFooter.init();
                                } catch(e) {}
                                var uid; (function() {
                                    var slideObj = jq('#side_slider'),
                                    firstChild = slideObj.find('li:first').clone(),
                                    lastChild = slideObj.find('li:last').clone();

                                    firstChild.appendTo(slideObj);
                                    lastChild.prependTo(slideObj);
                                    slideObj.find('li').removeClass('on').filter(':eq(1)').addClass('on');
                                })();

                                jq(function() {

                                    jq('#side_slider').slider({
                                        speed: false,
                                        moveSlider: true,
                                        opacity: false,
                                        markSlider: false,
                                        time: 20000
                                    },
                                    "side_slider");
                                })</script>
                            <a href="http://www.to8to.com/index.html" rel="nofollow">[切换]</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_center">
            <div class="header_center_container">
                <!--公告-->
                <div class="header_center_main">
                    <span class="hcc_logo">
                        <a href="http://www.to8to.com" class="logo" id="logourl" onClick="javascript:clickStream.getCvParams('1_9_7_1')">土巴兔装修网</a></span>
                    <!-- banner区域[[ -->
                    <div class="index_banner_s">
                        <a class="bLeft" href="javascript:void(0);">
                            <span class="banner_arrow">上一张</span></a>
                        <a class="bRight" href="javascript:void(0);">
                            <span class="banner_arrow">下一张</span></a>
                        <ul id="side_slider" class="banner_slider" style="left:-230px">
                            <li J_data="1_7_3_3">
                                <a href=" http://www.to8to.com/zb/" hidefocus target="_blank" rel="nofollow">
                                    <img src="http://pic.to8to.com/hot/528_5754.jpg?1479709254" width="230" height="70" alt="业主推荐" /></a>
                            </li>
                            <li J_data="1_7_3_2">
                                <a href="http://www.to8to.com/zb/" hidefocus target="_blank" rel="nofollow">
                                    <img src="http://pic.to8to.com/hot/528_5753.jpg?1463639826" width="230" height="70" alt="装修行业领导者" /></a>
                            </li>
                            <li J_data="1_7_3_4">
                                <a href="http://www.to8to.com/company/zxb.php" hidefocus target="_blank" rel="nofollow">
                                    <img src="http://pic.to8to.com/hot/528_5755.jpg?1463639838" width="230" height="70" alt="装修保" /></a>
                            </li>
                        </ul>
                    </div>
                    <!-- banner区域]] --></div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="header_menu">
                <ul>
                    <li>
                        <a class="nav_fzlink" href="http://www.to8to.com/" searchtage="1_1_18_153">首页</a>
                        <b>
                        </b>
                    </li>
                    <li class="has_secondMenu has_secondMenuXgt">
                        <a href="http://xiaoguotu.to8to.com/" searchtage="1_2_18_154">
                            <em class="menu_arrow_two"></em>
                            <span>效果图</span></a>
                        <dl>
                            <dd>
                                <a href="http://xiaoguotu.to8to.com/meitu/" searchtage="1_2_18_155">家居美图</a>
                                <a href="http://xiaoguotu.to8to.com/tuce/" searchtage="1_2_18_156">家居图册</a>
                                <a href="http://xiaoguotu.to8to.com/topic/" searchtage="1_2_18_157">精品专题</a>
                                <a href="http://xiaoguotu.to8to.com/tumax/" searchtage="1_2_18_262">3D云设计
                                    <i></i>
                                </a>
                            </dd>
                        </dl>
                        <b>
                        </b>
                    </li>
                    <li class="has_secondMenu on">
                        <a href="http://www.to8to.com/gonglve/" searchtage="1_3_18_158">
                            <em class="menu_arrow"></em>
                            <span>装修攻略</span></a>
                        <dl>
                            <dd>
                                <a class="has_hotIcon" href="http://www.to8to.com/riji/" searchtage="1_3_18_159">装修日记
                                    <i class="hot"></i></a>
                                <a href="http://bbs.to8to.com/forum-81-1.html" searchtage="1_3_18_199">装修论坛</a>
                                <a href="http://www.to8to.com/yezhu/" searchtage="1_3_18_160">学装修</a>
                                <a href="http://www.to8to.com/ask/" searchtage="1_3_18_161">问答</a>
                                <a class="nav_fzlink" id="nevzwjurl" searchtage="1_3_18_162" href="http://www.to8to.com/zwj/">找我家</a></dd>
                        </dl>
                        <b>
                        </b>
                    </li>
                    <li class="has_secondMenu has_hotIcon ">
                        <a class="nav_fzlink" href="http://www.to8to.com/zb/" searchtage="1_4_18_163">
                            <em class="sjbj_hot" style="right:23px"></em>
                            <em class="menu_arrow" style="right: 38px;"></em>
                            <span>设计与报价</span></a>
                        <dl>
                            <dd class="jschgmenu">
                                <a class="nav_fzlink" href="http://www.to8to.com/zb/" searchtage="1_7_18_601">免费量房设计报价</a>
                                <a href="http://www.to8to.com/yezhu/zxbj.php" searchtage="1_7_18_602">在线智能报价</a>
                                <a class="nav_fzlink" href="http://www.to8to.com/zb/index6.html" searchtage="1_7_18_603">免费验房</a></dd>
                        </dl>
                        <b>
                        </b>
                    </li>
                    <li>
                        <a class="nav_fzlink" href="http://www.to8to.com/company/" searchtage="1_5_18_168">装修公司</a>
                        <b>
                        </b>
                    </li>
                    <li class="has_secondMenu">
                        <a href="http://mall.to8to.com/" searchtage="1_23_18_169" id="mall-index-link">
                            <em class="menu_arrow"></em>
                            <span>家居商城</span></a>
                        <dl>
                            <dd>
                                <a href="http://mall.to8to.com/jiancai/" searchtage="1_23_18_170">建材城</a>
                                <a href="http://mall.to8to.com/jiaju/" searchtage="1_23_18_171">家具城</a>
                                <a href="http://mall.to8to.com/temai/" rel="nofollow" searchtage="1_23_18_172">品牌特卖</a></dd>
                        </dl>
                        <b>
                        </b>
                    </li>
                </ul>
                <div class="q_code">
                    <a href="http://www.to8to.com/apps/" class="q_code_applnk" rel="nofollow">
                        <div class="slider_container">
                            <div class="clear">
                                <div class="to8to_headgif">
                                    <em class="first-pic"></em>
                                    <div>
                                        <p>下载app立享</p>
                                        <p>12000元免费设计</p>
                                    </div>
                                </div>
                                <div class="to8to_headgif">
                                    <em class="second-pic"></em>
                                    <div>
                                        <p>工地实时直播</p>
                                        <p>一手掌控装修进度</p>
                                    </div>
                                </div>
                                <div class="to8to_headgif">
                                    <em class="third-pic"></em>
                                    <div>
                                        <p>海量家居美图</p>
                                        <p>千万真实装修案例</p>
                                    </div>
                                </div>
                                <div class="to8to_headgif">
                                    <em class="fourth-pic"></em>
                                    <div>
                                        <p>业主真实装修日记</p>
                                        <p>随时与业主互动</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <em class="right-dash"></em>
                    </a>
                    <div class="q_code_layer">
                        <a href="http://www.to8to.com/apps/" class="qcode_lnk" rel="nofollow">
                            <span class="qcode_title">下载土巴兔APP</span>
                            <span class="qcode_img" title="下载土巴兔手机版"></span>
                            <em class="left-loadapp">
                                <span>一站式装修神器</span></em>
                        </a>
                        <a href="http://www.to8to.com/apps/index.php?act=apps_wechat" class="qcode_lnk" rel="nofollow">
                            <span class="qcode_title wechat_title">关注微信公众号</span>
                            <span class="qcode_img wech" title="1万套装修案例"></span>
                            <em class="right-wechat">
                                <span>1万套装修案例</span></em>
                        </a>
                        <em class="fider_backpng"></em>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ask_index">
        <div class="global_pie">
            <div class="global_pie_container">
                <ul>
                    <li class="has_arrow">
                        <a href="http://www.to8to.com/gonglve/">装修攻略</a>
                        <span class="nav_arrow_right"></span>
                    </li>
                    <li>问答</li></ul>
            </div>
        </div>
        <div class="container clear">
            <div class="col3_1">
                <div class="ask_type" id="accordion">
                    <div class="ask_type_item" style="top:0;z-index:1;">
                        <h3 class="item_hd">
                            <a href="more-h2i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index1"></i>家装设计
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h2s0i5" class="type_lnk">装修风水</a>
                            <a href="more-h2s1i5" class="type_lnk">装修风格</a>
                            <a href="more-h2s2i5" class="type_lnk">客厅</a>
                            <a href="more-h2s3i5" class="type_lnk">玄关</a>
                            <a href="more-h2s4i5" class="type_lnk">过道</a>
                            <a href="more-h2s5i5" class="type_lnk">卧室</a>
                            <a href="more-h2s6i5" class="type_lnk">书房</a>
                            <a href="more-h2s7i5" class="type_lnk">餐厅</a>
                            <a href="more-h2s8i5" class="type_lnk">厨房</a>
                            <a href="more-h2s9i5" class="type_lnk">阳台</a>
                            <a href="more-h2s10i5" class="type_lnk">花园</a>
                            <a href="more-h2s11i5" class="type_lnk">卫生间</a>
                            <a href="more-h2s12i5" class="type_lnk">儿童房</a>
                            <a href="more-h2s13i5" class="type_lnk">衣帽间</a>
                            <a href="more-h2s14i5" class="type_lnk">别墅</a>
                            <a href="more-h2s15i5" class="type_lnk">小户型</a>
                            <a href="more-h2s16i5" class="type_lnk">二手房装修</a>
                            <a href="more-h2s17i5" class="type_lnk">复式</a>
                            <a href="more-h2s18i5" class="type_lnk">样板间</a>
                            <a href="more-h2s19i5" class="type_lnk">装饰柜</a>
                            <a href="more-h2s20i5" class="type_lnk">其他</a></div>
                    </div>
                    <div class="ask_type_item" style="top:203px;z-index:2;">
                        <h3 class="item_hd">
                            <a href="more-h3i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index2"></i>装修流程
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h3s0i5" class="type_lnk">新房验收</a>
                            <a href="more-h3s1i5" class="type_lnk">收费咨询</a>
                            <a href="more-h3s2i5" class="type_lnk">装修预算</a>
                            <a href="more-h3s3i5" class="type_lnk">装修合同</a>
                            <a href="more-h3s4i5" class="type_lnk">施工工艺</a>
                            <a href="more-h3s5i5" class="type_lnk">业主维权</a>
                            <a href="more-h3s6i5" class="type_lnk">环保检测</a>
                            <a href="more-h3s7i5" class="type_lnk">装修公司</a>
                            <a href="more-h3s8i5" class="type_lnk">完工验收</a>
                            <a href="more-h3s9i5" class="type_lnk">水电改造</a>
                            <a href="more-h3s10i5" class="type_lnk">维护保养</a>
                            <a href="more-h3s11i5" class="type_lnk">其它</a></div>
                    </div>
                    <div class="ask_type_item" style="top:299px;z-index:3;">
                        <h3 class="item_hd">
                            <a href="more-h4i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index3"></i>家居产品
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h4s0i5" class="type_lnk">家具</a>
                            <a href="more-h4s1i5" class="type_lnk">卫浴设备</a>
                            <a href="more-h4s2i5" class="type_lnk">灯具/照明</a>
                            <a href="more-h4s3i5" class="type_lnk">儿童家具/用品</a>
                            <a href="more-h4s4i5" class="type_lnk">家用电器</a>
                            <a href="more-h4s5i5" class="type_lnk">橱柜</a>
                            <a href="more-h4s6i5" class="type_lnk">厨卫电器</a>
                            <a href="more-h4s7i5" class="type_lnk">厨房用具</a>
                            <a href="more-h4s8i5" class="type_lnk">地毯</a>
                            <a href="more-h4s9i5" class="type_lnk">饰品</a>
                            <a href="more-h4s10i5" class="type_lnk">庭院/花园</a>
                            <a href="more-h4s11i5" class="type_lnk">暖气设备</a>
                            <a href="more-h4s12i5" class="type_lnk">家庭影院</a>
                            <a href="more-h4s13i5" class="type_lnk">壁炉/火炉</a>
                            <a href="more-h4s14i5" class="type_lnk">天花板/吊顶</a>
                            <a href="more-h4s15i5" class="type_lnk">床上用品</a>
                            <a href="more-h4s16i5" class="type_lnk">窗帘/配件</a>
                            <a href="more-h4s17i5" class="type_lnk">日杂用品</a>
                            <a href="more-h4s18i5" class="type_lnk">其他</a>
                            <a href="more-h4s19i5" class="type_lnk">家居生活</a>
                            <a href="more-h4s20i5" class="type_lnk">婚嫁</a></div>
                    </div>
                    <div class="ask_type_item" style="top:395px;z-index:4;">
                        <h3 class="item_hd">
                            <a href="more-h5i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index4"></i>装饰材料
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h5s0i5" class="type_lnk">夹板木材</a>
                            <a href="more-h5s1i5" class="type_lnk">地板</a>
                            <a href="more-h5s2i5" class="type_lnk">涂料/油漆</a>
                            <a href="more-h5s3i5" class="type_lnk">瓷砖/石材</a>
                            <a href="more-h5s4i5" class="type_lnk">门窗</a>
                            <a href="more-h5s5i5" class="type_lnk">五金</a>
                            <a href="more-h5s6i5" class="type_lnk">壁纸</a>
                            <a href="more-h5s7i5" class="type_lnk">水龙头</a>
                            <a href="more-h5s8i5" class="type_lnk">建筑构件</a>
                            <a href="more-h5s9i5" class="type_lnk">管材管件</a>
                            <a href="more-h5s10i5" class="type_lnk">其他</a></div>
                    </div>
                    <div class="ask_type_item" style="top:491px;z-index:5;">
                        <h3 class="item_hd">
                            <a href="more-h6i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index5"></i>公装设计
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h6s0i5" class="type_lnk">办公楼</a>
                            <a href="more-h6s1i5" class="type_lnk">商场</a>
                            <a href="more-h6s2i5" class="type_lnk">专卖店</a>
                            <a href="more-h6s3i5" class="type_lnk">酒店宾馆/客房</a>
                            <a href="more-h6s4i5" class="type_lnk">餐饮酒吧</a>
                            <a href="more-h6s5i5" class="type_lnk">歌舞迪厅</a>
                            <a href="more-h6s6i5" class="type_lnk">休闲健身</a>
                            <a href="more-h6s7i5" class="type_lnk">体育场馆</a>
                            <a href="more-h6s8i5" class="type_lnk">会展剧场</a>
                            <a href="more-h6s9i5" class="type_lnk">博物馆</a>
                            <a href="more-h6s10i5" class="type_lnk">图书馆</a>
                            <a href="more-h6s11i5" class="type_lnk">学校</a>
                            <a href="more-h6s12i5" class="type_lnk">医院</a>
                            <a href="more-h6s13i5" class="type_lnk">机场车船站</a>
                            <a href="more-h6s14i5" class="type_lnk">工厂</a>
                            <a href="more-h6s15i5" class="type_lnk">公园广场</a>
                            <a href="more-h6s16i5" class="type_lnk">会所</a>
                            <a href="more-h6s17i5" class="type_lnk">园林</a>
                            <a href="more-h6s18i5" class="type_lnk">其他</a></div>
                    </div>
                    <div class="ask_type_item" style="top:587px;z-index:6;">
                        <h3 class="item_hd">
                            <a href="more-h7i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index6"></i>房产知识
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h7s0i5" class="type_lnk">购房资格</a>
                            <a href="more-h7s1i5" class="type_lnk">购房税费</a>
                            <a href="more-h7s2i5" class="type_lnk">委托担保</a>
                            <a href="more-h7s3i5" class="type_lnk">交易流程</a>
                            <a href="more-h7s4i5" class="type_lnk">产权产证</a>
                            <a href="more-h7s5i5" class="type_lnk">购房首付</a>
                            <a href="more-h7s6i5" class="type_lnk">贷款利率</a>
                            <a href="more-h7s7i5" class="type_lnk">贷款流程</a>
                            <a href="more-h7s8i5" class="type_lnk">贷款类型</a>
                            <a href="more-h7s9i5" class="type_lnk">公积金</a>
                            <a href="more-h7s10i5" class="type_lnk">商品房</a>
                            <a href="more-h7s11i5" class="type_lnk">限价房</a>
                            <a href="more-h7s12i5" class="type_lnk">经适保障房</a>
                            <a href="more-h7s13i5" class="type_lnk">民房土地</a>
                            <a href="more-h7s14i5" class="type_lnk">房产政策</a>
                            <a href="more-h7s15i5" class="type_lnk">合同协议</a>
                            <a href="more-h7s16i5" class="type_lnk">房屋性质</a>
                            <a href="more-h7s17i5" class="type_lnk">其他</a></div>
                    </div>
                    <div class="ask_type_item" style="top:683px;z-index:7;">
                        <h3 class="item_hd">
                            <a href="more-h8i5" target="_blank">
                                <i class="ask_ico_index ask_ico_index7"></i>技术专区
                                <i class="arrow_green"></i></a>
                        </h3>
                        <div class="item_bd">
                            <a href="more-h8s0i5" class="type_lnk">3DMAX</a>
                            <a href="more-h8s1i5" class="type_lnk">VR</a>
                            <a href="more-h8s2i5" class="type_lnk">LS</a>
                            <a href="more-h8s3i5" class="type_lnk">AutoCAD</a>
                            <a href="more-h8s4i5" class="type_lnk">Photoshop</a>
                            <a href="more-h8s5i5" class="type_lnk">电脑网络问题</a>
                            <a href="more-h8s6i5" class="type_lnk">模型材质</a>
                            <a href="more-h8s7i5" class="type_lnk">培训认证</a>
                            <a href="more-h8s8i5" class="type_lnk">手机问题</a></div>
                    </div>
                </div>
                <div class=" ask_shopping_box">
                    <a class="clickstream_tag" href="http://mall.to8to.com/temai/12585.html" data-ptag="1_3_4_13" target="_blank" title="Mlily/梦百合 释梦清氧记忆绵床垫  托玛琳内芯带您感受大自然的清新">
                        <img alt="Mlily/梦百合 释梦清氧记忆绵床垫  托玛琳内芯带您感受大自然的清新" src="http://pic1.to8to.com/tumall/a81f5d607fda552eff8a796e54177e6a.jpg" style="width: 180px;height: 180px;"></a>
                    <div class="price_list">
                        <a class="f_c_003 lh20 clickstream_tag" data-ptag="1_3_4_13" href="http://mall.to8to.com/temai/12585.html" title="Mlily/梦百合 释梦清氧记忆绵床垫  托玛琳内芯带您感受大自然的清新" target="_blank">Mlily/梦百合 释梦清氧记忆绵床垫 托玛琳内芯带您感受大自然的清新</a>
                        <em class="big_em">￥
                            <span>5699</span></em>
                        <em>
                            <del>￥
                                <span>5699</span></del>
                        </em>
                    </div>
                    <a class="clickstream_tag" href="http://mall.to8to.com/temai/17752.html" data-ptag="1_3_4_14" target="_blank" title="卡贝  毛巾架太空铝卫生间折叠置物架浴巾架 浴室卫浴五金挂件套装">
                        <img alt="卡贝  毛巾架太空铝卫生间折叠置物架浴巾架 浴室卫浴五金挂件套装" src="http://pic.to8to.com/tumall/2016/03/03/c8ff6d070f685878def46d455d309e7e.jpg" style="width: 180px;height: 180px;"></a>
                    <div class="price_list">
                        <a class="f_c_003 lh20 clickstream_tag" data-ptag="1_3_4_14" href="http://mall.to8to.com/temai/17752.html" title="卡贝  毛巾架太空铝卫生间折叠置物架浴巾架 浴室卫浴五金挂件套装" target="_blank">卡贝 毛巾架太空铝卫生间折叠置物架浴巾架 浴室卫浴五金挂件套装</a>
                        <em class="big_em">￥
                            <span>168</span></em>
                        <em>
                            <del>￥
                                <span>420</span></del>
                        </em>
                    </div>
                    <a class="clickstream_tag" href="http://mall.to8to.com/temai/16727.html" data-ptag="1_3_4_15" target="_blank" title="安尼熊/ANNE HOME 邦尼尔弹簧床垫 双面使用设计 AN-T-B23">
                        <img alt="安尼熊/ANNE HOME 邦尼尔弹簧床垫 双面使用设计 AN-T-B23" src="http://pic.to8to.com/tumall/2015/09/29/c1978212040d5b9f23069dbe4e38d373.jpg" style="width: 180px;height: 180px;"></a>
                    <div class="price_list">
                        <a class="f_c_003 lh20 clickstream_tag" data-ptag="1_3_4_15" href="http://mall.to8to.com/temai/16727.html" title="安尼熊/ANNE HOME 邦尼尔弹簧床垫 双面使用设计 AN-T-B23" target="_blank">安尼熊/ANNE HOME 邦尼尔弹簧床垫 双面使用设计 AN-T-B23</a>
                        <em class="big_em">￥
                            <span>1377</span></em>
                        <em>
                            <del>￥
                                <span>2330</span></del>
                        </em>
                    </div>
                </div>
            </div>
            <div class="col3_2">
                <form id="asksearchform" action="http://www.to8to.com/ask/search.php" method="get">
                    <div class="ask_search">
                        <div class="ask_search_bd clear">
                            <div class="search_input">
                                <i class="ask_ico_search"></i>
                                <input type="text" class="text" name="keyword">
                                <label for="" class="txt_lbl">提问前请先搜索，看看你问题其他兔子是否已经问过</label></div>
                            <a href="javascript:;" onclick="asktijiao();" class="search_btn">搜索答案</a></div>
                    </div>
                </form>
                <div class="ask_sec ask_seca">
                    <div class="sec_hd">
                        <h2>精华问答</h2></div>
                    <div class="sec_bd">
                        <a href="http://www.to8to.com/ask/k4359918.html" class="seca_bdl" target="_blank">
                            <img src="http://pic.to8to.com/hot/529_8189.jpg?1483955796" alt="蜗居不”窝居“  小户型大变身！" width="379" height="298">
                            <span class="seca_bdl_info ect">蜗居不”窝居“ 小户型大变身！</span>
                            <span class="ie_bg"></span>
                        </a>
                        <div class="seca_bdr">
                            <div class="seca_bdr_top">
                                <div class="top_hd clear">
                                    <span class="ask_ico_hot">热门</span>
                                    <a href="k3493424.html" target="_blank" class="ect">问问各位厨房没有窗怎么办</a></div>
                                <div class="top_bd">
                                    <i class="ask_ico_quote"></i>1、尽量用推拉门 增加采光面 2、除油烟机外 可以加多一两台排气扇天花上（走烟道） 排气通风 3、一般的房屋设计中都考虑到室内的通风问题，如果厨房没有设窗户那肯定有通风道，在使用中可以安装抽油烟机或排风扇将油烟排入通 ...</div>
                            </div>
                            <ul class="seca_bdr_list">
                                <li>
                                    <a href="k5415821.html" target="_blank" class="ect">
                                        <i class="ask_ico_li"></i>苏州买房注意事项有哪些谁说说看</a>
                                </li>
                                <li>
                                    <a href="k3539620.html" target="_blank" class="ect">
                                        <i class="ask_ico_li"></i>客厅生活阳台装修需要注意哪几点？</a>
                                </li>
                                <li>
                                    <a href="k971213.html" target="_blank" class="ect">
                                        <i class="ask_ico_li"></i>房门冲楼梯影响风水吗？</a>
                                </li>
                                <li>
                                    <a href="k2188152.html" target="_blank" class="ect">
                                        <i class="ask_ico_li"></i>全实木家具哪种木材好？</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ask_sec ask_secb">
                    <div class="sec_hd">
                        <h2>问答专辑</h2>
                        <a href="topics/" class="hd_lnk" target="_blank">更多
                            <i class="arrow_gray"></i></a>
                    </div>
                    <div class="sec_bd">
                        <ul class="clear">
                            <li>
                                <a href="http://www.to8to.com/ask/topic_fangchanhetongnaxieshier" target="_blank" class="secb_img">
                                    <img src="http://pic.to8to.com//zt/2017/01/20170104_0e682047e83ffeb4967bBbf3hVAZXqtd.jpg" alt="房产合同那些事儿" width="155" height="107"></a>
                                <div class="secb_info">
                                    <a href="http://www.to8to.com/ask/topic_fangchanhetongnaxieshier" target="_blank" class="ect">房产合同那些事儿</a>
                                    <div class="secb_info_scan">
                                        <i class="ico_scan"></i>161</div>
                                    <div class="secb_info_des">尽管房价再高，能拥有一套自己的住房仍然是大家努力奋斗的目标，与其相关的房屋问题可不少，规范的合同不仅 ...</div></div>
                            </li>
                            <li>
                                <a href="http://www.to8to.com/ask/topic_jiajushounabaodian" target="_blank" class="secb_img">
                                    <img src="http://pic1.to8to.com//zt/2016/12/20161201_ad545c9a301fa8833e22DqVAc5FCOLYZ.jpg" alt="家居收纳宝典" width="155" height="107"></a>
                                <div class="secb_info">
                                    <a href="http://www.to8to.com/ask/topic_jiajushounabaodian" target="_blank" class="ect">家居收纳宝典</a>
                                    <div class="secb_info_scan">
                                        <i class="ico_scan"></i>310</div>
                                    <div class="secb_info_des">一个井然有序的家，不仅让人住的舒心，而且能合理的利用空间，如何将日杂用品进行收纳，确实是个技术活，小编给 ...</div></div>
                            </li>
                            <li>
                                <a href="http://www.to8to.com/ask/topic_nuandongjihua" target="_blank" class="secb_img">
                                    <img src="http://pic.to8to.com//zt/2016/11/20161124_eb55811b9705b26e9f12klvTTFCwp3PE.jpg" alt="2016暖冬计划" width="155" height="107"></a>
                                <div class="secb_info">
                                    <a href="http://www.to8to.com/ask/topic_nuandongjihua" target="_blank" class="ect">2016暖冬计划</a>
                                    <div class="secb_info_scan">
                                        <i class="ico_scan"></i>465</div>
                                    <div class="secb_info_des">冬天，北半球一年当中最寒冷的季节，中国习惯指立冬到立春的三个月时间，也指农历“十、十一、十二”三个月 ...</div></div>
                            </li>
                            <li>
                                <a href="http://www.to8to.com/ask/topic_zhuangxiuwuranweihaiyujiejue" target="_blank" class="secb_img">
                                    <img src="http://pic.to8to.com//zt/2016/11/20161110_773e647fcc44c589af12wRrGHjkJtd18.jpg" alt="装修污染危害解决" width="155" height="107"></a>
                                <div class="secb_info">
                                    <a href="http://www.to8to.com/ask/topic_zhuangxiuwuranweihaiyujiejue" target="_blank" class="ect">装修污染危害解决</a>
                                    <div class="secb_info_scan">
                                        <i class="ico_scan"></i>659</div>
                                    <div class="secb_info_des">装修在使居室变得舒适与美观的同时，也给室内环境造成了污染。世界卫生组织将由室内污染引起的一系列人 ...</div></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ask_sec ask_secd">
                    <div class="sec_hd">
                        <h2>大家都在问</h2>
                        <a href="more3.html" class="hd_lnk" target="_blank" rel="nofollow">更多
                            <i class="arrow_gray"></i></a>
                    </div>
                    <div class="sec_bd">
                        <ul>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k4375866.html" target="_blank" class="ect">山东青砖哪家价格便宜？</a>
                                    <div class="info_date">2016-10-03 09:01:46</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k3469475.html" target="_blank" class="ect">室内电线线槽安装谁知道怎么开？</a>
                                    <div class="info_date">2016-06-26 19:02:42</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>5</em>回答</div>
                                <div class="answer_info">
                                    <a href="k499586.html" target="_blank" class="ect">混凝土空心砖规格是多少</a>
                                    <div class="info_date">2014-12-21 09:29:00</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k1133245.html" target="_blank" class="ect">请问独立袋装弹簧床垫厂家哪些比较有名？</a>
                                    <div class="info_date">2015-10-24 14:29:55</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k1935087.html" target="_blank" class="ect">别墅外墙用什么材料</a>
                                    <div class="info_date">2016-02-15 13:31:33</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k4072602.html" target="_blank" class="ect">塑料螺纹管接头的价格怎么样？</a>
                                    <div class="info_date">2016-09-01 15:36:49</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k2868459.html" target="_blank" class="ect">贵州最好的风水宝地是哪里</a>
                                    <div class="info_date">2016-05-20 10:52:26</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k1309657.html" target="_blank" class="ect">山东轻触开关哪家公司做的质量最好？</a>
                                    <div class="info_date">2015-11-22 19:28:58</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k2039338.html" target="_blank" class="ect">花岗岩绳锯一般多少钱？</a>
                                    <div class="info_date">2016-02-26 10:14:48</div></div>
                            </li>
                            <li>
                                <div class="answer_num">
                                    <em>3</em>回答</div>
                                <div class="answer_info">
                                    <a href="k3618779.html" target="_blank" class="ect">木材装修公司常用的木材都有哪些？</a>
                                    <div class="info_date">2016-07-15 15:08:34</div></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ask_sec ask_secc">
                    <div class="sec_hd">
                        <h2>新增回答</h2></div>
                    <div class="sec_bd">
                        <ul class="clear">
                            <li class="one">
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-5364598.html" rel="nofollow" target="_blank" class="company_lnk ect">Guo5211</a>回答
                                    <a href="k6373331.html" target="_blank" class="question_lnk ect">求大神解答电脑显示器什么牌子性价比好</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">你好： 个人推荐AOC显示器还不错，超清分辨率，清晰可触，广视角IPS面板，100%sRGB色彩空间。采用先进的（DC直流）背光，不闪式技术，不闪屏，消除了在亮光条件下闪屏的危害，有效防止眼部疲劳，更护眼。 三星的电脑显示器也不错，它在色彩和明暗度，对比度和眼睛得舒适方面是不错的，不过质量也是中等 希望能帮到你</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li>
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6195688.html" rel="nofollow" target="_blank" class="company_lnk ect">21深蓝_3296</a>回答
                                    <a href="k6372892.html" target="_blank" class="question_lnk ect">想知道电脑屏幕显示不清楚怎么调</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">1、将分辨率拉到最高； 2、按下显示器上的Auto（自动）键进行自动调整，全屏显示一片空白效果可能准一些； 3、降低屏幕亮度和/或对比度； 4、杀毒，看是不是有病毒作祟。 希望我的回答对你有所帮助！</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li class="one">
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6946165.html" rel="nofollow" target="_blank" class="company_lnk ect">米甲大傻烂</a>回答
                                    <a href="k6372178.html" target="_blank" class="question_lnk ect">地砖粘合剂价格谁能告诉下我</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">价格在20元左右，胶接（粘合、粘接、胶结、胶粘）是指同质或异质物体表面用胶粘剂连接在一起的技术，具有应力分布连续，重量轻，或密封，多数工艺温度低等特点。胶接特别适用于不同材质、不同厚度、超薄规格和复杂构件的连接。胶接近代发展最快，应用行业极广，并对高新科学技术进步和人民日常生活改善有重大影响。因此，研究、开发和生产各类胶粘剂十分重要。 价格来源网络仅供参考</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li>
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6195688.html" rel="nofollow" target="_blank" class="company_lnk ect">21深蓝_3296</a>回答
                                    <a href="k6372870.html" target="_blank" class="question_lnk ect">请问地板用什么擦才干净</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">用抹布蘸上洗米水直接在地板上擦拭，然后再进行干擦。当然，也可以首先把洗米水均匀地喷洒在地板上，等待5分钟，这样，地板上的脏物就自动浮到上面来。使米糠水在地板上形成膜。这时，无须用力，轻轻地用旧棉织衣物反复擦拭4-5次，仔细地将地板擦干净，再放置15分钟，使地板晾干，然后再给地板打蜡。</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li class="one">
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6217724.html" rel="nofollow" target="_blank" class="company_lnk ect">Y0816</a>回答
                                    <a href="k6369415.html" target="_blank" class="question_lnk ect">我想问彻底删除的文件怎么恢复</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">　　1、打开360安全卫士主界面后，点击功能大全按钮进入功能大全界面，找到文件恢复图标，点击添加该项功能。 　　2、安装完该功能后，点击进入360文件恢复界面，选择被删除文件所在的磁盘，点击开始扫描，便会显示出所有被彻底删除的文件列表，之后在文件列表里找到想要恢复的文件(可点击选择)，点击恢复选中的文件按钮。 　　3、点击恢复按钮后，会弹出一个对话框，选择要将文件恢复的位置，点击确定，文件便恢复在了选定的文件夹里了。</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li>
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6946165.html" rel="nofollow" target="_blank" class="company_lnk ect">米甲大傻烂</a>回答
                                    <a href="k6372626.html" target="_blank" class="question_lnk ect">哪位说说镀锌钢管25价格</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">镀锌钢管25价格是¥3700 /吨 镀锌钢管 表面有热浸镀或电镀锌层的焊接钢管。镀锌可增加钢管的抗腐蚀能力，延长使用寿命。镀锌管的用途很广，除作输水、煤气、油等一般低压力流体的管线管外，还用作石油工业特别是海洋油田的油井管、输油管，化工焦化设备的油加热器、冷凝冷却器、煤馏洗油交换器用管，以及栈桥管桩、矿山坑道的支撑架用管等。 价格来源网络，仅供参考！</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li class="one">
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-5364598.html" rel="nofollow" target="_blank" class="company_lnk ect">Guo5211</a>回答
                                    <a href="k6372321.html" target="_blank" class="question_lnk ect">电源没接地怎么办知道的亲告诉下</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">你好； 如果家里没有地线，用角钢或者镀锌圆钢打入地下至少2米以上。并安装漏电断路器，因为这种接地没有合零线相连，故障电流是通过大地和变压器中性点形成回路的，如果安装空气开关，接地电阻变大有可能开关不能跳闸。 希望能帮到你</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li>
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6145919.html" rel="nofollow" target="_blank" class="company_lnk ect">张经理1302</a>回答
                                    <a href="k6372365.html" target="_blank" class="question_lnk ect">电缆桥架安装费用谁能告诉下我</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">电缆桥架安装费用：2000元，电缆桥架安装包括：综合楼桥架的安装、工艺楼桥架的安装、废水楼桥架的安装、1#、2#吸收塔桥架安装，1#、2#吸收塔保温间及1#、2#增压机房桥架的安装。室内桥架采用梯级式电缆桥架,室外采用托盘式电缆桥架。脱硫区域内电缆通道主要采用电缆桥架沿墙、柱、罐体外部和室内9米、13米层地面两种分层敷设方式。电缆在桥架上是由上到下分层敷设的；分别为高压动力电缆、低压动力电缆、控制电缆，动力电缆和控制电缆在同一桥架敷设时，桥架内加装隔离板，将动力电缆缆和控制电缆分开。设计院有特殊施工要求时按设计院图纸施工，其它按施工验收规范及有关规程的要求进行施工。以上价格来源网络仅供参考。</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li class="one">
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6925546.html" rel="nofollow" target="_blank" class="company_lnk ect">创新挑战</a>回答
                                    <a href="k6372504.html" target="_blank" class="question_lnk ect">哪位说说东鹏墙砖怎么样</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">你好，东鹏的瓷片和鹰牌的地砖是目前国内市场上无论在，整度，光泽度，还有大小误差上是最好的2个品牌东鹏的地砖没鹰牌的好，鹰的瓷片没东鹏的好，不过这2个品牌的价格比一般的高了很多如果非高档别墅的话建议用其他品牌还有···装修业有句俗话 烂砖不烂墙最后有没有效果还是要看工人的技术的！希望可以帮到你！</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                            <li>
                                <div class="secc_lihd">
                                    <a href="http://bbs.to8to.com/space-uid-6804271.html" rel="nofollow" target="_blank" class="company_lnk ect">小彬1995</a>回答
                                    <a href="k6371379.html" target="_blank" class="question_lnk ect">求大神解答电脑搜索不到wifi怎么办</a></div>
                                <div class="secc_libd">
                                    <div class="secc_lians ect">解决方法; 1，无线网卡是否打开。 2打开网络配置，看看无线连接上是不是一个叉号。 3，在计算机上单击右键，设备管理器，打开后，找网络适配器，，点击网络适配器左边的小加号，一般会出现两个网卡，看看上面是否有叉号，如果有，点击右键，启动。再不就拍键盘照，电脑网络连接的照片我看看。拍照时调整下手机相机的白平衡，关掉闪光灯。</div>
                                    <div class="secc_litime">2小时前</div></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col3_3">
                <div class="ask_side ask_user">
                    <div class="ask_user_top">
                        <div class="user_log clear" style="display:none;">
                            <div class="user_info clear">
                                <a href="http://www.to8to.com/my/" target="_blank" class="user_img">
                                    <img src="" width="60" height="60"></a>
                                <div class="user_name">
                                    <a href="http://www.to8to.com/my/" target="_blank" class="ect"></a>
                                    <div class="user_jiffen">积分：</div></div>
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
                <div class="ask_side ask_mod_fb" style="display:none">
                    <div class="side_hd">懒人装修捷径</div>
                    <div class="side_hd2">免费第三方监理，装修质量有保障</div>
                    <div class="side_bd mod_form mod_form_wide">
                        <div class="form_line">
                            <div class="element">
                                <div class="text_wrap">
                                    <input id="your_name" name="your_name" value="" type="text" class="text">
                                    <em class="text_lbl">您的称呼</em></div>
                            </div>
                        </div>
                        <div class="form_line">
                            <div class="element">
                                <div class="text_wrap">
                                    <input id="your_phone" name="your_phone" value="" type="text" class="text">
                                    <em class="text_lbl">手机号码</em></div>
                            </div>
                        </div>
                        <div class="form_line form_line_btn">
                            <div class="element">
                                <input type="button" class="btn_org" value="免费申请"></div>
                        </div>
                    </div>
                </div>
                <div class="ask_side">
                    <div class="side_hd">装修公司排行榜
                        <em>(最近7天)</em></div>
                    <div class="side_bd company_rank">
                        <ul>
                            <li>
                                <span class="rank_num">1</span>
                                <a href="http://wh.to8to.com/zs/866339/" rel="nofollow" target="_blank" class="rank_img">
                                    <img src="http://pic.to8to.com/user/39/headphoto_866339.jpg?1378092245" alt="皇氏装饰" width="55" height="55"></a>
                                <div class="rank_name">
                                    <a href="http://wh.to8to.com/zs/866339/" rel="nofollow" target="_blank">皇氏装饰</a>
                                    <p>回答数：9088</p>
                                </div>
                            </li>
                            <li>
                                <span class="rank_num">2</span>
                                <a href="http://suzhou.to8to.com/zs/874756/" rel="nofollow" target="_blank" class="rank_img">
                                    <img src="http://pic.to8to.com/user/56/headphoto_874756.jpg?1396416684" alt="金翅鸟装饰" width="55" height="55"></a>
                                <div class="rank_name">
                                    <a href="http://suzhou.to8to.com/zs/874756/" rel="nofollow" target="_blank">金翅鸟装饰</a>
                                    <p>回答数：2234</p>
                                </div>
                            </li>
                            <li>
                                <span class="rank_num">3</span>
                                <a href="http://cd.to8to.com/zs/5040643/" rel="nofollow" target="_blank" class="rank_img">
                                    <img src="http://pic.to8to.com/user/43/headphoto_5040643.jpg?1470300118" alt="顶格装饰" width="55" height="55"></a>
                                <div class="rank_name">
                                    <a href="http://cd.to8to.com/zs/5040643/" rel="nofollow" target="_blank">顶格装饰</a>
                                    <p>回答数：1906</p>
                                </div>
                            </li>
                            <li>
                                <span class="rank_num">4</span>
                                <a href="http://nj.to8to.com/zs/1407677/" rel="nofollow" target="_blank" class="rank_img">
                                    <img src="http://pic.to8to.com/user/77/headphoto_1407677.jpg?1403321664" alt="焦点装饰" width="55" height="55"></a>
                                <div class="rank_name">
                                    <a href="http://nj.to8to.com/zs/1407677/" rel="nofollow" target="_blank">焦点装饰</a>
                                    <p>回答数：1309</p>
                                </div>
                            </li>
                            <li>
                                <span class="rank_num">5</span>
                                <a href="http://cd.to8to.com/zs/1346983/" rel="nofollow" target="_blank" class="rank_img">
                                    <img src="http://pic.to8to.com/user/83/headphoto_1346983.jpg?1475981817" alt="鸿信装饰" width="55" height="55"></a>
                                <div class="rank_name">
                                    <a href="http://cd.to8to.com/zs/1346983/" rel="nofollow" target="_blank">鸿信装饰</a>
                                    <p>回答数：1247</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ask_side_opa">
                    <a id="autourl" href="http://mall.to8to.com/temai/zt539" hidefocus="" target="_blank" rel="nofollow">
                        <img src="http://pic.to8to.com/hot/532_8157.jpg?1483102997" width="240" height="130"></a>
                </div>
                <div class="ask_side spceil">
                    <div class="side_hd">最新标签</div>
                    <div class="new_tag ">
                        <a href="http://www.to8to.com/ask/search/82497" target="_blank">小冰箱质量</a>
                        <a href="http://www.to8to.com/ask/search/82679" target="_blank">哈尔滨防水</a>
                        <a href="http://www.to8to.com/ask/search/82568" target="_blank">惠普3000</a>
                        <a href="http://www.to8to.com/ask/search/82664" target="_blank">建房装修</a>
                        <a href="http://www.to8to.com/ask/search/82366" target="_blank">通州家具</a>
                        <a href="http://www.to8to.com/ask/search/82615" target="_blank">房屋预售</a>
                        <a href="http://www.to8to.com/ask/search/82461" target="_blank">会议台</a>
                        <a href="http://www.to8to.com/ask/search/82351" target="_blank">投币洗衣机厂家</a>
                        <a href="http://www.to8to.com/ask/search/82641" target="_blank">钢结构工程</a>
                        <a href="http://www.to8to.com/ask/search/82577" target="_blank">壁挂炉的区别</a>
                        <a href="http://www.to8to.com/ask/search/82535" target="_blank">福州海尔洗衣机</a>
                        <a href="http://www.to8to.com/ask/search/82529" target="_blank">会议厅</a>
                        <a href="http://www.to8to.com/ask/search/82677" target="_blank">不锈钢合页价格</a>
                        <a href="http://www.to8to.com/ask/search/82281" target="_blank">房子什么时候装修</a>
                        <a href="http://www.to8to.com/ask/search/82578" target="_blank">房子防水</a>
                        <a href="http://www.to8to.com/ask/search/82491" target="_blank">房子装地暖</a>
                        <a href="http://www.to8to.com/ask/search/82706" target="_blank">樱花马桶</a>
                        <a href="http://www.to8to.com/ask/search/82728" target="_blank">建房协议书范本</a>
                        <a href="http://www.to8to.com/ask/search/82603" target="_blank">房子风水好不好</a>
                        <a href="http://www.to8to.com/ask/search/82502" target="_blank">不锈钢配电箱</a></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://static.to8to.com/gb_js/ask.js?v=1481876234"></script>
    <script type="text/javascript" src="http://static.to8to.com/gb_js/to8torsas.js?v=1436195894"></script>
    <script type="text/javascript">askIndex.init();
        function asktijiao() {
            jq("#asksearchform").submit();
        }
        var popid = 0;
        function islogin(id) {
            var username = getCookie('username', true);
            if (!username) {
                popid = id;
                showPopWin('http://www.to8to.com/pop_login.php', 376, 263, null, false);
                return false;
            }
        }
        function pop_parent_submit() {
            window.location.href = popid;
        }
        jq(function() {
            jq.ajax({
                'type': 'post',
                'url': 'ask_post.php',
                'dataType': 'json',
                'data': {
                    action: 'login'
                },
                'success': function(data) {
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
        })
        jq('.seca_bdl').on('click',
        function() {
            clickStream.getCvParams('1_3_4_6');
        });
        jq('.clickstream_tag').click(function() {
            var _tag = jq(this).attr('data-ptag');
            if (_tag) {
                try {
                    clickStream.getCvParams(_tag);
                } catch(e) {

}
            }
        });
        jq('.ask_side_opa>a').each(function(index, ele) {
            switch (index) {
            case 0:
                jq(this).on('click',
                function() {
                    clickStream.getCvParams('1_3_4_7');
                });
                break;
            case 1:
                jq(this).on('click',
                function() {
                    clickStream.getCvParams('1_3_4_4');
                });
                break;
            }
        });
        jq(function() {
            var tcode = getCookie('tcode', true);
            if (tcode) {
                var autourl = jq('#autourl').attr('href');
                if (autourl.indexOf('.to8to.com/company') != -1) {
                    autourl = autourl.replace(/http:\/\/www.to8to.com/ig, 'http://' + tcode + '.to8to.com');
                    jq('#autourl').attr('href', autourl);
                }
            }
        })
        try {
            weChatQrcode.init();
        } catch(e) {

}</script>
    <script type="text/javascript">var slide_height = jq('.ask_secc .sec_hd').offset().top;
        jq('.zgs_bg_fixed').css('display', 'none');
        var slide_show_ptag = '1_3_9_1024';</script>
    <script>if (!window.tender) {
            jq.getScript('http://static.to8to.com/gb_js/tender.js?v=1464789987');
        }</script>
    <link rel="stylesheet" type="text/css" href="http://static.to8to.com/assets/common/widgets/bottom_up_slide/zxbj_bottom_slide.css?v=1483518558" />
    <div class="bottom_slide_box" style="left:0;">
        <!-- 以下是隐藏点击层 -->
        <div class="bottom_slide_content">
            <!-- 关闭按钮不显示 (功能正常)-->
            <!-- <div class="bottom_slide_close"></div> --></div>
        <script src="http://static.to8to.com/gb_js/GlobalProvinces.js?v=1460516531" type="text/javascript"></script>
        <script src="http://static.to8to.com/assets/common/widgets/bottom_up_slide/zxbj_bottom_slide.js?v=1484013317" type="text/javascript"></script>
    </div>
    <div id="small_window"></div>
    <div class="footer" id="footerHeight">
        <div class="footer_top">
            <div class="footer_top_container">
                <div class="ftc_left">
                    <ul class="ftcl_tab">
                        <li class="on">
                            <a href="javascript:void(0)">热门推荐</a></li>
                        <li>
                            <a href="javascript:void(0)">友情链接</a></li>
                    </ul>
                    <div class="ftclt_content  on">
                        <a href="http://www.to8to.com/ask/search/19717" target="_blank" title="新装修的房子放什么植物">新装修的房子放什么植物</a>
                        <a href="http://www.to8to.com/ask/search/19954" target="_blank" title="鞋柜玄关">鞋柜玄关</a>
                        <a href="http://www.to8to.com/ask/search/19968" target="_blank" title="厨房用品">厨房用品</a>
                        <a href="http://www.to8to.com/ask/search/19746" target="_blank" title="装修顺序">装修顺序</a>
                        <a href="http://www.to8to.com/ask/search/20030" target="_blank" title="水曲柳家具的优缺点">水曲柳家具的优缺点</a>
                        <a href="http://www.to8to.com/ask/search/20033" target="_blank" title="网上家具">网上家具</a>
                        <a href="http://www.to8to.com/ask/search/19720" target="_blank" title="室内装修">室内装修</a>
                        <a href="http://www.to8to.com/ask/search/20103" target="_blank" title="暖气不热">暖气不热</a>
                        <a href="http://www.to8to.com/ask/search/19926" target="_blank" title="简欧风格">简欧风格</a>
                        <a href="http://www.to8to.com/ask/search/19723" target="_blank" title="装修日记">装修日记</a>
                        <a href="http://www.to8to.com/ask/search/19932" target="_blank" title="家装风格">家装风格</a>
                        <a href="http://www.to8to.com/ask/search/19971" target="_blank" title="厨房漏水">厨房漏水</a>
                        <a href="http://www.to8to.com/ask/search/19724" target="_blank" title="新房装修后多久可以入住">新房装修后多久可以入住</a>
                        <a href="http://www.to8to.com/ask/search/19918" target="_blank" title="软装">软装</a>
                        <a href="http://www.to8to.com/ask/search/19908" target="_blank" title="家装建材">家装建材</a>
                        <a href="http://www.to8to.com/ask/search/20026" target="_blank" title="家具">家具</a>
                        <a href="http://www.to8to.com/ask/search/20023" target="_blank" title="复式房">复式房</a>
                        <a href="http://www.to8to.com/ask/search/20083" target="_blank" title="照明灯">照明灯</a>
                        <a href="http://www.to8to.com/ask/search/19945" target="_blank" title="客厅电视背景墙">客厅电视背景墙</a>
                        <a href="http://www.to8to.com/ask/search/20084" target="_blank" title="消防应急照明灯">消防应急照明灯</a></div>
                    <div class="ftclt_content ">
                        <a href="http://ask.shejiben.com/" target="_blank">设计本问答</a>
                        <a href="http://mall.to8to.com/top/" target="_blank">建材十大品牌排行榜</a></div>
                    <a rel="nofollow" href="http://wpa.qq.com/msgrd?V=1&amp;uin=895278840&amp;Site=-&amp;Menu=yes" target="_blank" class="join_link">
                        <span></span>友链合作</a>
                </div>
                <div class="ftc_center">
                    <dl>
                        <dt>关注我们</dt>
                        <dd>
                            <img src="http://img.to8to.com/to8to_img/img_code/bottom_seo_code.jpg?v=1474989529" alt="" class="att-code"></dd>
                    </dl>
                </div>
                <div class="ftc_right">
                    <dl>
                        <dt>下载土巴兔APP</dt>
                        <dd class="ask_qrMark"></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer_bottom_container">
                <div class="fbc_menu">
                    <ul>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/index.html" target="_blank" rel="nofollow">关于我们</a>
                            <span></span>
                        </li>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/contact.html" target="_blank" rel="nofollow">联系我们</a>
                            <span></span>
                        </li>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/link.php" target="_blank" rel="nofollow">友情链接</a>
                            <span></span>
                        </li>
                        <li>
                            <a href="http://www.to8to.com/help" target="_blank" rel="nofollow">帮助中心</a>
                            <span></span>
                        </li>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/feedback.php" target="_blank" rel="nofollow" rel="nofollow">意见反馈</a>
                            <span></span>
                        </li>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/recruiter.php" target="_blank" rel="nofollow">高薪聘请</a>
                            <span></span>
                        </li>
                        <li>
                            <a hidefocus="" href="http://www.to8to.com/about/law.html" target="_blank" rel="nofollow">法律声明</a></li>
                    </ul>
                </div>
                <div class="fbc_copyright">免责声明：本网站部分内容由用户自行上传，如权利人发现存在误传其作品情形，请及时与本站联系。</div>
                <div class="fbc_copyright">© 2016 Tubatu.com 土巴兔装修网和设计师社区 保留所有权利</div>
                <div class="fbc_icp">中国装修网
                    <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">粤ICP备08125558号</a></div>
                <div class="fbc_icpico">
                    <a href="http://szcert.ebs.org.cn/d6c3aa01-b00f-4d32-aef4-70ad63021bab" target="_blank" title="深圳市市场监督管理局企业主体身份公示" alt="深圳市市场监督管理局企业主体身份公示" rel="nofollow">
                        <span class="fbc_ico1"></span>
                    </a>
                    <a href="http://www.sznet110.gov.cn/netalarm/index.jsp" target="_blank" rel="nofollow">
                        <span class="fbc_ico2"></span>
                    </a>
                    <a href="http://www.sznet110.gov.cn/webrecord/innernet/Welcome.jsp?bano=4403101010155" target="_blank" rel="nofollow">
                        <span class="fbc_ico3"></span>
                    </a>
                    <a href="https://search.szfw.org/cert/l/CX20140929005207005275" target="_blank" rel="nofollow">
                        <span class="fbc_ico4"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">jQuery(function() {
        href_url = window.location.href;
        if (! (href_url.indexOf('sz.to8to.com') !== -1 || href_url.indexOf('www.to8to.com') !== -1)) {
            jq('.fbc_ico1').hide();
        }
        try {
            var footObj = document.getElementById('footerHeight'),
            wrapObj = document.getElementById('gloWrap'),
            htmlObj = document.documentElement,
            bodyObj = document.body,
            windowHeight = htmlObj.clientHeight || bodyObj.clientHeight,
            docScrollHeihgt = htmlObj.scrollHeight || bodyObj.scrollHeight,
            wrapHeight = wrapObj.offsetHeight,
            cb = (function() {
                var u = window.navigator.userAgent.toLocaleLowerCase(),
                msie = /(msie) ([\d.]+)/,
                chrome = /(chrome)\/([\d.]+)/,
                firefox = /(firefox)\/([\d.]+)/,
                safari = /(safari)\/([\d.]+)/,
                opera = /(opera)\/([\d.]+)/,
                ie11 = /(trident)\/([\d.]+)/,
                b = u.match(msie) || u.match(chrome) || u.match(firefox) || u.match(safari) || u.match(opera) || u.match(ie11);
                return {
                    name: b[1],
                    version: parseInt(b[2])
                };
            })();
            if (docScrollHeihgt < windowHeight) { //文档高度小于窗口高度
                var outWrapHeight = docScrollHeihgt - wrapHeight;
                if (cb.version < 8 && cb.name == 'msie') {
                    footObj.style.position = 'absolute';
                    htmlObj.style.overflowY = 'hidden';
                } else {
                    footObj.style.position = 'fixed';
                }

                wrapObj.style.height = (windowHeight - outWrapHeight) + "px";
                footObj.style.bottom = 0;
            }
        } catch(e) {

}
    });

    var _mvq = window._mvq || [];
    window._mvq = _mvq;
    _mvq.push(['$setAccount', 'm-100623-0']);
    _mvq.push(['$logConversion']); (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript';
        mvl.async = true;
        mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js': 'http://static.mediav.com/mvl.js');
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s);
    })();</script>
<script type="text/javascript" src="http://static.to8to.com/gb_js/GlobalProvinces.js?v=1460516531"></script>
<script type="text/javascript">var gpm = new GlobalProvincesModule;
    try {
        headerFooter.init();
    } catch(e) {}</script>
<script src="http://static.to8to.com/gb_js/referrerPathRecord.js?v=1444910373" type="text/javascript"></script>
<script src="http://static.to8to.com/gb_js/seoStatis.js?v=1428771801"></script>
<script type="text/javascript">var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?dbdd94468cf0ef471455c47f380f58d2";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</div>
<link type="text/css" rel="stylesheet" href="http://static.to8to.com/css/start/popupsubModal.css?v=1419877120">
<script src="http://static.to8to.com/gb_js/subModal.js?v=1482395520" type="text/javascript"></script>
<script src="http://www.to8to.com/count/2a19dc2ac1471a7470fe7187a5537960.js?v=1478085455"></script>
<script>jq('.zxzs-set').click(function(e) {
        e.preventDefault();
        var ptag = jq(this).attr('dataptag'); (typeof clickStream !== 'undefined') && clickStream.getCvParams(ptag); //埋点
        window.location.href = jq(this).attr('href');
    });</script>
<script src="https://www.sobot.com/chat/frame/js/entrance.js?sysNum=613b490be53d49e58e97db76dc3dec34" id="zhichiScript" class="zhiCustomBtn" data-args="manual=true"></script>
<script type="text/javascript" src="http://static.to8to.com/assets_dist/common/widgets/weixin_pop/weixin_pop.js?v=1484013317"></script>
<script src="http://static.to8to.com/assets_dist/common/widgets/consult_online/consult_online.js?v=1483430974" type="text/javascript"></script>
</body>

</html>
<script type="text/javascript" src="http://www.to8to.com/ask/clear_cookie.php"></script>
