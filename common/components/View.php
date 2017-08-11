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
