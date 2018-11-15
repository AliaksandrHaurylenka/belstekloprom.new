<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">
  <div class="row bg-img no-margin bg-img">
      <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-6']]); ?>

      <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'cat_item')->dropDownList([
          '1' => 'Коммерческий отдел',
          '2' => 'Отдел технического контроля',
          '3' => 'Хим. лаборатория',
          '4' => 'Производственный участок',
          '5' => 'Участок ремонта форм',
          '6' => 'Составной цех',
          '7' => 'Энергитический участок',
          '8' => 'Механический участок',
      ]) ?>

      <?= $form->field($model, 'imageFile')
          ->fileInput(['multiple' => true, 'accept' => 'image/*', 'required' => 'required'])
          ->label('Фото подразделения')
      ?>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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
                  if( ($image = $model->photo_name) !== null ){
                    return Html::img('/images/gallery/' . $image, [
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

</div>
