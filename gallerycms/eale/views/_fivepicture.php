<?php
$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $this->context->currentPage, 'position' => 'fivepicture']);
?>
<div class="row kslj-link" id="box">
    <?php foreach ($adInfos as $key => $info) { $adMark = $key < 3 ? 6 : 3; ?>
    <div class="col-md-<?= $adMark; ?> col-sm-<?= $adMark; ?> col-xs-<?= $adMark; ?> blankcols"><a href="<?= $info['url']; ?>"><img alt="<?= $info['name']; ?>" class="img-responsive" src='<?= $info['thumb']; ?>' /></a></div>
    <?php } ?>
</div>
