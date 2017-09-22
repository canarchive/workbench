<header>
    <div style=" margin:0 auto;">
        <div style="margin:0 auto;">
            <div class="top2 cl">
				<a class="fl" href="<?= $this->context->getSiteUrl(); ?>" title="<?= $this->context->currentSiteInfo['name']; ?>">
                    <img src="<?= Yii::getAlias('@assetself'); ?>/hulian/assets/logo/<?= $this->context->siteCode; ?>.png?v=2" alt="<?= $this->context->currentSiteInfo['name']; ?>"/>
                </a>
                <div class="top22 fr">
                    <p><?= Yii::$app->params['siteHotline']; ?></p>
                    <div>
                        <span class="ser_phone">咨询电话</span>
                        <span>CONSUL TING HOTLINE</span>
                    </div>
                </div>
            </div>
            <?php echo $this->render('_header-nav'); ?>
            <?php if (isset($this->params['showBanner'])) { echo $this->render('_header-banner'); } ?>
        </div>
    </div>
</header>
