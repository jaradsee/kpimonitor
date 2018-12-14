<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Goal;

/**
 * GoalSearch represents the model behind the search form of `frontend\models\Goal`.
 */
class GoalSearch extends Goal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GOAL_ID'], 'integer'],
            [['GOAL_NAME'], 'safe'],
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
        $query = Goal::find();

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
            'GOAL_ID' => $this->GOAL_ID,
        ]);

        $query->andFilterWhere(['like', 'GOAL_NAME', $this->GOAL_NAME]);

        return $dataProvider;
    }
}
