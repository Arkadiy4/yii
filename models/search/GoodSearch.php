<?php
/**
 * Created by PhpStorm.
 * User: cay
 * Date: 17.04.2019
 * Time: 22:16
 */

namespace app\models\search;

use app\models\Good;
use yii\data\ActiveDataProvider;

class GoodSearch extends Good
{
    public function search(array $params){
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }


    // grid filtering conditions
    $query->andFilterWhere([
    'id' => $this->id,
    'price' => $this->price,
    'amount' => $this->amount,
    'category_id' => $this->category_id,
    'status' => $this->status,
    'created_at' => $this->created_at,
    'updated_at' => $this->updated_at,
    ]);

     $query->andFilterWhere(['like', 'title', $this->title])
         ->andFilterWhere(['like', 'description', $this->description]);


        return $dataProvider;
    }
}