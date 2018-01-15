<?php
$adInfos = $this->context->getAdDatas(['site_code' => $this->context->siteCode, 'page' => $this->context->currentPage, 'position' => 'indexthree']);
?>
<div class="top-work" align="center">
    <div class="container">
        <div class="row">
            <?php foreach ($adInfos as $key => $info) { ?>
            <a href="ysjworks/" target="_Blank" class="col-md-4 col-sm-4 col-xs-4 col-nopadding">
                <img class="img-responsive" src="<?= $info['thumb']; ?>" name="picture" border="0" onMouseOver="this.src='<?= $info['thumb']; ?>'" onMouseOut="this.src='<?= $info['picture']; ?>'"></a>
            <?php } ?>
        </div>
    </div>
</div>
