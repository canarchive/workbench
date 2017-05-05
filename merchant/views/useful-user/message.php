<?php
use yii\bootstrap\ActiveForm;
$this->params['currentNav'] = 'owner';
?>
<?= $this->render('_nav', ['curAction' => 'index']); ?>
<style>
    .input_label{
        display: inline-block;
        margin-right: 1rem;
    }
        .mt{margin-bottom: 20px;margin: 0 auto;}
        .cRed{color:#EF6B64; font-weight: bold}
</style>
<div class="container">
    <section class="main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
				<div class="title">留言反馈</div>
            </div>
            <ul class="breadcrumbs">
			    <li>针对业主<b><?= $ownerName; ?></b><b><?= $houseAddress; ?></b>沟通情况</li>
            </ul>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-bd">
                        <div class="block-content">
                            <?php $form = ActiveForm::begin(['options' => []]); ?>

<div class="row mt" style="margin-bottom: 20px;">
    <div class="small-12  columns">
        派单时间：
        <span class="starttime"><?= date('Y-m-d H:i:s', $info['created_at']); ?></span>
    </div>
</div>
<?php $diffTime = $info['created_at'] + 86400 - Yii::$app->params['currentTime']; if ($diffTime > 0) { ?>

<div class="row mt" style="margin-bottom: 20px;">
    <div class="small-12  columns">
        距离关闭申请退单请求还有：
        <span class="endtime cRed"></span>
    </div>
</div>
<div class="row">
    <div class="small-12 form_radio columns">
        是否申请退单：<label class="input_label"><input class="form_input" name="status" type="radio" <?php if ($info['status'] == 'back_reply') { echo 'checked="checked"'; } ?> value="back_reply"/>是</label>
        <label class="input_label"><input class="form_input" name="status" type="radio" <?php if ($info['status'] == '' || $info['status'] == 'back_confirm') { echo 'checked="checked"'; } ?> value=""/>否</label>
    </div>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/merchant/adview/js/jquery-2.1.0.js"></script>
<script>
    //        开始时间
//    var starttime = new Date($('.starttime').text()).getTime();
//    var endtime = starttime + 86400000;
    var youtime = <?= $diffTime * 1000; ?>;//还有多久(毫秒值)
    /*if(window.name==''){
        youtime=86400000;
    }else{
        youtime=window.name;
    }*/
    function Endtime() {
        if (youtime==0) {
            $('.endtime').html('已过期');
        } else {
            youtime=youtime-1000;
            window.name=youtime;
            var seconds = youtime / 1000;
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var CHour = hours % 24;
            var CMinute = minutes % 60;
            var CSecond = Math.floor(seconds % 60);
            $('.endtime').html("<i>剩余时间：</i><span>"+CHour+"</span>时<span>"+CMinute+"</span>分<span>"+CSecond+"</span>秒");
        }
        setTimeout("Endtime()",1000);
    }
    Endtime();
</script>
<?php } ?>

                                <div class="row">
                                    <div class="small-12 medium-8 large-6 columns">
                                        <label for="domain">留言</label>
                                        <textarea name="content" id="content" class="captcha-domain" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <input type="submit" name="submit" class="button success tiny radius" value="提交" /></div>
                                </div>
                                <input type="hidden" name="id" value="<?= $id; ?>" />
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
