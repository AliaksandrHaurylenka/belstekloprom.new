<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SaveMessage */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сохраненные сообщения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="save-message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?//= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить это сообщение?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'table table-bordered active-td table-hover'],
        'attributes' => [
            'id',
            'name',
            'email:email',
            'phone',
            'subject',
            'body:ntext',
            'email_recipient:email',
        ],
    ]) ?>

</div>
