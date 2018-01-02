<?php

use yii\helpers\Html;
use yii\helpers\Url;

$domain = Yii::getAlias('@gallerycmsurl');
$menus = $this->context->menuInfos['menus'];
$listUrl = $menus['merchant_merchant_listinfo']['url'];
$addUrl = $menus['merchant_merchant_add']['url'];
?>
<div class="row">
    <div class="box col-md-12">
        <?php foreach ([2, 1, 0] as $sCode) { if (!isset($datas[$sCode])) { continue; } ?>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
            <h2><?= $model->statusInfos[$sCode]; ?> 列表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($datas[$sCode] as $info) { $vUrl = "{$domain}/{$info->code}/"; $lUrl = "{$listUrl}?city_code={$info->code}"; $aUrl = "{$addUrl}?city_code={$model->code}"; ?>
                    <?php if ($i % 4 == 0) { echo '<tr>'; }?>
                        <td><a href="<?= $vUrl; ?>" target="_blank"><?= $info['name']; ?></a>---<a href="<?= $lUrl; ?>" target="_blank">商家列表</a>--<a href="<?= $aUrl; ?>" target="_blank">添加商家</a></td>
                    <?php if ($i % 4 == 3) { echo '</tr>'; }?>
                    <?php $i++; } ?>
                    <?php if ($i % 4 != 3) { echo '</tr>'; }?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--/span-->
</div>
