<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'merchant_id',
            'value' => function ($model) {
                return $model->getPointName('merchant', $model->merchant_id);
            }
        ],
        [
            'attribute' => 'mobile',
            'value' => function ($model) {
                return $model->maskMobile($model->mobile);
            }
        ],
        [
            'format' => 'raw',
            'attribute' => 'content',
            'value' => function($model) {
                $cTime = $model->formatTimestamp($model->created_at);
                return "<b>{$cTime}</b>  {$model->content}";
            }
        ],
        [
            'format' => 'raw',
            'attribute' => 'reply',
            'value' => function($model) {
                $cTime = $model->formatTimestamp($model->reply_at);
                return "<b>{$cTime}</b>  {$model->reply}";
            }
        ],
        /*[
            'format' => 'raw',
            'attribute' => 'operation',
            'value'=> function($model){
                $mobileId = $model->mobileId;
                $url = '/subsite/decoration/dispatch/update.html?id=' . $mobileId;
                return "<a href='{$url}' target='_blank'>备注</a>";
            },
		],*/
    ],
];

$searchContent = $this->render('@baseapp/spread/views/_search-guestbook', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
