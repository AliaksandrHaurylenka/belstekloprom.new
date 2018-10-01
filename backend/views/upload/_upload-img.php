<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */

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
    ?>
    <?= Html::submitButton('Загрузить фото, чертежи', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    <?php ActiveForm::end(); ?>
  </div>
</div>
