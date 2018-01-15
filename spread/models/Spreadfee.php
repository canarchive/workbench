<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\SpreadModel;
use merchant\models\Merchant;

class Spreadfee extends spreadModel
{
    public static function tableName()
    {
        return '{{%spreadfee}}';
    }

    /*public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }*/

    public function rules()
    {
        return [
            [['channel'], 'required'],
            [['merchant_id', 'fee', 'created_day', 'hit_num'], 'default', 'value' => 0],
            [['rate'], 'default', 'value' => 1],
            [['city_code', 'sem_account', 'plan_id', 'unit_id', 'created_day', 'rate'], 'safe'],
        ];
    }    

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'city_code' => '城市代码',
            'channel' => '渠道',
            'fee' => '费用',
            'sem_account' => 'SEM账号',
            'plan_id' => '计划ID',
            'unit_id' => '单元ID',
            'created_day' => '日期',
            'rate' => 'rate',
        ];
    }

    public function getSemAccountInfos()
    {
        $datas = [
            '22512156' => '百度-自有账号22512156',
            '22510942' => '百度-美宅客22510942',
            '1481612729601' => '360-北京美宅客',
        ];
        return $datas;
    }

    public static function getSemInfo($infos, $where, $type)
    {
        static $existDatas = [];
        $cMark = '';
        foreach ($infos as $key => $value) {
            $cMark .= $key . $value;
        }
        if (isset($existDatas[$cMark][$type])) {
            return $existDatas[$cMark][$type];
        }

        $fields = array_keys($infos);
        $query = self::find();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`hit_num`) AS `hit_num`, SUM(`fee`) As `fee`";
        $query->select($fieldsStr);
        $query->where($where);
        $query->groupBy($fields);
        $datas = $query->all();
        foreach ($datas as $data) {
            $mark = '';
            foreach ($fields as $field) {
                $mark .= $field . $data[$field];
            }
            $existDatas[$mark]['hit_num'] = $data['hit_num'];
            $existDatas[$mark]['fee'] = $data['fee'];
        }

        $existDatas[$cMark]['hit_num'] = isset($existDatas[$cMark]['hit_num']) ? $existDatas[$cMark]['hit_num'] : 0;
        $existDatas[$cMark]['fee'] = isset($existDatas[$cMark]['fee']) ? $existDatas[$cMark]['fee'] : 0;
        return $existDatas[$cMark][$type];
    }

    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }

    public function getChannelInfos()
    {
        $model = $this->_newModel('visit');
        return $model->channelInfos;
    }
}
