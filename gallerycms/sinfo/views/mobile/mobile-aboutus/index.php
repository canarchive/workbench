<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
?>
<section class='content'>
    <div class="swiper-container" id='wrap-b'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="zqdl-content container mt0 btNone">
                    <div class="bd">
                        <ul class='bd clearfix'>
                            <li class="active">
                                <h3>为什么选择<?= Yii::$app->params['siteNameBase']; ?>？</h3>
                                <div class="txt-con">
                    <div class='txt-con-item1'>
                        <h4>9年SEM行业经验</h4>
                        <p>9年SEM实战经验，服务过亿级账户</p>
                    </div>
                    <div class='txt-con-item2'>
                        <h4>360套</h4>
                        <p>针对360行专属落地营销解决方案</p>
                    </div>
                    <div class='txt-con-item3'>
                        <h4>品牌合作案例</h4>
                        <p>全国1000家品牌合作案例，因为专业所以专注</p>
                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>企业资质</h3>
                    <div class="swiper-container wrap-s" id='wrap-s'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img1.jpg" alt=""></div>
                                <div class="zz-name">2013年度优秀域名注册服务机构</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img2.jpg" alt=""></div>
                                <div class="zz-name">ZtouchS软件著作权登记证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img3.jpg" alt=""></div>
                                <div class="zz-name">质量管理体系认证证书(中文)</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img4.jpg" alt=""></div>
                                <div class="zz-name">Z+软件著作权证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img5.jpg" alt=""></div>
                                <div class="zz-name">可信网站明星验证服务中心</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/images/zz-img6.jpg" alt=""></div>
                                <div class="zz-name">通用网址金牌验证服务中心</div></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <span class='arrow-down'></span>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <h3>联系我们</h3>
                    <div class="linkus-con">
                        <div class="linkus-add">
                            <dl>
                                <dt>地址：</dt>
                                <dd>北京市经济技术开发区地盛西路1号 数码庄园A2座</dd></dl>
                            <dl>
                                <dt>邮编：</dt>
                                <dd>100176</dd></dl>
                            <dl>
                                <dt>ADD：</dt>
                                <dd>Building A2,No.1,Disheng West Road Beijing Econom ic-Technological Development Area</dd></dl>
                        </div>
                        <div class="linkus-ways">
                            <dl>
                                <dt>电话：</dt>
                                <dd>400-660-5555</dd></dl>
                            <dl>
                                <dt>网址：</dt>
                                <dd>www.300.cn</dd></dl>
                            <dl>
                                <dt>邮箱：</dt>
                                <dd>
                                    <p>客户服务 -
                                        <a href="mailto:sevice@weinaya.com">service@weinaya.com</a>
                                    </p>
                                    <p>产品合作 -
                                        <a href="mailto:chanpinhezuo@weinaya.com">chanpinhezuo@weinaya.com</a>
                                    </p>
                                    <p>媒介合作 -
                                        <a href="mailto:meijiehezuo@weinaya.com" >meijiehezuo@weinaya.com</a>
                                    </p>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>var winH = $(window).height() - $('header').outerHeight(true) - $('footer').outerHeight(true);
    $('#wrap-b .swiper-wrapper .swiper-slide').height(winH);
    var swiper1 = new Swiper('#wrap-s', {
        pagination: '#wrap-s .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper1 = new Swiper('#wrap-s1', {
        pagination: '#wrap-s1 .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper1 = new Swiper('#wrap-s2', {
        pagination: '#wrap-s2 .swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });

    var swiper = new Swiper('#wrap-b', {
        paginationClickable: true,
        slidesPerView: 1,
        direction: 'vertical',
        paginationClickable: true
    });</script>
