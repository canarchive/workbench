<?php
use yii\helpers\Html;

$menuInfos = $this->context->menuInfos['menus'];
$listMenu = isset($menuInfos['eale_adpicture_listinfo']) ? $menuInfos['eale_adpicture_listinfo'] : false;
$listUrl = isset($listMenu['url']) ? $listMenu['url'] : '';

?>
<div class="row">
    <div class="box col-md-12">
        <?php foreach ($sortInfos as $siteCode => $sInfo) { if (!isset($siteInfos[$siteCode])) { continue; } ?>
        <div class="box-inner">
            <?php $position = 'slide'; $positionName = '页面轮播图'; ?>
            <div data-original-title="" class="box-header well">
                <h2><?= $siteInfos[$siteCode]['name']; ?></h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($sInfo as $sort => $sValue) { ?>
                    <?php if ($i % 6 == 0) { echo '<tr>'; } ?>
                        <td><?= "<a href='{$listUrl}?site_code={$siteCode}&position={$position}&' >{$sValue['name']}</a>"; ?></td>

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
