<?php
$baseInfos = [
    [
        'name' => '商品基本信息',
        'model' => $model,
        'elems' => [
            [
                'tag' => ['sort' => 'change', 'width' => 200],
                'keyword' => ['sort' => 'change', 'width' => 200],
            ],
			[
                'description' => ['sort' => 'change', 'type' => 'textarea'],
			],
        ],
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
