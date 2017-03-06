<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->params['bodyClass'] = 'class="narrow_980"';
$this->params['tagInfos'] = $tagInfos;
?>
<script type="text/javascript">
document.body.oncopy = function() {
    alert("受保护的内容，暂不可复制！");
    return false;
}
</script>
<div class="ask_solved">
    <?= $this->render('_breadnav', ['sortInfos' => $sortInfos, 'infoName' => $info['name']]); ?>
    <div class="container clear" style="position: relative;">
        <!--右侧浮动广告位-->
        <div class="col2_1">
            <?php //echo $this->render('_signup'); ?>
            <div class="ask_qustion">
                <h1 class="title3" style="width:560px;"><?= $info['name']; ?></h1>
                <div class="ask_qustion_people mtb10" style="line-height: 32px;">提问者：
                    <b><?= $info['memberInfo']['name']; ?></b>
                    <!--<span>|</span>地点：
                    <a href="/" target="_blank" title=""></a>
                    <span>|</span>浏览：
                    <b>36</b>-->
                    <span>|</span>时间：
                    <b><?= date('Y-m-d H:i:s', $info['created_at']); ?></b>
                    <!--<div id='wyhd' style='display:none;margin-top: 35px;'>
                        <a href="javascript:void(0)" class="f_c_01af63" id="showthis">我要回答&gt;&gt;</a>
                    </div>-->
                </div>
                <?php //echo $this->render('_ask-form'); ?>
            </div>
            <?php if (isset($answerInfos['best'])) { $aInfo = $answerInfos['best']; ?>
            <div class="ask_qustion best_answer ask_answer_li">
                <div class="title title2" id='zj' value=''>最佳答案</div>
                <ul class="clear">
                    <li class="hover">
                        <a href="javascript: void(0);" rel="nofollow" class="company_img">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>
                        <div class="company_detail">
                            <a href="javascript: void(0);" rel="nofollow" class="company_name"><?= $aInfo['memberInfo']['name']; ?>
                                <i class="ask_ico_score"></i>
                                <!--<span class="f_c_ffc619">5积分</span>-->
                            </a>
                            <div class="company_case">回答数：
                                <b><?= $aInfo['memberInfo']['num_answer']; ?></b>
                                <!--<span>|</span>被采纳数：
                                <b>1</b>-->
                                <b class="time"><?= date('Y-m-d H:i:s', $aInfo['created_at']); ?></b></div>
                        </div>
                    </li>
                </ul>
                <p class="ask_one_p"><?= $aInfo['description']; ?></p>
            </div>
            <?php } ?>
            <div class="ask_answer_list">
                <div class="title title2">
                    <span><?= count($answerInfos['infos']); ?></span>条其他回答
                </div>
                <?php foreach ($answerInfos['infos'] as $aInfo) { ?>
                <div class="ask_answer_li">
                    <ul class="clear">
                        <li>
                            <!--<a href="javascript: void(0);" rel="nofollow" class="company_img">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/68e46-2900.jpg" rel="nofollow" alt="" width="54" height="54"></a>-->
                            <div class="company_detail">
                                <a href="javascript: void(0);" rel="nofollow" class="company_name"><?= $aInfo['memberInfo']['name']; ?></a>
                                <div class="company_case">回答数：
                                    <b><?= $aInfo['memberInfo']['num_answer']; ?></b>
                                    <b class="time"><?= date('Y-m-d H:i:s', $aInfo['created_at']); ?></b></div>
                            </div>
                        </li>
                    </ul>
                    <p class="ask_one_p edit_17685660"><?= $aInfo['description']; ?></p>
                </div>
                <?php } ?>
            </div>
            <form id='login'>
                <input type='hidden' id='ask_info_uid' value='650943'>
                <input type='hidden' id='ask_info_status' value='2'>
                <input type='hidden' id='isanswer' value=''>
                <input type='hidden' id='ask_userid' value='[866339,6195688,6946165]'>
                <input type='hidden' id='answeraccept' value='1'></form>
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/ask.js"></script>
            <script type="text/javascript">var ids = '17694292' + ',';
                //getaskcommits(17694292, 7250784);
                //getaskcommits(17685660, 866339);
                ids += '17685660' + ',';
                //getaskcommits(17670766, 6195688);
                ids += '17670766' + ',';
                //getaskcommits(17676375, 6946165);
                ids += '17676375' + ',';</script>
            <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/globalprovinces.js" xmlns="http://www.w3.org/1999/html"></script>
            <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/css/67379-7523.css">
            <div id='HotArea' style='display: block;'></div>
            <div class="question_list_box">
                <div class="title title2">相关问题</div>
                <div class="question_list">
                    <ul>
                        <?php foreach ($infos as $info) { ?>
                        <li>
                            <div class="question_hd clear">
                            <a href="<?= "/askshow_{$info['id']}.html"; ?>" class="ect col_l">[<?= $sortInfos['sortInfos'][$info['sort']]['name']; ?>]<?= $info['name']; ?></a>
                                <div class="question_ft  col_r">
                                    <b>已有<em class="ans_num"><?= $info['num_answer']; ?></em>个回答</b></div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo $this->render('_right', ['merchantInfos' => $merchantInfos, 'tagInfos' => $tagInfos]); ?>
    </div>
</div>
<?php //echo $this->render('_left'); ?>
<?php //echo $this->render('_js-show'); ?>
