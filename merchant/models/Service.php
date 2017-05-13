<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;

class Service extends MerchantModel
{
    public $password_user;

    public static function tableName()
    {
        return '{{%service}}';
    }

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function rules()
    {
        return [
            [['name', 'mobile'], 'required'],
            [['merchant_id', 'manager_id', 'status', 'status_sendmsg', 'serviced_num', 'serviced_times', 'distributed_at'], 'default', 'value' => 0],
            ['password_user', 'string', 'min' => 6, 'when' => function($model) { return $model->password_user != ''; }],
            [['code', 'status', 'mobile_ext', 'password_user'], 'safe'],
        ];
    }    

    public function attributeLabels()
    {
        return [
            'id' => '客服ID',
            'merchant_id' => '商家ID',
            'name' => '名字',
            'code' => '代码',
            'mobile' => '手机号',
            'mobile_ext' => '抄送手机号',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
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

    /*public static function getServiceInfo($merchantId)
    {
		$where = $merchantId > 0 ? ['merchant_id' => $merchantId, 'status' => 1] : ['status' => 1];
        $orderBy = ['distributed_at' => SORT_ASC];
        $info = self::find()->where($where)->orderBy($orderBy)->one();

        return $info;
    }*/

    public function updateServiceInfo()
    {
        $this->distributed_at = Yii::$app->params['currentTime'];
        $this->update();
        $this->updateCounters(['serviced_num' => 1]);
        
        return ;
    }

    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }

    public function getUserAllInfos($where = [])
    {
        $user = new User();
        $infos = $user->find()->where($where)->all();//getInfos();

        return $infos;
    }

    public function getManagerInfos()
    {
        $infos = $this->getUserAllInfos(['role' => 'service-admin']);
        $infos = ArrayHelper::map($infos, 'id', 'name');
        return $infos;
    }

    public function getUserInfos()
    {
        $infos = $this->getUserAllInfos();
        $infos = ArrayHelper::map($infos, 'id', 'name');
        return $infos;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $user = new User();
        $user->addUserByService($this);

        return true;
    }

    public function addServiceByUser($user)
    {
        $mobile = $user->mobile;
        $merchantIds = explode(',', $user->merchant_id);
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
                'user_id' => $user->id,
                'merchant_id' => $merchantId,
            ];
            $newModel = new self($data);
            $newModel->insert(false);
        }
    }
}
