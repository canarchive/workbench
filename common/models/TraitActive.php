<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use common\components\Pagination;
use baseapp\statistic\models\TraitStatistic;

trait TraitActive
{
    use TraitModel;
    use TraitAttachment;
    use TraitStatistic;

    public function _newModel($code, $returnNew = false, $data = [])
    {
        static $models = [];
        $code = ucfirst($code);
        if (!isset($models[$code]) || $returnNew) {
            $classPrefix = $this->_getClassPrefix();
            $class = "{$classPrefix}{$code}";
            //echo $class;exit();
            $models[$code] = new $class($data);
        }
        return $models[$code];
    }

    public function updateNum($field, $type)
    {
        $num = $type == 'add' ? 1 : -1;
        $this->updateCounters(['num_' . $field => $num]);
    }

	public function getInfosByPage($params = [])
	{
		$infosObj = $this->getInfosObj($params);
		$pageSize = isset($params['pageSize']) ? $params['pageSize'] : 20;
        $pagePreStr = isset($params['pagePreStr']) ? $params['pagePreStr'] : '';
        $noHost = isset($params['noHost']) ? $params['noHost'] : '';
		$pages = new Pagination(['totalCount' => $infosObj->count(), 'pageSize' => $pageSize, 'defaultPageSize' => $pageSize, 'pagePreStr' => $pagePreStr, 'noHost' => $noHost]);

		$params['offset'] = $pages->offset;
		$params['limit'] = $pages->limit;
		$infos = $this->getInfos($params, $infosObj);

		$return = ['infos' => $infos, 'pages' => $pages];
		return $return;
	}

	public function getInfos($params = [], $infosObj = null)
	{
		$infosObj = is_null($infosObj) ? $this->getInfosObj($params) : $infosObj;
		$offset = isset($params['offset']) ? $params['offset'] : 0;
		$limit = isset($params['limit']) ? $params['limit'] : 500;
		$infos = $infosObj->offset($offset)->limit($limit)->all();
		$infos = $this->_formatInfos($infos);
		return $infos;
	}

	protected function getInfosObj($params = [])
	{
		$where = isset($params['where']) ? $params['where'] : [];
		$orderBy = isset($params['orderBy']) ? $params['orderBy'] : ['id' => SORT_DESC];
		$groupBy = isset($params['groupBy']) && !empty($params['groupBy']) ? $params['groupBy'] : null;

        $selectStr = isset($params['select']) ? $params['select'] : $this->_getSelect();
        $infosObj = $this->find()->select($selectStr)->where($where);
		if (isset($params['indexBy'])) {
			$infosObj->indexBy($params['indexBy']);
		}
        if (isset($params['andWhere'])) {
            $infosObj = $infosObj->andWhere($params['andWhere']);
        }

		$infosObj = !empty($orderBy) ? $infosObj->orderBy($orderBy) : $infosObj;
		$infosObj = !empty($groupBy) ? $infosObj->groupBy($groupBy) : $infosObj;
		return $infosObj;
	}

	public function getInfo($where, $keyField = 'id')
	{
		$where = is_array($where) ? $where : [$keyField => $where];
		$info = $this->find()->where($where)->one();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);
        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

    protected function _getSelect()
    {
        return '*';
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $this->writeManagerLog();
        return true;
    }

    public function afterDelete()
    {
        parent::afterDelete();

        $this->writeManagerLog();
        return true;
    }

    protected function writeManagerLog()
    {
        if (Yii::$app->id != 'app-backend' || in_array(Yii::$app->controller->id, ['entrance', 'site', 'backend-upload'])) {
            return true;
        }

        $attributes = $this->attributes;
        $infos = get_object_vars($this);

        $infos = array_merge($attributes, $infos);
        $data = [];
        foreach ($infos as $key => $value) {
            if (is_array($value)) {
                $value = implode(',', $value);
            }

            $data[$key] = $value;
        }
        $managerInfo = Yii::$app->params['managerInfo'];
        $menuInfo = Yii::$app->params['currentMenu'];

        $infos = [
            'manager_id' => $managerInfo['id'],
            'manager_name' => $managerInfo['name'],
            'role' => $managerInfo['roleStr'],
            'menu_code' => $menuInfo['code'],
            'menu_name' => $menuInfo['name'],
            'data' => serialize($data),
            'ip' => Yii::$app->request->userIP,
            'created_at' => time(),
        ];

        $managerlogModel = new \backend\models\Managerlog($infos);
        Yii::$app->params['managerlogModel'] = $managerlogModel;
        $managerlogModel->insert();

        return true;
    }
}
