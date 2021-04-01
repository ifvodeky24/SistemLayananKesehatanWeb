<?php

use yii\db\Migration;

/**
 * Class m200207_035401_tb_puskesmas
 */
class m200207_035401_tb_puskesmas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_puskesmas',
            [
                'id_puskesmas'=> 'pk',
                'nama_puskesmas'=> $this->string(),
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
        $this->dropTable('tb_puskesmas');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_035401_tb_puskesmas cannot be reverted.\n";

        return false;
    }
    */
}
