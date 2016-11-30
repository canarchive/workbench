<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="lxwm_main">
    <?= $this->render('_banner'); ?>
    <div class="container">
        <div class="top_links">
            <a href="/" class="index_link">首页</a>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => '', 'page'=> 1]); ?>">营销学院</a>
            <?php if (!empty($tagInfos['pInfo'])) { $pInfo = $tagInfos['pInfo']; ?>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => $pInfo['catdir'], 'page'=> 1]); ?>"><?= $pInfo['name']; ?></a>
            <?php } ?>
            <?php if (!empty($tagInfos['cInfo'])) { $cInfo = $tagInfos['cInfo']; ?>
            <em>></em>
            <a href="<?= Url::to(['/cmsad/info/index', 'tag' => $cInfo['catdir'], 'page'=> 1]); ?>"><?= $cInfo['name']; ?></a>
            <?php } ?>
        </div>
        <div class="aboutzq">
            <?= $this->render('_left', ['cInfos' => $tagInfos['cInfos'], 'id' => $tagInfos['id']]); ?>
            <div class="zq-content floatL">
                <ul class="media-list-con">
                    <?php foreach ($infos as $info) { ?>
                    <li>
                        <a href="<?= Url::to(['/cmsad/info/show', 'id' => $info['id']]); ?>">
                            <div class="t"><?= $info['name']; ?>
                                <span class="time"><?= date('Y-m-d H:i:s', $info['created_at']); ?></span>
                            </div>
                            <div class="des"><?= $info['description']; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="page">
                    <div class="all-page">共
                        <span>940</span>条</div>
                    <div class="flip-page">
                        <ul>
                            <li>
                                <a class="active">1</a></li>
                            <li>
                                <a class="num" href="/info/index/page/2.html">2</a></li>
                            <li>
                                <a class="num" href="/info/index/page/3.html">3</a></li>
                            <li>
                                <a class="num" href="/info/index/page/4.html">4</a></li>
                            <li>
                                <a class="num" href="/info/index/page/5.html">5</a></li>
                            <li>
                                <a class="next" href="/info/index/page/2.html">下一页</a></li>
                            <li>
                                <a class="end" href="/info/index/page/94.html">尾页</a></li>
                        </ul>
                    </div>
                    <div class="now-page">当前第
                        <span>1/94</span>页</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="ask_ways floatR">
                <ul>
                    <li class="ask_ways1">
                        <h3>预约专家</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL pop_zixun">
                                <div>为您提供一对一解决方案</div>
                                <a class="" href="javascript:" value="1">立即预约</a></div>
                        </div>
                    </li>
                    <li class="ask_ways2">
                        <h3>售前咨询</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>周一至周五9:00——17:30</div>
                                <a id="TQzx0" class="zaixianzixun" clickCount="true" clickAdd="zaixianzixun">立即咨询</a></div>
                        </div>
                    </li>
                    <li class="ask_ways3">
                        <h3>联系方式</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <p>400-660-5555</p>
                                <div>全国7×24小时热线服务</div></div>
                        </div>
                    </li>
                    <li class="ask_ways4">
                        <h3>免费报价</h3>
                        <div class="ask_ways_detail clearfix">
                            <span class="floatL"></span>
                            <div class="detail_txt floatL">
                                <div>专属专业顾问1对1报价</div>
                                <a href="/free.html" target="_blank">免费报价</a></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- 免费咨询 begin-->
    <?= $this->render('../common/_ask'); ?>
</div>
<script type="text/javascript">$(function() {
        $('.flexslider').flexslider({
            directionNav: false,
            pauseOnAction: true,
            animation: "slide"
        });
    });
    $(function() {
        var butwidth = parseInt($('.flex-control-nav').css('width'));
        var bannerwidth = parseInt($('.flexslider').css('width'));
        $('.flex-control-nav').css('margin-right', (bannerwidth - butwidth) / 2);
    });</script>
<script type="text/javascript" src="http://s.300.cn/current/home/js/jquery.flexslider-min.js"></script>
<!-- 轮播图 -->
