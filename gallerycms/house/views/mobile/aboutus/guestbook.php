<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['aa3c7-7171'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8/m']);
$this->params['jsStr'] = $this->render('_js-header');
?>
<?php //echo $this->render('_banner'); ?>
<div class="header">
    <a href="<?= "/{$this->context->currentCityCode}/"; ?>">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/img/0558b-4654.png" class="logo-img" width="56"></a>
    <span class="logo-node"></span>
    <span class="logo-name"><?= Yii::$app->params['siteSlogan']; ?></span>
    <a href="/city/index">
        <span class="city">南京</span></a>
</div>
<?php //echo $this->render('_search'); ?>
<form action="/feedback/post/city/nj" method="post">
    <!--<h3>选择意见</h3>
    <div class="feedback_select">
        <select name="select_val">
            <option value="">无</option>
            <option value="页面不兼容">页面不兼容</option>
            <option value="页面无法打开/访问过慢">页面无法打开/访问过慢</option>
            <option value="无法申请免费设计/报价">无法申请免费设计/报价</option></select>
    </div>-->
    <h3>您的意见</h3>
    <div class="feedback_content">
        <textarea name="content"></textarea>
    </div>
    <h3>您的联系方式
        <span>(<?= Yii::$app->params['siteNameBase']; ?>将对您的联系方式严格保密)</span></h3>
    <div class="contact">
        <input type="text" name="phone" /></div>
    <div class="submit_div">
        <input type="submit" value="提交" /></div>
</form>
<div class="footer-company-desc">
    <div class="f-c-d-title">(<?= Yii::$app->params['siteNameBase']; ?>)互联网装修领导者</div>
    <div class="f-c-d-desc">
        <span class="f-green">7</span>年累计服务
        <span class="f-green">1100</span>万家庭,汇聚
        <span class="f-green">7</span>万多家装修公司,
        <span class="f-green">95</span>万设计师;我们始终坚持把业主的利益放到
        <span class="f-green">第一位</span>,不断创新,领导装修行业更阳光、更透明。</div></div>
<ul class="page_nav">
    <li>
        <a href="javascript:void(0)" class="nav_on">触屏版</a></li>
    <li>
        <a href="http://www.to8to.com/">电脑版</a></li>
    <li>
        <a href="http://m.to8to.com/news/article/106823.html">关于我们</a></li>
</ul>
<div class="footer">手机<?= Yii::$app->params['siteNameBase']; ?>：<?= Yii::getAlias('@m.gallerycmsurl'); ?> <?= Yii::$app->params['siteIcpInfo']; ?></div>
<?php //echo $this->render('_footer-nav'); ?>
<?= $this->render('_js-footer'); ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/seostatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/2a19dc2ac1471a7470fe7187a5537960_2.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/m/js/h5appdownload_sourcecharge.min.js"></script>
