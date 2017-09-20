<?php

namespace common\models;

use Yii;
use yii\helpers\Html;
use common\widgets\FileUploadUI;

trait TraitAttachment
{
	public $attachmentCode = 'attachment';
    /**
     * 附件类型的字段信息更新时，是否删除旧的附件，默认删除
     */
    public $deleteAttachment = true;

    protected function getAttachmentModel()
    {}

    public function getAttachmentImg($id, $pointSize = true, $options = [])
    {
        $model = $this->attachmentModel;
        $info = $model->findOne($id);
        if ($info) {
            $info->getUrl();
            $optionsDefault = [
                'style' => ['width' => '100px', 'height' => '80px'],
                'onclick' => 'window.open(this.src);',
            ];
            $options = $pointSize && empty($options) ? $optionsDefault : $options;
            return Yii::$app->formatter->asImage($info->getUrl(), $options);
        }
        return '';
    }

    public function getAttachmentUrl($id)
    {
		$info = $this->getAttachmentInfo($id);
        return empty($info) ? '' : $info->getUrl();
    }

	public function getAttachmentImgtag($table, $field, $forceMain = false, $pointSize = true, $options = null)
	{
		$info = $this->getAttachmentInfo($this->attachmentWhere($table, $field));
		$info = !empty($info) ? $info : ($forceMain ? $info : $this->getAttachmentInfo($this->attachmentWhere($table, $field, false)));
        if ($info) {
            $info->getUrl();
            $optionsDefault = [
                'style' => ['width' => '80px', 'height' => '40px'],
                'onclick' => 'window.open(this.src);',
            ];
            $options = $pointSize && empty($options) ? $optionsDefault : $options;
            return Yii::$app->formatter->asImage($info->getUrl(), $options);
        }
        return '';
	}

	public function getAttachmentInfo($where)
	{
		$where = is_array($where) ? $where : ['id' => $where];
        $model = $this->attachmentModel;
        return $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->one();
	}

    protected function _getThumb($table, $field)
    {
		$thumbUrl = $this->getAttachmentUrl($this->attachmentWhere($table, $field));
        if (empty($thumbUrl)) {
		    $thumbUrl = $this->getAttachmentUrl($this->attachmentWhere($table, $field, false));
        }
        return $thumbUrl;
    }
    public function attachmentWhere($table, $field, $isMaster = true)
    {
        $condition = [ 
            'info_table' => $table,
            'info_field' => $field,
            'info_id' => $this->id,
            'in_use' => 1,
        ];  
        if ($isMaster) {
            $condition['is_master'] = 1;
        }
        return $condition;
    }

    protected function _updateSingleAttachment($table, $fields, $extData = [])
    {
        $attachment = $this->attachmentModel;
        foreach ($fields as $field) {
			if (is_null($this->$field)) {
				continue;
			}
            $attachment->updateInfo($this->$field, $this->id, $extData);

            $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
            $this->deleteAttachment && $attachment->deleteInfo($where, $this->$field);
        }

        return ;
    }

    protected function _updateMulAttachment($table, $field, $extData = [])
    {
		if (is_null($this->$field)) {
			return '';
		}
        $attachment = $this->attachmentModel;
        $ids = array_filter(explode(',', $this->$field));
        foreach ($ids as $id) {
            $attachment->updateInfo($id, $this->id, $extData);
        }

        $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
        $this->deleteAttachment && $attachment->deleteInfo($where, $ids);

        return ;
    }

	public function uploadElem($table, $field, $accept = 'image/*')
	{
		$attachment = $this->attachmentModel;
        $fieldElem = $attachment->getFieldInfos($table, $field);
        return FileUploadUI::widget([
            'model' => $attachment,
            'attribute' => "files[{$field}]",
            'url' => $this->uploadUrl($table, $field, $this->id), 
    		'gallery' => true,
            'fieldOptions' => [
    			'isSingle' => $fieldElem['isSingle'],
    			'idField' => Html::getInputId($this, $field),
                'accept' => $accept
            ],
            'clientOptions' => [
    		    //'dataType' => 'json',
    			'maxFileSize' => $fieldElem['maxSize'] * 1024,
            ],
        ]);
	}

    public function _importDatas()
    {   
        $aId = $this->import;
        if (empty($aId)) {
            $this->addError('import', '参数错误');
            return false;
        }   

        $attachment = $this->attachmentModel->findOne($aId);
        if (empty($attachment)) {
            $this->addError('import', '指定的文件参数有误，请重新上传');
            return false;
        }   
        $file = $attachment->getPathBase($attachment->path_prefix) . '/' . $attachment->filepath;
        if (!file_exists($file)) {
            $this->addError('import', '指定的文件不存在，请重新上传');
            return false;
        }   
        $datas = $this->importDatas($file);
        if (empty($datas)) {
            $this->addError('import', '没有数据');
            return false;
        }
        return $datas;
    }

	public function getAttachmentIds($table, $field)
	{
		return $this->attachmentModel->getFieldIds($table, $field, $this->id);
	}
}
