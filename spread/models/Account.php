<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;

class Account extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_account}}';
    }

    public function rules()
    {
        return [
            [['name','merchant'], 'required'],
            [['status',], 'default', 'value' => 0],
            [['channel','domain', 'domain_mobile'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'channel' => '渠道',
            'code' => '代码',
            'name' => '账户名',
            'merchant' => '所属公司',
            'domain' => '域名',
            'domain_mobile' => '移动端域名',
            'status' => '状态',
        ];
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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'channel' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'merchant' => ['type' => 'key'],
            'domain' => ['type' => 'common'],
            'domain_mobile' => ['type' => 'common'],
            'status' => ['type' => 'key'],
        ];
    }

    public function getPlanInfos()
    {
        $model = new Plan();
        $infos = $model->getInfos(['where' => ['account_id' => $this->id, 'status' => 1]]);
        return $infos;
    }
}
