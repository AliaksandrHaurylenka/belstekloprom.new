<?php

namespace common\models;

use Yii;
use yii\base\Security;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $link
 * @property string $img
 * @property string $content
 */
class News extends \yii\db\ActiveRecord
{
  public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'content'], 'required'],
            [['content'], 'string'],
            [['link'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 50],
            [['imageFile'], 'file',
                'skipOnEmpty' => true,
                'extensions' => ['jpg'],
                'maxSize' => 1024*1024,
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
            'link' => 'Ссылка на новость',
            'img' => 'Фото',
            'content' => 'Текст',
            'title' => 'Название',
        ];
    }


  public function upload()
  {
    if ($this->validate()) {

      $random = new Security();
      $file = $this->imageFile;
      $filename = $random->generateRandomString(10);
      $this->img = $filename.'.'.$file->extension;
      $file->saveAs(Yii::getAlias('@images').'/news/'.$filename.'.'.$file->extension);
      $this->save(false);

      return true;
    } else {
      return false;
    }
  }


  public function edit()
  {
    $random = new Security();
    $filename = $random->generateRandomString(10);
    $dir = Yii::getAlias('@images').'/news/';

    if ($this->validate()) {
      $img = $this->imageFile;
      if(!empty($img)){
        if(file_exists($dir.$this->img)){
          unlink($dir.$this->img);
        }
        $this->img = $filename.'.'.$img->extension;
        $img->saveAs(Yii::getAlias('@images').'/news/'.$filename.'.'.$img->extension);
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
      $dir = Yii::getAlias('@images').'/news/';
      if(file_exists($dir.$this->img)){
        unlink($dir.$this->img);
      }
      Yii::$app->session->setFlash('success', 'Запись успешно удалена!');
      return true;
    } else {
      Yii::$app->session->setFlash('error', 'Внимание! Файлы по каким-то причинам не удалились!!!');
      return false;
    }
  }
}
