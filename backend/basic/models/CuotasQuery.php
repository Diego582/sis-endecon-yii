<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cuotas]].
 *
 * @see Cuotas
 */
class CuotasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cuotas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cuotas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
