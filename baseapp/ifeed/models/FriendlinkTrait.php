<?php

namespace baseapp\ifeed\models;

Trait FriendlinkTrait
{
    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
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

    public function getSortInfos()
    {
        $datas = [
            'index' => '首页',
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

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'name' => ['type' => 'common'],
            'sort' => ['type' => 'key'],
            'url' => ['type' => 'common', 'method' => 'atag'],
            'logo' => ['type' => 'imgtag'],
            'orderlist' => ['type' => 'change', 'formatView' => 'raw', 'width' => '50'],
            'pagerank' => ['type' => 'common'],
            'contact' => ['type' => 'common'],
            'mobile' => ['type' => 'common'],
            'qq' => ['type' => 'common'],
            'email' => ['type' => 'common'],
            'wechat' => ['type' => 'common'],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
            'description' => ['type' => 'common', 'listNo' => true],
        ];
    }
}
