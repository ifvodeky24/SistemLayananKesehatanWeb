<?php

use yii\db\Migration;

/**
 * Class m200207_032103_tb_puskemas
 */
class m200207_032103_tb_puskemas extends Migration
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
        echo "m200207_032103_tb_puskemas cannot be reverted.\n";

        return false;
    }
    */
}
