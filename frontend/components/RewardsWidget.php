<?php

namespace frontend\components;

use yii\base\Widget;
use common\models\Reward;

class RewardsWidget extends Widget{

    public function init(){
        parent::init();
        ob_start();
    }

    public function run(){
        ob_get_clean();

      $rewards = Reward::find()->all();
//        debug($rewards);
        return $this->render('rewards', compact('rewards'));
    }

} 