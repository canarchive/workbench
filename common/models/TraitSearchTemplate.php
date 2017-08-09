<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

trait TraitSearchTemplate
{
	public function formatTemplateDatas($sort = 'list')
	{
		$fields = $this->_getTemplateFields();
		$datas = [];
		foreach ($fields as $field => $info) {
			if (isset($info[$sort . 'No'])) {
				continue;
			}
			if (!isset($info['type'])) {
				$datas[$field] = $info;
				continue;
			}
			$type = $info['type'];
			if ($type == 'common') {
				$datas[$field] = $field;
				continue;
			}
			$method = "_{$type}Template";
			$datas[$field] = [
				'attribute' => $field,
				'value' => $this->$method($field, $info, $sort),
			];
		}
		return $datas;
	}

	protected function _pointTemplate($field, $info, $sort)
	{
		$table = $info['table'];
		if ($sort == 'list') {
    		$value = function($model) use ($field, $table) {
                return $model->getPointName($table, $model->$field);
            };
		} else {
			$value = $this->getPointName($table, $this->$field);
		}
		return $value;
	}

	protected function _keyTemplate($field, $info, $sort)
	{
		if ($sort == 'list') {
    		$value = function($model) use ($field) {
                return $model->getKeyName($field, $model->$field);
            };
		} else {
            $value = $this->getKeyName($field, $this->$field);
		}
		return $value;
	}

	protected function _timestampTemplate($field, $info, $sort)
	{
		if ($sort == 'list') {
    		$value = function($model) use ($field) {
                return $model->formatTimestamp($model->$field);
            };
		} else {
            $value = $this->formatTimestamp($this->$field);
		}
		return $value;
	}

	protected function _inlineTemplate($field, $info, $sort)
	{
		$method = $info['method'];
		if ($sort == 'list') {
    		$value = function($model) use ($field, $method) {
                return $model->$method();
            };
		} else {
            $value = $this->$method();
		}
		return $value;
	}
}
