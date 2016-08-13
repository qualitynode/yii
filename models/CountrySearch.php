<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Country;

/**
 * CountrySearch represents the model behind the search form about `app\models\Country`.
 */
class CountrySearch extends Country
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'safe'],
            [['population'], 'integer'],
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
     * Creates data provider instance with search query applied     用提供的搜索语句来创造数据提供
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Country::find();

        // add conditions that should always apply here 增加条件必须提供

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails  验证失败的时候，如果不想返回任何记录就反注释下一行
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions    过滤条件
        $query->andFilterWhere([
            'population' => $this->population,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
