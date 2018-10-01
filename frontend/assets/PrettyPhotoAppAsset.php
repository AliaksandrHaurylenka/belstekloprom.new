<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * PrettyPhoto asset bundle.
 */
class PrettyPhotoAppAsset extends AssetBundle
{
    public $baseUrl = '@web/jquery-gallery';
    public $css = [
        'css/prettyPhoto.min.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
        'js/jquery.quicksand.js',
        'js/jquery.easing.js',
        'js/script-prettyPhoto.js',
        'js/jquery.prettyPhoto.js',
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\BootstrapFlexAsset',
    ];

}
