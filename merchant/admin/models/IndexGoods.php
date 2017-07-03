<?php

namespace shop\models;

use yii\helpers\ArrayHelper;
use common\models\ShopModel;

class IndexGoods extends ShopModel
{
    public static function tableName()
    {
        return '{{%index_goods}}';
    }

    public function rules()
    {
        return [
            [['name', 'category_id', 'price', 'thumb'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['price', 'market_price'], 'double'],
			[['picture', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '商品ID',
            'category_id' => '分类ID',
            'name' => '产品名称',
            'thumb' => '商品主图',
            'orderlist' => '排序',
            'market_price' => '市场价格',
            'price' => '本站价格',
            'description' => '商品描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function afterSave($insert, $changedAttributes)
	{
		$attachment = new Attachment();
		$fields = ['thumb', 'picture'];
		$this->_updateSingleAttachment($attachment, 'goods', $fields);

        parent::afterSave($insert, $changedAttributes);
		return true;
	}

	public function getIndexSortInfos()
	{
		$datas = ArrayHelper::map(IndexSort::find()->all(), 'id', 'name');
		return $datas;
	}
}
