<?php

namespace gallerycms\cmsad\models;

use gallerycms\models\Attachment as AttachmentBase;
use gallerycms\models\CmsadTrait;

class Attachment extends AttachmentBase
{
    public $urlPrefix = 'cmsad';
    use CmsadTrait;
    protected function _fieldInfos()
    {
        $fieldInfos = [
            'sample' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
                'picture' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
        ];
        return array_merge(parent::_fieldInfos(), $fieldInfos);
    }
}
