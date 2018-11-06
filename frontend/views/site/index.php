<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

use frontend\components\CertificateWidget;
use frontend\assets\FontAwesomeAppAsset;
use frontend\assets\FlexSliderAppAsset;


FontAwesomeAppAsset::register($this);
FlexSliderAppAsset::register($this);

$this->title = Yii::t('common', 'БелСтеклоПром.Производство стеклянной тары в Беларуси');
//\frontend\controllers\debug($newBottle);//вывод на печать из вида
?>
<?// debug("sdfd") ?>
<!--Первый блок-->
<div class="d-flex main-first-block">
	<div class="col-sm-4 no-gutters d-flex justify-content-center align-items-center hidden-sm-down animation"><img
			src="/images/animation-newlogo.gif" alt="Анимация"></div>
	<div class="col-sm-8 no-gutters d-flex justify-content-around align-items-center  hidden-sm-down certificate">
    <?= CertificateWidget::widget(); ?>
  </div>
</div>

<!--Второй блок-->
<div class="d-flex flex-column main-second-block">

	<h1 class="m-2 hidden-xs-down"><?=Yii::t('common', 'БелСтеклоПром - производство стеклянной тары в республике Беларусь'); ?></h1>

	<div class="row no-gutters m-2 enterprise-new">
		<!--О ПРЕДПРИЯТИИ-->
		<div class="col-lg-6 p-1 enterprise">

			<h2><?= Yii::t('common', 'О ПРЕДПРИЯТИИ') ?></h2>

			<p><?= Yii::t('common', 'Основной продукцией, выпускаемой предприятием, являются стеклянные бутылки различной формы и вместимости. При производстве тары используются исключительно выскокачественное сырье и современные технологии.') ?></p>

			<p><?= Yii::t('common', 'В настоящее время Производственное унитарное предприятие "БелСтеклоПром" обладает значительным производственным потенциалом. Технологический процесс осуществляется с использованием только импортного оборудования из Германии, Италии, США...') ?></p>


			<p><?= Html::a(Yii::t('common', 'Узнать больше...'), ['site/page', 'view' =>'enterprise'], ['class' => '']) ?></p>
		</div>

		<!--НАШИ НОВИНКИ-->
		<div class="col-lg-6 p-1 new">
			<h2 style="text-align: center;"><?= Yii::t('common', 'НАШИ НОВИНКИ'); ?></h2>

			<div id="carouselExampleIndicatorsNew" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicatorsNew" data-slide-to="0" class="active"></li>
					<?php
					$countSlides = count($newBottle);
					for ($i = 1; $i <= $countSlides; $i++) {
						echo '<li data-target="#carouselExampleIndicatorsNew" data-slide-to="' . $i . '"></li>';
					}
					?>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="carousel-item justify-content-center align-items-center active">
						<p class="text-uppercase new-main w-50"><?= Yii::t('common', 'Ознакомтесь с нашими новинками'); ?></p>
					</div>
					<?php foreach ($newBottle as $new): ?>
						<div class="carousel-item justify-content-center">
							<div class="d-flex w-75 justify-content-around">
								<img class="d-block img-fluid img-new" src="images/bottle/<?= $new['name_2'] ?>.png"
								     alt="<?= $new['name_1'] ?>"
								     title="стеклянные бутылки <?= $new['type'] . '-' .
                                                    $new['venchik'] . '-' .
                                                    $new['volume'] . '-' .
                                                    $new['number'] .
                                                    ' (' . $new['name_1'] . ')'
                                                ?>"
									>

								<table class="table table-striped table-sm w-75 table-new">
									<thead>
									<tr>
										<th colspan="2">
											<?= Html::a(
												"$new[name_1]",//текст ссылки
												[//url ссылки
													"site/bottle-$new[venchik_en]",
													'id' => $new['name_2']
												],
												[
													//массив атрибута тэга 'a' (ссылки)
													'class' => "pictogramm-$new[venchik_en]",
													'id' => "pictogramm-$new[name_2]"
												]
											)
											?>
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><?= Yii::t('common', 'Обозначение') ?>:</td>
										<td><?= $new['type'] . '-' . $new['venchik'] . '-' . $new['volume'] . '-' . $new['number'] ?></td>
									</tr>
									<tr>
										<td><?= Yii::t('common', 'Тип венчика') ?>:</td>
										<td><?= $new['venchik'] ?></td>
									</tr>
									<tr>
										<td><?= Yii::t('common', 'Высота') ?>:</td>
										<td><?= $new['height'];
											echo $new['dev_1'] ?> мм
										</td>
									</tr>
									<tr>
										<td><?= Yii::t('common', 'Диаметр') ?>:</td>
										<td><?= $new['diameter'];
											echo $new['dev_2'] ?> мм
										</td>
									</tr>
									<tr>
										<td><?= Yii::t('common', 'Объем') ?>:</td>
										<td><?= $new['volume'] ?> ml</td>
									</tr>
                  <!--<tr>
                    <td><?/*= Yii::t('common', 'Вес изделия') */?>:</td>
                    <td><?/*= $new[massa];
                      echo $new[dev_massa]; */?> г
                    </td>
                  </tr>-->
									</tbody>
								</table>
							</div>
						</div>
					<?php endforeach ?>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleIndicatorsNew" role="button" data-slide="prev">
					<span><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicatorsNew" role="button" data-slide="next">
					<span><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<!--НАШИ ПРЕИМУЩЕСТВА-->
	<div class="m-2">
		<h2 class="m-1"><?= Yii::t('common', 'НАШИ ПРЕИМУЩЕСТВА'); ?></h2>

		<div class="d-flex flex-row justify-content-between advantages">
			<p class="p-3 gr_gray"><?= Yii::t('common', 'Гибкая система формирования цен на продукцию!!!'); ?></p>

			<p class="p-3 gr_gray"><?= Yii::t('common', 'Высокие стандарты качества выпускаемой продукции!!!'); ?></p>

			<p class="p-3 gr_gray"><?= Yii::t('common', 'Индивидуальный подход к каждому клиенту!!!'); ?></p>
		</div>
	</div>

</div>

<!--Третий блок-->
<?php //include('../blocks/main-third-block.php'); ?>

<div class="m-2 main-third-block">
	<h2 class="m-1"><?= Yii::t('common', 'НАША ПРОДУКЦИЯ'); ?></h2>

	<div class="flexslider">
		<ul class="slides">
			<?php foreach ($bottle as $bottle): ?>
				<li class="d-flex align-items-center justify-content-around">
					<img src="/images/bottle/<?= $bottle['name_2'] ?>.png" alt="<?= $bottle['name_2'] ?>">
					<table class="table table-striped table-sm table-product">
						<tbody>
						<tr>
							<td><?= $bottle['type'] . '-' . $bottle['venchik'] . '-' . $bottle['volume'] . '-' . $bottle['number'] ?></td>
						</tr>
						<tr>
							<td>
								<?= Html::a(
									"$bottle[name_1]",//текст ссылки
									[
										//'#',//адрес ссылки
										"site/bottle-$bottle[venchik_en]",
										'id' => $bottle['name_2']
									],
									[
										//массив атрибута тэга a (ссылки)
										'class' => "pictogramm-$bottle[venchik_en]",
										'id' => "pictogramm-$bottle[name_2]"
									]
								)
								?>
							</td>
						</tr>
						</tbody>
					</table>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>




