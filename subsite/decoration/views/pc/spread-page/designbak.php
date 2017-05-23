<?php

$cssFiles = ['swiper.min', 'style'];
$this->params['cssStr'] = $this->render('@common/views/base/_css', ['isSelf' => true, 'cssFiles' => $cssFiles, 'path' => 'design/css/']);
?>
<div class="site_topnav" role="navigation">
    <div class="top_nav_info">
        <div class="wrap clearfix">
            <div class="nav_info_right clearfix">
                <ul class="entry_menu fl tn_menu clearfix">
                    <li class="myorder ">
                        <a id="shanghu" class="menu_hd major_pop" href="javascript:;" tjjj="click_pc_top.menu.shzx"
                           tjjj_name="商户中心">商户中心
                            <b></b>
                        </a>

                    </li>
                    <li class="myorder nolist">
                        <a class="menu_hd major_pop" href="javascript:;" tjjj="click_pc_top.menu.help" tjjj_name="帮助中心">帮助中心</a>
                    </li>
                    <li class="mall_tel">
                        <strong>400-8032-163</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="header">
    <div class="wrap">
        <div class="jia_logo  fl">
                <a target="_top" class="major_pop" tjjj="click_pc_head.logo.jia" tjjj_name="首页logo" href="javascript:;">
                    <img alt="梵客家装网首页"
                         src="<?= Yii::getAlias('@assetself'); ?>/design/images/pc_logo_dzr.png">
                </a>
        </div>

        <div class="outWrap">
            <div class="searchWrap">
                <ul class="clearfix choose_out_jcy" tjjj="click_pc_top" tjjj_name="搜索">
                    <li class="selected">
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.sp" tjjj_name="商品">
                            <span>商品</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.dp" tjjj_name="店铺">
                            <span>店铺</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.tk" tjjj_name="图库">
                            <span>图库</span></a>
                    </li>
                    <li class="more_jcy">
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.gd" tjjj_name="更多">
                            <span>更多</span></a>
                        <i class="ang"></i>
                    </li>
                </ul>
                <div class="searchBox">
                    <input type="text" autocomplete="off" name="keyword" class="searchInput mall_jia_goods_search "
                           id="searchInput">
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_search.btn" tjjj_name="搜索">
                        <input type="submit" class="searchBtn" value=""></a>
                    <i>
                    </i>

                </div>
            </div>
            <div class="my_Qj">
                <div class="my_Qj_wrap">
                    <p>
                        <em></em>
                        <a class="major_pop" tjjj="click_pc_top.menu.myqj" href="javascript:;"
                           tjjj_name="我的梵客家装">我的梵客家装</a></p>
                    <i>
                    </i>
                </div>
            </div>
            <div class="cart">
                <div class="cartTxt">
                    <p>
                        <em></em>
                        <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="购物车">购物车</a></p>
                    <span></span>
                    <i>
                    </i>

                    <div class="num_jcy">
                        <b>0</b>
                        <strong></strong>
                    </div>
                </div>
                <div id="head_cart" class="cartshow"></div>
            </div>
        </div>
    </div>
    <div class="g_web_nav clearfix">
        <ul class="clearfix top_nav_ul">
            <li id="jia_nav_home" class="major_pop g_nav_active">
                <a href="javascript:;" tjjj="click_pc_2014.nav.home" tjjj_name="首页">首页</a></li>
            <li id="jia_nav_tg">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.tg" tjjj_name="现场活动">现场活动</a></li>
            <li class="major_pop pos_sec" id="jia_nav_zx">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_nav" tjjj_name="装修设计">装修设计</a>
                <i>
                </i>
            </li>
            <li id="jia_nav_daikuan">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.daikuan" tjjj_name="装修贷款">装修贷款</a></li>
            <li id="jia_nav_tm">
                <a href="javascript:;" class="major_pop" id="jia_nav_home" tjjj="click_pc_2014.nav.temai"
                   tjjj_name="品牌特卖">品牌特卖</a></li>
            <li class="major_pop pos_sec" id="jia_nav_mall">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.mall" tjjj_name="建材商城">建材商城</a>
                <i>
                </i>
            </li>
            <li class="major_pop pos_sec" id="jia_nav_jiaju">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.jiaju" tjjj_name="家居商城">家居商城</a>
                <i>
                </i>
            </li>
            <li class="major_pop pos_sec" id="jia_nav_tuku">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.tuku" tjjj_name="图库">图库</a>
                <i>
                </i>
            </li>
            <li class="major_pop pos_sec" id="jia_nav_xue">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.xiaoguo" tjjj_name="装修效果图">装修效果图</a>
                <i>
                </i>
            </li>
            <li id="jia_nav_bbs">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.gonglue" tjjj_name="装修攻略">装修攻略</a></li>
            <li style="margin-right: 0px;" id="jia_nav_pinpai">
                <a href="javascript:;" class="major_pop" id="jia_nav_tiyan" tjjj="click_pc_2014.nav.pinpai"
                   tjjj_name="线下体验馆">线下体验馆</a></li>
        </ul>
    </div>
    <div class="newput_main">
        <div class="topmost clearfix">
            <div class="topm_left">
                <div class="change_tab">
                    <ul class="clearfix">
                        <li class="active">
                            <a href="javascript:;">在线装修报价</a>
                        </li>
                        <li>
                            <a href="javascript:;">免费量房设计</a>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/hot.png">
                        </li>
                    </ul>
                </div>
                <div class="change_cont">
                    <div class="change_item">
                        <p class="p_stong">免费帮你获取装修预算</p>

                        <p class="p_little">今日已有
                            <em>6867</em>业主申请</p>

                        <div class="menu_box">
                            <div class="menu_li">
                                <input type="text" value="80" class="lang_input"
                                       maxlength="3" name="area">
                                <em>㎡</em>
                            </div>
                            <div class="menu_li clearfix">
                                <div class="p_li">
                                    <input type="text" class="quote_select" name="" value="2室"/>
                                    <i>
                                    </i>
                                    <ul class="norms_se" style="display:none;">
                                        <li>
                                            <a href="javascript:;">1室</a></li>
                                        <li>
                                            <a href="javascript:;">2室</a></li>
                                        <li>
                                            <a href="javascript:;">3室</a></li>
                                        <li>
                                            <a href="javascript:;">4室</a></li>
                                    </ul>
                                </div>
                                <div class="p_li space">
                                    <input type="text" class="quote_select" name="" value="1厅"/>
                                    <i>
                                    </i>
                                    <ul class="norms_se" style="display:none;">
                                        <li>
                                            <a href="javascript:;">1厅</a></li>
                                        <li>
                                            <a href="javascript:;">2厅</a></li>
                                    </ul>
                                </div>
                                <div class="p_li space">
                                    <input type="text" class="quote_select" name="" value="1卫"/>
                                    <i>
                                    </i>
                                    <ul class="norms_se" style="display:none;">
                                        <li>
                                            <a href="javascript:;">1卫</a></li>
                                        <li>
                                            <a href="javascript:;">2卫</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="menu_radio">
                                <label>
                                    <input type="radio" name="home_state"/>二手房装修</label>
                                <label>
                                    <input type="radio" name="home_state"/>毛坯房装修</label></div>
                            <a href="javascript:;" class="putin_btn estimate_offer major_pop"
                               tjjj="click_pc_top_left_bjbtn" tjjj_name="在线装修报价" apply_title="立即预约梵客家装网装修报价">立即估算报价</a>
                        </div>
                        <div class="grade_price">
                            <p>经济实惠≤299元/㎡&nbsp;&nbsp;&nbsp;简约现代≥299元/㎡</p>

                            <p>低调奢华≥499元/㎡&nbsp;&nbsp;&nbsp;高端大气≥999元/㎡</p>
                        </div>
                    </div>
                    <div class="change_item" style="display:none;">
                        <p class="p_stong">免费量房、出装修设计方案</p>

                        <p class="p_little">今日已有
                            <em>6867</em>业主申请</p>

                        <form class="centre_form">
                            <div class="menu_box">
                                <div class="rank_li menu_li user_name_li">
                                    <input type="text" id="user_name" class="input_focus lang_input" name="user_name" placeholder="姓名">
                                </div>
                                <div class="verify_tips" id="uname_tips">
                                    <span></span>
                                </div>
                                <div class="rank_li menu_li mobile_li">
                                    <input type="text"id="mobile" class="input_focus lang_input" name="mobile" maxlength="11" placeholder="手机号">
                                </div>
                                <div class="verify_tips" id="mobile_tips">
                                    <span></span>
                                </div>
                                <div class="rank_li menu_li">
                                    <input type="text" value="北京" readonly="" class="lang_input infor_city place_city"
                                           name="areaflag_name">
                                </div>
                                <a onclick="phoneCheck($(this),2)" href="javascript:;" class="putin_btn">立即申请</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="topm_among">
            <div class="big_graph">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_top_nndxj" tjjj_name="暖暖的新家">
                    <img src="http://tjasset.acanstudio.com/spread/house/third/pc_banner_fk.jpg"/></a>
            </div>
            <div class="free_fuwu clearfix">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_free_lf" tjjj_name="免费量房">
                    <div class="fuwu-txt">
                        <span>免费量房</span>

                        <p>设计全程陪同</p>

                        <p>初步装修规划</p>
                    </div>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/free_lf.png"></a>
                <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_sj" tjjj_name="免费设计">
                    <div class="fuwu-txt">
                        <span>免费设计</span>

                        <p>省千元设计费</p>

                        <p>找满意的方案</p>
                    </div>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/free_sj.png"></a>
                <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_dk" tjjj_name="装修贷款">
                    <div class="fuwu-txt">
                        <span>装修贷款</span>

                        <p>0首付 0利息</p>

                        <p>年利率3.6%起</p>
                    </div>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/free_dk.png"></a>
                <!-- <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_jl" tjjj_name="免费监理">
                <div class="fuwu-txt">
                <span>免费监理</span>
                <p>获取预算模板</p>
                <p>避免价格陷阱</p>
                </div>
                <img src="http://tjasset.acanstudio.com/spread/house/sj/images/free_jl.png"></a> -->
            </div>
        </div>
        <div class="topm_right">
            <ul>
                <li class="clearfix border_none">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right1" tjjj_name="婚房装修">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/house_vary_01.jpg"/></a>

                    <div class="houvar fl">
                        <span>婚房装修</span>

                        <p>人气设计方案一览</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right1_btn"
                           tjjj_name="婚房装修">立即预约</a></div>
                </li>
                <li class="clearfix">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right2" tjjj_name="空间大改造">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/house_vary_02.jpg"/></a>

                    <div class="houvar fl">
                        <span>空间大改造</span>

                        <p>40平变80平</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right2_btn"
                           tjjj_name="空间大改造">立即预约</a></div>
                </li>
                <li class="clearfix">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right3" tjjj_name="二手房变新居">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/house_vary_03.jpg"/></a>

                    <div class="houvar fl">
                        <span>二手房变新居</span>

                        <p>7天焕新服务</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right3_btn"
                           tjjj_name="二手房变新居">立即预约</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div id="1F" class="member_case clearfix">
        <div class="memtag">
            <em></em>
            <span>会员案例</span></div>
        <ul class="clearfix">
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case1" tjjj_name="三房欧式风格 6.8万">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/member_li01.jpg"/></a>

                <p class="p_txt">
                    <em>总价: 6.8万</em>
                    <span>三房欧式风格</span></p>

                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case2" tjjj_name="二房简欧风格 7.6万">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/member_li02.jpg"/></a>

                <p class="p_txt">
                    <em>总价: 7.6万</em>
                    <span>二房简欧风格</span></p>

                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case3" tjjj_name="一房美式风格 3.5万">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/member_li03.jpg"/></a>

                <p class="p_txt">
                    <em>总价: 3.5万</em>
                    <span>一房美式风格</span></p>

                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case4" tjjj_name="别墅现代风格 27.3万">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/member_li04.jpg"/></a>

                <p class="p_txt">
                    <em>总价: 27.3万</em>
                    <span>别墅现代风格</span></p>

                <p class="p_mast"></p>
            </li>
        </ul>
    </div>
    <div id="2F" class="finish_scheme">
        <h2 class="column_title">
            <span>装修方案精选</span>
            <em>已服务
                <i>53467</i>位业主</em>

            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_1F_title_more"
                   tjjj_name="装修方案精选 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_1F_title_05"
                   tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="scheme_handpick clearfix">
            <div class="handpick_item delpd_t delpd_l">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_01">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/scheme_01.jpg"
                         tjjj_name="70-90㎡经济型平层整装解决方案  58080起"/></a>

                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_01"
                       tjjj_name="70-90㎡经济型平层整装解决方案  58080起">70-90㎡经济型平层整装解决方案</a>
                    <span>¥
                        <em>58080</em>起</span>

                    <p>
                        <span>免费设计</span>
                        <span>免费监理</span>
                        <span>专业施工</span></p>

                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_01"
                           tjjj_name="70-90㎡经济型平层整装解决方案  58080起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btns_01"
                           tjjj_name="70-90㎡经济型平层整装解决方案  58080起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_t delpd_r">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_02"
                   tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/scheme_02.jpg"/></a>

                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_02"
                       tjjj_name="120-150㎡经济型复式别墅装修公司解决方案 82360起">120-150㎡经济型复式别墅装修公司解决方案</a>
                    <span>¥
                        <em>82360</em>起</span>

                    <p>
                        <span>品牌主材</span>
                        <span>用量不限</span>
                        <span>上门安装</span>
                        <span>售后无忧</span></p>

                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_02"
                           tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btns_02"
                           tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_b delpd_l">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_03"
                   tjjj_name="40-50㎡标准平层套餐解决方案  30920起">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/scheme_03.jpg"/></a>

                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_03"
                       tjjj_name="40-50㎡标准平层套餐解决方案  30920起">40-50㎡标准平层套餐解决方案</a>
                    <span>¥
                        <em>30920</em>起</span>

                    <p>
                        <span>免费量房</span>
                        <span>免费设计</span>
                        <span>3家PK</span>
                        <span>专业施工</span></p>

                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_03"
                           tjjj_name="40-50㎡标准平层套餐解决方案  30920起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btn2_03"
                           tjjj_name="40-50㎡标准平层套餐解决方案  30920起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_b delpd_r">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_04"
                   tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/scheme_04.jpg"/></a>

                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_04"
                       tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">100-120㎡经济型平层组合包解决方案</a>
                    <span>¥
                        <em>78700</em>起</span>

                    <p>
                        <span>免费设计</span>
                        <span>品牌主材</span>
                        <span>用量不限</span>
                        <span>专业施工</span></p>

                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_04"
                           tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btn2_04"
                           tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">了解详情</a></p>
                </div>
            </div>
        </div>
        <div class="already_reserve">
            <div class="already_left">今日已有
                <em>6867</em>位业主
                <br/>预定精选套餐方案
            </div>
            <div class="already_among">
                <ul type="box">
                    <li>
                        <em>·</em>
                        <span class="rl">杨女士</span>
                        <span class="rl">200㎡</span>
                        <span>158****3449</span>
                        <span class="bl">13分钟前</span>
                        <em>·</em>
                        <span class="rl">刘女士</span>
                        <span class="rl">140㎡</span>
                        <span>183****8625</span>
                        <span class="bl">35分钟前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">胡女士</span>
                        <span class="rl">98㎡</span>
                        <span>184****5156</span>
                        <span class="bl">42分钟前</span>
                        <em>·</em>
                        <span class="rl">孙先生</span>
                        <span class="rl">130㎡</span>
                        <span>151****6681</span>
                        <span class="bl">1小时前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">江先生</span>
                        <span class="rl">97㎡</span>
                        <span>135****3656</span>
                        <span class="bl">1小时前</span>
                        <em>·</em>
                        <span class="rl">张明</span>
                        <span class="rl">54㎡</span>
                        <span>189****3389</span>
                        <span class="bl">1小时前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">刘女士</span>
                        <span class="rl">150㎡</span>
                        <span>181****4558</span>
                        <span class="bl">1小时前</span>
                        <em>·</em>
                        <span class="rl">熊先生</span>
                        <span class="rl">140㎡</span>
                        <span>138****7285</span>
                        <span class="bl">1小时前</span></li>
                </ul>
            </div>
            <div class="already_right">
                <a href="javascript:;" class="major_pop ihave_btn" tjjj="click_pc_1F_ihave_btn">我也要预定</a></div>
        </div>
    </div>
    <div id="3F" class="effect_picture">
        <h2 class="column_title">
            <span>装修效果图</span>
            <em>已为
                <i>3689516</i>位业主找到灵感</em>

            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_2F_title_more"
                   tjjj_name="装修效果图 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_2F_title_05"
                   tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="property_tag clearfix">
            <dl class="space clearfix">
                <dt></dt>
                <dd>
                    <span>空间</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_01" tjjj_name="客厅">客厅</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_02" tjjj_name="卧室">卧室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_03" tjjj_name="卫生间">卫生间</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_04" tjjj_name="厨房">厨房</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_05" tjjj_name="电视墙">电视墙</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_06" tjjj_name="榻榻米">榻榻米</a></dd>
            </dl>
            <dl class="housetype clearfix">
                <dt></dt>
                <dd>
                    <span>户型</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_01" tjjj_name="一居室">一居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_02" tjjj_name="二居室">二居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_03" tjjj_name="三居室">三居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_04" tjjj_name="复式">复式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_05" tjjj_name="别墅">别墅</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_06" tjjj_name="小户型">小户型</a></dd>
            </dl>
            <dl class="style clearfix">
                <dt></dt>
                <dd>
                    <span>风格</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_01" tjjj_name="简约">简约</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_02" tjjj_name="现代">现代</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_03" tjjj_name="中式">中式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_04" tjjj_name="欧式">欧式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_05" tjjj_name="美式">美式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_06" tjjj_name="田园">田园</a></dd>
            </dl>
        </div>
        <div class="effect_img clearfix">
            <div class="effect_left">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_01" tjjj_name="萌娃城堡必备 扮靓儿童房3大招">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/15951373.jpg">

                    <div class="float_txt">
                        <p class="big_font">萌娃城堡必备</p>

                        <p class="small_font">
                            <span>832 案例</span>
                            <span>5942 浏览</span>扮靓儿童房3大招</p></div>
                </a>
            </div>
            <div class="effect_among">
                <div class="among_top">
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_02" tjjj_name="180平米装出完美混搭风">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/15951375.jpg">

                        <div class="float_txt">
                            <p class="small_font">
                                <span>252 案例</span>180平米装出完美混搭风</p></div>
                    </a>
                </div>
                <div class="among_bom">
                    <a href="javascript:;" class="major_pop among_t_left" tjjj="click_pc_2F_image_03"
                       tjjj_name="80平小户型挑高装修">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/15951377.jpg">

                        <div class="float_txt">
                            <p class="small_font">
                                <span>50 案例</span>80平小户型挑高装修</p></div>
                    </a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_06" tjjj_name="鸡肋空间变书房">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/14748807.jpg">

                        <div class="float_txt">
                            <p class="small_font">
                                <span>133 案例</span>鸡肋空间变书房</p></div>
                    </a>
                </div>
            </div>
            <div class="effect_right">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_07" tjjj_name="3步打造文艺家居咖啡角">
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/14037743.jpg" width="280">

                    <div class="float_txt">
                        <p class="small_font">
                            <span>1045 案例</span>3步打造文艺家居咖啡角</p></div>
                </a>
            </div>
        </div>
    </div>
    <!--effect_picture end-->
    <div id="4F" class="famous_company">
        <h2 class="column_title">
            <span>知名装修公司</span>
            <em>已服务
                <i>53467</i>位业主</em>

            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_3F_title_more"
                   tjjj_name="知名装修公司 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_3F_title_05"
                   tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="famous_nav">
            <a href="javascript:;" class="major_pop active" tjjj="click_pc_3F_nav_01" tjjj_name="知名品牌<b></b>">知名品牌
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_02" tjjj_name="高性价比<b></b>">高性价比
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_03" tjjj_name="高口碑值<b></b>">高口碑值
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_04" tjjj_name="擅长二手房翻新<b></b>">擅长二手房翻新
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_05" tjjj_name="擅长大宅设计">擅长大宅设计</a></div>
        <div class="company_list">
            <div class="swiper-container">
                <ul class="swiper-wrapper clearfix">
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="5124263" tjjj="click_pc_3F_logo_2"
                           tjjj_name="梵客家装"><img src="http://tjasset.acanstudio.com/spread/house/third/fk.jpg"
                                                 draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_2" shop_id="5124263"
                               title="梵客家装" tjjj_name="梵客家装">梵客家装</a>
                            <span>案例：398个</span>
                            <span>评论：1854条</span>
                            <span>口碑值：1231</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215226319" tjjj="click_pc_3F_logo_0"
                           tjjj_name="今朝装饰"><img src="http://tjasset.acanstudio.com/spread/house/sj/images/13568499.jpg"
                                                 draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_0" shop_id="215226319"
                               title="今朝装饰" tjjj_name="今朝装饰">今朝装饰</a>
                            <span>案例：8个</span>
                            <span>评论：1725条</span>
                            <span>口碑值：1748</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215227639" tjjj="click_pc_3F_logo_5"
                           tjjj_name="六艺轩装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/14865201.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_5" shop_id="215227639"
                               title="六艺轩装饰" tjjj_name="六艺轩装饰">六艺轩装饰</a>
                            <span>案例：9个</span>
                            <span>评论：1111条</span>
                            <span>口碑值：914</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="5124887" tjjj="click_pc_3F_logo_3"
                           tjjj_name="苏技创意装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/10774247.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_3" shop_id="5124887"
                               title="苏技创意装饰" tjjj_name="苏技创意装饰">苏技创意装饰</a>
                            <span>案例：26个</span>
                            <span>评论：1591条</span>
                            <span>口碑值：1016</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215229201" tjjj="click_pc_3F_logo_4"
                           tjjj_name="多彩饰家装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/17391458.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_4" shop_id="215229201"
                               title="多彩饰家装饰" tjjj_name="多彩饰家装饰">多彩饰家装饰</a>
                            <span>案例：0个</span>
                            <span>评论：1244条</span>
                            <span>口碑值：933</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="5124840" tjjj="click_pc_3F_logo_6"
                           tjjj_name="我爱我家装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/13032543.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_6" shop_id="5124840"
                               title="我爱我家装饰" tjjj_name="我爱我家装饰">我爱我家装饰</a>
                            <span>案例：4个</span>
                            <span>评论：1105条</span>
                            <span>口碑值：897</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215228567" tjjj="click_pc_3F_logo_7"
                           tjjj_name="速美超级家"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/15900725.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_7" shop_id="215228567"
                               title="速美超级家" tjjj_name="速美超级家">速美超级家</a>
                            <span>案例：0个</span>
                            <span>评论：1960条</span>
                            <span>口碑值：743</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="5124480" tjjj="click_pc_3F_logo_8"
                           tjjj_name="合建装饰"><img src="http://tjasset.acanstudio.com/spread/house/sj/images/9556113.jpg"
                                                 draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_8" shop_id="5124480"
                               title="合建装饰" tjjj_name="合建装饰">合建装饰</a>
                            <span>案例：20个</span>
                            <span>评论：1795条</span>
                            <span>口碑值：709</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215226853" tjjj="click_pc_3F_logo_9"
                           tjjj_name="合为国际别墅装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/14199418.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_9" shop_id="215226853"
                               title="合为国际别墅装饰" tjjj_name="合为国际别墅装饰">合为国际别墅装饰</a>
                            <span>案例：248个</span>
                            <span>评论：1947条</span>
                            <span>口碑值：708</span>
                        </div>
                        <b></b>
                    </li>
                    <li class="swiper-slide">
                        <a href="javascript:;" class="major_pop" shop_id="215226853" tjjj="click_pc_3F_logo_9"
                           tjjj_name="合为国际别墅装饰"><img
                                src="http://tjasset.acanstudio.com/spread/house/sj/images/14199418.jpg"
                                draggable="false"></a>

                        <div class="message_r">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_9" shop_id="215226853"
                               title="合为国际别墅装饰" tjjj_name="合为国际别墅装饰">合为国际别墅装饰</a>
                            <span>案例：248个</span>
                            <span>评论：1947条</span>
                            <span>口碑值：708</span>
                        </div>
                        <b></b>
                    </li>
                </ul>
            </div>
            <!--前进后退按钮-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <!--famous_company end-->
    <div id="5F" class="AdPositionId clearfix">
        <a href="javascript:;" class="major_pop ad_baojia" tjjj="click_pc_Ad_left" tjjj_name="获取报价"
           apply_title="立即预约梵客家装网装修报价">
            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/ad_baojia.png"/></a>
        <a href="javascript:;" class="major_pop" tjjj="click_pc_Ad_right" tjjj_name="免费申请设计方案">
            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/ad_free.png"/></a>
    </div>
    <div class="Popular_designer">
        <h2 class="column_title">
            <span>人气设计师</span>

            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_4F_title_more" tjjj_name="人气设计师">更多设计师></a>
            </div>
        </h2>
        <div class="designer_li">
            <ul class="clearfix">
                <li>
                    <span class="topn">Top1</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_01" tjjj_name="田园、欧式、简约等风格">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/style_01.jpg"/></a>

                    <div class="personal_details">
                        <p>
                            <span>方波</span>经验7年</p>

                        <p>擅长: 田园、欧式、美式等风格</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_01"
                       tjjj_name="田园、欧式、简约等风格">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/stylist_01.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top2</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_02"
                       tjjj_name="风水、格局改造，软装搭配">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/style_02.jpg"/></a>

                    <div class="personal_details">
                        <p>
                            <span>王强</span>经验5年</p>

                        <p>擅长: 风水、格局改造，软装搭配</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_02"
                       tjjj_name="风水、格局改造，软装搭配">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/stylist_02.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top3</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_03" tjjj_name="巧妙划分空间，色彩搭配">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/style_03.jpg"/></a>

                    <div class="personal_details">
                        <p>
                            <span>周宝宝</span>经验5年</p>

                        <p>擅长: 巧妙划分空间，色彩搭配</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_03"
                       tjjj_name="巧妙划分空间，色彩搭配">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/stylist_03.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top4</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_04"
                       tjjj_name="榻榻米、书房等局部改造装饰">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/style_04.jpg"/></a>

                    <div class="personal_details">
                        <p>
                            <span>张帅</span>经验4年</p>

                        <p>擅长: 榻榻米、书房等局部改造装饰</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_04"
                       tjjj_name="榻榻米、书房等局部改造装饰">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/stylist_04.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top5</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_05" tjjj_name="收纳空间改善，细节装饰">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/style_05.jpg"/></a>

                    <div class="personal_details">
                        <p>
                            <span>赵玥</span>经验5年</p>

                        <p>擅长: 收纳空间改善，细节装饰</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_05"
                       tjjj_name="收纳空间改善，细节装饰">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/stylist_05.jpg">
                        <span>立即咨询</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="6F" class="realgd_live">
        <h2 class="column_title">
            <span>真实工地直播</span>
            <em>上网就能看到装修中的家</em>

            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_5F_title_more" tjjj_name="真实工地直播">更多></a>
            </div>
        </h2>
        <div class="clearfix">
            <div class="live_case">
                <ul class="clearfix">
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_01" tjjj_name="二居室 80平 43600元">
                            <span class="kaigong"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_01.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>王先生</span>
                                <span>二居室</span>
                                <span>80平</span>43600元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>5706</span>
                                <span class="zan">
                                    <i>
                                    </i>2864</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_01"
                                   tjjj_name="二居室 80平 43600元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_02" tjjj_name="一居室 36平 32000元">
                            <span class="shuidian"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_02.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>李先生</span>
                                <span>一居室</span>
                                <span>40平</span>32000元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>6273</span>
                                <span class="zan">
                                    <i>
                                    </i>865</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_02"
                                   tjjj_name="一居室 36平 32000元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_03" tjjj_name="三居室 114平 72800元">
                            <span class="nimu"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_03.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>张女士</span>
                                <span>三居室</span>
                                <span>114平</span>72800元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>7356</span>
                                <span class="zan">
                                    <i>
                                    </i>1024</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_03"
                                   tjjj_name="三居室 114平 72800元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_04" tjjj_name="二居室 90平 46200元">
                            <span class="youqi"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_04.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>廖先生</span>二居室
                                <span>90平</span>46200元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>2364</span>
                                <span class="zan">
                                    <i>
                                    </i>599</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_04"
                                   tjjj_name="二居室 90平 46200元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_05" tjjj_name="二居室 96平 66600元">
                            <span class="jungong"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_05.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>章女士</span>二居室
                                <span>96平</span>66600元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>11584</span>
                                <span class="zan">
                                    <i>
                                    </i>7305</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_05"
                                   tjjj_name="二居室 96平 66600元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_06" tjjj_name="三居室 146平 82000元">
                            <span class="jungong"></span>
                            <img src="http://tjasset.acanstudio.com/spread/house/sj/images/live_06.jpg"/></a>

                        <div class="bom_ceng">
                            <p class="pT">
                                <span>张小姐</span>三居室
                                <span>146平</span>82000元</p>

                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>26584</span>
                                <span class="zan">
                                    <i>
                                    </i>9253</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_06"
                                   tjjj_name="三居室 146平 82000元">查看详情</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="live_comment">
                <h3>
                    <i class="comment"></i>业主说</h3>

                <div class="comment_roll">
                    <ul type="box">
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/VNMic85jx3X5m9wAcZZpMc0n12hcWCsLtvDAiajGzgf4Idaa0zmDm23MBdzS4IaaGaaeLDJQphaUCZ9gKyK41Ayg/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭先生</p>

                                <p>与公司沟通后，态度明显转变。需要完成的细节部分，..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>张先生</p>

                                <p>对泥工师傅很满意，有问题主动和业主沟通。多个细节..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>王先生</p>

                                <p>管线开槽合理，横平竖直，走线很好，基本都是最短路..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>张先生</p>

                                <p>基本点都列出来，一二三四都很详细。监理也很负责任..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>李先生</p>

                                <p>设计师有想法，很有经验，能很好的将设计和施工结合..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM4D2iaE4LpOXo6UYg91s2iclOgVF9pLsC87bx7bgvdEyl3dzqwxB7a4cWsRFJyU3FKeeb53w0SRjZ6A/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭小姐</p>

                                <p>郑监理很专业的给我上了一堂入门知识课，并将所有齐..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM4D2iaE4LpOXo6UYg91s2iclOgVF9pLsC87bx7bgvdEyl3dzqwxB7a4cWsRFJyU3FKeeb53w0SRjZ6A/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭小姐</p>

                                <p>很专业，讲述了很多装修入门级技巧..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEITMMzrrFOkLLJeaG5DdPaFySBXp7LGxnia43vMhaBrTxTaJaZNRDBE0mGhjUoCc62onxWL2lbajQg/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>刘女士</p>

                                <p>水电做的不错，走线什么都挺专业..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEITMMzrrFOkLLJeaG5DdPaFySBXp7LGxnia43vMhaBrTxTaJaZNRDBE0mGhjUoCc62onxWL2lbajQg/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>汪小姐</p>

                                <p>签合同时候承诺的挺好，前期也陪着跑了几家建材公司..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40"
                                 src="http://wx.qlogo.cn/mmopen/VNMic85jx3X5HUfsFwQXl6LpTTW1hsjE7Sp8P5ApAlYjd6icfWcOUNoKQicTpMviaUqz075htdXYibiautzrDc7cYFzQ/64">

                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>刘小姐</p>

                                <p>对设计师的印象非常好，专业沟通能力非常强，希望..</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="7F" class="plotgd_live">
        <h2 class="column_title">
            <span>小区工地案例</span>
            <em>已为
                <i>59364</i>位业主查看了小区真实案例</em>
            <!-- <div class="another">
            <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_6F_title_more" tjjj_name="小区工地案例">找我家小区></a></div> -->
        </h2>

        <div class="live_widthalter __web-inspector-hide-shortcut__">
            <ul class="clearfix">
                <li>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/plotgd_03.jpg"/>
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_03" tjjj_name="万科翡翠江湾 9.3万">报名参观工地</a>

                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 9.3万</span>
                        <span>万科翡翠江湾</span></p>
                </li>
                <li>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/plotgd_04.jpg"/>
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_04" tjjj_name="绿地世纪城 10.7万">报名参观工地</a>

                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 10.7万</span>
                        <span>绿地世纪城</span></p>
                </li>
                <li>
                    <img src="http://tjasset.acanstudio.com/spread/house/sj/images/plotgd_05.jpg"/>
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_05" tjjj_name="保利溪湖 7.9万">报名参观工地</a>

                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 7.9万</span>
                        <span>保利溪湖</span></p>
                </li>
            </ul>
        </div>
        <div class="seek_home">
            <h3>找我家小区</h3>

            <form class="seek_form">
                <div class="row_item">
                    <input type="text" class="infor_city" name="areaflag_name" data-city="shanghai" readonly=""
                           value="北京">
                    <i>
                    </i>
                    <div class="tab_select_v2 clearfix" style="display: none;">
                        <ul class="breviary_list clearfix">
                            <li class="">ABCDE</li>
                            <li class="cur">FGHJ</li>
                            <li class="">KLMNP</li>
                            <li class="">QRSTW</li>
                            <li class="">XYZ</li>
                        </ul>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li class="sign">
                                    <a href="javascript:;" name="beijing">北京</a></li>
                                <li>
                                    <a href="javascript:;" name="chongqing">重庆</a></li>
                                <li>
                                    <a href="javascript:;" name="chengdu">成都</a></li>
                                <li>
                                    <a href="javascript:;" name="changsha">长沙</a></li>
                                <li>
                                    <a href="javascript:;" name="changchun">长春</a></li>
                                <li>
                                    <a href="javascript:;" name="dalian">大连</a></li>
                                <li>
                                    <a href="javascript:;" name="changzhou">常州</a></li>
                                <li>
                                    <a href="javascript:;" name="gddg">东莞</a></li>
                                <li>
                                    <a href="javascript:;" name="ahaq">安庆</a></li>
                                <li>
                                    <a href="javascript:;" name="hncd">常德</a></li>
                                <li>
                                    <a href="javascript:;" name="anshan">鞍山</a></li>
                                <li>
                                    <a href="javascript:;" name="baoding">保定</a></li>
                            </ul>
                        </div>
                        <div class="region_cont region_show">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="fuzhou">福州</a></li>
                                <li>
                                    <a href="javascript:;" name="jxfz">抚州</a></li>
                                <li>
                                    <a href="javascript:;" name="guiyang">贵阳</a></li>
                                <li>
                                    <a href="javascript:;" name="hangzhou">杭州</a></li>
                                <li>
                                    <a href="javascript:;" name="haerbin">哈尔滨</a></li>
                                <li>
                                    <a href="javascript:;" name="hefei">合肥</a></li>
                                <li>
                                    <a href="javascript:;" name="jinan">济南</a></li>
                                <li>
                                    <a href="javascript:;" name="jiaxing">嘉兴</a></li>
                                <li>
                                    <a href="javascript:;" name="jingmen">荆门</a></li>
                                <li>
                                    <a href="javascript:;" name="jsha">淮安</a></li>
                                <li>
                                    <a href="javascript:;" name="guilin">桂林</a></li>
                                <li>
                                    <a href="javascript:;" name="ganzhou">赣州</a></li>
                                <li>
                                    <a href="javascript:;" name="sxjc">晋城</a></li>
                                <li>
                                    <a href="javascript:;" name="jljl">吉林</a></li>
                                <li>
                                    <a href="javascript:;" name="huzhou">湖州</a></li>
                                <li>
                                    <a href="javascript:;" name="guangzhou">广州</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="jslyg">连云港</a></li>
                                <li>
                                    <a href="javascript:;" name="gxlz">柳州</a></li>
                                <li>
                                    <a href="javascript:;" name="kunming">昆明</a></li>
                                <li>
                                    <a href="javascript:;" name="kunshan">昆山</a></li>
                                <li>
                                    <a href="javascript:;" name="lanzhou">兰州</a></li>
                                <li>
                                    <a href="javascript:;" name="maanshan">马鞍山</a></li>
                                <li>
                                    <a href="javascript:;" name="luoyang">洛阳</a></li>
                                <li>
                                    <a href="javascript:;" name="nanchang">南昌</a></li>
                                <li>
                                    <a href="javascript:;" name="nanning">南宁</a></li>
                                <li>
                                    <a href="javascript:;" name="nantong">南通</a></li>
                                <li>
                                    <a href="javascript:;" name="nanjing">南京</a></li>
                                <li>
                                    <a href="javascript:;" name="ningbo">宁波</a></li>
                                <li>
                                    <a name="ningde" href="javascript:;">宁德</a></li>
                                <li>
                                    <a href="javascript:;" name="nanyang">南阳</a></li>
                                <li>
                                    <a name="putian" href="javascript:;">莆田</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="qingdao">青岛</a></li>
                                <li>
                                    <a href="javascript:;" name="quanzhou">泉州</a></li>
                                <li>
                                    <a href="javascript:;" name="shanghai">上海</a></li>
                                <li>
                                    <a href="javascript:;" name="shenyang">沈阳</a></li>
                                <li>
                                    <a href="javascript:;" name="suzhou">苏州</a></li>
                                <li>
                                    <a name="sanming" href="javascript:;">三明</a></li>
                                <li>
                                    <a href="javascript:;" name="shenzhen">深圳</a></li>
                                <li>
                                    <a href="javascript:;" name="shijiazhuang">石家庄</a></li>
                                <li>
                                    <a href="javascript:;" name="tianjin">天津</a></li>
                                <li>
                                    <a href="javascript:;" name="wuxi">无锡</a></li>
                                <li>
                                    <a href="javascript:;" name="wuhan">武汉</a></li>
                                <li>
                                    <a href="javascript:;" name="taiyuan">太原</a></li>
                                <li>
                                    <a href="javascript:;" name="xiamen">厦门</a></li>
                                <li>
                                    <a href="javascript:;" name="qhxn">西宁</a></li>
                                <li>
                                    <a href="javascript:;" name="jsxz">徐州</a></li>
                                <li>
                                    <a href="javascript:;" name="zjtz">台州</a></li>
                                <li>
                                    <a href="javascript:;" name="hbxt">邢台</a></li>
                                <li>
                                    <a href="javascript:;" name="wulumuqi">乌鲁木齐</a></li>
                                <li>
                                    <a href="javascript:;" name="sdwf">潍坊</a></li>
                                <li>
                                    <a href="javascript:;" name="zjwz">温州</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="xian">西安</a></li>
                                <li>
                                    <a href="javascript:;" name="zhengzhou">郑州</a></li>
                                <li>
                                    <a href="javascript:;" name="yancheng">盐城</a></li>
                                <li>
                                    <a href="javascript:;" name="jsyz">扬州</a></li>
                                <li>
                                    <a href="javascript:;" name="sxyc">运城</a></li>
                                <li>
                                    <a href="javascript:;" name="hnyy">岳阳</a></li>
                                <li>
                                    <a href="javascript:;" name="other">其它</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row_item">
                    <input type="text" id="user_name" class="input_focus" name="village" value="" placeholder="请输入小区名称">
                </div>
                <div class="row_item">
                    <input type="text" id="mobile" class="input_focus" name="mobile" maxlength="11" value="" placeholder="请输入您的电话">
                </div>
                <a href="javascript:;" onclick="phoneCheck($(this),3)" tjjj="click_pc_6F_find_btn" tjjj_name="找我家小区" class="seet_submit ">提交</a>
            </form>
        </div>

    </div>
    <div class="technology_safeguard clearfix">
        <div id="8F" class="shigong_gongyi">
            <h2 class="column_title">
                <span>施工工艺</span></h2>
            <ul class="clearfix">
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_01" tjjj_name="阳角金属 . 护角工艺">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_01.jpg"/>

                        <p>阳角金属 . 护角工艺</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_02" tjjj_name="双层石膏 . 抗开裂墙">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_02.jpg"/>

                        <p>双层石膏 . 抗开裂墙</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_03" tjjj_name="卫生间管道 . 防噪音">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_03.jpg"/>

                        <p>卫生间管道 . 防噪音</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_04" tjjj_name="水管连接 . 终生维护">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_04.jpg"/>

                        <p>水管连接 . 终生维护</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_05" tjjj_name="线管规范 . 耐用节省">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_05.jpg"/>

                        <p>线管规范 . 耐用节省</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_06" tjjj_name="安装龙骨 . 防损防灰">
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/craft_06.jpg"/>

                        <p>安装龙骨 . 防损防灰</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="9F" class="qijia_baozhang">
            <h2 class="column_title">
                <span>梵客家装保障</span></h2>

            <div class="safeguard_cont">
                <ul class="clearfix">
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_01" tjjj_name="基础服务">
                            <span class="fw_01"></span>

                            <p>基础服务</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_02" tjjj_name="平台保障">
                            <span class="fw_02"></span>

                            <p>平台保障</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_03" tjjj_name="优质施工队">
                            <span class="fw_03"></span>

                            <p>优质施工队</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_04" tjjj_name="第三方监理">
                            <span class="fw_04"></span>

                            <p>第三方监理</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_05" tjjj_name="优质服务">
                            <span class="fw_05"></span>

                            <p>贴心服务</p>
                        </a>
                    </li>
                </ul>
                <div class="terrace_referral jiabg">
                    <h3>为什么选择梵客家装？
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/fw_terrace.png"/></h3>

                    <p>1.梵客家装致力于让更多的网友体验到实实在在的装修体验</p>

                    <p>2.梵客家装真正的建立起了业主和装修公司、材料商家互通的网上桥梁。</p>

                    <p>3.梵客家装已成为广大业主装修青睐的装修综合门户网站</p>
                </div>
                <div class="terrace_referral shield">
                    <h3>梵客家装网优质施工队认证标准
                        <img src="http://tjasset.acanstudio.com/spread/house/sj/images/jia_QA.png"/></h3>

                    <p>1.必须是通过审核在梵客家装网入住的商家所属的施工队才有资格申请认证优质施工队。</p>

                    <p>2.优质施工队必须参加每次梵客家装网主办的施工队长培训，并经过考核。</p>

                    <p>3.任何一个月中有3名业主对同一支优质施工队不满，即取消优质资格。</p>

                    <p>4.优质施工队长在任何时候出现有效投诉在5个工作日内没有解决的则取消资格。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="return_url" value="http://tj.fk100.com/"/>

<div id="jia_footer">
    <div class="jia_foot_info">
        <p>Copyright 北京维纳亚科技有限公司 2010-2017, All Rights Reserved</p>

        <p>京ICP备17003882号</p>
    </div>
</div>
<!--返回顶部-->
<div class="toufang_kf">
    <a href="javascript:;" class="J_returnTop" style="display: none;"></a>
</div>
<!--底部小广告-->
<div class="footer_slide">
    <div class="pop_wrap"></div>
    <div class="contr_center">
        <a class="add_close" href="javascript:;"></a>

        <div class="add_img">
            <div class="add_left">
                <dl>
                    <dt class="fl">
                        <img src="<?= Yii::getAlias('@assetself'); ?>/design/images/zxbj_img.png" alt=""/>
                    </dt>
                    <dd class="fr">
                        <h5>装修新家花多少钱？</h5>

                        <p>轻松获得精确预算 躲避装修猫腻</p>
                    </dd>
                </dl>
            </div>
            <div class="add_right">
                <form class="add_step">
                    <div class="add_step01">
                        <p class="apply_num">
                            今日已有
                            <strong>4360</strong>
                            人免费获取报价
                        </p>

                        <div class="add_con">
                            <label>
                                <input id="user_name" type="text" placeholder="您的房屋面积"/>
                                <span>㎡</span>
                            </label>
                        </div>
                    </div>
                    <div class="add_step02">
                        <div class="add_con">
                            <label>
                                <input id="mobile" type="text" placeholder="您的手机号码" maxlength="11"/>
                            </label>
                        </div>
                    </div>
                    <a onclick="phoneCheck($(this),4)" class="add_btn" href="javascript:;">免费获取</a>
                    <p class="add_tip"></p>
                </form>
            </div>
            <div class="add_erweim">
                <img src="<?= Yii::getAlias('@assetself'); ?>/design/images/bottom_bj.png" alt=""/>

                <p>扫一扫学习更多装修攻略</p>
            </div>
        </div>
    </div>
    <div class="slide_show"></div>
</div>



<!--弹窗手机信息-->
<div style="display: none" class="layer_shade"></div>
<div style="display: none" id="apply_form" class="layer_order_v2 layer_order_ap layer_anim">
    <div class="layer_title_v2 apply_title">申请预约免费设计量房</div>
    <div class="layer_content_v2">
        <p class="lead_num">今日已有
            <span class="day_number">6867</span>用户预约装修
        </p>
        <form class="centre_form">
            <div class="rank_li">
                <input type="text"  id="user_name" name="user_name" class="input-text-v2" placeholder="请输入您的姓名"/>
                <div class="cut_off"></div>
            </div>
            <div class="verify_tips" id="user_name_tips" >
                <i></i><span></span>
            </div>
            <div class="rank_li">
                <input type="text" id="mobile" maxlength="11" name="mobile" class="input-text-v2" placeholder="请输入您的电话" />
                <div class="cut_off"></div>
            </div>
            <div class="verify_tips" id="user_phone_tips" >
                <i></i><span></span>
            </div>
            <div class="rank_li">
                <input type="text" value="北京" class="infor_city" />
                <div class="cut_off"></div>
                <!--地址选择-->
                <div style="display: none" class="tab_select_v2 clearfix">
                    <ul class="breviary_list clearfix">
                        <li class="cur"> ABCDE</li>
                        <li> FGHJ</li>
                        <li> KLMNP</li>
                        <li> QRSTW</li>
                        <li> XYZ</li>
                    </ul>
                    <div class="region_cont region_show">
                        <ul class="clearfix">
                            <li class="sign">
                                <a href="javascript:;" name="beijing">北京</a></li>
                            <li>
                                <a href="javascript:;" name="chongqing">重庆</a></li>
                            <li>
                                <a href="javascript:;" name="chengdu">成都</a></li>
                            <li>
                                <a href="javascript:;" name="changsha">长沙</a></li>
                            <li>
                                <a href="javascript:;" name="changchun">长春</a></li>
                            <li>
                                <a href="javascript:;" name="dalian">大连</a></li>
                            <li>
                                <a href="javascript:;" name="changzhou">常州</a></li>
                            <li>
                                <a href="javascript:;" name="gddg">东莞</a></li>
                            <li>
                                <a href="javascript:;" name="ahaq">安庆</a></li>
                            <li>
                                <a href="javascript:;" name="hncd">常德</a></li>
                            <li>
                                <a href="javascript:;" name="anshan">鞍山</a></li>
                            <li>
                                <a href="javascript:;" name="baoding">保定</a></li>
                        </ul>
                    </div>
                    <div class="region_cont">
                        <ul class="clearfix">
                            <li>
                                <a href="javascript:;" name="fuzhou">福州</a></li>
                            <li>
                                <a href="javascript:;" name="jxfz">抚州</a></li>
                            <li>
                                <a href="javascript:;" name="guiyang">贵阳</a></li>
                            <li>
                                <a href="javascript:;" name="hangzhou">杭州</a></li>
                            <li>
                                <a href="javascript:;" name="haerbin">哈尔滨</a></li>
                            <li>
                                <a href="javascript:;" name="hefei">合肥</a></li>
                            <li>
                                <a href="javascript:;" name="jinan">济南</a></li>
                            <li>
                                <a href="javascript:;" name="jiaxing">嘉兴</a></li>
                            <li>
                                <a href="javascript:;" name="jingmen">荆门</a></li>
                            <li>
                                <a href="javascript:;" name="jsha">淮安</a></li>
                            <li>
                                <a href="javascript:;" name="guilin">桂林</a></li>
                            <li>
                                <a href="javascript:;" name="ganzhou">赣州</a></li>
                            <li>
                                <a href="javascript:;" name="sxjc">晋城</a></li>
                            <li>
                                <a href="javascript:;" name="jljl">吉林</a></li>
                            <li>
                                <a href="javascript:;" name="huzhou">湖州</a></li>
                            <li>
                                <a href="javascript:;" name="guangzhou">广州</a></li>
                        </ul>
                    </div>
                    <div class="region_cont">
                        <ul class="clearfix">
                            <li>
                                <a href="javascript:;" name="jslyg">连云港</a></li>
                            <li>
                                <a href="javascript:;" name="gxlz">柳州</a></li>
                            <li>
                                <a href="javascript:;" name="kunming">昆明</a></li>
                            <li>
                                <a href="javascript:;" name="kunshan">昆山</a></li>
                            <li>
                                <a href="javascript:;" name="lanzhou">兰州</a></li>
                            <li>
                                <a href="javascript:;" name="maanshan">马鞍山</a></li>
                            <li>
                                <a href="javascript:;" name="luoyang">洛阳</a></li>
                            <li>
                                <a href="javascript:;" name="nanchang">南昌</a></li>
                            <li>
                                <a href="javascript:;" name="nanning">南宁</a></li>
                            <li>
                                <a href="javascript:;" name="nantong">南通</a></li>
                            <li>
                                <a href="javascript:;" name="nanjing">南京</a></li>
                            <li>
                                <a href="javascript:;" name="ningbo">宁波</a></li>
                            <li>
                                <a name="ningde" href="javascript:;">宁德</a></li>
                            <li>
                                <a href="javascript:;" name="nanyang">南阳</a></li>
                            <li>
                                <a name="putian" href="javascript:;">莆田</a></li>
                        </ul>
                    </div>
                    <div class="region_cont">
                        <ul class="clearfix">
                            <li>
                                <a href="javascript:;" name="qingdao">青岛</a></li>
                            <li>
                                <a href="javascript:;" name="quanzhou">泉州</a></li>
                            <li>
                                <a href="javascript:;" name="shanghai">上海</a></li>
                            <li>
                                <a href="javascript:;" name="shenyang">沈阳</a></li>
                            <li>
                                <a href="javascript:;" name="suzhou">苏州</a></li>
                            <li>
                                <a name="sanming" href="javascript:;">三明</a></li>
                            <li>
                                <a href="javascript:;" name="shenzhen">深圳</a></li>
                            <li>
                                <a href="javascript:;" name="shijiazhuang">石家庄</a></li>
                            <li>
                                <a href="javascript:;" name="tianjin">天津</a></li>
                            <li>
                                <a href="javascript:;" name="wuxi">无锡</a></li>
                            <li>
                                <a href="javascript:;" name="wuhan">武汉</a></li>
                            <li>
                                <a href="javascript:;" name="taiyuan">太原</a></li>
                            <li>
                                <a href="javascript:;" name="xiamen">厦门</a></li>
                            <li>
                                <a href="javascript:;" name="qhxn">西宁</a></li>
                            <li>
                                <a href="javascript:;" name="jsxz">徐州</a></li>
                            <li>
                                <a href="javascript:;" name="zjtz">台州</a></li>
                            <li>
                                <a href="javascript:;" name="hbxt">邢台</a></li>
                            <li>
                                <a href="javascript:;" name="wulumuqi">乌鲁木齐</a></li>
                            <li>
                                <a href="javascript:;" name="sdwf">潍坊</a></li>
                            <li>
                                <a href="javascript:;" name="zjwz">温州</a></li>
                        </ul>
                    </div>
                    <div class="region_cont">
                        <ul class="clearfix">
                            <li>
                                <a href="javascript:;" name="xian">西安</a></li>
                            <li>
                                <a href="javascript:;" name="zhengzhou">郑州</a></li>
                            <li>
                                <a href="javascript:;" name="yancheng">盐城</a></li>
                            <li>
                                <a href="javascript:;" name="jsyz">扬州</a></li>
                            <li>
                                <a href="javascript:;" name="sxyc">运城</a></li>
                            <li>
                                <a href="javascript:;" name="hnyy">岳阳</a></li>
                            <li>
                                <a href="javascript:;" name="other">其它</a></li>
                        </ul>
                    </div>
                </div>
                <i></i>
            </div>
            <a onclick="phoneCheck($(this),1)" href="javascript:;" class="entire_present apply_submit">立即预约</a>
        </form>
    </div>
    <a href="javascript:;" class="layer_setwin apply_close"></a>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@assetself'); ?>/design/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@assetself'); ?>/design/js/swiper.min.js"></script>
<script>
//    滚动的插件
(function($) {
    $.fn.easysroll = function(options) {
        var parameter = {
            direction: "left",
            numberr: "1",
            delays: "1000",
            scrolling: "1000",
            fadein: false,
            enterStop: true
        };
        var ops = $.extend(parameter, options);
        var $this = $(this);
        var _this = this;
        var _time = null;
        var obj = _this.find("[type='box']");
        var items = obj.find("li");
        var itemsleg = items.length;
        var itemsW = items.outerWidth(true);
        var itemsH = items.outerHeight(true);
        var _direction = ops.direction;
        var _numberr = ops.numberr;
        var _delays = ops.delays;
        var _scrolling = ops.scrolling;
        var _fadein = ops.fadein;
        var _enterStop = ops.enterStop;
        if (_direction == "top" || _direction == "bottom") {
            items.css({
                "float": "none"
            });
            obj.width(itemsW * itemsleg);
            if (_direction == "bottom") {
                obj.css("margin-top", -_numberr * itemsH);
            }
        } else if (_direction == "left" || _direction == "right") {
            items.css({
                "float": "left"
            });
            obj.width(itemsW * itemsleg);
            if (_direction == "right") {
                obj.css("margin-left", -_numberr * itemsW);
            }
        } else {
            alert("您配置的滚动方向有误，请重新配置");
            return true;
        }
        function scroll() {
            if (_direction == "left") {
                obj.animate({
                            "margin-left": -_numberr * itemsW
                        },
                        Number(_delays),
                        function() {
                            for (var i = 0; i < _numberr; i++) {
                                obj.find("li").eq(0).appendTo(obj);
                            }
                            obj.css({
                                "margin-left": 0
                            });
                            if (_fadein) {
                                obj.find("li").eq(0).animate({
                                            "opacity": 0
                                        },
                                        Number(_delays));
                                obj.find("li").eq(itemsleg - 1).css({
                                    "opacity": 1
                                });
                            }
                        });
            } else if (_direction == "right") {
                obj.animate({
                            "margin-left": 0
                        },
                        Number(_delays),
                        function() {
                            for (var i = 0; i < _numberr; i++) {
                                obj.find("li").eq(itemsleg - 1).prependTo(obj);
                            };
                            obj.css("margin-left", -_numberr * itemsW);
                            if (_fadein) {
                                obj.find("li").eq(0).animate({
                                            "opacity": 1
                                        },
                                        Number(_delays));
                                obj.find("li").eq(itemsleg - 1).css({
                                    "opacity": 0
                                });
                            }
                        });
            } else if (_direction == "top") {
                obj.animate({
                            "margin-top": -_numberr * itemsH
                        },
                        Number(_delays),
                        function() {
                            for (var i = 0; i < _numberr; i++) {
                                obj.find("li").eq(0).appendTo(obj);
                            }
                            obj.css({
                                "margin-top": 0
                            });
                            if (_fadein) {
                                obj.find("li").eq(0).animate({
                                            "opacity": 0
                                        },
                                        Number(_delays));
                                obj.find("li").eq(itemsleg - 1).css({
                                    "opacity": 1
                                });
                            }
                        });
            } else if (_direction == "bottom") {
                obj.animate({
                            "margin-top": 0
                        },
                        Number(_delays),
                        function() {
                            for (var i = 0; i < _numberr; i++) {
                                obj.find("li").eq(itemsleg - 1).prependTo(obj);
                            }
                            obj.css("margin-top", -_numberr * itemsH);
                            if (_fadein) {
                                obj.find("li").eq(0).animate({
                                            "opacity": 1
                                        },
                                        Number(_delays));
                                obj.find("li").eq(itemsleg - 1).css({
                                    "opacity": 0
                                });
                            }
                        });
            }
        }
        $this.hover(function() {
                    if (_enterStop) {
                        clearInterval(_time);
                    }
                },
                function() {
                    _time = setInterval(scroll, _scrolling);
                }).trigger('mouseleave');
    }
})(jQuery);

$(".already_among").easysroll({
    direction: "top",
    numberr: "1",
    delays: "1000",
    scrolling: "3000",
    fadein: false,
    enterStop: true
});

var mySwiper = new Swiper('.swiper-container',{
    slidesPerGroup : 5,
    prevButton:'.swiper-button-prev',
    nextButton:'.swiper-button-next',
    loop : true,
    slidesPerView : 5,
    centeredSlides : false,
    loopedSlides :5,
   loopAdditionalSlides : 1
//    spaceBetween : 20

})
//    左上角手机信息切换样式
    $(".change_tab li").hover(function () {
        var index = $(".change_tab li").index(this);
        $(this).addClass('active').siblings().removeClass('active');
        $(".change_item").eq(index).show().siblings('.change_item').hide();
    });
    //    返回顶部
    $(".J_returnTop").click(function () {
        $('html,body').animate({
                    scrollTop: 0
                },
                400);
    });
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 620) {
            $(".J_returnTop").fadeIn(100);
        } else {
            $(".J_returnTop").fadeOut(200);
        }
    });
    //底部小广告
    $('.add_close').click(function () {
        $('.pop_wrap').fadeOut("fast");
        $('.contr_center').fadeOut("fast");
        $('.slide_show').css("left", 0);

    })
    $('.slide_show').click(function () {
        $('.pop_wrap').fadeIn("fast");
        $('.contr_center').fadeIn("fast");
        $('.slide_show').css("left", "-100%");
    })

//手机信息验证函数

function phoneCheck($obj, num) {
    var $form = $obj.closest("form");
    var uname = "", phone = "";
    var regPhone = /^1[3578]\d{9}$/;
    if (num == 4) {
        uname = $.trim($form.find('#user_name').val());
        phone = $.trim($form.find('#mobile').val());
        if (uname == "") {
            $form.find('.add_tip').text('面积不能为空');
            return false;
        }
        if (phone == '') {
            $form.find('.add_tip').text('手机号不能为空');
            return false;
        }
        if (!regPhone.test(phone)) {
            $form.find('.add_tip').text('请填写正确的手机号码');
            return false;
        } else {
            $form.find('.add_tip').text('');
        }
        var $data = {
            'name': uname,
            'mobile': phone
        };
        applyData($data);
    }
    if (num == 3) {
        uname = $.trim($form.find('#user_name').val());
        phone = $.trim($form.find('#mobile').val());
        console.log(uname);
        if (uname == "") {
            $form.find("input[name='village']").css("border", "1px solid #f26122");
            return false;
        }else{
            $form.find("input[name='village']").css("border", "1px solid #fff");
        }
        if (phone == '') {
            $form.find("input[name='mobile']").css("border", "1px solid #f26122");
            return false;
        }
        if (!regPhone.test(phone)) {
            $form.find("input[name='mobile']").css("border", "1px solid #f26122");
            return false;
        }else {
            $form.find("input[name='mobile']").css("border", "1px solid #fff");
        }
        var $data = {
            'name': uname,
            'mobile': phone
        };
        applyData($data);
    }
    if (num == 2) {
        uname = $.trim($form.find('#user_name').val());
        phone = $.trim($form.find('#mobile').val());
        if (uname == "") {
            $form.find('#uname_tips').text('姓名不能为空');
            return false;
        }else{
            $form.find('#uname_tips').text('');
        }
        if (phone == '') {
            $form.find('#mobile_tips').text('手机号不能为空');
            return false;
        }
        if (!regPhone.test(phone)) {
            $form.find('#mobile_tips').text('请填写正确的手机号码');
            return false;
        } else {
            $form.find('#mobile_tips').text('');
        }
        var $data = {
            'name': uname,
            'mobile': phone
        };
        applyData($data);
    }
    if (num == 1) {
        uname = $.trim($form.find('#user_name').val());
        phone = $.trim($form.find('#mobile').val());
        console.log(uname);
        if (uname == "") {
            $form.find('#user_name_tips').text('姓名不能为空');
            return false;
        }else{
            $form.find('#user_name_tips').text('');
        }
        if (phone == '') {
            $form.find('#user_phone_tips').text('手机号不能为空');
            return false;
        }
        if (!regPhone.test(phone)) {
            $form.find('#user_phone_tips').text('请填写正确的手机号码');
            return false;
        } else {
            $form.find('#user_phone_tips').text('');
        }
        applyData($data);
    }

}
//城市选择
$(".infor_city").each(function() {
    $(this).focus(function() {
        $(this).siblings('.tab_select_v2').fadeIn();
    });
    $(this).blur(function() {
        $(this).siblings('.tab_select_v2').fadeOut();
    });
});
$(".tab_select_v2 a").each(function() {
    if ($(this).text() == $(".layer_content_v2 .infor_city").val()) {
        $(this).parent('li').addClass('sign');
    }
    $(this).click(function() {
        var txtvalue = $(this).text();
        var txtname = $(this).attr('name');
        $("input[name='house_areaflag']").attr("value", txtname);
        $(".infor_city").attr("value", txtvalue);
        var infor_city = $(this).attr("name");
        $(".infor_city").attr("data-city", infor_city);
        $(".tab_select_v2 li").removeClass('sign');
        $(this).parent('li').addClass('sign');
    });
    $(".breviary_list li").hover(function() {
        var index = $(".breviary_list li").index(this);
        $(this).addClass("cur").siblings("li").removeClass("cur");
        $(".region_cont").eq(index).addClass("region_show").siblings(".region_cont").removeClass("region_show");
    });
});

//全页面点击显示弹窗
$('.major_pop').click(function(){
    $('.layer_shade').show();
    $('#apply_form').show();
})
//弹窗手机信息 样式切换
$('.rank_li').on('focus', '.input-text-v2', function () {
    $(this).closest('.rank_li').css("border-color", "#f26122");

})
$('.rank_li').on('blur', '.input-text-v2', function () {
    $(this).closest('.rank_li').css("border-color", "#DDDDDD");
})
//弹窗关闭
$('.apply_close').click(function(){
    $('.layer_shade').hide();
    $('#apply_form').hide();
})

function applyData($data)
{
    $data.position = $("#position").val();
    $data.position_name = $("#position_name").val();
    $data.info_id = $("#info_id").val();
    $data.cid = $("#cid").val();
    $data._csrf = $("#_csrf").val();
    $.ajax({
        type: 'POST',
        data: $data,
        url: window.signupUrl,// + '/jz-signup.html',
        dataType: "json",
        success:function(data){
            if(data.status == 200){
                var redirectUrl = $("#return_url").val();
                if (redirectUrl) {
                //var redirectUrl = window.BASE_URL + '/bm-result.html';
                    window.location.href = redirectUrl;
                }
                alert('报名成功');
            }else if ( data.status == 400 ) {
                alert(data.message);
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            } else {
                alert('报名失败');
                $obj.addClass("apply_submit");
                $obj.html(sumit_text);
            }
        }

    })
}
</script>