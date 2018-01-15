<?php
$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $this->context->currentPage, 'position' => 'announce']);
?>
<div class="container index_xuanchuan" id="box">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 blankcols">
            <a href="<?= $adInfos[0]['url']; ?>">
                <img alt="" src='<?= $adInfos[0]['thumb']; ?>' /></a>
            <a href="<?= $adInfos[1]['url']; ?>">
                <img alt="" src='<?= $adInfos[1]['thumb']; ?>' /></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3 blankcols">
            <a href="<?= $adInfos[2]['url']; ?>">
                <img alt="" src='<?= $adInfos[2]['thumb']; ?>' /></a>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5 blankcols">
            <a href="<?= $adInfos[3]['url']; ?>">
                <img alt="" src='<?= $adInfos[3]['thumb']; ?>' /></a>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2 blankcols">
            <a href="<?= $adInfos[4]['url']; ?>">
                <img alt="" src='<?= $adInfos[4]['thumb']; ?>' /></a>
            <a href="<?= $adInfos[5]['url']; ?>">
                <img alt="" src='<?= $adInfos[5]['thumb']; ?>' /></a>
        </div>
    </div>
</div>
