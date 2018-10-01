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
<div class="venchik-view col-sm-6 col-md-offset-3">

    <h1><?= Html::encode($this->title) ?></h1>

  <div class="col-sm-6 col-sm-offset-3">
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id_venchik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_venchik], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно желаете удалить венчик из базы?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'table table-bordered active-td table-hover'],
        'attributes' => [
            //'id_venchik',
            'venchik_ru',
            //'venchik_en',
            //'venchik_id_for_code',
            'img',
            'img_1',
        ],
    ]) ?>

  </div>


  <!--Вывод изображений изделий по принятому параметру id-->
  <div class="bg-img" style="clear:both">
    <?= Html::img(
        '/frontend/web/images/bottle/' .
        implode(Venchik::getImgVenchik($model->id_venchik)) . '_1.png',
        ['alt' => 'Чертеж', 'style' => 'max-width: 60%']
    )
    ?>
    <?= Html::img(
        '/frontend/web/images/bottle/' .
        implode(Venchik::getImgVenchik($model->id_venchik)) . '.png',
        ['alt' => 'Фото', 'style' => 'max-width: 30%']
    )
    ?>
  </div>

</div>
