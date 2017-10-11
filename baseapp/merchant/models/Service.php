<?php

namespace baseapp\merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\User;

class Service extends MerchantModel
{
    public $password_user;
    public $create_user;

    public static function tableName()
    {
        return '{{%service}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name', 'mobile', 'merchant_id'], 'required'],
            [['merchant_id', 'user_id', 'manager_id', 'status', 'status_sendmsg', 'serviced_num', 'serviced_times', 'distributed_at'], 'default', 'value' => 0],
            [['merchant_id', 'mobile'], 'checkUnique'],
            ['password_user', 'string', 'min' => 6, 'when' => function($model) { return $model->password_user != ''; }],
            [['code', 'status', 'mobile_ext', 'password_user', 'create_user'], 'safe'],
        ];
    }    

    public function checkUnique()
    {
        if ($this->mobile == $this->getOldAttribute('mobile') && $this->merchant_id == $this->getOldAttribute('merchant_id')) {
            return true;
        }
        $old = $this->getInfo(['merchant_id' => $this->merchant_id, 'mobile' => $this->mobile]);
        if (!empty($old)) {
            $this->addError('oldpassword', '该客服已存在!');
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'user_id' => '用户ID',
			'manager_id' => '主管ID',
            'merchant_id' => '商家ID',
            'name' => '名字',
            'code' => '代码',
            'mobile' => '手机号',
            'mobile_ext' => '抄送手机号',
			'serviced_num' => '服务人数',
			'serviced_times' => '服务次数',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
			'distributed_at' => '分配时间',
            'status' => '状态',
            'status_sendmsg' => '报名通知',

        ];
    }

    public function getStatusSendmsgInfos()
    {
        $datas = [
            '0' => '不发送',
            '1' => '发送',
            '2' => '抄送',
        ];
        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '停用',
            '1' => '正常',
        ];
        return $datas;
    }

    public static function getDispatchService($where)
    {
		$where = array_merge($where, ['status' => 1]);
        $orderBy = ['distributed_at' => SORT_ASC];
        $info = self::find()->where($where)->orderBy($orderBy)->one();
        $info = empty($info) ? self::findOne(1) : $info;

        return $info;
    }

    public function updateServiceInfo()
    {
        $this->distributed_at = Yii::$app->params['currentTime'];
        $this->update();
        $this->updateCounters(['serviced_num' => 1]);
        
        return ;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if (!empty($this->create_user)) {
            $user = new User();
            $user->addUserByService($this);
        }

        return true;
    }

    public function getManagerInfos($where)
    {
        $privInfo = $this->_privInfo();
        $infos = $this->getPointAll('merchant-user', ['where' => $where]);

        $merchantIds = isset($privInfo['merchant_id']) ? $privInfo['merchant_id'] : [];
        if (empty($merchantIds)) {
            return ArrayHelper::map($infos, 'id', 'name');
        }
        foreach ($infos as $key => $info) {
            $priv = false;
            foreach ($merchantIds as $id) {
                $mId = $info['merchant_id'];
                if (empty($mId)) {
                    continue;
                }
                if (strpos($mId, ',' . $id . ',') !== false) {
                    $priv = true;
                    break;
                }
            }
            if (empty($priv)) {
               unset($infos[$key]);
            }
        }
        
        $infos = ArrayHelper::map($infos, 'id', 'mobile');
        return $infos;
    }

    public function addServiceByUser($user)
    {
        $mobile = $user->mobile;
        $merchantIds = array_filter(explode(',', $user->merchant_id));
        if (empty($mobile) || empty($merchantIds)) {
            return ;
        }

        foreach ($merchantIds as $merchantId) {
            $where = ['merchant_id' => $merchantId, 'mobile' => $mobile];
            $info = $this->find()->where($where)->one();
            if (!empty($info)) {
                continue;
            }

            $data = [
                'mobile' => $mobile,
                'name' => $user->name,
                'code' => $user->id,
                'user_id' => $user->id,
                'merchant_id' => $merchantId,
            ];
            $newModel = new self($data);
            $newModel->insert(false);
        }
    }

    public function getCreateUserInfos()
    {
        $datas = [
            '0' => '不生成',
            '1' => '生成',
        ];
        return $datas;
    }

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'code' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'mobile' => ['type' => 'common'],
            'user_id' => ['type' => 'point', 'table' => 'merchant-user'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'manager_id' => ['type' => 'point', 'table' => 'merchant-user'],
            'distributed_at' => ['type' => 'timestamp'],
            //'mobile_ext' => ['type' => 'common', 'listNo' => true],
            'serviced_num' => ['type' => 'common', 'listNo' => true],
            'serviced_times' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
        ];
    }
}
