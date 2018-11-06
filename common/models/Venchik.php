<?php

namespace common\models;

use Yii;
//use yii\data\Pagination;

/**
 * This is the model class for table "venchik".
 *
 * @property integer $id_venchik
 * @property string $venchik_ru
 * @property string $venchik_en
 * @property string $venchik_id_for_code
 * @property string $img
 * @property string $img_1
 */


class Venchik extends \yii\db\ActiveRecord
{
  public $imageFile;
  public $imageFile_1;
  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'venchik';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
        [['venchik_ru', 'venchik_en', 'venchik_id_for_code'], 'required'],
        [['venchik_ru', 'venchik_en', 'venchik_id_for_code'], 'string', 'max' => 12],
        [['img', 'img_1'], 'string', 'max' => 50],
        [['imageFile', 'imageFile_1'], 'file',
            'skipOnEmpty' => false,
//            'skipOnEmpty' => true,
            'extensions' => ['png', 'jpg'],
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
        'id_venchik' => 'Id Venchik',
        'venchik_ru' => 'Тип венчика "Ru"',
        'venchik_en' => 'Venchik En',
        'venchik_id_for_code' => 'Тип венчика "En"',
        'img' => 'Img',
        'img_1' => 'Img 1',
    ];
  }


  public function upload()
  {
    /*$file = new UploadImg();
    $file->uploadFile($this->imageFile);*/

    if ($this->validate()) {
      $img = $this->imageFile;
      $img_1 = $this->imageFile_1;
      $this->img = $img->baseName.'.'.$img->extension;
      $this->img_1 = $img_1->baseName.'.'.$img_1->extension;
      $img->saveAs(Yii::getAlias('@images').'/bottle/'.$img->baseName.'.'.$img->extension);
      $img_1->saveAs(Yii::getAlias('@images').'/bottle/'.$img_1->baseName.'.'.$img_1->extension);
      $this->save(false);
      return true;
    } else {
      return false;
    }
  }

  /**
   * menu VENCHIK
   */
  public static function getMenuVenchik($ven_en)
  {
    $menuVenchik = self::find()
        ->asArray()
        ->where(['venchik_en' => $ven_en])
        ->all();

    return $menuVenchik;
  }


  /**
   * метод в backend
   * выводит изображение изделия при просмотре данных об изделии
   * $id принимает значение в зависимости от выбранного изделия
   */

  public static function getImgVenchik($id)
  {
    $imgBackendVenchik = self::find()
        ->asArray()
        ->select('venchik_id_for_code')
        ->where(['id_venchik' => $id])
        ->one();

    return $imgBackendVenchik;
  }



  public function beforeDelete()
  {
    if (parent::beforeDelete()) {
      $dir = Yii::getAlias('@images').'/bottle/';
      if(file_exists($dir.$this->img)){
        unlink($dir.$this->img);
      }
      if(file_exists($dir.$this->img_1)){
        unlink($dir.$this->img_1);
      }
      Yii::$app->session->setFlash('success', 'Запись успешно удалена!');
      return true;
    } else {
      Yii::$app->session->setFlash('error', 'Внимание! Файлы по каким-то причинам не удалились!!!');
      return false;
    }
  }



}
