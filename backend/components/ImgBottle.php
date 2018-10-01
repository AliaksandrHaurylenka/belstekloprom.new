<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.10.2017
 * Time: 9:53
 */

namespace backend\components;

use Yii;
use common\models\Bottle;
use yii\helpers\ArrayHelper;



class ImgBottle {

  static public function dropList()
  {
    $files = [];
    foreach (\yii\helpers\FileHelper::findFiles(Yii::getAlias("@frontend/web/images/bottle")) as $file) {
      $files[$file] = $file;
    }
    return $files;

  }

}