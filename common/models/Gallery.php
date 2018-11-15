<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\base\Security;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property string $photo_name
 * @property string $title
 * @property string $alt
 * @property integer $cat_item
 */
class Gallery extends \yii\db\ActiveRecord
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
    return 'gallery';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
        [['title', 'cat_item'], 'required'],
        [['cat_item'], 'integer'],
        [['title'], 'string', 'max' => 100],
        [['imageFile'], 'file',
            'skipOnEmpty' => true,
            'extensions' => ['jpg'],
            'maxSize' => 1024*1024,
//            'maxFiles' => 4,
        ],
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
        'id' => 'ID',
        'photo_name' => 'Файл фото',
        'title' => 'Описание',
        'alt' => 'alt',
        'cat_item' => 'Подразделение',
    ];
  }

  /**
   * gallery
   */
  public static function getGallery()
  {
    $Gallery = Yii::$app->cache->get('gallery');
    if ($Gallery) return $Gallery;

    $gallery = self::find()
        ->asArray()
        ->orderBy('cat_item ASC')
        ->all();

    Yii::$app->cache->set('gallery', $gallery, 60*60*24*30);
    return $gallery;
  }



  public function upload()
  {
    if ($this->validate()) {

      $random = new Security();
      $file = $this->imageFile;
      $filename = $random->generateRandomString(10);
      $this->photo_name = $filename.'.'.$file->extension;
      $file->saveAs(Yii::getAlias('@images').'/gallery/'.$filename.'.'.$file->extension);
      $this->save(false);

      /*foreach ($this->imageFile as $file) {
        $filename = $random->generateRandomString(10);
        $this->photo_name = $filename.'.'.$file->extension;
        $file->saveAs(Yii::getAlias('@images').'/gallery/'.$filename.'.'.$file->extension);
        $this->save(false);
      }*/
      return true;
    } else {
      return false;
    }
  }


  public function edit()
  {
    $random = new Security();
    $filename = $random->generateRandomString(10);
    $dir = Yii::getAlias('@images').'/gallery/';

    if ($this->validate()) {
      $img = $this->imageFile;
      if(!empty($img)){
        if(file_exists($dir.$this->photo_name)){
          unlink($dir.$this->photo_name);
        }
        $this->photo_name = $filename.'.'.$img->extension;
        $img->saveAs(Yii::getAlias('@images').'/gallery/'.$filename.'.'.$img->extension);
      }
      $this->save(false);
      return true;
    } else {
      return false;
    }
  }

  public function beforeDelete()
  {
    if (parent::beforeDelete()) {
      $dir = Yii::getAlias('@images').'/gallery/';
      if(file_exists($dir.$this->photo_name)){
        unlink($dir.$this->photo_name);
      }
      Yii::$app->session->setFlash('success', 'Запись успешно удалена!');
      return true;
    } else {
      Yii::$app->session->setFlash('error', 'Внимание! Файлы по каким-то причинам не удалились!!!');
      return false;
    }
  }

}
