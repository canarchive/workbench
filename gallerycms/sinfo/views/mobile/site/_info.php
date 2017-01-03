<?php
use yii\helpers\Url;
?>
<div class="zqdl-content" id='page4'>
    <ul class='hd clearfix'>
        <li class="active"><em></em>使用步骤</li>
        <li><em></em>使用攻略</li>
        <li class="last"><em></em>营销神器</li>
    </ul>
    <div class="bd">
        <ul class='bd clearfix'>
            <li class="active">
                <h3>提升业绩、三步搞定</h3>
                <div class="txt-con">
                    <div class='txt-con-item1'>
                        <h4>注册用户</h4>
                        <p>添加域名、部署代码</p>
                    </div>
                    <div class='txt-con-item2'>
                        <h4>获取访客号码</h4>
                        <p>进行智能推送，主动会话</p>
                    </div>
                    <div class='txt-con-item3'>
                        <h4>提升业绩</h4>
                        <p>持续跟进，提升业绩</p>
                    </div>
                </div>
            </li>
            <?php $i = 0; foreach ($infos as $subInfo) { if ($i > 1) { break; } ?>
            <li <?php if ($i == 1) { echo 'class="last"'; } ?>>
                <ul class="zixun-list">
                    <?php $j = 0; foreach ($subInfo['subInfos'] as $info) { ?>
                    <li>
                        <a href="/info/<?= $info['id']; ?>.html">
                            <h4><?= $info['name']; ?></h4>
                            <!--<p><?= $info['description']; ?></p>-->
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
