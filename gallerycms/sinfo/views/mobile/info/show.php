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
<section class='content'>
    <div class="zx-detail">
        <div class="article-top">
            <h1><?= $info['name']; ?></h1>
            <!--<div class="zx-source">来源：</div>-->
            <p class='release-time'>发布时间：<?= date('Y-m-d H:i:s', $info['created_at']); ?></p></div>
            <article><?= $info['content']; ?></article>
    </div>
    <?= $this->render('../common/_ask_inner'); ?>
</section>
