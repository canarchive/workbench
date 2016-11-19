<?php

namespace gallerycms\models;

use common\models\gallerycmsModel;

class FriendlinkAbstract extends GallerycmsModel
{
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
            [['name', 'url'], 'required'],
            [['orderlist', 'status', 'logo'], 'default', 'value' => 0],
            [['sort', 'pagerank', 'contact', 'mobile', 'qq', 'email', 'wechat', 'description'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'sort' => '类型',
            'url' => 'URL',
            'orderlist' => '排序',
            'logo' => 'LOGO',
            'pagerank' => '权重',
            'contact' => '联系人',
            'mobile' => '手机号',
            'qq' => 'QQ',
            'email' => 'EMAIL',
            'wechat' => '微信',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'description' => '描述',
            'status' => '状态',
        ];
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '停用',
            '1' => '正常',
        ];
        return $datas;
    }

    public function getSortInfos()
    {
        $datas = [
            'index' => '首页',
            'index-merchant' => '商家官网',
        ];
        return $datas;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $fields = ['logo'];
        $this->_updateSingleAttachment('friendlink', $fields);

        return true;
    }
}
