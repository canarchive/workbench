<?php

namespace gallerycms\merchant\models;

use gallerycms\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    public $urlPrefix = 'merchant';
    public $filePre = 'merchant/';

    use MerchantTrait;
    protected function _fieldInfos()
    {
        $fieldInfos = [
            'star' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
            'customer' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
            'sample' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
            'adpicture' => [
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
            'info' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
            'service' => [
                'thumb' => [
                    'isSingle' => true,
                    'minSize' => 1, // unit: kb
                    'maxSize' => 2000,
                    'type' => 'image/*',
                ],
            ],
			'merchant' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'aptitude' => [
        			'isSingle' => false, 
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
			],
			'realcase' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'picture_origin' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 600,
    				'type' => 'image/*',
				],
				'picture_design' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 600,
    				'type' => 'image/*',
				],
				'design_sketch' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 600,
    				'type' => 'image/*',
				],
			],
			'designer' => [
				'photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
			],
			'working' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'start' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
				'electric' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
				'cement' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
				'paint' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
				'finish' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
			],
        ];
        return array_merge(parent::_fieldInfos(), $fieldInfos);
    }
}
