<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\saccount\Account;
use spread\models\saccount\Plan;
use common\models\spread\Visit;

class Planfee extends BaseModel
{
    public $company_id;
    public $import;
    public $export;
    public $order_diff;

    public static function tableName()
    {
        return '{{%planfee}}';
    }

    public function rules()
    {
        return [
            [['created_day', 'channel', 'account_id', 'plan_id'], 'required'],
            [['import', 'client_type', 'show_num', 'hit_num', 'rate_click', 'cost_click', 'times_visit', 'times_visit_success', 'rate_visit_success', 'rate_click_success', 'cost_success', 'keyword_rank', 'keyword_cost', 'transfer_page', 'transfer_guest', 'transfer_mobile'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_day' => '日趋',
            'client_type' => '客户端类型',
            'channel' => '渠道',
            'account_id' => '推广账户',
            'plan_id' => '推广计划',
            'fee' => '消费',
            'import' => '导入文件',
            'show_num' => '展示次数',
            'hit_num' => '点击次数',
        ];
    }

    public function getAccountInfos()
    {
        $infos = ArrayHelper::map(Account::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function getPlanInfos()
    {
        $infos = ArrayHelper::map(Plan::find()->select('id, name')->all(), 'id', 'name');
        return $infos;
    }

    public function import()
    {   
        if (empty($this->channel) || !in_array($this->channel, array_keys($this->channelInfos))) {
            exit('请选择渠道');
        }
        if (empty($this->client_type) || !in_array($this->client_type, array_keys($this->clientTypeInfos))) {
            //exit('请选择渠道');
        }
        $aId = $this->import;
        if (empty($aId)) {
            exit('参数错误');
            $this->addError('error', '参数错误');
            return false;
        }   

        $attachment = \spread\models\Attachment::findOne($aId);
        if (empty($attachment)) {
            exit('上传的文件有误');
            $this->addError('error', '指定的文件参数有误，请重新上传');
            return false;
        }   
        $file = $attachment->getPathBase($attachment->path_prefix) . '/' . $attachment->filepath;
        if (!file_exists($file)) {
            exit('上传的文件有误，请重新上传');
            $this->addError('error', '指定的文件不存在，请重新上传');
            return false;
        }   

        $datas = $this->importDatas($file);
        if (empty($datas)) {
            exit('没有数据');
        }
        //$this->inputUser($datas);
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
            $info['created_day'] = str_replace('-', '', $info['created_day']);

            $where = [
                'created_day' => $info['created_day'],
                'client_type' => $this->client_type,
                'account_id' => $info['account_id'],
                'plan_id' => $info['plan_id'],
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

    protected function channelFields($channel)
    {
        $datas = [
            'bd' => [
                'startLine' => 9,
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'plan_id',
                    'C' => 'account_id',
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
                    'C' => 'account_id',
                    'D' => 'plan_id',
                    'E' => 'fee',
                    'F' => 'hit_num',
                    'G' => 'show_num',
                    //'H' => '',
                    //'I' => '',
                    'J' => 'keyword_rank',
                    'K' => 'keyword_cost',
                ],
            ],
            '360' => [
                'startLine' => 1,
                'fields' => [
                    'A' => 'created_day',
                    'B' => 'account_id',
                    //'C' => '',
                    'D' => 'plan_id',
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

    protected function inputUser($datas)
    {
        //$sql = 'INSERT INTO `wd_user` (`id`, `merchant_id`, `city_code`, `client_type`, `mobile`, `name`, `city_input`, `area_input`, `channel`, `sem_account`, `plan_id`, `unit_id`, `signup_num`, `position`, `note`, `message`, `signup_ip`, `signup_city`, `signup_at`, `keyword`, `keyword_search`, `service_id`, `view_at`, `invalid_status`, `callback_again`, `is_weigh`, `is_order`, `service_num`, `status`, `status_input`, `status_old`, `created_at`, `created_month`, `created_day`, `created_hour`, `created_week`, `created_weekday`) VALUES';
        $sql = 'INSERT INTO `wd_user` (`merchant_id`, `city_code`, `mobile`, `name`, `city_input`, `area_input`, `channel`, `note`, `signup_at`, `service_id`, `created_at`, `created_month`, `created_day`, `created_hour`, `created_week`, `created_weekday`) VALUES';
        $i = 0;
        foreach ($datas as $key => $data) {
            if ($key == 1) { 
                continue;
            }

            $city = $data['B'];
            $cityCode = 'beijing';
            if (strpos($city, '沈阳') !== false) {
                $cityCode = 'shenyang';
            } elseif (strpos($city, '天津') !== false) {
                $cityCode = 'tianjin';
            }
            $time = explode(' ', $data['A']);
            //print_r($time);exit();
            $tMid = explode('/', $time[0]);
            $tmpDay = $tMid[1];
            $tmpDay = strlen($tmpDay) == 1 ? '0' . $tmpDay : $tmpDay;
            $timeStr = $tMid[2] . '0' . $tMid[0] . $tmpDay . ' ' . $time[1];
            $signupAt = strtotime($timeStr);
        $month = date('Ym', $signupAt);
        $day = date('Ymd', $signupAt);
        $hour = date('H', $signupAt);
        $week = date('W', $signupAt);
        $weekday = date('N', $signupAt);
            $area = intval($data['G']);
            $name = strpos($data['C'], '匿名') !== false ? '' : $data['C'];
            $note = $city . '-' . $data['E'] . '-' . $data['F'];
            $mobile = $data['D'];
            $serviceIds = [27, 28, 31];
            $serviceId = $serviceIds[array_rand($serviceIds)];

            $sql .= "('3', '{$cityCode}', '{$mobile}', '{$name}', '{$city}', '{$area}', 'semthird', '{$note}', '{$signupAt}', '{$serviceId}', '{$signupAt}', '{$month}', '{$day}', '{$hour}', '{$week}', '{$weekday}'),";

            //echo $data['A'] . '--' . $name . '--' . $cityCode . '--' . $area . '--' . $mobile . '--' . $timeStr . '--' . $note . '<br />';

            //print_r($data);
        }
            echo $sql . '<br />';
        exit();
    }

    public static function getSemInfo($infos, $where, $type)
    {
        static $existDatas = [];
        $cMark = '';
        foreach ($infos as $key => $value) {
            if ($key == 'sem_account') {
                unset($infos[$key]);
                $infos['account_id'] = $value;
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

    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }
}
