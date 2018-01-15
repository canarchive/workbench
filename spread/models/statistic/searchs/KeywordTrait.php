<?php

namespace spread\models\statistic\searchs;

use yii\data\ActiveDataProvider;

trait KeywordTrait
{
    public $field_hit;

    public function rules()
    {
        return [
            [['field_hit', 'created_day', 'channel', 'client_type'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

        if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
        }

        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`visit_num`) AS `visit_num`, SUM(`visit_num_success`) AS `visit_num_success`";
        //echo $fieldsStr;exit();
        $query->select($fieldsStr);
        $query->groupBy($fields);

        return $dataProvider;        
    }    

    protected function _getCheckedFields()
    {
        if ($this->field_hit == 'all') {
            return [];
        }
        
        $fields = explode('-', trim($this->field_hit,'-'));
        $datas = ['city_code', 'merchant_id', 'client_type', 'keyword', 'keyword_search', 'channel', 'sem_account', 'created_month', 'created_week', 'created_weedkay', 'created_day', 'created_hour'];
        foreach ($fields as $field) {
            if (!in_array($field, $datas)) {
                return ['keyword', 'created_day'];
            }
        }
        return $fields;
    }
}
