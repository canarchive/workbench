<?php

namespace gallerycms\merchant\models;

use Yii;
use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Merchant extends MerchantModel
{
    use MerchantTrait;
	//public $companyInfo;
	public $aptitude;
	public $nameUrl;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant}}';
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
            [['name', 'city_code', 'code'], 'required'],
            ['code', 'unique', 'targetClass' => '\gallerycms\merchant\models\Merchant', 'message' => 'This username has already been taken.'],
			[['logo', 'picture'], 'integer'],
			[['logo', 'picture', 'category_id', 'status', 'num_owner', 'num_realcase', 'num_working', 'score', 'praise'], 'default', 'value' => '0'],
			[['aptitude', 'decoration_sort', 'hotline', 'postcode', 'brief', 'address', 'description', 'name_full'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商家ID',
            'name' => '名称',
            'name_full' => '全称',
            'breif' => '简介',
			'company_id' => '所属公司',
			'category_id' => '分类',
			'decoration_sort' => '类别',
			'orderlist' => '排序',
            'logo' => 'LOGO',
            'picture' => '描述配图',
            'aptitude' => '资质',
			'hotline' => '电话',
			'postcode' => '邮编',
			'address' => '地址',
			'num_owner' => '业主数',
			'num_designer' => '设计师数',
			'num_realcase' => '实景数',
			'num_working' => '工地数',
			'num_comment' => '评论数',
			'score' => '评分',
			'praise' => '口碑值',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
			'ownerinfo' => '业主',
			'designerinfo' => '设计师',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '未启用',
			'1' => '正常',
			'2' => '停用',
		];
		return $datas;
	}	

	public function beforeSave($insert)
	{
		return true;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo', 'picture'];
		$this->_updateSingleAttachment('merchant', $fields);
		$this->_updateMulAttachment('merchant', 'aptitude');
        if ($insert) {
            $this->fillAttrs();
            $this->addRelateInfos();
        } elseif ($this->num_owner == 0 && $this->num_comment == 0) {
            $r = $this->addRelateInfos();
			var_dump($r);
        }

        $this->_updateRelateInfos();

		return true;
	}	

	public function afterDelete()
	{
        $this->_deleteRelateInfos();
	}

	protected function getCompanyInfos()
	{
		$infos = ArrayHelper::map(Company::find()->all(), 'id', 'name');
		return $infos;
	}

	protected function getCategoryInfos()
	{
		$infos = ArrayHelper::map(Category::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getInfo($where)
	{
		$info = static::find()->where($where)->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['logo'] = $info->getAttachmentUrl($info['logo']);
		$info['picture'] = $info->getAttachmentUrl($info['picture']);
		//$info['companyInfo'] = Company::findOne(['code' => $info['city_code']])->toArray();
		$domain = Yii::$app->params['baseDomain'];
		$url = $info->getInfoUrl();//"http://{$info->city_code}.{$domain}/sj-{$info->id}.html";
		$info['nameUrl'] = "<a href='{$url}' target='_blank'>{$info->name}</a>";
		$info['score'] = empty($info['score']) ? 98 : $info['score'];

        $condition = [ 
            'info_table' => 'merchant',
            'info_field' => 'aptitude',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $aptitudeInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $aptitudeInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->aptitude = $aptitudeInfos;

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['logo'] = $info->getAttachmentUrl($info['logo']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}

	public function getRealcaseInfos()
	{
		$model = new Realcase();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getWorkingInfos()
	{
		$model = new Working();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getDesignerInfos()
	{
		$model = new Designer();
		//$infos = $model->getInfos(['merchant_id' => $this->id]);
		$infos = $model->getInfos([]);
        //print_r($infos);exit();

		return $infos;
	}

	public function getCommentInfos()
	{
		$model = new MerchantComment();
		$infos = $model->getInfos(['merchant_id' => $this->id, 'status' => 1], 30);
		//$infos = $model->getInfos([], 30);

		return $infos;
	}

	public function getOwnerInfos()
	{
		$model = new Owner();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function addRelateInfos($numOne = null)
	{
        $elems = [
            'designer' => new Designer, 
            'owner' => new Owner,
            'realcase' => new Realcase,
            'working' => new Working,
            'comment' => new MerchantComment,
        ];

        $where = ['city_code' => $this->city_code, 'merchant_id' => 0];
        $ownerNum = $numOne !== null ? $numOne : rand(9, 21);
        var_dump($ownerNum);
        foreach ($elems as $elem => $model) {
            $num = $numOne !== null ? $numOne : ($elem == 'owner' ? rand(3, $ownerNum) : rand(5, 10));
            $datas = $model->find()->where($where)->orderBy(['orderlist' => SORT_ASC])->limit($num)->all();
            foreach ($datas as $data) {
                $rResult = true;
                $data['merchant_id'] = $this->id;
                $data['created_at'] = Yii::$app->params['currentTime'] - rand(1, 86400);
                $data['updated_at'] = $data['created_at'];
                $data['status'] = $this->status;
                if (in_array($elem, ['realcase', 'working', 'comment'])) {
                    $rResult = $data->fillOwnerInfo($elem);
                }
                if ($elem == 'owner') {
                    $rResult = $data->fillDesignerInfo();
                }
                if (empty($rResult)) {
                    $num--;
                    continue;
                }
                if ($elem == 'comment') {
                    $data['content'] = $data->formatContent();
                }
                $data->update(false);
            }
            $this->updateNum("num_$elem", 'add', $num);
        }
	}

	public function _updateRelateInfos()
	{
	    Designer::updateAll(['status' => $this->status], "merchant_id = {$this->id}");
	    Owner::updateAll(['status' => $this->status], "merchant_id = {$this->id}");
	    Realcase::updateAll(['status' => $this->status], "merchant_id = {$this->id}");
	    Working::updateAll(['status' => $this->status], "merchant_id = {$this->id}");
	    MerchantComment::updateAll(['status' => $this->status], "merchant_id = {$this->id}");
	}

	public function _deleteRelateInfos()
	{
	    Designer::updateAll(['merchant_id' => 0, 'status' => 0], "merchant_id = {$this->id}");
	    Owner::updateAll(['merchant_id' => 0, 'status' => 0], "merchant_id = {$this->id}");
	    Realcase::updateAll(['merchant_id' => 0, 'status' => 0], "merchant_id = {$this->id}");
	    Working::updateAll(['merchant_id' => 0, 'status' => 0], "merchant_id = {$this->id}");
	    MerchantComment::updateAll(['merchant_id' => 0, 'status' => 0], "merchant_id = {$this->id}");
	}

    public function getInfoUrl()
    {
		$domain = Yii::$app->params['baseDomain'];
		$url = "http://sj_{$this->code}.{$domain}/";
        return $url;
    }

	protected function _formatInfos($infos)
	{
		foreach ($infos as $key => & $info) {
			$info['logo'] = $info->getAttachmentUrl($info['logo']);
		}
		return $infos;
	}

    public function fillAttrs($attrs = ['sort', 'style', 'price'])
    {
        $mInfos = $this->merchantSortInfos;
        if (in_array('sort', $attrs)) {
            $sorts = array_keys($mInfos['decoration_sort']['values']);
            $sNum = rand(4, 8);
            $sortKeys = array_rand($sorts, $sNum);
            $sortStr = '';
            foreach ($sortKeys as $key) {
                $sortStr .= $sorts[$key] . ',';
            }
            $this->decoration_sort = $sortStr;
        }

        if (in_array('price', $attrs)) {
            $prices = [
                ['one', 'two', 'three'],
                ['two', 'three', 'four', 'five'],
                ['three', 'four', 'five'],
                ['four', 'five', 'size'],
                ['five', 'six', 'seven'],
            ];
            $pIndex = rand(0, 4);
            $pKeys = $prices[$pIndex];
            $pStr = implode($pKeys, ',');
            $this->budget = $pStr . ',';
        }

        if (in_array('style', $attrs)) {
            $styles = array_keys($mInfos['style']['values']);
            $styleNum = rand(3, 6);
            $styleKeys = array_rand($styles, $styleNum);
            $styleStr = '';
            foreach ($styleKeys as $key) {
                $styleStr .= $styles[$key] . ',';
            }
            $this->style = $styleStr;
        }

        $this->update(false);
    }
}
