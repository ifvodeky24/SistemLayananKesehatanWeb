<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DokterPraktek;

/**
 * DokterPraktekSearch represents the model behind the search form about `app\models\DokterPraktek`.
 */
class DokterPraktekSearch extends DokterPraktek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dokter_praktek'], 'integer'],
            [['nama_dokter_praktek', 'kecamatan', 'kabupaten', 'alamat', 'foto', 'fasilitas', 'deskripsi'], 'safe'],
            [['latitude', 'longitute'], 'number'],
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
        $query = DokterPraktek::find();

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
            'id_dokter_praktek' => $this->id_dokter_praktek,
            'latitude' => $this->latitude,
            'longitute' => $this->longitute,
        ]);

        $query->andFilterWhere(['like', 'nama_dokter_praktek', $this->nama_dokter_praktek])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'fasilitas', $this->fasilitas])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
