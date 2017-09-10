<?php

namespace ifeed\shoot\models;

use ifeed\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    public $urlPrefix = 'shoot';
    public $filePre = 'shoot/';
    use ModelTrait;
    protected function _fieldInfos()
    {
        $fieldInfos = [
            'site' => [
                'logo' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
                'logo_mobile' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 200,
                    'type' => 'image/*',
                ],
            ],
            'adpicture' => [
                'thumb' => [
                    'isSingle' => true,
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
            'sample' => [
                'picture' => [
                    'isSingle' => false,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
        ];
        return array_merge(parent::_fieldInfos(), $fieldInfos);
    }
}
