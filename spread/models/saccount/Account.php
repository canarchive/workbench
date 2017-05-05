<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;

class Account extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_account}}';
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
        return [
            [['name','merchant'], 'required'],
            [['status',], 'default', 'value' => 0],
            [['channel','password', 'created_at','updated_at','domain_id'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'channel' => '渠道',
            'name' => '账户名',
            'merchant' => '所属公司',
            'domain_id' => '推广域名',
            'password' => '密码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    protected function getDomainInfos()
    {
        $infos = ArrayHelper::map(Domain::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getMerchantInfos()
    {
        $datas = [
            'wny' => '维纳亚',
            'mzk' => '美宅客',
            '55jia' => '55家',
            'toteme' => '途睿',
            'jzjz' => '极装吉住',
            'cjhl' => '诚聚互联',
        ];
        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '停用',
            '1' => '正常',
        ];
        return $datas;
    }
}
