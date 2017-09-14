<?php

$listUrl = $this->getMenuUrl('shoot_adpicture_listinfo');
$addUrl = $this->getMenuUrl('shoot_adpicture_add');

?>
<div class="row">
    <div class="box col-md-12">
        <?php foreach ($model->siteInfos as $siteCode => $siteInfo) { ?>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><?= $siteInfo['name']; ?></h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($model->getPageInfos($siteCode) as $page => $pName) { ?>
                    <?php foreach ($model->positionInfos as $position => $positionName) { ?>
                    <?php if ($i % 6 == 0) { echo '<tr>'; } ?>
						<td>
                        <?= "<a href='{$listUrl}?site_code={$siteCode}&position={$position}&page={$page}' >{$pName}-{$positionName}</a>"; ?><br />
                        <?= "<a href='{$addUrl}?site_code={$siteCode}&position={$position}&page={$page}' >添加</a>"; ?>
                        </td>

                    <?php if ($i % 6 == 5) { echo '</tr>'; } ?>
                    <?php $i++; } ?>
                    <?php } ?>
                    <?php if ($i % 6 != 5) { echo '</tr>'; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
