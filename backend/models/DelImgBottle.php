<?php

namespace backend\models;

use Yii;
use yii\base\Model;


 
class DelImgBottle extends Model
{
  public  $name_2;

  public function rules()
  {
    return [
        ['name_2', function ($attribute) {//Разобраться с пользовательским валидатором
          if (!($this->$attribute)) {
            $this->addError($attribute, 'Вы не можете удалить этот файл.');
          }
        }],
    ];
  }

  public function delimgbottle()
  {
    $name = $this->name_2;
    unlink(Yii::getAlias("@frontend/web/images/bottle/$name.png"));//Удаляем фото с сервера
    unlink(Yii::getAlias("@frontend/web/images/bottle/{$name}_1.png"));
    return true;
  }

}