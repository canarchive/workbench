<?php

namespace subsite\models\searchs;

use yii\data\ActiveDataProvider;

Trait DispatchTrait
{
    public function rules()
    {
        return [
            [['mobile', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        return [];
    }
}
