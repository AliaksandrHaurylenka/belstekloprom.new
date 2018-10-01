<?php

namespace common\models;

use Yii;
use yii\data\Pagination;

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
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
        'id_venchik' => 'Id Venchik',
        'venchik_ru' => 'Venchik Ru',
        'venchik_en' => 'Venchik En',
        'venchik_id_for_code' => 'Venchik Id For Code',
        'img' => 'Img',
        'img_1' => 'Img 1',
    ];
  }

  /**
   * menu VENCHIK
   */
  public static function getMenuVenchik($ven_en)
  {
    /*$venchik = Yii::$app->cache->get('menuVenchik');
    if ($venchik) return $venchik;*/

    $menuVenchik = self::find()
        ->asArray()
        ->where(['venchik_en' => $ven_en])
        ->all();

    //Yii::$app->cache->set('menuVenchik', $menuVenchik, 60*60);
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

}
