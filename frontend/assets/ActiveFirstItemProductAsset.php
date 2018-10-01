<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Tab Products.
 */
class ActiveFirstItemProductAsset extends AssetBundle
{
  public $baseUrl = '@web';
  public $css = [
    //'css/bootstrap.min.css',
  ];
  public $js = [
    'js/active.item.js',
  ];
  public $depends = [
    'yii\web\YiiAsset',
  ];
}
