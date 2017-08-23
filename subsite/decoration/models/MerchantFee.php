<?php

namespace subsite\decoration\models;

use baseapp\merchant\models\Merchant;

class MerchantFee extends ModelBase
{
    public static function tableName()
    {
        return '{{%merchant_fee}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['merchant_id', 'merchant_id'], 'required'],
            [['status', 'fee', 'num'], 'default', 'value' => 0],
            [['day_start', 'day_end'], 'filter', 'filter' => function($value) {
                return strtotime($value);
            }],
            [['merchant_sort', 'day_fee', 'num', 'note', 'record',], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'merchant_sort' => '合作类型',
            'day_fee' => '付费日期',
            'num' => '信息数',
            'num_current' => '派发信息数',
            'num_back' => '退单数',
            'day_start' => '信息派发起始时间',
            'day_end' => '信息派发截止时间',
            'note' => '备注',
            'record' => '补充说明',
            'created_at' => '注册时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getMerchantSortInfos()
    {
        $merchant = new Merchant();
        return $merchant->statusInfos;
    }

    public function _getNum($type)
    {
        $sort = $this->merchant_sort;
        $merchant = ['=', 'merchant_id', $this->merchant_id];
        $start = ['>=', 'created_at', $this->day_start];
        $end = $this->day_end > 0 ? ['<=', 'created_at', $this->day_end]: [];

        if ($sort == 'cpa') {
            if ($type != 'valid') {
                return 0;
            }
            $model = new User();
            $where = [
                'and',
                $merchant,
                $start,
                $end,
            ];
            return $model->find()->where($where)->count();
        }

        $model = new UserMerchant();
        $status = $type == 'valid' ? ['=', 'status', ''] : ['!=', 'status', ''];
        $where = [
            'and', 
            $status,
            $merchant,
            $start,
            $end,
        ];

        return $model->find()->where($where)->count();
    }

    public function getCurrentUrl($type, $menus)
    {
        $sort = $this->merchant_sort == 'cps' ? 'cps' : 'cpa';
        $method = "_{$sort}Url";
        return $this->$method($type, $menus);
    }

    public function _cpsUrl($type, $menus)
    {
        $key = 'subsite_decoration_user-merchant_listinfo';
        $key1 = 'subsite_decoration_user-merchant_listout';
		$menu = isset($menus[$key1]) ? $menus[$key1] : (isset($menus[$key]) ? $menus[$key] : '');
        $num = $this->_getNum($type);
        if (empty($menu) || empty($num)) {
            return $num;
        }
        $status = $type == 'valid' ? '' : 'back';
        $start = $this->formatTimestamp($this->day_start);
        $end = empty($this->day_end) ? $this->formatTimestamp(time()) : $this->formatTimestamp($this->day_end);
        $opeStr = "<a href='{$menu['url']}?merchant_id={$this->merchant_id}&created_at_start={$start}&created_at_end={$end}&status={$status}'>{$num}</a>";
        return $opeStr;
    }

    public function _cpaUrl($type, $menus)
    {
        $key = 'subsite_decoration_user_listinfo';
        $key1 = 'subsite_decoration_user_listout';
		$menu = isset($menus[$key1]) ? $menus[$key1] : (isset($menus[$key]) ? $menus[$key] : '');
        $num = $this->_getNum($type);
        if (empty($menu) || empty($num)) {
            return $num;
        }
        $start = $this->formatTimestamp($this->day_start);
        $end = empty($this->day_end) ? $this->formatTimestamp(time()) : $this->formatTimestamp($this->day_end);
        $opeStr = "<a href='{$menu['url']}?merchant_id={$this->merchant_id}&created_at_start={$start}&created_at_end={$end}'>{$num}</a>";
        return $opeStr;
    }

    public function getStatusInfos()
    {
        return [
            '0' => '未付费-未完成',
            '1' => '已付费-未完成',
            '2' => '未付费-已完成',
            '3' => '已付费-已完成',
        ];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'day_fee' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'merchant_sort' => ['type' => 'key'],
            'num' => ['type' => 'common'],
            'num_current' => ['type' => 'inline', 'method' => 'getCurrentUrl'],
            'num_back' => ['type' => 'inline', 'method' => 'getCurrentUrl'],
            'day_start' => ['type' => 'timestamp'],
            'day_end' => ['type' => 'timestamp'],
            'created_at' => ['type' => 'timestamp', 'listNo' => true],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'note' => ['type' => 'common', 'listNo' => true],
            'record' => ['type' => 'common', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
