<?php

use yii\db\Migration;

/**
 * Class m200207_033042_tb_dokter_praktek
 */
class m200207_033042_tb_dokter_praktek extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_dokter_praktek',
            [
                'id_dokter_praktek'=> 'pk',
                'nama_dokter_praktek'=> $this->string(),
                'kecamatan'=> $this->string(100),
                'kelurahan'=> $this->string(100),
                'alamat'=> $this->text(),
                'nomor_telp'=> $this->string(12),
                'foto'=> $this->string(),
                'fasilitas'=> $this->string(),
                'deskripsi'=> $this->text(),
                'latitude'=> $this->double(),
                'longitute'=> $this->double(),
            ],$tableOptions
        );
    }
        

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_dokter_praktek');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_033042_tb_dokter_praktek cannot be reverted.\n";

        return false;
    }
    */
}
