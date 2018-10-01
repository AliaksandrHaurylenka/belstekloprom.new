<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Venchik */

$this->title = 'Добавить венчик';
$this->params['breadcrumbs'][] = ['label' => 'Венчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venchik-create">

    <h1 class="col-sm-6 col-sm-offset-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-create-venchik', [
        'model' => $model,
    ]) ?>

</div>
