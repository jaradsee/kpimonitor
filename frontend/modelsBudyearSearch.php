<?php

namespace frontend;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Budyear;

/**
 * modelsBudyearSearch represents the model behind the search form of `frontend\models\Budyear`.
 */
class modelsBudyearSearch extends Budyear
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BUDYEAR_ID'], 'integer'],
            [['BUDYEAR_NAME'], 'safe'],
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
        $query = Budyear::find();

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
            'BUDYEAR_ID' => $this->BUDYEAR_ID,
        ]);

        $query->andFilterWhere(['like', 'BUDYEAR_NAME', $this->BUDYEAR_NAME]);

        return $dataProvider;
    }
}
