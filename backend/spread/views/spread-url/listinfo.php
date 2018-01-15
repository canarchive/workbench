<?php
$fullSuffix = '';
$attributeParams = $model->attributeParams;
$attributeParams['merchant_id']['default'] = $merchantId;
$attributeParams['channel']['default'] = $channel;
$attributeParams['channel_info']['default'] = $channelInfo;
if ($showFull) {
    foreach ($attributeParams as $aInfo) {
        $fullSuffix .= "&{$aInfo['param']}={$aInfo['default']}";
    }
}
//$fullSuffix = '?' . ltrim($fullSuffix, '&');
?>
<?= $this->render('_search', array_merge(['mInfos' => $mInfos, 'cInfos' => $cInfos, 'hostKeys' => $hostKeys, 'channelInfos' => $channelInfos], ['model' => $model])); ?>

<div id="w1" class="grid-view">
    <div class="summary">推广参数列表</div>
    <table class="table table-striped table-bordered">
        <tbody>
            <?php $i= 0; foreach ($attributeParams as $field => $paramInfo) { ?>
            <?php if ($i / 3 == 0) { echo '<tr data-key="">'; } ?>
                <td><?= $paramInfo['param'] . '--' . $paramInfo['default']; ?></td>
            <?php if ($i % 3 == 2) { echo '</tr>'; } ?>
            <?php $i++;} ?>
            <?php if ($i-- % 3 != 2) { echo '</tr>'; } ?>
        </tbody>
    </table>
</div>
<div id="w1" class="grid-view">
    <div class="summary"><?= "<b>$cityName</b>--<b>{$merchantName}</b>-推广URL汇总"; ?></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>推广页类型</th>
                <th>PC-URL</th>
                <th>MOBILE-URL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($urlTypes as $type => $info) { if (isset($info['noShow']) && $info['noShow']) { continue; }
				$pcUrl = is_null($domainRedirect) ? "{$pcDomain}/bm-{$type}-{$cityCode}.html?" : "{$pcDomainRedirect}/hdenter.html?source_code=bm-{$type}-{$cityCode}"; 
				$pcUrl .= $fullSuffix;
				$pcUrl = str_replace('?&', '?', $pcUrl);
				$mobileUrl = is_null($domainRedirect) ? "{$mobileDomain}/bm-{$type}-{$cityCode}.html?" : "{$mobileDomainRedirect}/hdenter.html?source_code=bm-{$type}-{$cityCode}"; 
				$mobileUrl .= $fullSuffix;
				$mobileUrl = str_replace('?&', '?', $mobileUrl);
            ?>
            <tr data-key="">
                <td><?= $info['name']; ?></td>
                <td><?php if ($info['pc']) { echo "<a href='{$pcUrl}' target='_blank'>{$pcUrl}</a>"; } ?></td>
                <td><?php if ($info['mobile']) { echo "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}</a>"; } ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
