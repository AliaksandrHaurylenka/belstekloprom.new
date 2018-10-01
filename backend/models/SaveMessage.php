<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "save_message".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $body
 * @property string $email_recipient
 */
class SaveMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'save_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'email_recipient'], 'required'],
            [['body'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['email', 'subject', 'email_recipient'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 20],
            [['date'], 'date'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя отправителя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'subject' => 'Тема',
            'body' => 'Текст',
            'email_recipient' => 'Email получателя',
            'date' => 'Дата',
        ];
    }
}
