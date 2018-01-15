<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use yii\helpers\ArrayHelper;

class Article extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%article}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['orderlist', 'thumb', 'status'], 'default', 'value' => 0],
			[['description', 'content', 'tags', 'editor'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
            'category_id' => '栏目ID',
            'name' => '标题',
            'thumb' => '缩略图',
            'tags' => '关键字',
            'description' => '描述',
            'orderlist' => '排序',
            'editor' => '编辑',
            'content' => '内容',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('article', $fields);

		return true;
	}	

	public function getInfos($where, $limit = 100)
	{
        $where = array_merge($where, ['status' => 1]);
		$infos = $this->find()->select('id, name, description, created_at')->where($where)->indexBy('id')->orderBy(['updated_at' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			//$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
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

    public function getInfosForIndex()
    {
        $cModel = new Category();
        $cInfos = $cModel->getDatas('catdir');
        //print_r($cInfos);exit();
        $levelInfos = $cModel->getlevelDatas();
        $catdirs = ['yxtg', 'wzqz', 'jingjia', 'seo'];
        $cDatas = [];
        foreach ($catdirs as $catdir) {
            $id = $cInfos[$catdir]['id'];
            
            $cDatas[$catdir]['name'] = $cInfos[$catdir]['name'];
            $ids = isset($levelInfos[$id]) ? array_keys($levelInfos[$id]['subInfos']) : [$id];
            $cDatas[$catdir]['id'] = $ids;
        }

		$infos = $this->getInfos([], 28);
        foreach ($cDatas as $catdir => $info) {
            //$cDatas[$catdir]['subInfos'] = $this->getInfos([], 7);
            $cDatas[$catdir]['subInfos'] = array_splice($infos, 0, 7);//$this->getInfos([], 7);
            //$cDatas[$catdir]['subInfos'] = $this->getInfos(['category_id' => $info['id']], 7);
        }

        return $cDatas;
    }
}
