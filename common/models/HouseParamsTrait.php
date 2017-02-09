<?php

namespace common\models;

use gallerycms\merchant\models\Merchant;
use gallerycms\merchant\models\Owner;

trait HouseParamsTrait
{
    public function getHouseTypeInfos()
    {
        $datas = [
            'one' => '一居',
            'two' => '二居',
            'three' => '三居',
            'four' => '四居',
            'solo' => '小户型',
            'lodging' => '公寓',
            'double' => '复式',
            'villa' => '别墅',
        ];

        return $datas;
    }

	public function _decorationStatusInfos()
	{
		$datas = [
			'' => '',
			'start' => '开始',
			'electric' => '水电',
			'cement' => '泥木',
			'paint' => '油漆',
			'finish' => '竣工',
		];
		return $datas;
	}	

    public function getStyleInfos()
    {
        $datas = [
            'simple' => '简约',
            'modern' => '现代',
            'en' => '欧式',
            'cn' => '中式',
            'rural' => '田园',
            'mediterranean' => '地中海',
            'us' => '美式',
            'mashup' => '混搭',
            'family' => '宜家',
            'simpleen' => '简欧',
            'newclassics' => '新古典',
            'seasia' => '东南亚',
        ];

        return $datas;
    }

    public function getAreaInfos()
    {
        $datas = [
			'one' => '60㎡以下',
			'two' => '61-80㎡',
			'three' => '81-100㎡',
			'four' => '101-120㎡',
			'five' => '121-160㎡',
			'six' => '160㎡以上',
        ];
        return $datas;
    }

    public function getColorInfos()
    {
        $datas = [
            'white' => '白色',
            'beige' => '米色',
            'yellow' => '黄色',
            'orange' => '橙色',
            'red' => '红色',
            'pink' => '粉色',
            'green' => '绿色',
            'blue' => '蓝色',
            'purple' => '紫色',
            'black' => '黑色',
            'grey' => '灰色',
            'wood' => '原木色',
            'colour' => '彩色',
            'tan' => '褐色',
        ];
        return $datas;
    }

	public function getBudgetInfos()
	{
		$datas = [
			'one' => '3万以下',
			'two' => '3-5万',
			'three' => '5-8万',
			'four' => '8-12万',
			'five' => '12-18万',
			'six' => '18-30万',
			'seven' => '30-100万',
			'eight' => '100万以上',
		];

		return $datas;
	}	

    public function getDecorationSortInfos()
    {
        $datas = [
            'common' => '普通住宅',
            'solo' => '小户型',
            'villa' => '别墅',
            'part' => '局部装修',
            'ktv' => 'ktv',
            'store' => '商铺',
            'dining' => '餐厅/酒楼',
            'beauty' => '美容/美发',
            'recreation' => '娱乐场所',
            'hotel' => '酒店',
            'showroom' => '展厅',
            'office' => '办公室',
            'workshop' => '厂房',
            'school' => '学校',
            'hospital' => '医院',
            'specailty' => '专卖店',
            'bar' => '酒吧',
            'super' => '超市/商场',
            'other' => '其他',
            'plat' => '平层',
            'loft' => '阁楼',
            'selfbuild' => '自建房',
            'double' => '复式',
        ];
        return $datas;
    }

	public function getMerchantInfo()
	{
		if (empty($this->merchant_id)) {
			return [];
		}

		$model = new Merchant();
		$info = $model->getInfo(['id' => $this->merchant_id]);
		return $info;
	}

	public function getOwnerInfo()
	{
		if (!isset($this->owner_id) || empty($this->owner_id)) {
			return [];
		}

		$model = new Owner();
		$info = $model->getInfo(['id' => $this->owner_id]);
		return $info;
	}
}
