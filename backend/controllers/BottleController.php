<?php

namespace backend\controllers;

use Yii;
use common\models\Bottle;
use backend\models\BottleSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;//прикрепление файлов

/**
 * BottleController implements the CRUD actions for Bottle model.
 */
class BottleController extends AppController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Bottle models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BottleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bottle model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Bottle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bottle();

      if ($model->load(Yii::$app->request->post())) {
        $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
        $model->imageFile_1 = UploadedFile::getInstance($model, 'imageFile_1');
        $model->record();
        if($model->save() && $model->upload()){
          Yii::$app->session->setFlash('success', 'Новое изделие добавлено успешно!');
          $this->refresh();
          return $this->redirect(['view', 'id' => $model->id]);
        }else {
          Yii::$app->session->setFlash('error', 'Внимание! Файлы не загружены!!!');
          return $this->refresh();
        }
      }else {
        return $this->render('create', [
            'model' => $model,
        ]);
      }
    }


    /**
     * Updates an existing Bottle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

      if ($model->load(Yii::$app->request->post())) {
        $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
        $model->imageFile_1 = UploadedFile::getInstance($model, 'imageFile_1');
        $model->record();
        if($model->save() && $model->edit()){
          Yii::$app->session->setFlash('success', 'Изделие обнавлено!');
          $this->refresh();
          return $this->redirect(['view', 'id' => $model->id]);
        }else {
          Yii::$app->session->setFlash('error', 'Внимание! Файлы не загружены!!!');
          return $this->refresh();
        }
      } else{
        return $this->render('update', ['model'=>$model,]);
      }
    }

    /**
     * Deletes an existing Bottle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bottle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bottle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bottle::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
