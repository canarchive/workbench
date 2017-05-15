<?php

namespace common\assets;

class AutocompleteAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    //public $sourcePath = '@common/assets';
    public $baseUrl = '@asseturl';

    /**
     * @inheritdoc
     */
    public $css = [
        'common/jquery-ui.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'common/jquery-ui.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
