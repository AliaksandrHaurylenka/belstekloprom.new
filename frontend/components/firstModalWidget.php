<?php

namespace frontend\components;
use yii\base\Widget;

class firstModalWidget extends Widget{

  public function init(){
    parent::init();
    ob_start();
  }

  public function run(){
    ob_get_clean();
    $firstModal = \common\models\Bottle::getFirstModal();//связь с моделью Bottle
    return $this->render('first-modal', compact('firstModal'));
  }

} 