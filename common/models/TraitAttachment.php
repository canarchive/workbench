<?php

namespace common\models;

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
                'style' => ['width' => '80px', 'height' => '40px'],
                'onclick' => 'window.open(this.src);',
            ];
            $options = $pointSize && empty($options) ? $optionsDefault : $options;
            return \Yii::$app->formatter->asImage($info->getUrl(), $options);
        }
        return '';
    }

    public function getAttachmentUrl($id)
    {
        $model = $this->attachmentModel;
        //$model = $this->getAttachmentModel();
        $info = $model->findOne($id);
        return empty($info) ? '' : $info->getUrl();
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
            $attachment->updateInfo($this->$field, $this->id, $extData);

            $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
            $this->deleteAttachment && $attachment->deleteInfo($where, $this->$field);
        }

        return ;
    }

    protected function _updateMulAttachment($table, $field, $extData = [])
    {
        $attachment = $this->attachmentModel;
        $ids = array_filter(explode(',', $this->$field));
        foreach ($ids as $id) {
            $attachment->updateInfo($id, $this->id, $extData);
        }

        $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
        $this->deleteAttachment && $attachment->deleteInfo($where, $ids);

        return ;
    }

	public function uploadElem($table, $field)
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
                'accept' => 'image/*'
            ],
            'clientOptions' => [
    		    //'dataType' => 'json',
    			'maxFileSize' => $fieldElem['maxSize'] * 1024,
            ],
        ]);
	}
}
