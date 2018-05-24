<?php

namespace common\components;

use Yii;
use yii\helpers\Html;
use yii\web\View as ViewBase;
use common\ueditor\UEditor;

class View extends ViewBase
{
    public function getCurrentTitle()
    {
        if (!empty($this->title)) {
            return $this->title;
        }
		$title = $this->contextDatas('menuInfos', 'menuTitle');
        $title = empty($title) ? $this->appDatas('siteName') : $title;
        $this->title = $title;
        return $title;
    }

	public function getMenuData($code)
	{
		$menus = $this->contextDatas('menuInfos', 'menus');
		return isset($menus[$code]) ? $menus[$code] : [];
	}

	public function getMenuApp($method)
	{
		$menus = $this->contextDatas('menuInfos', 'appMenus');
		return isset($menus[$method]) ? $menus[$method] : [];
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

	public function _appContextDatas($code, $sort, $indexName)
	{
		static $datas;

		$data = isset($datas[$code]) ? $data[$code] : ($sort == 'app' ? Yii::$app->params[$code] : $this->context->$code);
		$datas[$sort][$code] = $data;
		if (is_null($indexName)) {
			return $data;
		}
		return isset($data[$indexName]) ? $data[$indexName] : '';
	}

    public function getElemView($model, $field, $elem, $isNew = false)
    {
		$isNew = $model->isNewRecord ? true : false;
        $sort = isset($elem['sort']) ? $elem['sort'] : 'show';
        $value = $this->_getViewValue($model, $field, $elem);
        if ($sort == 'show') {
            return "<td>{$value}</td>";
        }

        $type = isset($elem['type']) ? $elem['type'] : 'common';
        $method = "_{$type}View";
        $elemValue = $this->$method($value, $model, $field, $elem, $isNew);
        if (isset($elem['noWrap'])) {
            return $elemValue;
        }
        return "<td>{$elemValue}</td>";
    }

    protected function _getElemUrl($elem)
    {
        if (!isset($elem['menuCode'])) {
            return '';
        }
		return $this->getMenuUrl($elem['menuCode']);
	}

	public function getMenuUrl($menuCode)
	{
        $menu = $this->getMenuData($menuCode);
        $menu = empty($menu) ? $this->getMenuApp($menuCode) : $menu;
        return isset($menu['url']) ? $menu['url'] : '';
    }

    protected function _getViewValue($model, $field, $elem)
    {
        if (isset($elem['value'])) {
            return $elem['value'];
        }

        $valueType = isset($elem['valueType']) ? $elem['valueType'] : 'common';
        switch ($valueType) {
        case 'key':
            $value = $model->getKeyName($field, $model->$field);
            break;
        case 'point':
			$pField = empty($elem['pointField']) ? 'id' : $elem['pointField'];
			$where = [$pField => $model->$field];
            $value = $model->getPointName($elem['table'], $where);
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
        $url = $this->_getElemUrl($elem);
        $onblur = $isNew ? '' : "changeDate(\"{$url}\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        $format = isset($elem['format']) ? $elem['format'] : 'Y-m-d H:i:s';
        $formatFront = isset($elem['formatFront']) ? $elem['formatFront'] : 'YYYY-MM-DD HH:mm:ss';
        $value = !empty($value) ? $value : date($format);
        $str = "<input type='hidden' id='{$idClass}_old' value='{$value}' />";
        $str .= "<input class='form-control' type='text' id='{$idClass}' onblur='{$onblur}' value='{$value}' />";
        $str .= "<script type='text/javascript'>
                    $(function () {
                        $('#{$idClass}').datetimepicker({locale: 'zh-CN', format: '{$formatFront}'});
                    });
                </script>";
        return $str;
    }

    protected function _dropdownView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $url = $this->_getElemUrl($elem);
        $onchange = $isNew ? '' : "updateElemByAjax(\"{$url}\", \"{$fName}\", {$id}, \"{$field}\", this.value);";

        $option = isset($elem['option']) ? $elem['option'] : [];
		if (!isset($elem['noAll'])) {
        $option = array_merge($option, [
            'prompt' => '全部',
            'onchange' => $onchange,
            'id' => $idClass,
            'class' => 'form-control',
        ]);
		}
        return Html::dropDownList($field, $value, $elem['elemInfos'], $option);
    }

    protected function _textareaView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $url = $this->_getElemUrl($elem);
        $onchange = $isNew ? '' : "updateElemByAjax(\"{$url}\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        $option = isset($elem['option']) ? $elem['option'] : [];
        $option = array_merge([
            'id' => $idClass,
            'rows' => 3,
            'cols' => '100',
            'onchange' => $onchange,
        ], $option);
        return Html::textarea($field, $value, $option);
    }

    protected function _editorView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $url = $this->_getElemUrl($elem);
        $onchange = $isNew ? '' : "updateElemByAjax(\"{$url}\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        $option = isset($elem['option']) ? $elem['option'] : [];
        $option = array_merge([
            'id' => $idClass,
            'rows' => 3,
            'cols' => '100',
            'onchange' => $onchange,
        ], $option);
        return Html::textarea($field, $value, $option);
    }

    protected function _commonView($value, $model, $field, $elem, $isNew)
    {
        $id = (int) $model->id;
        $fName = $model->formName();
        $idClass = "{$fName}_{$field}_{$id}";
        $url = $this->_getElemUrl($elem);
        $onchange = $isNew ? '' : "updateElemByAjax(\"{$url}\", \"{$fName}\", {$id}, \"{$field}\", this.value);";
        $width = isset($elem['width']) ? "style='width: {$elem['width']}px' " : '';
        return "<input type='text' id='{$idClass}' name='{$field}' {$width}value='{$value}' onchange='{$onchange}' />";
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
