<?php
use yii\helpers\Html;

$menuInfos = $this->context->menuInfos['menus'];
$listMenu = isset($menuInfos['eale_adpicture_listinfo']) ? $menuInfos['eale_adpicture_listinfo'] : false;
$listUrl = isset($listMenu['url']) ? $listMenu['url'] : '';

$pageInfos = $model->pageInfos;
$positionInfos = $model->positionInfos;
$positionPageInfos = $model->positionPageInfos;
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
                    <?php $i = 0; foreach ($positionInfos as $position => $positionName) { if ($position == 'slide') { continue; }?>
                    <?php foreach ($pageInfos as $page => $pName) {  ?>
                    <?php if ($i % 6 == 0) { echo '<tr>'; } ?>
                        <td><?= "<a href='{$listUrl}?site_code={$siteCode}&position={$position}&page={$page}' >{$positionName}-{$pName}</a>"; ?></td>

                    <?php if ($i % 6 == 5) { echo '</tr>'; } ?>
                    <?php $i++; } ?>
                    <?php } ?>
                    <?php if ($i % 6 != 5) { echo '</tr>'; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-inner">
            <?php $position = 'slide'; $positionName = $positionInfos['slide']; ?>
            <div data-original-title="" class="box-header well">
                <h2><?= $siteInfo['name'] . '--' . $positionName; ?></h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($pageInfos as $page => $pName) { ?>
                    <?php if ($i % 6 == 0) { echo '<tr>'; } ?>
                        <td><?= "<a href='{$listUrl}?site_code={$siteCode}&position={$position}&page={$page}' >{$pName}</a>"; ?></td>

                    <?php if ($i % 6 == 5) { echo '</tr>'; } ?>
                    <?php $i++; } ?>
                    <?php if ($i % 6 != 5) { echo '</tr>'; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
