<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

//$serviceInfos = $model->serviceDatas;

$formName = $model->formName();
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i>检索条件</h2>
        </div>
        <div class="box-create">
            <?php
            $form = ActiveForm::begin([
                'id' => 'list-form',
                'method' => 'get',
                //'action' => Url::toRoute('channel-log-success/listinfo'),
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <!--<label class="control-label col-md-1">状态</label>
                <div class="col-md-2">
                    <?= Html::dropDownList(
                        "{$formName}[status]",
                        0,
                        $model->statusInfos,
                        [
                            'prompt' => '全部',
                            'class' => 'form-control',
                        ]
                    ) ?>
                </div>-->
                <?php if ($model->status == 4) { ?>
                <label class="control-label col-md-1">无效原因</label>
                <div class="col-md-2">
                    <?= Html::dropDownList(
                        "{$formName}[invalid_status]",
                        0,
                        $model->invalidStatusInfos,
                        [
                            'prompt' => '全部',
                            'class' => 'form-control',
                        ]
                    ) ?>
                </div>
                <?php } ?>
            </div>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">报名时间</label>
                <div class="col-md-2">
                    <input class="form-control" type="text" id="created_at_start" name="created_at_start" >
                    <script type="text/javascript">
                        $(function () {
                            $('#created_at_start').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <div class="col-md-2">
                    <input class="form-control" type="text" id="created_at_end" name="created_at_end" >
                    <script type="text/javascript">
                        $(function () {
                            $('#created_at_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <label class="control-label col-md-1">手机号</label>
                <div class="col-md-1" style="padding-left:5px;padding-right:5px">
                    <input class="form-control" type="text" name="mobile">
                </div>
                <!--<label class="control-label col-md-1">搜索关键字</label>
                <div class="col-md-1" style="padding-left:5px;padding-right:5px">
                    <input class="form-control" type="text" name="keyword">
                </div>-->
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
