<div class="pg-ft">
    <ul class="terminal-nav">
        <li>
            <a class="active" href="javascript:void(0)">触屏版</a>
        </li>
        <li>
            <span class="i-sep"></span><a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">电脑版</a>
        </li>
        <li>
            <span class="i-sep"></span><a href="/desc.html">关于我们</a><span class="i-sep"></span>
        </li>
        <li>
            <a href="/question.html">常见问题</a>
        </li>
    </ul>
    <div class="company-info">手机<?= Yii::$app->params['siteNameBase']; ?>：
        <a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>"><?= Yii::getAlias('@m.gallerycmsurl'); ?></a>&nbsp;
        <?= Yii::$app->params['siteIcpInfo']; ?>
    </div>
</div>
