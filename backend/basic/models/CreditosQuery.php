<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Creditos]].
 *
 * @see Creditos
 */
class CreditosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Creditos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Creditos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
