<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'swiper.min', 'common-mobile', 'style-m', 'submit',
];
$this->params['jsFiles'] = [
	'jquery-1.8.3.min', 'swiper.min', 'public-m', 'common-m', 'createCity', 'position-m', 'city-select', 'count',
];
//$this->context->pcMappingUrl = '';
?>
<section class='content' style="background-color:#eee;">
    <?= $this->render('_banner'); ?>
    <?= $this->render('_product'); ?>
    <?= $this->render('_sample'); ?>
    <?= $this->render('_info'); ?>
    <input id="admin_add" value="36" type="hidden" />
</section>

