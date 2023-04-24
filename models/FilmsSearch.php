<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Films;

/**
 * FilmsSearch represents the model behind the search form of `app\models\Films`.
 */
class FilmsSearch extends Films
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idGalery'], 'integer'],
            [['title', 'imagePost', 'imagePoster', 'imageBlock', 'text', 'imageFilm', 'imageGalery'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Films::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idGalery' => $this->idGalery,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'imagePost', $this->imagePost])
            ->andFilterWhere(['like', 'imagePoster', $this->imagePoster])
            ->andFilterWhere(['like', 'imageBlock', $this->imageBlock])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'imageFilm', $this->imageFilm])
            ->andFilterWhere(['like', 'imageGalery', $this->imageGalery]);

        return $dataProvider;
    }
}
