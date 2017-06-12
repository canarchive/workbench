<?php
namespace baseapp\merchant\models;

use Yii;
use baseapp\merchant\models\Merchant;

trait SignupFormTrait
{
    protected $_datas;
    public $userModel;
    public $isMobile;
    public $existUser;
    public $inputFieldExts = [];

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['smsSignup']);
    }

    /**
     * Signup.
     *
     * @return User|null the saved model or null if saving fails
     */
    protected function _signup()
    {
        $this->_formatDatas();
        $isValid = $this->validateDatas();
        if (empty($isValid)) {
            return false;
        }

        $datas = $this->_datas;
        $infoExist = false;//$this->getUserModel()->findOne(['merchant_id' => $datas['merchant_id'], 'mobile' => $datas['mobile']]);
        if ($infoExist) {
            $infoExist->signup_at = Yii::$app->params['currentTime'];
            $infoExist->signup_num = $infoExist->signup_num + 1;
            $infoExist->update(false);
            $this->addError('error', '您的手机号已报名成功');
            $this->existUser = true;
            return false;
        }

        $conversionInfo = $this->conversionSuccessLog($datas);
        $datas['conversion_id'] = $conversionInfo['id'];

        $userModel = $this->getUserModel(true);
        $userInfo = $userModel->addUser($datas);
        if (!$userInfo) {
            $this->addError('mobile', '报名失败，请您重新报名');
            return false;
        }

        $serviceInfo = $userInfo->dealService();
        $userInfo->updateAfterInsert($conversionInfo);

        $this->sendSms($userInfo->merchantInfo, $datas['mobile']);
        $this->sendSmsService($userInfo->merchantInfo, $datas, $serviceInfo);
        return ['status' => 200, 'message' => 'OK'];
    }

    protected function _formatDatas()
    {
        $inputFields = [
            'cid', 'name', 'mobile', 'note', 'message', 'position',
        ];
        $inputFields = array_merge($inputFields, $this->inputFieldExts);

        $datas = [];
        foreach ($inputFields as $field) {
            $datas[$field] = trim(strip_tags(Yii::$app->request->post($field)));
        }

        $datas['merchant_id'] = intval($datas['cid']);
        $datas['client_type'] = $this->isMobile ? 'h5' : 'pc';
        $this->_datas = $datas;
        return $datas;
    }

    protected function validateDatas()
    {
        return true;
    }

    public function getUserModel($returnNew = false)
    {
    }
}
