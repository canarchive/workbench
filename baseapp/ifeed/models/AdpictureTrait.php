<?php

namespace baseapp\ifeed\models;

use yii\helpers\ArrayHelper;

Trait AdpictureTrait
{
	public $thumb;
	public $picture;

    public static function tableName()
    {
        return '{{%adpicture}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['orderlist'], 'integer'],
			[['orderlist', 'status'], 'default', 'value' => '0'],
			[['url', 'name', 'thumb', 'picture', 'name_ext', 'site_code', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'site_code' => '所属站点',
            'page' => '所在页面',
            'url' => '链接',
            'thumb' => '广告图',
            'picture' => '配图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    protected function getPositionInfos()
    {
		$datas = [
			'announce' => '首页宣传(6图)',
			'indexthree' => '首页三图广告',
            'fivepicture' => '5图广告',
			'slide' => '幻灯',
		];
		return $datas;
    }

    public function getPositionPageInfos()
    {
        $datas = [
            'slide' => 'all',
            'indexthree' => ['site-index'],
            'announce' => ['site-index'],
            'fivepicture' => ['aboutus-desc', 'service-list', 'info-list', 'sample-campus', 'info-train'],
        ];
        return $datas;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('adpicture', $fields);
		$this->_updateMulAttachment('adpicture', 'picture');

		return true;
	}	

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);

        $condition = [ 
            'info_table' => 'sample',
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

		return $info;
	}

    public function beforeDelete()
    {
        if (in_array($this->position, ['announce', 'fivepicture', 'indexthree'])) {
            return false;
        }
        return true;
    }

    public function formatImgtag($field = null, $info = []) 
    {   
        return $this->getAttachmentImgtag('adpicture', $field);
    } 

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'site_code' => ['type' => 'key'],
            'page' => ['type' => 'key'],
            'position' => ['type' => 'key'],
            'url' => ['type' => 'common', 'method' => 'atag'],
            'thumb' => ['type' => 'imgtag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
            'description' => ['type' => 'common', 'listNo' => true],
        ];
    }

    public function getThumbUrl()
    {   
        return $this->_getThumb('adpicture', 'thumb');
    } 

	/*public function getInfos($where)
	{
        $where = array_merge(['status' => 1], $where);
		$infos = $this->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			$info['picture'] = $info->getAttachmentUrl($info['picture']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}*/
}
