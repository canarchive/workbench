<?php

namespace spread\models;

use Yii;
use common\models\SpreadModel;

class Dispatch extends SpreadModel
{
    public $houseInfo;
    public $statusModel;

    public static function tableName()
    {
        return '{{%dispatch}}';
    }

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function rules()
    {
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobile' => '手机号',
            'house_id' => '房屋',
            'created_at' => '派单时间',
            'updated_at' => '更新时间',
            'sendmsg_at' => '通知短信',
            'note' => '备注',
            'status' => '状态',
            'name' => '名称',
        ];
    }

    public function getStatusOrderInfos()
    {
        $datas = [
            '0' => '跟踪中',
            '1' => '成单',
            '2' => '未成单',
        ];
        return $datas;
    }

    public function beforeSave($insert)
    {
        return true;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if ($insert || $this->statusChange) {
        }

        return true;
    }    

    public function changeFromMerchant($ownerMerchant, $insert)
    {
        $data = $ownerMerchant->toArray();
        $exist = $this->findOne(['mobile' => $data['mobile'], 'house_id' => $data['house_id']]);
        if (!$exist) {
            $newData = [
                'city_code' => $data['city_code'],
                'mobile' => $data['mobile'],
                'house_id' => $data['house_id'],
                'service_id' => $data['service_id'],
                'num_merchant' => 1,
            ];
            $model = $this->_newModel('dispatch', true, $newData);
            $model->insert(false);
            return ;
        }

        if ($insert) {
            $exist->updateCounters(['num_merchant' => 1]);

        }
    }
}
