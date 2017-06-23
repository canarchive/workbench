<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$currentMenu = $this->context->menuInfos['currentMenu'];
$formName = $model->formName();
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i>对话管理</h2>
        </div>
        <div class="box-create">
            <?php
            $form = ActiveForm::begin([
                'id' => 'list-form',
                'method' => 'get',
                'action' => $currentMenu['url'],
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">商家</label>
                <div class="col-md-2">
                    <?= Html::dropDownList(
                        'merchant_id',
                        null,
                        $model->getPointInfos('merchant', ['where' => $model->formatPriv('merchant_id', 'id', $this->context->privInfo)]),
                        [
							'class' => '',
                            'prompt' => '全部',
							'size' => 4,
							'height' => '60px',
                            'multiple' => 'multiple',
                        ]
                    ) ?>
                </div>
                <label class="control-label col-md-1">角色</label>
                <div class="col-md-2">
                    <?= Html::dropDownList(
                        'role',
                        null,
                        $model->getPointInfos('merchant-role', ['indexName' => 'code']),
                        [
                            'prompt' => '全部',
                            'class' => 'form-control',
                        ]
                    ) ?>
                </div>
                <label class="control-label col-md-1">状态</label>
                <div class="col-md-2">
                    <?= Html::dropDownList(
                        'status',
                        null,
                        $model->statusInfos,
                        [
                            'prompt' => '全部',
                            'class' => 'form-control',
                        ]
                    ) ?>
                </div>
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
