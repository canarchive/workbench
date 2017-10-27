<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use spread\models\Account;
use spread\models\Plan;

class Planfee extends BaseModel
{
    use PlanfeeTrait;
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
            [['merchant_id', 'description', 'created_month', 'import', 'account_code', 'plan_name', 'client_type', 'show_num', 'hit_num', 'visit_num', 'success_num', 'valid_num', 'keyword_rank', 'keyword_cost', 'transfer_page', 'transfer_guest', 'transfer_mobile'], 'safe'],
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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'created_day' => ['type' => 'common'],
            'channel' => ['type' => 'key'],
            'client_type' => ['type' => 'key'],
            'account_code' => ['type' => 'common'],
            'plan_name' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
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
        $id = $data[$key] = '9999';
        return $id;
    }

    protected function getPlanId($account, $plan, $field = 'id')
    {
        static $datas = [];
        $key = md5($this->channel . $account . $plan . $field);
        if (isset($datas[$key])) {
            return $datas[$key];
        }

        $accountId = $this->getAccountId($account);
        $where = ['channel' => $this->channel, 'account_id' => $accountId, 'name' => $plan];
        $aModel = new Plan();
        $info = $aModel->getInfo($where);
        if (empty($info)) {
            $info = new Plan($where);
            $info->insert();
        }
        $id = $datas[$key] = $info->$field;
        return $id;
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
}
