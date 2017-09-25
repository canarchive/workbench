<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;

class Plan extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_plan}}';
    }

    public function rules()
    {
        return [
            [['name', 'account_id'], 'required'],
            [['status', 'start_at', 'end_at', 'merchant_id'], 'default', 'value' => 0],
            [['code', 'channel',], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '计划名',
            'code' => '代码',
            'channel' => '渠道',
            'account_id' => '帐户Id',
            'merchant_id' => '公司ID',
            'start_at' => '开始时间',
            'end_at' => '最近投放时间',
            'status' => '状态',
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if ($this->account_id != $this->getOldAttribute('account_id')) {
            $accountInfo = $this->getPointInfo('account', $this->account_id);
            $this->channel = isset($accountInfo['channel']) ? $accountInfo['channel'] : $this->channel;
        }
        return true;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'channel' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'account_id' => ['type' => 'point', 'table' => 'account'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'start_at' => ['type' => 'timestamp'],
            'end_at' => ['type' => 'timestamp'],
            'status' => ['type' => 'key'],
        ];
    }

    public function directBaidu()
    {
        $infoBase = [
            'channel' => 'bdztc',
            'client_type' => 'h5',
            'account_id' => 12,
            'account_code' => '525062556@y.com',
        ];
        $plans = $this->getInfos(['where' => ['account_id' => 12]]);
        for ($i = 1; $i < 22; $i++) {
            $day = $i < 10 ? '2017090' . $i : '201709' . $i;
            $time = strtotime($day);
            $info = array_merge($infoBase, [
                'created_day' => date('Ymd', $time),
                'created_month' => date('Ym', $time),
                'created_week' => date('W', $time),
                'created_weekday' => date('N', $time),
            ]);
            foreach ($plans as $plan) {
                $info = array_merge($info, ['plan_id' => $plan['id'], 'plan_name' => $plan['name']]);
                $model = new Planfee($info);
                $model->insert(false);
            }
        }
    }
}
