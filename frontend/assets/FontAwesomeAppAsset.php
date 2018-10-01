<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * FontAwesome asset bundle.
 */
class FontAwesomeAppAsset extends AssetBundle
{
    public $baseUrl = '@web/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];

}
