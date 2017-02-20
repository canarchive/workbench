<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
use gallerycms\components\LinkPager;
?>
<div class="fl sel_left">
    <div class="sel_l_tit">
        <ul class="sorts fl clearfix">
            <li class="li_li1 li_se"><a href="/sample/" title="效果图">效果图</a></li>
        </ul>
        <!--<ul class="styles fr clearfix">
            <li class="sy1 ">
                <a href="/sample/">列表</a></li>
            <li class="sy2 sy_se">
                <a href="/sample/">图表</a></li>
        </ul>-->
    </div>
    <div class="sel_chart">
        <div class="chart_list clearfix">
            <?php foreach ($infos as $info) { ?>
            <input type="hidden" class="ajaxGetNumById" value="<?= $info['id']; ?>" />
            <dl class="dl_none">
                <dt>
                    <a href="/sample/show-<?= $info['id']; ?>" title="<?= $info['name']; ?>">
						<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" width="204" height="155" />
                    </a>
                    <!--<span></span><i>实景图片</i>-->
                </dt>
                <dd class="dd1">
                    <a href="/sample/show-<?= $info['id']; ?>" title="<?= $info['name']; ?>"><?= StringHelper::truncate($info['name'], 12, '...'); ?></a>
                    <!--<a rel="nofollow" style="display:none;" href="javascript:;" id="_<?= $info['id']; ?>">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/87843-2527.png" /></a>
                    <a rel="nofollow" style="display:none;" href="javascript:;" id="jin_6572154">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/7423a-9439.gif" /></a>
                    <a rel="nofollow" style="display:none;" href="javascript:;" id="zuan_6572154">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/04588-9953.gif" /></a>
                    <a rel="nofollow" style="display:none;" href="javascript:;" id="svip1_6572154">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/a4128-7451.gif" /></a>-->
                </dd>
                <!--<dd class="dd2">
                    <span class="favorablep">
                        <em>100%</em>
                        <i>好评</i>
                    </span>
                    <a class="apattention" id="attentionCountNum6572154" onclick="attention('6572154','欧克斯门窗','8-3');" title="关注项目" href="javascript:;">0人关注</a></dd>
                <dd class="dd3">基本投资额：
                    <em>5万~10万</em></dd>-->
                <dd class="dd4 clearfix">
                    <input class="fl quick" type="button" value="在线咨询" onclick="onClickBBSInfoNew('6572154','欧克斯门窗','','16-9-1');return false;" />
                    <div class="fl free" onclick="showStory('6572154','95155','欧克斯门窗')">
                        <span>获取报价</span></div>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <div id="page"><?= LinkPager::widget(['pagination' => $pages, 'activePageCssClass' => 'current']); ?></div>
    </div>
</div>