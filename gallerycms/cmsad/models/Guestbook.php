<?php
namespace gallerycms\cmsad\models;

use common\models\GallerycmsModel;

class Guestbook extends GallerycmsModel
{
    public static function tableName()
    {
        return '{{%guestbook}}';
    }
    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            ['content', 'filter', 'filter' => 'strip_tags'],
            [['mobile', 'contact', 'company_name', 'gender', 'city', 'content'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
			['email', 'email'],
        ];
    }

    public function behaviors()
    {
        $behaviors = [
            $this->timestampBehaviorComponent,
        ];
        return $behaviors;
    }

    public function doSubmitInfo()
    {
        if ($this->validate()) {
            $this->city = $this->city == '-' ? '' : $this->city;
            $this->insert();
            return ['status' => 200, 'message' => 'OK'];
        }

        return ['status' => 400, 'message' => '信息有误，请检查后重新提交'];
    }
}
