<?php

use yii\helpers\Html;
use yii\helpers\Url;

$documentCodes = [
	'saleman' => [
		'name' => '销售报表更新',
		'url' => '/statistic/saleman/update.html',
	],
	'salefee' => [
		'name' => '客户费用使用',
		'url' => '/statistic/saleman/update.html?update_type=service',
	],
	'service' => [
		'name' => '客服报表更新',
		'url' => '/statistic/service/update.html',
	],
	'dispatch' => [
		'name' => '派单报表更新',
		'url' => '/statistic/dispatch/update.html',
	],
	'service-pispatch' => [
		'name' => '客服派单报表更新',
		'url' => '/statistic/dispatch/update.html?update_type=service',
	],
	'channel-fee' => [
		'name' => '渠道费用报表更新',
		'url' => '/statistic/channel-fee/listinfo.html?action-sort=update-sql',
	],
];
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($documentCodes as $code => $value) { ?>
                    <?php if ($i % 4 == 0) { echo '<tr>'; }?>
						<td><a href="<?= $value['url']; ?>" target="_blank"><?= $value['name']; ?></a></td>
                    <?php if ($i % 4 == 3) { echo '</tr>'; }?>
                    <?php $i++; } ?>
                    <?php if ($i % 4 != 3) { echo '</tr>'; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
