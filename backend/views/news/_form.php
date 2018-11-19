<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row news-form bg-img no-margin">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-6']]); ?>

      <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

      <?= $form->field($model, 'imageFile')
          ->fileInput(['multiple' => true, 'accept' => 'image/*'])
          ->label(false)
      ?>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

    <?php ActiveForm::end(); ?>

  <?= GridView::widget([
      'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
      'options' => ['class' => 'col-sm-6 grid-view'],
      'headerRowOptions' => ['style' => 'display: none'],
      'filterRowOptions' => ['style' => 'display: none'],
      'rowOptions' => ['class' => 'col-sm-6'],
      'tableOptions' => ['class' => 'row table table-hover table-bordered'],
      'columns' => [
          ['class' => 'yii\grid\SerialColumn'],

          ['attribute' => 'image',
              'value' => function($model) {
                if( ($image = $model->img) !== null ){
                  return Html::img('/images/news/' . $image, [
                      'alt'=>'yii2 - картинка в gridview',
                      'style' => 'width:200px;'
                  ]) ;
                }
              },
              'format' => 'raw',
          ],
      ],
  ]); ?>

</div>
