<?php
namespace app\widgets;

use yii\base\InvalidConfigException;
use yii\db\QueryInterface;
use app\models\Log;

class LogDataProvider extends \yii\data\ActiveDataProvider
{
    protected function prepareModels()
    {
        if (!$this->query instanceof QueryInterface) {
            throw new InvalidConfigException('The "query" property must be an instance of a class that implements the QueryInterface e.g. yii\db\Query or its subclasses.');
        }
        $query = clone $this->query;

        if (($sort = $this->getSort()) !== false) {
            $query->addOrderBy($sort->getOrders());
        }

        return $query->all($this->db);
    }

    protected function prepareTotalCount()
    {
        return (int) Log::find()->count();
    }
}
