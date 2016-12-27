<?php

namespace gallerycms\sinfo\models;

use gallerycms\models\Attachment as AttachmentBase;
use gallerycms\sinfo\models\SinfoTrait;

class Attachment extends AttachmentBase
{
    public $urlPrefix = 'sinfo';
    use SinfoTrait;
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
