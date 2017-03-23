<?php

namespace common\models;

use gallerycms\house\models\Member;

class GallerycmsModel extends BaseModel
{
    use HouseParamsTrait;

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

    public function getMemberInfo($info, $type)
    {
        $id = $info['user_id'];
        if (empty($id)) {
            $id = rand(1, 226542);
            $member = Member::findOne($id);
            $info->user_id = $id;
            $info->update(false, ['user_id']);
            $numField = 'num_' . $type;
            $member->$numField = $member->$numField + 1;
            $member->update(false);
            return $member;
        }

        return Member::findOne($id);
    }
}
