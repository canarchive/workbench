<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
use gallerycms\components\LinkPager;
?>
<div class="fl sel_left">
    <div class="sel_l_tit">
        <ul class="sorts fl clearfix">
        <!--<li class="li_li1 li_se"><a href="<?= "/{$this->context->currentCityCode}/merchant/"; ?>" title="<?= $this->context->currentCityName . '装修公司'; ?>"><?= $this->context->currentCityName . '装修公司'; ?></a></li>-->
        <li class="li_li1 li_se"><a rel="nofollow" href="javascript: void(0); "><?= $this->context->currentCityName . '装修公司'; ?></a></li>
        </ul>
        <?php if (!empty($keyword)) { ?>
        <ul class="styles fr clearfix">
            <li class="sy1 "><a>跟<b><?= $keyword; ?></b>相关的装修公司<b><?= count($infos); ?></b>个</a></li>
        </ul>
        <?php } ?>
    </div>
    <div class="sel_chart">
        <div class="chart_list clearfix">
            <?php foreach ($infos as $info) { ?>
            <input type="hidden" class="ajaxGetNumById" value="<?= $info['id']; ?>" />
            <dl class="dl_none">
                <dt>
                    <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>">
						<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" width="204" height="155" />
                    </a>
                    <!--<span></span><i>实景图片</i>-->
                </dt>
                <dd class="dd1">
                    <a href="<?= $info['infoUrl']; ?>" title="<?= $info['name']; ?>"><?= StringHelper::truncate($info['name'], 12, '...'); ?></a>
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
                    <input class="fl quick" type="button" value="免费设计" onclick="message_check('<?= $info['id']; ?>','merchant', 'merchant-list-design','免费设计', '');" />
                    <div class="fl free" onclick="message_check('<?= $info['id']; ?>','merchant', 'merchant-list-quote','免费报价', '');">
                        <span>免费报价</span></div>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <div id="page"><?= LinkPager::widget(['pagination' => $pages, 'activePageCssClass' => 'current']); ?></div>
    </div>
</div>
