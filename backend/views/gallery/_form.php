<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form col-sm-offset-3">
  <div class="col-sm-8 bg-img">
      <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'photo_name')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'cat_item')->textInput() ?>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

      <?php ActiveForm::end(); ?>
  </div>

</div>
