<div class="global_pie">
    <div class="global_pie_container">
        <ul>
            <li class="has_arrow">
                <a href="/" title="<?= $this->context->currentCityName . '装修网'; ?>">首页</a>
                <span class="nav_arrow_right"></span>
            </li>
            <li class="has_arrow">
                <a href="/ask_lm_gzsj/" title="<?= $this->context->currentCityName . '装修问答'; ?>"><?= $this->context->currentCityName . '装修问答'; ?></a>
                <span class="nav_arrow_right"></span>
            </li>
            <?php if (!isset($isTag)) { ?>
            <?php if (!empty($sortInfos['pInfo'])) { ?>
            <li class="has_arrow">
            <a href="<?= "/ask_lm_{$sortInfos['pInfo']['code']}/"; ?>"><?= $sortInfos['pInfo']['name']; ?></a>
                <span class="nav_arrow_right"></span>
            </li>
            <?php } ?>

            <?php if (isset($infoName)) { ?>
            <li class="has_arrow">
            <a href="<?= "/ask_lm_{$sortInfos['cInfo']['code']}/"; ?>"><?= $sortInfos['cInfo']['name']; ?></a>
                <span class="nav_arrow_right"></span>
            </li>
            <li><?= $infoName; ?></li>
            <?php } else {?>
            <li><?= $sortInfos['cInfo']['name']; ?></li>
            <?php } ?>


            <?php } else { ?>
            <li class="has_arrow">
                <a href="/ask_tag.html" title="问答标签">标签</a>
                <span class="nav_arrow_right"></span>
            </li>
            <li><?= $tagNavStr; ?></li>
            <?php } ?>
        </ul>
    </div>
</div>
