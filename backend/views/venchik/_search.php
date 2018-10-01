<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VenchikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venchik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_venchik') ?>

    <?= $form->field($model, 'venchik_ru') ?>

    <?= $form->field($model, 'venchik_en') ?>

    <?= $form->field($model, 'venchik_id_for_code') ?>

    <?= $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'img_1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
