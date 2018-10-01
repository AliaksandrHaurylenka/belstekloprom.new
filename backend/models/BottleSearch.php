<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Bottle;

/**
 * BottleSearch represents the model behind the search form about `common\models\Bottle`.
 */
class BottleSearch extends Bottle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'volume', 'number', 'full_naliv', 'massa'], 'integer'],
            [['type', 'venchik', 'venchik_en', 'dev_1', 'dev_2', 'name_1', 'name_2', 'dev_naliv', 'dev_massa', 'status'], 'safe'],
            [['height', 'diameter'], 'number'],
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
        $query = Bottle::find();

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
            'id' => $this->id,
            'volume' => $this->volume,
            'number' => $this->number,
            'height' => $this->height,
            'diameter' => $this->diameter,
            'full_naliv' => $this->full_naliv,
            'massa' => $this->massa,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'venchik', $this->venchik])
            ->andFilterWhere(['like', 'venchik_en', $this->venchik_en])
            ->andFilterWhere(['like', 'dev_1', $this->dev_1])
            ->andFilterWhere(['like', 'dev_2', $this->dev_2])
            ->andFilterWhere(['like', 'name_1', $this->name_1])
            ->andFilterWhere(['like', 'name_2', $this->name_2])
            ->andFilterWhere(['like', 'dev_naliv', $this->dev_naliv])
            ->andFilterWhere(['like', 'dev_massa', $this->dev_massa])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
