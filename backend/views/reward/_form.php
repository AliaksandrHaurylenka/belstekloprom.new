<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reward */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-sm-offset-3">
  <div class="col-sm-8 bg-img">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'load']]); ?>
    <?= $form->field($model, 'file_load[]')
        ->fileInput(
            [
                'multiple' => true,
                'accept' => 'image/*',
                'class' => 'col-sm-offset-4',
            ]
        )
        ->label('Фаил для загрузки')
    ?>
    <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    <?php ActiveForm::end(); ?>
  </div>
</div>