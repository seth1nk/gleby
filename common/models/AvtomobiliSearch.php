<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Avtomobili;

/**
 * AvtomobiliSearch represents the model behind the search form of `common\models\Avtomobili`.
 */
class AvtomobiliSearch extends Avtomobili
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Код_авто'], 'integer'],
            [['Регистрационный_N_авто', 'Назв_авто', 'Год_выпуска_авто', 'Пробег', 'Категория'], 'safe'],
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
        $query = Avtomobili::find();

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

        $query->andFilterWhere(['like', 'Регистрационный_N_авто', $this->Регистрационный_N_авто])
            ->andFilterWhere(['like', 'Назв_авто', $this->Назв_авто])
            ->andFilterWhere(['like', 'Год_выпуска_авто', $this->Год_выпуска_авто])
            ->andFilterWhere(['like', 'Пробег', $this->Пробег])
            ->andFilterWhere(['like', 'Категория', $this->Категория]);

        return $dataProvider;
    }
}
