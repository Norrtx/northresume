<?php

use yii\db\Migration;

/**
 * Class m191202_034433_create_profile
 */
class m191202_034433_create_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'nameTH' =>$this->string(),
            'nameEN' =>$this->string(),
            'gender' =>$this->string(),
            'birthday' => $this->integer(),
            'Age' =>$this->string(),
            'city' => $this->string(),
            'state' => $this->string(),
            'zip' => $this->integer(),
            'latitude' => $this->decimal(10,7),
            'longitude' => $this->decimal(10,7),
            'mail' => $this->string(),
            'facebook' => $this->string(),
            'link' => $this->string(),
            'user_id'=>$this->integer(),
            'pro_img' =>$this->string(),
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
        $this->dropTable('profile');
       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191202_034433_create_profile cannot be reverted.\n";

        return false;
    }
    */
}
