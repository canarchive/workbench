<?php

namespace gallerycms\eale\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Service extends GallerycmsModel
{
    use EaleTrait;
	public $picture;
    
    public static function tableName()
    {
        return '{{%service}}';
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
			[['sort', 'content', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '标题',
            'title' => '副标题',
            'thumb' => '缩略图',
            'sort' => '类别',
			'orderlist' => '排序',
            'description' => '描述',
            'content' => '内容',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getSortInfos()
	{
		$datas = [
			'eale-commercial' => '摄影机构-广告拍摄服务',
			'eale-fashion' => '摄影机构-服装拍摄服务',
			'eale-star' => '摄影机构-艺人拍摄服务',
			'ieale-star' => '美学馆-明星拍摄服务',
			'ieale-people' => '美学馆-个人写真服务',
			'ieale-wedding' => '美学馆-婚纱摄影服务',
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
		$this->_updateSingleAttachment('sample', $fields);
		//$this->_updateMulAttachment('sample', 'picture');

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

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
