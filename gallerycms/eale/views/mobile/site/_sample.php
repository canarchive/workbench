<div class="worksy work">
    <div class="container">
        <div class="row con-title">
            <div class="col-xs-7 col-sm-7 col-nopadding">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_logod.png" />
                <a href="" title="右视觉最新作品" target="_blank">右视觉最新作品</a></div>
            <div class="col-xs-5 col-sm-5 col-nopadding">
                <div class="pull-right">
                    <a href="commercials/" target="_Blank">广告</a>/
                    <a href="fashions/" target="_Blank">服装</a>/
                    <a href="stars/" target="_Blank">艺人</a></div>
            </div>
        </div>
        <div class="row">
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) {break;}?>
            <div class="col-xs-6 col-sm-6 col-nopadding">
                <div class="works-con">
                    <a href="<?= "/sample/{$info['id']}.html"; ?>">
                    <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
                        <div class="title">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_logox.png" class="pull-left" />
                            <h5><?= $info['name']; ?><br />
                            <span class="subtitle"><?= $info['title']; ?>
                                    <span class="glyphicon glyphicon-play pull-right"></span></span>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
    </div>
</div>
