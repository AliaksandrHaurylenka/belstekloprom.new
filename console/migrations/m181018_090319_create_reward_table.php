<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reward`.
 */
class m181018_090319_create_reward_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('reward', [
            'id' => $this->primaryKey(),
            'images' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reward');
    }
}
