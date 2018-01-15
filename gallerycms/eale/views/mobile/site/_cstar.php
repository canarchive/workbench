<div align="center" class="centertitle">
    <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/fe984540-afa5-492d-8b21-f20f674446de.png" alt="与右视觉同行" />
    <p>向”右“看齐 与右视觉同行</p>
</div>
<div class="container cooperation">
    <div class="row">
        <div class="col-xs-12 col-md-12 title">
            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/500e8ea5-a381-423d-b4db-d4bea35a788b.png" alt="合作客户" />
            <span class="pull-right">
                <a href="kehu/">MORE+</a></span>
        </div>
        <div class="col-xs-12 col-md-12 nopadding">
            <div id="carousel-scrollbox1" class="carousel slide scrollbox_carousel" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php if (count($customerInfos) == 0) { echo "<div class='item active'><ul>"; } ?>
                    <?php $i = 0; foreach ($customerInfos as $info) { if ($i >= 18) { break; } ?>
                    <?php if ($i % 10 == 0) { $isActive = $i == 0 ? 'active' : ''; echo "<div class='item {$isActive}'><ul>"; } ?>
                        <li>
                            <a href="<?= $info['url']; ?>"><img src="<?= $info['thumb']; ?>" alt="东风日产" border="0" style="width:56px; height: 56px;"></a>
                        </li>
                    <?php if ($i % 10 == 9) { echo '</ul></div>'; } ?>
                    <?php $i++;} ?>
                    <?php if ($i % 10 != 9) { echo '</ul></div>'; } ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-scrollbox1" role="button" data-slide="prev">
                    <span aria-hidden="true">
                        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/bcc49036-bc60-4b86-bd01-7d61dd439932.png?w=13&h=56&t=c" alt="合作客户艺人左侧按钮" /></span>
                    <span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#carousel-scrollbox1" role="button" data-slide="next">
                    <span aria-hidden="true">
                        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/786cbe30-1c72-420f-8bab-1402275b148e.png?w=13&h=56&t=c" alt="合作客户艺人右侧按钮" /></span>
                    <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 title">
            <img src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/0ccf778b-e0f8-402d-b2a4-11490a9bef2a.png" alt="合作艺人" />
            <span class="pull-right">
                <a href="yiren/">MORE+</a></span>
        </div>
        <div class="col-xs-12 col-md-12 nopadding">
            <div id="carousel-scrollbox2" class="carousel slide scrollbox_carousel" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php if (count($starInfos) == 0) { echo "<div class='item active'><ul>"; } ?>
                    <?php $i = 0; foreach ($starInfos as $info) { if ($i >= 18) { break; } ?>
                    <?php if ($i % 10 == 0) { $isActive = $i == 0 ? 'active' : ''; echo "<div class='item {$isActive}'><ul>"; } ?>
                        <li>
                            <a href="<?= $info['url']; ?>"><img src="<?= $info['thumb']; ?>" alt="东风日产" border="0"></a>
                        </li>
                    <?php if ($i % 10 == 9) { echo '</ul></div>'; } ?>
                    <?php $i++; } ?>
                    <?php if ($i % 10 != 9) { echo '</ul></div>'; } ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-scrollbox2" role="button" data-slide="prev">
                    <span aria-hidden="true">
                        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/bcc49036-bc60-4b86-bd01-7d61dd439932.png?w=13&h=56&t=c" alt="合作客户艺人左侧按钮" /></span>
                    <span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#carousel-scrollbox2" role="button" data-slide="next">
                    <span aria-hidden="true">
                        <img class="img-responsive" src="<?= Yii::getAlias('@asseturl1'); ?>/eale/picbefore/786cbe30-1c72-420f-8bab-1402275b148e.png?w=13&h=56&t=c" alt="合作客户艺人右侧按钮" /></span>
                    <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</div>
