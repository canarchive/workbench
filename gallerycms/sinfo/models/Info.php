<?php

namespace gallerycms\sinfo\models;

use Yii;
use common\models\GallerycmsModel;
use yii\helpers\ArrayHelper;

class Info extends GallerycmsModel
{
    use SinfoTrait;

    public static function tableName()
    {
        return '{{%article}}';
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
            [['name'], 'required'],
            [['orderlist', 'thumb', 'status'], 'default', 'value' => 0],
			[['description', 'content', 'editor', 'sort', 'site_code'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
            'site_code' => '站点代码',
            'sort' => '类别',
            'name' => '标题',
            'thumb' => '缩略图',
            'description' => '描述',
            'orderlist' => '排序',
            'editor' => '编辑',
            'content' => '内容',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

	public function getSortInfos()
	{
		$datas = [
            'smobile' => '手机号抓取',
            'svisitor' => '访客号码收集',
            'sqq' => 'QQ抓取软件',
            'market' => '移动端营销神器',
		];	
		return $datas;
	}

    public function getSiteCodeInfos()
    {
        $datasSource = require Yii::getAlias('@gallerycms') . '/config/sinfo/site-infos.php';
        $datas = [];
        foreach ($datasSource as $key => $data) {
            $datas[$key] = $data['name'];
        }
        return $datas;
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('info', $fields);

		return true;
	}	

	public function getInfos($where, $limit = 100)
	{
        $where = array_merge($where, ['status' => 1]);
		$infos = $this->find()->select('id, name, description, created_at')->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			//$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);

		return $info;
	}

    public function getInfosForIndex()
    {
        $sorts = $this->getSortInfos();
        $infos = [];
        foreach ($sorts as $sort => $name) {
            $subInfos = $this->getInfos(['sort' => $sort], 7);
            $infos[$sort]['name'] = $name;
            $infos[$sort]['subInfos'] = $subInfos;
        }

        return $infos;
    }
}
