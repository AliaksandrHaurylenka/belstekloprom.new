<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m170601_083737_create_gallery_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'photo_name' => $this->string(30)->notNull(),
            'title' => $this->string(100)->notNull(),
            'alt' => $this->string(100)->notNull(),
            'cat_item' => $this->integer(2)->notNull(),
        ]);

      $this->batchInsert('gallery',
        [
          'id', 'photo_name', 'title', 'alt', 'cat_item'
        ],

        [
          [1, 'otdel_otk.jpg', 'Отдел технического контроля БелСтеклоПром', 'ОТК', 3],
          [2, 'izuchenie_braka.jpg', 'Изучение брака стеклянной бутылки', 'ОТК', 3],
          [3, 'vzveshivanie_shihti.jpg', 'Лаборатория БелСтеклоПром', 'Лаборатория', 8],
          [4, 'otdel_sbita.jpg', 'Отдел сбыта БелСтеклоПром', 'Сбыт', 1],
          [5, 'gidro_ispitanie.jpg', 'Испытание на гидростатическое давление стеклянной бутылки', 'ОТК', 3],
          [6, 'szatie_ispitanie.jpg', 'Испытание на сопротивление сжатию бутылки', 'ОТК', 3],
          [7, 'izmerenie_tolschini.jpg', 'Измерение толщины упрочняющего покрытия на корпусе стеклянной бутылки', 'ОТК', 3]
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('gallery');
    }
}
