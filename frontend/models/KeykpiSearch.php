<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Keykpi;

/**
 * KeykpiSearch represents the model behind the search form of `frontend\models\Keykpi`.
 */
class KeykpiSearch extends Keykpi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keyk_id', 'kpi_id', 'year', 'qarter', 'user_key', 'position', 'Crearted_by', 'Updated_by'], 'integer'],
            [['kpi_name', 'target', 'result', 'successkey', 'Created_at', 'Updated_at'], 'safe'],
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
        $query = Keykpi::find();

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
            'keyk_id' => $this->keyk_id,
            'kpi_id' => $this->kpi_id,
            'year' => $this->year,
            'qarter' => $this->qarter,
            'user_key' => $this->user_key,
            'position' => $this->position,
            'Created_at' => $this->Created_at,
            'Crearted_by' => $this->Crearted_by,
            'Updated_at' => $this->Updated_at,
            'Updated_by' => $this->Updated_by,
        ]);

        $query->andFilterWhere(['like', 'kpi_name', $this->kpi_name])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'successkey', $this->successkey]);

        return $dataProvider;
    }
}
