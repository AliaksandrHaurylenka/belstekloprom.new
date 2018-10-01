<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bottle".
 *
 * @property integer $id
 * @property string $type
 * @property string $venchik
 * @property string $venchik_en
 * @property integer $volume
 * @property integer $number
 * @property double $height
 * @property string $dev_1
 * @property double $diameter
 * @property string $dev_2
 * @property string $name_1
 * @property string $name_2
 * @property integer $full_naliv
 * @property string $dev_naliv
 * @property integer $massa
 * @property string $dev_massa
 * @property string $status
 */
class Bottle extends \yii\db\ActiveRecord
{

  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'bottle';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
        [['type', 'venchik', 'venchik_en', 'height', 'dev_1', 'diameter', 'dev_2', 'name_1', 'name_2', 'dev_naliv', 'dev_massa', 'status'], 'required'],
        [['volume', 'number', 'full_naliv', 'massa'], 'integer'],
        [['height', 'diameter'], 'number'],
        [['type', 'dev_1', 'dev_2', 'dev_naliv', 'dev_massa', 'status'], 'string', 'max' => 5],
        [['venchik', 'venchik_en'], 'string', 'max' => 10],
        [['name_1', 'name_2'], 'string', 'max' => 30],
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
        'id' => 'ID',
        'type' => 'Тип',
        'venchik' => 'Венчик',
        'venchik_en' => 'Venchik',
        'volume' => 'Объем, ml',
        'number' => 'Порядковый номер',
        'height' => 'Высота, мм',
        'dev_1' => 'Допуск по высоте, мм',
        'diameter' => 'Диаметр корпуса, мм',
        'dev_2' => 'Допуск по диаметру корпуса, мм',
        'name_1' => 'Название',
        'name_2' => 'Name',
        'full_naliv' => 'Полный налив, мл.',
        'dev_naliv' => 'Допуск по наливу, мл.',
        'massa' => 'Масса, грамм',
        'dev_massa' => 'Допуск по массе, грамм',
        'status' => 'Статус',
    ];
  }

  /**
   * main NEW BOTTLE
   */
  public static function getNew()
  {
    //get cache
    $bottle_new = Yii::$app->cache->get('newBottle');
    if ($bottle_new) return $bottle_new;

    $newBottle = self::find()
        ->asArray()//вывести массивом
        ->where(['status' => 'new'])//условие по столбцу 'status' со значением 'new'
        ->all();

    //set cache
    Yii::$app->cache->set('newBottle', $newBottle, 60*60);
    return $newBottle;
  }

  /**
   * main bottle-carousel
   */
  public static function getBottle()
  {
    $bottle_carousel = Yii::$app->cache->get('bottle');
    if ($bottle_carousel) return $bottle_carousel;

    $bottle = self::find()
        ->asArray()
        ->where(['status' => 'old'])
        ->all();

    Yii::$app->cache->set('bottle', $bottle, 60*60);
    return $bottle;
  }

  /**
   * menu BOTTLE //Без архива изделий
   */
  /* public static function getMenuBottle($venchik_en){
       $menuBottle = self::find()
           ->asArray()
           ->where(['venchik_en' => $venchik_en])
           ->orderBy('number ASC')
           ->all();

       return $menuBottle;
   }*/

  /**
   * menu BOTTLE //С архивом изделий
   */

  public static function getMenuBottle($venchik_en, $status)
  {
   /* $bottle = Yii::$app->cache->get('menuBottle');
    if ($bottle) return $bottle;*/

    $menuBottle = self::find()
        ->asArray()
        ->where(['venchik_en' => $venchik_en])
        ->andWhere(['status' => $status])
        ->orderBy('number ASC')
        ->all();

    //Yii::$app->cache->set('menuBottle', $menuBottle, 60*60);
    return $menuBottle;
  }


  /**
   * метод в backend
   * выводит изображение изделия при просмотре данных об изделии
   * $id принимает значение в зависимости от выбранного изделия
   */

  public static function getImgBottle($id)
  {
    $imgBackendBottle = self::find()
        ->asArray()
        ->select('name_2')
        ->where(['id' => $id])
        ->one();

    return $imgBackendBottle;
  }


  /**
   * main NEW BOTTLE firstModal
   */
  public static function getFirstModal()
  {
    $firstModal = self::find()
        ->asArray()//вывести массивом
        ->where(['status' => 'new'])//условие по столбцу 'status' со значением 'new'
        ->limit(2)
        ->orderBy('RAND()')
        // ->orderBy('number DESC')
        ->all();

    return $firstModal;
  }



}
