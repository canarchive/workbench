<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

trait TraitSearch
{
    public $created_at_start;
    public $created_at_end;

    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query, 
            'sort' => $this->_defaultOrder(),
            'pagination' => $this->_defaultPagination(),
        ]);
        if (!($this->load($params, '') || !$this->validate())) {
            return $dataProvider;
        }

        $elems = $this->_searchElems();
        if (empty($elems)) {
            return $dataProvider;
        }

        foreach ($elems as $elem) {
            $type = ucfirst($elem['type']);
            $method = "_search{$type}";
            $this->$method($query, $elem);
        }

        return $dataProvider;
    }
    
    protected function _searchWrapComma(& $query, $elem)
    {
        $field = $elem['field'];
        $values  = (array) $this->$field;
        foreach ($values as $value) {
			if (empty($value)) {
				continue;
			}
            $value = ',' . $value . ',';
            $query->orFilterWhere(['like', $field, $value]);
        }
    }

    protected function _searchCommon(& $query, $elem)
    {
        $field = $elem['field'];
        $value = $this->$field;
        if (is_null($value) || $value == 'all-search' || in_array('all-search', (array) $value)) {
            return ;
        }
        $sort = isset($elem['sort']) ? $elem['sort'] : '';
        switch ($sort) {
        case 'like':
            $query->andFilterWhere(['like', $field, $value]);
            break;
        default:
		    $query->andWhere([$field => $value]);
        }
    }

    protected function _searchRangeTime(& $query, $elem)
    {
        $field = $elem['field'];
        $startAttr = $field . '_start';
        $endAttr = $field . '_end';
        $timestamp = isset($timestamp) ? $elem['timestamp'] : true;
        $startTime = $timestamp ? strtotime($this->$startAttr) : $this->$startAttr;
        $query->andFilterWhere(['>=', $field, $startTime]);

        if ($this->$endAttr > 0) {
            $endTime = $timestamp ? strtotime($this->$endAttr) : $this->$endAttr;
            $query->andFilterWhere(['<=', $field, $endTime]);
        }
    }

    public function getSearchDatas()
    {
        $params = $this->_searchParams() ? $this->_searchParams() : Yii::$app->request->getQueryParams();
        if ($this->load($params, '') && !$this->validate()) {
            return [];
        }

        $datas = $this->_searchDatas();
        if (empty($datas)) {
            return [];
        }
        return $datas;
    }

    public function _sPointParam($data)
    {
        $data = $this->_sFormatBase($data, 'checkbox');
        if (isset($data['infos'])) {
            return $this->_prefixInfos($data);
        }

        $params = [];
        if (isset($data['where'])) {
            $params['where'] = $data['where'];
        }
        if (isset($data['indexName'])) {
            $params['indexName'] = $data['indexName'];
        }
        $data['infos'] = isset($data['infos']) ? $data['infos'] : $this->getPointInfos($data['table'], $params);
        return $this->_prefixInfos($data);
    }

    public function _sStartParam($data = [])
    {
        $name = isset($data['name']) ? $data['name'] : '日期时间';
        $field = isset($data['field']) ? $data['field'] : 'created_at_start';
        $format = isset($data['format']) ? $data['format'] : 'YYYYMMDD';

        $result = [
            'name' => $name,
            'field' => $field,
            'type' => 'daytime',
            'format' => $format,
        ];
        if (!isset($data['noEnd'])) {
            $fieldEnd = isset($data['field_end']) ? $data['field_end'] : 'created_at_end';
            $formatEnd = isset($data['format_end']) ? $data['format_end'] : 'YYYYMMDD';
            $result['end'] = [
                'field' => $fieldEnd,
                'type' => 'daytime',
                'format' => $formatEnd,
            ];
        }
        return $result;
    }

    public function _sHiddenParam($data)
    {
        return $this->_sFormatBase($data, 'hidden');
    }

    public function _sTextParam($data)
    {
        return $this->_sFormatBase($data, 'text');
    }

    public function _sKeyParam($data)
    {
        $data = $this->_sFormatBase($data, 'checkbox');
        $data['infos'] = isset($data['infos']) ? $data['infos'] : $this->getKeyInfos($data['field']);
        return $this->_prefixInfos($data);
    }

    protected function _sFormatBase($data, $type)
    {
        $field = $data['field'];
        $data['value'] = $this->$field;
        $data['type'] = isset($data['type']) ? $data['type'] : $type;
        $data['name'] = isset($data['name']) ? $data['name'] : $this->getAttributeLabel($data['field']);
        return $data;
    }

    protected function _prefixInfos($data)
    {
        if (count($data['infos']) <= 1) {
            return [];
        }
        $data['infos'] = ['all-search' => '全部'] + $data['infos'];
        return $data;
    }

    protected function _defaultOrder()
    {
        return [
            'defaultOrder' => [
                'created_at' => SORT_DESC,            
            ]
        ];
    }

    protected function _defaultPagination()
    {
        return [];
    }
}
