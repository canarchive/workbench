<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['jsFooterFiles'] = ['common', 'position', 'public', 'createCity', 'submit', 'jquery.cityselect', 'jquery.mailAutoComplete', 'right', 'count'];
$this->params['footerJsStr'] = $this->render('_after_js');
?>
<?php $this->beginContent('@common/views/main-base.php'); ?>

<!--[if lte IE 6]>
    <script src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/pc/js/png_0.0.8a-min.js" type="text/javascript"></script>
    <script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<?php echo $this->render('../common/_header', []); // 顶部 ?>
<?= $content; ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php echo $this->render('../common/_pop', []); ?>
<input type="hidden" name="admin_add" id="admin_add" value="88" />
<input name="areacode" id="area_code" type="hidden" value="" />

<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<?php echo $this->render('../common/_popjs'); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?= Yii::$app->params['statUrl']; ?>
</div>
<?php $this->endContent(); ?>
