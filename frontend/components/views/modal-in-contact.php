<?php
namespace frontend\controllers;


use Yii;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use frontend\models\ModalContactForm;
use yii\web\UploadedFile;//прикрепление файлов

$model = new ModalContactForm();
/*if ($model->load(Yii::$app->request->post())) {
	$model->save();*/
if ($model->load(Yii::$app->request->post()) && $model->save()) {
	$model->file_load = UploadedFile::getInstance($model, 'file_load');//загрузка файла
//  в переменную success и error записываются сообщения,
//  которые в последствии выводятся через $this->render('../../views/blocks/message_sending_form');
//  см. ниже перед кнопкой
	if ($model->sendEmail()) {
		Yii::$app->session->setFlash('success', Yii::t('common', 'Спасибо за Ваше письмо. Мы постараемся как можно быстрее Вам ответить!'));
	} else {
		Yii::$app->session->setFlash('error', Yii::t('common', 'Внимание! Ваше письмо по каким-то причинам не отправлено!!!'));
	}
}

?>

<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
        <!--Вывод заголовка h5 осуществляется согласно документации Bootstrap 4
        http://v4-alpha.getbootstrap.com/components/modal/#varying-modal-content-->
				<h5 class="modal-title" id="exampleModalLabel"><?= Yii::t('common', 'СВЯЖИТЕСЬ С НАМИ') ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--НАЧАЛО ФОРМЫ-->
				<?php Pjax::begin([]); ?>
					<?php $form = ActiveForm::begin(['options' => ['data' => ['pjax' => true]]]); ?>
            <!-- Скрытое поле для принятия адреса на который будет послоно сообщение -->
						<?= $form->field($model, 'email_recipient', ['options' => ['class' => 'hidden_field']])->hiddenInput()->label(false) ?>
						<?= $form->field($model, 'date')->hiddenInput()->label(false) ?>
						<?= $form->field($model, 'name')->input('text') ?>
						<?= $form->field($model, 'email')->input('email') ?>
						<?= $form->field($model, 'phone')->textInput(['placeholder' => "+375(29)348-76-88"]) ?>
						<?= $form->field($model, 'subject')->input('text') ?>
						<?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>
						<?= $form->field($model, 'file_load')->fileInput(['class' => 'file_load']) ?>
						<!--вывод сообщения об отправке, либо об неудачной отправке-->
						<?= $this->render('../../views/blocks/message_sending_form'); ?>
						<div class="modal-footer">
							<?= Html::submitButton(Yii::t('common', 'Отправить'), ['class' => 'btn btn-primary']) ?>
							<?= Html::button(Yii::t('common', 'Закрыть'),
								[
									'class' => 'btn btn-secondary',
									'data-dismiss' => 'modal'
								])
							?>
						</div>
					<?php ActiveForm::end() ?>
				<?php Pjax::end(); ?>
				<!--КОНЕЦ ФОРМЫ-->
			</div>
		</div>
	</div>
</div>
<!--/noindex-->