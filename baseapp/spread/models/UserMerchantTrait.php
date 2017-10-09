<?php

namespace baseapp\spread\models;

use Yii;

trait UserMerchantTrait
{
    public $userName;
    public $houseAddress;
    public $houseRegion;
    public $houseArea;
    public $houseType;
    public $houseSort;
    public $note;

    public static function tableName()
    {
        return '{{%user_merchant}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家',
            'service_id' => '客服',
            'mobile' => '手机号',
            'sort' => '装修类别',
            'house_id' => '房屋',
            'created_at' => '派单时间',
            'updated_at' => '更新时间',
            'note' => '备注',
            'status' => '状态',
			'userName' => '姓名',
			'houseAddress' => '房屋地址',
			'houseRegion' => '区县',
			'houseArea' => '房屋面积',
			'houseType' => '户型',
			'houseSort' => '房屋类别',
            'interval_time' => '派单时间',
			'view_at' => '查看时间',
            'name' => '名称',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '' => '派单',
            'back_reply' => '申请退单',
            'back_confirm' => '确认退单',
        ];

        return $datas;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $dispatch = $this->_newModel('dispatch', true);
        $dispatch->changeFromMerchant($this, $insert);

        return true;
    }    

    public function viewInfo($merchantIds, $ids)
    {
        $ids = explode(',', $ids);
        if (count($ids) > 50) {
            return ['status' => 400, 'message' => '请求有误'];
        }
        $infos = $this->find()->where(['id' => $ids])->indexBy('id')->all();
        foreach ($infos as $id => $info) {
            if (!in_array($info['merchant_id'], $merchantIds)) {
                return ['status' => 400, 'message' => '你没有查看这些信息的权限'];
            }
        }
        $datas = [];
        foreach ($infos as $id => $info) {
            if (!$info->view_at) {
                $info->view_at = Yii::$app->params['currentTime'];
                $info->update(false);
            }
            $datas[$id]['mobile'] = $info['mobile'];
            $datas[$id]['viewAt'] = date('Y-m-d H:i:s', $info->view_at);
        }

        return ['status' => 200, 'message' => 'OK', 'datas' => $datas];
    }

    public function getDispatchInfo()
    {
        $where = ['mobile' => $this->mobile, 'house_id' => $this->house_id];
        $dModel = $this->_newModel('dispatch');
        $info = $dModel->find()->where($where)->one();

        return $info;
    }

    public function getDispatch_id()
    {
        return $this->dispatchInfo['id'];
    }

	protected function _formatInfos($infos)
	{
        $guestbookModel = $this->_newModel('guestbook', true);
        foreach ($infos as & $info) {
            $userInfo = $this->_newModel('user')->find()->where(['mobile' => $info['mobile']])->orderBy(['id' => SORT_DESC])->one();
            $houseInfo = $this->_newModel('house')->findOne($info['house_id']);
            //$info = $info->toArray();
            $info['userName'] = !empty($userInfo) ? $userInfo->name : '';
            $info['houseRegion'] = !empty($houseInfo) ? $houseInfo->region : '';
            $info['houseAddress'] = !empty($houseInfo) ? $houseInfo->address : '';
            $info['houseArea'] = !empty($houseInfo) ? $houseInfo->house_area : '';
            $info['houseType'] = !empty($houseInfo) && !empty($houseInfo->house_type) ? $houseInfo->houseTypeInfos[$houseInfo->house_type] : '';
            $info['houseSort'] = !empty($houseInfo) && !empty($houseInfo->house_sort) ? $houseInfo->houseSortInfos[$houseInfo->house_sort] : '';
            $guestbookInfo = $guestbookModel->find()->where(['user_merchant_id' => $info['id']])->orderBy('reply_at DESC')->one();
            $info['note'] = isset($guestbookInfo['reply']) ? $guestbookInfo['reply'] : '';
			if (!$info['view_at']) {
				$info['mobile'] = substr_replace($info['mobile'], '******', 3, 6);
			}
        }

		return $infos;
	}

    public function getIntervalTime()
    {
        $user = $this->_newModel('user')->find()->where(['id' => $this->user_id])->one();
        if (empty($user)) {
            return '';
        }
        return $this->formatTimestampShow($this->created_at - $user->created_at);
    }

	public function getUserModel()
	{
        return $this->_newModel('user')->find()->where(['mobile' => $this->mobile])->orderBy(['id' => SORT_DESC])->one();
	}

	public function getGuestbookInfos()
	{
        return $this->_newModel('guestbook', true)->find()->where(['user_merchant_id' => $this->id])->orderBy('reply_at DESC')->all();
	}

	public function getGuestbookModel()
	{
        return $this->_newModel('guestbook', true)->find()->where(['user_merchant_id' => $this->id])->orderBy('reply_at DESC')->one();
	}

    public function addGuestbook($data)
    {
        $data['mobile'] = $this->mobile;
        $data['merchant_id'] = $this->merchant_id;
        $data['user_merchant_id'] = $this->id;
        $data['created_at'] = Yii::$app->params['currentTime'];
        $model = $this->_newModel('guestbook', true, $data);
        $model->insert(false);
    }

    public function getIsLock()
    {
        $diff = ($this->created_at + 86400) - Yii::$app->params['currentTime'];
        if ($diff > 0) {
            return $this->formatTimestampShow($diff);
        }
        return true;
    }
}
