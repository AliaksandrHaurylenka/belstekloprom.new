<?php

use yii\db\Migration;

/**
 * Handles the creation of table `venchik`.
 */
class m170608_094639_create_venchik_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('venchik', [
            'id_venchik' => $this->primaryKey(),
            'venchik_ru' => $this->string(12)->notNull(),
            'venchik_en' => $this->string(12)->notNull(),
            'venchik_id_for_code' => $this->string(12)->notNull(),
            'img' => $this->string(50)->notNull(),
            'img_1' => $this->string(50)->notNull(),

        ]);

      $this->batchInsert('venchik',
        [
          'id_venchik', 'venchik_ru', 'venchik_en', 'venchik_id_for_code', 'img', 'img_1'
        ],

        [
          [1, 'КПНв', 'kpnv', 'kpnv', 'kpnv.png', 'kpnv_1.png'],
          [2, 'КПНн', 'kpnn', 'kpnn', 'kpnn.png', 'kpnn_1.png'],
          [3, 'ВКП', 'vkp', 'vkp', 'vkp.png', 'vkp_1.png'],
          [4, 'ВКП-1', 'vkp', 'vkp-1', 'vkp-1.png', 'vkp-1_1.png'],
          [5, 'ВКП-2', 'vkp', 'vkp-2', 'vkp-2.png', 'vkp-2_1.png'],
          [6, 'К', 'other', 'k', 'k.png', 'k_1.png'],
          [7, 'Ш', 'other', 'sh', 'sh.png', 'sh_1.png'],
          [8, 'В-28-1', 'other', 'v-28-1', 'v-28-1.png', 'v-28-1_1.png'],
          [9, 'П-29-А', 'other', 'p-29-a', 'p-29-a.png', 'p-29-a_1.png'],
          [10, 'П-29-Б', 'other', 'p-29-b', 'p-29-b.png', 'p-29-b_1.png']
        ]);
    }



    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('venchik');
    }
}
