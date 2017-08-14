<?php
$baseInfos = [
    'name' => '拓展商家基本信息',
    'tableName' => 'merchant',
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
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['model' => $model, 'info' => $baseInfos]);
//echo $this->render('_listinfo_interview', ['merchantModel' => $model, 'interviewInfos' => $interviewInfos, 'contactInfos' => $contactInfos]);
echo $this->render('_contact', ['merchantModel' => $model, 'contactInfos' => $contactInfos]);
echo $this->render('_callback', ['merchantModel' => $model, 'callbackInfos' => $callbackInfos, 'contactInfos' => $contactInfos]);
?>
