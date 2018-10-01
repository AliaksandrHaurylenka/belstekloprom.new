<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сохраненные сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="save-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?//= Html::a('Create Save Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view'],
        'headerRowOptions' => ['class' => 'active'],
        'filterRowOptions' => ['class' => 'success'],
        'rowOptions' => ['class' => 'active'],
        'tableOptions' => ['class' => 'table table-hover table-bordered message'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'phone',
            'subject',
            'body:ntext',
            'email_recipient:email',
            'date',

            [
//              https://nix-tips.ru/yii2-razbiraemsya-s-gridview.html
                'class' => 'yii\grid\ActionColumn',
//                'contentOptions' =>['class' => 'table_class','style'=>'max-width:150px;'],
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {delete}{link}',
            ],
/*
            [
                'contentOptions' =>['class' => 'table_class','style'=>'max-width:150px;'],
            ],*/
        ],
    ]); ?>
</div>
