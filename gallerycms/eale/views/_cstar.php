<?php
$picTop = $isMobile ? "{$type}_m.png" : "{$type}_pc.png";
$typeName = $type == 'star' ? '合作艺人' : '合作商家';

$num = $isMobile ? 6 : 10;
$picSize = $isMobile ? 56 : 100;
?>
<div class="row">
    <div class="col-xs-12 col-md-12 title">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/<?= $picTop; ?>" alt="<?= $typeName; ?>" />
        <span class="pull-right"><a href="/<?= $type; ?>.html">MORE+</a></span>
    </div>
    <div class="col-xs-12 col-md-12 nopadding">
        <div id="carousel-scrollbox2" class="carousel slide scrollbox_carousel" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php if (count($infos) == 0) { echo "<div class='item active'><ul>"; } ?>
                <?php $i = 0; foreach ($infos as $info) { $abc = $i % $num;?>
                <?php if ($i % $num == 0) { $isActive = $i === 0 ? 'active' : ''; echo "<div class='item {$isActive}'><ul>"; } ?>
                    <li>
                    <a href="<?= $info['url']; ?>"><img src="<?= $info->resizePic('thumb', $picSize, $picSize); ?>" alt="<?= $info['name'] . '-' . $abc; ?>" border="0" style="width: <?= $picSize; ?>px; height: <?= $picSize; ?>px;"></a>
                    </li>
                <?php if ($i % $num == ($num - 1)) { echo '</ul></div>'; } ?>
                <?php $i++; } ?>
                <?php if (($i - 1) % $num != ($num - 1)) { echo '</ul></div>'; } ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-scrollbox2" role="button" data-slide="prev">
                <span aria-hidden="true">
                    <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/983c6d7a-5645-49f6-9e69-091570d1c62c.png" alt="合作客户艺人左侧按钮" /></span>
                <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-scrollbox2" role="button" data-slide="next">
                <span aria-hidden="true">
                    <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/336fa41b-6926-4db3-8ef9-2cab22eda564.png" alt="合作客户艺人右侧按钮" /></span>
                <span class="sr-only">Next</span></a>
        </div>
    </div>
</div>
