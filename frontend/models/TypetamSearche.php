<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Typeteam;

/**
 * TypetamSearche represents the model behind the search form of `app\models\Typeteam`.
 */
class TypetamSearche extends Typeteam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TEAM_ID'], 'integer'],
            [['TEAM_NAME'], 'safe'],
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
        $query = Typeteam::find();

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
            'TEAM_ID' => $this->TEAM_ID,
        ]);

        $query->andFilterWhere(['like', 'TEAM_NAME', $this->TEAM_NAME]);

        return $dataProvider;
    }
}
