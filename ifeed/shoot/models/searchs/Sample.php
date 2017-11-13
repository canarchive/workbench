<?php

namespace ifeed\shoot\models\searchs;

use yii\data\ActiveDataProvider;
use ifeed\shoot\models\Sample as SampleModel;

class Sample extends SampleModel
{
    public function rules()
    {
        return [
            [['site_code', 'sort'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'site_code', 'type' => 'common'],
            ['field' => 'sort', 'type' => 'common'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            //$this->_sKeyParam(['field' => 'site_code']),
            //$this->_sPointParam(['field' => 'sort', 'table' => 'shoot-sort']),
        ];
        return ['list' => $list];
	}
}
