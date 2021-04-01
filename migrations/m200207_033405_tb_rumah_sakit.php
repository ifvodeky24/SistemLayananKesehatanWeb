<?php

use yii\db\Migration;

/**
 * Class m200207_033405_tb_rumah_sakit
 */
class m200207_033405_tb_rumah_sakit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_rumahsakit',
            [
                'id_rumah_sakit'=> 'pk',
                'nama_rumah_sakit'=> $this->string(),
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
        $this->dropTable('tb_rumahsakit');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_033405_tb_rumah_sakit cannot be reverted.\n";

        return false;
    }
    */
}
