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
            'EN' => '欧式',
            'CN' => '中式',
            'rural' => '田园',
            'mediterranean' => '地中海',
            'US' => '美式',
            'mashup' => '混搭',
            'family' => '宜家',
            'simple-EN' => '简欧',
            'new-classics' => '新古典',
            'SE-asia' => '东南亚',
        ];

        return $datas;
    }

    public function getAreaInfos()
    {
        $datas = [
			'30' => '30㎡',
			'40' => '40㎡',
			'50' => '50㎡',
			'60' => '60㎡',
			'70' => '70㎡',
			'80' => '80㎡',
			'90' => '90㎡',
			'100' => '100㎡',
			'110' => '110㎡',
			'120' => '120㎡',
			'130' => '130㎡以上',
        
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
