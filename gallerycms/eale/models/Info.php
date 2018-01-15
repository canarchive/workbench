<?php

namespace gallerycms\eale\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Info extends GallerycmsModel
{
    use EaleTrait;
	public $picture;
    
    public static function tableName()
    {
        return '{{%info}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'orderlist', 'status'], 'default', 'value' => '0'],
            [['content'], 'default', 'value' => ''],
			[['sort', 'title', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'title' => '副标题',
            'sort' => '分类',
            'thumb' => '缩略图(建议尺寸574 X 329）',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'content' => '内容',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getSortInfos()
	{
		$datas = [
			'eale' => '摄影机构新闻',
			'ieale' => '美学馆新闻',
			'iealecn' => '摄影培训机构新闻',
            'train' => '摄影机构招生信息',
		];
		return $datas;
	}	

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $newContent = preg_replace_callback('/<img .*>/Us', function ($matches) {
                $str = $matches[0];
                $str = preg_replace('/alt=[\'|"].*[\'|"]/Us', 'alt="{{PINFONAME}}"', $str);
                if (strpos($str, 'alt') === false) {
                    $str = str_replace('<img ', '<img alt="{{PINFONAME}}" ', $str);
                }
                return $str;
            },
            $this->content);
            $this->content = str_replace('{{PINFONAME}}', $this->name, $newContent);
            return true;
        }
        return false;
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('info', $fields);
		$this->_updateMulAttachment('info', 'picture');

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
            'info_table' => 'info',
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

	public function getInfos($where, $limit = 100)
	{
		//$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

    protected function _getSelect()
    {
        return 'id, name, title, thumb, created_at';
    }

	protected function _formatInfos($infos)
	{
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}
        return $infos;
    }
}
