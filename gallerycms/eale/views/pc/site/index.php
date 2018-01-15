<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'bootstrap', 'yq_docs',
];
$this->params['jsFiles'] = [
    'jquery', 'bootstrap', 'unveil', 'yq_doc',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?= $this->render('../../_indexthree'); ?>
<!-- /wrap -->
<div class="wrap">
    <?= $this->render('../../_announce'); ?>
    <div align="center" class="centertitle">
        <img src="<?php $picPoint = $this->context->siteCode == 'eale' ? 'bf075c21-8aab-4a05-afd5-88b23528ac85.png' : '4acd5a57-3fa5-450b-8fab-0dcdf40e460b.png'; echo Yii::getAlias('@asseturl1'); ?>/eale/picbefore/<?= $picPoint; ?>" alt="首页最新动态标题" /></div>
    <div class="container works" id="box">
        <div class="row">
            <div class="col-xs-6 col-md-6 lefttitle">
                <h3>WORKS 右视觉最新作品</h3></div>
            <div class="col-xs-6 col-md-6 righttitle">
                <div class="pull-right">
                    <?php if ($this->context->siteCode == 'iealecn') { ?>
                    <a href="studentwork/" target="_Blank">+more</a>
                    <?php } elseif ($this->context->siteCode == 'ieale') { ?>
                    <a href="star/" target="_Blank">明星摄影作品</a>&nbsp;/&nbsp;
                    <a href="people/" target="_Blank">个人写真作品</a>&nbsp;/&nbsp;
                    <a href="wedding/" target="_Blank">婚纱摄影作品</a>
                    <?php } else { ?>
                    <a href="commercial/" target="_Blank">广告摄影作品</a>&nbsp/&nbsp
                    <a href="fashion/" target="_Blank">服装摄影作品</a>&nbsp/&nbsp
                    <a href="star/" target="_Blank">艺人摄影作品</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($sampleInfos as $info) { ?>
            <div class="col-xs-6 col-md-4 col-nopadding">
                <div class="works-con">
                    <a href="<?= "/sample/{$info['id']}.html"; ?>">
                        <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
                        <div class="title">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/ico08.png" /><?= $info['name']; ?>
                            <span class="glyphicon glyphicon-play pull-right"></span><br />
                            <span class="subtitle"><?= $info['title']; ?></span></div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container news" id="box">
        <img class="img-responsive bgleft" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/35c1acf8-021a-420d-8f21-54494f6d58ea.jpg" alt="新闻左侧渐变背景" />
        <img class="img-responsive bgright" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/3b1dad45-5a2c-4692-9493-a0a57db9d812.jpg" alt="新闻右侧渐变背景" />
        <div class="row">
            <div class="col-xs-6 col-md-6 lefttitle">
                <h3>NEWS 右视觉新闻和活动</h3></div>
            <div class="col-xs-6 col-md-6 righttitle">
                <div class="pull-right">
                    <a href="info/" target="_blank">+more</a></div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($infoInfos as $info) { ?>
            <div class="col-xs-6 col-md-6 col-nopadding">
                <div class="news-con">
                    <a href="<?= "/info/{$info['id']}.html"; ?>">
                        <div class="title">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/ico08b.png" />
                            <h3><?= $info['name']; ?>
                                <p class="subtitle"><?= $info['title']; ?></p></h3>
                        </div>
                        <img src="<?= $info->resizePic('thumb', 574, 329); ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
                        <p class="time"><?= date('Y.m.d', $info['created_at']); ?><span class="glyphicon glyphicon-play pull-right"></span></p>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div align="center" class="centertitle">
        <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/054c3e31-ff60-430c-854a-c3bd0266612e.png" alt="与右视觉同行" />
    </div>
    <div class="container cooperation">
        <?= $this->render('../../_cstar', ['isMobile' => false, 'type' => 'customer', 'infos' => $customerInfos]); ?>
        <?= $this->render('../../_cstar', ['isMobile' => false, 'type' => 'star', 'infos' => $starInfos]); ?>
    </div>
</div>
<script type="text/javascript">$(function() {
        $('#box div img').mouseover(function(e) {
            $(this).stop().fadeTo(500, 0.6);
        });
        $('#box div img').mouseout(function(e) {
            $(this).stop().fadeTo(500, 1);
        });
    })</script>
<script type="text/javascript">function tb_yq_artcleseek() {
        var txt = document.getElementById("tb_yq_artcleseek").value;
        var url = "tag/";
        if (txt != "") url = url + encodeURIComponent(txt) + ".html";

        window.open(url);
    }</script>
<script type="text/javascript">$(function() {

        $(".float .fl_one").hover(function() {
            $(".float .fl_hover").fadeIn(300);
        },
        function() {
            $(".float .fl_hover").fadeOut(300);
        })

    })

    $(window).scroll(function() {
        // 当滚动到最底部以上100像素时， 加载新内容
        if ($(this).scrollTop() >= 500) {
            $(".float").css("display", "block");
        } else {
            $(".float").css("display", "none");
        }
    });</script>
<script type="text/javascript">//菜单 修正下拉菜单时一级菜单不生效bug
    var dropdowns = $(".dropdown-toggle");
    for (var i = 0; i < dropdowns.length; i++) {
        $(dropdowns[i]).click(function() {
            var url = $(this).attr("href");

            if (url != undefined && url != "#") {
                var target = $(this).attr("target");
                if (target == "_blank") window.open(url);
                else location.href = url;
            }
        });
    }</script>
