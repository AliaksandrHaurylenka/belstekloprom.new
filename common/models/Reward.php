<?php

namespace common\models;

use Yii;
use yii\base\Security;

//yii\base\Security;

/**
 * This is the model class for table "reward".
 *
 * @property integer $id
 * @property string $images
 */
class Reward extends \yii\db\ActiveRecord
{
  public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['images'], 'string', 'max' => 255],
            [['imageFile'], 'file',
                'skipOnEmpty' => false,
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
            'id' => 'ID',
            'images' => 'Images',
        ];
    }


  public function upload()
  {
    $random = new Security();
    $filename = $random->generateRandomString(10);
    if ($this->validate()) {
      $img = $this->imageFile;
      $this->images = $filename.'.'.$img->extension;
      $img->saveAs(Yii::getAlias('@images').'/gallery/reward/'.$filename.'.'.$img->extension);
//      $img->saveAs(Yii::getAlias('@images').'/gallery/reward/'.$img->baseName.'.'.$img->extension);
      $this->save(false);
      return true;
    } else {
      return false;
    }
  }





  public function beforeDelete()
  {
    if (parent::beforeDelete()) {
      $dir = Yii::getAlias('@images').'/gallery/reward/';
      if(file_exists($dir.$this->images)){
        unlink($dir.$this->images);
      }
      Yii::$app->session->setFlash('success', 'Файлы успешно удалены!');
      return true;
    } else {
      Yii::$app->session->setFlash('error', 'Внимание! Файлы по каким-то причинам не удалились!!!');
      return false;
    }
  }
}
