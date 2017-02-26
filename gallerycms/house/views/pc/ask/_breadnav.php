<div class="global_pie">
    <div class="global_pie_container">
        <ul>
            <li class="has_arrow">
                <a href="/" title="<?= $this->context->currentCityName . '装修网'; ?>">首页</a>
                <span class="nav_arrow_right"></span>
            </li>
            <li class="has_arrow">
                <a href="/ask/" title="<?= $this->context->currentCityName . '装修问答'; ?>"><?= $this->context->currentCityName . '装修问答'; ?></a>
                <span class="nav_arrow_right"></span>
            </li>
            <?php if (!empty($sortInfos['pInfo'])) { ?>
            <li class="has_arrow">
            <a href="<?= "/ask/lm_{$sortInfos['pInfo']['code']}/"; ?>"><?= $sortInfos['pInfo']['name']; ?></a>
                <span class="nav_arrow_right"></span>
            </li>
            <?php } ?>
            <li><?= $sortInfos['cInfo']['name']; ?></li>
        </ul>
    </div>
</div>
