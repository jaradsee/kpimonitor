<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Typekmdocs;

/**
 * TypekmdocsSearch represents the model behind the search form of `frontend\models\Typekmdocs`.
 */
class TypekmdocsSearch extends Typekmdocs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KMDOCS_ID'], 'integer'],
            [['KMDOCS_NAME'], 'safe'],
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
        $query = Typekmdocs::find();

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
            'KMDOCS_ID' => $this->KMDOCS_ID,
        ]);

        $query->andFilterWhere(['like', 'KMDOCS_NAME', $this->KMDOCS_NAME]);

        return $dataProvider;
    }
}
