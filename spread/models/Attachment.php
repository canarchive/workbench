<?php

namespace spread\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    protected function _fieldInfos()
    {
        return [
            'decoration' => [
                'picture' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 300,
                    'type' => 'image/*',
                ],
                'picture_small' => [
                    'isSingle' => true,
                    'minSize' => 0.01, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
            ],
            'planfee' => [
                'import' => [
                    'isSingle' => true,
                    'minSize' => 0.01, // unit: kb
                    'maxSize' => 900,
                    'type' => ['application/*', 'text/csv'],
                ],
            ],
            'activity' => [
                'picture' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 300,
                    'type' => 'image/*',
                ],
                'picture_small' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
                'map' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
            ],
        ];
    }
}
