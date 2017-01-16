<?php
use yii\helpers\Url;

$this->params['bodyClass'] = 'class="narrow_980"';
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<script type="text/javascript">var jq = jQuery.noConflict();</script>
<?= $content; ?>
<?php $this->endContent(); ?>
