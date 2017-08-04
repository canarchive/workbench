<?php

namespace common\models;

use Yii;
use common\helpers\Tree;

trait TraitSearchParam
{
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
            return $data;
        }

        $params = [];
        if (isset($data['where'])) {
            $params['where'] = $data['where'];
        }
        if (isset($data['indexName'])) {
            $params['indexName'] = $data['indexName'];
        }
        $data['infos'] = isset($data['infos']) ? $data['infos'] : $this->getPointInfos($data['table'], $params);
        return $data;
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
        return $data;
    }

    protected function _sFormatBase($data, $type)
    {
        $field = $data['field'];
        $data['value'] = $this->$field;
        $data['type'] = isset($data['type']) ? $data['type'] : $type;
        $data['name'] = isset($data['name']) ? $data['name'] : $this->getAttributeLabel($data['field']);
        return $data;
    }
}
