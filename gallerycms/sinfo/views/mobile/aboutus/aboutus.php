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
                                <h3>关于我们</h3>
                                <div class="txt-con">
                    <div class='txt-con-item1'>
                        <h4>倾注多年心血实践研发</h4>
                        <p>让<?= $this->context->currentSiteInfo['name']; ?>，如一道闪电横空面世</p>
                    </div>
                    <div class='txt-con-item2'>
                        <h4>提升业绩</h4>
                        <p>只需三步，锁定精准意向客户</p>
                    </div>
                    <div class='txt-con-item3'>
                        <h4>为营销而生</h4>
                        <p>一段神奇的代码、改变了世界。</p>
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
                    <h3>为营销而生</h3>
                    <div class="swiper-container wrap-s" id='wrap-s'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img1.jpg" alt=""></div>
                                <div class="zz-name">2013年度优秀域名注册服务机构</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img2.jpg" alt=""></div>
                                <div class="zz-name">ZtouchS软件著作权登记证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img3.jpg" alt=""></div>
                                <div class="zz-name">质量管理体系认证证书(中文)</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img4.jpg" alt=""></div>
                                <div class="zz-name">Z+软件著作权证书</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img5.jpg" alt=""></div>
                                <div class="zz-name">可信网站明星验证服务中心</div></div>
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/zz-img6.jpg" alt=""></div>
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
                                <dd><?= Yii::$app->params['siteAddressInfo']; ?></dd></dl>
                            <dl>
                                <dt>邮编：</dt>
                                <dd>100176</dd></dl>
                        </div>
                        <div class="linkus-ways">
                            <dl>
                                <dt>电话：</dt>
                                <dd><?= Yii::$app->params['siteHotline']; ?></dd></dl>
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
