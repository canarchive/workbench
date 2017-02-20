<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['25195-6919', '167a4-9368', '859bc-4030', '00ce0-6662', '73eaa-5273'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat1/m']);
?>
<?= $this->render('_header'); ?>
<!--主导航（默认隐藏） start-->
<?= $this->render('_nav'); ?>
<!-- 正文 start -->
<div class="container" data-page="budget-info-list">
    <div class="bar-nav cMdGray clearfix">
        <i class="iconfont icone620 l"></i>
        <strong class="title"><?= $this->context->currentCityName; ?>装修报价</strong></div>
    <!-- 分类筛选-->
    <?= $this->render('_sort'); ?>
    <!-- 图文混排（左侧图片，右侧文字） start -->
    <div class="tuwen-mix bgfff">
        <div class="mask-layer2 zp-mask-layer2"></div>
        <a class="tuwen-item clearfix" href="/baojia/644868.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">雷捷时代广场130平米新古典风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">36087</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">85097</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644867.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">桃花苑120平米中式风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">36707</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">81947</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644866.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">万年花城110平米美式风格装修报价普通住宅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">33839</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">75309</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644865.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">对视70平米地中海风格装修报价小户型</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">22503</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">48893</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644864.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">漷县镇商业广场住宅小区200平米田园风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">53670</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">129070</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644863.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">五矿万科·如园(如园作品壹号)190平米东南亚风格装修报价普通住宅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">56513</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">128143</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644862.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">华凯花园180平米新古典风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">53670</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">121530</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644861.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">西路时代大厦160平米美式风格装修报价普通住宅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">47919</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">108239</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644860.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">国展家园140平米混搭风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">38647</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">91427</i></span>
                </p>
            </div>
        </a>
        <a class="tuwen-item clearfix" href="/baojia/644859.html">
            <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat1/m/img/7e42a-7763.jpg" alt="" class="img-circle"></img> -->
            <div class="txt-box">
                <p class="p1">
                    <span class="f14 mycom-ellipsis line2">酷特区130平米现代风格装修报价别墅</p>
                <p class="p2 two-price-item cFGray mt2">
                    <span>半包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">36087</i></span>
                    <span>全包:&nbsp;
                        <i class="iconfont f10 icone67a"></i>
                        <i class="f16">85097</i></span>
                </p>
            </div>
        </a>
    </div>
</div>
<!-- 图文混排（左侧图片，右侧文字） end -->
<!-- 分页 start -->
<div class="block-page cDGray">
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
</div>
<!-- 分页 end --></div>
<!-- 正文 end -->
<!--页脚 start-->
<?= $this->render('_footer'); ?>
