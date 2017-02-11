<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['9840e-6015', 'd6be2-6277', '2a61f-3180', 'e6610-7846'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>
<div class="global_wrap" id='gloWrap'>
    <script type="text/javascript" src="http://static.to8to.com/gb_js/about_new_v2.js?v=1467110193"></script>
    <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
    <div class="w970">
        <div class="about_contact about_box">
            <div class="about_center_title">
                <h5 class="noBold">联系我们<span>Contact Us</span></h5>
            </div>
            <div class="contact_type">
                <strong>客服中心（技术支持，投诉，建议）：</strong>
                <p>法律顾问：甘永辉律师，系中华全国律师协会会员。（律师执业证号：19020411007959）</p>
                <p>全国统一客服电话：4006-900-288（服务时间：8:00 - 22:30）</p>
                <p>版权投诉联系：zxcq@corp.to8to.com</p>
                <div class="contact_hot_line">
                    <div class="hot_line_left">
                        <p>如果您是网站、渠道，想洽谈资源置换、市场合作。请联系：</p>
                        <p>
                            <i class="mail_ico"></i>邮箱：marketing@corp.to8to.com</p>
                    </div>
                    <div class="hot_line_right">
                        <p>如果您想在<?= Yii::$app->params['siteNameBase']; ?>投放广告或获得精准业务。请联系：</p>
                        <p>
                            <i class="mail_ico"></i>邮箱：ad@corp.to8to.com</p>
                        <i class="hot_line_circle">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/5a70a-2667.png" /></i>
                    </div>
                    <div class="hot_line_left" style="margin-top:10px;">
                        <p>如果您是媒体，想沟通采访及报道事宜。请联系：</p>
                        <p>
                            <i class="mail_ico"></i>邮箱：PRMedia@corp.to8to.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cler"></div>
    <div id="small_window"></div>
</div>
