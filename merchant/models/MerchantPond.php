<?php

namespace merchant\models;

use Yii;
use baseapp\merchant\models\Merchant;

class MerchantPond extends Merchant
{

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

    public function import()
    {   
        $datas = $this->_importDatas();
        if ($datas === false) {
            return ;
        }
        //print_r($datas);exit();

        $i = 0;
        foreach ($datas as $key => $data) {
            if ($key == 1) { continue; }
            $mData = [
                'sort' => 'decoration',
                'name' => trim($data['A']),
                'address' => trim($data['D']),
            ];

            $info = $this->find()->where($mData)->one();
            if (empty($info) && !empty($mData['name'])) {
                $info = new self($mData);
                $r = @ $info->save(false);
                $i++;
            }

            $cData = [
                'merchant_id' => $info['id'],
                'mobile' => trim($data['C']),
            ];
            $cModel = new NewContact();
            $cInfo = $cModel->find()->where($cData)->one();
            if (empty($cInfo)) {
                $cData['name'] = trim($data['B']);
                $cModel = new NewContact($cData);
                $cr = @ $cModel->save(false);
            }
        }
        echo $i;
        exit();
        return $i;
    }

    public function formatOperation($view)
    {
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
        $menu = $view->getMenuData('merchant_follow_merchant-pond_update');
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
        $update = "var result = updateElemByAjax('{$url}', 'MerchantPond', {$this->id}, 'display_level', '{$new}'); if (result) { this.setAttribute('class', '{$aClasses[$new]}'); $('#op_info_{$this->id}').html('{$names[$new]}'); this.setAttribute('onclick', 'alert(\'不要频繁操作\')');}";
        $str = "<a id='op_info_{$this->id}' class='{$aClasses[$currentLevel]}' href='javascript: void(0);' onclick=\"{$update}\">{$names[$currentLevel]}</a>";
        return $str;
    }

    protected function _getTemplateFields()
    {
        $datas = parent::_getTemplateFields();
        $datas['op_owner'] = ['type' => 'operation', 'method' => 'formatOpOwner'];
        return $datas;
    }
}
