<?php

namespace gallerycms\eale\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Customer extends GallerycmsModel
{
    use EaleTrait;
	public $picture;
    
    public static function tableName()
    {
        return '{{%customer}}';
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
			[['picture', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'url' => '链接',
            'thumb' => '缩略图',
            'thumb' => '缩略图(建议尺寸190 X 190 ）',
            'picture' => '设计图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getSortInfos()
	{
		$datas = [
			'seo' => 'SEO',
			'sem' => '竞价',
		];
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('customer', $fields);

		return true;
	}	

	public function getInfos($where = [], $limit = 100)
	{
        $where = array_merge(['status' => 1], $where);
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
