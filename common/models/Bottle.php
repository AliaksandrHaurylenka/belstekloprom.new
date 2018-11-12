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
  public $imageFile;
  public $imageFile_1;

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
        [['type', 'venchik', 'venchik_en', 'height', 'dev_1', 'diameter', 'dev_2', 'name_1', 'dev_naliv', 'dev_massa'], 'required'],
        [['volume', 'number', 'full_naliv', 'massa'], 'integer'],
        [['height', 'diameter'], 'number'],
        [['type', 'dev_1', 'dev_2', 'dev_naliv', 'dev_massa', 'status'], 'string', 'max' => 7],
        [['venchik', 'venchik_en'], 'string', 'max' => 10],
        [['name_1', 'name_2'], 'string', 'max' => 30],
        [['imageFile', 'imageFile_1'], 'file',
          //            'skipOnEmpty' => false,
            'skipOnEmpty' => true,
            'extensions' => ['png'],
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



  public function upload()
  {

    if ($this->validate()) {
      $img = $this->imageFile;
      $img_1 = $this->imageFile_1;
      $this->name_2 = $img->baseName;
      $img->saveAs(Yii::getAlias('@images').'/bottle/'.$img->baseName.'.'.$img->extension);
      $img_1->saveAs(Yii::getAlias('@images').'/bottle/'.$img_1->baseName.'.'.$img_1->extension);
      $this->save(false);
      return true;
    } else {
      return false;
    }
  }


  public function edit()
  {
    $dir = Yii::getAlias('@images').'/bottle/';

    if ($this->validate()) {
      $img = $this->imageFile;
      $img_1 = $this->imageFile_1;
      if(!empty($img)){
        if(file_exists($dir.$this->name_2.'.png')){
          unlink($dir.$this->name_2.'.png');
        }
        $this->name_2 = $img->baseName;
        $img->saveAs(Yii::getAlias('@images').'/bottle/'.$img->baseName.'.'.$img->extension);
      }
      if(!empty($img_1)){
        if(file_exists($dir.$this->name_2.'_1.png')){
          unlink($dir.$this->name_2.'_1.png');
        }
        $img_1->saveAs(Yii::getAlias('@images').'/bottle/'.$img_1->baseName.'.'.$img_1->extension);
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
      $dir = Yii::getAlias('@images').'/bottle/';
      if(file_exists($dir.$this->name_2.'.png')){
        unlink($dir.$this->name_2.'.png');
      }
      if(file_exists($dir.$this->name_2.'_1.png')){
        unlink($dir.$this->name_2.'_1.png');
      }
      Yii::$app->session->setFlash('success', 'Запись успешно удалена!');
      return true;
    } else {
      Yii::$app->session->setFlash('error', 'Внимание! Файлы по каким-то причинам не удалились!!!');
      return false;
    }
  }



  public function record()
  {
    if($this->venchik == 'КПНв'){
      $this->venchik_en = 'kpnv';
    }elseif($this->venchik == 'КПНн'){
      $this->venchik_en = 'kpnn';
    }elseif($this->venchik == 'ВКП' || $this->venchik == 'ВКП-1' || $this->venchik == 'ВКП-2'){
      $this->venchik_en = 'vkp';
    }else{
      $this->venchik_en = 'other';
    }

  }



  /*function debug($arr)
  {//вывод на печать при отладке
    echo '<pre>' . print_r($arr, true) . '</pre>';
  }*/


}
