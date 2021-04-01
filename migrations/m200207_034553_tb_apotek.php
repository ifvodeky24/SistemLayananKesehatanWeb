<?php

use yii\db\Migration;

/**
 * Class m200207_034553_tb_apotek
 */
class m200207_034553_tb_apotek extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_apotek',
            [
                'id_apotek'=> 'pk',
                'nama_apotek'=> $this->string(),
                'kecamatan'=> $this->string(100),
                'kelurahan'=> $this->string(100),
                'alamat'=> $this->text(),
                'nomor_telp'=> $this->string(12),
                'foto'=> $this->string(),
                'fasilitas'=> $this->string(),
                'deskripsi'=> $this->text(),
                'latitude'=> $this->double(),
                'longitude'=> $this->double(),
            ],$tableOptions
        );
    }
        

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_apotek');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_034553_tb_apotek cannot be reverted.\n";

        return false;
    }
    */
}
