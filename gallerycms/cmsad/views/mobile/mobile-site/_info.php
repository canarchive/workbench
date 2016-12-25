<?php
use yii\helpers\Url;
?>
<div class="zqdl-content" id='page4'>
    <ul class='hd clearfix'>
        <li class="active"><em></em>关于我们</li>
        <li><em></em>资讯中心</li>
        <li class="last"><em></em>品牌合作</li>
    </ul>
    <div class="bd">
        <ul class='bd clearfix'>
            <li class="active">
                <h3>为什么选择<?= Yii::$app->params['siteNameBase']; ?>？</h3>
                <div class="txt-con">
                    <div class='txt-con-item1'>
                        <h4>9年SEM行业经验</h4>
                        <p>9年SEM实战经验，服务过亿级账户</p>
                    </div>
                    <div class='txt-con-item2'>
                        <h4>360套</h4>
                        <p>针对360行专属落地营销解决方案</p>
                    </div>
                    <div class='txt-con-item3'>
                        <h4>品牌合作案例</h4>
                        <p>全国1000家品牌合作案例，因为专业所以专注</p>
                    </div>
                </div>
            </li>
            <?php $i = 0; foreach ($infos as $subInfo) { if ($i > 1) { break; } ?>
            <li <?php if ($i == 1) { echo 'class="last"'; } ?>>
                <ul class="zixun-list">
                    <?php $j = 0; foreach ($subInfo['subInfos'] as $info) { ?>
                    <li>
                        <a href="<?= Url::to(['/cmsad/mobile-info/show', 'id' => $info['id']]); ?>">
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
