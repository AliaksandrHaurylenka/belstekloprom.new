<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reward".
 *
 * @property integer $id
 * @property string $images
 */
class Reward extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile[]
     */
    public $file_load;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_load'], 'file',
                'skipOnEmpty' => false,
                'extensions' => ['png', 'jpg'],
                'maxFiles' => 6,
                'maxSize' => 1024*1024
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            // 'id' => 'ID',
            'images' => 'Награды',
        ];
    }


    public function upload()
    {
      /**
       * saveAs - путь для загрузки файла;
       * далее имя и расширение файла
       */

      //для загрузки нескольких файлов
      //значение вверху должно быть @var UploadedFile[]
      if ($this->validate()) {
        foreach ($this->file_load as $file) {
            $file->saveAs(Yii::getAlias('@frontend/web/images/gallery/reward/') . $file->baseName . '.' . $file->extension); 
        }
        return true;
      } else {
        return false;
      }
    }
}
