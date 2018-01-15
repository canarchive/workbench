<?php

namespace gallerycms\eale\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Adpicture extends GallerycmsModel
{
    use EaleTrait;
    
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
            [['name', 'thumb'], 'required'],
			[['orderlist'], 'integer'],
			[['orderlist', 'status'], 'default', 'value' => '0'],
			[['url', 'name', 'picture', 'name_ext', 'site_code', 'description'], 'safe'],
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
		$this->_updateSingleAttachment('sample', $fields);
		$this->_updateMulAttachment('sample', 'picture');

		return true;
	}	

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
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

	public function getInfos($where)
	{
        $where = array_merge(['status' => 1], $where);
		$infos = $this->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			$info['picture'] = $info->getAttachmentUrl($info['picture']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
