<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row venchik-form  bg-img no-margin">

  <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-4']]); ?>

    <?= $form->field($model, 'venchik_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'venchik_id_for_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')
        ->fileInput(['multiple' => true, 'accept' => 'image/*',])
        ->label('Фото венчика')
    ?>

    <?= $form->field($model, 'imageFile_1')
        ->fileInput(['multiple' => true, 'accept' => 'image/*',])
        ->label('Чертеж венчика')
    ?>

    <div class="form-group">
      <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать',
          ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
      ?>
    </div>
  <?php ActiveForm::end(); ?>

  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-8 padding-vertical">
    <div class="row">
      <?= Html::img('/frontend/web/images/bottle/'.$model->img_1, ['alt' => 'Чертеж', 'class' => 'col-md-6 img-responsive']) ?>
      <?= Html::img('/frontend/web/images/bottle/'.$model->img, ['alt' => 'Чертеж', 'class' => 'col-md-6 img-responsive']) ?>
    </div>
  </div>
  </div>

</div>
