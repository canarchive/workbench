<?php

namespace demo\models;

use common\models\DemoModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    protected function _fieldInfos()
    {
        return [
            'goods' => [
                'photo' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 30,
                    'type' => 'image/*',
                ],
                'picture' => [
                    'isSingle' => false,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 500,
                    'type' => 'image/*',
                ],
            ],
        ];
    }
}
