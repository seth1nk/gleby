<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Marshrut;

/**
 * MarshrutSearch represents the model behind the search form of `common\models\Marshrut`.
 */
class MarshrutSearch extends Marshrut
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_маршрута'], 'integer'],
            [['Пункт_назначения', 'Расст_до_пункта'], 'safe'],
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
        $query = Marshrut::find();

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
            'Код_маршрута' => $this->Код_маршрута,
        ]);

        $query->andFilterWhere(['like', 'Пункт_назначения', $this->Пункт_назначения])
            ->andFilterWhere(['like', 'Расст_до_пункта', $this->Расст_до_пункта]);

        return $dataProvider;
    }
}
