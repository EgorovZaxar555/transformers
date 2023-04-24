<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Characters;

/**
 * CharactersSearch represents the model behind the search form of `app\models\Characters`.
 */
class CharactersSearch extends Characters
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idUser', 'idCategory', 'prev_id', 'next_id'], 'integer'],
            [['name', 'image', 'text', 'imagePost', 'current'], 'safe'],
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
        $query = Characters::find();

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
            'idUser' => $this->idUser,
            'idCategory' => $this->idCategory,
            'prev_id' => $this->prev_id,
            'next_id' => $this->next_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'imagePost', $this->imagePost])
            ->andFilterWhere(['like', 'current', $this->current]);

        return $dataProvider;
    }
}
