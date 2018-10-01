<?php

namespace common\models;

use Yii;

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
        [['photo_name', 'title', 'alt', 'cat_item'], 'required'],
        [['cat_item'], 'integer'],
        [['photo_name'], 'string', 'max' => 30],
        [['title', 'alt'], 'string', 'max' => 100],
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
        'cat_item' => 'Номер участка',
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


  /**
   * метод в backend
   * выводит фото Галереи
   * $id принимает значение в зависимости от выбранного фото
   */

  public static function getImgGallery($id)
  {
    $imgBackendGallery = self::find()
        ->asArray()
        ->select('photo_name')
        ->where(['id' => $id])
        ->one();

    return $imgBackendGallery;
  }

}
