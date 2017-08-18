<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Company;
use baseapp\statistic\models\Visit;

class Spreadurl extends BaseModel
{
    public $show_full;
    public $city_code;
    public $merchant_id;
    public $site_code;
    public $account_id;
    public $template_code;
    public $channel;
    public $site_redirect;

    public static function tableName()
    {
        return '{{%visit}}';
    }

    public function rules()
    {
        return [
            [['city_code', 'merchant_id', 'template_code', 'account_id', 'channel', 'site_redirect', 'show_full', 'site_code'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'show_full' => 'URL类型',
            'city_code' => '城市代码',
            'merchant_id' => '商家',
            'site_code' => '推广域名',
            'template_code' => '模板',
            'channel' => '渠道',
            'account_id' => '推广账户',
            'site_redirect' => '跳转域名',
        ];
    }

    public function initParams($params)
    {
        $this->load($params, '');
        $this->city_code = empty($this->city_code) ? 'beijing' : $this->city_code;
        $this->merchant_id = empty($this->merchant_id) ? 2 : $this->merchant_id;
        $this->channel = empty($this->channel) ? 'bd' : $this->channel;
    }

    public function createDatas($params)
    {
        $this->initParams($params);

        $siteInfos = $this->siteInfos();
        $templateInfos = $this->templateInfos();
        $merchantInfos = $this->merchantInfos();
        if (empty($this->show_full)) {
            return $this->_createSimpleDatas($siteInfos, $templateInfos, $merchantInfos);
        } else {
            $params = [
                'merchantInfo' => array_pop($merchantInfos),
                'siteInfo' => array_pop($siteInfos), 
                'template' => array_pop($templateInfos), 
            ];
            $pcUrl = $this->getUrlSpread($params);
            $mobileUrl = $this->getUrlSpread($params, false);
        
            return $this->_createFullDatas($pcUrl, $mobileUrl);
        }
    }

    protected function _createFullDatas($pcUrlBase, $mobileUrlBase)
    {
        $datas = [];
        $accountInfos = $this->accountInfos();
        foreach ($accountInfos as $aInfo) {
            $channel = $aInfo['channel'];

            $urlBase = '';
            foreach ($this->attributeParams as $pKey => $pInfo) {
                if (!in_array($channel, $pInfo['channel'])) {
                    continue;
                }
                if ($pKey == 'merchant_id') { continue; }
                $pValue = $pKey == 'channel' ? $channel : $pInfo['default'];
                $pValue = $pKey == 'channel_info' ? '{{CHANNELINFO}}' : $pValue;
                $urlBase .= "&{$pInfo['param']}={$pValue}";
            }
            $pcUrlBase1 = empty($pcUrlBase) ? '' : $pcUrlBase . $urlBase;
            $mobileUrlBase1 = empty($mobileUrlBase) ? '' : $mobileUrlBase . $urlBase;

            $planInfos = $aInfo->getPlanInfos();
            foreach ($planInfos as $pInfo) {
                $channelInfo = $aInfo['id'] . '-' . $pInfo['id'];
                $pcUrl = str_replace('{{CHANNELINFO}}', $channelInfo, $pcUrlBase1);
                $mobileUrl = str_replace('{{CHANNELINFO}}', $channelInfo, $mobileUrlBase1);
                $button = empty($pcUrl) ? '' : "<button class='copy-btn' data-clipboard-action='copy' data-clipboard-text='{$pcUrl}'>点我复制</button>";
                $buttonMobile = empty($mobileUrl) ? '' : "<button class='copy-btn' data-clipboard-action='copy' data-clipboard-text='{$mobileUrl}'>点我复制</button>";
                $datas[] = [
                    'channel' => $this->getKeyName('channel', $channel),
                    'account_name' => $aInfo['name'],
                    'plan_name' => $pInfo['name'],
                    'pcUrl' => "<a href='{$pcUrl}' target='_blank'>{$pcUrl}</a> {$button}",
                    'mobileUrl' => "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}</a> {$buttonMobile}",
                ];
            }
        }
        return $datas;
    }

    protected function _createSimpleDatas($siteInfos, $templateInfos, $merchantInfos)
    {
        $datas = [];
        foreach ($merchantInfos as $mId => $merchantInfo) {
            foreach ($siteInfos as $siteInfo) {
                foreach ($templateInfos as $template) {
                    $params = [
                        'merchantInfo' => $merchantInfo,
                        'siteInfo' => $siteInfo, 
                        'template' => $template, 
                    ];
                    $pcUrl = $this->getUrlSpread($params);
                    $mobileUrl = $this->getUrlSpread($params, false);
                    $button = empty($pcUrl) ? '' : "<button class='copy-btn' data-clipboard-action='copy' data-clipboard-text='{$pcUrl}'>点我复制</button>";
                    $buttonMobile = empty($mobileUrl) ? '' : "<button class='copy-btn' data-clipboard-action='copy' data-clipboard-text='{$mobileUrl}'>点我复制</button>";
                    $datas[] = [
                        'mName' => $merchantInfo['name'],
                        'sName' => $siteInfo['name'],
                        'tName' => $template['name'],
                    'pcUrl' => "<a href='{$pcUrl}' target='_blank'>{$pcUrl}</a> {$button}",
                    'mobileUrl' => "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}</a> {$buttonMobile}",
                    ];
                }
            }
        }

        return $datas;
    }

    public function getUrlSpread($params, $isPc = true)
    {
        $template = $params['template'];
        if ($isPc && empty($template['have_pc'])) {
            return '';
        }
        if (!$isPc && empty($template['have_mobile'])) {
            return '';
        }

        $siteInfo = $params['siteInfo'];
        $domain = $isPc ? $siteInfo['domains']['pc'] : $siteInfo['domains']['m'];
        $siteRedirect = $this->site_redirect;
        $siteRedirect = empty($siteRedirect) ? '' : $siteRedirect;
        $urlPath = "/bm-{$template->code}-{$this->city_code}.html";
        $urlPath = empty($siteRedirect) ? $urlPath : "/sr-{$siteRedirect}" . $urlPath;
        $url = $domain . $urlPath;
        $url .= '?cid=' . $params['merchantInfo']['id'];
        
        return $url;
    }

    public function siteInfos($keyValue = false)
    {
        $datas = require(Yii::getAlias('@spread/config/params-site.php'));
        if (empty($keyValue)) {
            if (empty($this->site_code)) {
                return $datas;
            }
            $rDatas = [];
            foreach ((array) $this->site_code as $sCode) {
                $rDatas[$sCode] = $datas[$sCode];
            }
            return $rDatas;
        }

        $infos = [];
        foreach ($datas as $code => $data) {
            $infos[$code] = $data['name'];
        }
        return $infos;
    }

    public function _channelInfos($keyValue = false)
    {
        $cInfos = $this->channelInfos;
        if ($keyValue || $this->channel == 'all') {
            return $this->channelInfos;
        }
        $rDatas = [];
        foreach ((array) $this->channel as $c) {
            $rDatas[$c] = $cInfos[$c];
        }
        return $rDatas;
    }

    public function merchantInfos($keyValue = false)
    {
        if ($keyValue) {
            return $this->getPointInfos('merchant', ['where' => ['status' => ['sem', 'cpa', 'cps']]]);
        }
        $datas = $this->getPointAll('merchant', ['where' => ['status' => ['sem', 'cpa', 'cps']]]);
        if (empty($this->merchant_id)) {
            return $datas;
        }
        $rDatas = [];
        foreach ((array) $this->merchant_id as $id) {
            $rDatas[$id] = $datas[$id];
        }
        return $rDatas;
    }

    public function accountInfos($keyValue = false)
    {
        if ($keyValue) {
            return $this->getPointInfos('account');
        }
        $datas = $this->getPointAll('account');
        if (empty($this->account_id)) {
            return $datas;
        }
        $rDatas = [];
        foreach ((array) $this->account_id as $tCode) {
            $rDatas[$tCode] = $datas[$tCode];
        }
        return $rDatas;
    }

    public function templateInfos($keyValue = false)
    {
        if ($keyValue) {
            return $this->getPointInfos('template', ['indexName' => 'code']);
        }
        $datas = $this->getPointAll('template', ['indexBy' => 'code']);
        if (empty($this->template_code)) {
            return $datas;
        }
        $rDatas = [];
        foreach ((array) $this->template_code as $tCode) {
            $rDatas[$tCode] = $datas[$tCode];
        }
        return $rDatas;
    }

    public function getAttributeParams()
    {
        $model = new Visit();
        return $model->attributeParams;
    }

    public function getSearchDatas()
    {
        if (!$this->show_full) {
        $list = [
            $this->_sPointParam(['field' => 'city_code', 'table' => 'company', 'type' => 'radio', 'where' => ['status' => [2]], 'indexName' => 'code']),
            $this->_sPointParam(['field' => 'site_code', 'infos' => $this->siteInfos(true)]),
            $this->_sPointParam(['field' => 'merchant_id', 'infos' => $this->merchantInfos(true)]),
            $this->_sPointParam(['field' => 'template_code', 'infos' => $this->templateInfos(true)]),
            //$this->_sPointParam(['field' => 'channel', 'infos' => $this->channelInfos]),
            $this->_sPointParam(['field' => 'site_redirect', 'type' => 'radio', 'infos' => $this->siteInfos(true)]),
        ];
        } else {
        $list = [
            $this->_sPointParam(['field' => 'city_code', 'table' => 'company', 'type' => 'radio', 'where' => ['status' => [2]], 'indexName' => 'code']),
            $this->_sPointParam(['field' => 'site_code', 'type' => 'radio', 'infos' => $this->siteInfos(true)]),
            $this->_sPointParam(['field' => 'merchant_id', 'type' => 'radio', 'infos' => $this->merchantInfos(true)]),
            $this->_sPointParam(['field' => 'template_code', 'type' => 'radio', 'infos' => $this->templateInfos(true)]),
            $this->_sPointParam(['field' => 'account_id', 'infos' => $this->accountInfos(true)]),
            //$this->_sPointParam(['field' => 'channel', 'infos' => $this->channelInfos]),
            $this->_sPointParam(['field' => 'site_redirect', 'type' => 'radio', 'infos' => $this->siteInfos(true)]),
        ];
        }
		$form = [[
            $this->_sHiddenParam(['field' => 'show_full']),
		]];

        $datas = ['list' => $list, 'form' => $form];
        return $datas;
    }
}
