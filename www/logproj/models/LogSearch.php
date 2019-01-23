<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * LogSearch represents the model behind the search form of `app\models\Log`.
 */
class LogSearch extends Log
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
        ];
    }

    /**
     * @return array
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
        $query = Log::find();
            //->select(['l.ts', 'l.type', 'l.message']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 100
            ],
            'sort' => [
                'attributes' => [
                    'ts',
                ]
            ]
        ]);

        /**
         * Я впринципе понял что в задании при больших объемах надо сделать выборку сначала ID по заданным условиям
         * а уже по ID вытащить полные записи, но я очень устал, буду рад обсудить это устно
         */
//        $offset = ((int) Yii::$app->request->getQueryParam('page', 1) - 1) * 100;
//        $table = Log::tableName();
//        $sort = $dataProvider->getSort();
//        $query->from("(SELECT id FROM $table ORDER BY id LIMIT 100 OFFSET $offset) o");
//        $query->innerJoin('log l', 'l.id = o.id');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'l.type' => $this->type,
        ]);


        return $dataProvider;
    }
}