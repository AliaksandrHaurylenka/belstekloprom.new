<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BottleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bottle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'venchik') ?>

    <?= $form->field($model, 'venchik_en') ?>

    <?= $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'dev_1') ?>

    <?php // echo $form->field($model, 'diameter') ?>

    <?php // echo $form->field($model, 'dev_2') ?>

    <?php // echo $form->field($model, 'name_1') ?>

    <?php // echo $form->field($model, 'name_2') ?>

    <?php // echo $form->field($model, 'full_naliv') ?>

    <?php // echo $form->field($model, 'dev_naliv') ?>

    <?php // echo $form->field($model, 'massa') ?>

    <?php // echo $form->field($model, 'dev_massa') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
