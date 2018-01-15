<?php foreach ($sampleInfos as $sort => $data) { ?>
<div class="casetit">
    <a href="<?= "/case_{$sort}/"; ?>" title="<?= $data['name'] . '作品展示'; ?>">
        <span class="case_left"><?= $data['name'] . '作品展示'; ?></span>
        <!--<span class="case_right"><?= $data['brief']; ?></span>-->
        <span class="case_more">更多</span>
    </a>
</div>
<div class="listc">
    <ul class="clearfix">
        <?php foreach ($data['infos'] as $info) { ?>
        <li>
            <a href="<?= "/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
                <img src="<?= $info->resizePic('thumb', 280, 417); ?>" border="0" alt="<?= $info['name']; ?>"/></a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
