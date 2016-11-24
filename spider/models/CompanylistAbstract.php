<?php

namespace spider\models;

use common\models\SpiderModel;

class CompanylistAbstract extends SpiderModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'page', 'updated_at'], 'default', 'value' => 0],
            [['url_source', 'site_code', 'rules'], 'safe'],
        ];
    }

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'url' => '站点URL',
            'url_mobile' => '手机端URL',
            'description' => '描述',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '暂停',
            '1' => '正常',
        ];
        return $datas;
    }
}
