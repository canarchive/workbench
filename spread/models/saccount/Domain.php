<?php

namespace spread\models\saccount;

use Yii;
use yii\helpers\ArrayHelper;
use merchant\models\Merchant;

class Domain extends BaseModel
{
    public static function tableName()
    {
        return '{{%sem_domain}}';
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
            [['status'], 'default', 'value' => 0],
            [['created_at','updated_at','stat_code',], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'code' => '代码',
            'domain_pc' => 'PC布局',
            'domain_mobile' => 'M布局',
            'stat_code' => '代码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getDomainMobileInfos()
    {
        $datas = [
            '0' => '没有移动端',
            '1' => '有移动端',
        ];
        return $datas;
    }

    public function getDomainPcInfos()
    {
        $datas = [
            '0' => '没有PC端',
            '1' => '有PC端',
        ];
        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '暂停使用',
            '1' => '正常',
        ];
        return $datas;
    }
    public function getInfo($where)
    {
        $info = $this->findOne($where);
        return $info;
    }

    public function getMobileDomain()
    {
        $alias = "@m.{$this->code}.spreadurl";
        return Yii::getAlias($alias);
    }

    public function getPcDomain()
    {
        $alias = "@{$this->code}.spreadurl";
        return Yii::getAlias($alias);
    }
}
