<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_ puskesmas".
 *
 * @property int $id_puskesmas
 * @property string $nama_puskesmas
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $nomor_telp
 * @property string $foto
 * @property string $fasilitas
 * @property string $deskripsi
 * @property int $latitude
 * @property int $longitute
 */
class Puskesmas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_puskesmas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_puskesmas', 'alamat', 'kecamatan', 'kabupaten', 'nomor_telp','foto', 'fasilitas', 'deskripsi', 'latitude', 'longitute'], 'required'],
            [['alamat'], 'string'],
            [['latitude', 'longitute'], 'integer'],
            [['nama_puskesmas', 'fasilitas', 'deskripsi'], 'string', 'max' => 255],
            [['kecamatan', 'kabupaten'], 'string', 'max' => 100],
            [['nomor_telp'], 'string', 'max' => 15],
            [['foto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_puskesmas' => 'Id Puskesmas',
            'nama_puskesmas' => 'Nama Puskesmas',
            'alamat' => 'Alamat',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'nomor_telp' => 'Nomor Telp',
            'foto' => 'Foto',
            'fasilitas' => 'Fasilitas',
            'deskripsi' => 'Deskripsi',
            'latitude' => 'Latitude',
            'longitute' => 'Longitute',
        ];
    }
}
