<?php

namespace common\models;

class GallerycmsModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbGallerycms;
    }	

	public function getAttachmentModel()
	{
		return new \gallerycms\models\Attachment();
	}

	public function getCategoryInfos()
	{
        $model = $this->_newModel('category', true);
		$infos = $model->find()->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		return $infos;
	}

	public function getCategoryInfo()
	{
		$info = $this->newModel('category')->findOne($this->category_id);

		return $info;
	}	

	public function getCategoryLevelInfos()
	{
        $model = $this->_newModel('category', true);
    	$infos = $model->find()->select(['id', 'name', 'parent_code'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_code', 'name', 0);
		return $datas;
	}	
}
