<?php

use yii\db\Migration;

/**
 * Class m191202_034835_create_chat_layout
 */
class m191202_034835_create_layout extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('layout', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'score' =>$this->integer(11),
            'file' =>$this->string(),
            'user_id'=>$this->integer(),
            'date_create' => $this->integer(11),
            'date_update' => $this->integer(11),
            'status'=>$this->boolean(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('layout');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034835_create_chat_layout cannot be reverted.\n";

        return false;
    }
    */
}
