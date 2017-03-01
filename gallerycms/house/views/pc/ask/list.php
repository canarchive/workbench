<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
//use yii\widgets\LinkPager;
use gallerycms\components\LinkPager;

$this->params['bodyClass'] = 'class="narrow_980"';
?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/ask.js"></script>
<div class="ask_class">
    <?= $this->render('_breadnav', ['sortInfos' => $sortInfos]); ?>
    <div class="container clear">
        <?= $this->render('_nav', $sortInfos); ?>
        <div class="col2_1">
            <div class="question_list">
                <ul>
                    <?php foreach ($infos as $info) { ?>
                    <li>
                        <div class="question_hd">
                            <a href="/askshow_<?= $info['id']; ?>.html" target="_blank" class="ect">[<?= $sortInfos['sortInfos'][$info['sort']]['name']; ?>]<?= $info['name']; ?></a>
                        </div>
                        <div class="question_bd ect"><?= $info['description']; ?></div>
                        <div class="question_ft clear">
                            <div class="col_l">已有
                            <em class="ans_num"><?= $info['num_answer']; ?></em>个回答</div>
                            <div class="col_r"><?= date('Y-m-d H:i:s', $info['created_at']); ?></div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="pages"><?= LinkPager::widget(['pagination' => $pages, 'activePageCssClass' => 'current']); ?></div>
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/67379-7523.css">
            <div id='HotArea' style='display: block;'></div>
        </div>
        <?php echo $this->render('_right', ['merchantInfos' => $merchantInfos, 'tagInfos' => $tagInfos]); ?>
    </div>
    <script>(function() {
            jq('.state_on').click(function() {
                jq('.state_list').toggle();
            }); var fixObj = jq('#zxbjFrame'),
            rightWrap = jq('.col2_2'),
            fixObjPh = rightWrap.offset().top + rightWrap.height(),
            origWidth = rightWrap.width(),
            bwer = checkBrowser(),
            ie6 = false;
            if (bwer.name == "msie" && bwer.version == 6) {
                ie6 = true;
            };
            jq(window).bind('scroll',
            function() {
                var sh = document.documentElement.scrollTop || document.body.scrollTop;

                if (fixObjPh <= sh && !ie6) {
                    fixObj.addClass('fm_locate').css('width', origWidth + 'px');
                } else {
                    fixObj.removeClass('fm_locate');
                }
            });
        })();</script>
</div>
