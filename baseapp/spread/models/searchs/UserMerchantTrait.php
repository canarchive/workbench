<?php

namespace baseapp\spread\models\searchs;

use Yii;
use yii\data\ActiveDataProvider;

Trait UserMerchantTrait
{
    public function rules()
    {
        return [
            [['created_at_start', 'created_at_end', 'status', 'mobile', 'merchant_id', 'service_id'], 'safe'],
        ];
    }

    protected function _searchElems()
    {
        return [
            ['field' => 'mobile', 'type' => 'common', 'sort' => 'like'],
            ['field' => 'service_id', 'type' => 'common'],
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'created_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            $this->_sPointParam(['field' => 'merchant_id', 'table' => 'merchant', 'where' => ['status_ext' => [1]]]),
            $this->_sPointParam(['field' => 'service_id', 'table' => 'service', 'where' => ['status_ext' => [1]]]),
            $this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sTextParam(['field' => 'mobile']),
            $this->_sStartParam(),
        ]
        ];
        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }

    protected function _getTemplateFields()
    {
        $operation = [
            'formatView' => 'raw',
            'type' => 'operation',
            'qParams' => [
                'id' => ['field' => 'dispatch_id', 'value' => null],
            ],
            'menuCodes' => [
                ['code' => 'subsite_decoration_dispatch_update'],
            ]
        ];
        return [
            'id' => ['type' => 'common'],
            'mobile' => ['type' => 'inline', 'method' => 'maskMobile'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'service_id' => ['type' => 'point', 'table' => 'service'],
            'created_at' => ['type' => 'timestamp'],
            'view_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'sendmsg_at' => ['type' => 'condition', 'formatView' => 'raw'],
            'status' => ['type' => 'key'],
            'operation' => $operation,
        ];
    }

    public function _conditionElem($field, $view)
    {
        if ($field != 'sendmsg_at') {
            return '';
        }

        if ($this->$field > 0) {
            return $this->formatTimestamp($this->$field);
        }
        if ((Yii::$app->params['currentTime'] - $this->created_at) >= 3600) {
            return '超过1小时';
        }

        $code = 'subsite_decoration_sendmsg_send';
        $menu = $view->getMenuData($code);
        
        if (empty($menu)) {
            return '';
        }
        $url = $menu['url'] . "?sort=merchant&id={$this->id}";
        $str = "<a onclick='sendMsg(\"{$url}\")'>{$menu['name']}</a>";
        return $str;
    }
}
