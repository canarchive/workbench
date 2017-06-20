<?php
$this->params['returnUrl'] = isset($this->context->merchantInfo['returnUrlMobile']) ? $this->context->merchantInfo['returnUrlMobile'] : $this->context->host;
?>
<?php $this->beginContent('@subsite/views/main.php'); ?>
<?= $content; ?>
<?php $this->endContent(); ?>
