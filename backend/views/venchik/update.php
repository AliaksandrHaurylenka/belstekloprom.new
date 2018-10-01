<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Venchik */

$this->title = 'Редактировать венчик: ' . $model->venchik_ru;
$this->params['breadcrumbs'][] = ['label' => 'Венчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->venchik_ru, 'url' => ['view', 'id' => $model->id_venchik]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="venchik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-update-venchik', [
        'model' => $model,
    ]) ?>

</div>
