<?php
$baseInfos = [
    [
        'name' => '商品基本信息',
        'model' => $model,
        'elems' => [
            [
				'category_code' => ['valueType' => 'point', 'table' => 'shop-category', 'pointField' => 'code'],
                'name' => ['sort' => 'change'],
                'brief' => ['sort' => 'change'],
                'orderlist' => ['sort' => 'change'],
            ],
            [
                'price' => ['sort' => 'change'],
                'price_market' => ['sort' => 'change'],
                'status' => ['valueType' => 'key'],
                'created_at' => ['valueType' => 'timestamp'],
                'updated_at' => ['valueType' => 'timestamp'],
            ],
        ],
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
