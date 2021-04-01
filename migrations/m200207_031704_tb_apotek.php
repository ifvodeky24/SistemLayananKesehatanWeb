<?php

use yii\db\Migration;

/**
 * Class m200207_031704_tb_apotek
 */
class m200207_031704_tb_apotek extends Migration
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
                'id_apotek'=> $this->integer()->comment('Id Apotek'),
                'nama_apotek'=> $this->string()->comment('Nama Apotek'),
                'kecamatan'=> $this->string()->comment('Kecamatan'),
                'kelurahan'=> $this->string()->comment('Kelurahan'),
                'alamat'=> $this->string()->comment('Alamat'),
                'nomor_telp'=> $this->string()->comment('Nomor Telp'),
                'foto'=> $this->string()->comment('Foto'),
                'fasilitas'=> $this->string()->comment('Fasilitas'),
                'deskripsi'=> $this->string()->comment('Deskripsi'),
                'latitude'=> $this->string()->comment('Latitude'),
                'longitute'=> $this->string()->comment('Longitute'),
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
        echo "m200207_031704_tb_apotek cannot be reverted.\n";

        return false;
    }
    */
}
