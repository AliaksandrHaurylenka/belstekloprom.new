<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venchik-form col-sm-offset-3">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-8 bg-img']]); ?>
<div class="col-sm-6">
      <?= $form->field($model, 'venchik_ru')
          ->textInput(['maxlength' => true, 'placeholder' => 'КПНв'])
          ->label('Тип венчика "Ru"')
      ?>
  
      <?= $form->field($model, 'venchik_en')
          ->hiddenInput(['value' => 'other'])
          ->label('')
      ?>
  
      <?= $form->field($model, 'venchik_id_for_code')
          ->textInput(['maxlength' => true, 'placeholder' => 'vkp-1'])
          ->label('Тип венчика "En"')
      ?>
  </div>
 <div class="col-sm-6">
   <?= $form->field($model, 'imageFile')
       ->fileInput(['multiple' => true, 'accept' => 'image/*', 'required' => 'required'])
       ->label('Фото венчика')
   ?>

   <?= $form->field($model, 'imageFile_1')
       ->fileInput(['multiple' => true, 'accept' => 'image/*', 'required' => 'required'])
       ->label('Чертеж венчика')
   ?>
  
      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
