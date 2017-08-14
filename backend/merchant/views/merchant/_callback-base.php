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
                'hotline' => ['sort' => 'change'],
                'address' => ['sort' => 'change'],
            ],
            [
                'status' => ['valueType' => 'key'],
                'interview_num' => [],
                'callback_num' => [],
                'callback_next' => ['sort' => 'change', 'type' => 'timestamp', 'valueType' => 'timestamp'],
                'created_at' => ['valueType' => 'timestamp'],
                'updated_at' => ['valueType' => 'timestamp'],
                'description' => ['sort' => 'change'],
            ],
        ],
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
