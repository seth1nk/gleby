<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tovar;

/**
 * TovarSearch represents the model behind the search form of `common\models\Tovar`.
 */
class TovarSearch extends Tovar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_товара'], 'integer'],
            [['Наим_товара', 'КолBо_товара', 'Цена_товара'], 'safe'],
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
        $query = Tovar::find();

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
            'Код_товара' => $this->Код_товара,
        ]);

        $query->andFilterWhere(['like', 'Наим_товара', $this->Наим_товара])
            ->andFilterWhere(['like', 'КолBо_товара', $this->КолBо_товара])
            ->andFilterWhere(['like', 'Цена_товара', $this->Цена_товара]);

        return $dataProvider;
    }
}
