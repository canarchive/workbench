<?php

namespace baseapp\shop\models;

trait GoodsTrait
{
	public $picture;
	public $slide;
	public $goods_attribute;
	public $goods_sku;

    public static function tableName()
    {
        return '{{%goods}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'category_code', 'price'], 'required'],
            [['orderlist', 'status', 'price_market'], 'default', 'value' => 0],
            [['price', 'price_market'], 'double'],
			[['goods_attribute', 'goods_sku', 'brief', 'slide', 'picture', 'keyword', 'description', 'content'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sort' => '分类',
            'brand_id' => '品牌ID',
            'name' => '产品名称',
			'brief' => '摘要',
			'slide' => '轮播图',
            'period' => '期数',
            'orderlist' => '排序',
            'price_market' => '市场价格',
            'price_range' => '价格区间',
            'price' => '本站价格',
            'inventory' => '商品库存',
            'keyword' => '商品关键词',
            'description' => '商品描述',
            'content' => '商品详情',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        return true;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$this->_updateMulElem();

		return true;
	}

	protected function _updateMulElem()
	{
		$this->_updateMulAttachment('goods', 'picture');
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '备货中',
			'1' => '正常',
			'99' => '手动下架',
		];	
		return $datas;
	}	

	/**
	 * 格式化商品信息，获取图片的url地址等
	 */
	protected function _formatInfo($info)
	{
		$condition = [
			'info_table' => 'goods',
			'info_field' => 'picture',
			'info_id' => $info->id,
			'in_use' => 1,
		];
		$infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
		$pictureInfos = [];
		foreach ($infos as $attachment) {
			$url = $attachment->getUrl();
			$pictureInfos[] = [
				'url' => $url,
				'name' => $attachment['filename'],
				'description' => $attachment['description'],
			];
		}		
		$info->picture = $pictureInfos;
		//print_r($info);

		return $info;
	}

	public function getThumbUrl()
	{
		return $this->_getThumb('goods', 'slide');
	}

	public function getCategoryInfo()
	{
		$info = $this->getPointModel('shop-category')->getInfo($this->category_code, 'code');
		return $info;
	}

	public function getAttributeItems($type)
	{
		$cInfo = $this->categoryInfo;
		return is_object($cInfo) ? $cInfo->getAttributeItems($type) : [];
	}

	public function getSkuItems()
	{
		$infos = $this->getPointModel('shop-goods-sku')->getInfos(['where' => ['goods_id' => $this->id], 'orderBy' => ['oderlist' => SORT_DESC]]);
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
		$gaInfos = $this->goodsAttributeInfos;
		$gaIds = array_keys($gaInfos);

		$goodsAttributes = $this->goods_attribute;

		foreach ($goodsAttributes as $aId => & $gaValue) {
			if (!in_array($aId, $aIds)) {
				continue;
			}
			$item = $aItems[$aId];
			$cValue = $item->dealValue($gaValue);

			$gaInfo = isset($gaInfos[$aId]) ? $gaInfos[$aId] : [];
			if (empty($gaInfo)) {
				$gaModel = $this->getPointModel('shop-goods-attribute', true);
				$gaModel->goods_id = $this->id;
				$gaModel->attribute_id = $aId;
				$gaModel->value = $cValue;
				$gaModel->insert(false);
				print_r($gaModel);
				continue;
			}

			if ($gaInfo['value'] != $cValue) {
				$gaInfo['value'] = $cValue;
				$gaInfo->update(false, ['value']);
			}
		}

		foreach ($gaInfos as $gaId => $gaInfo) {
			if (!in_array($gaId, $aIds)) {
				$gaInfo->delete(false);
			}
		}

		//print_r($gaInfos);
		//print_r($goodsAttributes);

		//print_r($this);exit();
		exit();
	}

	public function updateGoodsSkus()
	{
	}
}
