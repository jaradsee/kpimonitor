<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Typedocs;

/**
 * TypedocsSearch represents the model behind the search form of `app\models\Typedocs`.
 */
class TypedocsSearch extends Typedocs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DOCS_ID'], 'integer'],
            [['DOCS_NAME'], 'safe'],
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
        $query = Typedocs::find();

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
            'DOCS_ID' => $this->DOCS_ID,
        ]);

        $query->andFilterWhere(['like', 'DOCS_NAME', $this->DOSC_NAME]);

        return $dataProvider;
    }
}
