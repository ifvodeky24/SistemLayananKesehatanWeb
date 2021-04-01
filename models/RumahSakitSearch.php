<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RumahSakit;

/**
 * RumahSakitSearch represents the model behind the search form about `app\models\RumahSakit`.
 */
class RumahSakitSearch extends RumahSakit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rumah_sakit'], 'integer'],
            [['nama_rumah_sakit', 'kecamatan', 'kabupaten', 'alamat', 'nomor_telp', 'foto', 'fasilitas', 'deskripsi'], 'safe'],
            [['latitude', 'longitude'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RumahSakit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_rumah_sakit' => $this->id_rumah_sakit,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'nama_rumah_sakit', $this->nama_rumah_sakit])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nomor_telp', $this->nomor_telp])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'fasilitas', $this->fasilitas])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
