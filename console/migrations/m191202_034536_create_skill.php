<?php

use yii\db\Migration;

/**
 * Class m191202_034536_create_skill
 */
class m191202_034536_create_skill extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('skill', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'score' =>$this->integer(11),
            'maxscore' =>$this->integer(11),
            'chat_type' =>$this->string(),
            'user_id'=>$this->integer(),
            'date_create' => $this->integer(11),
            'date_update' => $this->integer(11),
            'status'=>$this->boolean(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('skill');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034536_create_skill cannot be reverted.\n";

        return false;
    }
    */
}
