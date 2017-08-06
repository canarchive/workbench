<?php

namespace backend\models\searchs;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use backend\models\Managerlog as ManagerlogModel;

class Managerlog extends ManagerlogModel
{
    public $created_at_start;
    public $created_at_end;

    public function rules()
    {
        return [
            [['manager_id', 'created_at_start', 'created_at_end'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'manager_id', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $managerInfos = ArrayHelper::map(\backend\models\Manager::find()->all(), 'id', 'name');
        $list = [
            $this->_sPointParam(['field' => 'manager_id', 'infos' => $managerInfos]),
        ];
        $form = [
        [
            $this->_sStartParam(),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
