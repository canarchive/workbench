<?php

namespace merchant\models;

use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    protected function _fieldInfos()
    {
        return [
            'new_merchant' => [
                'import' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 30000,
                    'type' => ['application/*', 'text/csv'],
                ],
            ],
        ];
    }
}
