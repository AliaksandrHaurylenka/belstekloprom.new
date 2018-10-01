<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('common', 'БелСтеклоПром.Контакты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="m-2 site-contact">
<?= \frontend\components\ModalInContactWidget::widget(); ?>
<h1><?= Html::encode($this->title) ?></h1>

<h2><?= Yii::t('common', 'Генеральный директор') ?>:
	<strong><?= Yii::t('common', 'Чеховский Валерий Алексеевич') ?></strong></h2>
<table class="table table-bordered table-sm hidden-xs-down">
	<tr>
		<td><?= Yii::t('common', 'Приемная директора') ?>:</td>
		<td>+375(232)68-43-78<br>
			<?/*= Html::a('gomel@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'gomel@belstekloprom.com',
					'data-department' => Yii::t('common', 'Приемная директора')
				])
			*/?>
		</td>
		<td><?= Yii::t('common', 'Сбыт') ?>:</td>
		<td>
			+375(232)68-43-34<br>
			+375(232)68-43-42<br>
			<?= Html::a('sbit@belstekloprom.com', ['#'],
				[//документация Bootstrap 4 http://v4-alpha.getbootstrap.com/components/modal/#varying-modal-content
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'sbit@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел Сбыта')
				])
			?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Отдел кадров') ?>:</td>
		<td>+375(232)68-21-99<br>
			<?= Html::a('ok@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'ok@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел кадров')
				])
			?>
		</td>
		<td><?= Yii::t('common', 'Снабжение') ?>:</td>
		<td>
			+375(232)68-43-35<br>
			+375(232)68-43-39<br>
			<?= Html::a('snab@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'snab@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел снабжения')
				])
			?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Юрисконсульт') ?>:</td>
		<td>+375(232)68-22-99</td>
		<td><?= Yii::t('common', 'Бухгалтерия') ?>:</td>
		<td>+375(232)68-43-79</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Отдел Технического Контроля') ?>:</td>
		<td>
			<?= Html::a('otk@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'otk@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел Технического Контроля')
				])
			?>
		</td>
		<td><?= Yii::t('common', 'Менеджер по ВЭД') ?>:</td>
		<td>+375(232)68-43-34</td>
	</tr>
</table>


<!--МОБИЛЬНАЯ ВЕРСИЯ-->
<table class="table table-bordered table-sm hidden-sm-up">
	<tbody>
	<tr>
		<td><?= Yii::t('common', 'Приемная директора') ?>:</td>
		<td>+375(232)68-43-78<br>
			<?/*= Html::a('gomel@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'gomel@belstekloprom.com',
					'data-department' => Yii::t('common', 'Приемная директора')
				])
			*/?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Сбыт') ?>:</td>
		<td>
			+375(232)68-43-34<br>
			+375(232)68-43-42<br>
			<?= Html::a('sbit@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'sbit@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел Сбыта')
				])
			?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Отдел кадров') ?>:</td>
		<td>+375(232)68-21-99</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Снабжение') ?>:</td>
		<td>
			+375(232)68-43-35<br>
			+375(232)68-43-39<br>
			<?= Html::a('snab@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'snab@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел снабжения')
				])
			?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Юрисконсульт') ?>:</td>
		<td>+375(232)68-22-99</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Бухгалтерия') ?>:</td>
		<td>+375(232)68-43-79</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Отдел Технического Контроля') ?>:</td>
		<td>
			<?= Html::a('otk@belstekloprom.com', ['#'],
				[
					'data-toggle' => 'modal',
					'data-target' => '#exampleModal',
					'data-whatever' => 'otk@belstekloprom.com',
					'data-department' => Yii::t('common', 'Отдел Технического Контроля')
				])
			?>
		</td>
	</tr>
	<tr>
		<td><?= Yii::t('common', 'Менеджер по Внешнеэкономической деятельности') ?>:</td>
		<td>+375(232)68-43-34</td>
	</tr>
	</tbody>
</table>


<a id="feedback"></a><!--якорь - срабатывает при клике по email в top и в footer-->
<div class="row justify-content-between">
	<div class="col-md-6 contact-form">

		<!--вывод сообщения об отправке, либо об неудачной отправке-->
		<?= $this->render('../blocks/message_sending_form'); ?>
		<h2><?= Yii::t('common', 'СВЯЖИТЕСЬ С НАМИ') ?></h2>

		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'contact-form']]); ?>
		<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
		<?= $form->field($model, 'email') ?>
		<?= $form->field($model, 'phone')->textInput(['placeholder' => "+375(29)348-76-88"]) ?>
		<?= $form->field($model, 'subject') ?>
		<?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>
		<?= $form->field($model, 'file_load')->fileInput(['class' => 'file_load']) ?>
		<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
			'template' =>
				'<div class="row">
					<div class="col-lg-3 col-md-4 col">{image}</div>
					<div class="col-lg-6 col-md-8 col">{input}</div>
					<div class="col-lg-3 form-group">
						<button
							type="submit"
							class="btn btn-primary"
							name="contact-button">' . Yii::t("common", "Отправить") . '
						</button>
					</div>
				</div>',
		])->hint(Yii::t('common', 'Нажмите на код, чтобы обновить!')) ?>
		<?php ActiveForm::end(); ?>
	</div>


	<div class="col-md-6 address-mobil">
		<address class="hidden-xs-down address-contact">
			<u><?= Yii::t('common', 'Юридический адрес') ?>:</u><br>
			246015 <?= Yii::t('common', 'Республика Беларусь') ?><br>
			<?= Yii::t('common', 'г.Гомель, Гомельская область') ?><br>
			<?= Yii::t('common', 'ул. Лепешинского 7') ?>
		</address>
		<p class="w-100 map">
			<script type="text/javascript" charset="utf-8" async
			        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3ArCq6pKMO-0gZuCsNpKl6lfdozHCXntke&amp;lang=ru_RU&amp;scroll=true"></script>
		</p>
	</div>
</div><!--row justify-content-between-->


</div><!--<div class="p-2 site-contact">-->