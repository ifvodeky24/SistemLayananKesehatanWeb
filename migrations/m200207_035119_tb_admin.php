<?php

use yii\db\Migration;

/**
 * Class m200207_035119_tb_admin
 */
class m200207_035119_tb_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_admin',
            [
                'id'=> 'pk',
                'fullname'=> $this->string(),
                'email'=> $this->string(100),
                'username'=> $this->string(100),
                'password'=> $this->string(100),
            ],$tableOptions
        );
    }
        

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_admin');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_035119_tb_admin cannot be reverted.\n";

        return false;
    }
    */
}
