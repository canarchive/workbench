<?php

namespace common\models;

use Yii;
use common\models\PassportModel;
use common\helpers\Tree;

trait TraitMenu
{
    //public $parent_code;
    public $url;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            //['code', 'unique', 'targetClass' => '\backend\models\Menu', 'message' => '代码已经被使用。'],
            [['code'], 'checkCode'],
            [['name'], 'required'],
            [['parent_code'], 'filterParent'],
            [['module', 'controller', 'method', 'islog', 'display', 'extparam'], 'safe'],
            [['orderlist'], 'default', 'value' => 0],
        ];
    }

    public function checkCode()
    {
        $code = $this->code;
        $oldCode = $this->getOldAttribute('code');
        if ($code == $oldCode) {
            return ;
        }
        $old = self::find()->where(['code' => $code])->one();
        if (!empty($old)) {
            $this->addError('code', '菜单已存在');
        }
    }

    public function filterParent()
    {
        $value = $this->parent_code;
        $parent = self::findOne(['code' => $value]);
        if (empty($parent)) {
            $this->addError('parent_code', '父菜单不存在');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '菜单ID',
            'code' => '代码',
            'parent_code' => '父菜单',
            'name' => '名称',
            'module' => '模块',
            'controller' => '控制器',
            'method' => '方法',
            'orderlist' => '排序',
            'islog' => '是否记录日志',
            'display' => '显示位置',
            'extparam' => '附加参数',
        ];
    }

    /**
     * Get menu parent
     * @return \yii\db\ActiveQuery
     */
    public function getMenuParent()
    {
        return $this->hasOne(Menu::className(), ['code' => 'parent_code']);
    }

    /**
     * Get the infos, format the name to a tree
     *
     */
    public function getFormatedInfos()
    {
        $infos = $this->find()->indexBy('code')->asArray()->all();
        $formatedInfos = $this->getTreeInfos($infos, 'code', 'parent_code', 'name', '');

        return $formatedInfos;
    }

    /**
     * Get tree list for select
     *
     * @return array
     */
    public function getSelectInfos()
    {
        $infos = $this->find()->select(['code', 'name', 'parent_code'])->indexBy('code')->asArray()->all();
        $datas = $this->getLevelInfos($infos, 'code', 'parent_code', 'name', '');
        return $datas;
    }

    public function _getModuleDatas($index)
    {
		$datas = require(Yii::getAlias('@baseapp/config/params-menu-modules.php');
		return $datas[$index];
    }

    /**
     * Get the islog
     *
     * @return array
     */
    public function getIslogInfos()
    {
        $datas = [
            '0' => '不记录',
            '1' => '记录',
        ];
        return $datas;
    }

    /**
     * Get the display
     *
     * @return array
     */
    public function getDisplayInfos()
    {
        $datas = [
            '1' => '顶部',
            '2' => '左侧',
            '3' => '右侧顶部',
            '4' => '基于记录',
            '99' => '特定位置',
        ];
        return $datas;
    }
}
