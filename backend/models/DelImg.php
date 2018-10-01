<?php

namespace backend\models;

use Yii;
use yii\base\Model;



class DelImg extends Model
{
  public  $name_2;
  public  $venchik_id_for_code;
  public  $photo_name;

  public function rules()
  {
    return [
        [['name_2', 'venchik_id_for_code', 'photo_name'], function ($attribute) {//Разобраться с пользовательским валидатором
          if (!($this->$attribute)) {
            $this->addError($attribute, 'Вы не можете удалить этот файл.');
          }
        }],
    ];
  }

  public function delimg()
  {
    $bottle = $this->name_2;
    $venchik = $this->venchik_id_for_code;
    $gallery = $this->photo_name;

    if ($bottle){
      unlink(Yii::getAlias("@frontend/web/images/bottle/$bottle.png"));//Удаляем фото с сервера
      unlink(Yii::getAlias("@frontend/web/images/bottle/{$bottle}_1.png"));
    }elseif ($venchik){
      unlink(Yii::getAlias("@frontend/web/images/bottle/$venchik.png"));
      unlink(Yii::getAlias("@frontend/web/images/bottle/{$venchik}_1.png"));
    }elseif ($gallery) {
      unlink(Yii::getAlias("@frontend/web/images/gallery/$gallery"));
    }

    return true;
  }

}