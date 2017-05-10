<?= $this->render('_search', array_merge(['model' => $model])); ?>

<div id="w1" class="grid-view">
    <div class="summary">推广参数列表</div>
    <table class="table table-striped table-bordered">
        <tbody>
            <?php $i= 0; foreach ($attrs as $field => $paramInfo) { ?>
            <?php if ($i / 3 == 0) { echo '<tr data-key="">'; } ?>
                <td><?= $paramInfo['param'] . '--' . $paramInfo['default']; ?></td>
            <?php if ($i % 3 == 2) { echo '</tr>'; } ?>
            <?php $i++;} ?>
            <?php if ($i-- % 3 != 2) { echo '</tr>'; } ?>
        </tbody>
    </table>
</div>
<div id="w1" class="grid-view">
    <div class="summary"><?php echo "<b>{$model->companyInfos[$cityCode]}</b>--<b>{$merchantInfo['name']}</b>-推广URL汇总"; ?></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>域名<=>模板<=>渠道</th>
                <th>PC-URL</th>
                <th>MOBILE-URL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($domainInfos as $domain => $dData) { 
            foreach ($templateInfos as $template => $tData) { 
            foreach ($channelInfos as $channel => $cData) { 
                $params = ['showFull' => $showFull, 'domain_code' => $domain, 'template_code' => $template, 'channel' => $channel];
            ?>
            <tr data-key="">
                <td><?= $dData . '<=>' . $tData . '<=>' . $cData; ?></td>
                <td><?php echo $model->getUrlOfSpread($params, $attrs); ?></td>
                <td><?php echo $model->getUrlOfSpread($params, $attrs, false); ?></td>
            </tr>
            <?php } ?>
            <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>
