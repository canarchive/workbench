<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['25195-6919', '167a4-9368', '859bc-4030', '00ce0-6662', '73eaa-5273'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat1/m']);
?>
<?= $this->render('_header'); ?>
<!--主导航（默认隐藏） start-->
<?php //echo $this->render('_nav'); ?>
<!-- 正文 start -->
<div class="container" data-page="budget-info-list">
    <div class="bar-nav cMdGray clearfix">
        <i class="iconfont icone620 l"></i>
        <strong class="title"><?= $this->context->currentCityName; ?>装修报价</strong>
    </div>
    <!-- 分类筛选-->
    <?php echo $this->render('_sort', ['quoteSortInfos' => $quoteSortInfos, 'cTag' => $tag, 'tagInfos' => $tagInfos, 'model' => $model]); ?>
    <!-- 图文混排（左侧图片，右侧文字） start -->
    <div class="tuwen-mix bgfff">
        <div class="mask-layer2 zp-mask-layer2"></div>
        <?php foreach ($infos as $info) { ?>
        <a class="tuwen-item clearfix" href="/<?= $this->context->currentCityCode . '/quoteshow_' . $info['id'] . '.html'; ?>">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2"><?= $info['name']; ?></p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16"><?= $info['price_part']; ?></i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16"><?= $info['price_full']; ?></i></span>
                </p>
            </div>
        </a>
        <?php } ?>
    </div>
</div>
<!-- 图文混排（左侧图片，右侧文字） end -->
<!-- 分页 start -->
<!--<div class="block-page cDGray">
    <span class="disabled">
        <a href="javascript:;">上一页</a></span>
    <span>
        <select class="cDGray">
            <option value="/baojia/b0a0o0/p1/" selected="selected">第1页</option>
            <option value="/baojia/b0a0o0/p2/">第2页</option>
            <option value="/baojia/b0a0o0/p3/">第3页</option>
            <option value="/baojia/b0a0o0/p4/">第4页</option>
            <option value="/baojia/b0a0o0/p5/">第5页</option>
            <option value="/baojia/b0a0o0/p6/">第6页</option>
            <option value="/baojia/b0a0o0/p7/">第7页</option></select>
    </span>
    <span>
        <a href="/baojia/b0a0o0/p2/">下一页</a></span>
    <div class="hide">
        <a href="">第1页</a>
        <a href="">第1页</a>
        <a href="">第1页</a>
        <a href="">第1页</a>
        <a href="">第1页</a>
        <a href="">第1页</a></div>
</div>-->
</div>
<?= $this->render('_footer'); ?>
