<?php
namespace gallerycms\eale\models;

use common\models\GallerycmsModel;

class Guestbook extends GallerycmsModel
{
    use EaleTrait;

    public static function tableName()
    {
        return '{{%guestbook}}';
    }
    public function rules()
    {
        return [
			[['reply'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名字',
            'mobile' => '手机号',
            'qq' => 'QQ',
            'email' => 'E-mail',
            'address' => '地址',
            'message' => '留言',
            'callback' => '回访时间段',
            'site_code' => '留言网站',
            'page' => '留言页面',
            'created_at' => '创建时间',
            'reply_at' => '答复时间',
            'reply' => '回访记录',
        ];
    }

    public function beforeSave($insert)
    {
        if (!$insert) {
            $this->reply_at = time();
        }
        return true;
    }

    public function getCallbackInfos()
    {
        $datas = [
            '0' => '随时',
            '1' => '上班时间',
            '2' => '下班时间',
        ];
        return $datas;
    }
}
