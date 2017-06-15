<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use baseapp\auth\models\AuthBase;
use baseapp\merchant\models\Merchant;

class User extends AuthBase
{
    public $password_new_repeat;
    public $password_old;
    public $password_new;
    public $merchant_show;

    public static function getDb()
    {
        return Yii::$app->dbMerchant;
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function scenarios()
    {
        return [
            'create' => ['name', 'mobile', 'role', 'email', 'password', 'merchant_show', 'status', 'merchant_id'],
            'update' => ['name', 'email', 'role', 'password_new', 'merchant_show', 'status', 'merchant_id'],
            //'edit' => ['email', 'mobile', 'password', 'password_new_repeat', 'password_new', 'password_old'],
            'edit-info' => ['email'],//, 'mobile'],
            'edit-password' => ['password_old', 'password_new', 'password_new_repeat'],
            //'edit-password' => ['password_old', 'password_new', 'password_new_repeat'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile'], 'required'],
            ['mobile', 'unique', 'targetClass' => '\merchant\models\User', 'message' => 'This mobile has already been taken.'],
            [['status'], 'default', 'value' => 0],

            [['password_old'], 'required', 'on' => ['edit-password']],
            [['password_old'], 'checkPasswordOld', 'on' => ['edit-password']],
            ['password_new', 'required', 'on' => ['create', 'edit-password']],
            ['password_new', 'string', 'min' => 6, 'when' => function($model) { return $model->password_new != ''; }],
            ['password_new', 'compare', 'on' => ['edit-password']],

            [['email', 'mobile', 'password_new', 'password_new_repeat'], 'safe', 'on' => ['edit']],
            [['email', 'mobile', 'status', 'merchant_show', 'merchant_id'], 'safe', 'on' => ['create', 'update']],
        ];
    }

    public function checkPasswordOld()
    {
        $result = Yii::$app->security->validatePassword($this->password_old, $this->getOldAttribute('password'));
        if (!$result) {
            $this->addError('password_old', '旧密码错误');
        }
        return $result;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'name' => '姓名',
            'login_num' => '登录次数',
            'password' => '密码',
            'password_old' => '旧密码',
            'password_new' => '新密码',
            'password_new_repeat' => '确认密码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'last_at' => '最后登录时间',
            'mobile' => '手机号',
            'email' => '邮箱',
            'status' => '状态',
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert) {
            $this->setPassword($this->password);
            $this->last_ip = $this->ipInfo['ip'];
            $this->last_at = Yii::$app->params['currentTime'];
        } else if (!empty($this->password_new)) {
            $this->setPassword($this->password_new);
        }

        $this->merchant_id = strval($this->merchant_id);
        if (!is_null($this->merchant_show)) {
            $this->merchant_id = implode(',', (array) $this->merchant_show);
        }

        return true;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if (in_array($this->role, ['service', 'service-admin']) && !empty($this->mobile)) {
            $service = new Service();
            $service->addServiceByUser($this);
        }

        return true;
    }

    public static function getRoleInfos()
    {
        return [
            '' => '访客',
			'admin' => '管理员',
			'valid' => '看有效信息',
			'service' => '客服',
			'service-admin' => '客服主管',
        ];
    }

    public static function getStatusInfos()
    {
        return [
            '1' => '正常',
            '0' => '没激活',
            '99' => '锁定',
        ];
    }

    public function getInfo($where)
    {
        return static::findOne($where);
    }

    public function getUserMerchantInfos()
    {
        if (empty($this->merchant_id)) {
            return [];
        }
        $ids = explode(',', $this->merchant_id);
        $datas = [];
        foreach ($this->merchantAllInfos as $info) {
            if (in_array($info['id'], $ids)) {
                $datas[$info['id']] = $info['name'];
            }
        }
        return $datas;
    }

    public function getMerchantAllInfos()
    {
        $infos = Merchant::find()->indexBy('id')->all();
        return $infos;
    }

    public function getMerchantInfos()
    {
        $infos = $this->getMerchantAllInfos();
        $infos = ArrayHelper::map($infos, 'id', 'name');
        return $infos;
    }

    public function getUserMerchantStr()
    {
        $datas = $this->getUserMerchantInfos();
        $str = implode((array) $datas, ',');
        return $str;
    }

    public function addUserByService($service)
    {
        $mobile = $service['mobile'];
        $merchantId = $service['merchant_id'];
        $passwordUser = $service['password_user'];
        $info = $this->find()->where(['mobile' => $mobile])->one();
        if (!empty($info)) {
            $merchantIds = explode(',', $info->merchant_id);
            $update = false;
            if (!in_array($merchantId, $merchantIds)) {
                $info->merchant_id = implode(',', array_merge($merchantIds, [$merchantId]));
                $update = true;
            }
            if (!empty($passwordUser)) {
                $info->password_new = $passwordUser;
                $update = true;
            }
            $update && $info->update(false);
            return ;
        }

        $data = [
            'merchant_id' => $merchantId,
            'role' => 'service',
            'mobile' => $mobile,
        ];
        if (!empty($passwordUser)) {
            $data['password'] = $passwordUser;
        }
        $newModel = new self($data);
        $newModel->scenario = 'create';
        $newModel->insert();
        return ;
    }
}
