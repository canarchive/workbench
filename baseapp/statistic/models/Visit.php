<?php

namespace baseapp\statistic\models;

use Yii;
use common\models\BaseModel;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class Visit extends BaseModel
{
    public $rate;

    public static function getDb()
    {
        return Yii::$app->dbSpread;
    }    

    public static function tableName()
    {
        return '{{%visit}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sort' => '类别',
            'merchant_id' => '客户ID',
            'channel' => '渠道',
            'channel_info' => '渠道参数',
            'sem_account' => 'SEM账号',
            'plan_id' => '计划ID',
            'unit_id' => '单元ID',
            'client_type' => '客户端',
            'keyword' => '关键字',
            'keyword_search' => '搜索关键字',
            'param_info' => 'SEM参数',
            'created_at' => '创建时间',
            'created_day' => '日期',
            'created_hour' => '小时',
            'ip' => 'IP',
            'city' => '城市',
        ];
    }

    public function writeVisitLog($data)
    {
        $attributeParams = $this->getAttributeParams();
        $channelInfo = Yii::$app->getRequest()->get('qinfo');
        foreach ($attributeParams as $field => $param) {
            if ($field == 'semer_qq') {
                continue;
            }
            $paramValue = (Yii::$app->getRequest()->get($param['param'], ''));
            switch ($field) {
            case 'merchant_id':
				$paramValue = intval($paramValue);
				break;
            case 'keyword':
                $paramValue = $this->_formatUtf8Code($paramValue);
                break;
            case 'param_info':
                $pInfos = explode('-', $paramValue);
                $data['pagenum'] = isset($pInfos[0]) ? $pInfos[0] : '';
                $data['adposition'] = isset($pInfos[1]) ? $pInfos[1] : '';
                $data['matchtype'] = isset($pInfos[2]) ? $pInfos[2] : '';
                $data['dongtai'] = isset($pInfos[3]) ? $pInfos[3] : '';
                $data['bidurl'] = isset($pInfos[4]) ? $pInfos[4] : '';
                $data['haoci'] = isset($pInfos[5]) ? $pInfos[5] : '';
                break;
            case 'channel_info':
                $cInfos = explode('-', $paramValue);
                $data['sem_account'] = isset($cInfos[0]) ? $cInfos[0] : '';
                $data['plan_id'] = isset($cInfos[1]) ? intval($cInfos[1]) : 0;
                $data['unit_id'] = isset($cInfos[2]) ? intval($cInfos[2]) : 0;
                break;
            }
			
            $data[$field] = $paramValue;
        }
        $data['city_code'] = Yii::$app->request->get('city_code', '');

        $urlFull = strval(Yii::$app->request->referrer);
        $urlFull = $this->_formatUtf8Code($urlFull);
        $urlBase = substr($urlFull, 0, strpos($urlFull, '?'));
        $urlBase = empty($urlBase) ? $urlFull : $urlBase;
        $data['url'] = $urlBase;
        $data['url_full'] = $urlFull;

        $urlFullPre = Yii::$app->request->get('url_pre', '');
        $urlPre = substr($urlFullPre, 0, strpos($urlFullPre, '?'));
        $data['url_pre'] = empty($urlPre) ? $urlFullPre : $urlPre;
        $this->_searchEngineDatas($data);

        $newModel = new self($data);
        $newModel->save();
        //$newData = $this->insert(true, $data);

        $session = Yii::$app->session;
        $data['time'] = time();
        $session['session_spread_info'] = $data;

        $this->statisticRecord($newModel, 'visit');

        return $newModel;        
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $time = Yii::$app->params['currentTime'];
            $day = date('Ymd', $time);
            $hour = date('H', $time);
            $this->created_at = $time;
            $this->created_month = date('Ym', $time);
            $this->created_day = date('Ymd', $time);
            $this->created_hour = date('H', $time);
            $this->created_week = date('W', $time);
            $this->created_weekday = date('N', $time);
            $this->ip = Yii::$app->getRequest()->getIP();
            //$this->ip = '123.57.148.73';
            $city = \common\components\IP::find($this->ip);
            $city = is_array($city) ? implode('-', $city) : $city;
            $this->city = $city;
            return true;
        }
        return false;
    }

    public function getAttributeParams()
    {
        return [
            'merchant_id' => [
                'param' => 'cid',
                'default' => '0',
            ],
            'semer_qq' => [
                'param' => 'semtuiguang_QQ',
                'default' => '1298115377',
            ],
            'channel' => [
                'param' => 'qudao',
                'default' => 'bd',
            ],
            'keyword' => [
                'param' => 'wny',
                'default' => '{keyword}',
            ],
            'param_info' => [
                'param' => 'pinfos',
                'default' => '{pagenum}-{adposition}-{matchtype}-{dongtai}-{bidurl}-{haoci}',
            ],
            'channel_info' => [
                'param' => 'qinfo',
                'default' => '123-3-5',
            ],
        ];
    }

    protected function _search($params, $query)
    {
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

        if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
        }

        $startTime = strtotime($this->created_at_start);
        $endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
        $query->andFilterWhere([
            'client_type' => $this->client_type,
            'channel' => $this->channel,
        ]);
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

        return $dataProvider;
    }    

    
    public function getSearchDatas()
    {
        $datas = [
            'clientTypeInfos' => $this->clientTypeInfos,
            'channelInfos' => $this->channelInfos,
        ];

        return $datas;
    }

    protected function _searchEngineDatas(& $data)
    {
        $channel = $data['channel'];
        $channelInfos =$this->channelInfos;
        if (!in_array($channel, array_keys($channelInfos))) {
            return ;
        }
        $keywordSearch = '';
        switch ($channel) {
        case 'bd':
            $keywordSearch = Yii::$app->request->get('word');
            $keywordSearch = empty($keywordSearch) ? Yii::$app->request->get('wd') : $keywordSearch;
            break;
        case 'sg':
            $keywordSearch = Yii::$app->request->get('query', '');
            if (empty($keywordSearch)) {
            $keywordSearch = Yii::$app->request->get('keyword', '');
			}
            if (empty($keywordSearch)) {
            $urlPre = Yii::$app->request->get('url_pre', '');
            $keywordSearch = substr($urlPre, strpos($urlPre, '?') + 7);
			}
			break;
        case '360':
            $keywordSearch = Yii::$app->request->get('q', '');
            if (empty($keywordSearch)) {
                $urlPre = Yii::$app->request->get('url_pre', '');
                $keywordSearch = substr($urlPre, strpos($urlPre, '?') + 3);
            }
            break;
        default:
            $keywordSearch = Yii::$app->request->get('q', '');
            if (empty($keywordSearch)) {
                $urlPre = Yii::$app->request->get('url_pre', '');
                $keywordSearch = substr($urlPre, strpos($urlPre, '?') + 3);
            }
            break;
        }
        $data['keyword_search'] = $this->_formatutf8Code($keywordSearch);
    }

    protected function _formatUtf8Code($string)
    {
        if (empty($string)) {
            return '';
        }
        if (!preg_match('%^(?:
            [\x09\x0A\x0D\x20-\x7E]              # ASCII
            | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
            | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
            | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
            | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
            | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
            | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
            | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
            )*$%xs', $string)
        ) {
            $string = mb_convert_encoding($string, 'utf-8', 'gbk');
        }
        return $string;
    }
}
