<?php

namespace baseapp\passport\models;

use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
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
