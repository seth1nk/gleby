<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Garaj;

/**
 * GarajSearch represents the model behind the search form of `common\models\Garaj`.
 */
class GarajSearch extends Garaj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_авто'], 'integer'],
            [['Тип_поломки', 'Вид_запчасти', 'Цена_запчасти', 'Дата_начала_ремонта', 'Дата_конца_ремонта'], 'safe'],
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
        $query = Garaj::find();

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
            'Код_авто' => $this->Код_авто,
        ]);

        $query->andFilterWhere(['like', 'Тип_поломки', $this->Тип_поломки])
            ->andFilterWhere(['like', 'Вид_запчасти', $this->Вид_запчасти])
            ->andFilterWhere(['like', 'Цена_запчасти', $this->Цена_запчасти])
            ->andFilterWhere(['like', 'Дата_начала_ремонта', $this->Дата_начала_ремонта])
            ->andFilterWhere(['like', 'Дата_конца_ремонта', $this->Дата_конца_ремонта]);

        return $dataProvider;
    }
}
