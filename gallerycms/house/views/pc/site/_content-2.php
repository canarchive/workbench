<div class='content clear hot'>
    <div class="recommend">
        <h2 class="fl">
            <a href="/sample/" title="装修效果图" class="moreL">
                <em>装修效果图</em></a>
        </h2>
        <a href="/sample/" title="装修效果图" class="more">
            <em>更多装修效果图&nbsp;></em></a>
    </div>
    <div class="recommendTable">
        <ul>
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { continue; }?>
            <li <?php if ($i % 4 == 3) { echo 'style="margin-right:0px;"'; } ?>>
                <a href="<?= '/' . $this->context->currentCityCode . '/realcase-show-' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">
                    <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>"></a>
                <a href="<?= '/' . $this->context->currentCityCode . '/realcase-show-' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>" class='recommendTableBt' style="height:35px;overflow:hidden;">
                    <p class='recommendTableBtZh'><?= $info['name']; ?></p></a>
                <!--<span id="advert" style="height: 13px;width: 24px;position: absolute;top: 0;right: 0; overflow:hidden;">
                    <a href="/"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                </span>-->
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>