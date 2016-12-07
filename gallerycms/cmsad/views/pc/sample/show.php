<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'alzx'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="alzx-section">
    <div class="zshops_main">
        <div class="topimg-384" style="background:#fff url(<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/alzx-banner.png) no-repeat top center">
            <div class="topimg-con alzx-img  pop_zixun">
                <a href="javascript:" value="1">免费咨询</a>
            </div>
        </div>
        <div class="alzx-crumbs alzx-crumbs-ck">
            <div class="alzx-con">
                <a class="crumbs-01" href="/">首页</a><em>></em>
                <span class="crumbs-02"><a href="<?= Url::to(['/cmsad/sample/index', 'page' => 1]); ?>">案例中心</a></span><em>></em>
                <span class="crumbs-02"><?= $info['name']; ?></span>
            </div>
        </div>
        <div class="alzx-con ckxz-main margin25">
            <div class="det-con-top">
                <h4 class="floatL det-h4"><?= $info['name']; ?></h4>
                <div class="floatR result-btn result-btn1">
                    <a href="javascript:;" class="r-z good_num" id="good_104148"></a>
                    <a href="javascript:;" class="r-sc r-sc1" id="scan_104148"></a>
                    <a href="javascript:;" class="r-fx r-fx1"></a>
                    <div class="bdsharebuttonbox">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script>window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "24"
                            },
                            "share": {}
                        };
                        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                    <span class="r-z-tips">赞</span>
                    <span class="r-sc-tips">浏览34381次</span>
                    <span class="r-fx-tips">分享至</span></div>
                <div class="clear"></div>
            </div>
            <div class="det-content">
            <div style="text-align: left;">公司名称：<?= $info['name']; ?><br /></div>
            <div style="text-align: left;"><?= $info['description']; ?></div>
                <div style="text-align: left;">
                    <br /></div>
                <div style="text-align: center;">一、首页一览</div>
                <div style="text-align: left;">
                    <br /></div>
                <div style="text-align: center;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/573449971de75.png" width="1000" alt="" />
                    <br /></div>
                <div style="text-align: center;">
                    <br /></div>
                <div style="text-align: center;">二、产品展示</div>
                <div style="text-align: left;">
                    <br /></div>
                <div style="text-align: center;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/573449c1630a7.png" width="1000" alt="" />
                    <br /></div>
                <div style="text-align: center;">
                    <br /></div>
                <div style="text-align: center;">三、新闻中心</div>
                <div style="text-align: center;">
                    <br /></div>
                <div style="text-align: center;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/57344b1ceb00a.png" width="1000" alt="" />
                    <br /></div>
                <div style="text-align: center;">
                    <br /></div>
            </div>
            <!-- <div class="det-pic">
            <div class="det-pic-wrap">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/alzx-det-img.jpg"></div>
            </div> -->
            <div class="det-link">
                <!--<a href="http://www.jshwxcocoa.com" class="click-a" target="_blank">点此访问网站</a>-->
                <a id="TQzx0" class='zaixianzixun click-a' clickCount="true" clickAdd="zaixianzixun">
                    <em></em>有类似需求了解报价</a>
            </div>
        </div>
        <!--详情结束--></div>
    <div class="alzx-con ckxz-main alzx-box" id="xg_case"></div>
    <?= $this->render('../common/_askzero'); ?>
    <?= $this->render('../common/_ask'); ?>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">var xgal = function() {
        var id = '104148';
        $.post('/case/xg', {
            id: id
        },
        function(json) {
            if (json.status != '1') return;
            data = json.info;
            if (data.xg != '') {
                $('#xg_case').html(data.xgal);
            }
            $('#good_' + id).html(data.good);
            $('#scan_' + id).html(data.scan);

        },
        'json');
    }
    $(function() {
        xgal();
        $('.good_num').on('click',
        function() {
            var that = $(this);
            var id = 104148;
            $.post('/case/good', {
                id: id
            },
            function(json) {
                if (json.status == 1) {
                    that.html(parseInt(that.html(), 10) + 1);
                } else {
                    alert('亲，出错了');
                }
            },
            'json');
        });
        //轮播图
        $('.alzx-flexslider').flexslider({
            directionNav: false,
            pauseOnAction: false,
            animation: "slide"
        });

        //页签切换
        //页签切换
        $(".al-title").TabSwitch({
            classname: 'current',
            type: 'click',
            menu: '.det-dl dl',
            content: '.det-gray .det-gray-list'
        });

        // 分享
        $('.r-fx').click(function(e) {
            $(this).siblings('.bdsharebuttonbox').toggle();
            e.stopPropagation();
        })
        // 隐藏分享按钮
        $(document).click(function() {
            $('.bdsharebuttonbox').hide();
        });
        // 0元体验咨询弹窗
        $('.det-tag .zero-zixun').click(function(event) {
            var val = $(this).attr('value');
            $('#admin_add_value').val(val);
            $('.zero_pop').show();
        });
        // 0元体验咨询弹窗关闭
        $('.zero_pop .close').click(function(event) {
            $('.zero_pop').hide();
        });
        // 提示
        $('.result-btn .r-z').hover(function() {
            $(this).siblings('.r-z-tips').fadeIn();
        },
        function() {
            $(this).siblings('.r-z-tips').fadeOut();
        });

        $('.result-btn .r-sc').hover(function() {
            $(this).siblings('.r-sc-tips').fadeIn();
        },
        function() {
            $(this).siblings('.r-sc-tips').fadeOut();
        });

        $('.result-btn .r-fx').hover(function() {
            $(this).siblings('.r-fx-tips').fadeIn();
        },
        function() {
            $(this).siblings('.r-fx-tips').fadeOut();
        });
    });</script>
<div class="ztc-quick clearfix">
    <span class='ztc-quick-close'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc/ztc-icon-close1.png" alt=""></span>
    <div class='ztc-quick-txt'>
        <div class="quick-txt-hd">企业建站“直通车”</div>
        <div class="quick-txt-sub">中企动力为您打造VIP式建站服务</div></div>
    <div class="ztc-quick-iden">
        <span class='quick-iden-q'>您的身份？</span>
        <ul class="clearfix">
            <li class='active'>
                <a href="/zhitongche?id=1" target="_blank">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc-iden-img1.png" alt="" align='left'>
                    <span>老板</span></a>
            </li>
            <li class='last'>
                <a href="/zhitongche?id=2" target="_blank">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/img/ztc-iden-img2.png" alt="" align='left'>
                    <span>职员</span></a>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">$(function() {
        var winW = $(window).width();
        $(window).resize(function() {
            var winW = $(window).width();
        });
        var ztcQuickW = $('.ztc-quick').width();
        var timer = setTimeout(function() {
            $('.ztc-quick').animate({
                left: (winW - ztcQuickW) / 2
            },
            800)
        },
        3000);
        $('.ztc-quick-close').click(function() {
            $('.ztc-quick').animate({
                left: winW
            },
            800);
        });
        $('.ztc-quick-iden ul li').mouseenter(function() {
            $(this).addClass('active').siblings('').removeClass('active');
        });
    });</script>
