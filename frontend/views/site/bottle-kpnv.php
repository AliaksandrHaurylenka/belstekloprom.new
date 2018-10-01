<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\components\ProductWidget;

$this->title = Yii::t('common', 'Стеклянные бутылки с высоким венчиком КПНв');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-bottle-kpnv">
	<h1><?= Html::encode($this->title) ?></h1>
	<h2>КПНв (КП) - <?= Yii::t('common', 'венчик высокий под кроненпробку') ?></h2>

	<!--Без архива изделий-->
	<? //= ProductWidget::widget(['ven_en' => 'kpnv', 'venchik_en' => 'kpnv']) ?>

	<!--С архивом изделий-->
	<?= ProductWidget::widget([
		'ven_en' => 'kpnv',//присваиваем наименование венчика для выборки
		'venchik_en' => 'kpnv',//присваиваем наименование бутылки для выборки
		'status' => ['old', 'new']//присваиваем статусы изделий для выборки
	])
	?>
</div>

