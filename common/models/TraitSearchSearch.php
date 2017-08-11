<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

trait TraitSearchSearch
{
    public $created_at_start;
    public $created_at_end;

    public function search($params)
    {
        $query = self::find();
        $this->_searchPre($query);
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

    protected function _searchPre(& $query)
    {
        return ;
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
		case 'orLike':
			$query->orFilterWhere(['like', $field, $value]);
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
        $query->andFilterWhere(['>=', $field, (int) $startTime]);

        if ($this->$endAttr > 0) {
            $endTime = $timestamp ? strtotime($this->$endAttr) : $this->$endAttr;
            $query->andFilterWhere(['<=', $field, (int) $endTime]);
        }
    }

    protected function _defaultOrder()
    {
        return [
            'defaultOrder' => [
                'id' => SORT_DESC,            
            ]
        ];
    }

    protected function _defaultPagination()
    {
        return [];
    }

	protected function _searchElems()
	{
		return [];
	}
}
