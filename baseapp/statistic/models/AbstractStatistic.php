<?php

namespace baseapp\statistic\models;

use Yii;
use baseapp\spread\models\SpreadModel;
use yii\helpers\ArrayHelper;
use spread\models\Planfee;

class AbstractStatistic extends SpreadModel
{
    use HitInfosTrait;
    public $show_field;
    public $field_hit;
    public $fields;
    public $where;
    public $created_day_start;
    public $created_day_end;
    
    public function init()
    {
        parent::init();
        $this->field_hit = Yii::$app->request->get('field_hit', '');
    }

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
        $validTypes = ['visit', 'signup'];
        if (!in_array($type, $this->validTypes)) {
            return false;
        }

        $newData = [];
        foreach ($this->fieldInfos as $field) {
            $dValue = in_array($field, ['plan_id', 'unit_id']) ? 0 : '';
            $newData[$field] = isset($data[$field]) ? $data[$field] : $dValue;
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

    protected function _getCheckedFields()
    {
        if ($this->field_hit === null) {
            $this->field_hit = Yii::$app->request->get('field_hit', '');
        }
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit, '-'));
        $datas = $this->fieldHitInfos;
        foreach ($fields as $field) {
            if (!in_array($field, $datas['fields'])) {
                return [$datas['default']];
            }
        }
        return $fields;
    }

    public function attributeBase()
    {
        return [
            'id' => 'ID',
            'service_id' => '客服',
            'merchant_id' => '商家',
            'created_day' => '日期',
            'created_month' => '月份',
            'created_week' => '周',
        ];
    }

    protected function _defaultOrder()
    {
        return [
            'defaultOrder' => [
                'created_day' => SORT_DESC,
            ]
        ];
    }

    protected function _defaultPagination()
    {
        return [
            'pageSize' => 100,
        ];
    }
}
