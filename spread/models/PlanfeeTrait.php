<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Account;
use spread\models\Plan;

trait PlanfeeTrait
{
    public function import()
    {   
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        if (empty($this->channel) || !in_array($this->channel, array_keys($this->channelInfos))) {
            exit('请选择渠道');
        }
        if (empty($this->client_type) || !in_array($this->client_type, array_keys($this->clientTypeInfos))) {
            exit('请选择客户端类型');
        }
        $datas = $this->_importDatas();
        $fieldInfo = null;
        if (empty($datas)) {
            $datas = $this->getFormatDescription();
        }
        $fieldInfo = $this->channelFields($this->channel);
        //print_r($datas);exit();

        $i = 0;
        foreach ((array) $datas as $subDatas) {
        foreach ((array) $subDatas as $key => $data) {
            $result = $this->_writeInfo($data, $fieldInfo);
            $i++;
        }
        }
        return ['number' => $i];
    }

    protected function _writeInfo($data, $fieldInfo = null)
    {
        $info = [
            'channel' => $this->channel,
            'client_type' => $this->client_type,
        ];
        foreach ($fieldInfo['fields'] as $fKey => $field) {
            $info[$field] = isset($data[$fKey]) ? trim($data[$fKey]) : '0';
        }
        $day = $info['created_day'];
        $time = intval(str_replace(['-', '/'], ['', ''], $day));
        if (empty($time)) {
            return false;
        }
        if (empty(floatval($info['fee'])) && empty($info['show_num']) && empty($info['hit_num'])) {
            return false;
        }
        
        $time = strtotime($this->_formatDay($day));
        $info = array_merge($info, [
            'created_day' => date('Ymd', $time),
            'created_month' => date('Ym', $time),
            'created_week' => date('W', $time),
            'created_weekday' => date('N', $time),
            'account_id' => $this->getAccountId($info['account_code']),
            'plan_id' => $this->getPlanId($info['account_code'], $info['plan_name']),
            'merchant_id' => $this->getPlanId($info['account_code'], $info['plan_name'], 'merchant_id'),
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
            return false;
        }
        $self = new self($info);
        $r = @ $self->save();
        return true;
    }

    protected function getFormatDescription()
    {
        $str = $this->description;
        $infos = explode("\r", $str);
        $datas = [];
        foreach ($infos as $info) {
            $info = trim($info);
            if (empty($info)) {
                continue;
            }
            $info = preg_replace("/\s+/", ' ', $info);
            $subInfo = array_filter(explode(' ', $info));
            if (empty($subInfo)) {
                continue;
            }
            $fields = ['A' => 0, 'B' => 1, 'C' => 2, 'D' => 3, 'E' => 4, 'F' => 5, 'G' => 6, 'H' => 7];
            $data = [];
            foreach ($fields as $field => $key) {
                $data[$field] = isset($subInfo[$key]) ? $subInfo[$key] : '0';
            }
            $datas[] = $data;
        }
        return [$datas];
    }

    protected function channelFields($channel)
    {
        $datas = [
            'bd' => [
                //'startLine' => 9,
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
            'bdztc' => [
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'plan_name',
                    'C' => 'account_code',
                    'D' => 'show_num',
                    'E' => 'hit_num',
                    'F' => 'fee',
                ],
            ],
            'gdt' => [
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'plan_name',
                    'C' => 'account_code',
                    'D' => 'show_num',
                    'E' => 'hit_num',
                    'F' => 'fee',
                ],
            ],
            'zht' => [
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'plan_name',
                    'C' => 'account_code',
                    'D' => 'show_num',
                    'E' => 'hit_num',
                    'F' => 'fee',
                ],
            ],
        ];
        return $datas[$channel];
    }
}
