<?php

namespace gallerycms\shoot\models;

use Yii;
use yii\helpers\ArrayHelper;

trait ModelTrait
{
    public static function getDb()
    {
        return Yii::$app->dbShoot;
    }    

    public function _getClassPrefix()
    {
        return '\gallerycms\shoot\models\\';
    }

	public function getAttachmentModel()
	{
		return new \gallerycms\shoot\models\Attachment();
	}

    protected function getSiteInfos()
    {
        $infos = ArrayHelper::map(Site::find()->select('code, name')->all(), 'code', 'name');
        return $infos;
    }

    protected function getSortDatas()
    {
        $infos = ArrayHelper::map(Sort::find()->select('code, name')->where(['site_code' => 'shoot'])->all(), 'code', 'name');
        return $infos;
    }

	public function getSiteAllInfos()
	{
        $infos = Site::find()->indexBy('code')->all();
        return $infos;
	}

    public function uploadUrl($table, $field, $id)
    {
        return Yii::getAlias('@shoot.cmsurl') . "/upload/{$table}/{$field}.html?mparam=shoot&id={$id}";
    }
}
