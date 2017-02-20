<?php

namespace gallerycms\house\models;

use Yii;
use common\helpers\Tree;
use common\models\GallerycmsModel;

class AskSort extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ask_sort}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            //['code', 'unique', 'targetClass' => '\gallerycms\house\models\AskSort', 'message' => '代码已经被使用。'],
            [['parent_code'], 'filterParent'],
            [['orderlist'], 'default', 'value' => 0],
            [['parent_code'], 'default', 'value' => ''],
            [['meta_title', 'meta_keyword', 'meta_description'], 'safe'],
        ];
    }

    /**
     * Use to loop detected.
     */
    public function filterParent()
    {
        $parent = self::findOne(['code' => $this->parent_code]);
        if (empty($parent)) {
            $this->addError('parent_code', '父分类不存在');
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'parent_code' => '父级代码',
            'code' => '代码',
            'listorder' => '排序',
            'meta_title' => 'SEO名称',
            'meta_keyword' => 'SEO关键字',
            'meta_description' => 'SEO描述',
            'status' => '状态',
        ];
    }

    /**
     * Get region parent
     * @return \yii\db\ActiveQuery
     */
    public function getAskSortParent()
    {
        return $this->hasOne(AskSort::className(), ['code' => 'parent_code']);
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
        $datas = $this->getSubInfos('');
        $infos = [];
        foreach ($datas as $data) {
            foreach ($data['sub'] as $info) {
                $infos[$info['code']] = $info;
            }
            unset($data['sub']);
            $infos[$data['code']] = $data;
        }

        $datas = $this->getLevelInfos($infos, 'code', 'parent_code', 'name', '');
        return $datas;
    }

    /**
     * Get the islog
     *
     * @return array
     */
    public function getStatusInfos()
    {
        $datas = [
            '0' => '不显示',
            '1' => '显示',
        ];
        return $datas;
    }

    public function checkInfo($code, $level = 1)
    {
        $info = self::findOne(['code' => $code]);
        if (empty($info)) {
            return ['status' => 400, 'message' => '指定地区不存在'];
        }

        /*if ($info->level < $level) {
            return ['status' => 400, 'message' => '请指定更精确的地区'];
        }*/

        return true;
    }

    public function getSubInfos($parentCode, $getSub = true)
    {
        $infos = $this->_subInfos($parentCode);
        if ($getSub) {
            foreach ($infos as $key => & $info) {
                $info['sub'] = $this->_subInfos($info['code']);
            }
        }
        return $infos;
    }

    protected function _subInfos($parentCode)
    {
        $infos = self::find()->where(['parent_code' => $parentCode])->asArray()->all();
        return $infos;
    }

    public function getInfoByCode($code)
    {
        static $datas;
        if (isset($datas[$code])) {
            return $datas[$code];
        }

        $info = self::findOne(['code' => $code]);
        $datas[$code] = $info;

        return $info;
    }
}