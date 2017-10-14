<?php
$baseInfos = [
    [
        'name' => '拓展商家基本信息',
        'model' => $model,
        'elems' => [
            [
                'sort' => ['valueType' => 'key'],
                'code' => [],
                'city_code' => [],
                'name' => ['sort' => 'change'],
                'name_full' => ['sort' => 'change'],
                'region' => ['sort' => 'change'],
                'address' => ['sort' => 'change'],
            ],
            [
                'status' => ['valueType' => 'key'],
                'callback_next' => ['sort' => 'change', 'type' => 'timestamp', 'valueType' => 'timestamp'],
                'created_at' => ['valueType' => 'timestamp'],
                'updated_at' => ['valueType' => 'timestamp'],
                'msg' => ['sort' => 'change'],
            ],
            [
                'description' => ['sort' => 'change', 'width' => 800],
            ],
        ],
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
