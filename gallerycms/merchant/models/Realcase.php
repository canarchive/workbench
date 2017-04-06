<?php

namespace gallerycms\merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;

/**
 * This is the model class for table "merchant".
 */
class Realcase extends MerchantModel
{
    use MerchantTrait;
	public $design_sketch;
	//public $merchantInfo;
	public $pictureDesignInfo;
	public $name;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%realcase}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_code', 'merchant_id', 'owner_id'], 'required'],
			[['thumb', 'picture_design', 'picture_origin', 'orderlist'], 'integer'],
			[['thumb', 'picture_design', 'picture_origin', 'orderlist', 'status', 'design_concept'], 'default', 'value' => '0'],
			[['brief', 'design_sketch', 'picture_design', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '案例ID',
			'city_code' => '城市代码',
			'merchant_id' => '所属公司',
			'owner_id' => '业主ID',
            'brief' => '简介',
            'thumb' => '缩略图',
            'picture_origin' => '户型图',
            'picture_design' => '设计图',
            'design_sketch' => '效果图',
			'design_concept' => '设计理念',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb', 'picture_origin', 'picture_design'];
		$this->_updateSingleAttachment('realcase', $fields);
		$this->_updateMulAttachment('realcase', 'design_sketch');

		if ($insert) {
			$this->merchantInfo->updateNum('realcase', 'add');
			$ownerInfo = $this->ownerInfo;
			$ownerInfo->realcase_id = $this->id;
			$r = $ownerInfo->update(false, ['realcase_id']);
		}

		return true;
	}	

	public function afterDelete()
	{
		$this->merchantInfo->updateNum('realcase', 'minus');
		$this->ownerInfo->realcase_id = 0;
		$this->ownerInfo->update(false, ['realcase_id']);
	}

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);

		$pictureDesign = $this->getAttachmentModel()->findOne($info['picture_design']);
		if (!empty($pictureDesign)) {
			$info['picture_design'] = $pictureDesign->getUrl();
		}
		$info['pictureDesignInfo'] = $pictureDesign;

		$ownerInfo = $info->ownerInfo;
		$info['name'] = $ownerInfo['community_name'] . ' ' . $ownerInfo['style'] . ' ' . $ownerInfo['area'] . '平米 ' . $ownerInfo['decoration_price'] . '万元';

        $condition = [ 
            'info_table' => 'realcase',
            //'info_field' => 'design_sketch',
            //'info_field' => 'picture',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $designSketchInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $designSketchInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'info_id' => $attachment['info_id'],
                'id' => $attachment['id'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->design_sketch = $this->_formatImgForShow($designSketchInfos);

		return $info;
	}

	public function getInfos($where, $limit = 30)
	{
        $where = [];
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		$ownerModel = new Owner();
		foreach ($infos as $key => & $info) {
			$ownerInfo = $ownerModel->getInfo($info['owner_id']);
		    $info['name'] = $ownerInfo['community_name'] . ' ' . $ownerInfo['style'] . ' ' . $ownerInfo['area'] . '平米 ' . $ownerInfo['decoration_price'] . '万元';
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getInfoUrl()
	{
		$domain = Yii::$app->params['baseDomain'];
		$url = "http://{$this->city_code}.{$domain}/shj-{$this->id}.html";

		return $url;
	}

	protected function _formatInfos($infos)
	{
		$ownerModel = new Owner();
		foreach ($infos as $key => & $info) {
			$ownerInfo = $ownerModel->getInfo($info['owner_id']);
		    $info['name'] = $ownerInfo['community_name'] . ' ' . $ownerInfo['style'] . ' ' . $ownerInfo['area'] . '平米 ' . $ownerInfo['decoration_price'] . '万元';
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}
		return $infos;
	}
}
