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
            [['code'], 'required'],
            [['status',], 'default', 'value' => 0],
            [['name', 'merchant', 'channel', 'domain', 'domain_mobile'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'channel' => '渠道',
            'code' => '账户名',
            'name' => '名称',
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

    public function formatName()
    {
        if (!empty($this->name)) {
            return $this->name;
        }

        $ext = $this->getKeyName('channel', $this->channel);
        $this->name = $this->code . " ( {$ext} )";
        $this->update(false);
        return $this->name;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'channel' => ['type' => 'key'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'inline', 'method' => 'formatName'],
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
