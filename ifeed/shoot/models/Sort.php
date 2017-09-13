<?php

namespace ifeed\shoot\models;

use baseapp\common\models\SortTrait;

class Sort extends BaseModel
{
	public $thumb;

    public static function tableName()
    {
        return '{{%sort}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['status', 'orderlist'], 'default', 'value' => '0'],
			[['site_code', 'thumb', 'code', 'brief', 'meta_title', 'meta_keyword', 'meta_description', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'site_code' => '所属站点',
            'name' => '名称',
            'code' => '代码',
			'thumb' => '缩略图',
            'brief' => '摘要',
            'meta_title' => 'SEO标题',
            'meta_keyword' => 'SEO关键字',
            'meta_description' => 'SEO描述',
            'description' => '描述',
            'status' => '是否显示',
        ];
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('sort', $fields);

		return true;
	}	

	public function getThumbUrl()
	{
		return $this->_getThumb('sort', 'thumb');
	}

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
			'site_code' => ['type' => 'key'],
            'name' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'thumb' => ['type' => 'imgtag'],
            'brief' => ['type' => 'atag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'description' => ['type' => 'common', 'listNo' => true],
            'meta_title' => ['type' => 'common', 'listNo' => true],
            'meta_keyword' => ['type' => 'common', 'listNo' => true],
            'meta_description' => ['type' => 'common', 'listNo' => true],
			'status' => ['type' => 'key'],
        ];
    }

	public function getInfosBySite()
	{
        $infos = $this->getInfos(['orderBy' => ['orderlist' => SORT_DESC]]);
        $datas = [];
        foreach ($infos as $info) {
            $datas[$info['site_code']][$info['code']] = $info;
        }
		return $datas;
	}
}
