<div class="pg-ft">
    <ul class="terminal-nav">
        <li><a href="/" title="<?= Yii::$app->params['siteName']; ?>">首页</a></li>
        <li><a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName; ?>装修公司">装修公司</a></li>
        <li><a href="<?= "/ask_lm_gzsj/"; ?>" title="<?= $this->context->currentCityName; ?>装修问答">装修问答</a></li>
        <li>
            <span class="i-sep"></span><a href="/desc.html">关于我们</a><span class="i-sep"></span>
        </li>
    </ul>
    <div class="company-info">手机<?= Yii::$app->params['siteNameBase']; ?>：
        <a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>"><?= Yii::getAlias('@m.gallerycmsurl'); ?></a>&nbsp;
        <?= Yii::$app->params['siteIcpInfo']; ?>
    </div>
</div>
