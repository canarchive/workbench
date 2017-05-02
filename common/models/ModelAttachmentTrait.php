<?php

namespace common\models;

trait ModelAttachmentTrait
{
    /**
     * 附件类型的字段信息更新时，是否删除旧的附件，默认删除
     */
    public $deleteAttachment = true;

    public function getAttachmentImg($where, $pointSize = true, $options = [])
    {
        $model = $this->_newModel('attachment');
        $where = is_int($where) ? ['id' => $where] : $where;
        $info = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->one();
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

    public function getAttachmentUrl($where)
    {
        $model = $this->_newModel('attachment');
        //$model = $this->getAttachmentModel();
        $where = is_int($where) ? ['id' => $where] : $where;
        $info = $model->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->one();
        return empty($info) ? '' : $info->getUrl();
    }

    protected function getAttachmentModel()
    {}

    protected function _updateSingleAttachment($table, $fields, $extData = [])
    {
        $attachment = $this->_newModel('attachment');
        foreach ($fields as $field) {
            $attachment->updateInfo($this->$field, $this->id, $extData);

            $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
            $this->deleteAttachment && $attachment->deleteInfo($where, $this->$field);
        }

        return ;
    }

    protected function _updateMulAttachment($table, $field, $extData = [])
    {
        $attachment = $this->_newModel('attachment');
        $ids = array_filter(explode(',', $this->$field));
        $isMasterData = [];
        foreach ($ids as $id) {
            $isMasterData[$id] = $attachment->updateInfo($id, $this->id, $extData);
        }

        $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
        $this->deleteAttachment && $attachment->deleteInfo($where, $ids);
        return $isMasterData;
    }
}
