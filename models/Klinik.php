<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_klinik".
 *
 * @property int $id_klinik
 * @property string $nama_klinik
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $alamat
 * @property string $nomor_telp
 * @property string $foto
 * @property string $fasilitas
 * @property string $deskripsi
 * @property float $latitude
 * @property float $longitute
 */
class Klinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_klinik', 'kecamatan', 'kabupaten', 'alamat', 'nomor_telp', 'foto', 'fasilitas', 'deskripsi', 'latitude', 'longitute'], 'required'],
            [['alamat'], 'string'],
            [['latitude', 'longitute'], 'number'],
            [['nama_klinik', 'kecamatan', 'kabupaten', 'foto'], 'string', 'max' => 100],
            [['nomor_telp'], 'string', 'max' => 12],
            [['fasilitas', 'deskripsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_klinik' => 'Id Klinik',
            'nama_klinik' => 'Nama Klinik',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'alamat' => 'Alamat',
            'nomor_telp' => 'Nomor Telp',
            'foto' => 'Foto',
            'fasilitas' => 'Fasilitas',
            'deskripsi' => 'Deskripsi',
            'latitude' => 'Latitude',
            'longitute' => 'Longitute',
        ];
    }
}
