<!--<p class="about_tip">相关推荐</p>
<ul class="category">
    <?php foreach ($infos['rInfos'] as $info) { ?>
    <li>
        <a href="<?= "{$this->context->currentDomain}/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
            <div>
                <img src="<?= $info->resizePic('thumb', 280, 440); ?>" alt="<?= $info['name']; ?>" />
            </div>
            <h4>
                <i><?= $info['name']; ?></i><span>详情</span>
            </h4>
        </a>
    </li>
    <?php } ?>
</ul>-->
<div class="casetit">
    <a href="javascript:void(0);">
        <span class="case_left">show</span>
        <span class="case_right">相关推荐</span>
    </a>
</div>
<div class="biaoda">
        <?php foreach ($infos['rInfos'] as $info) { ?>
    <div class="biaodan">
        <a href="<?= "{$this->context->currentDomain}/caseshow_{$info['id']}.html"; ?>" title="<?= $info['name']; ?>">
            <div class="tupian">
                <img src="<?= $info->resizePic('thumb', 280, 440); ?>" alt="<?= $info['name']; ?>" />
            </div>
            <div class="tupiantitle"><?= $info['name']; ?></div>
        </a>
    </div>
    <?php } ?>
</div>
<div style="clear:both"></div>
