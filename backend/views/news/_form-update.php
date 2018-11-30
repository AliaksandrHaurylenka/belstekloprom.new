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

  <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

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


  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-6 padding-vertical">
    <?= Html::img('/frontend/web/images/news/'.$model->img, ['alt' => '', 'class' => 'img-responsive']) ?>
  </div>


</div>
