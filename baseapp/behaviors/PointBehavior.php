<?php

namespace baseapp\behaviors;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\Behavior;

class PointBehavior extends Behavior
{
    public function getPointName($code, $where, $nameField = 'name')
    {
        $info = $this->getPointInfo($code, $where);
        $default = is_scalar($where) ? $where : '';
        return empty($info) ? $default : $info[$nameField];
    }

    public function getPointInfo($code, $where)
    {
        $where = is_array($where) ? $where : ['id' => $where];
        return $this->getPointModel($code)->find()->where($where)->one();
    }

    public function getPointInfos($code, $params = [])
    {
        if ($code == 'service' && isset(Yii::$app->params['noSearchServer']) && (!isset($params['noPriv']) || empty($params['noPriv']))) {
            return [];
        }
        $indexName = isset($params['indexName']) ? $params['indexName'] : 'id';
        $valueName = isset($params['valueName']) ? $params['valueName'] : 'name';
        $params['select'] = "{$indexName}, {$valueName}";
        $params['indexBy'] = $indexName;
		$params['noPriv'] = isset($params['noPriv']) ? $params['noPriv'] : false;
        
        $infos = ArrayHelper::map($this->getPointAll($code, $params), $indexName, $valueName);
        return $infos;
    }

	public function getPointDatas($code, $params = [], $forceNew = false)
	{
		static $datas;
		$key = md5($code . serialize((array) $params));
		if (!isset($datas[$key]) || $forceNew) {
			$datas[$key] = $this->getPointAll($code, $params);
		}
		return $datas[$key];
	}

    public function getPointAll($code, $params = [])
    {
        $where = isset($params['where']) ? $params['where'] : null;
        if ($code == 'merchant' && (!isset($params['noPriv']) || empty($params['noPriv']))) {
            $wherePriv = $this->owner->formatPriv('merchant_id', 'id');
            $where = !empty($wherePriv) ? (is_null($where) ? $wherePriv : $where + $wherePriv) : $where;
        }
        if ($code == 'service' && (!isset($params['noPriv']) || empty($params['noPriv']))) {
            $wherePriv = $this->owner->formatPriv('service_id', 'id');
            $where = !empty($wherePriv) ? (is_null($where) ? $wherePriv : $where + $wherePriv) : $where;
        }
        $indexBy = isset($params['indexBy']) ? $params['indexBy'] : 'id';
        $select = isset($params['select']) ? $params['select'] : '*';
        $limit = isset($params['limit']) ? $params['limit'] : 1000;
        $limit = max($limit, 2000);
        $infos = $this->getPointModel($code)->find()->select($select)->where($where)->indexBy($indexBy)->limit($limit)->all();
        return $infos;
    }

    public function getPointModel($code, $forceNew = false)
    {
        static $models;
        if (isset($models[$code])) {
            return $models[$code];
        }

        $class = $this->getPointClass($code);
        $models[$code] = new $class();
        return $models[$code];
    }

    protected function getPointClass($class)
    {
        $classes = require(Yii::getAlias('@baseapp/config/point-classes.php'));
        return $classes[$class];
    }
}
