<?php

namespace baseapp\common\models;

trait PositionTrait
{
	public $picture;
	public $picture_mobile;
	public $picture_ext;

    public static function tableName()
    {
        return '{{%position}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['sort', 'description', 'url', 'name_ext', 'picture', 'picture_mobile', 'picture_ext'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'name_ext' => '名称-预留',
			'sort' => '类型',
			'url' => 'URL',
			'orderlist' => '排序',
			'picture' => '图片',
			'picture_mobile' => '图片-小图',
			'picture_ext' => '图片-预留',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'description' => '描述',
            'status' => '状态',
        ];
    }

	public function getSortInfos()
	{
		$datas = [
		];
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['picture', 'picture_mobile', 'picture_ext'];
		$this->_updateSingleAttachment('position', $fields);

		return true;
	}	

	public function getPictureUrl()
	{
		return $this->_getThumb('position', 'picture');
	}

	public function getPositionUrl()
	{
		if (empty($this->url)) {
			return 'javascript: void(0);';
		}
		return $this->url;
	}

	public function formatImgtag($field = null, $info = [])
	{
		return $this->getAttachmentImgtag('position', 'picture');
	}

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'name_ext' => ['type' => 'common'],
			'sort' => ['type' => 'key'],
            'picture' => ['type' => 'imgtag'],
            'url' => ['type' => 'atag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'description' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
			'status' => ['type' => 'key'],
        ];
    }
}
