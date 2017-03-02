<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['369a5-7585', '97539-9633', 'e1703-6001', '36822-1733', '683ed-3544'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('platj-pic/_pic-js', []);
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<!--head-->
<?= $this->render('platj/_top'); ?>
<input type="hidden" id="projectId" value="" />
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/js/loginstatus.js"></script>
<p class="clr"></p>
<!--business-->
<?php //echo $this->render('platj-pic/_pic-toplist'); ?>
<div class="J-head-adver clearfix wrapper">
    <a title="" class="fl" ad_need_click="true" ad_id="460" href="javascript: void(0);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/5e2ae-4318.gif" width='270' height='60' /></a>
    <a title="" class="fl a-adver" ad_need_click="true" ad_id="464" href="javascript: void(0);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6cb77-1388.gif" width='435' height='60' /></a>
    <a title="" class="fr" ad_need_click="true" ad_id="463" href="javascript: void(0);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/679e5-2833.gif" width='270' height='60' /></a>
</div>
<style type="text/css">.J-head-adver{ margin-bottom: 10px;} .J-head-adver a{ display: block;} .J-head-adver .a-adver{ margin-left: 7.5px; _display: inline;}</style>
<?= $this->render('platj-pic/_pic-logo'); ?>
<!--<div class="ui-widget">
<label for="tags">Tags: </label>
<input id="tags"></div>  -->
<!--hot begin-->
<!--<div class="top_ind clearfix">
    <div class="fl clearfix top_ind_lt">
        <span class="fl">17年度热门行业：</span>
        <div class="fl top_list">
            <a title="美食加盟" href="http://search.jmw.com.cn/i2/">美食</a>
            <a title="教育加盟" href="http://search.jmw.com.cn/i11/">教育</a>
            <a title="家纺加盟" href="http://search.jmw.com.cn/i22/">家纺</a>
            <a title="服装加盟" href="http://search.jmw.com.cn/i1/">服装</a>
            <a title="幼儿加盟" href="http://search.jmw.com.cn/i13/">幼儿</a>
            <a title="珠宝加盟" href="http://search.jmw.com.cn/i21/">珠宝</a>
            <a title="饰品加盟" href="http://search.jmw.com.cn/i7/">饰品</a></div>
    </div>
    <div class="fr top_ind_rt">
        <span>现有加盟项目：
            <em>86554</em>个</span>
        <i>|</i>
        <span>在线投资人数：
            <em>3417</em>人</span></div>
</div>-->
<?= $content; ?>
<?php echo $this->render('platj-pic/_pic-bottom-js'); ?>
<!--pic-->
<?php echo $this->render('platj-pic/_pic-valid'); ?>
<?php echo $this->render('platj-pic/_pic-bottom-ad'); ?>
<!--about begin-->
<?php //echo $this->render('platj-pic/_pic-bottom-related'); ?>
<!--about end-->
<!-- 友情链接开始 -->
<style type="text/css">.J-link{ width: 990px; margin: 0 auto; padding-bottom: 24px; border-bottom: 1px solid #eee;} .J-link-tit{ font-size: 16px; line-height: 28px; color: #4c4c4c; padding-bottom: 10px; padding-top: 20px;} .J-link-list li{ float: left; width: 127.7px; height: 24px; line-height: 24px;} .J-link-list li a{ color: #808080; display: inline-block; position: relative;} .J-link-list li a:hover{ background: #e53c01; color: #fff;} .span-left{ display: block; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/02205-1419.png) no-repeat 0 0; width: 11px; height: 24px; position: absolute; top: 0; left: -11px; z-index: 10;} .span-right{ display: block; background: url(<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/02205-1419.png) no-repeat -11px 0; width: 11px; height: 24px; position: absolute; top: 0; right: -11px; z-index: 10;}</style>
<!-- 友情链接结束 -->
<!--footer begin-->
<?= $this->render('platj-pic/_pic-footer'); ?>
<?php $this->endContent(); ?>
