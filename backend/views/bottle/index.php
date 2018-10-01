<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BottleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Изделия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bottle-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <?= Html::a('Добавить изделие в базу', ['create'], ['class' => 'btn btn-success']) ?>

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
          'name_1',
          'type',
          'venchik',
        //'venchik_en',
          'volume',
          'number',
          'height',
        // 'dev_1',
        // 'diameter',
        // 'dev_2',

        // 'name_2',
        // 'full_naliv',
        // 'dev_naliv',
          'massa',
        // 'dev_massa',
          'status',

          ['class' => 'yii\grid\ActionColumn'],
      ],
  ]); ?>
</div>
