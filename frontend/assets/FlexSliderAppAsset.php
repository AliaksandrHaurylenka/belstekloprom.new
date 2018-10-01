<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FlexSliderAppAsset extends AssetBundle
{
    public $baseUrl = '@web/flex-slider';
    public $css = [
        'flexslider.css',
    ];
    public $js = [
        'jquery.flexslider-min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\BootstrapFlexAsset',
    ];
}
