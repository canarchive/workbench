<?php
namespace ifeed\shoot\models;

use common\models\IfeedModel;

class Guestbook extends IfeedModel
{
    use ModelTrait;

    public static function tableName()
    {
        return '{{%guestbook}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            [['content', 'address', 'mobile', 'name', 'price'], 'filter', 'filter' => 'strip_tags'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            [['name', 'price', 'sort', 'content', 'address', 'city_code'], 'safe'],
        ];
    }

    public function doSubmitInfo()
    {
        if ($this->validate()) {
            $this->insert();
            return ['status' => 200, 'message' => 'OK'];
        }

        return ['status' => 400, 'message' => '信息有误，请检查后重新提交'];
    }
}
