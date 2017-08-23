<?php

namespace subsite\models\searchs;

use Yii;
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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'city_code' => ['type' => 'common'],
            //'house_id' => ['type' => 'point', 'table' => 'merchant'],
            'service_id' => ['type' => 'point', 'table' => 'service', 'pointField' => 'id'],
            'mobile' => ['type' => 'common'],
            'num_merchant' => ['type' => 'common'],
            'note' => ['type' => 'common', 'listNo' => true],

            //'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'sendmsg_at' => ['type' => 'condition', 'formatView' => 'raw'],
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
        $url = $menu['url'] . "?sort=dispatch&id={$this->id}";
        $str = "<a onclick='sendMsg(\"{$url}\")'>{$menu['name']}</a>";
        return $str;
    }
}
