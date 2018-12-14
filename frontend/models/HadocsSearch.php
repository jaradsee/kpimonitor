<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Hadocs;

/**
 * ceSearch represents the model behind the search form about `app\models\ce`.
 */
class HadocsSearch extends Hadocs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','typeteam','typedocs' ], 'integer'],
            [['ref', 'title', 'uploader','covenant', 'docs', 'upload_date', 'end_date', 'success_date', 'create_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Hadocs::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'upload_date' => $this->upload_date,
            'typedocs' => $this->typedocs,
            'typeteam' => $this->typeteam,
            'end_date' => $this->end_date,
            'success_date' => $this->success_date,
            'create_date' => $this->create_date,
            
        ]);

        $query->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'uploader', $this->uploader])
            ->andFilterWhere(['like', 'covenant', $this->covenant])
            ->andFilterWhere(['like', 'docs', $this->docs]);
           
            
            

        return $dataProvider;
    }
}
