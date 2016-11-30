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
<section class='content case-category'>
    <div class="case-list case-enjoy">
        <ul class='clearfix' id="case-list">
            <?php foreach ($infos as $info) { ?>
            <li>
                <a href="<?= Url::to(['/cmsad/mobile-sample/show', 'id' => $info['id']]); ?>">
                    <div class="img">
                        <img src="<?= $info['thumb']; ?>" alt=""></div>
                        <p class='case-name'><?= $info['name']; ?></p>
                        <p class='case-trade'><?= $info['sort']; ?></p></a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <input type="hidden" name="" id="admin_add" value="34" />
</section>
