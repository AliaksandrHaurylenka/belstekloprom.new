<?php

use yii\db\Migration;

/**
 * Handles the creation of table `save_message`.
 */
class m171115_110149_create_save_message_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('save_message', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'email' => $this->string(50)->notNull(),
            'phone' => $this->string(25),
            'subject' => $this->string(30)->notNull(),
            'body' => $this->text()->notNull(),
            'email_recipient' => $this->string(50)->notNull(),
            'date' => $this->timestamp('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('save_message');
    }
}
