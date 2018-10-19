<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reward */

$this->title = 'Добавить награды';
$this->params['breadcrumbs'][] = ['label' => 'Награды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reward-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
