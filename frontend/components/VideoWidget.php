<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.10.2018
 * Time: 13:31
 */

namespace frontend\components;
use yii\base\Widget;


class VideoWidget extends Widget
{
  public function init(){
    parent::init();
    ob_start();
  }

  public function run(){
    ob_get_clean();
    return $this->render('video');
  }
}