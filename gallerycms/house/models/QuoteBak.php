<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class QuoteBak extends GallerycmsModel
{
    use HouseTrait;
    public $name;
	public $tagHeaders = [
		'h' => 'house_type', 
		's' => 'style', 
		'a' => 'area', 
	];
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%quote_bak}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
			[['orderlist'], 'integer'],
			[['orderlist', 'status'], 'default', 'value' => '0'],
			[['house_type', 'style', 'area', 'description'], 'safe'],
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

		return true;
	}	

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info, false);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function _formatInfo($info, $noPic = true)
	{
        $info['name'] = $info['community_name'] . '面积' . $info['area_real'] . $info->houseTypeInfos[$info['house_type']] . $info->styleInfos[$info['style']];
		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
            $info['name'] = $info['community_name'] . '面积' . $info['area_real'] . $info->houseTypeInfos[$info['house_type']] . $info->styleInfos[$info['style']];
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getQuoteSortInfos()
	{
		$datas = [
			'house_type' => [
				'name' => '户型',
			    'values' => $this->houseTypeInfos,
			],
			'style' => [
				'name' => '风格',
			    'values' => $this->styleInfos,
			],
			'area' => [
				'name' => '面积',
			    'values' => $this->areaInfos,
			],
		];
		return $datas;
	}

	public function formatTag($tag, $quoteSortInfos)
	{
		$datas = [];
		foreach ($this->tagHeaders as $type) {
			$datas[$type] = '';
		}
		if (empty($tag)) {
			return $datas;
		}

		$infos = explode('-', $tag);
		if (empty($infos) || count($infos) > 5) {
			return false;
		}
		
		$formatInfos = [];
		$tagHeaders = array_keys($this->tagHeaders);
		foreach ($infos as $info) {
			if (strpos($info, '_') === false) {
				return false;
			}

			$subInfos = explode('_', $info);
			$key = isset($subInfos[0]) ? $subInfos[0] : false;
			$value = isset($subInfos[1]) ? $subInfos[1] : false;
			if (empty($key) || !in_array($key, $tagHeaders) || empty($value)) {
				return false;
			}

			$currentKeyValue = array_search($key, $tagHeaders);
			foreach ($tagHeaders as $tagKey => $tagValue) {
				if ($tagKey <= $currentKeyValue) {
					$tagHeaders[$tagKey] = 'exist';
				}
			}
			$typeKey = $this->tagHeaders[$key];
			if (!array_key_exists($value, $quoteSortInfos[$typeKey]['values'])) {
				return false;
			}
			$datas[$typeKey] = $value;
		}

		return $datas;
	}

	public function createTag($tagInfos, $extInfo = [])
	{
		$tagInfos = array_merge($tagInfos, $extInfo);
		$tagStr = '';
		foreach ($tagInfos as $tag => $info) {
			if (empty($info)) {
				continue;
			}
			$tagStr .= substr($tag, 0, 1) . '_' . $info . '-';
		}
		return trim($tagStr, '-');
	}

    protected function _getSelect()
    {
        return 'id,community_name, district, house_type,style,area_real,area,created_at,status';
    }

    public function getIndexInfos($where)
    {
        $keyCache = 'index-ask-quote';
        $infos = $this->_getCacheDatas($keyCache);
        if ($infos) {
            //return $infos;
        }

        $infos = [
            'lastest' => ['name' => '最新'],
            'hot' => ['name' => '新房装修报价'],
            'news' => ['name' => '老房装修报价'], 
            'code' => ['name' => '二手房装修报价'], 
        ];
        $where = [];
        $datas = $this->getInfos($where, 100);
        foreach ($infos as $sort => & $info) {
            //$where = $sort == 'lastest' ? ['status' => 0] : ['sort' => $sort, 'status' => 0];
            //$infos[$sort]['infos'] = $this->getInfos($where, 20);
            $num = $sort == 'lastest' ? 10 : 4;
            $info['infos'] = array_splice($datas, 0, $num);//$this->getInfos($where, 20);
        }

        return $this->_setCacheDatas($keyCache, $infos);
    }

	protected function _formatInfos($infos)
	{
        foreach ($infos as & $info) {
            $info['name'] = $info['community_name'] . '面积' . $info['area_real'] . $info->houseTypeInfos[$info['house_type']] . $info->styleInfos[$info['style']];
        }
        //print_r($infos);
		return $infos;
	}
}
