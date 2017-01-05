<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'common', 'public', 'style'
];
$this->params['jsFiles'] = [
    'jquery-1.8.3.min',
];
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '';
//$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="lxwm_main">
    <?= $this->render('_banner'); ?>
    <div class="container">
        <div class="top_links">
            <a href="/" class="index_link">首页</a>
            <em>></em>
            <a href="<?= Url::to(['/sinfo/info/index', 'tag' => '_', 'page'=> '_1']); ?>">营销学院</a>
            <?php if (!empty($currentSort)) { ?>
            <em>></em>
            <a href="<?= Url::to(['/sinfo/info/index', 'tag' => '_' . $currentSort, 'page'=> '_1']); ?>"><?= $currentSortName; ?></a>
            <?php } ?>
            <em>></em>
            <a href="javascript:void(0);"><?= $info['name']; ?></a>
        </div>
        <div class="aboutzq">
            <?= $this->render('_left', ['model' => $model, 'currentSort' => $currentSort]); ?>
            <div class="zq-content floatL">
                <div class="news-content">
                    <h1 class="title"><?= $info['name']; ?></h1>
                    <div class="sub-info">
                        <!--<span>来源： </span>-->
                        <span>发布时间：<?= date('Y-m-d', $info['created_at']); ?></span>
                    </div>
                    <div class="content"><?= $info['content']; ?></div>
                    <div class="shar">
                        <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1446885378413">
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                        </div>
                        <script>window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0",
                                    "bdSize": "32"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                    </div>
                </div>
                <div class="related-article">
                    <div class="t">相关文章</div>
                    <ul>
                        <?php $i = 1; foreach ($infos as $value) { if ($value['id'] == $info['id'] || $i > 5) { continue;}?> 
                        <li>
                            <a href="<?= Url::to(['/sinfo/info/show', 'id' => $value['id']]); ?>" target="_blank">
                            <span><?= date('Y-m-d', $value['created_at']); ?></span><?= $value['name']; ?>
                            </a>
                        </li>
                        <?php $i++; } ?>
                    </ul>
                </div>
            </div>
            <?= $this->render('_right'); ?>
            <div class="clear"></div>
        </div>
    </div>
    <?= $this->render('../common/_ask'); ?>
</div>
<script>window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "32"
        },
        "share": {}
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];

    $(function() {
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
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/jquery.flexslider-min.js"></script>
