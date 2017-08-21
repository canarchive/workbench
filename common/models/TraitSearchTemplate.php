<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

trait TraitSearchTemplate
{
	public function formatTemplateDatas($sort = 'list', $view = null)
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
			$data = [
				'attribute' => $field,
				'value' => $this->$method($field, $info, $sort, $view),
			];
            if (isset($info['formatView'])) {
                $data['format'] = $info['formatView'];
            }
			$datas[$field] = $data;
		}
		return $datas;
	}

	protected function _pointTemplate($field, $info, $sort, $view)
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

	protected function _keyTemplate($field, $info, $sort, $view)
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

	protected function _timestampTemplate($field, $info, $sort, $view)
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

    protected function _changeTemplate($field, $info, $sort, $view)
    {
        if ($sort != 'list') {
            return $this->$field;
        }
        $menuCode = isset($info['menuCode']) ? $info['menuCode'] : '';
        $menu = $menuCode ? $view->getMenuData($menuCode) : $view->getMenuApp('update');
        if (empty($menu)) {
            return $this->$field;
        }
        $menuUrl = $menu['url'];
        $info['sort'] = 'change';
        $info['type'] = isset($info['typeView']) ? $info['typeView'] : 'common';
        $info['noWrap'] = true;
        return function ($model) use ($field, $info, $view) {
            return $view->getElemView($model, $field, $info);
        };
    }

	protected function _inlineTemplate($field, $info, $sort, $view)
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

    protected function _operationTemplate($field, $info, $sort, $view)
    {
        $queryStr = '';
        if (isset($info['qParam'])) {
            foreach ($info['qParam'] as $field => $qParam) {
                $qField = $qParam['field'];
                $value = is_null($qParam['value']) ? $this->$qField : $qParam['value'];
                $queryStr .= "{$field}={$value}&";
            }
        }
        $urlStr = '';
        $menus = $info['menuCodes'];
        foreach ($menus as $key => & $data) {
            $code = $data['code'];
            $menu = $view->getMenuData($code);
            if (empty($menu)) {
                unset($menus[$key]);
                continue;
            }
            $data['url'] = $menu['url'];
            $data['name'] = isset($data['name']) ? $data['name'] : $menu['name'];
            $qParams = isset($info['qParams']) ? $info['qParams'] : [];
            $qParams1 = isset($data['qParams']) ? $data['qParams'] : [];
            $data['qParams'] = array_merge($qParams, $qParams1);
        }

        //$urlStr .= "<a href='{$url}'>{$name}</a>---";
        //$urlStr = rtrim($urlStr, '---');
        //print_r($menus);exit();

		if ($sort == 'list') {
    		$value = function($model) use ($menus) {
                $urlStr = '';
                foreach ($menus as $menu) {
                    if (isset($menu['condition'])) {
                        $continue = false;
                        foreach ($menu['condition'] as $cField => $cValue) {
                            if ($model->$cField != $cValue) {
                                $continue = true;
                                continue;
                            }
                        }
                        if ($continue) {
                            continue;
                        }
                    }

                    $queryStr = '';
                    foreach ($menu['qParams'] as $field => $qParam) {
                        $qField = $qParam['field'];
                        $value = is_null($qParam['value']) ? $model->$qField : $qParam['value'];
                        $queryStr .= "{$field}={$value}&";
                    }
                    $url = $menu['url'] . '?' . $queryStr;
                    $urlStr .= "<a href='{$url}'>{$menu['name']}</a>---";
                }
                return rtrim($urlStr, '---');
            };
		} else {
            $value = $urlStr;
		}
		return $value;

    }
}
