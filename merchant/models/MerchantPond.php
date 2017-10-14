<?php

namespace merchant\models;

use Yii;
use baseapp\merchant\models\Merchant;

class MerchantPond extends Merchant
{
    use MerchantPondTrait;

    public static function tableName()
    {
        return '{{%merchant_pond}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status_ext', 'callback_next', 'saleman_id', 'orderlist'], 'default', 'value' => '0'],
            [['current_action', 'display_level', 'saleman_id_first', 'import', 'code', 'city_code', 'status', 'msg', 'region', 'name_full', 'sort', 'address', 'description'], 'safe'],
        ];
    }

    public function getDisplayLevelInfos()
    {
        return [
            '' => '通用',
            'private' => '私有客户',
            'protected' => '保护',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '新录入',
			'empty' => '空号',
			'follow' => '跟进',
			'mismatch' => '不匹配',
            'no-purpose' => '无意向',
            'latent' => '潜在',
            'purpose' => '有意向',
			'cooperation' => '合作',
        ];
        return $datas;
    }

    protected function getSortInfos()
    {
		return $this->getSortParams();
    }

    public function formatOperation($view)
    {
        if (empty($this->salemanPriv())) {
            return '-';
        }
        $str = parent::formatOperation($view);
        if ($this->status == 'cooperation') {
            $menuCodes = [
                'merchant_merchant_conew' => '转为合作',
            ];
            $str = $str . '---' . $this->_formatMenuOperation($view, $menuCodes, ['merchant_id' => 'id']);
        }
        return $str;
    }

    public function formatOpOwner($view)
    {
        $saleman = isset(Yii::$app->params['salemanInfo']) ? Yii::$app->params['salemanInfo'] : false;
        if (empty($saleman)) {
            return $this->getKeyName('display_level', $this->display_level);
        }
        $menu = $view->getMenuData('merchant_follow_merchant-pond_owner');
        $url = $menu['url'];

        $aClasses = [
            'private' => "btn btn-danger",
            '' => "btn btn-info",
        ];
        $names = [
            'private' => '释放',
            '' => '保护',
        ];
        $currentLevel = $this->display_level;
        $new = $currentLevel == '' ? 'private' : '';

        //$aClass = $this->display_level == 'private' ? 'class="btn btn-danger"' : 'class="btn btn-info"';
        $update = "var result = updateElemByAjax('{$url}', 'MerchantPond', {$this->id}, 'display_level', '{$new}'); if (result) { this.setAttribute('class', '{$aClasses[$new]}'); $('#op_info_{$this->id}').html('{$names[$new]}'); this.setAttribute('onclick', 'alert(\'不要频繁操作\')'); }";
        $str = "<a id='op_info_{$this->id}' class='{$aClasses[$currentLevel]}' href='javascript: void(0);' onclick=\"{$update}\">{$names[$currentLevel]}</a>";
        return $str;
    }

    protected function _getTemplateFields()
    {
        $datas = parent::_getTemplateFields();
        $datas['op_owner'] = ['type' => 'operation', 'method' => 'formatOpOwner'];
        return $datas;
    }

    public function changeOwner($saleman, $displayLevel)
    {
        if ($this->saleman_id == $saleman['id'] && $this->display_level == $displayLevel) {
            return ['status' => 200, 'message' => '切换成功'];
        }

        $oldSaleman = $this->getPointName('saleman', $this->saleman_id);
        if ($this->saleman_id == $saleman['id']) {
            $opStr = $displayLevel == '' ? '释放' : '保护';
            $content = "'{$oldSaleman}'{$opStr}了客户'{$this->name}'";
            $this->updateCallback($saleman['id'], $content);
        } else {
            $content = "客户由'{$oldSaleman}'转至'{$saleman['name']}'维护";
            $this->saleman_id = $saleman['id'];
            $this->saleman_times = $this->saleman_times + 1;
            $this->dispatch_at = Yii::$app->params['currentTime'];
            $this->updateCallback($saleman['id'], $content);
        }
        $this->display_level = $displayLevel;
        $this->update(false, ['saleman_id', 'dispatch_at', 'saleman_times', 'display_level']);
        return ['status' => 200, 'message' => '切换销售成功'];


    }

    protected function updateCallback($salemanId, $content)
    {
        $data = [
            'merchant_id' => $this->id,
            'saleman_id' => $salemanId,
            'content' => $content,
            'status' => $this->status,
            'status_contract' => $this->status_contract,
        ];
        $callback = new Callback($data);
        $callback->save();
        return true;
    }
}
