<?php echo $this->render('@baseapp/common/views/searchs/_search', ['searchModel' => $this->context->searchModel]); ?>

<div id="w1" class="grid-view">
    <div class="summary"><b><?php //echo $title; ?></b>-推广URL汇总</div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>商家</th>
                <th>域名</th>
                <th>模板</th>
                <th>PC-URL</th>
                <th>MOBILE-URL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($infos as $info) { ?>
            <tr data-key="">
                <td><?= $info['mName']; ?></td>
                <td><?= $info['sName']; ?></td>
                <td><?= $info['tName']; ?></td>
                <td><?= $info['pcUrl']; ?></td>
                <td><?= $info['mobileUrl']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
