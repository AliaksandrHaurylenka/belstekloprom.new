<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Venchik;

/* @var $this yii\web\View */
/* @var $model common\models\Venchik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venchik-form col-sm-offset-3">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-8 bg-img']]); ?>
<div class="col-sm-6">
      <?= $form->field($model, 'venchik_ru')->textInput(['maxlength' => true]) ?>
  
      <?= $form->field($model, 'venchik_en')->textInput(['maxlength' => true]) ?>
  
      <?= $form->field($model, 'venchik_id_for_code')->textInput(['maxlength' => true]) ?>
  </div>
 <div class="col-sm-6">
  <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
  
      <?= $form->field($model, 'img_1')->textInput(['maxlength' => true]) ?>
  
      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
