<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use backend\models\UploadImages;

/**
 * This is the model class for table "reward".
 *
 * @property integer $id
 * @property string $images
 */
class Reward extends ActiveRecord
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
            // 'id' => 'ID',
            'images' => 'Награды',
        ];
    }


    public function upload()
    {
      if ($this->validate()) {
        $img = $this->imageFile;
        $this->images = $img->baseName.'.'.$img->extension;
        $img->saveAs(Yii::getAlias('@images').'/gallery/reward/'.$img->baseName.'.'.$img->extension);
        $this->save(false);
        return true;
      } else {
        return false;
      }
    }

  public function getImages()
  {
    $img = $this->imageFile->name;
    return $img;
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
