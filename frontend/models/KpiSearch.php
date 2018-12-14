<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kpi;

/**
 * KpiSearch represents the model behind the search form of `frontend\models\Kpi`.
 */
class KpiSearch extends Kpi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kpi_id', 'stratetgic', 'issues', 'goal', 'sucess'], 'integer'],
            [['kpi_name', 'kpi_template', 'target', 'result', 'kpi', 'date_record', 'bud_year', 'project', 'owner', 'Created_by', 'Updated_by'], 'safe'],
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
        $query = Kpi::find();

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
            'kpi_id' => $this->kpi_id,
            'stratetgic' => $this->stratetgic,
            'issues' => $this->issues,
            'goal' => $this->goal,
            'sucess' => $this->sucess,
            'date_record' => $this->date_record,
        ]);

        $query->andFilterWhere(['like', 'kpi_name', $this->kpi_name])
            ->andFilterWhere(['like', 'kpi_template', $this->kpi_template])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'kpi', $this->kpi])
            ->andFilterWhere(['like', 'bud_year', $this->bud_year])
            ->andFilterWhere(['like', 'project', $this->project])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'Created_by', $this->Created_by])
            ->andFilterWhere(['like', 'Updated_by', $this->Updated_by]);

        return $dataProvider;
    }
}
