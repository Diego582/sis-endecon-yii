<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Beneficiarios]].
 *
 * @see Beneficiarios
 */
class BeneficiariosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Beneficiarios[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Beneficiarios|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
