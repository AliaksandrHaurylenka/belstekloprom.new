<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

 
class UploadImages extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
 
    public function rules()
    {
        return [
            [['imageFile'], 'file',
                'skipOnEmpty' => false,
                'extensions' => ['png', 'jpg'],
                'maxSize' => 1024*1024
            ],
        ];
    }

  public function attributeLabels()
  {
    return [
      'imageFile' => 'Фото, чертежи',

    ];
  }

  public function uploadFile($img)
  {
    /**
     * saveAs - путь для загрузки файла;
     * далее имя и расширение файла
     */

    //для загрузки нескольких файлов
    //значение вверху должно быть @var UploadedFile[]
    if ($this->validate()) {
//      $img = $this->imageFile;
//      $this->images = $img->baseName.'.'.$img->extension;
      $img->saveAs(Yii::getAlias('@images').'/gallery/reward/'.$img->baseName.'.'.$img->extension);
      return true;
    } else {
      return false;
    }
  }
}