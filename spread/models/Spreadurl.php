<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Company;
use baseapp\statistic\models\Visit;

class Spreadurl extends BaseModel
{
    public $inputParams; 

    public static function tableName()
    {
        return '{{%visit}}';
    }

    public function createDatas()
    {
        $searchDatas = $this->getSearchDatas();
        $title = "{$searchDatas['companyInfos'][$this->inputParams['cityCode']]}--{$searchDatas['merchantInfos'][$this->inputParams['merchantId']]}";
        $datas = [
            'searchDatas' => $this->getSearchDatas(),
            'infos' => $this->getInfos(),
            'title' => $title,
        ];

        return $datas;

    }

    protected function getInfos()
    {
        $siteInfos = $this->siteInfos();
        $siteInfos = empty($this->inputParams['siteCode']) ? $siteInfos : [$siteInfos[$this->inputParams['siteCode']]];
        $templateInfos = $this->getRelatedInfos('template');
        $templateInfos = empty($this->inputParams['templateCode']) ? $templateInfos : [$templateInfos[$this->inputParams['templateCode']]];
        $channelInfos = $this->inputParams['channel'] == 'all' ? $this->channelInfos : [$this->inputParams['channel'] => $this->channelInfos[$this->inputParams['channel']]];
        $datas = [];
        foreach ($siteInfos as $siteInfo) {
            foreach ($templateInfos as $template) {
                foreach ($channelInfos as $channel => $channelName) {
                    $params = [
                        'siteInfo' => $siteInfo, 
                        'template' => $template, 
                        'channel' => $channel
                    ];
                    $pcUrl = $this->getUrlSpread($params);
                    $mobileUrl = $this->getUrlSpread($params, false);
                    $datas[] = [
                        'sName' => $siteInfo['name'],
                        'tName' => $template['name'],
                        'cName' => $channelName,
                        'pcUrl' => "<a href='{$pcUrl}' target='_blank'>{$pcUrl}</a>",
                        'mobileUrl' => "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}</a>",
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
        $url = $domain . "/baom-{$template->code}-{$this->inputParams['cityCode']}.html";
        $url .= '?cid=' . $this->inputParams['merchantId'];
        if ($this->inputParams['showFull']) {
            foreach ($this->inputParams['attrs'] as $pKey => $pInfo) {
                if ($pKey == 'merchant_id') { continue; }
                $pValue = $pKey == 'channel' ? $params['channel'] : $pInfo['default'];
                $url .= "&{$pInfo['param']}={$pValue}";
            }
        }
        
        return $url;
    }

    public function getSearchDatas()
    {
        $datas = [
            'companyInfos' => $this->getRelatedInfos('company', true, ['status' => 2]),
            'templateInfos' => $this->getRelatedInfos('template', true),
            'siteInfos' => $this->siteInfos(true),
            'channelInfos' => $this->channelInfos,
            'merchantInfos' => $this->merchantInfos,
        ];
        $datas['channelInfos']['all'] = '全部渠道';
        return $datas;
    }

    protected function getRelatedInfos($code, $keyValue = false, $where = null)
    {
        static $objects = [];
        $params = [
            'template' => [
                'class' => '\spread\models\Template',
                'keyField' => 'code',
                'keyName' => 'name',
            ],
            'company' => [
                'class' => '\common\models\Company',
                'keyField' => 'code',
                'keyName' => 'name',
            ],
        ];
        $param = $params[$code];
        if (isset($objects[$code])) {
            $model = $objects[$code];
        } else {
            $class = $param['class'];
            $model = new $class();
        }

        $infos = $model->find()->where($where)->indexBy($param['keyField'])->all();
        if ($keyValue) {
            $infos = ArrayHelper::map($infos, $param['keyField'], $param['keyName']);
        }
        return $infos;
    }

    public function siteInfos($keyValue = false)
    {
        $file = Yii::getAlias('@subsite') . "/config/params-site.php";
        $datas = file_exists($file) ? require($file) : [];
        if (empty($keyValue)) {
            return $datas;
        }
        $infos = [];
        foreach ($datas as $code => $data) {
            $infos[$code] = $data['name'];
        }
        return $infos;

    }

    public function getAttributeParams()
    {
        $model = new Visit();
        return $model->attributeParams;
    }
}
