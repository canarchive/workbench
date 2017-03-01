<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class AskAnswer extends GallerycmsModel
{
    use HouseTrait;
    public $memberInfo;
    
    public static function getDb()
    {
        return \Yii::$app->dbAsk;
    }	
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ask_answer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'orderlist', 'status'], 'default', 'value' => '0'],
			[['picture', 'house_type', 'style', 'area', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '案例ID',
            'name' => '名称',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
            'thumb' => '缩略图',
            'picture' => '设计图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
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

	public function getInfos($where, $limit = 50)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
        $datas = ['infos' => []];
		foreach ($infos as $key => $info) {
            $info['memberInfo'] = $this->getMemberInfo($info, 'answer');
            if ($info['is_best']) {
                $datas['best'] = $info;
            } else {
                $datas['infos'][] = $info;
            }
		}

        //$cache->set($keyCache, $infos);
		return $datas;
	}		
}
