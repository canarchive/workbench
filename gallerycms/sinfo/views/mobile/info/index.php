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
    <div class="banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/5768e79db8966.jpg" alt=""></div>
    <div class="zqdl-content mt0">
        <div class="bd">
            <ul class="zixun-list1">
                <?php foreach ($infos as $info) { ?>
                <li>
                    <a href="/info/<?= $info['id']; ?>.html">
                        <dl>
                            <dt><h4><?= $info['name']; ?></h4></dt>
                            <dd>
                             <p><?= $info['description']; ?></p>
                                <!--<div class="list-b clearfix">
                                    <div class="come-from"></div>
                                    <div class="zx-time"><?= date('Y-m-d', $info['created_at']); ?></div></div>-->
                            </dd>
                        </dl>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <input type="hidden" name="" id="admin_add" value="46" />
</section>
