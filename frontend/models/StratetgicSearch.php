<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Stratetgic;

/**
 * StratetgicSearch represents the model behind the search form of `frontend\models\Stratetgic`.
 */
class StratetgicSearch extends Stratetgic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STRAT_ID'], 'integer'],
            [['STRAT_NAME'], 'safe'],
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
        $query = Stratetgic::find();

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
            'STRAT_ID' => $this->STRAT_ID,
        ]);

        $query->andFilterWhere(['like', 'STRAT_NAME', $this->STRAT_NAME]);

        return $dataProvider;
    }
}
