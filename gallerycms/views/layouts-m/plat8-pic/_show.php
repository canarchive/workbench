<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['9c07e-2206', '3fb14-5999', 'd7d65-1939', 'd5893-1579'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('_js-header');
?>
<?php echo $this->render('_header'); ?>
<section id="xgtDetailPage">
    <section class="xgt-detail-wrap">
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
        </div>
    </section>
    <div class="xgt-detail-aside">
        <div class="show-img-info">
            <span class="img-title"></span>
            <div class="atag">
                <a href="javascript:void(0);" id="kongjian"></a>
                <a href="javascript:void(0);" id="jubu"></a>
            </div>
        </div>
        <!--<div class='clear show-shoucang-ad'>
            <a class='publick-click-stream' href='' data-ptag='2_2_10_812'>这样装修多少钱?</a>
            <a class='publick-click-stream yellow dn' href='' data-ptag='2_2_1_1'>这样装修多少钱?</a>
            <a class='publick-click-stream orange dn' href='' data-ptag='2_2_10_813'>这样装修多少钱?</a>
            <a class='publick-click-stream blue dn' href='' data-ptag='2_2_10_814'>这样装修多少钱?</a>
        </div>-->
    </div>
    <!--<div class='xgt-bottom-bgc'></div>
    <div class="xgt-save-notice-cover"></div>
    <div class="xgt-save-notice-img-box">
        <div class="xgt-save-notice-txt">长按图片可以进行保存哦</div>
        <div class="xgt-save-notice-img">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/542aa-7953.png" width="34px" /></div>
    </div>-->
</section>
<?php echo $this->render('_js', ['info' => $info, 'picDatas' => $picDatas]); ?>
