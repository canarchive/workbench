<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
?>
<div class="information-main">
    <div class="products-why-con-01">
        <h2 class="title">营销学院</h2>
        <p>听取专家观点，了解建站产品，建设营销网站</p>
    </div>
    <div class="information-list">
        <ul class="clearfix">
            <?php $i = 1; foreach ($infos as $tag => $info) { ?>
            <li <?php if ($i == 4) { echo ' class="last"'; } ?>>
                <div class="top clearfix">
                    <h3 class="title floatL"><?= $info['name']; ?></h3>
                    <a href="<?= Url::to(['/cmsad/info/index', 'tag' => '_' . $tag, 'page' => '_1']); ?>" target='_blank' class="more floatR">More
                        <span></span></a>
                </div>
                <div class="con">
                    <dl>
                        <?php foreach ($info['subInfos'] as $data) { ?>
                        <dt>
                            <a href="<?= Url::to(['/cmsad/info/show', 'id' => $data['id']]); ?>" title="<?= $data['name']; ?>">
                            <?= StringHelper::truncate($data['name'], 17, ''); ?></a>
                        </dt>
                        <?php } ?>
                    </dl>
                </div>
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
