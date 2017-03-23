<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class AskAnswer extends GallerycmsModel
{
    use HouseTrait;
    public $memberInfo;
    public $lastCreatedAt;
    
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

	public function getInfos($qInfo)
	{
        $limit = $qInfo->num_answer;
        $this->lastCreatedAt = $qInfo['created_at'];
		$infos = $this->find()->where(['question_id' => $qInfo['id']])->indexBy('id')->orderBy(['id' => SORT_DESC])->all();
        $datas = ['infos' => []];
        $i = 1;
		foreach ($infos as $key => $info) {
            $info['memberInfo'] = $this->getMemberInfo($info, 'answer');

            if (empty($info['created_at'])) {
                $info['created_at'] = $this->getCreatedAt($info, $qInfo['created_at'], $i);
            } else {
                $this->lastCreatedAt = $info['created_at'];
            }

            if ($info['is_best']) {
                $datas['best'] = $info;
            } else {
                $datas['infos'][] = $info;
            }
            $i++;
		}

        //$cache->set($keyCache, $infos);
		return $datas;
	}		

    public function getCreatedAt($info, $qCreatedAt, $index)
    {
        if ($index == 1) {
            $min = $qCreatedAt;
            $max = $qCreatedAt + 60 * 5;
        } elseif ($index <= 5) {
            $min = max($qCreatedAt + 60 * 5, $this->lastCreatedAt);
            $max = $qCreatedAt + 60 * 60;
        } elseif ($index <= 10) {
            $min = max($qCreatedAt + 60 * 60, $this->lastCreatedAt);
            $max = $qCreatedAt + 60 * 1440;
        } elseif ($index <= 25) {
            $min = max($qCreatedAt + 60 * 1440, $this->lastCreatedAt);
            $max = $qCreatedAt + 60 * 43200;
        } else {
            $max = $qCreatedAt + 60 * 57600;
        }
        $createdAt = rand($min, $max);
        $this->lastCreatedAt = $createdAt;
        $info->created_at = $createdAt;
        $info->update(false);
        return $createdAt;
    }
}
