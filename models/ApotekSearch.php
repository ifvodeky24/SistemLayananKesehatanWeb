<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Apotek;

/**
 * ApotekSearch represents the model behind the search form about `app\models\Apotek`.
 */
class ApotekSearch extends Apotek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_apotek'], 'integer'],
            [['nama_apotek', 'kecamatan', 'kabupaten', 'alamat', 'foto', 'fasilitas', 'deskripsi'], 'safe'],
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
        $query = Apotek::find();

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
            'id_apotek' => $this->id_apotek,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'nama_apotek', $this->nama_apotek])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'fasilitas', $this->fasilitas])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
