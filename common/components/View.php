<?php

namespace common\components;

use Yii;
use yii\web\View as ViewBase;

class View extends ViewBase
{
	public function getMenuData($code)
	{
		$menus = $this->contextDatas('menuInfos', 'menus');
		return isset($menus[$code]) ? $menus[$code] : [];
	}

	public function getPointParam($code, $default = '')
	{
		return isset($this->params[$code]) ? $this->params[$code] : $default;
	}

    public function initBackendMenus()
    {
        $menuInfos = $this->params['menuInfos'] = $this->context->menuInfos;
        $this->params['menus'] = $menuInfos['menus'];
        $this->params['appMenus'] = $menuInfos['appMenus'];
        $this->params['currentMenu'] = $menuInfos['currentMenu'];
        $this->params['parentMenu'] = $menuInfos['parentMenu'];
	}

	public function appDatas($code, $indexName = null)
	{
		return $this->_appContextDatas($code, 'app', $indexName);
	}

	public function contextDatas($code, $indexName = null)
	{
		return $this->_appContextDatas($code, 'context', $indexName);
	}

    public function getElemView($model, $field, $elem, $isNew = false)
    {
        $sort = isset($elem['sort']) ? $elem['sort'] : 'show';
        $value = $this->_getViewValue($model, $field, $elem);
        if ($sort == 'show') {
            return "<td>{$value}</td>";
        }

        $type = isset($elem['type']) ? $elem['type'] : 'common';
        $method = "_{$type}View";
        return $this->$method($value, $model, $field, $elem, $isNew);
    }

    protected function _getViewValue($model, $field, $elem)
    {
        $valueType = isset($elem['valueType']) ? $elem['valueType'] : 'common';
        switch ($valueType) {
        case 'key':
            $value = $model->getKeyName($field, $model->$field);
            break;
        case 'point':
            $value = $model->getPointName($field, $model->$field);
            break;
        case 'timestamp':
            $format = isset($elemValue['format']) ? $elemValue['format'] : null;
            $value = $model->formatTimestamp($model->$field, $format);
            break;
        default:
            $value = $model->$field;
        }
        return $value;
    }

    protected function _timestampView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $onblur = $isNew ? '' : "changeDate(\"\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        $format = isset($elem['format']) ? $elem['format'] : 'Y-m-d H:i:s';
        $formatFront = isset($elem['formatFront']) ? $elem['formatFront'] : 'YYYY-MM-DD HH:mm:ss';
        $value = !empty($value) ? $value : date($format);
        $str = "<td><input type='hidden' id='{$idClass}_old' value='{$value}' />";
        $str .= "<input class='form-control' type='text' id='{$idClass}' onblur='{$onblur}' value='{$value}' />";
        $str .= "<script type='text/javascript'>
                    $(function () {
                        $('#{$idClass}').datetimepicker({locale: 'zh-CN', format: '{$formatFront}'});
                    });
                </script>";
        $str .= '</td>';
        return $str;
    }

    protected function _commonView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $onchange = $isNew ? '' : "updateElemByAjax(\"\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        return "<td><input type='text' id='{$idClass}' name='{$field}' value='{$value}' onchange='{$onchange}' /></td>";
    }

	public function _appContextDatas($code, $sort, $indexName)
	{
		static $datas;

		$data = isset($datas[$code]) ? $data[$code] : ($sort == 'app' ? Yii::$app->params[$code] : $this->context->$code);
		$datas[$sort][$code] = $data;
		if (is_null($indexName)) {
			return $data;
		}

		return $data[$indexName];
	}

    public function getOptionInfo($elem, $optionDefault)
    {
        $optionDefault = array_merge([
            'id' => $elem['field'] . '_field',
        ], $optionDefault);
        $option = isset($elem['option']) ? array_merge($optionDefault, $elem['option']) : $optionDefault;
        if (!isset($elem['ajax'])) {
            return $option;
        }

        $data = $elem['ajax'];
        $menu = $this->getMenuData($data['menuCode']);
        if (empty($menu)) {
            return $option;
        }
        $url = $menu['url'];
        $option['onchange'] = '$.get("' . $menu['url'] . '?action=infoAjax&' . $elem['field'] . '="+$(this).val(),function(data){
            var htmlContent = "";
            $.each(data, function(i, v) {
                htmlContent += "<option value=\"" + i + "\">" + v + "</option>";
            });
            $("#' . $data['targetField'] . '_wrap").removeClass("hidden");

            $("#' . $data['targetField'] . '_field").html(htmlContent);
        });';
        return $option;
    }
}
