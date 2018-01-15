<!-- /新闻和活动-->
<div class="news">
    <div class="container">
        <div class="row con-title">
            <div class="col-xs-9 col-sm-9 col-nopadding">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_logod.png" />
                <a href="/info/" title="右视觉最新活动和新闻" target="_blank">右视觉最新活动和新闻</a>
            </div>
            <div class="col-xs-3 col-sm-3 col-nopadding">
                <div class="pull-right"><a href="/info/" target="_blank">更多...</a></div>
            </div>
        </div>
        <div class="row rowm">
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) {break;} ?>
            <div class="col-xs-12 col-sm-12 col-nopadding">
                <div class="news-con">
                    <a href="<?= "/info/{$info['id']}.html"; ?>">
                        <div class="title">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/m_newslogo.png" class="pull-left"/>
                            <h4><?= $info['name']; ?>
                                <p class="subtitle"><?= $info['title']; ?></p></h4>
                        </div>
                        <img src="<?= $info->resizePic('thumb', 574, 329); ?>" alt="<?= $info['name']; ?>" class="img-responsive"/>
                        <p class="time"><?= date('Y/m/d', $info['created_at']); ?>
                            <span class="glyphicon glyphicon-play pull-right"></span></p>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
