<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;
use spread\models\saccount;
class Spreadfee extends BaseModel
{
    public static function tableName()
    {
        return '{{%spreadfee}}';
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
            [['name','merchant_id'], 'required'],
            // [['status',], 'default', 'value' => 0],
            [['channel', 'created_at','updated_at','domain_id'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_code' => '城市代码',
            'channel' => '二级渠道',
            'merchant_id' => '商家',
            'sem_account' => 'SEM账号',
            'plan_id' => '计划',
            'unit_id' => '单元',
            'created_day' => '日期',
            'hit_num' => '点击数',
            'fee' => '费用',
            'rate' => 'rate',
        ];
    }

    protected function getAccountInfos()
    {
        $infos = ArrayHelper::map(Account::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }
    protected function getUnitInfos()
    {
        $infos = ArrayHelper::map(Unit::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }
    protected function getPlanInfos()
    {
        $infos = ArrayHelper::map(Plan::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }
    public function getMerchantInfos()
    {
    {
        $infos = ArrayHelper::map(Merchant::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }
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
