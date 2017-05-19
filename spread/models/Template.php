<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;

class Template extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_template}}';
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
            [['code', 'name'], 'required'],
            [['merchant_id', 'status', 'have_pc', 'have_mobile'], 'default', 'value' => 0],
            [['layout'], 'safe'],
        ];
    }    

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => '商家ID',
            'code' => '代码',
            'name' => '名称',
            'layout' => '布局',
            'have_mobile' => '移动端',
            'have_pc' => 'PC端',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getHaveMobileInfos()
    {
        $datas = [
            '0' => '没有移动端',
            '1' => '有移动端',
        ];
        return $datas;
    }

    public function getHavePcInfos()
    {
        $datas = [
            '0' => '没有PC端',
            '1' => '有PC端',
        ];
        return $datas;
    }

    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }
}
