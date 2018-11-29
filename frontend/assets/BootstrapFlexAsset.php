<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootstrapFlexAsset extends AssetBundle
{
    public $baseUrl = '@web/css/bootstrap-flex';
    public $css = [
        'css/bootstrap.min.css',
//        "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css",
        "css/bootstrap-popover-x.min.css",
    ];
    public $js = [
        'js/bootstrap.min.js',
//        "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js",
//        "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js",
        "js/bootstrap-popover-x.min.js"
    ];
}
