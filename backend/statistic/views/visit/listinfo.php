<?php
use yii\helpers\Html;

$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'sort',
        'city_code',
		'merchant_id',
        'channel',
        'client_type',
		[
			'attribute' => 'sem_account',
			'value' => function ($model) {
				return $model->getPointName('account', $model->sem_account);
			}
        ],
		'channel_info',
		[
			'attribute' => 'plan_id',
			'value' => function ($model) {
				return $model->getPointName('plan', $model->plan_id) . " ( {$model->plan_id} )";
			}
        ],

        //'unit_id',
        'keyword',
        'keyword_search',
        'param_info',
		'url_pre',
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

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
