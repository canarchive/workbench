<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use backend\models\Manager;

class Service extends MerchantModel
{
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
            [['code', 'status', 'mobile_ext'], 'safe'],
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

    public function getManagerAllInfos()
    {
        $managerModel = new Manager();
        $infos = $managerModel->getInfos();

        $infos = ArrayHelper::map($infos, 'id', 'username');
        return $infos;
    }

    public function getManagerInfos($returnAll = false)
    {
        $managerModel = new Manager();
        $infos = $managerModel->getInfosByRoles(['客服']);

        if ($returnAll) {
            return $infos;
        }

        $infos = ArrayHelper::map($infos, 'id', 'username');
        return $infos;
    }
}
