<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VenchikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Венчики';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venchik-index col-md-offset-3">

    <h1 class="col-sm-8"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить венчик', ['create'], ['class' => 'btn btn-success col-md-offset-3']) ?>
    </p>
  <div class="col-sm-8"  style="background: #f5f5f5">
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

            //'id_venchik',
            'venchik_ru',
            //'venchik_en',
            //'venchik_id_for_code',
            //'img',
            //'img_1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  </div>
</div>
