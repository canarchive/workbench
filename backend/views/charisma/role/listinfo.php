<?php
$gridViewParams = [
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'name',
            'label' => Yii::t('rbac-admin', 'Name'),
        ],
        [
            'attribute' => 'ruleName',
            'label' => Yii::t('rbac-admin', 'Rule Name'),
        ],
        [
            'attribute' => 'description',
            'label' => Yii::t('rbac-admin', 'Description'),
        ],
    ],
];

echo $this->render('@backend/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'showFilter' => true]);
