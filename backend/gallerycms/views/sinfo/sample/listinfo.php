<?php
$noActionColumn = null;
if (isset($this->context->sort) && $this->context->sort == 'work') {
    $noActionColumn = 'true';
}

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'format' => 'raw',
            'attribute' => 'name',
            'value' => function ($model) {
                $baseUrl = Yii::getAlias('@eale.cmsurl');
                return "<a target='_blank' href='{$baseUrl}/sample/{$model->id}.html'>{$model->name}</a>";
            }
        ],
        'title',
		[
			'format' => 'raw',
			'attribute' => 'thumb',
			'value' => function($model) {
				return $model->getAttachmentImg($model->thumb);
			}
		],
		/*[
            'attribute' => 'sort',
			'value' => function($model) {
				return isset($model->sortInfos[$model->sort]) ? $model->sortInfos[$model->sort] : '';
			},
        ],*/
        [   
            'format' => 'raw',
            'attribute' => 'orderlist',
            'value' => function($model) {
                $appMenus = $this->context->menuInfos['appMenus'];
                $updateUrl = isset($appMenus['update']) ? $appMenus['update']['url'] : ''; 
                return '<input name="orderlist" type="text" style="width:30px;" value="' . $model->orderlist . '" class="input-text-c" onchange="updateElemByAjax(\'' . $updateUrl . '\', ' . $model->id . ', \'orderlist\', this.value);">';
            },  
        ],
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
            'attribute' => 'updated_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->updated_at);
            },
        ],
		[
            'attribute' => 'status',
			'value' => function($model) {
				return $model->statusInfos[$model->status];
			}
		],
    ],
];

if (is_null($noActionColumn)) {
    echo $this->render('_nav');
}
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'noActionColumn' => $noActionColumn]);
