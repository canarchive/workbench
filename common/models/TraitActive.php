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

    public function searchTimeElem(& $query, $field = 'created_at')
    {
        $startAttr = $field . '_start';
        $endAttr = $field . '_end';
        $startTime = strtotime($this->$startAttr);
        $endTime = $this->$endAttr > 0 ? strtotime($this->$endAttr) : time();
        $query->andFilterWhere(['>=', $field, $startTime]);
        $query->andFilterWhere(['<', $field, $endTime]);
    }

    public function updateNum($field, $type)
    {
        $num = $type == 'add' ? 1 : -1;
        $this->updateCounters(['num_' . $field => $num]);
    }

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

    public function getSearchDatas()
    {
        return [];
    }

	public function getInfosByPage($params = [])
	{
		$pageSize = isset($params['pageSize']) ? $params['pageSize'] : 20;
		$where = isset($params['where']) ? $params['where'] : [];
		$orderBy = isset($params['orderBy']) ? $params['orderBy'] : ['id' => SORT_DESC];
		$groupBy = isset($params['groupBy']) && !empty($params['groupBy']) ? $params['groupBy'] : null;

        $data = $this->find()->select($this->_getSelect())->where($where);
        if (isset($params['andWhere'])) {
            $data = $data->andWhere($params['andWhere']);
        }

        $selectStr = isset($params['select']) ? $params['select'] : $this->_getSelect();
        $data = $this->find()->select($selectStr)->where($where);
        if (isset($params['andWhere'])) {
            $data = $data->andWhere($params['andWhere']);
        }
		$data = !empty($orderBy) ? $data->orderBy($orderBy) : $data;
		$data = !empty($groupBy) ? $data->groupBy($groupBy) : $data;
        $pagePreStr = isset($params['pagePreStr']) ? $params['pagePreStr'] : '';
        $noHost = isset($params['noHost']) ? $params['noHost'] : '';
		$pages = new Pagination(['totalCount' => $data->count(), 'pageSize' => $pageSize, 'defaultPageSize' => $pageSize, 'pagePreStr' => $pagePreStr, 'noHost' => $noHost]);
		$infos = $data->offset($pages->offset)->limit($pages->limit)->all();
		$infos = $this->_formatInfos($infos);

		$return = ['infos' => $infos, 'pages' => $pages];
		return $return;
	}

    protected function _getSelect()
    {
        return '*';
    }

    public function search($params)
    {
        $query = self::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
