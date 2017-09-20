<?php

namespace ifeed\models;

use Yii;
use common\models\IfeedModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    public static function getDb()
    {
        return Yii::$app->dbShoot;
    }    

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
            'adpicture' => [
                'thumb' => [
                    'isSingle' => false,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 800,
                    'type' => 'image/*',
                ],
                'picture' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 800,
                    'type' => 'image/*',
                ],
            ],
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
