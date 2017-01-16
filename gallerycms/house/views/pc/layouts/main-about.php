<?php
use yii\helpers\Url;

$this->params['bodyClass'] = 'class="narrow_980"';
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<div class="header">
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-top'); ?>
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-mid'); ?>
    <?= $this->render('@gallerycms' . '/views/common/pc/header-to-nav'); ?>
</div>
<!--<a href="" target="_blank" class="about_nav_bg"></a>-->
<!--<span class="slider_container"></span>-->
<?= $content; ?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/hplat/about/js/about_new.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/hplat/about/js/2a19dc2ac1471a7470fe7187a5537960.js"></script>
<div class="cler"></div>
<?= $this->render('@gallerycms' . '/views/common/pc/footer-to'); ?>
<?php $this->endContent(); ?>
