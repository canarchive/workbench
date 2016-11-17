<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

class BaseModel extends ActiveRecord
{
    use ModelAttachmentTrait;
    use ModelLevelTrait;

    protected function getTimestampBehaviorComponent($createField = 'created_at', $updateField = 'updated_at')
    {
        return [
            'class' => TimestampBehavior::className(),
            'attributes' => [
                ActiveRecord::EVENT_BEFORE_INSERT => [$createField, $updateField],
                ActiveRecord::EVENT_BEFORE_UPDATE => [$updateField],
            ],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $this->writeManagerLog();
        return true;
    }

    public function afterDelete()
    {
        parent::afterDelete();

        $this->writeManagerLog();
        return true;
    }

    protected function writeManagerLog()
    {
        if (Yii::$app->id != 'app-backend' || Yii::$app->controller->id == 'site' || Yii::$app->controller->id == 'backend-upload') {
            return true;
        }

        $attributes = $this->attributes;
        $infos = get_object_vars($this);

        $infos = array_merge($attributes, $infos);
        $data = [];
        foreach ($infos as $key => $value) {
            if (is_array($value)) {
                $value = implode(',', $value);
            }

            $data[$key] = $value;
        }
        $managerInfo = Yii::$app->params['managerInfo'];
        $menuInfo = Yii::$app->params['currentMenu'];

        $infos = [
            'manager_id' => $managerInfo['id'],
            'manager_username' => $managerInfo['username'],
            'roles' => $managerInfo['roles'],
            'menu_code' => $menuInfo['code'],
            'menu_name' => $menuInfo['name'],
            'data' => serialize($data),
            'ip' => Yii::$app->request->userIP,
            'created_at' => time(),
        ];

        $managerlogModel = new \backend\models\Managerlog($infos);
        Yii::$app->params['managerlogModel'] = $managerlogModel;
        $managerlogModel->insert();

        return true;
    }

    public function checkMobile($mobile)
    {
        $validator = new \common\validators\MobileValidator();
        $valid =  $validator->validate($mobile);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '手机号码格式有误'];
        }

        return true;
    }

    /**
     * 验证邮箱格式
     *
     * @param $email string
     * @return boolean
     */
    public function checkEmail($email)
    {
        $validator = new \yii\validators\EmailValidator();
        $valid =  $validator->validate($email);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '邮箱有误'];
        }

        return true;
    }

    public function searchTimeElem(& $query, $field = 'created_at')
    {   
        $startAttr = $field . '_start';
        $endAttr = $field . '_end';
        $startTime = strtotime($this->$startAttr);
        $endTime = $this->$endAttr > 0 ? strtotime($this->$endAttr) : time();
        $query->andFilterWhere(['>=', $field, $startTime]);
        $query->andFilterWhere(['<', $field, $endTime]);
    }   

    protected function getCompanyInfos()
    {
        $infos = ArrayHelper::map(Company::find()->select('code, name')->where(['status' => [1, 2]])->all(), 'code', 'name');
        return $infos;
    }

    public function updateNum($field, $type)
    {   
        $num = $type == 'add' ? 1 : -1; 
        $this->updateCounters(['num_' . $field => $num]);
    }   

    public function statisticRecord($data, $type)
    {   
return ;
        $keywordTypes = ['visit', 'signup'];
        if (in_array($type, $keywordTypes)) {
            $keyword = new \spread\models\statistic\Keyword();
            $keyword->recordData($data, $type);
        }   

        $reportTypes = ['visit', 'signup'];
        if (in_array($type, $reportTypes)) {
            $report = new \spread\models\statistic\Report();
            $report->recordData($data, $type);
        }   

        $reportServiceTypes = ['signup'];
        if (in_array($type, $reportServiceTypes)) {
            $reportServiceService = new \spread\models\statistic\ReportService();
            $reportServiceService->recordData($data, $type);
        }   

        $dispatchTypes = ['dispatch'];
        if (in_array($type, $dispatchTypes)) {
            $dispatch = new \spread\models\statistic\Dispatch();
            $dispatch->recordData($data, $type);
        }   
    }   

    public function getSearchDatas()
    {
        return [];
    }
}
