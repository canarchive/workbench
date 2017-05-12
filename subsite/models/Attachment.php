<?php

namespace subsite\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    protected function _fieldInfos()
    {
        return [
            /*'activity' => [
                'map' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
            ],*/
        ];
    }
}
