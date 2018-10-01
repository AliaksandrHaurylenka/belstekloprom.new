<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить фото', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view'],
        'headerRowOptions' => ['class' => 'active'],
        'filterRowOptions' => ['class' => 'success'],
        'rowOptions' => ['class' => 'active'],
        'tableOptions' => ['class' => 'table table-hover table-bordered'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'photo_name',
            'title',
            //'alt',
            //'cat_item',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
