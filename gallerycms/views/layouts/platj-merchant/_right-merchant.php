<?php
$infos = $this->context->mDatas['merchantInfos'];
?>
<div class="heat">
    <div class="heat_title" style="margin-top:10px;">
        <span>相关装修公司</span></div>
    <div class="heat_cont">
        <ul>
        <?php $i = 1; foreach ($infos as $info) { if ($i > 10) { break; } $elemClass = $i <= 3 ? 'one' : 'blue'; ?>
        <li class="clearfix">
            <span class="h_<?= $elemClass; ?>"><?= $i; ?></span>
            <a class="my_hyrdb" href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
            <span class="Rside"></span>
        </li>
        <?php $i++; } ?>
        </ul>
    </div>
</div>
