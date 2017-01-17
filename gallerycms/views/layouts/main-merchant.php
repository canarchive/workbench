<?php
use yii\helpers\Url;

?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<?= $content; ?>
<!--图片查看器容器-->
<div id="box" style="display:none;"></div>
<div id="showAlbumImgs"></div>
<input type="hidden" name="domain_seat" id="domain_seat" value="8-5-" />
<?php $this->endContent(); ?>
