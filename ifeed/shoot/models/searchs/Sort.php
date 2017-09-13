<?php

namespace ifeed\shoot\models\searchs;

use ifeed\shoot\models\Sort AS SortModel;

class Sort extends SortModel
{
    public function rules()
    {
        return [
            [['site_code'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'site_code', 'type' => 'common'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'site_code']),
        ];
        return ['list' => $list];
	}
}
