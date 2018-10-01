<?php
namespace frontend\controllers;

use Yii;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use frontend\models\ContactForm;
use yii\web\UploadedFile;//прикрепление файлов

$model = new ContactForm();
if ($model->load(Yii::$app->request->post())) {
	$model->file_load = UploadedFile::getInstance($model, 'file_load');//загрузка файла
	if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
		Yii::$app->session->setFlash('success', Yii::t('common', 'Спасибо за Ваше письмо. Мы постараемся как можно быстрее Вам ответить!'));
	} else {
		Yii::$app->session->setFlash('error', Yii::t('common','Внимание! Ваше письмо по каким-то причинам не отправлено!!!'));
	}
}
?>

<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel"><?= Yii::t('common', 'СВЯЖИТЕСЬ С НАМИ') ?></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<!--НАЧАЛО ФОРМЫ-->
				<?php Pjax::begin([]); //для того, чтобы модальное окно оставалось открытым при отправке письма ?>
					<?php $form = ActiveForm::begin(['options' => ['data' => ['pjax' => true]]]);//'data' => ['pjax' => true] для работы Pjax ?>
						<?= $form->field($model, 'name')->input('text') ?>
						<?= $form->field($model, 'email')->input('email') ?>
						<?= $form->field($model, 'phone')->textInput(['placeholder' => "+375(29)348-76-88"]) ?>
						<?= $form->field($model, 'subject')->input('text') ?>
						<?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>
						<?= $form->field($model, 'file_load')->fileInput(['class' => 'file_load']) ?>
						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-4">{input}</div></div>',
						])->hint(Yii::t('common', 'Нажмите на код, чтобы обновить!'))
						?>
				
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