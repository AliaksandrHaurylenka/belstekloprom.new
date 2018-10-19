<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reward */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="row">
  <div class="col-xs-4">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'load']]); ?>
    <?= $form->field($model, 'imageFile')
        ->fileInput(
            [
                'multiple' => true,
                'accept' => 'image/*',
            ]
        )
        ->label('Файл для загрузки')
    ?>
    <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    <?php ActiveForm::end(); ?>
  </div>
</div>