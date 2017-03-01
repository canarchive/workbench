<?php

namespace gallerycms\house\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Member extends GallerycmsModel
{
    use HouseTrait;
	public $avatar;
    
    public static function tableName()
    {
        return '{{%member}}';
    }

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
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
		//$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
	}
}
