<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class AskQuestion extends GallerycmsModel
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
        return '{{%ask_question}}';
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

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('house_sample', $fields);

		return true;
	}	

	public function getInfo($id)
	{
		$info = self::find()->where(['id' => $id])->one();//->toArray();
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

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->select('id, name, sort, num_answer, created_at')->where($where)->indexBy('id')->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			//$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			//$info['style'] = $info->styleInfos[$info->style];
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

    public function getIndexInfos($where)
    {
        $keyCache = 'index-ask-question';
        $infos = $this->_getCacheDatas($keyCache);
        if ($infos) {
            //return $infos;
        }

		$sortInfos = ArrayHelper::map(AskSort::find()->all(), 'code', 'name');
        $sorts = ['lastest', 'esfzx', 'wyjjzx', 'csypzx', 'rzsj', 'zxgs', 'scmc', 'cyjb', 'jjsh', 'djzm', 'rzcp'];
        $infos = [];
        foreach ($sorts as $sort) {
            $where = $sort == 'lastest' ? ['status' => 0] : ['sort' => $sort, 'status' => 0];
            $infos[$sort]['name'] = $sort == 'lastest' ? '最新提问' : $sortInfos[$sort];
            $infos[$sort]['infos'] = $this->getInfos($where, 20);
        }

        return $this->_setCacheDatas($keyCache, $infos);
    }
}
