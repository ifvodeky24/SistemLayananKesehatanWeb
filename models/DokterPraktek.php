<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_dokter_praktek".
 *
 * @property int $id_ dokter_praktek
 * @property string $nama_dokter_praktek
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
class DokterPraktek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dokter_praktek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter_praktek', 'kecamatan', 'kabupaten', 'alamat', 'foto', 'fasilitas', 'deskripsi', 'latitude', 'longitute'], 'required'],
            [['alamat'], 'string'],
            [['latitude', 'longitute'], 'number'],
            [['nama_dokter_praktek', 'foto'], 'string', 'max' => 100],
            [['kecamatan', 'kabupaten'], 'string', 'max' => 100],
            [['fasilitas', 'deskripsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter_praktek' => 'Id Dokter Praktek',
            'nama_dokter_praktek' => 'Nama Dokter Praktek',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'alamat' => 'Alamat',
            'foto' => 'Foto',
            'fasilitas' => 'Fasilitas',
            'deskripsi' => 'Deskripsi',
            'latitude' => 'Latitude',
            'longitute' => 'Longitute',
        ];
    }
}
