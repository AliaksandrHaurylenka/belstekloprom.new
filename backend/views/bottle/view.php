<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Bottle;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */

$this->title = $model->name_1;
$this->params['breadcrumbs'][] = ['label' => 'Изделия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bottle-view">

  <div class="col-sm-6" style="padding-left: 0">
    <p>
      <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
          'class' => 'btn btn-danger',
          'data' => [
              'confirm' => 'Вы действительно желаете удалить это изделие из базы?',
              'method' => 'post',
          ],
      ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'table table-bordered active-td table-hover'],
        'attributes' => [
//            'id',
            'name_1',
            'type',
            'venchik',
//            'venchik_en',
            'volume',
            'number',
            'height',
            'dev_1',
            'diameter',
            'dev_2',
//            'name_2',
            'full_naliv',
            'dev_naliv',
            'massa',
            'dev_massa',
            'status',
        ],
        'template' => '<tr><th{captionOptions}>{label}</th><td{contentOptions}>{value}</td></tr>',
    ]) ?>
  </div>

<!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-6 jumbotron bg-img">
    <h2><?= $model->name_1; ?></h2>
    <?= Html::img(
        '/frontend/web/images/bottle/' .
        implode(Bottle::getImgBottle($model->id)) . '_1.png',
        ['alt' => 'Чертеж']
      )
    ?>
    <?= Html::img(
        '/frontend/web/images/bottle/' .
        implode(Bottle::getImgBottle($model->id)) . '.png',
        ['alt' => 'Фото']
    )
    ?>
  </div>
  <?//= print_r(Bottle::getImgBottle($model->id))?>

</div>
