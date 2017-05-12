<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\Company;
use common\models\spread\Visit;

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
        $domainInfos = $this->getRelatedInfos('domain');
        $domainInfos = empty($this->inputParams['domainCode']) ? $domainInfos : [$domainInfos[$this->inputParams['domainCode']]];
        $templateInfos = $this->getRelatedInfos('template');
        $templateInfos = empty($this->inputParams['templateCode']) ? $templateInfos : [$templateInfos[$this->inputParams['templateCode']]];
        $channelInfos = empty($this->inputParams['channel']) ? $this->channelInfos : [$this->inputParams['channel'] => $channeInfos[$this->inputParams['channel']]];
        $datas = [];
        foreach ($domainInfos as $domain) {
            foreach ($templateInfos as $template) {
                foreach ($channelInfos as $channel => $channelName) {
                    $params = [
                        'domain' => $domain, 
                        'template' => $template, 
                        'channel' => $channel
                    ];
                    $pcUrl = $this->getUrlSpread($params);
                    $mobileUrl = $this->getUrlSpread($params, false);
                    $datas[] = [
                        'dName' => $domain['name'],
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
        $domain = $params['domain'];
        $domain = $isPc ? $domain->pcDomain : $domain->mobileDomain;
        $url = $domain . "/baom-{$template->code}-{$this->inputParams['cityCode']}.html";
        $url .= '?cid=' . $this->inputParams['merchantId'];
        if ($this->inputParams['showFull']) {
            foreach ($this->inputParams['attrs'] as $pKey => $pInfo) {
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
            'domainInfos' => $this->getRelatedInfos('domain', true),
            'channelInfos' => $this->channelInfos,
            'merchantInfos' => $this->merchantInfos,
        ];
        return $datas;
    }

    protected function getRelatedInfos($code, $keyValue = false, $where = null)
    {
        static $objects = [];
        $params = [
            'domain' => [
                'class' => '\spread\models\saccount\Domain',
                'keyField' => 'code',
                'keyName' => 'name',
            ],
            'template' => [
                'class' => '\spread\models\saccount\Template',
                'keyField' => 'code',
                'keyName' => 'name',
            ],
            'company' => [
                'class' => '\common\models\Company',
                'keyField' => 'code',
                'keyName' => 'name',
            ],
            'visit' => [
                'class' => '\common\models\spread\Visit',
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

    public function getAttributeParams()
    {
        $model = new Visit();
        return $model->attributeParams;
    }
}
