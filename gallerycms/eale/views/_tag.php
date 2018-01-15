<?php
$tagInfos = $this->context->getSampleTags();
$tagInfos = $tagInfos[$cSort];
?>
<div align="center">
    <ul id="leftplace3" class="nav nav-tabs navtabs-yq" role="tablist">
        <li class="<?php if ($cTag == '') { echo 'active'; } ?>"><a href="<?= "/{$cSort}/"; ?>" title="全部">全部</a></li>
        <?php $i = 1; foreach ($tagInfos as $tagCode => $tagName) { ?>
        <li <?php if ($cTag == $tagCode) { echo 'class="active"'; } ?>>
        <a href="<?= "/tag/{$tagCode}/"; ?>" title="<?= $tagName; ?>" class="bg<?= ($i % 2) + 1; ?>"><?= $tagName; ?></a></li>
        <?php $i++; } ?>
    </ul>
</div>
