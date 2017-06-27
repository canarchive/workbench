<?php

namespace baseapp\shop\models;

trait GoodsTrait
{
	public $picture;

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
            [['name', 'sort', 'price'], 'required'],
            [['orderlist', 'status', 'price_market'], 'default', 'value' => 0],
            [['price', 'price_market'], 'double'],
			[['brief', 'picture', 'keyword', 'description', 'content'], 'safe'],
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
            'period' => '期数',
            'orderlist' => '排序',
            'price_market' => '市场价格',
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

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$this->_updateMulAttachment('goods', 'picture');

		return true;
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

	public function getInfo($id)
	{
		$info = self::findOne($id);
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);

		return $info;
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

    protected function getThumb()
    {
		$thumbUrl = $this->getAttachmentUrl($this->attachmentWhere());
        if (empty($thumbUrl)) {
		    $thumbUrl = $this->getAttachmentUrl($this->attachmentWhere(false));
        }
        return $thumbUrl;
    }

    public function attachmentWhere($isMaster = true)
    {
        $condition = [ 
            'info_table' => 'sample',
            'info_field' => 'picture',
            'info_id' => $this->id,
            'in_use' => 1,
        ];  
        if ($isMaster) {
            $condition['is_master'] = 1;
        }
        return $condition;
    }
}