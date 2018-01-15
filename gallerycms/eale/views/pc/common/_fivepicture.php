<?php
$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $adPage, 'position' => 'fivepicture']);
?>
<div class="row kslj-link" id="box">
    <?php foreach ($adInfos as $info) { ?>
    <div class="col-md-6 col-sm-6 col-xs-6 blankcols">
        <a href="<?= $info['url']; ?>">
            <img alt="<?= $info['name']; ?>" class="img-responsive" src='<?= $info['thumb']; ?>' /></a>
    </div>
    <?php } ?>
</div>
