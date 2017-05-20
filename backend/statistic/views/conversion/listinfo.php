<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        'city_code',
        'client_type',
		'merchant_id',
        'name',
    [
        'attribute' => 'mobile',
        'value' => function ($model) {
            return substr_replace($model['mobile'], '******', 3, 6);
        }
    ],
        'channel',
        'client_type',
        'sem_account',
        'plan_id',
        'unit_id',
        'keyword',
        'keyword_search',
        'param_info',
        [
            'format' => 'raw',
            'attribute' => 'url_full',
            'value' => function ($model) {
                $content = '<a href="url:' . urldecode($model->url_full) . '">' . Html::encode(mb_substr(urldecode($model->url_full), 0, 20, 'utf-8')) . '</a>';
                $content .= mb_strlen(urldecode($model->url_full)) > 20 ? '<a href="javascript:void(0);" data-placement="top" data-toggle="popover" data-content="' . urldecode($model->url_full) . '" title="URL"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>全部</a>' : "";
                return $content;
            },
        ],
        'ip',
        'city',
        [
            'attribute' => 'created_at',
            'value' => function($model) {
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
