<div class='content clear'>
    <div class="recommend clear">
        <h2 class="fl"><em><?= $this->context->currentCityName; ?>设计案例</em></h2>
        <a href="<?= '/' . $this->context->currentCityCode . '/realcase/'; ?>" title="<?= $this->context->currentCityName; ?>设计 案例" class="more">
            <em>更多热门设计案例&nbsp;></em></a>
    </div>
    <div class="recommendTable clear">
        <ul>
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { continue; }?>
            <li <?php if ($i % 4 == 3) { echo 'style="margin-right:0px;"'; } ?>>
                <a href="<?= '/' . $this->context->currentCityCode . '/realcaseshow_' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">
                    <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>">
                    <span class='op'></span>
                    <p class='imgLa'><?= $info['name']; ?></p></a>
                <div>
                    <p class='describe'><?= $info['name']; ?></p>
                    <p class='describeMo'>
                        <button onclick="message_check('137829','26-1','热门行业的晨阳水漆项目很不错，我想加盟，请尽快联系我！');">免费设计</button>
                        <span class='describeHo' style='color:#e9000a'>￥</span><?= $info['ownerInfo']['decoration_price']; ?>
                        <span class='describeHo' style='color:#e9000a'>万</span>
                        <span class='describeHo'><?= $info['ownerInfo']['decoration_type']; ?></span></p>
                </div>
                <!--<span id="advert" style="height: 13px;width: 24px;position: absolute;top: 0;right: 0; overflow:hidden;">
                    <a href="/"><img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/4cc6f-7890.png" style="float: left; width: auto;height: auto;" alt="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                </span>-->
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
