<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.10.2018
 * Time: 13:38
 */

namespace frontend\components;

use yii\base\Widget;
use common\models\Gallery;

class PhotoWidget extends Widget
{
  public function init(){
    parent::init();
    ob_start();
  }

  public function run(){
    ob_get_clean();
    $gallery = Gallery::getGallery();
    return $this->render('photo', compact('gallery'));
  }
}