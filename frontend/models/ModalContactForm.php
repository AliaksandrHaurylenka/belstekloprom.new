<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class ModalContactForm extends ActiveRecord
{
	public $file_load;

	public static function tableName(){
		return 'save_message';
	}

	public function rules()
	{
		return [
			[['name', 'email', 'subject', 'body'], 'required'],
			[['email', 'email_recipient'], 'email'],
			['name', 'string', 'length' => [2, 100]],
			[['name', 'body', 'subject'], 'trim'],
			[
				['file_load'],
				'file',
				'extensions' => ['png', 'jpg', 'gif', 'pdf', 'zip', 'rar'],
				'maxSize' => 1024*1024*3
			],
			['phone',
				'match', 'pattern' => '/\+\d{1,3}\(?\d{1,3}\)\d{1,3}\-\d{2}-\d{2}$/',
				'message' => Yii::t('common', 'Формат: ') . '+375(29)348-76-88'
			],
			//['verifyCode', 'captcha'],
		];
	}



	public function attributeLabels()
	{
		return [
			'name' => Yii::t('common', 'Имя'),
			'email' => 'E-mail',
			'phone' => Yii::t('common', 'Телефон'),
			'subject' => Yii::t('common', 'Тема'),
			'body' => Yii::t('common', 'Текст'),
			'file_load' => Yii::t('common', 'Прикрепите файл'),
			//'verifyCode' => Yii::t('common', 'Введите код:'),
		];
	}

	public function sendEmail()
	{
		if (!$this->validate()) {
			return false;
		}
		$message = Yii::$app->mailer->compose()
			->setTo($this->email_recipient)
			->setFrom(['bsp_gomel@mail.ru' => 'Письмо послано с сайта БелСтеклоПром'])
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
