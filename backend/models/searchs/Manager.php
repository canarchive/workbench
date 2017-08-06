<?php

namespace backend\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Manager as ManagerModel;

/**
 * ManagerSearch represents the model behind the search form about `backend\models\Manager`.
 */
class Manager extends ManagerModel
{
    public function scenarios()
    {
        return ['default' => ['name', 'created_at_start', 'created_at_end', 'status']];
    }
    public function rules()
    {
        return [
            [['name', 'created_at_start', 'created_at_end', 'status'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'name', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'name']),
            $this->_sStartParam(),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
