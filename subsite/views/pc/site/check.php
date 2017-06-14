<?php
?>
<div id="w1" class="grid-view">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>商家</th>
                <th>推广页面(pc)</th>
                <th>推广页面(移动端）</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datas as $id => $info) { ?>
            <tr data-key="">
                <td><?= $info['name']; ?></td>
                <td><?= $info['tpcName']; ?></td>
                <td><?= $info['tmobileName']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
