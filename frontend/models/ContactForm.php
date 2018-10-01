<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
	public $name;
	public $nameSite = 'Письмо послано с сайта БелСтеклоПром';
	public $email;
	public $phone;
	public $subject;
	public $body;
	public $file_load;//прикрепить файл
	public $verifyCode;


	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			// name, email, subject and body are required
			[['name', 'email', 'subject', 'body'], 'required'],

			// email has to be a valid email address
			['email', 'email'],

			//мин. макс. количество символов
			['name', 'string', 'length' => [2, 100]],

			//удаление в тексте письма лишних пробелов
			[['name', 'body', 'subject'], 'trim'],

			//file size, maxFiles
			[
				['file_load'],
				'file',
				'extensions' => ['png', 'jpg', 'gif', 'pdf', 'zip', 'rar'],
				'maxSize' => 1024*1024*3
			],

			// phone valid
			['phone',
				'match', 'pattern' => '/\+\d{1,3}\(?\d{1,3}\)\d{1,3}\-\d{2}-\d{2}$/',
				'message' => Yii::t('common', 'Формат: ') . '+375(29)348-76-88'
			],

			// verifyCode needs to be entered correctly
			['verifyCode', 'captcha'],
		];
	}


	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'name' => Yii::t('common', 'Имя'),
			'email' => 'E-mail',
			'phone' => Yii::t('common', 'Телефон'),
			'subject' => Yii::t('common', 'Тема'),
			'body' => Yii::t('common', 'Текст'),
			'file_load' => Yii::t('common', 'Прикрепите файл'),
			'verifyCode' => Yii::t('common', 'Введите код:'),
		];
	}

	/**
	 * Sends an email to the specified email address using the information collected by this model.
	 *
	 * @param string $email the target email address
	 * @return bool whether the email was sent
	 */
	public function sendEmail($email)
	{
		if (!$this->validate()) {
			return false;
		}
		$message = Yii::$app->mailer->compose()
			->setTo($email)
			->setFrom(['bsp_gomel@mail.ru' => $this->nameSite])
			->setReplyTo([$this->email => $this->name])
			->setSubject($this->subject)
			->setTextBody($this->body)
			->setHtmlBody(
				'<h3>Здравствуйте, меня зовут '. $this->name.'</h3>'
				.$this->body
				.'<p style="font-weight: bold;">Мой телефон: ' . $this->phone . '</p>'
				.'<p style="font-weight: bold;">Моя почта: ' . $this->email . '</p>'
			)
			->addHeader('Precedence', 'bulk');

		if($this->file_load)
		{
			$message->attach($this->file_load->tempName, ['fileName' => $this->file_load->baseName . '.' . $this->file_load->extension]);
		}
		return $message->send();
	}
}
