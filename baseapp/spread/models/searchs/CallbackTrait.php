<?php

namespace baseapp\spread\models\searchs;

Trait CallbackTrait
{

    protected function _getTemplateFields()
    {
        return [
            'id' => ['type' => 'common'],
            'merchant_id' => ['type' => 'point', 'table' => 'merchant'],
            'service_id' => ['type' => 'point', 'table' => 'service'],
            'mobile' => ['type' => 'inline', 'method' => 'maskMobile'],
            'note' => ['type' => 'common', 'listNo' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'listNo' => true],
            'status' => ['type' => 'key'],
            'out_status' => ['type' => 'key'],
            'invalid_status' => ['type' => 'key'],
            'content' => ['type' => 'common'],
        ];
    }
}
