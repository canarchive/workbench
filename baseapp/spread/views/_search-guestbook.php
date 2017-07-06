<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$sUrl = Yii::$app->request->absoluteUrl;
$sUrl = substr($sUrl, 0, strpos($sUrl, '?'));
$statusInfos = array_merge(['all' => '全部'], $model->statusInfos);
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
                'action' => $sUrl,
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">留言时间</label>
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
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
