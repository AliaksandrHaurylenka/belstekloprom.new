<?php

namespace backend\controllers;

use Yii;
use backend\models\DelImg;

class DelImgController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $model = new DelImg();

      //$this->debug($model);//вывод на печать

      if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        if ($model->delimg()) {
          Yii::$app->session->setFlash('success', 'Файлы удалены успешно!');
          return $this->refresh();
        }else {
          Yii::$app->session->setFlash('error', 'Внимание! Файлы не удалены!!!');
        }
      }

      return $this->render('index',[
          'model' => $model,
      ]);
    }

}
