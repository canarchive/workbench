<?php

namespace spread\models\statistic;

use Yii;
use common\models\SpreadModel;
use yii\helpers\ArrayHelper;
use spread\models\saccount\Planfee;

class AbstractStatistic extends SpreadModel
{
    public $fields;
    public $where;
    
    public static function getDb()
    {
        return Yii::$app->dbStatistic;
    }    

    public function _getClassPrefix()
    {
        return __NAMESPACE__ . '\\';
    }

    public function recordData($data, $type)
    {
        //print_R($data);print_R($this);exit();
        $validTypes = ['visit', 'signup'];
        if (!in_array($type, $this->validTypes)) {
            return false;
        }

        $newData = [];
        foreach ($this->fieldInfos as $field) {
            $newData[$field] = isset($data[$field]) ? $data[$field] : '';
        }
        $mark = $this->getMark($newData);
        $info = $this->findOne(['mark' => $mark]);
        $newData['mark'] = $mark;

        return $this->recordDetail($newData, $info, $type);
    }

    protected function getMark($data)
    {
        return md5(implode($data, ''));
    }

    public function getReportBaseColumns()
    {
        $base = ['visit_num'];
        $columns = [
            'visit_num',
            'visit_num_success',
            'success_rate' => [
                'attribute' => 'success_rate',
                'value' => function ($model) {
                    return $model->getSuccessRate();
                },
            ],
        ];

        $fields = $this->fields;
        $where = $this->where;
        if ($this->checkSemFields($fields)) {
            $columns = array_merge($columns, [
                'hit_num' => [
                    'attribute' => 'hit_num',
                    'value' => function ($model) use ($fields, $where) {
                        return $model->getHitInfo($fields, $model, $where);
                    },
                ],
                'hit_rate' => [
                    'attribute' => 'hit_rate',
                    'value' => function ($model) use ($fields, $where) {
                        return $model->getHitRate($fields, $model, $where);
                    },
                ],
                'fee' => [
                    'attribute' => 'fee',
                    'value' => function ($model) use ($fields, $where) {
                        return $model->getFeeInfo($fields, $model, $where);
                    },
                ],
                'fee_average' => [
                    'attribute' => 'fee_average',
                    'value' => function ($model) use ($fields, $where) {
                        return $model->getFeeAverage($fields, $model, $where);
                    },
                ],
                //'new_num',
            ]);
        }

        return $columns;
    }

    public function columnCustomer($type)
    {
        $fields = $type ? ['merchant_id'] : [];
        return $fields;
    }

    public function columnService($type)
    {
        $fields = $type ? ['service_id'] : [];
        return $fields;
    }

    public function columnCityCode($type)
    {
        $fields = $type ? ['city_code'] : [];
        return $fields;
    }

    public function getFeeInfo($fields, $model, $where)
    {
        return $this->_getSemInfo($fields, $model, $where, 'fee');
    }

    public function getHitInfo($fields, $model, $where)
    {
        return $this->_getSemInfo($fields, $model, $where, 'hit_num');
    }

    protected function _getSemInfo($fields, $model, $type, $where)
    {
        $datas = [];
        foreach ($fields as $field) {
            $datas[$field] = $model->$field;
        }
        $model = new Planfee();//$this->_newModel('spreadfee');
        $return = $model->getSemInfo($datas, $type, $where);
        return $return;
    }

    public function checkSemFields($fields)
    {
        //$datas = ['city_code', 'merchant_id', 'channel', 'created_day', 'created_month', 'sem_account'];
        $datas = ['city_code', 'channel', 'client_type', 'created_day', 'created_month', 'sem_account'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return false;
            }
        }

        return true;
    }

    public function getSuccessRate()
    {
        $rate = $this->visit_num == 0 ? '-' : number_format($this->visit_num_success / $this->visit_num, 4);
        $rate = $rate == '-' ? $rate : $rate * 100;
        $rate .= '%';
        return $rate;
    }

    public function getHitRate($fields, $model, $where)
    {
        $num = $model->getHitInfo($fields, $model, $where);
        $rate = $num == 0 ? '-' : number_format($model->visit_num_success / $num, 4);
        $rate = $rate == '-' ? $rate : $rate * 100;
        $rate .= '%';
        return $rate;
    }

    public function getFeeAverage($fields, $model, $where)
    {
        $num = $model->getFeeInfo($fields, $model, $where);
        $rate = $model->visit_num_success == 0 ? '-' : number_format($num / $model->visit_num_success, 3);
        $rate .= '元';
        return $rate;
    }
}