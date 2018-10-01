<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Gallery;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить фото?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'table table-bordered active-td table-hover'],
        'attributes' => [
            //'id',
            //'photo_name',
            //'title',
            //'alt',
            //'cat_item',
        ],
    ]) ?>

  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="jumbotron bg-img">
    <h2 style="margin-bottom: 4rem; color: #777;"><?= $model->title; ?></h2>
    <?= Html::img(
        '/frontend/web/images/gallery/' .
        implode(Gallery::getImgGallery($model->id)),
        ['alt' => 'Фото']
    )
    ?>
  </div>
  <?//= print_r(Gallery::getImgGallery($model->id))?>

</div>
