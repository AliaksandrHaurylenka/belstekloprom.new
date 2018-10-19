<?php

namespace app\models;

use Yii;
//use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "reward".
 *
 * @property integer $id
 * @property string $images
 */
class Reward extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;


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
            /*[['imageFile'], 'file',
                'skipOnEmpty' => false,
                'extensions' => ['png', 'jpg'],
                'maxSize' => 1024*1024
            ],*/
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
        $img = $this->imageFile;
        $img->saveAs(Yii::getAlias('@frontend/web/images/gallery/reward/') . $img->baseName . '.' . $img->extension);
        return true;
      } else {
        return false;
      }
    }
}
