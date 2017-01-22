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
                            <a href="#site-<?= $code; ?>">页面采集</a>
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
        <div class="box-inner" id="tdk-<?= $code; ?>">
            <div data-original-title="" class="box-header well">
                <h2><?= $infoName; ?></h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
                <?php foreach ($pageInfos as $code => $info) { ?>
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <tr>
                        <td>url名称</td>
                        <td><?= $info['name']; ?></td>
                    </tr>
                    <?php if (isset($info['pc-url'])) { ?>
                    <tr>
                        <td>PC-url</td>
                        <td><a href="<?= $info['pc-url']; ?>" target="_blank"><?= $info['pc-url']; ?></a></td>
                    </tr>
                    <?php } ?>
                    <?php if (isset($info['mobile-url'])) { ?>
                    <tr>
                        <td>移动端-url</td>
                        <td><a href="<?= $info['mobile-url']; ?>" target="_blank"><?= $info['mobile-url']; ?></a></td>
                    </tr>
                    <?php } ?>
                    <?php if (!empty($info['title'])) { ?>
                    <tr>
                        <td>页面标题</td>
                        <td><?= $info['title']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if (!empty($info['keyword'])) { ?>
                    <tr>
                        <td>关键字</td>
                        <td><?= $info['keyword']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if (!empty($info['description'])) { ?>
                    <tr>
                        <td>描述</td>
                        <td><?= $info['description']; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
    <!--/span-->
</div>
