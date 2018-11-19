<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m181116_105239_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'link' => $this->string()->notNull(),
            'img' => $this->string(20)->notNull(),
            'content' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
