<?php

namespace backend\components;
use yii\base\Widget;

class FormCreateBottleWidget extends Widget{

  public function init(){
    parent::init();
    ob_start();
  }

  public function run(){
    ob_get_clean();
    return $this->render('_form-create-bottle');
  }

}