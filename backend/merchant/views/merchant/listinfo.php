<?php
use yii\helpers\Url;

$columns = [
    'id' => 'id',
    'sort' => [
        'attribute' => 'sort',
        'value' => function($model) {
            return $model->getKeyName('sort', $model->sort);
        },
    ],
    'code' => 'code',
    'name' => 'name',
    'city_code' => 'city_code',
    'region' => 'region',
    'orderlist' => [
        'format' => 'raw',
        'attribute' => 'orderlist',
        'value' => function($model) {
            $appMenus = $this->context->menuInfos['appMenus'];
            $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : '';
            return '<input name="orderlist" type="text" style="width:50px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', \'\', ' . $model->id . ', \'orderlist\', this.value);">';
        },
    ],
    'created_at' => [
        'attribute' => 'created_at',
        'value'=> function($model){
            return  $model->formatTimestamp($model->created_at);
        },
    ],
    'updated_at' => [
        'attribute' => 'updated_at',
        'value'=> function($model){
            return  $model->formatTimestamp($model->updated_at);
        },
    ],
    'status' => [
        'attribute' => 'status',
        'value' => function($model) {
            return $model->getKeyName('status', $model->status);
        }
    ],
];
if ($this->context->id == 'new-merchant') {
    $ignores = ['update_at', 'created_at', 'listorder', 'region'];
    foreach ($ignores as $ignore) {
        unset($columns[$ignore]);
    }
    $columns = array_merge($columns, [
		[
			'attribute' => 'saleman_id',
			'value' => function($model) {
				return $model->getPointName('saleman', $model->saleman_id);
			}
        ],
        [   
            'format' => 'raw',
            'attribute' => 'op-contact',
            'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
				$listMenu = $menus['merchant_new-contact_listinfo'];
				$addMenu = $menus['merchant_new-contact_add'];
                $opeStr = "<a href='{$addMenu['url']}?merchant_id={$model->id}'>添加</a>";
				$opeStr .= "---<a href='{$listMenu['url']}?merchant_id={$model->id}'>列表</a>";
                return $opeStr;
            },  
        ],
        [   
            'format' => 'raw',
            'attribute' => 'op-callback',
            'value' => function($model) {
                $menus = $this->context->menuInfos['menus'];
				$callbackListMenu = $menus['merchant_new-callback_listinfo'];
				$interviewListMenu = $menus['merchant_new-interview_listinfo'];
				$callbackMenu = $menus['merchant_new-merchant_callback'];
                $opeStr = "<a href='{$callbackMenu['url']}?id={$model->id}'>回访</a>";
				$opeStr .= "---<a href='{$callbackListMenu['url']}?merchant_id={$model->id}'>回访列表</a>";
				$opeStr .= "---<a href='{$interviewListMenu['url']}?merchant_id={$model->id}'>面谈列表</a>";
                return $opeStr;
            },  
        ],
    ]);
}
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => $columns,
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams]);
