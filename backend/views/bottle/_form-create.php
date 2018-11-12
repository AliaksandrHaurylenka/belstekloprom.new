<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Bottle */
/* @var $form yii\bootstrap\ActiveForm */

$arr = [
    'id' => 'blog_type',
    'class' => 'btn-group',
    'data-toggle' => 'buttons',
    'unselect' => null,
    'item' => function ($index, $label, $name, $checked, $value) {
      return '<label class="btn btn-primary' . ($checked ? ' active' : '') . '">' .
      Html::radio($name, $checked, ['value' => $value, 'class' => 'project-status-btn']) . $label . '</label>';
    },
]

?>

<div class="bottle-form">
  <?php $form = ActiveForm::begin(['options' => ['class' => 'row bg-img no-margin']]); ?>
    <div class="col-sm-4">
      <?= $form->field($model, 'name_1')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'type')
          ->radioList(
              [
                  'X' => 'X',
                  'XVII' => 'XVII',
              ], $arr
          )
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

      <?/*= $form->field($model, 'venchik_en')->dropDownList([
          'kpnv' => 'kpnv',
          'kpnn' => 'kpnn',
          'vkp' => 'vkp',
          'other' => 'other',
      ])
      */?>

      <?= $form->field($model, 'volume')->dropDownList([
          '500' => '500',
          '330' => '330',
          '700' => '700',
          '750' => '750',
      ]) ?>

      <?= $form->field($model, 'number')->textInput() ?>
    </div>

    <div class="col-sm-4">

      <?= $form->field($model, 'height')->textInput() ?>

      <?= $form->field($model, 'dev_1')
          ->radioList(
              [
                  '±1.3' => '±1.3',
                  '±1.6' => '±1.6',
                  '±1.7' => '±1.7',
                  '±1.8' => '±1.8',

              ], $arr
          )
      ?>
      <?= $form->field($model, 'diameter')->textInput() ?>

      <?= $form->field($model, 'dev_2')
          ->radioList(
              [
                  '±1.2' => '±1.2',
                  '±1.3' => '±1.3',
                  '±1.4' => '±1.4',

              ], $arr
          )
      ?>

      <?= $form->field($model, 'full_naliv')->textInput() ?>

    </div>

    <div class="col-sm-4">
<!--      --><?//= $form->field($model, 'name_2')->textInput(['maxlength' => true, 'placeholder' => "имя фото, без расширения"]) ?>


      <?= $form->field($model, 'dev_naliv')
          ->radioList(
              [
                  '±7' => '±7',
                  '±10' => '±10',
                  '±15' => '±15',
              ], $arr
          )
      ?>

      <?= $form->field($model, 'massa')->textInput() ?>

      <?= $form->field($model, 'dev_massa')
          ->radioList(
              [
                  '±10' => '±10',
                  '±15' => '±15',
              ], $arr
          )
      ?>

      <?= $form->field($model, 'imageFile')
          ->fileInput(['multiple' => true, 'accept' => 'image/*', 'required' => 'required'])
          ->label('Фото изделия')
      ?>

      <?= $form->field($model, 'imageFile_1')
          ->fileInput(['multiple' => true, 'accept' => 'image/*', 'required' => 'required'])
          ->label('Чертеж изделия')
      ?>
      <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
    </div>
  <?php ActiveForm::end(); ?>
</div>
