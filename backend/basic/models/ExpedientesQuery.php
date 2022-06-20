<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Expedientes]].
 *
 * @see Expedientes
 */
class ExpedientesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Expedientes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Expedientes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
