<div class='content clear new last'>
    <div class="recommend">
        <h2 class="fl">
            <a href="<?= '/' . $this->context->currentCityCode . '/working'; ?>" title="工地直播" class="moreL"><em>工地直播</em></a>
        </h2>
        <a href="<?= '/' . $this->context->currentCityCode . '/working'; ?>" title="工地直播" class="more">
            <em>更多工地直播&nbsp;></em></a>
    </div>
    <div class="recommendTable">
        <ul>
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { continue; }?>
            <li <?php if ($i % 4 == 3) { echo 'style="margin-right:0px;"'; } ?>>
                <a href="<?= '/' . $this->context->currentCityCode . '/realcase-show-' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">
                    <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>"></a>
                    <span class='op'></span>
                <a href="<?= '/' . $this->context->currentCityCode . '/realcase-show-' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">
                    <p class='imgLa ImgLaZi'><?= $info['name']; ?></p></a>
                <button class='newButton' onclick="message_check('<?= $info['id']; ?>','28-1','<?= $info['name']; ?>');">预约参观</button>
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
