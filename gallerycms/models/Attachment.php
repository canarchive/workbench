<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    protected function _fieldInfos()
    {
        return [
            'category' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 80,
                    'type' => 'image/*',
                ],
            ],
            'friendlink' => [
                'logo' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 80,
                    'type' => 'image/*',
                ],
            ],
            'position' => [
                'picture' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
                'picture_mobile' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 600,
                    'type' => 'image/*',
                ],
                'picture_ext' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
        ];
    }
}
