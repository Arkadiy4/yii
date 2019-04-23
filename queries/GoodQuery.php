<?php
/**
 * Created by PhpStorm.
 * User: cay
 * Date: 19.04.2019
 * Time: 7:47
 */

namespace app\queries;

use yii\db\ActiveQuery;

class GoodQuery extends ActiveQuery
{
    /**
     * Поиск товара по статусу
     *
     * @param string status
     *
     * @return GoodQuery
     */
    public function findByStatus(string $status)
    {
        return $this->andWhere(['status' => $status]);
    }
}