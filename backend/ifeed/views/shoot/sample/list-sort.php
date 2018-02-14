<?php
use yii\helpers\Html;

$listUrl = $this->getMenuUrl('shoot_sample_listinfo');
$addUrl = $this->getMenuUrl('shoot_sample_add');

?>
<div class="row">
    <div class="box col-md-12">
        <?php foreach ($sortInfos as $siteCode => $sInfo) { 
            if (!is_null($this->context->pointSite) && $this->context->pointSite != $siteCode) { continue; }
            if (!isset($siteInfos[$siteCode])) { continue; }  
            $listUrlSite = !empty($listUrl) ? $listUrl . '?site_code=' . $siteCode : ''; 
            $addUrlSite = !empty($addUrl) ? $addUrl . '?site_code=' . $siteCode : '';
        ?>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
            <h2><?= $siteInfos[$siteCode]['name']; ?> <a href="<?= $listUrlSite; ?>">列表</a> <a href="<?= $addUrlSite; ?>">添加</a></h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($sInfo as $sort => $sValue) {
                    $listUrlSort = !empty($listUrlSite) ? $listUrlSite . '&sort=' . $sort : ''; 
                    $addUrlSort = !empty($addUrlSite) ? $addUrlSite . '&sort=' . $sort : '';
                    ?>
                    <?php if ($i % 6 == 0) { echo '<tr>'; } ?>
                        <td><a href="<?= $listUrlSort; ?>"><?= $sValue['name']; ?>列表</a> <a href="<?= $addUrlSort; ?>">添加</a></td>

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
