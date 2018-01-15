<?php

namespace common\models;

class AttachmentCommon extends Attachment
{
    protected function _fieldInfos()
    {
        return [
            'company' => [
                'logo' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 300,
                    'type' => 'image/*',
                ],
            ],
        ];
    }
}
