<?php
use yii\helpers\StringHelper;
?>
<div class='content clear new last'>
    <div class="recommend">
        <h2 class="fl"><?= $this->context->currentCityName . '工地直播'; ?></h2>
        <a href="<?= '/' . $this->context->currentCityCode . '/working/'; ?>" title="<?= $this->context->currentCityName; ?>工地直播" class="more">
            <em>更多工地直播&nbsp;></em></a>
    </div>
    <div class="recommendTable">
        <ul>
            <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { continue; }?>
            <li <?php if ($i % 4 == 3) { echo 'style="margin-right:0px;"'; } ?>>
                <!--<a href="<?= '/' . $this->context->currentCityCode . '/workingshow_' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">-->
                <a href="javascript: message_check('<?= $info['id']; ?>','realcase', 'index', '免费设计', '');" rel="nofollow">
                    <img src="<?= $info->resizePic('thumb', 380, 244); ?>" alt="<?= $info['name']; ?>"></a>
                    <span class='op'></span>
                <a href="<?= '/' . $this->context->currentCityCode . '/workingshow_' . $info['id'] . '.html'; ?>" title="<?= $info['name']; ?>">
                    <p class='imgLa ImgLaZi'><?= StringHelper::truncate($info['name'], 19, '...'); ?></p></a>
                <button class='newButton' onclick="message_check('<?= $info['id']; ?>','working', 'index', '预约参观', '');">预约参观</button>
            </li>
            <?php $i++; } ?>
        </ul>
    </div>
</div>
