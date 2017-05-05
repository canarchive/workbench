<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use common\models\Company;

/**
 * This is the model class for table "merchant".
 */
class Merchant extends MerchantModel
{
    //public $companyInfo;

    public static function tableName()
    {
        return '{{%merchant}}';
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
            [['name', 'city_code'], 'required'],
            [['logo', 'status', 'orderlist'], 'integer'],
            [['logo', 'status', 'orderlist'], 'default', 'value' => '0'],
            [['msg', 'homeurl', 'name_full', 'sort', 'hotline', 'postcode', 'brief', 'address', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'name_full' => '全称',
            'city_code' => '分站代码',
            'sort' => '类别',
            'orderlist' => '排序',
            'logo' => 'LOGO',
            'hotline' => '电话',
            'postcode' => '邮编',
            'address' => '地址',
            'breif' => '简介',
			'msg' => '通知短信',
			'homeurl' => '官网地址',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    protected function getIsJoinedInfos()
    {
        $datas = [
            '0' => '未合作',
            '1' => '合作',
        ];
        return $datas;
    }

    protected function getStatusInfos()
    {
        $datas = [
            '0' => '关注',
            '1' => 'SEM托管合作',
            '2' => 'CPA合作',
            '3' => 'CPS合作',
			'99' => '暂停合作',
        ];
        return $datas;
    }

    protected function getSortInfos()
    {
        $datas = [
            'decoration' => '装修',
            'shoot' => '摄影',
        ];
        return $datas;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $fields = ['logo'];
        $this->_updateSingleAttachment('merchant', $fields);

        return true;
    }

	public function getInfo($where)
	{
		$info = static::find()->where($where)->one();//->toArray();
		if (empty($info)) {
			return [];
		}

		$info['logo'] = $info->getAttachmentUrl($info['logo']);
		return $info;
	}

    public function getSpreadModel($modelName)
    {
        $sort = $this->sort;
        if (empty($sort)) {
            return null;
        }

        $modelName = ucfirst($modelName);
        $class = "\spread\\{$sort}\models\searchs\\{$modelName}";
        return new $class();
    }
}
