<?php

namespace gallerycms\eale\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Sample extends GallerycmsModel
{
    use EaleTrait;
	public $picture;
    
    public static function tableName()
    {
        return '{{%sample}}';
    }

    public function getBehaviorCodes()
    {
        return array_merge(parent::getBehaviorCodes(), ['timestamp']);
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'orderlist', 'status'], 'default', 'value' => '0'],
            [['content'], 'default', 'value' => ''],
			[['title', 'recommend', 'description', 'content', 'tag', 'search'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'title' => '副标题',
            'sort' => '类别',
            'thumb' => '缩略图(建议尺寸383 X 244）',
			'orderlist' => '排序',
            'description' => '描述',
            'recommend' => '推荐位',
            'status' => '是否显示',
            'tag' => '标签',
            'content' => '内容',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function getRecommendInfos()
    {
        $datas = [
            'iealecn' => '推荐到摄影培训机构',
        ];
        return $datas;
    }

	protected function getSortInfos()
	{
		$datas = [
			'commercial' => '广告摄影',
			'fashion' => '服装摄影',
            'star' => '艺人摄影',
            'people' => '个人写真',
            'wedding' => '婚纱摄影',
            'campus' => '校园志',
            'student' => '学生专题',
            'studentwork' => '学生作品',
            'work' => '右视觉作品',
		];
		return $datas;
	}	

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->tag = !empty($this->tag) ? implode($this->tag, ',') : '';
            $newContent = preg_replace_callback('/<img .*>/Us', function ($matches) {
                $str = $matches[0];
                $str = preg_replace('/alt=[\'|"].*[\'|"]/Us', 'alt="{{PINFONAME}}"', $str);
                if (strpos($str, 'alt') === false) {
                    $str = str_replace('<img ', '<img alt="{{PINFONAME}}" ', $str);
                }
                return $str;
            },
            $this->content);
            $this->content = str_replace('{{PINFONAME}}', $this->name, $newContent);
            $content = strip_tags($this->content);
            $this->search = "{$this->name} {$this->title} {$this->sortInfos[$this->sort]} {$this->tag} {$content}";
            return true;
        }
        return false;
        //echo $this->tag; exit();
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('sample', $fields);
		$this->_updateMulAttachment('sample', 'picture');

		return true;
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

        $condition = [ 
            'info_table' => 'sample',
            'info_field' => 'picture',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $pictureInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $pictureInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->picture = $pictureInfos;

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		//$infos = $this->find()->select($this->_getSelect())->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		$infos = $this->find()->select($this->_getSelect())->where($where)->indexBy('id')->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

    protected function _getSelect()
    {
        return 'id, name, title, thumb';
    }

	protected function _formatInfos($infos)
	{
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}
        return $infos;
    }

    public function getTagInfos()
    {
        static $datas = null;
        if (is_null($datas)) {
            $datas = require Yii::getAlias('@gallerycms') . '/config/eale/tag-infos.php';
        }
        return $datas;

        $sort = $this->sort;
        if (empty($sort) || !in_array($sort, array_keys($datas))) {
            return $datas;
        }
        return $datas[$sort];
    }
}
