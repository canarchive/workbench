<?php

namespace baseapp\shop\models;

trait GoodsSkuAttributeTrait
{
	public $goods_attributes;
	public $goods_sku;

	public function getAttributeItems($type)
	{
		$cInfo = $this->categoryInfo;
		return is_object($cInfo) ? $cInfo->getAttributeItems($type) : [];
	}

	public function getGoodsSkuInfos()
	{
		$infos = $this->getPointModel('shop-goods-sku')->getInfos(['where' => ['goods_id' => $this->id], 'orderBy' => ['orderlist' => SORT_DESC]]);
		return $infos;
	}

	public function getGoodsAttributeInfos()
	{
		$infos = $this->getPointModel('shop-goods-attribute')->getInfos(['where' => ['goods_id' => $this->id], 'indexBy' => 'attribute_id']);
		return $infos;
	}

	public function updateGoodsAttributes()
	{
		$aItems = $this->getAttributeItems(false);
		$aIds = array_keys($aItems);
		$this->getPointModel('shop-goods-attribute')->updateAll(['value' => ''], ['goods_id' => $this->id]);
		$gaInfos = $this->goodsAttributeInfos;

		$goodsAttributes = $this->goods_attributes;
		print_r($goodsAttributes);
		$otherValues = [];
		if (isset($goodsAttributes['other'])) {
			$otherValues = $goodsAttributes['other'];
			unset($goodsAttributes['other']);
		}

		foreach ($goodsAttributes as $aId => $gaValue) {
			if (!in_array($aId, $aIds)) {
				unset($goodsAttributes[$aId]);
				continue;
			}
			$item = $aItems[$aId];
			$cValue = $item->dealValue($gaValue, $otherValues);

			$gaInfo = isset($gaInfos[$aId]) ? $gaInfos[$aId] : [];
			if (empty($gaInfo)) {
				$gaModel = $this->getPointModel('shop-goods-attribute', true);
				$gaModel->goods_id = $this->id;
				$gaModel->attribute_id = $aId;
				$gaModel->value = $cValue;
				$gaModel->insert(false);
				continue;
			} else {
				$gaInfo['value'] = $cValue;
				$r = $gaInfo->update(false, ['value']);
			}
		}

		print_r($_POST);
		//print_r($gaInfos);
		//print_r($goodsAttributes);

		//print_r($this);exit();
		exit();
	}

	public function updateGoodsSkus()
	{
	}
}
