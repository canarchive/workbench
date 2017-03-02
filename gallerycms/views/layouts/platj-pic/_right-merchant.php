<?php
$mInfos = $this->context->mDatas['merchantInfos'];
?>
<div class="new_send">
    <h2 id="red_title">热门装修公司</h2>
    <div class="ca1_slide">
        <div class="slider-wrapper slider-wrapper2">
            <div class="slider-bg slider-bg2">
                <div class="slider-photos slider-photos2">
                    <div id="newSend">
                        <div class="slides_container slides_container2">
                            <?php $i = 0; foreach ($mInfos as $mInfo) { if ($i > 5) { break; } ?>
                            <div class="slide">
                                <a title="<?= $mInfo['name']; ?>" href="<?= $mInfo['infoUrl']; ?>">
                                    <img src="<?= $mInfo['logo']; ?>" width="250" height="188" alt="" /></a>
                            </div>
                            <?php $i++; } ?>
                        </div>
                        <a href="javascript:void(0);" class="prev">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/3c6ef-5131.png" width="12" height="22" alt="Arrow Prev"></a>
                        <a href="javascript:void(0);" class="next">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/e41dc-7114.png" width="12" height="22" alt="Arrow Next"></a>
                        <div id="filterMg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>.slider-wrapper{ position: relative; width: 250px; height: 377px;} .slider-bg{ height: 377px; width: 250px;} .slider-photos{ height: 377px; position: absolute; width: 250px;} .slides{left: 0; position: absolute; top: 0; z-index: 100;} .slides_container{ display: none; overflow: hidden; position: relative; width: 250px;} .slides_container div.slide{ display: block; height: 377px; width: 250px;} .learnWant{ display: block; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/f5786-2046.png) no-repeat; width:125px; height:42px; line-height:42px; text-align: center; color:#fff; font-size:18px; border:none; cursor:pointer; position: absolute; left: 63px; top: 177px; z-index: 112;} .n-learnWant{ display: block; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/f43e8-8394.jpg) no-repeat; width:125px; height:42px; line-height:42px; text-align: center; color:#fff; font-size:18px; border:none; cursor:pointer; position: absolute; left: 63px; top: 306px; z-index: 112;} #slides .next, #slides .prev{ display: block; left: 0px; position: absolute; top: 171px; z-index: 101; width: 27px; height: 52px;} #slides .next{ left: 223px;} #slides .next img{ padding-left: 7px; padding-top: 16px;} #slides .prev img{ padding-left: 8px; padding-top: 16px;} #slides .next:hover, #slides .prev:hover{ background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/962c6-2563.png) no-repeat;} .pagination{ position: absolute; bottom: 9px; left: 87px; z-index: 102;} .pagination li{ float: left; list-style: none outside none; margin: 0 3px; padding: 0; height: 13px;} .pagination li a{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b18dd-3820.png") repeat scroll 0 -13px transparent; display: block; height: 13px; width: 13px; overflow: hidden; text-indent: -9999px;} .pagination li.current a{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b18dd-3820.png") repeat scroll 0 0 transparent;} .new_send{ margin-top: 10px;} .slider-wrapper2{ position: relative; width: 250px; height: 188px; margin-top: 3px;} .slider-bg2{ height: 188px; width: 250px;} .slider-photos2{ height: 188px; position: absolute; width: 250px;} .slides{left: 0; position: absolute; top: 0; z-index: 100;} .slides_container2{ display: none; overflow: hidden; position: relative; width: 250px;} .slides_container2 div.slide{ display: block; height: 188px; width: 250px;} #newSend .next, #newSend .prev{ display: block; left: 0px; position: absolute; top: 62px;z-index: 101; width: 27px; height: 52px;} #newSend .next{ left: 223px;} #newSend .next img{ padding-left: 7px; padding-top: 16px;} #newSend .prev img{ padding-left: 8px; padding-top: 16px;} #newSend .next:hover, #newSend .prev:hover{ background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/962c6-2563.png) no-repeat;} #filterMg{ background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/b3faf-6530.png) no-repeat; width: 250px; height: 30px; overflow: hidden; position: absolute; bottom: 0; left: 0; z-index: 100;} .pagination{ position: absolute; bottom: 9px; left: 83px; z-index: 102;} .pagination li{ float: left; list-style: none outside none; margin: 0 5px; padding: 0; height: 11px;} .pagination li a{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/dcda1-8810.png") repeat scroll 0 -11px transparent; display: block; height: 11px; width: 11px; overflow: hidden; text-indent: -9999px;} .pagination li.current a{ background: url("<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/dcda1-8810.png") repeat scroll 0 0 transparent;} #windVane_list{ height: 198px; padding: 0 10px; overflow: hidden; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/bf963-3922.gif) center 15px no-repeat; } #windVane_list>.venture-list{ background:#ffffff; }</style>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/slide.js"></script>
<script type="text/javascript">$(document).ready(function() {
        $('#slides,#newSend').slides({
            preload: true,
            preloadImage: 'images/ajax-loader.gif',
            effect: 'slide',
            play: 4000,
            pause: 2500,
            hoverPause: true,
            animationStart: function(current) {
                $('.caption').animate({
                    bottom: 0,
                    right: 40,
                    opacity: 0
                },
                200);
            },
            animationComplete: function(current) {
                $('.caption').animate({
                    bottom: 20,
                    right: 40,
                    opacity: 1
                },
                200);
            },
            slidesLoaded: function() {
                $('.caption').animate({
                    bottom: 20,
                    right: 40,
                    opacity: 1
                },
                200);
            }
        });
    });</script>
