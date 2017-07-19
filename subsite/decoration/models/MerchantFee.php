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
            [['status', 'fee', 'num', 'num_real', 'num_back'], 'default', 'value' => 0],
            [['day_start', 'day_end'], 'filter', 'filter' => function($value) {
                return strtotime($value);
            }],
            [['merchant_sort', 'day_fee', 'num', 'num_real', 'num_back', 'num_back_current', 'note', 'record',], 'safe'],
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
            'num_real' => '实际信息数',
            'num_current' => '实时信息数',
            'num_back' => '退单数',
            'num_back_current' => '实时退单数',
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

    public function _numCurrent()
    {
        if ($this->merchant_sort == 2) {
            return $this->num_real;
        }

        return $this->_getNum('valid');
    }

    public function _numBackCurrent()
    {
        if ($this->merchant_sort == 2) {
            return $this->num_real;
        }

        return $this->_getNum('back');
    }

    public function _getNum($sort)
    {
        $model = new UserMerchant();
        $status = $sort == 'valid' ? ['=', 'status', ''] : ['!=', 'status', ''];
        $end = $this->day_end > 0 ? ['<=', 'created_at', $this->day_end]: [];
        $where = [
            'and', 
            $status,
            ['=', 'merchant_id', $this->merchant_id], 
            ['>=', 'created_at', $this->day_start],
            $end,
        ];

        return $model->find()->where($where)->count();
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

    public function getCurrentUrl($type, $menus)
    {
            $key = 'subsite_decoration_user-merchant_listinfo';
            $key1 = 'subsite_decoration_user-merchant_listout';
			$menu = isset($menus[$key1]) ? $menus[$key1] : (isset($menus[$key]) ? $menus[$key] : '');
            if (empty($menu)) {
                return $this->num;
            }
            $start = $this->formatTimestamp($this->day_start);
            $end = empty($this->day_end) ? $this->formatTimestamp(time()) : $this->formatTimestamp($this->day_end);
            $opeStr = "<a href='{$menu['url']}?merchant_id={$this->merchant_id}&created_at_start={$start}&created_at_end={$end}&status='>{$this->num}</a>";
            return $opeStr;
    }
}
