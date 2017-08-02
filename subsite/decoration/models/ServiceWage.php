<?php

namespace subsite\decoration\models;

use baseapp\statistic\models\UpdateServiceDispatchTrait;

class ServiceWage extends ModelBase
{
    use UpdateServiceDispatchTrait;

    public static function tableName()
    {
        return '{{%service_wage}}';
    }

    public function rules()
    {
        return [
            [['service_id', 'created_month'], 'required'],
            [['status', 'wage_ext'], 'default', 'value' => 0],
            [['note'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'service_id' => '客服ID',
            'created_month' => '月份',
            'info_num' => '报名数',
            'info_valid_num' => '报名有效数',
            'info_valid_overall_num' => '报名整装有效数',
            'info_valid_office_num' => '报名公装有效数',
            'info_valid_part_num' => '报名局装有效数',

            'mobile_num' => '手机数',
            'overall_mobile_num' => '整装手机数',
            'office_mobile_num' => '局装手机数',
            'part_mobile_num' => '公装手机数',

            'note' => '备注',
            'status' => '状态',
        ];
    }

    public function getStatusInfos()
    {
        return [
            '0' => '进行中',
            '1' => '公示中',
            '2' => '已锁定',
        ];
    }

    public function updateWage()
    {
        $infos = $this->find()->all();
        $sql = '';
        $userModel = new User();
        $merchantModel = new UserMerchant();
        foreach ($infos as $info) {
            $checkStatus = $this->_checkStatus($info);
            if ($checkStatus !== true) {
                continue;
            }

            $this->_updateInfoNum($info, $userModel);
            $this->_updateDispatchNum($info, $merchantModel);
        }
    }

    protected function _updateInfoNum($info, $userModel)
    {
        $where1 = "`service_id_first` = {$info['service_id']}";
        $where2 = "`service_id` = {$info['service_id']}";
        $where3 = "FROM_UNIXTIME(`created_at`, '%Y%m') = {$info['created_month']}";
        $datas = [
            'info_num' => "{$where1} AND {$where3}",
            'info_valid_num' => "{$where2} AND {$where3} AND `status` = 'valid'",
            'info_valid_overall_num' => "{$where2} AND {$where3} AND `status` = 'valid' AND `status_sort` = 'overall'",
            'info_valid_part_num' => "{$where2} AND {$where3} AND `status` = 'valid' AND `status_sort` = 'part'",
            'info_valid_office_num' => "{$where2} AND {$where3} AND `status` = 'valid' AND `status_sort` = 'office'",
        ];
        $sqlBase = "SELECT COUNT(DISTINCT(`mobile`)) AS `count` FROM `wd_user` WHERE {{WHERE}}";
        foreach ($datas as $field => $where) {
            $sql = str_replace('{{WHERE}}', $where, $sqlBase);
            $info->$field = $this->db->createCommand($sql)->queryScalar();
        }
        $info->update(false);
        return ;
    }

    protected function _updateDispatchNum($info, $model)
    {
        $sql = $model->db->createCommand('UPDATE `wd_user_merchant` SET `status_ext` = 0')->execute();
        $where = "`status_ext` = 0 AND `status` = '' AND `service_id` = {$info['service_id']} AND `created_month` = {$info['created_month']}";
        $datas = [
            'mobile_num' => "{$where}",
            'overall_mobile_num' => "{$where} AND `sort` = 'overall'",
            'part_mobile_num' => "{$where} AND `sort` = 'part'",
            'office_mobile_num' => "{$where} AND `sort` = 'office'",
        ];
        $sqlBase = "SELECT COUNT(DISTINCT(`mobile`)) AS `count` FROM `wd_user_merchant` WHERE {{WHERE}};";
        $sqlUpdate = "UPDATE `wd_user_merchant` SET `status_ext` = 1 WHERE {{WHERE}};";
        foreach ($datas as $field => $where) {
            $sql = str_replace('{{WHERE}}', $where, $sqlBase);
            $sql .= str_replace('{{WHERE}}', $where, $sqlUpdate);

            $info->$field = $this->db->createCommand($sql)->queryScalar();
            echo $field . '--';
            echo $info->$field . '<br />';
        }
        print_r($info);
        $info->update(false);
        return ;
    }

    protected function _checkStatus($info)
    {
        return true;
        if (in_array($info['status'], [1, 2])) {
            return $info['status'];
        }
        $month = $info->created_month;
        $monthStr = substr($month, 0, 4) . '-' . substr($month, 4, 2);
        $firstDay = date('Y-m-01', strtotime($monthStr));
        $lastDay = date('Y-m-d', strtotime("$firstDay +1 month -1 day"));
        $lastTime = strtotime($lastDay . ' 23:59:59');

        $diff = time() - $lastTime;
        if ($diff > 86400 * 9) {
            $info['status'] = 2;
            $info->update(false);
            return 2;
        }

        if ($diff > 86400 * 5) {
            $info['status'] = 1;
            $info->update(false);
        }
        return true;
    }
}
