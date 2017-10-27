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
	
			/*if (!isset($info['type'])) {
				$datas[$field] = $info;
				continue;
			}*/
			$type = isset($info['type']) ? $info['type'] : 'common';
			$method = "_{$type}Template";
			$data = [
				'attribute' => $field,
				'value' => $this->$method($field, $info, $sort, $view),
			];
            if (isset($info['formatView']) || in_array($type, ['atag', 'imgtag', 'operation'])) {
                $data['format'] = isset($info['formatView']) ? $info['formatView'] : 'raw';
            }
			$datas[$field] = $data;
		}
		return $datas;
	}

	protected function _atagTemplate($field, $info, $sort, $view)
	{
		if ($sort == 'list') {
    		$value = function($model) use ($field, $info) {
				return $model->formatAtag($field, $info);
            };
		} else {
			$value = $this->formatAtag($field, $info);
		}
		return $value;
	}

	protected function _imgtagTemplate($field, $info, $sort, $view)
	{
		if ($sort == 'list') {
    		$value = function($model) use ($field, $info) {
				return $model->formatImgtag($field, $info);
            };
		} else {
			$value = $this->formatImgtag($field, $info);
		}
		return $value;
	}

	protected function _commonTemplate($field, $info, $sort, $view)
	{
		if ($sort == 'list') {
    		$value = function($model) use ($field) {
				return $model->$field;
            };
		} else {
			$value = $this->$field;
		}
		return $value;
	}

	protected function _pointTemplate($field, $info, $sort, $view)
	{
		$table = $info['table'];
		$pointField = isset($info['pointField']) ? $info['pointField'] : 'id';
		if ($sort == 'list') {
    		$value = function($model) use ($field, $table, $pointField) {
                return $model->getPointName($table, [$pointField => $model->$field]);
            };
		} else {
			$value = $this->getPointName($table, [$pointField => $this->$field]);
		}
		return $value;
	}

	protected function _conditionTemplate($field, $info, $sort, $view)
	{
        $method = "_conditionElem";
		if ($sort == 'list') {
    		$value = function($model) use ($field, $method, $view) {
                return $model->$method($field, $view);
                //return $model->getKeyName($field, $model->$field);
            };
		} else {
            $value = $this->$method($field, $view);
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
		$info['menuCode'] = $menu['code'];
        $info['noWrap'] = true;
        return function ($model) use ($field, $info, $view) {
            return $view->getElemView($model, $field, $info);
        };
    }

	protected function _inlineTemplate($field, $info, $sort, $view)
	{
		$method = $info['method'];
		if ($sort == 'list') {
    		$value = function($model) use ($field, $method, $view) {
                return $model->$method($view);
            };
		} else {
            $value = $this->$method($view);
		}
		return $value;
	}

	protected function _operationTemplate($field, $info, $sort, $view)
	{
		$method = isset($info['method']) ? $info['method'] : 'formatOperation';
		if ($sort == 'list') {
    		$value = function($model) use ($field, $method, $view) {
                return $model->$method($view);
            };
		} else {
            $value = $this->$method($view);
		}
		return $value;
	}

    protected function _formatMenuOperation($view, $menuCodes, $params)
    {
        $str = '';
        foreach ($menuCodes as $code => $name) {
            $menu = $view->getMenuData($code);
            if (empty($menu)) {
                continue;
            }
            $name = empty($name) ? $menu['name'] : $name;
            $url = $menu['url'];
            $qStr = '';
            foreach ($params as $param => $field) {
                $value = $this->$field;
                $qStr .= "{$param}={$value}&";
            }
            $url .= "?{$qStr}";
            $str .= "<a href='{$url}'>{$name}</a>---";
        }
        $str = rtrim($str, '---');
        return $str;
    }

    protected function _operationOldTemplate($field, $info, $sort, $view)
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
