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
        <img src="<?= Yii::getAlias('@asseturl'); ?>/cmsad/mobile/simages/5768e79db8966.jpg" alt="获取访客信息攻略"></div>
    <div class="zqdl-content mt0">
        <div class="bd">
            <ul class="zixun-list1">
                <?php foreach ($infos as $info) { ?>
                <li>
			    <dl>
                        <dt><h4><a href="/info/<?= $info['id']; ?>.html" title="<?= $info['name']; ?>"><?= $info['name']; ?></a></h4></dt>
                    <dd>
                        <p><?= $info['description']; ?></p>
                    </dd>
                </dl>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <input type="hidden" name="" id="admin_add" value="46" />
</section>