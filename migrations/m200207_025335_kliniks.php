<?php

use yii\db\Schema;
use yii\db\Migration;

class m200207_025335_kliniks extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            'tb_klinik',
            [
                'id_klinik'=> $this->integer()->comment('Id Klinik'),
                'nama_klinik'=> $this->string()->comment('Nama Klinik'),
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

    public function safeDown()
    {
        $this->dropTable('tb_klinik');
    }
}
