<?php

namespace baseapp\statistic\models\searchs;

use yii\data\ActiveDataProvider;
use baseapp\statistic\models\ServiceDispatch as ServiceDispatchModel;

class ServiceDispatch extends ServiceDispatchModel
{

    public function rules()
    {
        return [
            [['service_id', 'field_hit'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = self::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

        $this->fields = $fields = $this->_getCheckedFields();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= $this->getFieldsStr('dispatch');
        $query->select($fieldsStr);
        $query->groupBy($fields);
		if (in_array('created_day', $this->fields)) {
			$query->orderBy(['created_day' => SORT_DESC]);
		}

		$serviceIds = empty($this->service_id) ? null : $this->service_id;
        $query->andFilterWhere([
            'service_id' => $serviceIds,
        ]);

        return $dataProvider;        
    }    

    public function getFieldHitInfos()
    {
        return [
            'fields' => ['service_id', 'created_month', 'created_week', 'created_day'],
            'default' => 'created_day',
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
        ];
        $form = [
        [
            $this->_sStartParam(),
            $this->_sHiddenParam(['field' => 'field_hit']),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
