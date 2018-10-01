<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Gallery;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form my-flex-container_12" style="background-color: white;">
  <div class="col-sm-4 bg-img">
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
  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="">
<!--    <h2 style="margin-bottom: 4rem; color: #777;">--><?//= $model->title; ?><!--</h2>-->
    <?= Html::img(
        '/frontend/web/images/gallery/' .
        implode(Gallery::getImgGallery($model->id)),
        ['alt' => 'Фото']
    )
    ?>
  </div>

</div>
