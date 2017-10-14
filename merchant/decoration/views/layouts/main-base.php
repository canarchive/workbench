<?php
use yii\helpers\Url;

$cssFiles = ['website'];;
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'merchant/adview/css']);
$jsFiles = ['modernizr'];;
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'merchant/adview/js']);
$this->params['statCodeStr'] = $this->render('_stat');
?>
<?php $this->beginContent('@merchant/views/main.php'); ?>
<script>
window.BASE_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<?= $content; ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/js/jquery-2.1.0.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/js/foundation.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/js/appnew.js"></script>
<script src="//captcha.luosimao.com/static/dist/api.js"></script>
<?php $this->endContent(); ?>
