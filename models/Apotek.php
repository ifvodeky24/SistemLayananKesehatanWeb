<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_apotek".
 *
 * @property int $id_ apotek
 * @property string $nama_ apotek
 * @property string $kecamatan
 * @property string $kabupaten
 * @property int $alamat
 * @property string $foto
 * @property string $fasilitas
 * @property string $deskripsi
 * @property float $latitude
 * @property float $longitude
 */
class Apotek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_apotek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_apotek', 'kecamatan', 'kabupaten', 'alamat', 'foto', 'fasilitas', 'deskripsi', 'latitude', 'longitude'], 'required'],
            [['alamat'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['nama_ apotek', 'foto'], 'string', 'max' => 100],
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
            'id_apotek' => 'Id Apotek',
            'nama_apotek' => 'Nama Apotek',
            'kecamatan' => 'Kecamatan',
            'kabupaten' => 'Kabupaten',
            'alamat' => 'Alamat',
            'foto' => 'Foto',
            'fasilitas' => 'Fasilitas',
            'deskripsi' => 'Deskripsi',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }
}
