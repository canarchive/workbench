<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Account;
use spread\models\Plan;

class Planfee extends BaseModel
{
    public $import;
    public $export;
    public $order_diff;
    public $description;

    public static function tableName()
    {
        return '{{%planfee}}';
    }

    public function rules()
    {
        return [
            [['created_day', 'channel', 'account_id', 'plan_id'], 'required'],
            [['description', 'created_month', 'import', 'account_code', 'plan_name', 'client_type', 'show_num', 'hit_num', 'visit_num', 'success_num', 'valid_num', 'keyword_rank', 'keyword_cost', 'transfer_page', 'transfer_guest', 'transfer_mobile'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_day' => '日期',
            'client_type' => '客户端类型',
            'channel' => '渠道',
            'account_code' => '账户代码',
            'plan_name' => '计划名称',
            'account_id' => '账户ID',
            'plan_id' => '计划ID',
            'fee' => '消费',
            'import' => '导入文件',
            'show_num' => '展示次数',
            'hit_num' => '点击次数',
        ];
    }

    public function import()
    {   
        if (empty($this->channel) || !in_array($this->channel, array_keys($this->channelInfos))) {
            exit('请选择渠道');
        }
        if (empty($this->client_type) || !in_array($this->client_type, array_keys($this->clientTypeInfos))) {
            //exit('请选择渠道');
        }
        if ($this->channel == 'zht') {
            return $this->_importZht();
        }
        $datas = $this->_importDatas();
        var_dump($datas);exit();
        if ($datas === false) {
            exit($this->getFirstError('import'));
        }
        $fieldInfo = $this->channelFields($this->channel);

        $i = 0;
        foreach ($datas as $key => $data) {
            if ($key <= $fieldInfo['startLine']) {
                continue;
            }
            $info = [
                'channel' => $this->channel,
                'client_type' => $this->client_type,
            ];
            foreach ($fieldInfo['fields'] as $fKey => $field) {
                $info[$field] = $data[$fKey];
            }
            $time = strtotime(str_replace('-', '', $info['created_day']));
            $info = array_merge($info, [
                'created_day' => date('Ymd', $time),
                'created_month' => date('Ym', $time),
                'created_week' => date('W', $time),
                'created_weekday' => date('N', $time),
                'account_id' => $this->getAccountId($info['account_code']),
                'plan_id' => $this->getPlanId($info['account_code'], $info['plan_name']),
            ]);

            $where = [
                'created_day' => $info['created_day'],
                'client_type' => $this->client_type,
                'account_code' => $info['account_code'],
                'plan_name' => $info['plan_name'],
                //'account_id' => $this->getAccoutId(),
            ];
            $infoOld = $this->find()->where($where)->one();
            if (!empty($infoOld)) {
                continue;
            }
            $self = new self($info);
            $r = @ $self->save();
            $i++;
        }
        return $i;
    }

    protected function _importZht()
    {
        $str = $this->description;
        $infos = explode("\r", $str);
        print_r($infos);
        foreach ($infos as $info) {
            $info = trim($info);
            if (empty($info)) {
                continue;
            }
            $info = preg_replace("/\s+/", ' ', $info);
            $subInfo = explode(' ', $info);
            $data = [];
            $data = [
                'channel' => $this->channel,
                'client_type' => $this->client_type,
            ];
            $data['created_day'] = intval(str_replace('-', '', $subInfo[0]));
            $data['show_num'] = intval($subInfo[1]);
            $data['hit_num'] = intval($subInfo[2]);
            $data['fee'] = floatval($subInfo[3]);
            if (empty($data['created_day']) || (empty($data['show_num']) && empty($data['hit_num']) && empty($data['fee']))) {
                continue;
            }
            $time = strtotime($data['created_day']);
            $data = array_merge($data, [
                'created_day' => date('Ymd', $time),
                'created_month' => date('Ym', $time),
                'created_week' => date('W', $time),
                'created_weekday' => date('N', $time),
                'account_id' => 15,
                'plan_id' => 1222,
            ]);

            $where = [
                'created_day' => $data['created_day'],
                'client_type' => $this->client_type,
                'account_id' => 15,
                'plan_id' => 1222,
            ];
            $dataOld = $this->find()->where($where)->one();
            if (!empty($dataOld)) {
                continue;
            }
            $self = new self($data);
            $r = @ $self->save();
        }
        exit();

    }

    protected function channelFields($channel)
    {
        $datas = [
            'bd' => [
                'startLine' => 9,
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'plan_name',
                    'C' => 'account_code',
                    'D' => 'show_num',
                    'E' => 'hit_num',
                    'F' => 'fee',
                    //'G' => '',
                    //'H' => '',
                    'I' => 'transfer_page',
                    'J' => 'transfer_guest',
                    'K' => 'transfer_mobile',
                ],
            ],
            'sg' => [
                'startLine' => 2,
                'fields' => [
                    'B' => 'created_day',
                    'C' => 'account_code',
                    'D' => 'plan_name',
                    'E' => 'fee',
                    'F' => 'hit_num',
                    'G' => 'show_num',
                    //'H' => '',
                    //'I' => '',
                    //'J' => 'keyword_rank',
                    'J' => 'keyword_cost',
                ],
            ],
            '360' => [
                'startLine' => 1,
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'account_code',
                    //'C' => '',
                    'D' => 'plan_name',
                    'E' => 'show_num',
                    'F' => 'hit_num',
                    //'G' => '',
                    'H' => 'fee',
                    //'I' => '',
                    //'J' => '',
                    //'K' => '',
                ],
            ],
            'zht' => [
                'startLine' => 1,
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'account_code',
                    //'C' => '',
                    'D' => 'plan_name',
                    'E' => 'show_num',
                    'F' => 'hit_num',
                    //'G' => '',
                    'H' => 'fee',
                    //'I' => '',
                    //'J' => '',
                    //'K' => '',
                ],
            ],
        ];
        return $datas[$channel];
    }

    public static function getSemInfo($infos, $where, $type)
    {
        static $existDatas = [];
        $cMark = '';
        foreach ($infos as $key => $value) {
            if ($key == 'sem_account') {
                unset($infos[$key]);
                $infos['account_code'] = $value;
            }
            $cMark .= $key . $value;
        }
        if (isset($existDatas[$cMark][$type])) {
            return $existDatas[$cMark][$type];
        }

        $fields = array_keys($infos);
        $query = self::find();
        $fieldsStr = implode(',', $fields);
        $fieldsStr .= ", SUM(`hit_num`) AS `hit_num`, SUM(`fee`) As `fee`";
        $query->select($fieldsStr);
        $query->where($where);
        $query->groupBy($fields);
        $datas = $query->all();
        foreach ($datas as $data) {
            $mark = '';
            foreach ($fields as $field) {
                $mark .= $field . $data[$field];
            }
            $existDatas[$mark]['hit_num'] = $data['hit_num'];
            $existDatas[$mark]['fee'] = $data['fee'];
        }

        $existDatas[$cMark]['hit_num'] = isset($existDatas[$cMark]['hit_num']) ? $existDatas[$cMark]['hit_num'] : 0;
        $existDatas[$cMark]['fee'] = isset($existDatas[$cMark]['fee']) ? $existDatas[$cMark]['fee'] : 0;
        return $existDatas[$cMark][$type];
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'created_day' => ['type' => 'common'],
            'channel' => ['type' => 'key'],
            'client_type' => ['type' => 'key'],
            'account_code' => ['type' => 'common'],
            'plan_name' => ['type' => 'common'],
            //'account_id' => ['type' => 'point', 'table' => 'account'],
            //'plan_id' => ['type' => 'point', 'table' => 'plan'],
            'show_num' => ['type' => 'common'],
            'hit_num' => ['type' => 'common'],
            'fee' => ['type' => 'common'],
        ];
    }

    protected function getAccountId($account)
    {
        static $datas = [];
        $key = md5($this->channel . $account);
        if (isset($datas[$key])) {
            return $datas[$key];
        }

        $where = ['channel' => $this->channel, 'code' => $account];
        $aModel = new Account();
        $info = $aModel->getInfo($where);
        if (!empty($info)) {
            $id = $datas[$key] = $info['id'];
            return $id;
        }
        $id = $data[$key] = '99999';
        return $id;
    }

    protected function getPlanId($account, $plan)
    {
        static $datas = [];
        $key = md5($this->channel . $account . $plan);
        if (isset($datas[$key])) {
            return $datas[$key];
        }

        $accountId = $this->getAccountId($account);
        $where = ['channel' => $this->channel, 'account_id' => $accountId, 'name' => $plan];
        $aModel = new Plan();
        $info = $aModel->getInfo($where);
        if (!empty($info)) {
            $id = $datas[$key] = $info['id'];
            return $id;
        }
        $nModel = new Plan($where);
        $nModel->insert();
        $id = $data[$key] = $nModel->id;
        return $id;
    }
}
