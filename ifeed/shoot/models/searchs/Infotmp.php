<?php

namespace ifeed\shoot\models\searchs;

use ifeed\shoot\models\Infotmp AS InfotmpModel;

class Infotmp extends InfotmpModel
{
    public function rules()
    {
        return [
            [['source_code', 'category_code'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'source_code', 'type' => 'common'],
            ['field' => 'category_code', 'type' => 'common'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'source_code']),
            $this->_sPointParam(['field' => 'category_code', 'table' => 'shoot-category', 'indexName' => 'code']),
        ];
        return ['list' => $list];
	}
}
