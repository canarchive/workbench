<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['2758e-6760', '50b4a-8762', 'e7465-4140'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'platj']);
$this->params['jsStr'] = $this->render('_js-header', []);
?>
<!-- 顶部 -->
<?= $this->render('_top'); ?>
<?= $this->render('_ad-nav'); ?>
<?= $this->render('_logo'); ?>
<?= $this->render('_nav'); ?>
<!-- banner -->
<?= $this->render('_banner'); ?>
<!-- main -->
<div class='allcontant'>
    <?php echo $this->render('_content-1'); ?>
    <?php echo $this->render('_content-2'); ?>
    <?php echo $this->render('_content-3'); ?>
    <?php echo $this->render('_content-4'); ?>
</div>
</div>
<?= $this->render('_quote'); ?>
<div class="main">
    <div class="wrap_mar">
        <?php echo $this->render('_ad-ask'); ?>
        <?php //echo $this->render('_ad-time'); ?>
        <?php echo $this->render('_ask-pic'); ?>
        <?= $this->render('_ask'); ?>
    </div>
</div>
<!-- 友情链接 -->
<?= $this->render('_friendlink'); ?>
<!-- 我们能为投资加盟提供什么? -->
<?= $this->render('_ourservice'); ?>
<!-- footer -->
<?= $this->render('@gallerycms/views/platj/pc/_footer-base'); ?>
<script type="text/javascript" src="http://60.205.145.0/filesys/spider/pages/asset/platj/js/trade.js"></script>
<div style="display:none;">欢迎访问中国加盟网!!!</div></body>
