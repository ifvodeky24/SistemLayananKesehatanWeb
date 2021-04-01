<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_rumahsakit".
 *
 * @property int $id_ rumah_sakit
 * @property string $nama_ rumah_sakit
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $nomor_telp
 * @property string $foto
 * @property string $fasilitas
 * @property string $deskripsi
 * @property float $latitude
 * @property float $longitude
 */
class Rumahsakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_rumahsakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_rumah_sakit', 'alamat', 'kecamatan', 'kabupaten', 'nomor_telp', 'foto', 'fasilitas', 'deskripsi', 'latitude', 'longitude'], 'required'],
            [['alamat'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['nama_rumah_sakit', 'kecamatan', 'kabupaten', 'foto'], 'string', 'max' => 100],
            [['nomor_telp'], 'string', 'max' => 15],
            [['fasilitas', 'deskripsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rumah_sakit' => 'Id Rumah Sakit',
            'nama_rumah_sakit' => 'Nama Rumah Sakit',
            'alamat' => 'Alamat',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'nomor_telp' => 'Nomor Telp',
            'foto' => 'Foto',
            'fasilitas' => 'Fasilitas',
            'deskripsi' => 'Deskripsi',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }
}
