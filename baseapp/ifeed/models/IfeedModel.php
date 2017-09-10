<?php

namespace baseapp\ifeed\models;

use common\models\BaseModel;

class IfeedModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbIfeed;
    }	

	public function getAttachmentModel()
	{
		return new \ifeed\models\Attachment();
	}

	public function getCategoryInfos()
	{
        $model = $this->_newModel('category', true);
		$infos = $model->find()->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
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
    	$infos = $model->find()->select(['id', 'name', 'parent_id'])->indexBy('id')->asArray()->all();
		$datas = $this->getLevelInfos($infos, 'id', 'parent_id', 'name', 0);
		return $datas;
	}	
}
