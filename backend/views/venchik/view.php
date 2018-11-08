<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Venchik;

/* @var $this yii\web\View */
/* @var $model common\models\Venchik */

$this->title = $model->venchik_ru;
$this->params['breadcrumbs'][] = ['label' => 'Венчики', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="row venchik-view bg-img no-margin">

  <div class="col-sm-4 padding-vertical">
    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'col-sm-6 table table-bordered active-td table-hover'],
        'attributes' => [
            'venchik_ru',
        ],
    ]) ?>

    <?= Html::a('Редактировать', ['update', 'id' => $model->id_venchik], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Удалить', ['delete', 'id' => $model->id_venchik], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы точно желаете удалить венчик из базы?',
            'method' => 'post',
        ],
    ]) ?>

  </div>


  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-8 padding-vertical">
    <div class="row">
      <?= Html::img('/frontend/web/images/bottle/'.$model->img_1, ['alt' => 'Чертеж', 'class' => 'col-md-6 img-responsive']) ?>
      <?= Html::img('/frontend/web/images/bottle/'.$model->img, ['alt' => 'Чертеж', 'class' => 'col-md-6 img-responsive']) ?>
    </div>
  </div>

</div>
