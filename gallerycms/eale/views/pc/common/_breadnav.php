<div class="row position">
    <div class="col-xs-12 col-md-6 left"></div>
    <div class="col-xs-7 col-md-6 right" role="main">
        <div class="smalln">
            <div class="pull-right">
                <table>
                    <tr>
                        <td><h5>您的当前位置：</h5></td>
                        <td>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="<?= $this->context->currentSiteInfo['url']; ?>" title="首页">首页</a></li>
                                <?php foreach ($datas as $url => $data) { ?>
                                <li>
                                <a href="<?= $this->context->currentSiteInfo['url'] . $url; ?>" title=""><?= $data; ?></a></li>
                                <?php } ?>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
