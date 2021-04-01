<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Puskesmas;

/**
 * PuskesmasSearch represents the model behind the search form about `app\models\Puskesmas`.
 */
class PuskesmasSearch extends Puskesmas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_puskesmas'], 'integer'],
            [['nama_puskesmas', 'kecamatan', 'kabupaten', 'alamat', 'nomor_telp', 'foto', 'fasilitas', 'deskripsi'], 'safe'],
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
        $query = Puskesmas::find();

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
            'id_puskesmas' => $this->id_puskesmas,
            'latitude' => $this->latitude,
            'longitute' => $this->longitute,
        ]);

        $query->andFilterWhere(['like', 'nama_puskesmas', $this->nama_puskesmas])
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
