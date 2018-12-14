<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KpiInput;

/**
 * KpiInputSearch represents the model behind the search form of `frontend\models\KpiInput`.
 */
class KpiInputSearch extends KpiInput
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KPI_ID', 'STRATEGIC', 'ISSUES', 'GOAL', 'SUCESS'], 'integer'],
            [['KPI_NAME', 'KPI_TEMPLATE', 'TARGET', 'RESULT', 'KPI', 'DATE_RECORD', 'BUD_YEAR', 'PROJECT', 'OWNER', 'Created_by', 'Updated_by'], 'safe'],
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
        $query = KpiInput::find();

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
            'KPI_ID' => $this->KPI_ID,
            'STRATEGIC' => $this->STRATEGIC,
            'ISSUES' => $this->ISSUES,
            'GOAL' => $this->GOAL,
            'SUCESS' => $this->SUCESS,
            'DATE_RECORD' => $this->DATE_RECORD,
        ]);

        $query->andFilterWhere(['like', 'KPI_NAME', $this->KPI_NAME])
            ->andFilterWhere(['like', 'KPI_TEMPLATE', $this->KPI_TEMPLATE])
            ->andFilterWhere(['like', 'TARGET', $this->TARGET])
            ->andFilterWhere(['like', 'RESULT', $this->RESULT])
            ->andFilterWhere(['like', 'KPI', $this->KPI])
            ->andFilterWhere(['like', 'BUD_YEAR', $this->BUD_YEAR])
            ->andFilterWhere(['like', 'PROJECT', $this->PROJECT])
            ->andFilterWhere(['like', 'OWNER', $this->OWNER])
            ->andFilterWhere(['like', 'Created_by', $this->Created_by])
            ->andFilterWhere(['like', 'Updated_by', $this->Updated_by]);

        return $dataProvider;
    }
}
