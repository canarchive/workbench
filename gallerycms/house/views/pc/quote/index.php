<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use gallerycms\components\LinkPager;

$cssFiles = ['fc001-1027', 'f565b-1682', 'a398c-6484', '36c62-5795', 'a7311-6598', 'b8040-5022'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat1']);
$this->params['jsStr'] = $this->render('_js-header');//, ['jsFiles' => $jsFiles]);
?>
<!-- 头部 -->
<?php echo $this->render('_header'); ?>
<div class="main offerpath clearfix">
    <a href="/<?= Yii::$app->params['currentCompany']['code']; ?>/quote/" class="a666"><?= Yii::$app->params['currentCompany']['name']; ?>装修报价</a>&gt;
	<span class="cGray">列表</span>
</div>
<div class="main clearfix">
    <?php echo $this->render('_leftnav', ['quoteSortInfos' => $quoteSortInfos, 'cTag' => $tag, 'tagInfos' => $tagInfos, 'model' => $model]); ?>
    <div class="offerlist-r">
        <!-- 右侧列表 start -->
        <div class="offer-plist list-container">
            <?php foreach ($infos as $info) { ?>
            <div class="offer-plist-item clearfix">
                <div class="txtbox">
                    <p class="p1">
                        <a href="/<?= $this->context->currentCityCode . '/quoteshow_' . $info['code'] . '.html'; ?>" class="a1" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
						<!--<span class="graytag"><?= $info['house_type']; ?></span>-->
                    </p>
                    <p class="p2">半包装修价格：
                    <span class="cOrange mr20">¥ <?= number_format($info['price_part'], 0); ?>元</span>全包装修价格：
                    <span class="cOrange">¥ <?= number_format($info['price_full'], 0); ?>元</span></p>
                </div>
                <a href="/<?= $this->context->currentCityCode . '/quoteshow_' . $info['code'] . '.html'; ?>" class="ata">查看TA的方案</a></div>
            <?php } ?>
            <!-- 右侧列表 end -->
            <!-- 分页 start -->
            <div class="offer-page-box">
                <div class="dib tc">
                <?= LinkPager::widget(['pagination' => $pages, 'linkOptions' => ['class' => 'pbtn'], 'activePageCssClass' => 'active']); ?></div>
            </div>
        </div>
    </div>
    <!-- fixed右侧 start -->
    <?php //echo $this->render('_right_sao'); ?>
</div>
<!-- 页脚 start -->
<?= $this->render('_footer'); ?>
