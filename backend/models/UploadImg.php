<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

 
class UploadImg extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $file_load;
    public $imageFile;

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

  public function attributeLabels()
  {
    return [
      'file_load' => 'Фото, чертежи',

    ];
  }

  public function uploadFile($file)
  {
    if ($this->validate()) {
      $img = $file;
//      $this->images = $img->baseName.'.'.$img->extension;
      $img->saveAs(Yii::getAlias('@images').'/bottle/'.$img->baseName.'.'.$img->extension);
//      $this->save(false);
      return true;
    } else {
      return false;
    }
  }
     
    public function uploadFiles()
    {
      /**
       * saveAs - путь для загрузки файла;
       * далее имя и расширение файла
       */

      //для загрузки нескольких файлов
      //значение вверху должно быть @var UploadedFile[]
      /*if ($this->validate()) {
        foreach ($this->file_load as $file) {
          if ($file->extension == 'png'){
            $file->saveAs(Yii::getAlias('@frontend/web/images/bottle/') . $file->baseName . '.' . $file->extension);
          }else {
            $file->saveAs(Yii::getAlias('@frontend/web/images/gallery/') . $file->baseName . '.' . $file->extension);
          }
        }
        return true;
      } else {
        return false;
      }*/




      if ($this->validate()) {

        foreach ($this->file_load as $file)
        {
          $this->images = $file->baseName.'.'.$file->extension;
          $file->saveAs(Yii::getAlias('@images').'/gallery/reward/'.$file->baseName.'.'.$file->extension);
          $this->save(false);
        }
        return true;
      } else {
        return false;
      }
    }
}