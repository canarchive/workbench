<?php
use yii\helpers\Html;
//print_r($siteInfos);exit();
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($siteInfos as $code => $info) { ?>
                    <?php if ($i % 4 == 0) { echo '<tr>'; }?>
                        <td>
                            <?= $info['name']; ?>--
                            <?php if (isset($info['pc-url'])) { ?><a href="<?= $info['pc-url']; ?>" target="_blank">PC</a>--<?php } ?>
                            <?php if (isset($info['mobile-url'])) { ?><a href="<?= $info['mobile-url']; ?>" target="_blank">(移动端)</a>--<?php } ?>
                            <?php foreach ($info['pageInfos'] as $isMobile => $pageInfos) { $infoName = $model->isMobileInfos[$isMobile] . '-' . $info['name']; ?>
<a href="#site-<?= $code . $isMobile; ?>"><?= $infoName; ?></a>
                            <?php } ?>
                        </td>
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
<div class="row">
    <div class="box col-md-12">
        <?php foreach ($siteInfos as $code => $siteInfo) { ?>
        <?php foreach ($siteInfo['pageInfos'] as $isMobile => $pageInfos) { $infoName = $model->isMobileInfos[$isMobile] . '-' . $siteInfo['name']; ?>
        <div class="box-inner" id="site-<?= $code . $isMobile; ?>">
            <div data-original-title="" class="box-header well">
                <h2><?= $infoName; ?></h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                        <tr>
                            <th>代码</th>
                            <th>名称</th>
                            <th>源名称</th>
                            <th>添加时间</th>
                            <th>状态</th>
                            <th>是否启用</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pageInfos as $key => $info) { ?>
                        <tr>
                            <td><?= $info['code']; ?></td>
                            <td><?= $info['urlLocalName']; ?></td>
                            <td><?= "<a href='{$info['url']}' target='_blank'>{$info['name_source']}</a>"; ?></td>
                            <td><?= $info['created_at']; ?></td>
                            <td><?= $info->statusInfos[$info->status]; ?></td>
                            <td><?= $info->isbakInfos[$info->isbak]; ?></td>
                            <td><?= $info->opeStr; ?></td>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
    <!--/span-->
</div>
