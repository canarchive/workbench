<?= $this->render('_search', array_merge($searchDatas)); ?>

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
    <div class="summary"><b><?php echo $title; ?></b>-推广URL汇总"; ?></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>域名<=>模板<=>渠道</th>
                <th>PC-URL</th>
                <th>MOBILE-URL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($infos as $info) { ?>
            <tr data-key="">
                <td><?= $info['name']; ?></td>
                <td><?= $info['pcUrl']; ?></td>
                <td><?= $info['mobileUrl']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
