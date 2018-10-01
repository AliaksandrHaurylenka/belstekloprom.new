<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Bottle */


$this->title = 'Добавить фото, чертежи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>

  <h1><?= Html::encode($this->title) ?></h1>

  <?= $this->render('_upload-img', [
      'model' => $model,
  ]) ?>
</div>


