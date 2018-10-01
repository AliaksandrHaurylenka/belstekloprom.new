<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Bottle;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */

//ИЗДЕЛИЯ
// получаем имена изображений изделий
$name_bottle = Bottle::find()->asArray()->select(['name_1', 'name_2'])->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
$items_bottle = ArrayHelper::map($name_bottle, 'name_2', 'name_1');

//ВЕНЧИКИ
$name_venchik = \common\models\Venchik::find()->asArray()->select(['venchik_ru', 'venchik_id_for_code'])->all();
$items_venchik = ArrayHelper::map($name_venchik, 'venchik_id_for_code', 'venchik_ru');

//ГАЛЕРЕЯ
$name_gallery = \common\models\Gallery::find()->asArray()->select(['title', 'photo_name'])->all();
$items_gallery = ArrayHelper::map($name_gallery, 'photo_name', 'title');


$this->title = 'Удалить фото, чертежи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="del-img">

  <h1><?= Html::encode($this->title) ?></h1>

  <!--ИЗДЕЛИЯ-->
  <div class="col-sm-4 bg-img">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'load']]); ?>
    <?= $form->field($model, 'name_2')->dropDownList($items_bottle)->label('Фото, чертеж изделия'); ?>
    <?= Html::submitButton('Удалить изображения изделия',
        [
            'class' => 'btn btn-danger',
            'name' => 'contact-button',
            'onclick' => "return confirm('Вы уверены?')",//Запрос на удаление
        ])
    ?>
    <?php ActiveForm::end(); ?>
  </div>


<!--  ВЕНЧИКИ-->
  <div class="col-sm-4 bg-img">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'load']]); ?>
    <?= $form->field($model, 'venchik_id_for_code')->dropDownList($items_venchik)->label('Фото, чертеж венчика'); ?>
    <?= Html::submitButton('Удалить изображения венчиков',
        [
            'class' => 'btn btn-danger',
            'name' => 'contact-button',
            'onclick' => "return confirm('Вы уверены?')",//Запрос на удаление
        ])
    ?>
    <?php ActiveForm::end(); ?>
  </div>


<!--  ГАЛЕРЕЯ-->
  <div class="col-sm-4 bg-img">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'load']]); ?>
    <?= $form->field($model, 'photo_name')->dropDownList($items_gallery)->label('Фото из галереи'); ?>
    <?= Html::submitButton('Удалить фото из галереи',
        [
            'class' => 'btn btn-danger',
            'name' => 'contact-button',
            'onclick' => "return confirm('Вы уверены?')",//Запрос на удаление
        ])
    ?>
    <?php ActiveForm::end(); ?>
  </div>
</div>
