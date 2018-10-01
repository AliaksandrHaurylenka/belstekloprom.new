<?php

use yii\helpers\Html;
use backend\components\FormCreateBottleWidget;


/* @var $this yii\web\View */
/* @var $model common\models\Bottle */

$this->title = 'Добавить изделие в базу';
$this->params['breadcrumbs'][] = ['label' => 'Изделия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bottle-create col-md-offset-3">

  <h1 class="col-sm-8"><?= Html::encode($this->title) ?></h1>

  <?= $this->render('_form-create', [
       'model' => $model,
    ]) ?>


</div>
