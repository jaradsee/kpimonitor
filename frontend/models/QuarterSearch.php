<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Quarter;

/**
 * QuarterSearch represents the model behind the search form of `frontend\models\Quarter`.
 */
class QuarterSearch extends Quarter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['QUARTER_ID'], 'integer'],
            [['FISCAL_YEAR', 'QUARTER_NAME'], 'safe'],
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
        $query = Quarter::find();

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
            'QUARTER_ID' => $this->QUARTER_ID,
        ]);

        $query->andFilterWhere(['like', 'FISCAL_YEAR', $this->FISCAL_YEAR])
            ->andFilterWhere(['like', 'QUARTER_NAME', $this->QUARTER_NAME]);

        return $dataProvider;
    }
}
