<?php
$info = $this->context->mDatas['info'];
?>
<header class="b_header">
    <div class="wrap">
        <div class="fl header_1">
            <a rel="nofollow" href="javascript:;" onclick="goBack()" title="" class="icon icon1"></a>
        </div>
        <h2 style="width:86%;text-align:center;float:left;font-size:1.2rem;color:#fff;"><?= $info['name_full']; ?></h2>
        <div class="fr header_2">
            <a href="<?= "/{$info['city_code']}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>" class="icon icon2"></a>
        </div>
    </div>
</header>
<?php if (!isset($showHeaderBase)) { ?>
<!-- 官网 -->
<section class="guanWang2">
    <dl class="clear">
        <dt class="fl">
            <img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" /></dt>
        <dd class="fl">
            <h2><?= $info['name_full']; ?></h2>
            <p>
                <a href="<?= "/{$this->context->currentCityCode}/"; ?>" title="<?= $this->context->currentCityName; ?>"><?= $this->context->currentCityName; ?></a>
                <i>></i>
                <a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName; ?>装修公司"><?= $this->context->currentCityName; ?>装修公司</a>
                <i>></i>
                <a href="<?= "/sj_{$info['code']}/"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
            </p>
        </dd>
    </dl>
</section>
<?php } ?>
