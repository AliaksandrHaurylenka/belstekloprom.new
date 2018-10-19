<?php

namespace backend\controllers;

use Yii;
use app\models\Reward;
use app\models\RewardSearch;
use yii\web\Controller;
use yii\web\UploadedFile;//прикрепление файлов
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RewardController implements the CRUD actions for Reward model.
 */
class RewardController extends Controller
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
     * Lists all Reward models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RewardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



    /**
     * Creates a new Reward model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reward();

      //для нескольких файлов UploadedFile::getInstances
        if ($model->load(Yii::$app->request->post())) {
          $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
          if($model->validate()){
            if ($model->imageFile && $model->upload() && $model->save()) {
              $model->images = $model->imageFile->baseName . '.' . $model->imageFile->extension;
            }
            if($model->save()){
              Yii::$app->session->setFlash('success', 'Файлы загружены успешно!');
              return $this->refresh();
            }else {
              Yii::$app->session->setFlash('error', 'Внимание! Файлы не загружены!!!');
            }
          }
        }else {
           return $this->render('create', [
               'model' => $model,
           ]);
       }
    }



    /**
     * Deletes an existing Reward model.
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
     * Finds the Reward model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reward the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reward::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
