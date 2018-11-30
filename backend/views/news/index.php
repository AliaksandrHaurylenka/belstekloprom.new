<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'О нас в интернете';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
  <?= GridView::widget([
      'dataProvider' => $dataProvider,
     'filterModel' => $searchModel,
      'options' => ['class' => 'grid-view'],
      'headerRowOptions' => ['class' => 'active'],
      'filterRowOptions' => ['class' => 'success'],
      'rowOptions' => ['class' => 'active text-center'],
      'tableOptions' => ['class' => 'table table-hover table-bordered'],
      'columns' => [
          ['class' => 'yii\grid\SerialColumn'],

          ['attribute' => 'Фото',
              'value' => function($model) {
                if( ($image = $model->img) !== null ){
                  return Html::img('/images/news/'.$image, [
                      'alt'=>'yii2 - картинка в gridview',
                      'style' => 'width:120px;'
                  ]) ;
                }
              },
              'format' => 'raw',
          ],

          'title',
          'content:ntext',


          [
              'class' => 'yii\grid\ActionColumn',
              'header'=>'Действия',
              'headerOptions' => ['width' => '80'],
          ],
      ],
  ]); ?>
</div>
