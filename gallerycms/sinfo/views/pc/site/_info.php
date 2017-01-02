<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
?>
<div class="information-main">
    <div class="products-why-con-01">
        <h2 class="title">获取访客信息攻略</h2>
        <p>访客攻略和相关营销技巧</p>
    </div>
    <div class="information-list">
        <ul class="clearfix">
            <?php $i = 1; foreach ($infos as $sort => $info) { ?>
            <li <?php if ($i == 4) { echo ' class="last"'; } ?>>
                <div class="top clearfix">
                    <h3 class="title floatL"><?= $info['name']; ?></h3>
                    <a href="<?= Url::to(['/sinfo/info/index', 'sort' => $sort, 'page' => 1]); ?>" target='_blank' class="more floatR">More
                        <span></span></a>
                </div>
                <div class="con">
                    <!--<div class="img">
                        <a href="<?= Url::to(['/sinfo/info/index', 'sort' => $sort, 'page' => 1]); ?>" >
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/sinfo/pc/img/zx.png" alt="<?= $info['name']; ?>" /></a>
                    </div>-->
                    <dl>
                        <?php foreach ($info['subInfos'] as $data) { ?>
                        <dt>
                            <a href="<?= Url::to(['/sinfo/info/show', 'id' => $data['id']]); ?>" title="<?= $data['name']; ?>">
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
