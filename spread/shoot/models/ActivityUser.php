<?php

namespace spread\shoot\models;

use common\models\SpreadModel;

class ActivityUser extends SpreadModel
{
    public $user;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%activity_user}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'use_id' => '用户ID',
            'mobile' => '手机号',
            'name' => '名字',
            'client_type' => '来源',
            'signup_at' => '报名时间',
            'signup_ip' => '报名IP',
            'signup_city' => '报名城市',
            'signup_channel' => '报名渠道',
            'signin_at' => '签到时间',
            'message' => '留言',
            'note' => '备注',
            'keyword' => '搜索关键字',
            'valid_status' => '是否有效',
            'callback_at' => '第一次回访',
            'callback_again' => '是否再次回访',
            'status' => '状态',
        ];
    }

    public static function addUser($data)
    {
        $userModel = new \spread\models\User();
        $user = $userModel->getUserInfo($data);
        if (empty($user)) {
            return false;
        }

        $ip = \Yii::$app->getRequest()->getIP();
        $city = \common\components\IP::find($ip);
        $city = is_array($city) ? implode('-', $city) : $city;
        $data = [
            'signup_at' => time(),
            'info_id' => $data['info_id'],
            'signup_ip' => $ip,
            'signup_city' => $city,
            'mobile' => $data['mobile'],
            'name' => $data['name'],
            'client_type' => $data['client_type'],
            'message' => $data['message'],
            'user_id' => $user->user_id,
        ];

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }
        $newModel->user = $user;

        return $newModel;
    }

    public function insert($runValidation = true, $attributes = null)
    {
        if (($primaryKeys = static::getDb()->schema->insert($this->tableName(), $attributes)) === false) {
            return false;
        }
        foreach ($primaryKeys as $name => $value) {
            $id = $this->getTableSchema()->columns[$name]->phpTypecast($value);
            $this->setAttribute($name, $id);
            $values[$name] = $id;
        }

        $changedAttributes = array_fill_keys(array_keys($values), null);
        $this->setOldAttributes($values);
        return true;
    }        

    public function getValidStatusInfos()
    {
        $datas = [
            '' => '未知',
            'ok' => '有效',
            'no_call' => '无效号码',
            'no_answer' => '挂断',
            'no_need' => '没需求',
            'no_time' => '没时间',
            'no_near' => '太远了',
        ];

        return $datas;
    }

    public function getCallbackAgainInfos()
    {
        $datas = [
            0 => '',
            1 => '再次回访',
        ];

        return $datas;
    }
}
