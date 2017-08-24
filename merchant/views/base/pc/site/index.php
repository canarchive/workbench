<?php
use yii\helpers\Url;

$cssFiles = [
    'abd9b-6612', '37937-3935', '1dbdd-8858', 'c786b-7096', 'c6699-6015', 'c4c09-2507', '96e18-4999', 'c082f-5061', '3e3b9-7867',
];
$this->params['cssStr'] = $this->render('@common/views/base/_css-js', ['files' => $cssFiles, 'path' => 'merchant/shop/css/']);
$jsFiles = [
    //'js/growingio-portal',
];
$this->params['jsStr'] = $this->render('@common/views/base/_css-js', ['type' => 'js', 'files' => $jsFiles, 'path' => 'merchant/shop/']);
//$urls = $this->context->navUrls;

Yii::$app->params['tdkInfos']['title'] = '装修免费设计，免费量房';
Yii::$app->params['tdkInfos']['description'] = '装修设计,量房';
Yii::$app->params['tdkInfos']['keyword'] = '装修设计量房';
$this->params['bodyClass'] = 'class="w1170"';
?>

<?= $this->render('../common/_header'); ?>
<?= $this->render('_desc'); ?>
<?= $this->render('_video'); ?>
<?php //echo $this->render('../common/_footer-signup'); ?>
<?= $this->render('../common/_footer'); ?>
<?= $this->render('../common/_footer-js'); ?>
