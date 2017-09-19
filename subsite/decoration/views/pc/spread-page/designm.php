<?php
use yii\helpers\Url;

//$urls = $this->context->navUrls;

Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/css/da957-9276.css" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/css/1ee86-3483.css" />
<!-- 轮播图 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/swiper.min.js"></script>
<!-- 弹出层js -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/box.js"></script>
<!--报名成功-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/poplayer.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/banner-module_sempc.js"></script>
<!--底部免费专修报价-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/style-pc.js"></script>
<!--预约验证-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/js/yuyue.js"></script>
<!-- 头部 -->
<div class="header btn_data-tit" data-tit="申请预约免费设计量房">
    <div class="siteNav">
        <div class="siteNavBg clear">
            <ul class="siteNavBgL">
                <li>中国家居装修第一门户</li>
                <li class="border"></li>
                <li>第三方业主保障平台</li></ul>
            <ul class="siteNavBgR">
                <li>登录</li>
                <li>注册</li>
                <li>我要装修</li>
                <li class="customerService" id="CSDexc">客户服务</li>
                <li class="last"><?= Yii::$app->params['siteHotline']; ?></li></ul>
        </div>
    </div>
    <?php //echo $this->render('_designm-logo'); ?>
    <div class="nav btn_data-tit" data-tit="申请预约免费设计量房" id="nav">
        <div class="nav_empty"></div>
        <div class="navList">
            <ul class="nav_hd clear" id="nav_hd">
                <li class="nav_hd_list">
                    <a class="nhla active">首页</a></li>
                <li class="nav_hd_list" id="nav_hd_list">
                    <a class="nhla" href="">新房装修
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="">老房装修
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="">婚房装修
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="">二手房装修
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="" rel="nofollow">免费设计
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="" rel="nofollow">免费量房
                        <i></i>
                    </a>
                </li>
                <li class="nav_hd_list">
                    <a class="nhla" href="" rel="nofollow">装修效果图</a></li>
                <li class="nav_hd_list">
                    <a class="nhla" href="">装修公司
                        <i></i>
                    </a>
                </li>
            </ul>
            <div class="nav_ft" id="nav_ft" style="width:126px;">
                <i>
                </i>
                <a href="" rel="nofollow">移动应用</a></div>
        </div>
    </div>
</div>
<!-- main start -->
<div class="main">
    <!-- lunBoTu start -->
    <div class="mainOne">
        <!--改动在此开始 -->
        <div class="offerlayer" id="offerlayer" data-keyword="免费设计">
            <div class="offer-head clearfix">
                <div class="title active">免费设计</div>
                <div class="title ">免费报价</div></div>
            <div class="offer-body clearfix" id="offerSheji">
                <div class="bodybox active">
                    <!-- 装修报价 start -->
                    <!-- 装修报价:第1步 -->
                    <form method="post" name="formMsg" onSubmit="yuyue_1(this);return false;" class="step1">
                        <input type="hidden" name="formhash" value="">
                        <div class="p-tip ">
                            <span>免费量房、出装修设计方案</span>
                            <span class="cOrange"></span>
                            <p class="f14">今日已有
                                <span class="cOrange">1046</span>业主申请</p></div>
                        <p class="mb20">
                            <input type="text" name="name" placeholder="您的姓名" required class="ipt ipt222"></p>
                        <p class="mb20">
                            <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') " name="telephone" placeholder="您的电话" required class="ipt ipt222"></p>
                        <input type="hidden" name="_csrf-frontend" value="olAQI6QXqtUOK8cftUkgQp_PeXEQNq0pHB1q08ar2WWHaMWddVWf9TgGmdb3-QcITZ1UV7HljHO2JC9JRFzglA==">
                        <input type="hidden" value="2" name="is_mobile" />
                        <input type="hidden" value="0" name="employee_id" />
                        <input type="hidden" value="4" name="channel_id" />
                        <input type="hidden" value="984615576fb9918cd8c6a7a6a750465f" name="visit_request_id" />
                        <!--<p class="mb20">
                        <select class="ipt ipt222 mb10" name='User_Shen'>
                        <option value="">省/市</option></select>
                        </p>-->
                        <p class="error-tip"></p>
                        <input type="submit" class="offerfixbtn ipt222" value="立即申请">
                        <!--<p class="places">今日仅剩 <span class="cOrange">19</span> 个名额</p>-->
                        <div class="sec_topr_list">
                            <ul>
                                <li>
                                    <span>·</span>该项目免费服务，不收任何费用</li>
                                <li>
                                    <span>·</span>您的隐私信息将会被<?= Yii::$app->params['siteNameBase']; ?>严格保密</li></ul>
                        </div>
                    </form>
                    <!-- 装修报价 end --></div>
                <div class="bodybox">
                    <!-- 建材询价 start -->
                    <!-- 建材询价:第1步 -->
                    <form method="post" name="formMsg" onSubmit="yuyue_1(this); return false;" class="step1">
                        <div class="p-tip">
                            <span>免费量房、出装修设计方案</span>
                            <span class="cOrange"></span>
                            <p class="f14">今日已有
                                <span class="cOrange">1046</span>业主申请</p></div>
                        <p class="pr mb20">
                            <input type="text" name="area" onkeyup="value=value.replace(/[^\d]/g,'') " placeholder="建筑面积" class="ipt ipt270" required>
                            <em class=" m2-unit">m
                                <i>2</i>
                            </em>
                        </p>
                        <p class="mb20">
                            <input type="text" onkeyup="value=value.replace(/[^\d]/g,'') " name="telephone" placeholder="手机号码" class="ipt ipt270" required></p>
                        <input type="hidden" name="_csrf-frontend" value="olAQI6QXqtUOK8cftUkgQp_PeXEQNq0pHB1q08ar2WWHaMWddVWf9TgGmdb3-QcITZ1UV7HljHO2JC9JRFzglA==">
                        <input type="hidden" name="name" value="姓名">
                        <input type="hidden" value="2" name="is_mobile" />
                        <input type="hidden" value="0" name="employee_id" />
                        <input type="hidden" value="4" name="channel_id" />
                        <input type="hidden" value="984615576fb9918cd8c6a7a6a750465f" name="visit_request_id" />
                        <!--<p class="mb10">
                        <select class="ipt ipt130" name='User_Shen'>
                        <option value="">省/市</option></select>
                        <select class="r ipt ipt130" name='User_City'>
                        <option value="">市/地区</option></select>
                        </p>-->
                        <p class="error-tip"></p>
                        <input type="submit" id="weizhizuoshangjiao" class="offerfixbtn ipt222" value="5秒立即拿报价">
                        <div class="sec_topr_list">
                            <ul>
                                <li>
                                    <span>·</span>该项目免费服务，不收任何费用</li>
                                <li>
                                    <span>·</span>您的隐私信息将会被<?= Yii::$app->params['siteNameBase']; ?>严格保密</li></ul>
                        </div>
                    </form>
                    <!-- 第2步 -->
                    <!-- 建材询价 end --></div>
            </div>
        </div>
        <!--offerlayer改动在此结束-->
        <div class="index_box clearfix btn_data-tit" data-tit="申请免费户型设计">
            <div class=" h260" id="box">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/0314e-7517.jpg"></div>
            <ul class="index_box_ul btn_data-tit" data-tit="申请预约免费设计量房">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/52289-8223.jpg" id="img111"></li>
                <li class="marginleft25">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c7e26-1035.jpg" id="img112"></li>
                <li class="marginleft25">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d65c2-1617.jpg" id="img113"></li>
            </ul>
        </div>
        <!-- 报名成功 start -->
        <div class="poplayer pop-bm-sucess">
            <span class="close js-close">&#10005;</span>
            <div class="layout620 mb30 cDGray clearfix">
                <h4 class="title">恭喜您报名成功！</h4>
                <p class="f18 tc p18-gray">工作人员15分钟内将会与您联系，请耐心等候。</p>
                <div class="weixin-l">
                    <img class="l" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/5942b-5348.jpg" alt="">
                    <ul>
                        <li class="f18">微信扫一扫</li>
                        <li class="f18">领取装修大礼包</li>
                        <li class="mt5">红包领不停</li></ul>
                </div>
                <div class="recommend">
                    <p class="fB">为您推荐</p>
                    <ul>
                        <li>
                            <a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/2e7e5-1503.jpg" alt="" width="80" height="80"></a>
                        </li>
                        <li class="mt10">
                            <a href="###"></a>小卧室窗设计</li>
                    </ul>
                    <ul>
                        <li>
                            <a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/b0a26-3426.jpg" alt="" width="80" height="80"></a>
                        </li>
                        <li class="mt10">
                            <a href="###"></a>地中海风格客厅</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 报名成功 end -->
        <!-- offer 310宽 免费设计+建材询价 start -->
        <div class="main_list1 btn_data-tit" data-tit="申请预约免费设计量房">
            <ul>
                <li>
                    <span class="empty"></span>
                    <span class="main_list1_span1">
                        <span class="main_list1_span1_hidd">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/eb8b9-8548.jpg"></span>
                    </span>
                    <span class="main_list1_span2 marl10">
                        <i class=" main_list1_span_i1">婚房装修</i>
                        <i class=" main_list1_span_i2">人气设计方案一览</i>
                        <input type="submit" class="main1_btn" value="立即预约"></span>
                </li>
                <li>
                    <span class="empty"></span>
                    <span class="main_list1_span1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/8599c-7998.jpg"></span>
                    <span class="main_list1_span2 marl10">
                        <i class="main_list1_span_i1">空间大改造</i>
                        <i class="main_list1_span_i2">人气设计方案一览</i>
                        <input type="submit" class="main1_btn" value="立即预约"></span>
                </li>
                <li>
                    <span class="empty"></span>
                    <span class=" main_list1_span1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/77d78-1009.jpg"></span>
                    <span class=" main_list1_span2 marl10">
                        <i class=" main_list1_span_i1">二手房变新居</i>
                        <i class="main_list1_span_i2">人气设计方案一览</i>
                        <input type="submit" class="main1_btn" value="立即预约"></span>
                </li>
            </ul>
        </div>
        <!-- offer 310宽 免费设计+建材询价 end --></div>
    <!--maintwo-->
    <div class="main2 btn_data-tit" data-tit="申请免费预约会员方案">
        <span class="main2_span1">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/eabaf-4828.png"></span>
        <!--实现交互效果-->
        <span class="main2_span2">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/4a9f6-9010.jpg">
            <i class="main2_span2_i1">
                <i class="main2_span2_i1_i1">现代简约风格</i>
                <i class="main2_span2_i1_i2">总价：6.8万</i></i>
        </span>
        <span class="main2_span2">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/0e5b5-5420.jpg">
            <i class="main2_span2_i1">
                <i class="main2_span2_i1_i1">轻奢风格</i>
                <i class="main2_span2_i1_i2">总价：35万</i></i>
        </span>
        <span class="main2_span2">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/053e7-6260.jpg">
            <i class="main2_span2_i1">
                <i class="main2_span2_i1_i1">美式风格</i>
                <i class="main2_span2_i1_i2">总价：24万</i></i>
        </span>
        <span class="main2_span2">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/eaaec-8797.jpg">
            <i class="main2_span2_i1">
                <i class="main2_span2_i1_i1">欧式风格</i>
                <i class="main2_span2_i1_i2">总价：20万</i></i>
        </span>
    </div>
    <!--mainthree-->
    <div class="main3 btn_data-tit" data-tit="申请免费预约精选方案">
        <div class="main3_div1">
            <span class="main3_div1_span1">装修方案精选</span>
            <span class="main3_div1_span2">&nbsp;已服务
                <i class="color">62182</i>位业主</span>
            <ul>
                <li class="active">新房装修</li>
                <li class="active1">|</li>
                <li class="active">二手房装修</li>
                <li class="active1">|</li>
                <li class="active">复式装修</li>
                <li class="active1">|</li>
                <li class="active">别墅装修</li>
                <li class="active1">|</li>
                <li class="active">商业装修</li>
                <li class="active">&nbsp;更多></li></ul>
        </div>
        <div class="main3_div2">
            <div class="main3_div2_p1">
                <p class=" main3_div2_p1_p1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/4ba6d-7387.jpg"></p>
                <p class="main3_div2_p1_p2">
                    <span class="main3_div2_p1_p2_s1">
                        <a>70-90㎡经济型平层整装解决方案</a>
                    </span>
                    <span class="main3_div2_p1_p2_s2">¥
                        <i>58080</i>起</span>
                    <span class="main3_div2_p1_p2_s3">
                        <i>免费设计</i>
                        <i class="marl3">免费监理</i>
                        <i class="marl3">专业施工</i></span>
                    <span class="main3_div2_p1_p2_s4">
                        <input type="submit" class="s4_btn1" value="立即预订">
                        <input type="submit" class="s4_btn2" value="了解详情"></span>
                </p>
            </div>
            <div class="main3_div2_p1">
                <p class=" main3_div2_p1_p1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d0afd-7518.jpg"></p>
                <p class="main3_div2_p1_p2">
                    <span class="main3_div2_p1_p2_s1">
                        <a>100-120㎡经济型平层整装解决方案</a>
                    </span>
                    <span class="main3_div2_p1_p2_s2">¥
                        <i>82341</i>起</span>
                    <span class="main3_div2_p1_p2_s3">
                        <i>品牌设计</i>
                        <i class="marl3">用量不限</i>
                        <i class=" marl3">上门安装</i>
                        <i class="marl3">售后无忧</i></span>
                    <span class="main3_div2_p1_p2_s4">
                        <input type="submit" class="s4_btn1" value="立即预订">
                        <input type="submit" class="s4_btn2" value="了解详情"></span>
                </p>
            </div>
        </div>
        <div class="main3_div2 clearaa">
            <div class="main3_div2_p1">
                <p class="main3_div2_p1_p1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/bd198-4276.jpg"></p>
                <p class="main3_div2_p1_p2">
                    <span class="main3_div2_p1_p2_s1">
                        <a>120-140㎡经济型复式别墅装修公司解决方案</a>
                    </span>
                    <span class="main3_div2_p1_p2_s2">¥
                        <i>95356</i>起</span>
                    <span class="main3_div2_p1_p2_s3">
                        <i>免费设计</i>
                        <i class="marl3">免费监理</i>
                        <i class="marl3">专业施工</i></span>
                    <span class="main3_div2_p1_p2_s4">
                        <input type="submit" class="s4_btn1" value="立即预订">
                        <input type="submit" class="s4_btn2" value="了解详情"></span>
                </p>
            </div>
            <div class="main3_div2_p1">
                <p class="main3_div2_p1_p1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/8efc2-8280.jpg"></p>
                <p class="main3_div2_p1_p2">
                    <span class="main3_div2_p1_p2_s1">
                        <a>140-230㎡经济型复式别墅装修公司解决方案</a>
                    </span>
                    <span class="main3_div2_p1_p2_s2">¥
                        <i>124359</i>起</span>
                    <span class="main3_div2_p1_p2_s3">
                        <i>品牌设计</i>
                        <i class="marl3">用量不限</i>
                        <i class="marl3">上门安装</i>
                        <i class="marl3">售后无忧</i></span>
                    <span class="main3_div2_p1_p2_s4">
                        <input type="submit" class="s4_btn1" value="立即预订">
                        <input type="submit" class="s4_btn2" value="了解详情"></span>
                </p>
            </div>
        </div>
        <div class="main3_div4">
            <div class="main3_div4_div">
                <p class="main3_div4_div_p1">
                    <i class="main3_div4_div_p1_i">今日已有
                        <i class="color">1319</i>位业主</i>
                    <i class="main3_div4_div_p1_i">预定精选套餐方案</i></p>
                <!--轮播图start-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <span>李先生 90㎡ 158****244 6分钟前</span>&nbsp;
                            <span>王先生 86㎡ 187****300 9分钟前</span></div>
                        <div class="swiper-slide">
                            <span>易先生 70㎡ 138****756 12分钟前</span>&nbsp;
                            <span>卫先生 70㎡ 138****756 18分钟前</span></div>
                        <div class="swiper-slide">
                            <span>张先生 68㎡ 137****279 24分钟前</span>&nbsp;
                            <span>吴女士 97㎡ 157****455 28分钟前</span></div>
                        <div class="swiper-slide">
                            <span>沃女士 108㎡ 176****508 30分钟前</span>&nbsp;
                            <span>程先生 117㎡ 150****137 38分钟前</span></div>
                        <script>var mySwiper = new Swiper('.swiper-container', {
                                slidesPerView: 2,
                                loop: true,
                                simulateTouch: false,
                                grabCursor: true,
                                autoplay: 2000,
                                direction: 'vertical'
                            })</script>
                    </div>
                </div>
                <!--按钮-->
                <p class="main3_div4_div_p2">
                    <input type="value" class="d4_btn" value="我也要预定"></p>
            </div>
        </div>
    </div>
    <div class="btn_data-tit main4" data-tit="申请免费预约设计量房">
        <div class="main4_div1">
            <span class="main4_div1_span1">装修效果图</span>
            <span class="main4_div1_span2">&nbsp;已为
                <i class="color">6278</i>位业主找到灵感</span>
            <ul>
                <li class="active">新房装修</li>
                <li class="active1">|</li>
                <li class="active">二手房装修</li>
                <li class="active1">|</li>
                <li class="active">复式装修</li>
                <li class="active1">|</li>
                <li class="active">别墅装修</li>
                <li class="active1">|</li>
                <li class="active">商业装修</li>
                <li class="active">&nbsp;更多></li></ul>
        </div>
        <div class="main4_div2">
            <ul>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c2e3a-6680.jpg">
                    <span class="main-center-cent_div2_sp">
                        <i class="main-center-cent_div2_sp_i1">空间</i>
                        <i class="main-center-cent_div2_sp_i2">
                            <a>客厅</a>&nbsp;
                            <a>卧室</a>&nbsp;
                            <a>卫生间</a>&nbsp;
                            <a>厨房</a>&nbsp;
                            <a>电视墙</a>&nbsp;
                            <a>榻榻米</a>
                        </i>
                    </span>
                </li>
                <li class="marl35">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/cbdb4-3128.jpg">
                    <span class="main-center-cent_div2_sp">
                        <i class="main-center-cent_div2_sp_i1">户型</i>
                        <i class="main-center-cent_div2_sp_i2">
                            <a>一居室</a>&nbsp;
                            <a>二居室</a>&nbsp;
                            <a>三居室</a>&nbsp;
                            <a>复式</a>&nbsp;
                            <a>别墅</a>&nbsp;
                            <a>小户型</a>
                        </i>
                    </span>
                </li>
                <li class="marl35">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/4cccb-9745.jpg">
                    <span class="main-center-cent_div2_sp">
                        <i class="main-center-cent_div2_sp_i1">风格</i>
                        <i class="main-center-cent_div2_sp_i2">
                            <a>简约</a>&nbsp;
                            <a>现代</a>&nbsp;
                            <a>中式</a>&nbsp;
                            <a>欧式</a>&nbsp;
                            <a>美式</a>&nbsp;
                            <a>田园</a>
                        </i>
                    </span>
                </li>
            </ul>
        </div>
        <div class="main4_div3">
            <ul>
                <li class="li1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/7ffed-5214.jpg">
                    <p class="li1_p1">
                        <span class="sp1">绿色儿童房</span>
                        <span class="sp2">
                            <i class="sp2_i1">儿童成长必备</i>
                            <i class="sp2_i2">531案例&nbsp;8492浏览</i></span>
                    </p>
                </li>
                <li class="li3">
                    <ul>
                        <li class="li4">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/79e91-9739.jpg">
                            <p class="li4_p1">
                                <span class="sp1">
                                    <i class="sp1_i1">150平米户型挑高装修</i>
                                    <i class="sp1_i2">65案例</i></span>
                            </p>
                        </li>
                        <li class="li5">
                            <span>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/36f80-7743.jpg">
                                <span class="li5_p1">
                                    <span class="sp1">
                                        <i class="sp1_i1">60平户型挑高装修</i>
                                        <i class="sp1_i2">300案例</i></span>
                                </span>
                            </span>
                            <span class="spanMarL">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/1f173-7961.jpg">
                                <span class="li6_p1">
                                    <span class="sp1">
                                        <i class="sp1_i1">80平户型挑高装修</i>
                                        <i class="sp1_i2">280案例</i></span>
                                </span>
                            </span>
                        </li>
                    </ul>
                </li>
                <li class="li2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/8dde2-1426.jpg">
                    <p class="li2_p1">
                        <span class="sp1">
                            <i class="sp1_i1">文艺家居</i>
                            <i class="sp1_i2">328案例</i></span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="main5">
        <div class="main5_div1 btn_data-tit " data-tit="申请预约免费设计量房">
            <span class="main5_div1_span1">知名装修公司</span>
            <span class="main5_div1_span2">&nbsp;已服务
                <i class="color">31879</i>位业主</span>
            <ul>
                <li class="active">新房装修</li>
                <li class="active1">|</li>
                <li class="active">二手房装修</li>
                <li class="active1">|</li>
                <li class="active">复式装修</li>
                <li class="active1">|</li>
                <li class="active">别墅装修</li>
                <li class="active1">|</li>
                <li class="active">商业装修</li>
                <li class="active">&nbsp;更多></li></ul>
        </div>
        <div class="main5_empty"></div>
        <div class="main5_div2 btn_data-tit " data-tit="申请预约免费设计量房">
            <ul>
                <li class="activeli">
                    <i>合作品牌</i>
                </li>
                <li>
                    <i class="bbs">高性价比</i></li>
                <li>
                    <i>高口碑值</i>
                </li>
                <li>
                    <i>二手房翻新</i>
                </li>
                <li>
                    <i>大宅设计</i>
                </li>
            </ul>
        </div>
        <div class="main5_div3 btn_data-tit " data-tit="申请预约免费设计量房">
            <ul>
                <li>
                    <span class="main5_div3_sp1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/013a8-6701.jpg"></span>
                    <span class="main5_div3_sp2">
                        <i class="main5_div3_sp2_i1">
                            <a>志邦橱柜</a>
                        </i>
                        <i class="main5_div3_sp2_i2">案例：8个</i>
                        <i class="main5_div3_sp2_i2">评论：1189条</i>
                        <i class="main5_div3_sp2_i2">口碑值：106</i></span>
                </li>
                <li>
                    <span class="main5_div3_sp1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/2fe6b-4931.jpg"></span>
                    <span class="main5_div3_sp2">
                        <i class="main5_div3_sp2_i1">
                            <a>圣象</a>
                        </i>
                        <i class="main5_div3_sp2_i2">案例：34个</i>
                        <i class="main5_div3_sp2_i2">评论：1356条</i>
                        <i class="main5_div3_sp2_i2">口碑值：1329</i></span>
                </li>
                <li>
                    <span class="main5_div3_sp1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/9a911-7012.jpg"></span>
                    <span class="main5_div3_sp2">
                        <i class="main5_div3_sp2_i1">
                            <a>欧神若</a>
                        </i>
                        <i class="main5_div3_sp2_i2">案例：46个</i>
                        <i class="main5_div3_sp2_i2">评论：3256条</i>
                        <i class="main5_div3_sp2_i2">口碑值：674</i></span>
                </li>
                <li>
                    <span class="main5_div3_sp1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/84baf-6670.jpg"></span>
                    <span class="main5_div3_sp2">
                        <i class="main5_div3_sp2_i1">
                            <a>罗格朗</a>
                        </i>
                        <i class="main5_div3_sp2_i2">案例：104个</i>
                        <i class="main5_div3_sp2_i2">评论：1423条</i>
                        <i class="main5_div3_sp2_i2">口碑值：532</i></span>
                </li>
                <li>
                    <span class="main5_div3_sp1">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/8a4be-2449.jpg"></span>
                    <span class="main5_div3_sp2">
                        <i class="main5_div3_sp2_i1">
                            <a>立邦漆</a>
                        </i>
                        <i class="main5_div3_sp2_i2">案例：7个</i>
                        <i class="main5_div3_sp2_i2">评论：1189条</i>
                        <i class="main5_div3_sp2_i2">口碑值：557</i></span>
                </li>
            </ul>
        </div>
        <div class="main5_div4">
            <span data-tit="申请预约免费设计量房" class="btn_data-tit ">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/dd50e-5236.png"></span>
            <span class="span111 btn_data-tit" data-tit="立即预约<?= Yii::$app->params['siteNameBase']; ?>装修报价">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/fadbb-6706.png"></span>
        </div>
    </div>
    <div class="main6 btn_data-tit " data-tit="免费预约人气设计师">
        <div class="main6_div1">
            <span class="main6_div1_span1">人气设计师</span>
            <!--<span class="main6_div1_span2">&nbsp;已服务<i class="color">4351879</i>位业主</span>-->
            <ul>
                <li class="active">&nbsp;更多设计师></li></ul>
        </div>
        <div class="main6_div2">
            <ul>
                <li>
                    <span class="main6_div2_li_s1">
                        <em>TOP1</em>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/cf08f-3067.png" /></span>
                    <span class="main6_div2_li_s2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/ac49d-9585.png">
                        <span class="main6_div2_li_s2_ss">
                            <i>立即咨询</i>
                        </span>
                    </span>
                    <span class="main6_div2_li_s3">
                        <span>
                            <i class="main6_li_ss1">张奎</i>
                            <i class="main6_li_ss2">经验3年</i></span>
                    </span>
                    <span class="main6_div2_li_s4">擅长:日式、欧式、简约等风格</span></li>
                <li class="li00">
                    <span class="main6_div2_li_s1">
                        <em>TOP2</em>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/5b59d-7210.png" /></span>
                    <span class="main6_div2_li_s2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/82046-5493.png">
                        <span class="main6_div2_li_s2_ss">
                            <i>立即咨询</i>
                        </span>
                    </span>
                    <span class="main6_div2_li_s3">
                        <span>
                            <i class="main6_li_ss1">赵岩</i>
                            <i class="main6_li_ss2">经验5年</i></span>
                    </span>
                    <span class="main6_div2_li_s4">擅长:现代简约、新中式风、地中海风、欧式古典、别墅装修</span></li>
                <li class="li00">
                    <span class="main6_div2_li_s1">
                        <em>TOP3</em>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a70d6-8133.png" /></span>
                    <span class="main6_div2_li_s2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/71674-5208.png">
                        <span class="main6_div2_li_s2_ss">
                            <i>立即咨询</i>
                        </span>
                    </span>
                    <span class="main6_div2_li_s3">
                        <span>
                            <i class="main6_li_ss1">张静文</i>
                            <i class="main6_li_ss2">经验5年</i></span>
                    </span>
                    <span class="main6_div2_li_s4">擅长:中式，欧美，现代，混搭等风格，小户型设计</span></li>
                <li class="li00">
                    <span class="main6_div2_li_s1">
                        <em>TOP4</em>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c2c59-5502.png" /></span>
                    <span class="main6_div2_li_s2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/f2958-2962.png">
                        <span class="main6_div2_li_s2_ss">
                            <i>立即咨询</i>
                        </span>
                    </span>
                    <span class="main6_div2_li_s3">
                        <span>
                            <i class="main6_li_ss1">聂海</i>
                            <i class="main6_li_ss2">经验3年</i></span>
                    </span>
                    <span class="main6_div2_li_s4">擅长:美式，中式，现代，都市的风格</span></li>
                <li class="li00">
                    <span class="main6_div2_li_s1">
                        <em>TOP5</em>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/14315-4219.png" /></span>
                    <span class="main6_div2_li_s2">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/28bb2-9923.png">
                        <span class="main6_div2_li_s2_ss">
                            <i>立即咨询</i>
                        </span>
                    </span>
                    <span class="main6_div2_li_s3">
                        <span>
                            <i class="main6_li_ss1">刘雯</i>
                            <i class="main6_li_ss2">经验3年</i></span>
                    </span>
                    <span class="main6_div2_li_s4">擅长:地中海、现代简约、别墅设计、LOFT、美式乡村、欧式古典</span></li>
            </ul>
        </div>
    </div>
    <!--main7-->
    <div class="main7 btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修网服务">
        <p class="ttit">
            <b>真实工地直播</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上网就能实时查看你家装修情况
            <span>更多&nbsp;></span></p>
        <!--图片-->
        <ul class="list_img">
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c2467-8222.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>张先生</span>
                        <span>二居室90㎡</span>
                        <span>48260元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e024f-5741.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>王先生</span>
                        <span>一居室68㎡</span>
                        <span>32000元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/ecaf4-5590.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>王小姐</span>
                        <span>三居室120㎡</span>
                        <span>72800元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c2f76-2422.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>黄先生</span>
                        <span>二居室90㎡</span>
                        <span>46000元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/9a95c-8422.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>闫先生</span>
                        <span>二居室98㎡</span>
                        <span>63000元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
            <li class="list_li">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/cbf16-5335.jpg" class="d_img" />
                <p>
                </p>
                <ul>
                    <li>
                        <span>赵女士</span>
                        <span>三居室80㎡</span>
                        <span>88600元</span></li>
                    <li class="li2">
                        <span class="yan">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c8b1f-3016.png" />&nbsp;1636</span>
                        <span class="xin">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a3725-7310.png" />&nbsp;16</span>
                        <span class="btn">查看详情</span></li>
                </ul>
            </li>
        </ul>
        <!--图片END-->
        <!--右侧列表-->
        <div class="dl_list">
            <p>留言板：</p>
            <dl>
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/867e9-6636.jpg" /></dt>
                <dd>
                    <span>王大伟</span>
                    <br />师傅水平很高，也很负责，监理经验丰富，意见很有用...</dd></dl>
            <dl>
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/c3ae8-8161.jpg" /></dt>
                <dd>
                    <span>王先生</span>
                    <br />选门窗的时候很纠结，主要由于正赶上节能改造，街道免...</dd></dl>
            <dl>
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/57d89-3079.jpg" /></dt>
                <dd>
                    <span>武女士</span>
                    <br />5月23日上午8点半，欧十时力门业的 时师傅、李师傅...</dd></dl>
            <dl>
                <dt>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e0e7e-4597.jpg" /></dt>
                <dd>
                    <span>赵先生</span>
                    <br />何先生记得接触大运豪门是在<?= Yii::$app->params['siteNameBase']; ?>组织的团购会上，大运豪门...</dd></dl>
        </div>
        <!--右侧列表END--></div>
    <!--main7END-->
    <!--main8-->
    <div class="main8">
        <p class="ttit  btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务">
            <b>小区工地案例</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已为
            <em>8341</em>位业主查看了小区真实案例</p>
        <ul class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务">
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/ed0c9-8587.jpg" class="big" />
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/2b1c8-8781.png" class="img-txt" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/7adbd-8529.jpg" class="big" />
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/10c86-5600.png" class="img-txt" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/a5967-5451.jpg" class="big" />
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/07dd9-9979.png" class="img-txt" /></li>
        </ul>
        <div class="Q_biao">
            <!--表 -->
            <form method="post" class="biao_yuyue2" name="formMsg" onSubmit="yuyue_1(this);return false;">
                <div class="biao-data">
                    <b>申请整装套餐装修</b>
                </div>
                <input type="text" name="name" class="ipt" placeholder="请输入您的姓名" required>
                <input type="tel" onkeyup="value=value.replace(/[^\d]/g,'') " name="telephone" class="ipt" placeholder="请输入您的电话" required>
                <input type="hidden" name="_csrf-frontend" value="olAQI6QXqtUOK8cftUkgQp_PeXEQNq0pHB1q08ar2WWHaMWddVWf9TgGmdb3-QcITZ1UV7HljHO2JC9JRFzglA==">
                <input type="hidden" value="2" name="is_mobile" />
                <input type="hidden" value="0" name="employee_id" />
                <input type="hidden" value="4" name="channel_id" />
                <input type="hidden" value="984615576fb9918cd8c6a7a6a750465f" name="visit_request_id" />
                <p class=" btn-submit">
                    <input type="submit" value="马上预约" class="ipt ipt-submit">提
                    <br />交</p></form>
        </div>
    </div>
    <!--main8END-->
    <!--main9-->
    <div class="main9">
        <p class="ttit">
            <b class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台480道工艺">施工工艺</b>
            <em class="wid btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务"></em>
            <b class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务">品质保障</b></p>
        <ul class="ul_img btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台480道工艺">
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e2671-9837.jpg" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/1f9c5-2158.jpg" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/11608-3046.jpg" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/1b742-9422.jpg" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/5a8ce-8369.jpg" /></li>
            <li>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/e23ec-7539.jpg" /></li>
        </ul>
        <div class="rigth btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务">
            <p>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/b446a-7556.jpg" />
                <span>
                    <b>最值得信赖装修平台</b>
                    <br />中国建筑装饰协会权威评定</span></p>
            <ul class="L_ul">
                <li>
                    <b>3.2万套</b>
                    <br />房屋装修经验</li>
                <li>
                    <b>100%</b>
                    <br />业主投诉解决率</li>
                <li>
                    <b>96%</b>
                    <br />业主口碑</li></ul>
            <ul class="dl_list">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/f8248-3578.jpg" />
                    <br />100%正品保障</li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/b655c-3042.jpg" />
                    <br />0增项保障</li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/089aa-9518.jpg" />
                    <br />售后保障</li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/dd78f-6797.jpg" />
                    <br />投诉100%解决</li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/ddaa3-2965.jpg" />
                    <br />施工保障</li></ul>
            <div class="text">
                <b><?= Yii::$app->params['siteNameBase']; ?>装修平台郑重承诺：</b>为切实保障业主利益，不发布虚假广告，自觉抵制假货、假冒知名商品，保证业主的知情权、选择权，不虚标价格、折扣和团购数据，不误导、侵害业主的合法权益，认真解决业主投诉，主动接受工商、通信管理等有关政府部门、行业组织、业主和媒体的监督。</div>
        </div>
    </div>
    <!--main9END-->
    <!--蒙层-->
    <div class=" Hui" id="Hui"></div>
    <!--蒙层END-->
    <!--表 二维码-->
    <div class="biao_d" id="biao_d">
        <!--二维码-->
        <div class="Er" id="Er">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d50d9-7741.png" class="close" alt="关闭" />
            <!--关闭按钮-->
            <p class="P_tit">
                <b>恭喜您预约成功</b>
            </p>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/6afc4-8814.jpg" class=" M" /></div>
        <!--二维码END-->
        <!--表 -->
        <form method="post" class="biao_yuyue" id="biao_yuyue" name="formMsg" onSubmit="yuyue_1(this);return false;">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/d50d9-7741.png" class="close" alt="关闭" />
            <!--关闭按钮-->
            <div class="biao-data">
                <b id="tit">申请整装套餐装修</b>
                <p>已有
                    <span>18888</span>人报名</p></div>
            <input type="text" name="name" class="ipt" required placeholder="请填写您的姓名">
            <input type="tel" onkeyup="value=value.replace(/[^\d]/g,'') " required name="telephone" class="ipt" placeholder="填写手机号，预约上门量房">
            <input type="hidden" name="_csrf-frontend" value="olAQI6QXqtUOK8cftUkgQp_PeXEQNq0pHB1q08ar2WWHaMWddVWf9TgGmdb3-QcITZ1UV7HljHO2JC9JRFzglA==">
            <input type="hidden" value="2" name="is_mobile" />
            <input type="hidden" value="0" name="employee_id" />
            <input type="hidden" value="4" name="channel_id" />
            <input type="hidden" value="984615576fb9918cd8c6a7a6a750465f" name="visit_request_id" />
            <!--<div class="selected">
            <input type="text" value="请选择房屋所在城市" id="source1" class="ipt source">
            <div class="show-block show-block1">
            <ul>
            <li class="active">北京</li>
            <li>上海</li>
            <li>石家庄</li>
            <li>天津</li>
            <li>哈尔滨</li>
            <li>西安</li>
            <li>武汉</li>
            <li>成都</li>
            <li>大连</li>
            <li>济南</li></ul>
            </div>
            <b></b>
            <span></span></div>-->
            <input type="submit" value="马上预约" class="ipt ipt-submit ipt-submit3"></form>
        <!--表END--></div>
    <!--表 二维码END--></div>
<input type="hidden" id="_csrf-frontend" value="olAQI6QXqtUOK8cftUkgQp_PeXEQNq0pHB1q08ar2WWHaMWddVWf9TgGmdb3-QcITZ1UV7HljHO2JC9JRFzglA==">
<input type="hidden" value="2" id="is_mobile" name="is_mobile" />
<input type="hidden" value="0" id="employee_id" name="employee_id" />
<input type="hidden" value="4" id="channel_id" name="channel_id" />
<input type="hidden" value="984615576fb9918cd8c6a7a6a750465f" id="visit_request_id" name="visit_request_id" />
<!-- end main -->
<!-- 底部 -->
<div class="subFooter btn_data-tit" style="float:left;" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台服务">
    <div class="subFooterBG">
        <div class="subFooterT">
            <ul class="subFooterT_list clear">
                <li>
                    <a>
                        <i class="i1"></i>
                        <span>100%正品保障</span></a>
                </li>
                <li>
                    <a>
                        <i class="i2"></i>
                        <span>90天退换货</span></a>
                </li>
                <li>
                    <a>
                        <i class="i9"></i>
                        <span>质保金先行赔付</span></a>
                </li>
                <li>
                    <a>
                        <i class="i4"></i>
                        <span>30天调补差价</span></a>
                </li>
                <li>
                    <a>
                        <i class="i5"></i>
                        <span>7x24小时客服</span></a>
                </li>
                <li>
                    <a>
                        <i class="i6"></i>
                        <span>设计保障</span></a>
                </li>
                <li>
                    <a>
                        <i class="i7"></i>
                        <span>资金保障</span></a>
                </li>
                <li>
                    <a>
                        <i class="i8"></i>
                        <span>施工保障</span></a>
                </li>
                <li>
                    <a>
                        <i class="i3"></i>
                        <span>投诉100%解决</span></a>
                </li>
                <li class="last">
                    <a>
                        <i class="i0"></i>
                        <span>投诉保障</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="subFooterBg">
        <div class="subFooterB">
            <ul>
                <li>
                    <a rel="nofollow">
                        <p>网站服务</p>
                    </a>
                </li>
                <li>
                    <a>家具建材团购</a>
                </li>
                <li>
                    <a>家具建材网铺</a>
                </li>
                <li>
                    <a>找装修公司</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>
                        <p>新手帮助</p>
                    </a>
                </li>
                <li>
                    <a>会员注册</a>
                </li>
                <li>
                    <a>个人密码</a>
                </li>
                <li>
                    <a>找回资料</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a>
                        <p>购物指南</p>
                    </a>
                </li>
                <li>
                    <a>参加团购会</a>
                </li>
                <li>
                    <a>下单流程</a>
                </li>
                <li>
                    <a>商家折扣</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a rel="nofollow">
                        <p>售后服务</p>
                    </a>
                </li>
                <li>
                    <a>退换货说明</a>
                </li>
                <li>
                    <a>退单流程</a>
                </li>
                <li>
                    <a>投诉受理</a>
                </li>
            </ul>
            <ul class="last">
                <li>
                    <p>联系我们</p>
                </li>
                <li>业主服务：<?= Yii::$app->params['siteHotline']; ?></li></ul>
            <div class="SFBlist">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/collect/img/5942b-5348.jpg" alt="微信二维码" width="80px" height="80px">
                <div class="weixin">
                    <span>扫描二维码</span>
                    <span>关注官方微信</span></div>
            </div>
        </div>
    </div>
    <!-- 版权 -->
    <div class="copyRight btn_data-tit" style="float:left;" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>装修平台">
        <div class="subcoptRight">
            <div class="SCRleft">
                <ul>
                    <li class="first">
                        <a>关于<?= Yii::$app->params['siteNameBase']; ?>修网</a>
                    </li>
                    <li>
                        <a>团购活动</a>
                    </li>
                    <li>
                        <a>媒体报道</a>
                    </li>
                    <li>
                        <a>合作单位</a>
                    </li>
                    <li>
                        <a>友情链接</a>
                    </li>
                    <li>
                        <a>诚聘英才</a>
                    </li>
                    <li>
                        <a>联系我们</a>
                    </li>
                    <li>
                        <a>网站地图</a>
                    </li>
                    <li class="last">
                        <a>北京市 丰台区 宋家庄 万科红底商 <?= Yii::$app->params['siteNameBase']; ?>体验馆（地铁宋家庄C出口即到）（邮编100079）</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
