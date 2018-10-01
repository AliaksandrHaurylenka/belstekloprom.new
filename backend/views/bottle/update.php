<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */

$this->title = 'Редактировать изделие: ' . $model->name_1;
$this->params['breadcrumbs'][] = ['label' => 'Изделия', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_1, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="bottle-update">

    <h1>Редактировать изделие</h1>

    <?= $this->render('_form-update', [
        'model' => $model,
    ]) ?>

</div>
