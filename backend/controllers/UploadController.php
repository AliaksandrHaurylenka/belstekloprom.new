<?php

namespace backend\controllers;

use Yii;
use yii\web\UploadedFile;//прикрепление файлов
use backend\models\UploadImg;

class UploadController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $model = new UploadImg();

      //для одного файла UploadedFile::getInstance
      if ($model->load(Yii::$app->request->post())) {
        $model->file_load = UploadedFile::getInstances($model, 'file_load');
        if ($model->upload()) {
          Yii::$app->session->setFlash('success', 'Файлы загружены успешно!');
          return $this->refresh();
        }else {
          Yii::$app->session->setFlash('error', 'Внимание! Файл не загружен!!!');
        }
      }
      return $this->render('index',[
          'model' => $model,
      ]);
    }

}
