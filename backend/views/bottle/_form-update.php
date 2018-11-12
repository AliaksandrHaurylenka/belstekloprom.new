<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Bottle;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */
/* @var $form yii\bootstrap\ActiveForm */

?>

<div class="bottle-form flex-block">

  <?php $form = ActiveForm::begin(['options' => ['class' => 'col-sm-7 bg-img']]); ?>
  <div class="col-sm-6">
    <?= $form->field($model, 'name_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([
        'X' => 'X',
        'XVII' => 'XVII',
    ]);
    ?>

    <?= $form->field($model, 'venchik')->dropDownList([
        'КПНв' => 'КПНв',
        'КПНн' => 'КПНн',
        'ВКП' => 'ВКП',
        'ВКП-1' => 'ВКП-1',
        'ВКП-2' => 'ВКП-2',
        'В-28-1' => 'В-28-1',
        'К' => 'К',
        'Ш' => 'Ш',
        'П-29-А' => 'П-29-А',
        'П-29-Б' => 'П-29-Б',
    ]);
    ?>

    <?= $form->field($model, 'volume')->dropDownList([
        '500' => '500',
        '330' => '330',
        '700' => '700',
        '750' => '750',
    ]) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'dev_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')
        ->fileInput(['multiple' => true, 'accept' => 'image/*'])
        ->label('Фото изделия')
    ?>
  </div>

  <div class="col-sm-6">
    <?= $form->field($model, 'diameter')->textInput() ?>

    <?= $form->field($model, 'dev_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_naliv')->textInput() ?>

    <?= $form->field($model, 'dev_naliv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'massa')->textInput() ?>

    <?= $form->field($model, 'dev_massa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        'new' => 'Новое изделие',
        'old' => 'Старое изделие',
        'archive' => 'В архив',
    ])
    ?>

    <?= $form->field($model, 'imageFile_1')
        ->fileInput(['multiple' => true, 'accept' => 'image/*'])
        ->label('Чертеж изделия')
    ?>

    <div class="form-group">
      <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>
  <?php ActiveForm::end(); ?>


  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-5 bg-img">
    <h2><?= $model->name_1; ?></h2>
    <?= Html::img('/frontend/web/images/bottle/'.$model->name_2.'_1.png', ['alt' => 'Чертеж']) ?>
    <?= Html::img('/frontend/web/images/bottle/'.$model->name_2.'.png', ['alt' => 'Фото']) ?>
  </div>

</div>
