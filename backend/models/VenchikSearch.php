<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Venchik;

/**
 * VenchikSearch represents the model behind the search form about `common\models\Venchik`.
 */
class VenchikSearch extends Venchik
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_venchik'], 'integer'],
            [['venchik_ru', 'venchik_en', 'venchik_id_for_code', 'img', 'img_1'], 'safe'],
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
        $query = Venchik::find();

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
            'id_venchik' => $this->id_venchik,
        ]);

        $query->andFilterWhere(['like', 'venchik_ru', $this->venchik_ru])
            ->andFilterWhere(['like', 'venchik_en', $this->venchik_en])
            ->andFilterWhere(['like', 'venchik_id_for_code', $this->venchik_id_for_code])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'img_1', $this->img_1]);

        return $dataProvider;
    }
}
