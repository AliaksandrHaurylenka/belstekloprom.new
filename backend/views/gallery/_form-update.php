<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form my-flex-container_12" style="background-color: white;">
  <div class="col-sm-4 bg-img">
    <?php $form = ActiveForm::begin(); ?>

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
        ->fileInput(['multiple' => true, 'accept' => 'image/*'])
        ->label('Фото подразделения')
    ?>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

      <?php ActiveForm::end(); ?>
  </div>
  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="">
    <?= Html::img('/frontend/web/images/gallery/'.$model->photo_name, ['alt' => 'Фото']) ?>
  </div>

</div>
