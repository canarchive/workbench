<?php

namespace baseapp\spread\models\searchs;

Trait UserTemplate
{
	public function getColumnsUser($ignores = [])
	{
        $columns = [
            'id' => 'id',
            'merchant_id' => [
                'attribute' => 'merchant_id',
                'value' => function($model) {
                    return $model->getPointName('merchant', $model->merchant_id);
                },
            ],
			'channel' => [
				'attribute' => 'channel',
				'value' => function($model) {
					return $model->getKeyName('channel', $model->channel);
				}
		    ],
        	//'client_type',
            'city_code' => [
                'attribute' => 'city_code',
                'value' => function($model) {
                    $city_code = empty($model->conversionInfo) ? '' : $model->conversionInfo['city_code'];
                    return $city_code;
                } 
            ],
            'name' => 'name',
            'mobile' => [
                'attribute' => 'mobile',
                'value' => function ($model) {
                    return $model->maskMobile($model['mobile']);
                }
            ],
            'service_id' => [
                'attribute' => 'service_id',
                'value' => function($model) {
                    return $model->getPointName('service', $model->service_id);
                },
            ],
            'city_input' => 'city_input',
            'area_input' => 'area_input',
            'signup_at' => [
                'attribute' => 'signup_at',
                'value'=> function($model){
                    return $model->formatTimestamp($model->signup_at);
                },
            ],
            'city' => [
                'attribute' => 'city',
                'value' => function($model) {
                    $city = empty($model->conversionInfo) ? '' : $model->conversionInfo['city'];
                    return $city;
                } 
            ],
            'callback_again' => [
                'attribute' => 'callback_again',
                'value' => function($model) {
                    return  date('Y-m-d H:i:s',$model->callback_again);
                }
            ],
            'invalid_status' => [
                'attribute' => 'invalid_status',
                'value' => function($model) {
					return $model->getKeyName('invalid_status', $model->invalid_status);
                },
            ],
            'status' => [
                'attribute' => 'status',
                'value' => function($model) {
					return $model->getKeyName('status', $model->status);
                }
            ],
        ];
		foreach ($ignores as $ignore) {
			unset($columns[$ignore]);
		}
		return $columns;
	}
}
