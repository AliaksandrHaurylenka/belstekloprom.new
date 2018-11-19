<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row news-view bg-img no-margin">

  <div class="col-sm-6 padding-vertical">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'link',
//            'img',
            'content:ntext',
        ],
        'options' => ['class' => 'table table-striped table-bordered detail-view table-hover']
    ]) ?>

    <p>
      <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
          'class' => 'btn btn-danger',
          'data' => [
              'confirm' => 'Вы действительно желаете удалить новость?',
              'method' => 'post',
          ],
      ]) ?>
    </p>
  </div>

  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="col-sm-6 padding-vertical">
    <?= Html::img('/frontend/web/images/news/'.$model->img, ['alt' => '', 'class' => 'img-responsive']) ?>
  </div>

</div>
