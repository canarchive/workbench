<div id="modeplace">
    <div class="row list-group-item">
        <div class="col-xs-6 col-sm-6 col-nopadding item-img pull-left">
            <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" class="img-responsive" />
        </div>
        <div class="col-xs-6 col-sm-6 col-nopadding item-heading">
            <h3><?= $info['name']; ?></h3>
            <h5><?= date('Y/m/d', $info['created_at']); ?></h5>
            <h4><?= $info['title']; ?></h4>
            <div class="cont_qq">
                <span>我也要拍</span>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=295496616&site=qq&menu=yes" class="qq2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/wyypdh.png" class="img-responsive" alt="" /></a>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=2393606242&site=qq&menu=yes" class="qq2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/third/eale/images/wyypdh.png" class="img-responsive" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<div class="container gzwm" align="center">
    <?php //echo $this->render('_share', ['alignParam' => 'align="center"']); ?>
</div>
<div class="item-con"><?= $info['content']; ?></div>
<div class="clearfix"></div>
